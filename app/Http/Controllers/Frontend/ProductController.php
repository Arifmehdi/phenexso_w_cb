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
    public function product(Request $request)
    {
        $query = Product::whereActive(true);

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

        $products = $query->paginate(12)->appends($request->all());

        $categories = ProductCategory::whereActive(true)->latest()->get();
        $total_products = Product::whereActive(true)->count();
        $subcategories = ProductCategory::whereNull('parent_id')
            ->where('active', 1)
            ->orderBy('name_en')
            ->get();

        // Get all root categories for sidebar
        $allRootCategories = ProductCategory::whereNull('parent_id')
            ->where('active', 1)
            ->orderBy('name_en')
            ->get();

        return view("website.product.product", compact(
            'products', 
            'categories', 
            'total_products', 
            'subcategories',
            'allRootCategories' // Add this
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
                ->first();

            if ($category) {
                if (is_null($category->parent_id)) {
                    // 🟢 Case 1: Parent category — show subcategories
                    $subcategories = ProductCategory::where('parent_id', $category->id)
                        ->where('active', 1)
                        ->orderBy('name_en')
                        ->get();

                    $subcategoryIds = $subcategories->pluck('id')->toArray();

                    // Include products of parent + all its subcategories
                    $query->whereHas('categories', function ($q) use ($category, $subcategoryIds) {
                        $q->where('product_categories.id', $category->id)
                        ->orWhereIn('product_categories.id', $subcategoryIds);
                    });
                } else {
                    // 🟡 Case 2: Subcategory — only show products in that subcategory
                    $subcategories = ProductCategory::where('parent_id', $category->parent_id)
                        ->where('active', 1)
                        ->orderBy('name_en')
                        ->get();

                    $query->whereHas('categories', function ($q) use ($category) {
                        $q->where('product_categories.id', $category->id);
                    });
                }
            }
        } else {
            // 🟣 For "All" — show all root categories
            $categories = ProductCategory::whereNull('parent_id')
                ->where('active', 1)
                ->orderBy('name_en')
                ->get();
        }

        // Root categories for sidebar
        $allRootCategories = ProductCategory::whereNull('parent_id')
            ->where('active', 1)
            ->orderBy('name_en')
            ->get();

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
        $products = $query->paginate(12)->appends($request->all());
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