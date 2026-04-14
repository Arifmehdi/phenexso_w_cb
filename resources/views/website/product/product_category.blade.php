@extends('website.layouts.master')

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

<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">

@push('css')
<style>
/* Card hover effect */
.card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-hover:hover {
    transform: translateY(-1px) scale(1.01);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.12);
}

/* Active subcategory in sidebar */
.subcategory-active {
    background-color: #f8f9fa;
    border-left: 3px solid #18443F;
}

/* Mobile category capsules */
.mobile-category-capsules {
    overflow-x: auto;
    padding-bottom: 0.5rem;
}
.mobile-category-capsules .btn {
    min-width: 140px;
    padding: 0.25rem 0.5rem;
    white-space: nowrap;
    text-align: left;
    flex-shrink: 0;
}
.mobile-category-capsules .btn img {
    flex-shrink: 0;
}
.mobile-category-capsules .btn div {
    overflow: hidden;
}
.mobile-category-capsules .btn span {
    display: flex;
    flex-direction: column;
}
.mobile-category-capsules .btn span small {
    font-size: 0.75rem;
    color: #666;
}
</style>
@endpush

@section('content')
<section class="section my-0 py-0">
    <div class="container py-5">
        <div class="row g-4">

            <!-- Sidebar for desktop -->
            <div class="col-lg-3 order-2 order-lg-1 d-none d-lg-block">
                <aside class="sidebar" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <h5 class="font-weight-semi-bold pt-3">{{ __('Product Categories') }}</h5>
                    <ul class="nav nav-list flex-column">
                        <!-- All Categories -->
                        <li class="nav-item">
                            <a class="nav-link {{ !isset($slug) || !$slug ? 'fw-bold text-primary' : '' }}" 
                               href="{{ route('productCategory') }}" itemprop="url">
                                {{ __('All') }} ({{ $total_products }})
                            </a>
                        </li>

                        @php $locale = session('locale', app()->getLocale()); @endphp

                        <!-- If we have a specific category selected -->
                        @if(isset($slug) && $slug && isset($category) && $category)
                            <li class="nav-item subcategory-active">
                                <a class="nav-link fw-bold text-primary" 
                                   href="{{ route('productCategory', $category->slug) }}" itemprop="url">
                                    @if($category->parent_id)
                                        <small class="text-muted d-block">
                                            @php
                                                $parentCategory = \App\Models\ProductCategory::find($category->parent_id);
                                            @endphp
                                            @if($parentCategory)
                                                {{ $locale === 'bn' ? $parentCategory->name_bn : $parentCategory->name_en }} →
                                            @endif
                                        </small>
                                    @endif
                                    {{ $locale === 'bn' ? $category->name_bn : $category->name_en }}
                                    ({{ $category->products()->where('active', 1)->count() }})
                                </a>
                            </li>
                        @endif

                        {{-- Root Categories --}}
                        @foreach ($allRootCategories as $cat)
                            @php
                                $subcategoriesCount = \App\Models\ProductCategory::where('parent_id', $cat->id)
                                    ->where('active', 1)->count();
                                
                                $subcategoryIds = \App\Models\ProductCategory::where('parent_id', $cat->id)
                                    ->where('active', 1)->pluck('id')->toArray();
                                
                                $categoryProductsCount = \App\Models\Product::where('active', 1)
                                    ->whereHas('categories', function($q) use ($cat, $subcategoryIds) {
                                        $q->where('product_categories.id', $cat->id)
                                          ->orWhereIn('product_categories.id', $subcategoryIds);
                                    })->count();
                            @endphp

                            <li class="nav-item">
                                <a class="nav-link {{ isset($category) && $category->id === $cat->id ? 'fw-bold text-primary' : '' }}"
                                   href="{{ route('productCategory', $cat->slug) }}" itemprop="url">
                                    {{ $locale === 'bn' ? $cat->name_bn : $cat->name_en }}
                                    ({{ $categoryProductsCount }})
                                </a>

                                @if(isset($category) && $category->id === $cat->id && $subcategories->isNotEmpty())
                                    <ul class="ms-3 list-unstyled">
                                        @foreach ($subcategories as $sub)
                                            @php
                                                $subProductsCount = $sub->products()->where('active', 1)->count();
                                            @endphp
                                            <li>
                                                <a href="{{ route('productCategory', $sub->slug) }}" 
                                                   class="nav-link small {{ isset($slug) && $slug == $sub->slug ? 'text-success fw-semibold subcategory-active' : '' }}">
                                                    {{ $locale === 'bn' ? $sub->name_bn : $sub->name_en }}
                                                    ({{ $subProductsCount }})
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="col-12 col-lg-9 order-1 order-lg-2">

                <!-- Mobile Category Capsules -->
                {{--<div class="d-flex d-lg-none overflow-auto mb-4 py-1" style="gap: 0.5rem;">
                    @php $locale = session('locale', app()->getLocale()); @endphp
                    <!-- All Categories -->
                    <a href="{{ route('productCategory') }}" 
                    class="btn btn-outline-primary flex-shrink-0 d-flex align-items-center rounded-pill px-3 py-2 {{ !isset($slug) || !$slug ? 'active' : '' }}"
                    style="{{ !isset($slug) || !$slug ? 'background-color: #18443F; border-color: #18443F; color: #fff;' : '' }}">
                        <img src="{{ asset('frontend/assets/images/icons/all.png') }}" alt="All" class="rounded-circle me-2" width="30" height="30">
                        <div class="text-truncate" style="max-width: 80px;">
                            {{ __('All') }}
                            <small class="d-block text-muted">({{ $total_products }})</small>
                        </div>
                    </a>

                    @foreach ($allRootCategories as $categoryBtn)
                        @php
                            $subIds = \App\Models\ProductCategory::where('parent_id', $categoryBtn->id)
                                        ->where('active', 1)->pluck('id')->toArray();

                            $catProductsCount = \App\Models\Product::where('active', 1)
                                                ->whereHas('categories', function($q) use ($categoryBtn, $subIds) {
                                                    $q->where('product_categories.id', $categoryBtn->id)
                                                    ->orWhereIn('product_categories.id', $subIds);
                                                })->count();
                        @endphp

                        <a href="{{ route('productCategory', $categoryBtn->slug) }}"
                        class="btn btn-outline-primary flex-shrink-0 d-flex align-items-center rounded-pill px-3 py-2 {{ isset($slug) && $slug == $categoryBtn->slug ? 'active' : '' }}"
                        style="{{ isset($slug) && $slug == $categoryBtn->slug ? 'background-color: #18443F; border-color: #18443F; color: #fff;' : '' }}">
                            <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $categoryBtn->fi()]) }}"
                                alt="{{ $categoryBtn->name_en }}" class="rounded-circle me-2" width="30" height="30">
                            <div class="text-truncate" style="max-width: 100px;">
                                {{ $locale === 'bn' ? $categoryBtn->name_bn : $categoryBtn->name_en }}
                                <small class="d-block text-muted">({{ $catProductsCount }})</small>
                            </div>
                        </a>
                    @endforeach
                </div>--}}


                <!-- Sort and Pagination Info -->
                <div class="row mb-4 align-items-center">
                    <div class="col-md-6">
                        <form method="GET" class="d-flex align-items-center gap-2">
                            <select name="sort" id="sort" class="form-select w-auto" onchange="this.form.submit()">
                                <option value="1" @if(request()->get('sort')==1) selected @endif>{{ __('Sort by Latest') }}</option>
                                <option value="2" @if(request()->get('sort')==2) selected @endif>{{ __('Sort by Oldest') }}</option>
                                <option value="3" @if(request()->get('sort')==3) selected @endif>{{ __('Sort by Price: High → Low') }}</option>
                                <option value="4" @if(request()->get('sort')==4) selected @endif>{{ __('Sort by Price: Low → High') }}</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <span class="text-muted">
                            Showing <strong>{{ $products->firstItem() }} - {{ $products->lastItem() }}</strong> of
                            <strong>{{ $products->total() }}</strong> results
                        </span>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="row g-4">
                    @foreach ($products as $product)
                        <div class="col-6 col-md-4 col-lg-3" itemscope itemtype="https://schema.org/Product">
                            <div class="card h-100 border-0 shadow-sm card-hover">
                                <a href="{{ route('productDetails', $product->slug) }}" class="d-block">
                                    <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}"
                                         class="card-img-top rounded-top"
                                         alt="{{ $product->name_en }} - North Bengal Dairy Farm"
                                         loading="lazy"
                                         itemprop="image">
                                </a>

                                <div class="card-body d-flex flex-column p-3">
                                    <small class="d-block text-uppercase mb-1">
                                        @foreach ($product->categories as $key => $productCategory)
                                            <span class="fw-semibold text-danger" itemprop="category">
                                                {{ $locale === 'bn' ? $productCategory->name_bn : $productCategory->name_en }}
                                            </span>@if(!$loop->last), @endif
                                        @endforeach
                                    </small>

                                    <h6 class="fw-semibold text-truncate mb-1" itemprop="name">
                                        <a href="{{ route('productDetails', $product->slug) }}" class="text-dark text-decoration-none">
                                            {{ $locale === 'bn' ? $product->name_bn : $product->name_en }}
                                        </a>
                                    </h6>

                                    <div class="mb-1">
                                        @if($product->discount > 0)
                                            <span class="text-muted text-decoration-line-through me-2 w3-small">
                                                {{ number_format($product->price, 2) }} ৳
                                            </span>
                                        @endif
                                        <span class="fw-bold text-primary w3-small" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                            <meta itemprop="priceCurrency" content="BDT">
                                            <span itemprop="price">{{ number_format($product->final_price, 2) }}</span> ৳
                                        </span>
                                    </div>

                                    <div class="mt-auto productCartItem" data-product="{{ $product->id }}">
                                        @include('frontend.home.includes.productCartItem')
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="row mt-4">
                    <div class="col">
                        <nav>
                            <ul class="pagination justify-content-end mb-0">
                                {{ $products->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
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
