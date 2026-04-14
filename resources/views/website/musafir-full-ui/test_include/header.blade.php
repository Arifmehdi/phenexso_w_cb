{{-- ============================================================
     resources/views/partials/header.blade.php
     Full sticky header: top bar (search / logo / icons) + mega‑nav
     ============================================================ --}}

<header class="header">

    {{-- ── Top bar ──────────────────────────────────────────────── --}}
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">

                {{-- Mobile hamburger --}}
                <button class="mobile-menu-btn" aria-label="Open Menu" onclick="toggleMobileMenu()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 12h18M3 6h18M3 18h18"/>
                    </svg>
                </button>

                {{-- Search box --}}
                <div class="search-box">
                    <input type="search" placeholder="What are you looking for?">
                    <button type="submit" aria-label="Search">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                    </button>
                </div>

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}"
                         onerror="this.onerror=null;this.src='https://via.placeholder.com/177x70?text=Logo'"
                         alt="Musafir International"
                         width="177" height="70">
                </a>

                {{-- Icons: language + sign in --}}
                <div class="header-icons">

                    <div class="language-selector">
                        <button onclick="toggleLanguageDropdown()" aria-haspopup="true" aria-expanded="false">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                            </svg>
                            <span>Language</span>
                        </button>
                        <div class="dropdown-menu" id="languageDropdown" role="menu">
                            <a href="#" role="menuitem">English</a>
                            <a href="#" role="menuitem">বাংলা</a>
                        </div>
                    </div>

                    <a href="#" class="account-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <span>Sign In</span>
                    </a>

                </div>
            </div>
        </div>
    </div>{{-- /header-top --}}

    {{-- ── Main navigation ─────────────────────────────────────── --}}
    <nav class="main-nav" id="mainNav" aria-label="Main navigation">
        <div class="container">
            <ul class="nav-menu">

                {{-- Home --}}
                <li><a href="{{ route('test_home') }}" @class(['active' => request()->is('/')])>Home</a></li>

                {{-- ── Bathroom Tiles ── --}}
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
                </li>

                {{-- Static links --}}
                <li><a href="{{ route('test_about') }}" @class(['active' => request()->is('about')])>About Us</a></li>
                <li><a href="{{ route('test_contact') }}" @class(['active' => request()->is('contact')])>Contact Us</a></li>

            </ul>
        </div>
    </nav>{{-- /main-nav --}}

</header>
