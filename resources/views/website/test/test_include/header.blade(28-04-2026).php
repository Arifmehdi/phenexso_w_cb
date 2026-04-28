{{-- ============================================================
     resources/views/partials/header.blade.php
     Full sticky header: top bar (search / logo / icons) + mega‑nav
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
                                <!-- <span>বাংলা</span> -->
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

    {{-- ── Main navigation ─────────────────────────────────────── --}}
    <nav class="main-nav" id="mainNav" aria-label="Main navigation">
        <div class="container">
            <ul class="nav-menu">

                {{-- Home --}}
                <li><a href="{{ route('test_home') }}" @class(['active' => request()->is('/')])>{{ __('Home') }}</a></li>

                @php
                    $parentCategories = \App\Models\ProductCategory::whereNull('parent_id')
                        ->where('active', 1)
                        ->orderBy('name_' . app()->getLocale())
                        ->get();
                @endphp

                @foreach($parentCategories as $category)

                <li class="has-dropdown">
                    <a href="#">{{ $category->{'name_' . app()->getLocale()} }}</a>

                    <div class="mega-menu" role="region">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">

                                {{-- LEFT SIDE (SUBCATEGORIES) --}}
                                <div class="mega-menu-links">
                                    
                                    @php
                                        $subCategories = \App\Models\ProductCategory::where('parent_id', $category->id)
                                            ->where('active', 1)
                                            ->orderBy('name_' . app()->getLocale())
                                            ->get();

                                        $chunks = $subCategories->chunk(5); // 5 per column
                                    @endphp

                                    @foreach($chunks as $chunk)
                                        <div class="mega-menu-col">
                                            <h4>{{ $category->{'name_' . app()->getLocale()} }}</h4>
                                            <ul>
                                                @foreach($chunk as $sub)
                                                    <li>
                                                        <a href="{{ route('productCategory', $sub->slug) }}">
                                                            {{ $sub->{'name_' . app()->getLocale()} }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach

                                </div>

                                {{-- RIGHT SIDE (IMAGES) --}}
                                <div class="mega-menu-images">
                                    
                                    @php
                                        $products = \App\Models\Product::whereHas('categories', function($q) use ($category) {
                                                $q->where('product_category_id', $category->id);
                                            })
                                            ->where('active', 1)
                                            ->latest()
                                            ->take(3)
                                            ->get();
                                    @endphp

                                    @foreach($products as $product)
                                        <a href="{{ route('productDetails', $product->slug) }}" class="menu-image-block">
                                            
                                            <div class="image-wrap">
                                                <img 
                                                    src="{{ route('imagecache', ['template'=>'original','filename'=>$product->featured_image]) }}"
                                                    alt="{{ $product->{'name_' . app()->getLocale()} }}"
                                                    loading="lazy"
                                                >
                                            </div>

                                            <div class="image-content">
                                                <span class="title">
                                                    {{ Str::limit($product->{'name_' . app()->getLocale()}, 30) }}
                                                </span>
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
                </li>

                @endforeach


                <!-- {{-- ── Bathroom Tiles ── --}}
                <li class="has-dropdown">
                    <a href="#">Bathroom Tiles</a>
                    <div class="mega-menu" role="region" aria-label="Bathroom Tiles menu">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">

                                {{-- Links (left 3 cols) --}}
                                <div class="mega-menu-links">
                                    <div class="mega-menu-col">
                                        <h4>Bathroom Tiles</h4>
                                        <ul>
                                            <li><a href="#">Wall Tiles</a></li>
                                            <li><a href="#">Floor Tiles</a></li>
                                            <li><a href="#">Mosaic Tiles</a></li>
                                            <li><a href="#">Subway Tiles</a></li>
                                            <li><a href="#">Large Format</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Popular Sizes</h4>
                                        <ul>
                                            <li><a href="#">30×60 cm</a></li>
                                            <li><a href="#">30×30 cm</a></li>
                                            <li><a href="#">25×50 cm</a></li>
                                            <li><a href="#">20×20 cm</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Finish</h4>
                                        <ul>
                                            <li><a href="#">Glossy</a></li>
                                            <li><a href="#">Matt</a></li>
                                            <li><a href="#">Rustic</a></li>
                                            <li><a href="#">Textured</a></li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- Images (right 3 cols) --}}
                                <div class="mega-menu-images">
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=400&h=300&fit=crop" alt="Modern Bathroom" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Modern Bathroom</span>
                                            <span class="arrow">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=400&h=300&fit=crop" alt="Classic White" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Classic White</span>
                                            <span class="arrow">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=300&fit=crop" alt="Premium Collection" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Premium Collection</span>
                                            <span class="arrow">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                            </span>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>

                {{-- ── Kitchen Tiles ── --}}
                <li class="has-dropdown">
                    <a href="#">Kitchen Tiles</a>
                    <div class="mega-menu" role="region" aria-label="Kitchen Tiles menu">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">
                                <div class="mega-menu-links">
                                    <div class="mega-menu-col">
                                        <h4>Kitchen Tiles</h4>
                                        <ul>
                                            <li><a href="#">Backsplash</a></li>
                                            <li><a href="#">Floor Tiles</a></li>
                                            <li><a href="#">Wall Tiles</a></li>
                                            <li><a href="#">Metro Tiles</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Style</h4>
                                        <ul>
                                            <li><a href="#">Modern</a></li>
                                            <li><a href="#">Classic</a></li>
                                            <li><a href="#">Rustic</a></li>
                                            <li><a href="#">Contemporary</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Size</h4>
                                        <ul>
                                            <li><a href="#">30×60 cm</a></li>
                                            <li><a href="#">25×50 cm</a></li>
                                            <li><a href="#">20×20 cm</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-menu-images">
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&h=300&fit=crop" alt="Kitchen Backsplash" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Kitchen Backsplash</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=300&fit=crop" alt="Modern Kitchen" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Modern Kitchen</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=400&h=300&fit=crop" alt="Classic Style" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Classic Style</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- ── Wall Tiles ── --}}
                <li class="has-dropdown">
                    <a href="#">Wall Tiles</a>
                    <div class="mega-menu" role="region" aria-label="Wall Tiles menu">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">
                                <div class="mega-menu-links">
                                    <div class="mega-menu-col">
                                        <h4>Wall Tiles</h4>
                                        <ul>
                                            <li><a href="#">Ceramic Tiles</a></li>
                                            <li><a href="#">Porcelain Tiles</a></li>
                                            <li><a href="#">Glass Tiles</a></li>
                                            <li><a href="#">Stone Tiles</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Finish</h4>
                                        <ul>
                                            <li><a href="#">Glossy</a></li>
                                            <li><a href="#">Matt</a></li>
                                            <li><a href="#">Satin</a></li>
                                            <li><a href="#">Textured</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Popular</h4>
                                        <ul>
                                            <li><a href="#">Subway Tiles</a></li>
                                            <li><a href="#">Mosaic Tiles</a></li>
                                            <li><a href="#">Metro Tiles</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-menu-images">
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=400&h=300&fit=crop" alt="Modern Wall" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Modern Wall</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=400&h=300&fit=crop" alt="Designer Look" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Designer Look</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&h=300&fit=crop" alt="Stone Effect" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Stone Effect</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- ── Floor Tiles ── --}}
                <li class="has-dropdown">
                    <a href="#">Floor Tiles</a>
                    <div class="mega-menu" role="region" aria-label="Floor Tiles menu">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">
                                <div class="mega-menu-links">
                                    <div class="mega-menu-col">
                                        <h4>Floor Tiles</h4>
                                        <ul>
                                            <li><a href="#">Porcelain</a></li>
                                            <li><a href="#">Ceramic</a></li>
                                            <li><a href="#">Natural Stone</a></li>
                                            <li><a href="#">Vinyl Effect</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Use</h4>
                                        <ul>
                                            <li><a href="#">Living Room</a></li>
                                            <li><a href="#">Hallway</a></li>
                                            <li><a href="#">Conservatory</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Size</h4>
                                        <ul>
                                            <li><a href="#">60×60 cm</a></li>
                                            <li><a href="#">30×60 cm</a></li>
                                            <li><a href="#">45×45 cm</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-menu-images">
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=400&h=300&fit=crop" alt="Living Room Floor" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Living Room Floor</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&h=300&fit=crop" alt="Modern Design" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Modern Design</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=400&h=300&fit=crop" alt="Classic Look" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Classic Look</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- ── Outdoor Tiles ── --}}
                <li class="has-dropdown">
                    <a href="#">Outdoor Tiles</a>
                    <div class="mega-menu" role="region" aria-label="Outdoor Tiles menu">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">
                                <div class="mega-menu-links">
                                    <div class="mega-menu-col">
                                        <h4>Outdoor Tiles</h4>
                                        <ul>
                                            <li><a href="#">Patio Tiles</a></li>
                                            <li><a href="#">Pool Tiles</a></li>
                                            <li><a href="#">Driveway Tiles</a></li>
                                            <li><a href="#">Garden Tiles</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Material</h4>
                                        <ul>
                                            <li><a href="#">Porcelain</a></li>
                                            <li><a href="#">Natural Stone</a></li>
                                            <li><a href="#">Concrete</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Feature</h4>
                                        <ul>
                                            <li><a href="#">Anti-slip</a></li>
                                            <li><a href="#">Frost Resistant</a></li>
                                            <li><a href="#">Durable</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-menu-images">
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?w=400&h=300&fit=crop" alt="Patio Tiles" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Patio Tiles</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=400&h=300&fit=crop" alt="Pool Area" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Pool Area</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=300&fit=crop" alt="Garden Path" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Garden Path</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- ── Wood Effects ── --}}
                <li class="has-dropdown">
                    <a href="#">Wood Effects</a>
                    <div class="mega-menu" role="region" aria-label="Wood Effects menu">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">
                                <div class="mega-menu-links">
                                    <div class="mega-menu-col">
                                        <h4>Wood Effects</h4>
                                        <ul>
                                            <li><a href="#">Plank Tiles</a></li>
                                            <li><a href="#">Herringbone</a></li>
                                            <li><a href="#">Chevron</a></li>
                                            <li><a href="#">Parquet</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Colour</h4>
                                        <ul>
                                            <li><a href="#">Oak</a></li>
                                            <li><a href="#">Walnut</a></li>
                                            <li><a href="#">Grey</a></li>
                                            <li><a href="#">Honey</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Size</h4>
                                        <ul>
                                            <li><a href="#">20×120 cm</a></li>
                                            <li><a href="#">15×90 cm</a></li>
                                            <li><a href="#">30×60 cm</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-menu-images">
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=400&h=300&fit=crop" alt="Oak Planks" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Oak Planks</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=300&fit=crop" alt="Herringbone" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Herringbone</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=400&h=300&fit=crop" alt="Walnut Style" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Walnut Style</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- ── Construction Materials ── --}}
                <li class="has-dropdown">
                    <a href="#">Construction Materials</a>
                    <div class="mega-menu" role="region" aria-label="Construction Materials menu">
                        <div class="mega-menu-container">
                            <div class="mega-menu-row">
                                <div class="mega-menu-links">
                                    <div class="mega-menu-col">
                                        <h4>Construction Materials</h4>
                                        <ul>
                                            <li><a href="#">Parking Tiles</a></li>
                                            <li><a href="#">Hollow Block</a></li>
                                            <li><a href="#">Solid Bricks</a></li>
                                            <li><a href="#">Pavers</a></li>
                                            <li><a href="#">Kerb Stone</a></li>
                                            <li><a href="#">Plank Tiles</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Type</h4>
                                        <ul>
                                            <li><a href="#">Kerb Stone</a></li>
                                            <li><a href="#">RCC Pipes</a></li>
                                            <li><a href="#">Fly Ash Bricks</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-col">
                                        <h4>Usage</h4>
                                        <ul>
                                            <li><a href="#">Roofing</a></li>
                                            <li><a href="#">Flooring</a></li>
                                            <li><a href="#">Walling</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-menu-images">
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?w=400&h=300&fit=crop" alt="Parking Tiles" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Parking Tiles</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=300&fit=crop" alt="Hollow Blocks" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Hollow Blocks</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                    <a href="#" class="menu-image-block">
                                        <div class="image-wrap">
                                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=400&h=300&fit=crop" alt="Pavers" loading="lazy">
                                        </div>
                                        <div class="image-content">
                                            <span class="title">Pavers</span>
                                            <span class="arrow"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->

                {{-- Static links --}}
                <li><a href="{{ route('test_about') }}" @class(['active' => request()->is('about')])>{{ __('About Us') }}</a></li>
                <li><a href="{{ route('test_contact') }}" @class(['active' => request()->is('contact')])>{{ __('Contact Us') }}</a></li>

            </ul>
        </div>
    </nav>{{-- /main-nav --}}

</header>
