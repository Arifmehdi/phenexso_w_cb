<div id="shopify-section-header">
    <sticky-header>
        <header class="header-section announcement-bar-active" data-section-id="sections--26303089934718__header" data-section-type="header" data-header="">
            <div class="main-bar">
                <a class="in-page-link skip-link" href="#MainContent">Skip to content</a>

                <div class="header-section-inner" role="banner">
                    {{-- TOP HEADER SECTION --}}
                    <div class="header-section-inner__top container">
                        {{-- Mobile Menu Button --}}
                        <section class="header-icon tablet-up-hide">
                            <button class="hamburger-icon" aria-label="open navigation" data-click-toggle="{&quot;target&quot;:&quot;body&quot;,&quot;add&quot;:&quot;mobile-nav-open&quot;}">
                                <svg width="20" height="16" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" clip-rule="evenodd" viewBox="0 0 20 16">
                                    <defs></defs>
                                    <path fill="none" stroke="#111" stroke-width="2" d="M1 8h17.057M1 1h17.057M1 15h17.057"></path>
                                </svg>
                            </button>
                            <button class="nav-close-btn" role="button" type="button" data-click-toggle="{&quot;target&quot;:&quot;body&quot;,&quot;remove&quot;:&quot;mobile-nav-open&quot;}" aria-label="Navigation close">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>

                            {{-- Mobile Search Button --}}
                            <button aria-label="Toggle Search" class="custom-search-button custom-drawer-button" drawer-trigger="" data-target-drawer="site-mobile-search">
                                <div drawer-icon-open="">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5 21L15.156 14.656" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div drawer-icon-close="">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5 21L15.156 14.656M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <circle cx="16.5" cy="15.5" r="6.5" fill="#FAC828"></circle>
                                        <path d="M19 18L16.5 15.5M16.5 15.5L14 13M16.5 15.5L19 13M16.5 15.5L14 18" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </section>

                        {{-- Desktop Search --}}
                        <div style="width: 100%" class="tablet-hide">
                            <div id="site-search__wrapper" class="tablet-hide">
                                <predictive-search>
                                    <form id="PredictiveSearchForm" action="#" method="get" role="search">
                                        <label class="visually-hidden" for="Search">{{__('Search')}}</label>
                                        <input type="hidden" name="type" value="product">
                                        <div class="search-inner">
                                            <input id="site-search__input" class="text-input" type="search" name="q" placeholder="{{__('What are you looking for')}}?" role="combobox" aria-expanded="false" aria-owns="predictive-search-results" aria-controls="predictive-search-results" aria-haspopup="listbox" aria-autocomplete="list">
                                            <button class="search-inner__submit icon-button" type="submit">
                                                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.5 21L15.156 14.656" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <input name="options[prefix]" type="hidden" value="last">
                                        <div id="predictive-search" class="predictive-search-desktop" tabindex="-1"></div>
                                    </form>
                                </predictive-search>
                            </div>
                        </div>

                        {{-- Logo --}}
                        <div class="logo-image-container">
                            <a href="/" class="">
                                <img src="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}" alt="Porcelain Superstore" srcset="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }} 177w, {{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }} 352w" width="177" height="70" loading="eager">
                            </a>
                        </div>

                        {{-- Header Icons --}}
                        <ul class="header-section-icons">
                            {{-- Language Selector --}}
                            <li class="tablet-hide position-relative" style="z-index:1050;">
                                <div class="header-icons-customer-snippet">
                                    <button type="button" class="icon-toggle language-toggle">
                                        <div style="display: flex; align-items: center; gap: 5px;">
                                            <svg width="20" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10" stroke="#0D1F22" stroke-width="2" />
                                                <path d="M2 12H22" stroke="#0D1F22" stroke-width="2" />
                                                <path d="M12 2C15 5 15 19 12 22C9 19 9 5 12 2Z" stroke="#0D1F22" stroke-width="2" />
                                                <path d="M6 6C8 8 8 16 6 18M18 6C16 8 16 16 18 18" stroke="#0D1F22" stroke-width="2" />
                                            </svg>
                                            <small class="icon-label">{{__('Language')}}</small>
                                        </div>
                                    </button>
                                    <div class="custom-dropdown language-dropdown" style="display:none;">
                                        <a class="dropdown-item" href="{{ route('welcome.changeLanguage', ['lang' => 'en']) }}">English</a>
                                        <a class="dropdown-item" href="{{ route('welcome.changeLanguage', ['lang' => 'bn']) }}">বাংলা</a>
                                    </div>
                                </div>
                            </li>

                            {{-- User/Sign In --}}
                            <li class="position-relative" style="z-index:1050;">
                                @if(Auth::check())
                                    @php $user = auth()->user(); @endphp
                                    <div class="header-icons-customer-snippet">
                                        <button type="button" class="icon-toggle user-toggle">
                                            <div style="display: flex; align-items: center; gap: 5px;">
                                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0909 8.27273C12.0992 8.27273 13.7273 6.64467 13.7273 4.63636C13.7273 2.62806 12.0992 1 10.0909 1C8.08258 1 6.45453 2.62806 6.45453 4.63636C6.45453 6.64467 8.08258 8.27273 10.0909 8.27273Z" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10.0909 11.9091C8.89707 11.9091 7.71493 12.1442 6.61197 12.6011C5.50901 13.058 4.50683 13.7276 3.66267 14.5718C1.95779 16.2766 1 18.5889 1 21H19.1818C19.1818 18.5889 18.224 16.2766 16.5192 14.5718C14.8143 12.8669 12.502 11.9091 10.0909 11.9091V11.9091Z" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <small class="icon-label">{{ Str::limit($user->name, 10) }}</small>
                                            </div>
                                        </button>
                                        <div class="custom-dropdown" style="display:none;">
                                            @if ($user->hasRole('admin'))
                                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{__('Admin Dashboard')}}</a>
                                            @endif
                                            <a class="dropdown-item" href="{{ route('user.dashboard') }}">{{__('Member Dashboard')}}</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}">{{__('Logout')}}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                        </div>
                                    </div>
                                @else
                                    <div class="header-icons-customer-snippet">
                                        <a href="{{ route('login') }}" class="icon-toggle" style="text-decoration: none; color: inherit;">
                                            <div style="display: flex; align-items: center; gap: 5px;">
                                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0909 8.27273C12.0992 8.27273 13.7273 6.64467 13.7273 4.63636C13.7273 2.62806 12.0992 1 10.0909 1C8.08258 1 6.45453 2.62806 6.45453 4.63636C6.45453 6.64467 8.08258 8.27273 10.0909 8.27273Z" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10.0909 11.9091C8.89707 11.9091 7.71493 12.1442 6.61197 12.6011C5.50901 13.058 4.50683 13.7276 3.66267 14.5718C1.95779 16.2766 1 18.5889 1 21H19.1818C19.1818 18.5889 18.224 16.2766 16.5192 14.5718C14.8143 12.8669 12.502 11.9091 10.0909 11.9091V11.9091Z" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <small class="icon-label">{{ __('Sign In')}}</small>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </div>

                    {{-- BOTTOM NAVIGATION SECTION (Dynamic Menu) --}}
                    <nav class="header-section-inner__bottom">
                        <style>
                            a.btn-nav-first-level.highlighted_link {
                                color: #fff !important;
                            }
                            .navigation-snippet .nav-first-level>li>.btn-nav-first-level.highlighted_link:before {
                                background-color: #e8362a;
                                z-index: -1;
                            }
                            
                            /* Additional styles for dynamic menu - UPDATED */
                            .subcategory-products {
                                margin-top: 8px;
                                padding-left: 15px;
                                border-left: 2px solid #eee;
                            }
                            .subcategory-products .product-item {
                                margin-bottom: 5px;
                                padding: 2px 0;
                            }
                            .subcategory-products .product-item a {
                                display: block;
                                text-decoration: none;
                                color: #555;
                                font-size: 12px;
                                transition: color 0.3s ease;
                                padding: 3px 0;
                            }
                            .subcategory-products .product-item a:hover {
                                color: #e8362a;
                            }
                            /* Remove image styles for left column */
                            .subcategory-products .product-item img {
                                display: none !important;
                            }
                            
                            .nav-third-level li {
                                position: relative;
                                margin-bottom: 10px;
                            }
                            .nav-third-level > li > a {
                                font-weight: 500;
                                color: #212A2F;
                                display: block;
                                padding: 4px 0;
                                font-size: 14px;
                            }
                            .nav-third-level > li > a:hover {
                                color: #e8362a;
                            }

                            /* Header icons alignment styles */
                            .header-icons-customer-snippet {
                                position: relative;
                            }
                            
                            .header-icons-customer-snippet .icon-toggle {
                                background: none;
                                border: none;
                                cursor: pointer;
                                padding: 8px 5px;
                                display: inline-flex;
                                align-items: center;
                            }
                            
                            .header-icons-customer-snippet .icon-toggle:hover {
                                opacity: 0.8;
                            }
                            
                            .header-section-icons {
                                display: flex;
                                align-items: center;
                                gap: 15px;
                                margin: 0;
                                padding: 0;
                                list-style: none;
                            }
                            
                            .header-section-icons li {
                                margin: 0;
                            }
                            
                            .icon-label {
                                font-size: 12px;
                                white-space: nowrap;
                                color: #212A2F;
                            }
                            
                            .custom-dropdown {
                                position: absolute;
                                top: 100%;
                                right: 0;
                                background: white;
                                border: 1px solid #ddd;
                                border-radius: 4px;
                                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                                min-width: 150px;
                                z-index: 1051;
                                margin-top: 5px;
                            }
                            
                            .custom-dropdown .dropdown-item {
                                display: block;
                                padding: 10px 15px;
                                text-decoration: none;
                                color: #212A2F;
                                border-bottom: 1px solid #eee;
                                transition: background-color 0.2s;
                            }
                            
                            .custom-dropdown .dropdown-item:last-child {
                                border-bottom: none;
                            }
                            
                            .custom-dropdown .dropdown-item:hover {
                                background-color: #f5f5f5;
                            }
                            
                            /* 关键修改：确保多列并排显示 */
                            .nav-third-levels-wrapper {
                                display: flex;
                                flex-wrap: nowrap; /* 强制列在同一行 */
                                gap: 30px;
                                width: 100%; /* 占据父容器全部宽度 */
                                overflow: visible; /* 确保内容可见 */
                            }
                            
                            .nav-third-level {
                                min-width: 200px;
                                flex: 0 0 auto; /* 不自动伸缩，保持固定宽度 */
                                /* 为每个列添加视觉分隔 (可选) */
                                border-right: 1px solid #f0f0f0;
                                padding-right: 20px;
                            }
                            /* 移除最后一列的右边框 */
                            .nav-third-level:last-child {
                                border-right: none;
                                padding-right: 0;
                            }
                        </style>

                        <section class="navigation-snippet container">
                            <nav class="navigation-main" role="navigation">
                                <div class="navigation-main__content-wrapper">
                                    <div class="navigation-main__header tablet-up-hide">
                                        <span class="h4">Menu</span>
                                        <button class="nav-close-btn" role="button" type="button" data-click-toggle="{&quot;target&quot;:&quot;body&quot;,&quot;remove&quot;:&quot;mobile-nav-open&quot;}" aria-label="Navigation close">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>

                                    <ul class="nav-first-level">
                                        {{-- Home --}}
                                        <li id="nav-home" data-nav-item="true">
                                            <a href="{{ route('home') }}" class="btn-nav-first-level" data-preloadlink="true">
                                                <span>{{__('Home')}}</span>
                                            </a>
                                        </li>

                                        {{-- Dynamic Product Categories --}}
                                        @php
                                            // Get all parent categories (where parent_id is null)
                                            $parentCategories = \App\Models\ProductCategory::where('parent_id', null)
                                                ->where('active', 1)
                                                ->orderBy('name_' . app()->getLocale())
                                                ->get();
                                        @endphp

