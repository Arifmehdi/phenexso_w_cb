@extends('website.test.test_include.test_app')


@section('title', "Products -". env('APP_NAME'))

@section('meta')
<meta name="description" content="Browse and shop high-quality products from North Bengal Dairy Farm. Find dairy products, groceries, and more with best prices and fast delivery.">
<meta name="keywords" content="North Bengal Dairy Farm, dairy products, groceries, online store, buy online">
<meta property="og:title" content="North Bengal Dairy Farm - Premium Products Online">
<meta property="og:description" content="Discover premium products at North Bengal Dairy Farm. Shop online for dairy, groceries, and more with ease.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="robots" content="index, follow">
@endsection

@section('content')
@php $locale = session('locale', app()->getLocale()); @endphp

<style>
.shop-page {
    padding: 40px 0;
}

.shop-header {
    margin-bottom: 40px;
}

.shop-header h1 {
    font-size: 36px;
    font-weight: 700;
    color: #212a2f;
    margin-bottom: 10px;
}

.shop-header p {
    color: #666;
    font-size: 16px;
}

.shop-breadcrumb {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
    font-size: 14px;
    color: #666;
}

.shop-breadcrumb a {
    color: #212a2f;
    text-decoration: none;
    transition: color 0.3s;
}

.shop-breadcrumb a:hover {
    color: #e8362a;
}

.shop-breadcrumb span {
    color: #e8362a;
}

.shop-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
}

.shop-sidebar {
    background: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 8px;
    padding: 25px;
    height: fit-content;
    position: sticky;
    top: 20px;
}

.sidebar-section {
    margin-bottom: 30px;
}

.sidebar-section:last-child {
    margin-bottom: 0;
}

.sidebar-section h3 {
    font-size: 16px;
    font-weight: 600;
    color: #212a2f;
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #e5e5e5;
}

.category-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.category-list li {
    margin-bottom: 12px;
}

.category-list a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #555;
    text-decoration: none;
    font-size: 14px;
    padding: 8px 12px;
    border-radius: 6px;
    transition: all 0.3s;
}

.category-list a:hover,
.category-list a.active {
    background: #f8f9fa;
    color: #e8362a;
}

.category-list a.active {
    border-left: 3px solid #e8362a;
}

.category-list .count {
    background: #e5e5e5;
    color: #666;
    font-size: 12px;
    padding: 2px 8px;
    border-radius: 10px;
}

.shop-main {
    min-width: 0;
}

.shop-toolbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e5e5e5;
}

.shop-results {
    font-size: 14px;
    color: #666;
}

.shop-results strong {
    color: #212a2f;
}

.shop-sort {
    display: flex;
    align-items: center;
    gap: 15px;
}

.shop-sort label {
    font-size: 14px;
    color: #555;
}

.shop-sort select {
    padding: 10px 35px 10px 15px;
    border: 1px solid #e5e5e5;
    border-radius: 6px;
    font-size: 14px;
    color: #212a2f;
    background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23666' d='M6 8L1 3h10z'/%3E%3C/svg%3E") no-repeat right 12px center;
    cursor: pointer;
    appearance: none;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
}

.product-card {
    background: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.product-image {
    position: relative;
    aspect-ratio: 1;
    overflow: hidden;
    background: #f8f9fa;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.08);
}

.product-image .hover-img {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
}

.product-card:hover .product-image .hover-img {
    opacity: 1;
}

.product-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: #e8362a;
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    padding: 5px 12px;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.product-badge.sale {
    background: #27ae60;
}

.product-actions {
    position: absolute;
    bottom: 12px;
    right: 12px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    opacity: 0;
    transform: translateX(20px);
    transition: all 0.3s ease;
}

.product-card:hover .product-actions {
    opacity: 1;
    transform: translateX(0);
}

.product-action-btn {
    width: 40px;
    height: 40px;
    border: none;
    border-radius: 50%;
    background: #fff;
    color: #212a2f;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s;
}

.product-action-btn:hover {
    background: #e8362a;
    color: #fff;
}

.product-info {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.product-info h3 {
    font-size: 16px;
    font-weight: 600;
    color: #212a2f;
    margin-bottom: 8px;
    line-height: 1.4;
}

.product-info .category-name {
    font-size: 13px;
    color: #888;
    margin-bottom: 8px;
}

.product-info .price {
    font-size: 18px;
    font-weight: 700;
    color: #212a2f;
    margin-bottom: 15px;
}

.product-info .price .original {
    font-size: 14px;
    color: #999;
    text-decoration: line-through;
    margin-left: 8px;
}

.product-info .price .sale-price {
    color: #e8362a;
}

.pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 50px;
}

.pagination a,
.pagination span {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #e5e5e5;
    border-radius: 6px;
    color: #555;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s;
}

.pagination a:hover,
.pagination span.active {
    background: #e8362a;
    border-color: #e8362a;
    color: #fff;
}

.pagination .prev,
.pagination .next {
    width: auto;
    padding: 0 15px;
}

@media (max-width: 991px) {
    .shop-layout {
        grid-template-columns: 1fr;
    }
    
    .shop-sidebar {
        position: static;
        display: none;
    }
    
    .shop-sidebar.mobile-open {
        display: block;
    }
    
    .mobile-filter-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 20px;
        background: #212a2f;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        margin-bottom: 20px;
    }
}

