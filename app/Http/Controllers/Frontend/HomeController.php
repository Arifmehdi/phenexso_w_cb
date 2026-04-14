<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\FrontSlider;
use App\Models\ProductCategory;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function home()
    {
        $data['products'] = Product::where('active', true)->orderByDesc('id')
            ->limit(4)
            ->select('id','slug','active','featured_image','name_en','name_bn')->get();

        $data['popular_products'] = Product::where('active', true)->orderByDesc('id')
            ->skip(4)
            ->limit(6)
            ->select('id','price','slug','active','featured_image','name_en','name_bn')->get();

        $data['color_products'] = Product::where('active', true)->orderByDesc('id')
            ->skip(10) // 4 + 6
            ->limit(4)
            ->select('id','slug','active','featured_image','name_en','name_bn')->get();

        $data['slider'] = FrontSlider::latest()->first();

        // ✅ ONLY PARENT CATEGORIES
        $data['categories'] = ProductCategory::whereNull('parent_id')
            ->latest()
            ->get();
        $data['testimonials'] = Testimonial::latest()->limit(6)->get();

        return view('website.home_index', $data);
        
        $data['products'] =  Product::orderByDesc('id')->get();
        return view('website.index', $data);
    }

    public function about()
    {
        return view('website.about' );  
    }

    public function delivery()
    {
        return view('website.delivery');
    }

    public function return()
    {
        return view('website.return');
    }

    public function sample()
    {
        return view('website.sample');
    }

    public function damage()
    {
        return view('website.damage' );  
    }

    public function trade()
    {
        return view('website.trade');
    }

    public function html_sitemap()
    {
        return view('website.html_sitemap');
    }

    public function buying_guide()
    {
        return view('website.buying_guide');
    }

    public function press()
    {
        return view('website.press');
    }


    public function bathroom()
    {
        return view('website.bathroom');
    }

    public function review()
    {
        return view('website.review');
    }

    public function shop(Request $request)
    {
        $query = Product::whereActive(true);

        // Search
        if ($request->has('search')) {
            $query->where('name_en', 'like', '%' . $request->get('search') . '%');
        }

        // Price filter
        if ($request->has('price')) {
            $priceRange = explode('-', $request->get('price'));
            if (count($priceRange) == 2) {
                $query->whereBetween('final_price', [$priceRange[0], $priceRange[1]]);
            }
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

        return view("website.shop", compact(
            'products', 
            'categories', 
            'total_products', 
            'subcategories',
            'allRootCategories' // Add this
        ));
        return view('website.shop' );  
    }
}
