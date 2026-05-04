{{-- ============================================================
     resources/views/partials/header.blade.php
     Full sticky header with 3-layer mega menu
     ============================================================ --}}

<header class="header">

    {{-- ── Top bar ──────────────────────────────────────────────── --}}
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner" style="display: flex !important; flex-wrap: nowrap !important; align-items: center; justify-content: space-between; gap: 15px;">

                {{-- Mobile hamburger --}}
                <button class="mobile-menu-btn" aria-label="Open Menu" onclick="toggleMobileMenu()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 12h18M3 6h18M3 18h18"/>
                    </svg>
                </button>

                {{-- Search box & Social --}}
                <div class="search-social-group" style="display:flex; align-items:center; gap:8px;">

                    {{-- 🔍 Mobile Search Button --}}
                    <button type="button" class="mobile-search-btn" onclick="toggleSearchBox()" aria-label="Search">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                    </button>

                    {{-- 🔎 Search Box --}}
                    <form action="{{ route('shop') }}" method="GET" class="search-box" id="searchBox">
                        <input 
                            type="search" 
                            name="search" 
                            value="{{ request('search') }}" 
                            placeholder="{{__('Search')}}..."
                        >
                        <button type="submit" aria-label="Search">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8"/>
                                <path d="m21 21-4.35-4.35"/>
                            </svg>
                        </button>
                    </form>

                    {{-- Social Icons --}}
                    <div class="header-social-icons" style="display:flex; gap:6px;">
                        <a href="{{ $ws->fb_url ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $ws->youtube_url ?? '#' }}" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="{{ $ws->instagram_url ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>

                </div>

                <style>
                    /* ===== Desktop ===== */
                    .mobile-search-btn {
                        display: none;
                        background: none;
                        border: none;
                        cursor: pointer;
                        color: #333;
                    }

                    .search-box {
                        width: 130px;
                        height: 32px;
                        border-radius: 4px;
                        border: 1px solid #ddd;
                        display: flex;
                        align-items: center;
                        background: #fff;
                        overflow: hidden;
                    }

                    .search-box input {
                        height: 100%;
                        font-size: 11px;
                        padding: 0 6px;
                        border: none;
                        outline: none;
                        width: 100%;
                        background: transparent;
                    }

                    .search-box button {
                        height: 100%;
                        width: 30px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background: none;
                        border: none;
                        cursor: pointer;
                        color: #666;
                    }

                    /* ===== Mobile ===== */
                    @media (max-width: 768px) {
                        .mobile-search-btn {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .search-box {
                            display: none;
                            position: fixed;
                            top: 70px;
                            left: 50%;
                            transform: translateX(-50%);
                            width: 90%;
                            max-width: 400px;
                            height: 40px;
                            padding: 0 8px;
                            border-radius: 6px;
                            background: #fff;
                            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
                            z-index: 9999;
                        }

                        .search-box.active {
                            display: flex;
                        }

                        /* Hide YouTube and Instagram icons on mobile */
                        .header-social-icons a:nth-child(2),
                        .header-social-icons a:nth-child(3) {
                            display: none;
                        }

                        /* Prevent horizontal scroll and extra space on mobile */
                        body {
                            overflow-x: hidden;
                            width: 100%;
                            max-width: 100vw;
                        }

                        * {
                            max-width: 100%;
                            box-sizing: border-box;
                        }
                    }

                    /* Category Images & 3-Layer Hover Effects */
                    .nav-cat-img {
                        width: 22px;
                        height: 22px;
                        object-fit: cover;
                        border-radius: 4px;
                        margin-right: 8px;
                        vertical-align: middle;
                        display: inline-block;
                    }
                    .menu-cat-img {
                        width: 28px;
                        height: 28px;
                        object-fit: cover;
                        border-radius: 4px;
                        margin-right: 10px;
                        vertical-align: middle;
                        display: inline-block;
                    }
                    .menu-child-img {
                        width: 20px;
                        height: 20px;
                        object-fit: cover;
                        border-radius: 3px;
                        margin-right: 8px;
                        vertical-align: middle;
                        display: inline-block;
                    }
                    .level2-wrapper {
                        margin-bottom: 15px;
                        transition: all 0.3s ease;
                        position: relative;
                    }
                    .level2-header {
                        margin-bottom: 5px !important;
                        border-bottom: 1px solid #f0f0f0;
                        padding-bottom: 6px;
                    }
                    .level2-link {
                        display: flex;
                        align-items: center;
                        font-weight: 600 !important;
                        color: #333 !important;
                        font-size: 14px;
                        transition: color 0.2s;
                    }
                    .level2-link:hover {
                        color: var(--secondary-color) !important;
                    }
                    .level3-list {
                        display: none; /* Hide by default */
                        list-style: none;
                        padding: 12px;
                        margin-top: 8px;
                        background: #f9f9f9;
                        border-radius: 8px;
                        border: 1px solid #eee;
                        grid-template-columns: repeat(2, 1fr);
                        gap: 10px;
                        animation: fadeIn 0.3s ease forwards;
                    }
                    .level2-wrapper:hover .level3-list,
                    .level2-wrapper.open .level3-list {
                        display: grid; /* Show as grid on hover or when open */
                    }
                    .level3-link {
                        display: flex !important;
                        align-items: center;
                        gap: 8px;
                        padding: 6px 8px;
                        background: #fff;
                        border-radius: 6px;
                        border: 1px solid transparent;
                        transition: all 0.2s ease;
                        font-size: 13px;
                        color: #555;
                        text-decoration: none;
                    }
                    .level3-link:hover {
                        border-color: #ddd;
                        color: var(--secondary-color) !important;
                        transform: translateY(-1px);
                        box-shadow: 0 3px 8px rgba(0,0,0,0.05);
                    }
                    
                    /* Mobile Toggle Arrows */
                    .mobile-toggle-arrow {
                        display: none;
                        margin-left: auto;
                        padding: 5px;
                        transition: transform 0.3s ease;
                    }
                    
                    @media (max-width: 768px) {
                        .mobile-toggle-arrow {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }
                        .has-dropdown > a, .level2-link {
                            display: flex !important;
                            align-items: center;
                            width: 100%;
                        }
                        .has-dropdown.open > a > .mobile-toggle-arrow,
                        .level2-wrapper.open .level2-link > .mobile-toggle-arrow {
                            transform: rotate(180deg);
                        }
                        
                        .level2-wrapper {
                            margin-bottom: 5px;
                        }
                        .level2-header {
                            padding: 10px 0;
                        }
                        .level3-list {
                            grid-template-columns: 1fr; /* Single column on mobile */
                            margin-bottom: 15px;
                        }
                    }
                    @keyframes fadeIn {
                        from { opacity: 0; transform: translateY(-5px); }
                        to { opacity: 1; transform: translateY(0); }
                    }
                </style>

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}"
                         onerror="this.onerror=null;this.src='{{ asset('images/logo.png') }}';"
                         alt="Musafir International"
                         width="177" height="70">
                </a>

                {{-- Icons: language + sign in --}}
                <div class="header-icons">

                    {{-- Language Toggle --}}
                    <div class="language-toggle-wrap">
                        @if(App::getLocale() == 'en')
                            <a href="{{ route('welcome.changeLanguage', ['lang' => 'bn']) }}" class="lang-link" style="display: flex; align-items: center; gap: 6px; font-size: 13px; color: #333; text-decoration: none; font-weight: 500;">
                                <img src="https://flagcdn.com/w20/bd.png" alt="BD" style="width: 20px; height: auto; border-radius: 2px;">
                                <span>BN</span>
                            </a>
                        @else
                            <a href="{{ route('welcome.changeLanguage', ['lang' => 'en']) }}" class="lang-link" style="display: flex; align-items: center; gap: 6px; font-size: 13px; color: #333; text-decoration: none; font-weight: 500;">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" style="width: 20px; height: auto; border-radius: 2px;">
                                <span>EN</span>
                            </a>
                        @endif
                    </div>

                    {{-- Account Dropdown --}}
                    @if(Auth::check())
                        @php $user = auth()->user(); @endphp
                        <div class="account-dropdown">
                            <button type="button" onclick="toggleAccountDropdown()" aria-haspopup="true" aria-expanded="false" class="account-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                                <span>{{ Str::limit($user->name, 10) }}</span>
                            </button>
                            <div class="dropdown-menu" id="accountDropdown" role="menu">
                                @if ($user->hasRole('admin'))
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{__('Admin Dashboard')}}</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('user.dashboard') }}">{{__('Member Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="account-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <span>{{ __('Sign In')}}</span>
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
    {{-- /header-top --}}

    {{-- ── Main navigation (3-Layer Mega Menu) ─────────────────── --}}
    <nav class="main-nav" id="mainNav" aria-label="Main navigation">
        <div class="container">
            <ul class="nav-menu">

                {{-- Home --}}
                <li><a href="{{ route('test_home') }}" @class(['active' => request()->is('/')])>{{ __('Home') }}</a></li>

                @php
                    // Get all top-level parent categories (where parent_id is NULL)
                    $parentCategories = \App\Models\ProductCategory::whereNull('parent_id')
                        ->where('active', 1)
                        ->orderBy('position', 'asc')
                        ->orderBy('name_' . app()->getLocale())
                        ->get();
                @endphp

                {{-- Shop Mega Menu --}}
                @php
                    $allProducts = \App\Models\Product::where('active', 1)
                        ->orderBy('name_' . app()->getLocale())
                        ->get()
                        ->chunk(10);
                @endphp

                {{--<li class="has-dropdown">
                    <a href="{{ route('shop') }}">{{ __('Shop') }}</a>
                    <div class="mega-menu" role="region">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">
                                <div class="mega-menu-links">
                                    @foreach($allProducts as $chunk)
                                        <div class="mega-menu-col">
                                            <h4>{{ __('Products') }}</h4>
                                            <ul>
                                                @foreach($chunk as $product)
                                                    <li>
                                                        <a href="{{ route('productDetails', $product->slug) }}">
                                                            {{ $product->{'name_' . app()->getLocale()} }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mega-menu-images">
                                    @php
                                        $featuredProducts = \App\Models\Product::where('active', 1)
                                            ->latest()
                                            ->take(3)
                                            ->get();
                                    @endphp
                                    @foreach($featuredProducts as $product)
                                        <a href="{{ route('productDetails', $product->slug) }}" class="menu-image-block">
                                            <div class="image-wrap">
                                                <img src="{{ route('imagecache', ['template'=>'original','filename'=>$product->featured_image]) }}"
                                                     alt="{{ $product->{'name_' . app()->getLocale()} }}"
                                                     loading="lazy">
                                            </div>
                                            <div class="image-content">
                                                <span class="title">{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</span>
                                                <span class="arrow">
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                        <path d="M5 12h14M12 5l7 7-7 7"/>
                                                    </svg>
                                                </span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </li>--}}

                {{-- Loop through Parent Categories for 3-Layer Mega Menu --}}
                @foreach($parentCategories as $category)
                    @php
                        // Get level 2 subcategories
                        $level2Categories = \App\Models\ProductCategory::where('parent_id', $category->id)
                            ->where('active', 1)
                            ->orderBy('position', 'asc')
                            ->orderBy('name_' . app()->getLocale())
                            ->get();
                        
                        // Check if this category has any level 3 categories
                        $hasLevel3 = false;
                        foreach($level2Categories as $level2) {
                            $level3Count = \App\Models\ProductCategory::where('parent_id', $level2->id)
                                ->where('active', 1)
                                ->count();
                            if($level3Count > 0) {
                                $hasLevel3 = true;
                                break;
                            }
                        }
                    @endphp

                    <li class="has-dropdown">
                        <a href="{{ route('productCategory', $category->slug) }}">
                            @if($category->image)
                                <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $category->image]) }}" 
                                     alt="{{ $category->{'name_' . app()->getLocale()} }}" 
                                     class="nav-cat-img">
                            @endif
                            {{ $category->{'name_' . app()->getLocale()} }}
                            <span class="mobile-toggle-arrow">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                            </span>
                        </a>

                        {{-- Mega Menu Container --}}
                        <div class="mega-menu mega-menu-3layer" role="region">
                            <div class="mega-menu-container">
                                <div class="mega-menu-row">
                                    
                                    {{-- LEFT SIDE: Subcategories with 3rd level support --}}
                                    <div class="mega-menu-links">
                                        @php
                                            // Chunk level2 categories into columns (max 5 per column)
                                            $level2Chunks = $level2Categories->chunk(5);
                                        @endphp

                                        @foreach($level2Chunks as $chunk)
                                            <div class="mega-menu-col">
                                                @foreach($chunk as $level2)
                                                    <div class="level2-wrapper">
                                                        {{-- Level 2 Category Header --}}
                                                        <h4 class="level2-header">
                                                            <a href="{{ route('productCategory', $level2->slug) }}" class="level2-link">
                                                                @if($level2->image)
                                                                    <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $level2->image]) }}" 
                                                                         alt="{{ $level2->{'name_' . app()->getLocale()} }}" 
                                                                         class="menu-cat-img">
                                                                @endif
                                                                {{ $level2->{'name_' . app()->getLocale()} }}
                                                                @php
                                                                    $level3Categories = \App\Models\ProductCategory::where('parent_id', $level2->id)
                                                                        ->where('active', 1)
                                                                        ->orderBy('position', 'asc')
                                                                        ->orderBy('name_' . app()->getLocale())
                                                                        ->get();
                                                                @endphp
                                                                @if($level3Categories->count() > 0)
                                                                    <span class="mobile-toggle-arrow">
                                                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                                                            <path d="m6 9 6 6 6-6"/>
                                                                        </svg>
                                                                    </span>
                                                                @endif
                                                            </a>
                                                        </h4>
                                                        
                                                        {{-- Level 3 Subcategories (if exist) --}}
                                                        @if($level3Categories->count() > 0)
                                                            <ul class="level3-list">
                                                                @foreach($level3Categories as $level3)
                                                                    <li>
                                                                        <a href="{{ route('productCategory', $level3->slug) }}" class="level3-link">
                                                                            @if($level3->image)
                                                                                <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $level3->image]) }}" 
                                                                                     alt="{{ $level3->{'name_' . app()->getLocale()} }}" 
                                                                                     class="menu-child-img">
                                                                            @endif
                                                                            {{ $level3->{'name_' . app()->getLocale()} }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>

                                    {{-- RIGHT SIDE: Featured Products Images --}}
                                    <div class="mega-menu-images">
                                        @php
                                            // Get products from this category (including subcategories)
                                            $categoryIds = [$category->id];
                                            foreach($level2Categories as $level2) {
                                                $categoryIds[] = $level2->id;
                                                $level3Categories = \App\Models\ProductCategory::where('parent_id', $level2->id)
                                                    ->where('active', 1)
                                                    ->get();
                                                foreach($level3Categories as $level3) {
                                                    $categoryIds[] = $level3->id;
                                                }
                                            }
                                            
                                            $products = \App\Models\Product::whereHas('categories', function($q) use ($categoryIds) {
                                                    $q->whereIn('product_category_id', $categoryIds);
                                                })
                                                ->where('active', 1)
                                                ->latest()
                                                ->take(3)
                                                ->get();
                                        @endphp

                                        @forelse($products as $product)
                                            <a href="{{ route('productDetails', $product->slug) }}" class="menu-image-block">
                                                <div class="image-wrap">
                                                    <img src="{{ route('imagecache', ['template'=>'original','filename'=>$product->featured_image]) }}"
                                                         alt="{{ $product->{'name_' . app()->getLocale()} }}"
                                                         loading="lazy">
                                                </div>
                                                <div class="image-content">
                                                    <span class="title">{{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}</span>
                                                    <span class="arrow">
                                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </a>
                                        @empty
                                            {{-- Fallback images if no products --}}
                                            <div class="menu-image-block placeholder">
                                                <div class="image-wrap">
                                                    <img src="{{ asset('images/placeholder.jpg') }}" alt="Coming Soon" loading="lazy">
                                                </div>
                                                <div class="image-content">
                                                    <span class="title">{{ __('Coming Soon') }}</span>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

                {{-- Static links --}}
                <li><a href="{{ route('test_about') }}" @class(['active' => request()->is('about')])>{{ __('About Us') }}</a></li>
                <li><a href="{{ route('test_contact') }}" @class(['active' => request()->is('contact')])>{{ __('Contact Us') }}</a></li>

            </ul>
        </div>
    </nav>{{-- /main-nav --}}

</header>

<script>
    // Toggle mobile menu
    function toggleMobileMenu() {
        const nav = document.getElementById('mainNav');
        nav.classList.toggle('active');
    }

    // Toggle search box on mobile
    function toggleSearchBox() {
        const searchBox = document.getElementById('searchBox');
        searchBox.classList.toggle('active');
    }

    // Toggle account dropdown
    function toggleAccountDropdown() {
        const dropdown = document.getElementById('accountDropdown');
        dropdown.classList.toggle('show');
    }

    // Mobile Menu Click Handlers
    document.addEventListener('DOMContentLoaded', function() {
        // Level 1 Dropdown
        document.querySelectorAll('.has-dropdown > a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    const parent = this.closest('.has-dropdown');
                    parent.classList.toggle('open');
                }
            });
        });

        // Level 2 Dropdown
        document.querySelectorAll('.level2-link').forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    const wrapper = this.closest('.level2-wrapper');
                    const level3List = wrapper.querySelector('.level3-list');
                    if (level3List) {
                        e.preventDefault();
                        wrapper.classList.toggle('open');
                    }
                }
            });
        });
    });

    // Close dropdown when clicking outside
    window.addEventListener('click', function(e) {
        const accountDropdown = document.getElementById('accountDropdown');
        const accountBtn = document.querySelector('.account-btn');
        if (accountDropdown && accountBtn && !accountBtn.contains(e.target)) {
            accountDropdown.classList.remove('show');
        }
    });
</script>