@foreach($parentCategories as $category)
    @php
        // Get ALL subcategories for this parent
        $subCategories = \App\Models\ProductCategory::where('parent_id', $category->id)
            ->where('active', 1)
            ->orderBy('name_' . app()->getLocale())
            ->get();
            
        // Get the count of subcategories
        $subCategoryCount = $subCategories->count();
    @endphp

    <li id="nav-{{ $category->slug }}" data-nav-item="true">
        <span class="btn-nav-first-level" data-nav-toggle="">
            <a href="#">
                <span>{{ $category->{'name_' . app()->getLocale()} }}</span>
            </a>
        </span>
        
        @if($subCategoryCount > 0)
            <div class="nav-second-level-wrapper" data-nav-hover="">
                <div class="container">
                    <div class="nav-mob-hierarchy-title">
                        <button class="btn-back text-upper">{{__('Back')}}</button>
                        <small>{{__('Back')}}</small>
                    </div>
                    <ul class="nav-second-level">
                        <li class="mob-nav-header">
                            <h3 data-nav-btn-back="">{{__('Back')}}</h3>
                        </li>

                        <li class="child-link">
                            <h4 class="heading-4">
                                {{ $category->{'name_' . app()->getLocale()} }}
                            </h4>

                            <div class="nav-third-levels-wrapper">
                                @php
                                    // Maximum SUB-CATEGORIES per column
                                    $maxSubCategoriesPerColumn = 8;
                                    
                                    // Calculate number of columns needed for subcategories
                                    $numColumns = ceil($subCategoryCount / $maxSubCategoriesPerColumn);
                                    
                                    // Split subcategories into columns
                                    $subCategoryColumns = [];
                                    
                                    if ($numColumns > 0) {
                                        for ($i = 0; $i < $numColumns; $i++) {
                                            $start = $i * $maxSubCategoriesPerColumn;
                                            $subCategoryColumns[] = $subCategories->slice($start, $maxSubCategoriesPerColumn);
                                        }
                                    }
                                @endphp

                                @foreach($subCategoryColumns as $column)
                                    @if($column->count() > 0)
                                        <ul class="nav-third-level">
                                            @foreach($column as $subCategory)
                                                @php
                                                    // Get ALL products for this subcategory (or limit to 16 if you want)
                                                    $subCategoryProducts = \App\Models\Product::whereHas('categories', function($query) use ($subCategory) {
                                                        $query->where('product_category_id', $subCategory->id);
                                                    })
                                                    ->where('active', 1)
                                                    ->orderBy('name_' . app()->getLocale())
                                                    ->get(); // Or use ->take(16) if you want to limit
                                                    
                                                    $productCount = $subCategoryProducts->count();
                                                @endphp
                                                
                                                <li>
                                                    <a href="{{ route('productCategory', $subCategory->slug) }}" data-preloadlink="true">
                                                        {{ $subCategory->{'name_' . app()->getLocale()} }}
                                                        @if($productCount > 0)
                                                            <small style="color: #666; font-size: 11px;">({{ $productCount }})</small>
                                                        @endif
                                                    </a>
                                                    
                                                    @if($productCount > 0)
                                                        <div class="subcategory-products">
                                                            @foreach($subCategoryProducts as $product)
                                                                <div class="product-item">
                                                                    <a href="{{ route('productDetails', ['slug' => $product->slug]) }}">
                                                                        <span>{{ Str::limit($product->{'name_' . app()->getLocale()}, 25) }}</span>
                                                                    </a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                        
                        {{-- Category Images Section (Right side - KEEPING IMAGES) --}}
                        <li class="child-link child-link__image">
                            @php
                                // Get latest 3 products from this category for the image section
                                $categoryProducts = \App\Models\Product::whereHas('categories', function($query) use ($category) {
                                    $query->where('product_category_id', $category->id);
                                })
                                ->where('active', 1)
                                ->orderBy('created_at', 'desc')
                                ->take(3)
                                ->get();
                            @endphp
                            
                            @foreach($categoryProducts as $product)
                                <a class="menu-image-block" href="{{ route('productDetails', ['slug' => $product->slug]) }}">
                                    <div class="aspect-media aspect-media--square aspect-media--rounded">
                                        @if($product->featured_image)
                                            <picture>
                                                <source media="(max-width: 767px)" sizes="1px"
                                                    srcset="{{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 1w">
                                                <img src="{{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }}"
                                                    alt="{{ $product->{'name_' . app()->getLocale()} }}"
                                                    srcset="{{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 50w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 100w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 150w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 200w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 250w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 350w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 400w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 450w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 550w, {{ route('imagecache', ['template'=>'original','filename' => $product->featured_image]) }} 600w"
                                                    width="500" height="500.0" loading="lazy" fetchpriority="auto" sizes="50vw">
                                            </picture>
                                        @endif
                                    </div>
                                    <div class="menu-image-block__content">
                                        <span class="menu-image-block__title">
                                            {{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}
                                        </span>
                                        <span class="menu-image-block__icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12" stroke="black"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </li>
@endforeach

                                        {{-- About Us --}}
                                        <li id="nav-about" data-nav-item="true">
                                            <a href="{{ route('about') }}" class="btn-nav-first-level" data-preloadlink="true">
                                                <span>{{__('About Us')}}</span>
                                            </a>
                                        </li>

                                        {{-- Contact Us --}}
                                        <li id="nav-contact" data-nav-item="true">
                                            <a href="{{ route('contact') }}" class="btn-nav-first-level highlighted_link" data-preloadlink="true">
                                                <span>{{__('Contact Us')}}</span>
                                            </a>
                                        </li>
                                    </ul>

                                    {{-- Mobile navigation secondary features --}}
                                    <ul class="navigation-main__secondary-features tablet-up-hide">
                                        <li>
                                            <a class="navigation-main__item" href="{{ route('login') }}">
                                                <div class="icon-with-text">
                                                    <span class="icon-with-text__icon">
                                                        <svg class="icon" width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.0909 8.27273C12.0992 8.27273 13.7273 6.64467 13.7273 4.63636C13.7273 2.62806 12.0992 1 10.0909 1C8.08258 1 6.45453 2.62806 6.45453 4.63636C6.45453 6.64467 8.08258 8.27273 10.0909 8.27273Z" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M10.0909 11.9091C8.89707 11.9091 7.71493 12.1442 6.61197 12.6011C5.50901 13.058 4.50683 13.7276 3.66267 14.5718C1.95779 16.2766 1 18.5889 1 21H19.1818C19.1818 18.5889 18.224 16.2766 16.5192 14.5718C14.8143 12.8669 12.502 11.9091 10.0909 11.9091V11.9091Z" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="icon-with-text__content">Sign in / Account</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="navigation-main__item" href="tel:0330 094 0304">
                                                <div class="icon-with-text">
                                                    <span class="icon-with-text__icon">
                                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15.125 11.3437C15.75 11.6249 16.0938 12.3124 15.9375 12.9687L15.2812 15.9061C15.125 16.5624 14.5625 16.9999 13.875 16.9999C6.21875 16.9999 0 10.7811 0 3.1249C0 2.4374 0.4375 1.8749 1.09375 1.7499L4.03125 1.0624C4.6875 0.906154 5.375 1.2499 5.65625 1.8749L7 5.0624C7.25 5.6249 7.09375 6.3124 6.625 6.71865L5.34375 7.7499C6.25 9.3749 7.625 10.7499 9.25 11.6561L10.3125 10.4061C10.6875 9.90615 11.375 9.7499 11.9375 9.96865L15.125 11.3437ZM14.2812 15.6874L14.9688 12.7499C15.0312 12.5311 14.9062 12.3437 14.7188 12.2499L11.5625 10.9061C11.375 10.8437 11.1875 10.8749 11.0625 11.0311L9.78125 12.5937C9.625 12.7811 9.375 12.8437 9.1875 12.7187C7.0625 11.6874 5.3125 9.9374 4.28125 7.84365C4.15625 7.6249 4.21875 7.3749 4.40625 7.21865L5.96875 5.9374C6.125 5.8124 6.15625 5.6249 6.09375 5.4374L4.75 2.28115C4.65625 2.1249 4.5 1.9999 4.34375 1.9999C4.3125 1.9999 4.28125 2.03115 4.25 2.03115L1.3125 2.71865C1.125 2.7499 1 2.90615 1 3.1249C1 10.2187 6.78125 16.0311 13.875 16.0311C14.0938 16.0311 14.25 15.8749 14.2812 15.6874Z" fill="#000"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="icon-with-text__content">Call us - 0330 094 0304</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </section>
                    </nav>
                </div>
            </div>
        </header>
    </sticky-header>
</div>

{{-- JavaScript for dropdown toggle --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Language dropdown toggle
        document.querySelectorAll('.icon-toggle').forEach(toggle => {
            const snippet = toggle.closest('.header-icons-customer-snippet');
            if (!snippet) return;
            
            const dropdown = snippet.querySelector('.custom-dropdown');
            if (!dropdown) return;
            
            toggle.addEventListener('click', e => {
                e.preventDefault();
                e.stopPropagation();
                
                // Close all other dropdowns
                document.querySelectorAll('.custom-dropdown').forEach(dd => {
                    if (dd !== dropdown) {
                        dd.style.display = 'none';
                    }
                });
                
                // Toggle current dropdown
                dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
            });
            
            dropdown.addEventListener('click', e => e.stopPropagation());
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', () => {
            document.querySelectorAll('.custom-dropdown').forEach(dd => dd.style.display = 'none');
        });
        
        // Close dropdowns on escape key
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
                document.querySelectorAll('.custom-dropdown').forEach(dd => dd.style.display = 'none');
            }
        });
    });
</script>