@media (max-width: 767px) {
    .shop-header h1 {
        font-size: 28px;
    }
    
    .product-grid {
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 15px;
    }
    
    .product-info {
        padding: 12px;
    }
    
    .product-info h3 {
        font-size: 14px;
    }
    
    .product-info .price {
        font-size: 16px;
    }
}
</style>

<main class="shop-page">
    <div class="container">
        <div class="shop-breadcrumb">
            <a href="{{ route('test_home') }}">Home</a>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18l6-6-6-6"/>
            </svg>
            <a href="{{ route('shop') }}">Shop</a>
            @if(isset($slug) && $slug && isset($category) && $category)
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18l6-6-6-6"/>
            </svg>
            <span>{{ $locale === 'bn' ? $category->name_bn : $category->name_en }}</span>
            @endif
        </div>
        
        <div class="shop-header">
            <h1>
                @if(isset($slug) && $slug && isset($category) && $category)
                    {{ $locale === 'bn' ? $category->name_bn : $category->name_en }}
                @else
                    {{ __('All Products') }}
                @endif
            </h1>
            <p>
                @if(isset($slug) && $slug && isset($category) && $category)
                    {{ $category->description ?? 'Browse our collection of ' . ($locale === 'bn' ? $category->name_bn : $category->name_en) }}
                @else
                    Browse our complete collection of premium products
                @endif
            </p>
        </div>

        <!-- Mobile Category Buttons -->
        <div class="d-flex d-lg-none overflow-x-auto mb-4 pb-2">
            <div class="d-flex flex-nowrap gap-2">
                <a href="{{ route('shop') }}" class="btn rounded-pill text-nowrap {{ !isset($slug) || !$slug ? 'btn-danger' : 'btn-outline-secondary' }}" style="{{ !isset($slug) || !$slug ? 'background-color: #e8362a; border-color: #e8362a;' : '' }}">
                    {{ __('All Categories') }}
                </a>
                @foreach ($allRootCategories as $catBtn)
                    @php
                        $subIds = \App\Models\ProductCategory::where('parent_id', $catBtn->id)
                            ->where('active', 1)->pluck('id')->toArray();
                        $catBtnProductsCount = \App\Models\Product::where('active', 1)
                            ->whereHas('categories', function($q) use ($catBtn, $subIds) {
                                $q->where('product_categories.id', $catBtn->id)
                                  ->orWhereIn('product_categories.id', $subIds);
                            })->count();
                    @endphp
                    <a href="{{ route('productCategory', $catBtn->slug) }}"
                       class="btn rounded-pill d-flex align-items-center gap-2 text-nowrap {{ isset($slug) && $slug == $catBtn->slug ? 'btn-danger' : 'btn-outline-secondary' }}"
                       style="{{ isset($slug) && $slug == $catBtn->slug ? 'background-color: #E10B17; border-color: #e8362a; color: white' : '' }}">
                        <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $catBtn->fi()]) }}"
                             alt="{{ $catBtn->name_en }}" class="rounded-circle" width="24" height="24" loading="lazy">
                        <span>
                            {{ $locale === 'bn' ? $catBtn->name_bn : $catBtn->name_en }}
                            <small class="ms-1">({{ $catBtnProductsCount }})</small>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
        
        <div class="shop-layout">
            <aside class="shop-sidebar">
                <div class="sidebar-section">
                    <h3>{{ __('Categories') }}</h3>
                    <ul class="category-list">
                        <li>
                            <a href="{{ route('shop') }}" class="{{ !isset($slug) || !$slug ? 'active' : '' }}">
                                {{ __('All') }} <span class="count">{{ $total_products }}</span>
                            </a>
                        </li>
                        
                        @foreach ($allRootCategories as $cat)
                        @php
                            $subcategoryIds = \App\Models\ProductCategory::where('parent_id', $cat->id)
                                ->where('active', 1)->pluck('id')->toArray();
                            
                            /* $categoryProductsCount = \App\Models\Product::where('active', 1)
                                ->whereHas('categories', function($q) use ($cat, $subcategoryIds) {
                                    $q->where('product_categories.id', $cat->id)
                                      ->orWhereIn('product_categories.id', $subcategoryIds);
                                })->count(); */
                        @endphp
                        <li>
                            <a href="{{ route('productCategory', $cat->slug) }}" class="{{ isset($slug) && $slug == $cat->slug ? 'active' : '' }}">
                                {{ $locale === 'bn' ? $cat->name_bn : $cat->name_en }} 
                                {{--<span class="count">{{ $categoryProductsCount }}</span>--}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
            
            <div class="shop-main">
                <div class="shop-toolbar">
                    <div class="shop-results">
                        @if($products->total() > 0)
                        Showing <strong>{{ $products->firstItem() }} - {{ $products->lastItem() }}</strong> of <strong>{{ $products->total() }}</strong> products
                        @else
                        Showing <strong>0</strong> products
                        @endif
                    </div>
                    <div class="shop-sort">
                        <label>{{ __('Sort by') }}:</label>
                        <form method="GET" class="d-inline">
                            @if(request()->has('slug'))
                            <input type="hidden" name="slug" value="{{ request()->get('slug') }}">
                            @endif
                            <select name="sort" onchange="this.form.submit()">
                                <option value="1" @if(request()->get('sort')==1) selected @endif>{{ __('Latest') }}</option>
                                <option value="2" @if(request()->get('sort')==2) selected @endif>{{ __('Oldest') }}</option>
                                <option value="3" @if(request()->get('sort')==3) selected @endif>{{ __('Price: High → Low') }}</option>
                                <option value="4" @if(request()->get('sort')==4) selected @endif>{{ __('Price: Low → High') }}</option>
                            </select>
                        </form>
                    </div>
                </div>
                
                <div class="product-grid">
                    @forelse($products as $product)
                    <div class="product-card">
                        <div class="product-image">
                            <a href="{{ route('productDetails', $product->slug) }}">
                                <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}"
                                    alt="{{ $product->name_en }}">
                            </a>
                            @if($product->discount > 0)
                            <div class="product-badge sale">Sale</div>
                            @endif
                            <div class="product-actions">
                                <button class="product-action-btn" title="Add to Wishlist">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>
                                <a href="{{ route('productDetails', $product->slug) }}" class="text-dark text-decoration-none">
                                    {{ $locale === 'bn' ? $product->name_bn : $product->name_en }}
                                </a>
                            </h3>
                            <p class="category-name">
                                @foreach ($product->categories->take(1) as $productCategory)
                                    <span class="text-danger">{{ $locale === 'bn' ? $productCategory->name_bn : $productCategory->name_en }}</span>
                                @endforeach
                            </p>
                            <p class="price">
                                {{--@if($product->discount > 0)
                                    <span class="original">{{ number_format($product->price, 2) }} ৳</span>
                                    <span class="sale-price">{{ number_format($product->final_price, 2) }} ৳</span>
                                @else
                                    {{ number_format($product->final_price, 2) }} ৳
                                    @endif--}}
                                    <span class="sale-price">{{ number_format($product->price, 2) }} ৳</span>
                            </p>
                            <div class="mt-auto productCartItem" data-product="{{ $product->id }}">
                                @include('frontend.home.includes.productCartItem')
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <p>No products found.</p>
                    </div>
                    @endforelse
                </div>
                
                <div class="pagination">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('js')
<script>
@if(session('success'))
Swal.fire({
    toast: true,
    icon: 'success',
    title: "{{ session('success') }}",
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
});
@endif
</script>
@endpush