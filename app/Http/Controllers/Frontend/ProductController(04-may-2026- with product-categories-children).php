<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\ProductCategory;
use App\Models\shippingMethod;
use App\Models\District;

class ProductController extends Controller
{
    /**
     * Attach product counts to categories and their children recursively
     */
    private function attachProductCounts($categories, $counts)
    {
        foreach ($categories as $category) {
            // Set count for this category
            $category->product_count = $counts[$category->id] ?? 0;

            // Calculate total count including children
            $totalCount = $category->product_count;

            if ($category->children) {
                $this->attachProductCounts($category->children, $counts);

                // Add children's counts
                foreach ($category->children as $child) {
                    $totalCount += $child->total_product_count ?? $child->product_count;
                }
            }

            $category->total_product_count = $totalCount;
        }
    }
    public function product(Request $request)
    {
        $query = Product::whereActive(true);

        // Search logic
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('name_en', 'LIKE', "%{$search}%")
                  ->orWhere('name_bn', 'LIKE', "%{$search}%");
            });
        }

        // Sorting
        if ($request->get('sort') == 1) {
            $query->latest();
        } elseif ($request->get('sort') == 2) {
            $query->oldest();
        } elseif ($request->get('sort') == 3) {
            $query->orderBy('final_price', 'desc');
        } elseif ($request->get('sort') == 4) {
            $query->orderBy('final_price', 'asc');
        } else {
            $query->latest();
        }

        // Pagination and count
        $sessionId = session('session_id');
        $products = $query->with(['categories', 'cart' => function($q) use ($sessionId) {
            $q->when(auth()->check(), fn($query) => $query->where('user_id', auth()->id()))
              ->when(!auth()->check(), fn($query) => $query->where('session_id', $sessionId));
        }])->paginate(12)->appends($request->all());

        $categories = ProductCategory::whereActive(true)->latest()->get();
        $total_products = Product::whereActive(true)->count();
        $subcategories = ProductCategory::whereNull('parent_id')
            ->where('active', 1)
            ->orderBy('name_en')
            ->get();

        // Get all root categories for sidebar with optimized product counts
        $allRootCategories = ProductCategory::whereNull('parent_id')
            ->where('active', 1)
            ->with('children.children')
            ->orderBy('name_en')
            ->get();

        // Optimize product counting - get all category IDs that have active products
        $categoryProductCounts = \DB::table('product_categories as pc')
            ->join('product_cats as pcp', 'pc.id', '=', 'pcp.product_category_id')
            ->join('products as p', 'pcp.product_id', '=', 'p.id')
            ->where('p.active', 1)
            ->where('pc.active', 1)
            ->select('pc.id', \DB::raw('COUNT(DISTINCT p.id) as product_count'))
            ->groupBy('pc.id')
            ->pluck('product_count', 'pc.id')
            ->toArray();

        // Attach product counts to categories
        $this->attachProductCounts($allRootCategories, $categoryProductCounts);

        $slug = null;
        $category = null;

        return view("website.product.product", compact(
            'products',
            'categories',
            'total_products',
            'subcategories',
            'allRootCategories',
            'slug',
            'category'
        ));
    }

    public function productCategory(Request $request, $slug = null)
    {
        $category = null;
        $categories = collect();
        $subcategories = collect();

        $query = Product::where('active', 1);

        if ($slug && $slug !== 'all') {
            $category = ProductCategory::where('slug', $slug)
                ->where('active', 1)
                ->with('children.children')
                ->first();

            if ($category) {
                $descendantIds = $category->children->pluck('id')->toArray();
                $grandchildIds = $category->children->flatMap(function ($child) {
                    return $child->children->pluck('id');
                })->toArray();

                $categoryIds = array_merge([$category->id], $descendantIds, $grandchildIds);

                if (is_null($category->parent_id)) {
                    // 🟢 Case 1: Parent category — show subcategories
                    $subcategories = ProductCategory::where('parent_id', $category->id)
                        ->where('active', 1)
                        ->orderBy('name_en')
                        ->get();
                } else {
                    // 🟡 Case 2: Subcategory or nested child category — show sibling categories
                    $subcategories = ProductCategory::where('parent_id', $category->parent_id)
                        ->where('active', 1)
                        ->orderBy('name_en')
                        ->get();
                }

                $query->whereHas('categories', function ($q) use ($categoryIds) {
                    $q->whereIn('product_categories.id', $categoryIds);
                });
            }
        } else {
            // 🟣 For "All" — show all root categories
            $categories = ProductCategory::whereNull('parent_id')
                ->where('active', 1)
                ->orderBy('name_en')
                ->get();
        }

        // Root categories for sidebar with optimized product counts
        $allRootCategories = ProductCategory::whereNull('parent_id')
            ->where('active', 1)
            ->with('children.children')
            ->orderBy('name_en')
            ->get();

        // Optimize product counting - get all category IDs that have active products
        $categoryProductCounts = \DB::table('product_categories as pc')
            ->join('product_cats as pcp', 'pc.id', '=', 'pcp.product_category_id')
            ->join('products as p', 'pcp.product_id', '=', 'p.id')
            ->where('p.active', 1)
            ->where('pc.active', 1)
            ->select('pc.id', \DB::raw('COUNT(DISTINCT p.id) as product_count'))
            ->groupBy('pc.id')
            ->pluck('product_count', 'pc.id')
            ->toArray();

        // Attach product counts to categories
        $this->attachProductCounts($allRootCategories, $categoryProductCounts);

        // Sorting
        switch ($request->get('sort')) {
            case 2:
                $query->oldest();
                break;
            case 3:
                $query->orderBy('final_price', 'desc');
                break;
            case 4:
                $query->orderBy('final_price', 'asc');
                break;
            default:
                $query->latest();
                break;
        }

        // Pagination and count
        $sessionId = session('session_id');
        $products = $query->with(['categories', 'cart' => function($q) use ($sessionId) {
            $q->when(auth()->check(), fn($query) => $query->where('user_id', auth()->id()))
              ->when(!auth()->check(), fn($query) => $query->where('session_id', $sessionId));
        }])->paginate(12)->appends($request->all());
        $total_products = $query->count();

        return view('website.product.product_category', compact(
            'products',
            'category',
            'categories',
            'subcategories',
            'total_products',
            'allRootCategories',
            'slug'
        ));
    }

    public function productDetails(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->with('categories', 'reviews', 'media')->first();

        if(!$product){
            abort(404);
        }

        $relatedProducts = Product::whereHas('categories', function($q) use ($product) {
                                $q->whereIn('product_categories.id', $product->categories->pluck('id'));
                            })
                            ->where('id', '!=', $product->id)
                            ->take(12)
                            ->get();
        return view('website.product.product_details', compact('product','relatedProducts'));
    }

    public function checkout(Request $request)
    {

        $sessionId = session('session_id'); 
        $cartItems = Cart::with('product')
            ->when(auth()->check(), fn($q) => $q->where('user_id', auth()->id()))
            ->when(!auth()->check(), fn($q) => $q->where('session_id', $sessionId))
            ->get();

        $location = null;
        if(Auth::check()){
            $location = Auth::user()->locations()->first();
        }
        $shippingMethods = shippingMethod::get();
        $districts = District::all();

        return view('website.product.checkout', compact( 'cartItems', 'shippingMethods','districts', 'location'));
        return view('frontend.home.new_checkout', compact( 'cartItems', 'shippingMethods','districts', 'location'));
    }
}