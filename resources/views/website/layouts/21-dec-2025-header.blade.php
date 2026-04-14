  <div id="shopify-section-sections--26303089934718__header"
      class="shopify-section shopify-section-group-header-group shopify-section-header">
      <style data-shopify>
          .text-input::placeholder {
              color: rgba(var(--color-main-text), 1);
          }

          .countdown-timer {
              color: var(--timer-text-color, inherit);
              margin-left: 5px;
          }

          .countdown-timer--clapper {
              display: inline-flex;
              gap: 5px;
              align-items: center;
              font-weight: 700;
          }

          .countdown-timer--clapper .timer-unit {
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 4px;
              background-color: var(--timer-bg-color, inherit);
              font-size: inherit;
              line-height: 1;
              width: 32px;
              height: 28px;
          }
      </style>

      <div id="shopify-section-header">
          <sticky-header>
              <header class="header-section announcement-bar-active" data-section-id="sections--26303089934718__header"
                  data-section-type="header" data-header>

                  <div class="main-bar">
                      <a class="in-page-link skip-link" href="#MainContent">Skip to content</a>

                      <div class="header-section-inner" role="banner">

                          <div class="header-section-inner__top container">

                              <section class="header-icon tablet-up-hide">
                                  <button class="hamburger-icon" aria-label="open navigation"
                                      data-click-toggle='{"target": "body", "add": "mobile-nav-open"}'>
                                      <svg width="20" height="16" fill-rule="evenodd" stroke-linecap="round"
                                          stroke-linejoin="round" clip-rule="evenodd" viewBox="0 0 20 16">
                                          <defs />
                                          <path fill="none" stroke="#111" stroke-width="2"
                                              d="M1 8h17.057M1 1h17.057M1 15h17.057" />
                                      </svg>
                                  </button>
                                  <button class="nav-close-btn" role="button" type="button"
                                      data-click-toggle='{"target": "body", "remove": "mobile-nav-open"}'
                                      aria-label="Navigation close">
                                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>

                                  </button>

                                  <button aria-label="Toggle Search" class="custom-search-button custom-drawer-button"
                                      drawer-trigger data-target-drawer="site-mobile-search">
                                      <div drawer-icon-open>
                                          <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path d="M21.5 21L15.156 14.656" stroke="#212A2F" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round" />
                                              <path
                                                  d="M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z"
                                                  stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                          </svg>

                                      </div>
                                      <div drawer-icon-close>
                                          <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path
                                                  d="M21.5 21L15.156 14.656M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z"
                                                  stroke="black" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                              <circle cx="16.5" cy="15.5" r="6.5" fill="#FAC828" />
                                              <path d="M19 18L16.5 15.5M16.5 15.5L14 13M16.5 15.5L19 13M16.5 15.5L14 18"
                                                  stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>

                                      </div>
                                  </button>
                              </section>

                              <div style="width: 100%" class="tablet-hide">
                                  <div id="site-search__wrapper" class="tablet-hide">
                                      <predictive-search>
                                          <form id="PredictiveSearchForm" action="#" method="get" role="search">
                                              <label class="visually-hidden" for="Search">Search</label>
                                              <input type="hidden" name="type" value="product">
                                              <div class="search-inner">
                                                  <input id="site-search__input" class="text-input" type="search"
                                                      name="q" placeholder="{{__('What are you looking for')}}?" role="combobox"
                                                      aria-expanded="false" aria-owns="predictive-search-results"
                                                      aria-controls="predictive-search-results" aria-haspopup="listbox"
                                                      aria-autocomplete="list">
                                                  <button class="search-inner__submit icon-button" type="submit">
                                                      <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M21.5 21L15.156 14.656" stroke="#212A2F"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                          <path
                                                              d="M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z"
                                                              stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                      </svg>
                                                  </button>
                                              </div>
                                              <input name="options[prefix]" type="hidden" value="last">
                                              <div id="predictive-search" class="predictive-search-desktop"
                                                  tabindex="-1"></div>
                                          </form>
                                      </predictive-search>
                                  </div>
                              </div>
                              <div class="logo-image-container">
                                  <a href="{{ route('home') }}" class="">

                                      <img src="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}&amp;width=500"
                                          alt="Musafit International Superstore"
                                          srcset="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}&amp;width=177 177w, {{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}?v=1722420418&amp;width=352 352w"
                                          width="177" height="70" loading="eager">
                                  </a>
                              </div>

                              <ul class="header-section-icons">

                                  <!-- Language Icon -->
                                  <li class="tablet-hide position-relative" style="z-index:1050;">
                                      <div class="header-icons-customer-snippet">
                                          <button type="button" class="icon-toggle language-toggle">
                                              <!-- Language SVG -->
                                              <svg width="{{ $width ?? 20 }}" height="{{ $height ?? 22 }}"
                                                  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <circle cx="12" cy="12" r="10" stroke="{{ $color ?? '#0D1F22' }}"
                                                      stroke-width="2" />
                                                  <path d="M2 12H22" stroke="{{ $color ?? '#0D1F22' }}"
                                                      stroke-width="2" />
                                                  <path d="M12 2C15 5 15 19 12 22C9 19 9 5 12 2Z"
                                                      stroke="{{ $color ?? '#0D1F22' }}" stroke-width="2" />
                                                  <path d="M6 6C8 8 8 16 6 18M18 6C16 8 16 16 18 18"
                                                      stroke="{{ $color ?? '#0D1F22' }}" stroke-width="2" />
                                              </svg>

                                              <small class="icon-label">{{__('Language')}}</small>
                                          </button>
                                          <div class="custom-dropdown language-dropdown" style="display:none;">
                                              <a class="dropdown-item"
                                                  href="{{ route('welcome.changeLanguage', ['lang' => 'en']) }}">English</a>
                                              <a class="dropdown-item"
                                                  href="{{ route('welcome.changeLanguage', ['lang' => 'bn']) }}">বাংলা</a>
                                          </div>
                                      </div>
                                  </li>

                                  <!-- Trade Icon -->
                                  {{--<li class="tablet-hide position-relative">
                                      <div class="header-icons-customer-snippet">
                                          <a href="{{ route('trade') }}" class="icon-toggle">
                                              <svg width="20" height="22" viewBox="0 0 20 23" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M4.15625 8.3125C3.94141 8.3125 3.8125 8.18359 3.8125 7.96875V6.59375C3.8125 6.42188 3.94141 6.25 4.15625 6.25H4.5C4.5 4.27344 5.70312 2.59766 7.42188 1.86719L8.625 4.1875V1.4375C8.625 1.09375 8.92578 0.75 9.3125 0.75H10.6875C11.0312 0.75 11.375 1.09375 11.375 1.4375V4.1875L12.5352 1.86719C14.2539 2.59766 15.5 4.27344 15.5 6.25H15.8438C16.0156 6.25 16.1875 6.42188 16.1875 6.59375V7.96875C16.1875 8.18359 16.0156 8.3125 15.8438 8.3125H4.15625ZM10 12.4375C11.5898 12.4375 13.0078 11.3203 13.3516 9.6875H15.4141C15.0703 12.3945 12.793 14.5 10 14.5C7.16406 14.5 4.88672 12.3945 4.54297 9.6875H6.60547C6.94922 11.3203 8.36719 12.4375 10 12.4375ZM13.8672 15.875C17.0469 15.875 19.625 18.4531 19.582 21.6328C19.582 22.2773 19.1094 22.75 18.4648 22.75H1.49219C0.847656 22.75 0.375 22.2773 0.375 21.6328C0.375 18.4531 2.91016 15.875 6.08984 15.875H13.8672ZM2.52344 20.6875H17.4336C17.0039 19.1406 15.5859 17.9375 13.8672 17.9375H6.08984C4.37109 17.9375 2.95312 19.1406 2.52344 20.6875Z"
                                                      fill="#0D1F22" />
                                              </svg>
                                              <small class="icon-label">Trade Sign Up</small>
                                          </a>
                                      </div>
                                  </li>--}}

                                  <!-- User Icon -->
                                  <li class="position-relative" style="z-index:1050;">
                                      @if(Auth::check())
                                      @php $user = auth()->user(); @endphp
                                      <div class="header-icons-customer-snippet">
                                          <button type="button" class="icon-toggle user-toggle">
                                              <svg width="21" height="22" viewBox="0 0 21 22" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M10.0909 8.27273C12.0992 8.27273 13.7273 6.64467 13.7273 4.63636C13.7273 2.62806 12.0992 1 10.0909 1C8.08258 1 6.45453 2.62806 6.45453 4.63636C6.45453 6.64467 8.08258 8.27273 10.0909 8.27273Z"
                                                      stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                  <path
                                                      d="M10.0909 11.9091C8.89707 11.9091 7.71493 12.1442 6.61197 12.6011C5.50901 13.058 4.50683 13.7276 3.66267 14.5718C1.95779 16.2766 1 18.5889 1 21H19.1818C19.1818 18.5889 18.224 16.2766 16.5192 14.5718C14.8143 12.8669 12.502 11.9091 10.0909 11.9091V11.9091Z"
                                                      stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                              </svg>
                                              <small class="icon-label">{{ $user->name }}</small>
                                          </button>
                                          <div class="custom-dropdown" style="display:none;">
                                              @if ($user->hasRole('admin'))
                                              <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin
                                                  Dashboard</a>
                                              @endif
                                              {{--<a class="dropdown-item" href="{{ route('user.dashboard') }}">Member
                                                  Dashboard</a>--}}
                                              <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">@csrf</form>
                                          </div>
                                      </div>
                                      @else
                                      <div class="header-icons-customer-snippet">
                                          <a href="{{ route('login') }}" class="icon-toggle">
                                              <svg width="21" height="22" viewBox="0 0 21 22" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M10.0909 8.27273C12.0992 8.27273 13.7273 6.64467 13.7273 4.63636C13.7273 2.62806 12.0992 1 10.0909 1C8.08258 1 6.45453 2.62806 6.45453 4.63636C6.45453 6.64467 8.08258 8.27273 10.0909 8.27273Z"
                                                      stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                  <path
                                                      d="M10.0909 11.9091C8.89707 11.9091 7.71493 12.1442 6.61197 12.6011C5.50901 13.058 4.50683 13.7276 3.66267 14.5718C1.95779 16.2766 1 18.5889 1 21H19.1818C19.1818 18.5889 18.224 16.2766 16.5192 14.5718C14.8143 12.8669 12.502 11.9091 10.0909 11.9091V11.9091Z"
                                                      stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                              </svg>
                                              <small class="icon-label">{{ __('Sign In')}}</small>
                                          </a>
                                      </div>
                                      @endif
                                  </li>



                                  {{--<li class="hover-fade-in">

                                      <div class="header-icons-cart-snippet header-icon">
                                          <a aria-label="Cart icon" href="#">
                                              <div class="icon-wrapper">
                                                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                          d="M19.6667 21H2.33333C1.59733 21 1 20.4027 1 19.6667V2.33333C1 1.59733 1.59733 1 2.33333 1H19.6667C20.4027 1 21 1.59733 21 2.33333V19.6667C21 20.4027 20.4027 21 19.6667 21Z"
                                                          stroke="#212A2F" stroke-width="2" stroke-miterlimit="10"
                                                          stroke-linecap="round" stroke-linejoin="round" />
                                                      <path
                                                          d="M15.6666 6.33334C15.6666 8.91068 13.5773 11 11 11C8.42265 11 6.33331 8.91068 6.33331 6.33334"
                                                          stroke="#212A2F" stroke-width="2" stroke-miterlimit="10"
                                                          stroke-linecap="round" stroke-linejoin="round" />
                                                  </svg>

                                                  <div data-app-layer-portal="cart-count-badge"></div>
                                              </div>
                                              <small class="icon-label tablet-hide">{{__('Basket')}}</small>
                                          </a>
                                      </div>
                                  </li>--}}
                              </ul>
                          </div>
                          <nav class="header-section-inner__bottom">

                              <style>
                                  a.btn-nav-first-level.highlighted_link {
                                      color: #fff !important;
                                  }

                                  .navigation-snippet .nav-first-level>li>.btn-nav-first-level.highlighted_link:before {
                                      background-color: #e8362a;
                                      z-index: -1;
                                  }
                              </style>

                              <section class="navigation-snippet container">
                                  <nav class="navigation-main" role="navigation">
                                      <div class="navigation-main__content-wrapper">
                                          <div class="navigation-main__header tablet-up-hide">
                                              <span class="h4">Menu</span>
                                              <button class="nav-close-btn" role="button" type="button"
                                                  data-click-toggle='{"target": "body", "remove": "mobile-nav-open"}'
                                                  aria-label="Navigation close">
                                                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F"
                                                          stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round" />
                                                      <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F"
                                                          stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round" />
                                                  </svg>

                                              </button>
                                          </div>

                                          <ul class="nav-first-level">

                                              <li id="nav-shop-by-room" data-nav-item="true">
                                                  <span class="btn-nav-first-level " data-nav-toggle>
                                                      <a href="#">
                                                          <span>{{__('Shop By Room')}}</span>
                                                      </a>
                                                  </span>
                                                  <div class="nav-second-level-wrapper" data-nav-hover>
                                                      <div class="container">
                                                          <div class="nav-mob-hierarchy-title">
                                                              <button class="btn-back text-upper">Back</button>
                                                              <small>Back</small>
                                                          </div>
                                                          <ul class="nav-second-level">
                                                              <li class="mob-nav-header">
                                                                  <h3 data-nav-btn-back>Back</h3>
                                                              </li>

                                                              <li class="child-link ">

                                                                  <h4 class="heading-4">
                                                                      {{__('Shop by Room')}}
                                                                  </h4>

                                                                  <div class="nav-third-levels-wrapper">
                                                                      <ul class="nav-third-level">
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Wall Tiles</a>

                                                                          </li>

                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Floor
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Bathroom
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Kitchen
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Outdoor
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Hallway
                                                                                  Tiles</a>

                                                                          </li>

                                                                      </ul>

                                                                      <ul class="nav-third-level">

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Living Room
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Fireplace &
                                                                                  Hearth Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Feature
                                                                                  Wall Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Porch
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Luxury
                                                                                  Vinyl Tiles</a>

                                                                          </li>

                                                                      </ul>
                                                                  </div>
                                                              <li class="child-link child-link__image">

                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Bathroom_Tiles_Menu_Image5bc8.jpg 1w" />
                                                                              <img src="cdn/shop/files/Bathroom_Tiles_Menu_Image5bc8.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Bathroom_Tiles_Menu_Image5bc8.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Bathroom Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>

                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Kitchen_Tiles_Menu_Image3fd4.jpg 1w" />
                                                                              <img src="cdn/shop/files/Kitchen_Tiles_Menu_Image3fd4.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Kitchen_Tiles_Menu_Image3fd4.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Kitchen Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>

                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Floor_Tiles_Menu_Imagebbef.jpg 1w" />
                                                                              <img src="cdn/shop/files/Floor_Tiles_Menu_Imagebbef.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Floor_Tiles_Menu_Imagebbef.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Floor Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>

                                                          </ul>
                                                      </div>
                                                  </div>
                                              </li>

                                              <li id="nav-shop-by-colour" data-nav-item="true">
                                                  <span class="btn-nav-first-level " data-nav-toggle>
                                                      <a href="#">
                                                          <span>{{__('Shop By Colour')}}</span>
                                                      </a>
                                                  </span>
                                                  <div class="nav-second-level-wrapper" data-nav-hover>
                                                      <div class="container">
                                                          <div class="nav-mob-hierarchy-title">
                                                              <button class="btn-back text-upper">Back</button>
                                                              <small>Back</small>
                                                          </div>
                                                          <ul class="nav-second-level">
                                                              <li class="mob-nav-header">
                                                                  <h3 data-nav-btn-back>Back</h3>
                                                              </li>
                                                              <li class="child-link ">

                                                                  <h4 class="heading-4">
                                                                      {{__('Shop By Colour')}}
                                                                  </h4>

                                                                  <div class="nav-third-levels-wrapper">
                                                                      <ul class="nav-third-level">
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Green
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">White
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Blue Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Grey Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Beige
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Pink Tiles</a>

                                                                          </li>

                                                                      </ul>

                                                                      <ul class="nav-third-level">

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Black
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Black and
                                                                                  White Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Terracotta
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Teal
                                                                                  Tiles</a>

                                                                          </li>

                                                                      </ul>
                                                                  </div>
                                                              <li class="child-link child-link__image">
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/White_Tiles_Menu_Image0e17.jpg 1w" />
                                                                              <img src="cdn/shop/files/White_Tiles_Menu_Image0e17.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/White_Tiles_Menu_Image0e17.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              White Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Image_Terracotta_Tiles9840.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Image_Terracotta_Tiles9840.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Image_Terracotta_Tiles9840.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Terracotta Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>

                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Green_Tiles_Menu_Imagea924.jpg 1w" />
                                                                              <img src="cdn/shop/files/Green_Tiles_Menu_Imagea924.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Green_Tiles_Menu_Imagea924.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Green Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </li>

                                              <li id="nav-shop-by-style" data-nav-item="true">
                                                  <span class="btn-nav-first-level " data-nav-toggle>
                                                      <a href="#">
                                                          <span>{{__('Shop By Style')}}</span>
                                                      </a>
                                                  </span>
                                                  <div class="nav-second-level-wrapper" data-nav-hover>
                                                      <div class="container">
                                                          <div class="nav-mob-hierarchy-title">
                                                              <button class="btn-back text-upper">Back</button>
                                                              <small>Back</small>
                                                          </div>
                                                          <ul class="nav-second-level">
                                                              <li class="mob-nav-header">
                                                                  <h3 data-nav-btn-back>Back</h3>
                                                              </li>

                                                              <li class="child-link ">
                                                                  <h4 class="heading-4">
                                                                      {{__('Shop By Style')}}
                                                                  </h4>
                                                                  <div class="nav-third-levels-wrapper">
                                                                      <ul class="nav-third-level">
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Marble
                                                                                  Effect Tiles</a>

                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Stone
                                                                                  Effect Tiles</a>

                                                                          </li>
                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Zellige
                                                                                  Tiles</a>

                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Fluted
                                                                                  Tiles</a>

                                                                          </li>
                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Kit Kat
                                                                                  Tiles</a>

                                                                          </li>
                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Patterned
                                                                                  Tiles</a>
                                                                          </li>
                                                                      </ul>

                                                                      <ul class="nav-third-level">
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Victorian
                                                                                  Tiles</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Moroccan
                                                                                  Tiles</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Wood Effect
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Terrazzo
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Onyx Effect
                                                                                  Tiles</a>

                                                                          </li>

                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Concrete
                                                                                  Tiles</a>

                                                                          </li>
                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Star Tiles</a>

                                                                          </li>
                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Checkerboard
                                                                                  Tiles</a>

                                                                          </li>
                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Striped
                                                                                  Tiles</a>

                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              <li class="child-link child-link__image">
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Image_Wood_Effect41ef.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Image_Wood_Effect41ef.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Image_Wood_Effect41ef.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Wood Effect Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Image_Terrazzo_Tilesa770.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Image_Terrazzo_Tilesa770.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Image_Terrazzo_Tilesa770.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Terrazzo Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Image_Patterned_Tiles7b12.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Image_Patterned_Tiles7b12.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Image_Patterned_Tiles7b12.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Patterned Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li id="nav-shop-by-shape-size" data-nav-item="true">
                                                  <span class="btn-nav-first-level " data-nav-toggle>
                                                      <a href="#">
                                                          <span>{{__('Shop By Shape & Size')}}</span>
                                                      </a>
                                                  </span>
                                                  <div class="nav-second-level-wrapper" data-nav-hover>
                                                      <div class="container">
                                                          <div class="nav-mob-hierarchy-title">
                                                              <button class="btn-back text-upper">Back</button>
                                                              <small>Back</small>
                                                          </div>
                                                          <ul class="nav-second-level">
                                                              <li class="mob-nav-header">
                                                                  <h3 data-nav-btn-back>Back</h3>
                                                              </li>
                                                              <li class="child-link ">
                                                                  <h4 class="heading-4">
                                                                      {{__('By Shape & Size')}}
                                                                  </h4>
                                                                  <div class="nav-third-levels-wrapper">
                                                                      <ul class="nav-third-level">
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Fishscale
                                                                                  Tiles</a>
                                                                          </li>
                                                                          <li>

                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Herringbone
                                                                                  Tiles</a>

                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Mosaics</a>

                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Subway
                                                                                  Tiles</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Hexagon
                                                                                  Tiles</a>

                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Metro
                                                                                  Tiles</a>
                                                                          </li>
                                                                      </ul>
                                                                      <ul class="nav-third-level">
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">300 x 600
                                                                                  Tiles</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">600 x 600
                                                                                  Tiles</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">600 x 1200
                                                                                  Tiles</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">900 x 900
                                                                                  Tiles</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              <li class="child-link child-link__image">
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Image_Herringbone2a34.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Image_Herringbone2a34.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Image_Herringbone2a34.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Herringbones</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Image_Subway039c.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Image_Subway039c.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Image_Subway039c.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Subway Tiles</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Mosaic_Tiles_Menu_Image2ffe.jpg 1w" />
                                                                              <img src="cdn/shop/files/Mosaic_Tiles_Menu_Image2ffe.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Mosaic_Tiles_Menu_Image2ffe.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Mosaics</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li id="nav-bathrooms" data-nav-item="true">
                                                  <span class="btn-nav-first-level " data-nav-toggle>
                                                      <a href="#">
                                                          <span>{{__('Bathrooms')}}</span>
                                                      </a>
                                                  </span>
                                                  <div class="nav-second-level-wrapper" data-nav-hover>
                                                      <div class="container">
                                                          <div class="nav-mob-hierarchy-title">
                                                              <button class="btn-back text-upper">Back</button>
                                                              <small>Back</small>
                                                          </div>
                                                          <ul class="nav-second-level">
                                                              <li class="mob-nav-header">
                                                                  <h3 data-nav-btn-back>Back</h3>
                                                              </li>
                                                              <li class="child-link ">
                                                                  <h4 class="heading-4">
                                                                      {{__('Bathrooms')}}
                                                                  </h4>
                                                                  <ul class="nav-third-level">
                                                                      <li>
                                                                          <a href="{{ route('shop') }}"
                                                                              data-preloadlink="true">Taps</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('shop') }}"
                                                                              data-preloadlink="true">Showers</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('shop') }}"
                                                                              data-preloadlink="true">Bath Taps</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('shop') }}"
                                                                              data-preloadlink="true">{{__('Accessories')}}</a>

                                                                      </li>

                                                                  </ul>
                                                              <li class="child-link child-link__image">
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/ShortTap-Gold2d4c.jpg 1w" />
                                                                              <img src="cdn/shop/files/ShortTap-Gold2d4c.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/ShortTap-Gold2d4c.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Taps</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Concealed_Shower_-_Gold8e36.jpg 1w" />
                                                                              <img src="cdn/shop/files/Concealed_Shower_-_Gold8e36.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Concealed_Shower_-_Gold8e36.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Showers</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Filler-Gold_5f4d1edf-9924-4c67-bd58-9d2dc107c1768cab.jpg 1w" />
                                                                              <img src="cdn/shop/files/Filler-Gold_5f4d1edf-9924-4c67-bd58-9d2dc107c1768cab.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Filler-Gold_5f4d1edf-9924-4c67-bd58-9d2dc107c1768cab.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>

                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Bath Taps</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li id="nav-accessories" data-nav-item="true">
                                                  <span class="btn-nav-first-level " data-nav-toggle>
                                                      <a href="#">
                                                          <span>{{__('Accessories')}}</span>
                                                      </a>
                                                  </span>
                                                  <div class="nav-second-level-wrapper" data-nav-hover>
                                                      <div class="container">
                                                          <div class="nav-mob-hierarchy-title">
                                                              <button class="btn-back text-upper">Back</button>
                                                              <small>Back</small>
                                                          </div>
                                                          <ul class="nav-second-level">
                                                              <li class="mob-nav-header">
                                                                  <h3 data-nav-btn-back>Back</h3>
                                                              </li>
                                                              <li class="child-link ">
                                                                  <h4 class="heading-4">
                                                                      {{__('Accessories')}}
                                                                  </h4>
                                                                  <div class="nav-third-levels-wrapper">
                                                                      <ul class="nav-third-level">
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Underfloor
                                                                                  Heating</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Spacers &
                                                                                  Wedges</a>

                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Silicone</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Grout</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Fixing
                                                                                  Materials</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Backer
                                                                                  Boards</a>
                                                                          </li>
                                                                      </ul>
                                                                      <ul class="nav-third-level">
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Adhesive</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Sealing &
                                                                                  Cleaning</a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ route('shop') }}"
                                                                                  data-preloadlink="true">Outdoor
                                                                                  Fixing</a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                              <li class="child-link child-link__image">
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Item_Adhesive292f.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Item_Adhesive292f.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Item_Adhesive292f.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Adhesive</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Image_Grout3bb3.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Image_Grout3bb3.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Image_Grout3bb3.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Grouts</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                                  <a class="menu-image-block"
                                                                      href="{{ route('shop') }}">
                                                                      <div
                                                                          class="aspect-media aspect-media--square aspect-media--rounded">
                                                                          <picture>
                                                                              <source media="(max-width: 767px)"
                                                                                  sizes="1px"
                                                                                  srcset="cdn/shop/files/Menu_Image_Silicone9a35.jpg 1w" />
                                                                              <img src="cdn/shop/files/Menu_Image_Silicone9a35.jpg"
                                                                                  alt="Bathroom Tiles Menu Image"
                                                                                  srcset="cdn/shop/files/Menu_Image_Silicone9a35.jpg 600w"
                                                                                  width="500" height="500"
                                                                                  loading="lazy" sizes="50vw">
                                                                          </picture>
                                                                      </div>
                                                                      <div class="menu-image-block__content">
                                                                          <span class="menu-image-block__title">Shop
                                                                              Silicones</span>
                                                                          <span class="menu-image-block__icon">
                                                                              <svg width="24" height="24"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                                  <path
                                                                                      d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                      stroke="black" />
                                                                              </svg>
                                                                          </span>
                                                                      </div>
                                                                  </a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li id="nav-help" data-nav-item="true">
                                                  <span class="btn-nav-first-level " data-nav-toggle>
                                                      <a href="#">
                                                          <span>{{__('Help')}}</span>
                                                      </a>
                                                  </span>
                                                  <div class="nav-second-level-wrapper" data-nav-hover>
                                                      <div class="container">
                                                          <div class="nav-mob-hierarchy-title">
                                                              <button class="btn-back text-upper">Back</button>
                                                              <small>Back</small>
                                                          </div>
                                                          <ul class="nav-second-level">
                                                              <li class="mob-nav-header">
                                                                  <h3 data-nav-btn-back>Back</h3>
                                                              </li>
                                                              <li class="child-link ">
                                                                  <h4 class="heading-4">
                                                                      {{ __('Customer Service') }}
                                                                  </h4>
                                                                  <ul class="nav-third-level">
                                                                      <li>
                                                                          <a href="{{ route('delivery') }}"
                                                                              data-preloadlink="true">Deliveries</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('return') }}"
                                                                              data-preloadlink="true">Returns</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('damage') }}"
                                                                              data-preloadlink="true">Damages</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#" data-preloadlink="true">FAQs</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#" data-preloadlink="true">Buy Now,
                                                                              Pay Later With
                                                                              Klarna</a>
                                                                      </li>
                                                                  </ul>
                                                              <li class="child-link ">
                                                                  <h4 class="heading-4">
                                                                      Join Us
                                                                  </h4>
                                                                  <ul class="nav-third-level">
                                                                      <li>
                                                                          <a href="#" data-preloadlink="true">Open A
                                                                              Trade Account</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('press') }}"
                                                                              data-preloadlink="true">Press
                                                                              Enquiries</a>
                                                                      </li>
                                                                  </ul>
                                                              <li class="child-link ">
                                                                  <h4 class="heading-4">
                                                                      {{__('Learn')}}
                                                                  </h4>
                                                                  <ul class="nav-third-level">
                                                                      <li>
                                                                          <a href="#" data-preloadlink="true">Help &
                                                                              Advice Centre</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="#" data-preloadlink="true">Ideas &
                                                                              Inspiration</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('buying.guide') }}"
                                                                              data-preloadlink="true">Buying
                                                                              Guides</a>
                                                                      </li>
                                                                  </ul>
                                                              <li class="child-link ">
                                                                  <h4 class="heading-4">
                                                                      {{__('General') }}
                                                                  </h4>
                                                                  <ul class="nav-third-level">
                                                                      <li>
                                                                          <a href="{{ route('about') }}"
                                                                              data-preloadlink="true">About Us</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('contact') }}"
                                                                              data-preloadlink="true">Contact Us</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('review') }}"
                                                                              data-preloadlink="true">Reviews</a>
                                                                      </li>
                                                                      <li>
                                                                          <a href="{{ route('sample') }}"
                                                                              data-preloadlink="true">Free Samples</a>
                                                                      </li>
                                                                  </ul>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li id="nav-new-in" data-nav-item="true">
                                                  <a href="{{ route('shop') }}" class="btn-nav-first-level "
                                                      data-preloadlink="true">
                                                      <span>{{__('New In')}}</span>
                                                  </a>
                                              </li>
                                              <li id="nav-sale" data-nav-item="true">
                                                  <a href="{{ route('shop') }}"
                                                      class="btn-nav-first-level  highlighted_link"
                                                      data-preloadlink="true">
                                                      <span>{{__('Sale')}}</span>
                                                  </a>
                                              </li>
                                          </ul>
                                          <ul class="navigation-main__secondary-features tablet-up-hide">
                                              <li>
                                                  <a class="navigation-main__item"
                                                      href="https://shopify.com/51806011582/account?locale=en&amp;region_country=GB">
                                                      <div class="icon-with-text">
                                                          <span class="icon-with-text__icon">
                                                              <svg class="icon" width="21" height="22"
                                                                  viewBox="0 0 21 22" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                  <path
                                                                      d="M10.0909 8.27273C12.0992 8.27273 13.7273 6.64467 13.7273 4.63636C13.7273 2.62806 12.0992 1 10.0909 1C8.08258 1 6.45453 2.62806 6.45453 4.63636C6.45453 6.64467 8.08258 8.27273 10.0909 8.27273Z"
                                                                      stroke="#212A2F" stroke-width="2"
                                                                      stroke-linecap="round" stroke-linejoin="round">
                                                                  </path>
                                                                  <path
                                                                      d="M10.0909 11.9091C8.89707 11.9091 7.71493 12.1442 6.61197 12.6011C5.50901 13.058 4.50683 13.7276 3.66267 14.5718C1.95779 16.2766 1 18.5889 1 21H19.1818C19.1818 18.5889 18.224 16.2766 16.5192 14.5718C14.8143 12.8669 12.502 11.9091 10.0909 11.9091V11.9091Z"
                                                                      stroke="#212A2F" stroke-width="2"
                                                                      stroke-linecap="round" stroke-linejoin="round">
                                                                  </path>
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
                                                              <svg width="17" height="17" viewBox="0 0 17 17"
                                                                  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path
                                                                      d="M15.125 11.3437C15.75 11.6249 16.0938 12.3124 15.9375 12.9687L15.2812 15.9061C15.125 16.5624 14.5625 16.9999 13.875 16.9999C6.21875 16.9999 0 10.7811 0 3.1249C0 2.4374 0.4375 1.8749 1.09375 1.7499L4.03125 1.0624C4.6875 0.906154 5.375 1.2499 5.65625 1.8749L7 5.0624C7.25 5.6249 7.09375 6.3124 6.625 6.71865L5.34375 7.7499C6.25 9.3749 7.625 10.7499 9.25 11.6561L10.3125 10.4061C10.6875 9.90615 11.375 9.7499 11.9375 9.96865L15.125 11.3437ZM14.2812 15.6874L14.9688 12.7499C15.0312 12.5311 14.9062 12.3437 14.7188 12.2499L11.5625 10.9061C11.375 10.8437 11.1875 10.8749 11.0625 11.0311L9.78125 12.5937C9.625 12.7811 9.375 12.8437 9.1875 12.7187C7.0625 11.6874 5.3125 9.9374 4.28125 7.84365C4.15625 7.6249 4.21875 7.3749 4.40625 7.21865L5.96875 5.9374C6.125 5.8124 6.15625 5.6249 6.09375 5.4374L4.75 2.28115C4.65625 2.1249 4.5 1.9999 4.34375 1.9999C4.3125 1.9999 4.28125 2.03115 4.25 2.03115L1.3125 2.71865C1.125 2.7499 1 2.90615 1 3.1249C1 10.2187 6.78125 16.0311 13.875 16.0311C14.0938 16.0311 14.25 15.8749 14.2812 15.6874Z"
                                                                      fill="#000"></path>
                                                              </svg>
                                                          </span>
                                                          <span class="icon-with-text__content">Call us - 0330 094
                                                              0304</span>
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
      <!-- mobile menu start  -->
      <mobile-menu-drawer id="site-mobile-menu" data-body-class="custom-drawer-opened">
          <div class="custom-drawer">
              <div class="custom-drawer__main custom-drawer__main--mobile-menu">
                  <ul class="custom-drawer__list">
                      <li class="custom-drawer__item has-submenu">
                          <details class="custom-drawer__details">
                              <summary
                                  class="custom-drawer__summary mobile-menu-list-item summary-wrapper text--regular">
                                  <span>{{__('Shop By Room')}}</span>
                                  <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                              </summary>
                              <div class="custom-drawer__submenu">
                                  <div class="custom-drawer__inner-submenu">
                                      <button
                                          class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                          <span>Back to Main Menu</span>
                                          <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                  stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                      </button>
                                      <ul class="custom-drawer__sublist">
                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              {{__('Shop by Room')}}
                                                          </span>
                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>
                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>
                                                              <ul class="grid--mobile-card grid grid--2-col">
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen762f.jpg?v=1669909275&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Wall Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/Montpellier-Ivory-60x120-06f03e.jpg?v=1669040410&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Floor Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Lounge-Ivory-01a1a1.jpg?v=1693909870&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-01.jpg?v=1693909870&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-01.jpg?v=1693909870&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-01.jpg?v=1693909870&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-01.jpg?v=1693909870&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Bathroom Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/PS-romance-marais_rosefc83.jpg?v=1620318816&amp;width=200"
                                                                                      alt="Image of romantic marais rose tiles"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/PS-romance-marais_rose.jpg?v=1620318816&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-romance-marais_rose.jpg?v=1620318816&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-romance-marais_rose.jpg?v=1620318816&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-romance-marais_rose.jpg?v=1620318816&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Kitchen Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>
                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Outdoor Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Abbey-Decor-Grey-1204ba.jpg?v=1706273291&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Abbey-Decor-Grey-12.jpg?v=1706273291&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Abbey-Decor-Grey-12.jpg?v=1706273291&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Abbey-Decor-Grey-12.jpg?v=1706273291&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Abbey-Decor-Grey-12.jpg?v=1706273291&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Hallway Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Avery-Walnut-04f74f.jpg?v=1707389060&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Avery-Walnut-04.jpg?v=1707389060&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Avery-Walnut-04.jpg?v=1707389060&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Avery-Walnut-04.jpg?v=1707389060&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Avery-Walnut-04.jpg?v=1707389060&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Living Room Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Fireplace & Hearth Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Detroit-White-03d2d2.jpg?v=1710520322&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Detroit-White-03.jpg?v=1710520322&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Detroit-White-03.jpg?v=1710520322&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Detroit-White-03.jpg?v=1710520322&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Detroit-White-03.jpg?v=1710520322&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Feature Wall Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Melville-Grey-065aef.jpg?v=1706270712&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Melville-Grey-06.jpg?v=1706270712&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Melville-Grey-06.jpg?v=1706270712&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Melville-Grey-06.jpg?v=1706270712&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Melville-Grey-06.jpg?v=1706270712&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Porch Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Lucca-White-02d5bf.jpg?v=1701276141&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lucca-White-02.jpg?v=1701276141&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lucca-White-02.jpg?v=1701276141&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lucca-White-02.jpg?v=1701276141&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lucca-White-02.jpg?v=1701276141&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Luxury Vinyl Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </details>
                      </li>
                      <li class="custom-drawer__item has-submenu">
                          <details class="custom-drawer__details">
                              <summary
                                  class="custom-drawer__summary mobile-menu-list-item summary-wrapper text--regular">
                                  <span>{{__('Shop By Colour')}}</span>
                                  <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                              </summary>
                              <div class="custom-drawer__submenu">
                                  <div class="custom-drawer__inner-submenu">
                                      <button
                                          class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                          <span>Back to Main Menu</span>
                                          <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                  stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                      </button>
                                      <ul class="custom-drawer__sublist">
                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              {{__('Shop By Colour')}}
                                                          </span>
                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>
                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>
                                                              <ul class="grid--mobile-card grid grid--2-col">
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Marais-Green-091bd3.jpg?v=1757413576&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Green Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42111b.jpg?v=1620319741&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42.jpg?v=1620319741&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42.jpg?v=1620319741&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42.jpg?v=1620319741&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42.jpg?v=1620319741&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              White Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/fez-teal1649.jpg?v=1712658148&amp;width=200"
                                                                                      alt="Fez Teal - Blue Moroccan Zellige Wall Tiles for Bathrooms &amp; Kitchens 10 x 10 cm - Gloss Gloss"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/fez-teal.jpg?v=1712658148&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/fez-teal.jpg?v=1712658148&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/fez-teal.jpg?v=1712658148&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/fez-teal.jpg?v=1712658148&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Blue Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/grey_tiles_colllection-img3c11.jpg?v=1711362276&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/grey_tiles_colllection-img.jpg?v=1711362276&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/grey_tiles_colllection-img.jpg?v=1711362276&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/grey_tiles_colllection-img.jpg?v=1711362276&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/grey_tiles_colllection-img.jpg?v=1711362276&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Grey Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Beige Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Roxy-Pink-25ed5d.jpg?v=1749503430&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Roxy-Pink-25.jpg?v=1749503430&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Roxy-Pink-25.jpg?v=1749503430&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Roxy-Pink-25.jpg?v=1749503430&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Roxy-Pink-25.jpg?v=1749503430&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Pink Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Black Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/byron-mix6501.png?v=1754381337&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/byron-mix.png?v=1754381337&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/byron-mix.png?v=1754381337&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/byron-mix.png?v=1754381337&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/byron-mix.png?v=1754381337&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Black and White Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/PS-terracotta-siena-cotto5576.jpg?v=1629901719&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/PS-terracotta-siena-cotto.jpg?v=1629901719&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-terracotta-siena-cotto.jpg?v=1629901719&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-terracotta-siena-cotto.jpg?v=1629901719&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-terracotta-siena-cotto.jpg?v=1629901719&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Terracotta Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/DwellTurquoise-02896f.jpg?v=1657572628&amp;width=200"
                                                                                      alt="Dwell Turquoise 6 x 24 cm - Designer Gloss Green Wall Tiles for Kitchen Splashbacks &amp; Bathroom Feature Walls"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/DwellTurquoise-02.jpg?v=1657572628&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/DwellTurquoise-02.jpg?v=1657572628&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/DwellTurquoise-02.jpg?v=1657572628&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/DwellTurquoise-02.jpg?v=1657572628&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Teal Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </details>
                      </li>
                      <li class="custom-drawer__item has-submenu">
                          <details class="custom-drawer__details">
                              <summary
                                  class="custom-drawer__summary mobile-menu-list-item summary-wrapper text--regular">
                                  <span>{{__('Shop By Style')}}</span>
                                  <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                              </summary>
                              <div class="custom-drawer__submenu">
                                  <div class="custom-drawer__inner-submenu">
                                      <button
                                          class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                          <span>Back to Main Menu</span>
                                          <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                  stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                      </button>
                                      <ul class="custom-drawer__sublist">
                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              {{__('Shop By Style')}}
                                                          </span>
                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>
                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>
                                                              <ul class="grid--mobile-card grid grid--2-col">
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/Divine-Gold-03e2a3.jpg?v=1674741740&amp;width=200"
                                                                                      alt="Divine Gold - XL Luxury, Calacatta Marble Effect Floor &amp; Wall Tiles - 60 x 120 cm for Bathrooms &amp; Kitchens, Porcelain"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Divine-Gold-03.jpg?v=1674741740&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Divine-Gold-03.jpg?v=1674741740&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Divine-Gold-03.jpg?v=1674741740&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Divine-Gold-03.jpg?v=1674741740&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Marble Effect Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Loire-Beige-049be9.jpg?v=1708694411&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-04.jpg?v=1708694411&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-04.jpg?v=1708694411&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-04.jpg?v=1708694411&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-04.jpg?v=1708694411&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Stone Effect Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/Zellige-Pearl-0083cb.jpg?v=1741631213&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Zellige-Pearl-00.jpg?v=1741631213&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Zellige-Pearl-00.jpg?v=1741631213&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Zellige-Pearl-00.jpg?v=1741631213&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Zellige-Pearl-00.jpg?v=1741631213&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Zellige Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/Fluted-Snow-Decor-0257a8.jpg?v=1664544373&amp;width=200"
                                                                                      alt="Fluted Snow Decor - White Modern Feature Wall Tiles for Bathrooms &amp; Kitchens - 5 x 20 cm - Matt Porcelain"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-02.jpg?v=1664544373&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-02.jpg?v=1664544373&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-02.jpg?v=1664544373&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-02.jpg?v=1664544373&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Fluted Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01c7fd.jpg?v=1724848063&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01.jpg?v=1724848063&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01.jpg?v=1724848063&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01.jpg?v=1724848063&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01.jpg?v=1724848063&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Kit Kat Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Carnaby-Pink-08eead.jpg?v=1712159220&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Carnaby-Pink-08.jpg?v=1712159220&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Carnaby-Pink-08.jpg?v=1712159220&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Carnaby-Pink-08.jpg?v=1712159220&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Carnaby-Pink-08.jpg?v=1712159220&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Patterned Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Melville-White-0420ec.jpg?v=1705678721&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Melville-White-04.jpg?v=1705678721&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Melville-White-04.jpg?v=1705678721&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Melville-White-04.jpg?v=1705678721&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Melville-White-04.jpg?v=1705678721&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Victorian Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Carnaby-Pink-08eead.jpg?v=1712159220&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Carnaby-Pink-08.jpg?v=1712159220&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Carnaby-Pink-08.jpg?v=1712159220&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Carnaby-Pink-08.jpg?v=1712159220&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Carnaby-Pink-08.jpg?v=1712159220&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Moroccan Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/PS-traditional-arteak-castanofc83.jpg?v=1620318816&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/PS-traditional-arteak-castano.jpg?v=1620318816&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-traditional-arteak-castano.jpg?v=1620318816&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-traditional-arteak-castano.jpg?v=1620318816&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-traditional-arteak-castano.jpg?v=1620318816&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Wood Effect Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/arlo-light39d7.jpg?v=1717600324&amp;width=200"
                                                                                      alt="Arlo Light - White Terrazzo Porcelain Floor &amp; Wall Tiles for Bathrooms &amp; Kitchens - 20 x 20 cm"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/arlo-light.jpg?v=1717600324&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/arlo-light.jpg?v=1717600324&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/arlo-light.jpg?v=1717600324&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/arlo-light.jpg?v=1717600324&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Terrazzo Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Jewel-Onyx-Hero-mobilefa37.jpg?v=1662457785&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Jewel-Onyx-Hero-mobile.jpg?v=1662457785&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Jewel-Onyx-Hero-mobile.jpg?v=1662457785&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Jewel-Onyx-Hero-mobile.jpg?v=1662457785&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Jewel-Onyx-Hero-mobile.jpg?v=1662457785&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Onyx Effect Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Mercury-Pearl-04c09a.jpg?v=1708449525&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Mercury-Pearl-04.jpg?v=1708449525&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Mercury-Pearl-04.jpg?v=1708449525&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Mercury-Pearl-04.jpg?v=1708449525&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Mercury-Pearl-04.jpg?v=1708449525&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Concrete Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/Heritage-Star-White-00f9a4.jpg?v=1712158530&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Heritage-Star-White-00.jpg?v=1712158530&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Heritage-Star-White-00.jpg?v=1712158530&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Heritage-Star-White-00.jpg?v=1712158530&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Heritage-Star-White-00.jpg?v=1712158530&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Star Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Chelsea-Checkerboard-N_W-0747ff.jpg?v=1724241129&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-07.jpg?v=1724241129&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-07.jpg?v=1724241129&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-07.jpg?v=1724241129&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-07.jpg?v=1724241129&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Checkerboard Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Striped Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>

                                      </ul>
                                  </div>
                              </div>
                          </details>
                      </li>

                      <li class="custom-drawer__item has-submenu">
                          <details class="custom-drawer__details">
                              <summary
                                  class="custom-drawer__summary mobile-menu-list-item summary-wrapper text--regular">
                                  <span>{{__('Shop By Shape & Size')}}</span>
                                  <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                              </summary>
                              <div class="custom-drawer__submenu">
                                  <div class="custom-drawer__inner-submenu">
                                      <button
                                          class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                          <span>Back to Main Menu</span>
                                          <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                  stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>

                                      </button>
                                      <ul class="custom-drawer__sublist">

                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              {{__('By Shape & Size')}}
                                                          </span>

                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>

                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>

                                                              <ul class="grid--mobile-card grid grid--2-col">

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Newlyn-Sage-011d73.jpg?v=1710950126&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Newlyn-Sage-01.jpg?v=1710950126&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Newlyn-Sage-01.jpg?v=1710950126&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Newlyn-Sage-01.jpg?v=1710950126&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Newlyn-Sage-01.jpg?v=1710950126&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Fishscale Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/flatiron-4cb1f.jpg?v=1616750883&amp;width=200"
                                                                                      alt="Flatiron White - Modern Herringbone Wall &amp; Floor Tiles for Kitchens &amp; Bathrooms - 9 x 37 cm - Matt Porcelain"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/flatiron-4.jpg?v=1616750883&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/flatiron-4.jpg?v=1616750883&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/flatiron-4.jpg?v=1616750883&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/flatiron-4.jpg?v=1616750883&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Herringbone Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Onice-Beige-Mosaic-01-1cb8c.png?v=1620316303&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Onice-Beige-Mosaic-01-1.png?v=1620316303&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Onice-Beige-Mosaic-01-1.png?v=1620316303&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Onice-Beige-Mosaic-01-1.png?v=1620316303&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Onice-Beige-Mosaic-01-1.png?v=1620316303&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Mosaics
                                                                          </p>
                                                                      </a>
                                                                  </li>
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42111b.jpg?v=1620319741&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42.jpg?v=1620319741&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42.jpg?v=1620319741&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42.jpg?v=1620319741&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42.jpg?v=1620319741&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Subway Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Hexagon Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/XL-Metro-Tiles27c9.jpg?v=1620319251&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/XL-Metro-Tiles.jpg?v=1620319251&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/XL-Metro-Tiles.jpg?v=1620319251&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/XL-Metro-Tiles.jpg?v=1620319251&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/XL-Metro-Tiles.jpg?v=1620319251&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Metro Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              300 x 600 Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              600 x 600 Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              600 x 1200 Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              900 x 900 Tiles
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </details>
                      </li>

                      <li class="custom-drawer__item has-submenu">
                          <details class="custom-drawer__details">
                              <summary
                                  class="custom-drawer__summary mobile-menu-list-item summary-wrapper text--regular">
                                  <span>Bathrooms</span>
                                  <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                              </summary>
                              <div class="custom-drawer__submenu">
                                  <div class="custom-drawer__inner-submenu">
                                      <button
                                          class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                          <span>Back to Main Menu</span>
                                          <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                  stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>

                                      </button>
                                      <ul class="custom-drawer__sublist">

                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              Bathrooms
                                                          </span>

                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>

                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>

                                                              <ul class="grid--mobile-card grid grid--2-col">

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/ShortTap-Gold2bd9.jpg?v=1743510815&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/ShortTap-Gold.jpg?v=1743510815&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ShortTap-Gold.jpg?v=1743510815&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ShortTap-Gold.jpg?v=1743510815&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ShortTap-Gold.jpg?v=1743510815&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Taps
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/ConcealedShower-Gold4431.jpg?v=1743510610&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/ConcealedShower-Gold.jpg?v=1743510610&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ConcealedShower-Gold.jpg?v=1743510610&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ConcealedShower-Gold.jpg?v=1743510610&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ConcealedShower-Gold.jpg?v=1743510610&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Showers
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Filler-Goldaf0c.jpg?v=1743510558&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Filler-Gold.jpg?v=1743510558&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Filler-Gold.jpg?v=1743510558&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Filler-Gold.jpg?v=1743510558&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Filler-Gold.jpg?v=1743510558&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Bath Taps
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <svg class="placeholder-img"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  viewBox="0 0 525.5 525.5">
                                                                                  <path
                                                                                      d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z" />
                                                                                  <path
                                                                                      d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z" />
                                                                                  <path
                                                                                      d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z" />
                                                                                  <path
                                                                                      d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z" />
                                                                              </svg>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              {{__('Accessories')}}
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>

                                      </ul>
                                  </div>
                              </div>
                          </details>
                      </li>

                      <li class="custom-drawer__item has-submenu">
                          <details class="custom-drawer__details">
                              <summary
                                  class="custom-drawer__summary mobile-menu-list-item summary-wrapper text--regular">
                                  <span>Accessories</span>
                                  <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                              </summary>
                              <div class="custom-drawer__submenu">
                                  <div class="custom-drawer__inner-submenu">
                                      <button
                                          class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                          <span>Back to Main Menu</span>
                                          <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                  stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>

                                      </button>
                                      <ul class="custom-drawer__sublist">

                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              Accessories
                                                          </span>

                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>

                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>
                                                              <ul class="grid--mobile-card grid grid--2-col">
                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559ec984.jpg?v=1659958620&amp;width=200"
                                                                                      alt="snug underfloor heating mat 200w per m2"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e.jpg?v=1659958620&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e.jpg?v=1659958620&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e.jpg?v=1659958620&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e.jpg?v=1659958620&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Underfloor Heating
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/3mma678.jpg?v=1712149062&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/3mm.webp?v=1712149062&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/3mm.webp?v=1712149062&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/3mm.webp?v=1712149062&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/3mm.webp?v=1712149062&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Spacers & Wedges
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Silicone-Color-1273b5.jpg?v=1724241380&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Silicone-Color-12.jpg?v=1724241380&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Silicone-Color-12.jpg?v=1724241380&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Silicone-Color-12.jpg?v=1724241380&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Silicone-Color-12.jpg?v=1724241380&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Silicone
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/kerakoll-fugabella-color-grout-colour-01904b.jpg?v=1724247003&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/kerakoll-fugabella-color-grout-colour-01.jpg?v=1724247003&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/kerakoll-fugabella-color-grout-colour-01.jpg?v=1724247003&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/kerakoll-fugabella-color-grout-colour-01.jpg?v=1724247003&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/kerakoll-fugabella-color-grout-colour-01.jpg?v=1724247003&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Grout
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Tilemaster_Mat2df3.png?v=1636464059&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Tilemaster_Mat.png?v=1636464059&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Tilemaster_Mat.png?v=1636464059&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Tilemaster_Mat.png?v=1636464059&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Tilemaster_Mat.png?v=1636464059&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Fixing Materials
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7106d.jpg?v=1712149047&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7.jpg?v=1712149047&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7.jpg?v=1712149047&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7.jpg?v=1712149047&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7.jpg?v=1712149047&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Backer Boards
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/image3affc.jpg?v=1712148806&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/image3.jpg?v=1712148806&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/image3.jpg?v=1712148806&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/image3.jpg?v=1712148806&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/image3.jpg?v=1712148806&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Adhesive
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__540211514.jpg?v=1712149077&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021.webp?v=1712149077&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021.webp?v=1712149077&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021.webp?v=1712149077&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021.webp?v=1712149077&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Sealing & Cleaning
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                                  <li class="grid__item">
                                                                      <a class="image-link-block text-center center"
                                                                          href="{{ route('shop') }}">
                                                                          <div
                                                                              class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                              <picture>
                                                                                  <source media="(min-width: 800px)"
                                                                                      sizes="1px"
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/blank_svg.svg?v=34565797900505550221760535067 1w" />
                                                                                  <img src="cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff7c51.jpg?v=1712148978&amp;width=200"
                                                                                      alt=""
                                                                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff.webp?v=1712148978&amp;width=50 50w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff.webp?v=1712148978&amp;width=100 100w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff.webp?v=1712148978&amp;width=150 150w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff.webp?v=1712148978&amp;width=200 200w"
                                                                                      loading="lazy"
                                                                                      fetchpriority="auto"
                                                                                      sizes="100vw">
                                                                              </picture>

                                                                          </div>
                                                                          <p
                                                                              class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                              Outdoor Fixing
                                                                          </p>
                                                                      </a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </details>
                      </li>

                      <li class="custom-drawer__item has-submenu">
                          <details class="custom-drawer__details">
                              <summary
                                  class="custom-drawer__summary mobile-menu-list-item summary-wrapper text--regular">
                                  <span>{{ __('Help') }}</span>
                                  <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                              </summary>
                              <div class="custom-drawer__submenu">
                                  <div class="custom-drawer__inner-submenu">
                                      <button
                                          class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                          <span>Back to Main Menu</span>
                                          <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                  stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>

                                      </button>
                                      <ul class="custom-drawer__sublist">

                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              {{ __('Customer Service') }}
                                                          </span>

                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>

                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>

                                                              <ul class="list-gap--s">

                                                                  <li>
                                                                      <a href="{{ route('delivery') }}"
                                                                          title="Deliveries">Deliveries</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="{{ route('return') }}"
                                                                          title="Returns">Returns</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="{{ route('damage') }}"
                                                                          title="Damages">Damages</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="#" title="FAQs">FAQs</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="#"
                                                                          title="Buy Now, Pay Later With Klarna">Buy
                                                                          Now, Pay
                                                                          Later With Klarna</a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>
                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              Join Us
                                                          </span>

                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>

                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>
                                                              <ul class="list-gap--s">

                                                                  <li>
                                                                      <a href="#" title="Open A Trade Account">Open A
                                                                          Trade Account</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="{{ route('press') }}"
                                                                          title="Press Enquiries">Press
                                                                          Enquiries</a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>

                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              {{__('Learn')}}
                                                          </span>

                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>

                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>
                                                              <ul class="list-gap--s">

                                                                  <li>
                                                                      <a href="#" title="Help & Advice Centre">Help &
                                                                          Advice
                                                                          Centre</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="#" title="Ideas & Inspiration">Ideas &
                                                                          Inspiration</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="{{ route('buying.guide') }}"
                                                                          title="Buying Guides">Buying
                                                                          Guides</a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>

                                          <li class="custom-drawer__subitem">
                                              <accordion-row animate
                                                  class="accordion accordion--no-padding accordion--mobile-menu">
                                                  <details>
                                                      <summary class="summary-wrapper mobile-menu-list-item">
                                                          <span class="accordion__title text--regular">
                                                              {{__('General') }}
                                                          </span>

                                                          <svg class="icon-caret" width="13" height="11"
                                                              viewBox="0 0 13 11" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                  stroke-width="1.3" stroke-linecap="round"
                                                                  stroke-linejoin="round" />
                                                          </svg>

                                                      </summary>
                                                      <div class="accordion__info text-body text-body--smaller"
                                                          role="region">
                                                          <div>

                                                              <ul class="list-gap--s">

                                                                  <li>
                                                                      <a href="#" title="About Us">About Us</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="#" title="Contact Us">Contact Us</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="{{ route('review') }}"
                                                                          title="Reviews">Reviews</a>
                                                                  </li>

                                                                  <li>
                                                                      <a href="#" title="Free Samples">Free Samples</a>
                                                                  </li>

                                                              </ul>

                                                          </div>
                                                      </div>
                                                  </details>
                                              </accordion-row>
                                          </li>

                                      </ul>
                                  </div>
                              </div>
                          </details>
                      </li>

                      <li class="custom-drawer__item">
                          <a class="custom-drawer__link mobile-menu-list-item " title="New In"
                              href="{{ route('shop') }}">
                              <span>{{__('New In')}}</span>
                              <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                      stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                          </a>
                      </li>

                      <li class="custom-drawer__item">
                          <a style="--custom-color: #e8362a;"
                              class="custom-drawer__link mobile-menu-list-item  custom-drawer__link--highlight"
                              title="Sale" href="{{ route('shop') }}">
                              <span>{{__('Sale')}}</span>
                              <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                      stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                          </a>
                      </li>

                  </ul>
              </div>
          </div>
      </mobile-menu-drawer>

  </div>