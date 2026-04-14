        <div id="shopify-section-header">
            <sticky-header>
                <header class="header-section announcement-bar-active" data-section-id="sections--26303089934718__header" data-section-type="header" data-header="">

                    <div class="main-bar">
                        <a class="in-page-link skip-link" href="#MainContent">Skip to content</a>

                        <div class="header-section-inner" role="banner">

                            <div class="header-section-inner__top container">

                                <section class="header-icon tablet-up-hide">
                                    <button class="hamburger-icon" aria-label="open navigation" data-click-toggle="{"
                                        target":="" "body" ,="" "add" :="" "mobile-nav-open" }"="">
                                        <svg width="20" height="16" fill-rule="evenodd" stroke-linecap="round"
                                            stroke-linejoin="round" clip-rule="evenodd" viewBox="0 0 20 16">
                                            <defs></defs>
                                            <path fill="none" stroke="#111" stroke-width="2"
                                                d="M1 8h17.057M1 1h17.057M1 15h17.057"></path>
                                        </svg>
                                    </button>
                                    <button class="nav-close-btn" role="button" type="button" data-click-toggle="{"
                                        target":="" "body" ,="" "remove" :="" "mobile-nav-open" }"=""
                                        aria-label="Navigation close">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>

                                    </button>

                                    <button aria-label="Toggle Search" class="custom-search-button custom-drawer-button"
                                        drawer-trigger="" data-target-drawer="site-mobile-search">
                                        <div drawer-icon-open="">
                                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.5 21L15.156 14.656" stroke="#212A2F" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                    d="M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z"
                                                    stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>

                                        </div>
                                        <div drawer-icon-close="">
                                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21.5 21L15.156 14.656M9.5 17C13.9183 17 17.5 13.4183 17.5 9C17.5 4.58172 13.9183 1 9.5 1C5.08172 1 1.5 4.58172 1.5 9C1.5 13.4183 5.08172 17 9.5 17Z"
                                                    stroke="black" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <circle cx="16.5" cy="15.5" r="6.5" fill="#FAC828"></circle>
                                                <path
                                                    d="M19 18L16.5 15.5M16.5 15.5L14 13M16.5 15.5L19 13M16.5 15.5L14 18"
                                                    stroke="black" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </div>
                                    </button>
                                </section>

                                <div style="width: 100%" class="tablet-hide">
                                    <div id="site-search__wrapper" class="tablet-hide">
                                        <predictive-search>
                                            <form id="PredictiveSearchForm" action="#" method="get" role="search">
                                                <label class="visually-hidden" for="Search">{{__('Search')}}</label>
                                                <input type="hidden" name="type" value="product">
                                                <div class="search-inner">
                                                    <input id="site-search__input" class="text-input" type="search"
                                                        name="q" placeholder="{{__('What are you looking for')}}?" role="combobox"
                                                        aria-expanded="false" aria-owns="predictive-search-results"
                                                        aria-controls="predictive-search-results"
                                                        aria-haspopup="listbox" aria-autocomplete="list">
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
                                    <a href="/" class="">

                                        <img src="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}"
                                            alt="Porcelain Superstore"
                                            srcset="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }} 177w, {{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }} 352w"
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
                                  <style>
                                      .icon-toggle {
                                          display: flex;
                                          flex-direction: column;
                                          align-items: center;
                                          background: none;
                                          border: none;
                                          cursor: pointer;
                                          padding: 0;
                                      }

                                      .header-icons-customer-snippet {
                                          position: relative;
                                      }

                                      .icon-label {
                                          margin-top: 2px;
                                          font-size: 12px;
                                          font-weight: 500;
                                          text-align: center;
                                      }

                                      .custom-dropdown {
                                          position: absolute;
                                          top: 100%;
                                          left: 0;
                                          background: #fff;
                                          border-radius: 8px;
                                          min-width: 150px;
                                          padding: 5px 0;
                                          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                                          border: 1px solid #eee;
                                          z-index: 9999;
                                      }

                                      .custom-dropdown a.dropdown-item {
                                          display: block;
                                          padding: 8px 15px;
                                          font-size: 13px;
                                          text-decoration: none;
                                          color: #212A2F;
                                          background: #fff;
                                      }

                                      .custom-dropdown a.dropdown-item:hover {
                                          background: #f5f5f5;
                                      }
                                  </style>

                                  <script>
                                      document.addEventListener('DOMContentLoaded', function() {
                                          document.querySelectorAll('.icon-toggle').forEach(toggle => {
                                              const dropdown = toggle.closest(
                                                  '.header-icons-customer-snippet').querySelector(
                                                  '.custom-dropdown');
                                              if (!dropdown) return;
                                              toggle.addEventListener('click', e => {
                                                  e.preventDefault();
                                                  e.stopPropagation();
                                                  dropdown.style.display = (dropdown.style
                                                          .display === 'block') ? 'none' :
                                                      'block';
                                              });
                                              dropdown.addEventListener('click', e => e
                                              .stopPropagation());
                                          });
                                          document.addEventListener('click', () => {
                                              document.querySelectorAll('.custom-dropdown').forEach(
                                                  dd => dd.style.display = 'none');
                                          });
                                          document.addEventListener('keydown', e => {
                                              if (e.key === 'Escape') document.querySelectorAll(
                                                  '.custom-dropdown').forEach(dd => dd.style
                                                  .display = 'none');
                                          });
                                      });
                                  </script>

                                    {{--<li class="tablet-hide hover-fade-in">

                                        <div class="header-icons-customer-snippet header-icon">

                                            <a href="/pages/trade">
                                                <svg width="20" height="22" viewBox="0 0 20 23" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.15625 8.3125C3.94141 8.3125 3.8125 8.18359 3.8125 7.96875V6.59375C3.8125 6.42188 3.94141 6.25 4.15625 6.25H4.5C4.5 4.27344 5.70312 2.59766 7.42188 1.86719L8.625 4.1875V1.4375C8.625 1.09375 8.92578 0.75 9.3125 0.75H10.6875C11.0312 0.75 11.375 1.09375 11.375 1.4375V4.1875L12.5352 1.86719C14.2539 2.59766 15.5 4.27344 15.5 6.25H15.8438C16.0156 6.25 16.1875 6.42188 16.1875 6.59375V7.96875C16.1875 8.18359 16.0156 8.3125 15.8438 8.3125H4.15625ZM10 12.4375C11.5898 12.4375 13.0078 11.3203 13.3516 9.6875H15.4141C15.0703 12.3945 12.793 14.5 10 14.5C7.16406 14.5 4.88672 12.3945 4.54297 9.6875H6.60547C6.94922 11.3203 8.36719 12.4375 10 12.4375ZM13.8672 15.875C17.0469 15.875 19.625 18.4531 19.582 21.6328C19.582 22.2773 19.1094 22.75 18.4648 22.75H1.49219C0.847656 22.75 0.375 22.2773 0.375 21.6328C0.375 18.4531 2.91016 15.875 6.08984 15.875H13.8672ZM2.52344 20.6875H17.4336C17.0039 19.1406 15.5859 17.9375 13.8672 17.9375H6.08984C4.37109 17.9375 2.95312 19.1406 2.52344 20.6875Z"
                                                        fill="#0D1F22"></path>
                                                </svg>

                                                <small class="icon-label tablet-hide">Trade Sign Up</small>
                                            </a>

                                        </div>

                                    </li>
                                    <li class="hover-fade-in">

                                        <div class="header-icons-customer-snippet header-icon">

                                            <a href="/account/login">
                                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0909 8.27273C12.0992 8.27273 13.7273 6.64467 13.7273 4.63636C13.7273 2.62806 12.0992 1 10.0909 1C8.08258 1 6.45453 2.62806 6.45453 4.63636C6.45453 6.64467 8.08258 8.27273 10.0909 8.27273Z"
                                                        stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M10.0909 11.9091C8.89707 11.9091 7.71493 12.1442 6.61197 12.6011C5.50901 13.058 4.50683 13.7276 3.66267 14.5718C1.95779 16.2766 1 18.5889 1 21H19.1818C19.1818 18.5889 18.224 16.2766 16.5192 14.5718C14.8143 12.8669 12.502 11.9091 10.0909 11.9091V11.9091Z"
                                                        stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>

                                                <small class="tablet-hide icon-label">Sign in</small>
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
                                              <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{__('Admin Dashboard')}}</a>
                                              @endif
                                              <a class="dropdown-item" href="{{ route('user.dashboard') }}">{{__('Member Dashboard')}}</a>
                                              <a class="dropdown-item" href="{{ route('logout') }}">{{__('Logout')}}</a>
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
                                            <a aria-label="Cart icon" href="/cart">
                                                <div class="icon-wrapper">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.6667 21H2.33333C1.59733 21 1 20.4027 1 19.6667V2.33333C1 1.59733 1.59733 1 2.33333 1H19.6667C20.4027 1 21 1.59733 21 2.33333V19.6667C21 20.4027 20.4027 21 19.6667 21Z"
                                                            stroke="#212A2F" stroke-width="2" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M15.6666 6.33334C15.6666 8.91068 13.5773 11 11 11C8.42265 11 6.33331 8.91068 6.33331 6.33334"
                                                            stroke="#212A2F" stroke-width="2" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>

                                                    <div data-app-layer-portal="cart-count-badge"></div>
                                                </div>
                                                <small class="icon-label tablet-hide">Basket</small>
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
                                                    data-click-toggle="{" target":="" "body" ,="" "remove"
                                                    :="" "mobile-nav-open" }"="" aria-label="Navigation close">
                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>

                                                </button>
                                            </div>

                                            <ul class="nav-first-level">

                                                <li id="nav-shop-by-room" data-nav-item="true">
                                                    <span class="btn-nav-first-level " data-nav-toggle="">
                                                        <a href="{{ route('home') }}">
                                                            <span>{{__('Home')}}</span>
                                                        </a>
                                                    </span>
                                                </li>

                                                <li id="nav-shop-by-room" data-nav-item="true">
                                                    <span class="btn-nav-first-level " data-nav-toggle="">
                                                        <a href="#">
                                                            <span>{{__('Parking Tile')}}</span>
                                                        </a>
                                                    </span>
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

                                                                <li class="child-link ">

                                                                    <h4 class="heading-4">
                                                                        {{__('Parking Tile')}}
                                                                    </h4>

                                                                    <div class="nav-third-levels-wrapper">
                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">36 Button Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">16 Cote Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">10 Bit Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">4 Star Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">Char Chokh Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">Biscuit Tiles</a>

                                                                            </li>
                                                                            
                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">Box Bit 
                                                                                    Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">Shapla Tiles</a>

                                                                            </li>

                                                                        </ul>

                                                                        <ul class="nav-third-level">


                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">Century
                                                                                    Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">Banglalink
                                                                                    Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">Capsule
                                                                                    Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">Coil
                                                                                    Tiles</a>

                                                                            </li>
                                                                            
                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">12 X 12 X 1 mm Tiles</a>

                                                                            </li>

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">12 X 12 X 3/4 mm Tiles</a>

                                                                            </li>
                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'parking-tiles') }}"
                                                                                    data-preloadlink="true">12 X 12 X 1/2 mm Tiles</a>

                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                </li>
                                                                <li class="child-link child-link__image">

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'parking-tiles') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }}"
                                                                                    alt="Parking Tiles Menu Image"
                                                                                    srcset="{{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 50w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 100w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 150w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 200w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 250w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 350w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 400w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 450w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 550w, {{ asset('frontend/menu/parking-tiles/24_1766229867.jpeg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Parking Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'parking-tiles') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/parking-tiles/191766227969.webp') }}"
                                                                                    alt="Parking Tiles Menu Image"
                                                                                    srcset="{{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 50w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 100w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 150w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 200w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 250w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 350w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 400w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 450w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 550w, {{ asset('frontend/menu/parking-tiles/191766227969.webp') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Parking Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'parking-tiles') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/parking-tiles/171766227526.jpg') }}"
                                                                                    alt="Parking Tiles Menu Image"
                                                                                    srcset="{{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 50w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 100w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 150w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 200w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 250w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 350w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 400w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 450w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 550w, {{ asset('frontend/menu/parking-tiles/171766227526.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Parking Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li id="nav-shop-by-colour" data-nav-item="true">
                                                    <span class="btn-nav-first-level " data-nav-toggle="">
                                                        <a href="#">
                                                            <span>{{__('Hollow Block')}}</span>
                                                        </a>
                                                    </span>
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

                                                                <li class="child-link ">

                                                                    <h4 class="heading-4">
                                                                       {{__('Hollow Block')}}
                                                                    </h4>

                                                                    <div class="nav-third-levels-wrapper">
                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'hollow-block') }}"
                                                                                    data-preloadlink="true">Hollow Block (Gray)</a>

                                                                            </li>
                                                                        </ul>

                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'hollow-block') }}"
                                                                                    data-preloadlink="true">B390 X 190 X 112 mm Tiles</a>

                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                </li>
                                                                <li class="child-link child-link__image">

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'hollow-block') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }}"
                                                                                    alt="Hollow Block Menu Image"
                                                                                    srcset="{{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 50w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 100w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 150w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 200w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 250w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 350w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 400w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 450w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 550w, {{ asset('frontend/menu/hollow-block/hollow_blocks_over_pallets.webp') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Hollow Block</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'hollow-block') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/hollow-block/2992808A.jpg') }}"
                                                                                    alt="Menu Image Hollow Block"
                                                                                    srcset="{{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 50w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 100w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 150w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 200w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 250w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 350w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 400w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 450w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 550w, {{ asset('frontend/menu/hollow-block/2992808A.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Hollow Block</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'hollow-block') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }}"
                                                                                    alt="Hollow Block Menu Image"
                                                                                    srcset="{{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 50w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 100w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 150w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 200w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 250w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 350w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 400w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 450w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 550w, {{ asset('frontend/menu/hollow-block/hollow-concrete-block-2.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Hollow Block Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
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
                                                    <span class="btn-nav-first-level " data-nav-toggle="">
                                                        <a href="#">
                                                            <span>{{__('Uni Pavers')}}</span>
                                                        </a>
                                                    </span>
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

                                                                <li class="child-link ">

                                                                    <h4 class="heading-4">
                                                                        {{__('Uni Pavers')}}
                                                                    </h4>

                                                                    <div class="nav-third-levels-wrapper">
                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'uni-pavers') }}"
                                                                                    data-preloadlink="true">Uni Pavers (Red & Gray) </a>

                                                                            </li>
                                                                        </ul>

                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'uni-pavers') }}"
                                                                                    data-preloadlink="true">220 X 110 X 80 mm</a>

                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                </li>
                                                                <li class="child-link child-link__image">

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'uni-pavers') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }}"
                                                                                    alt="Menu Image Uni Pavers Effect"
                                                                                    srcset="{{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 50w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 100w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 150w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 200w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 250w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 350w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 400w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 450w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 550w, {{ asset('frontend/menu/uni-pavers/interlocking-paver-tile-500x500.webp') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                               Uni Pavers Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'uni-pavers') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }}"
                                                                                    alt="Menu Image Uni Pavers Tiles"
                                                                                    srcset="{{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 50w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 100w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 150w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 200w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 250w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 350w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 400w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 450w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 550w, {{ asset('frontend/menu/uni-pavers/paver-blocks-500x500.webp') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Uni Pavers Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'uni-pavers') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }}"
                                                                                    alt="Menu Image Uni Pavers Tiles"
                                                                                    srcset="{{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 50w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 100w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 150w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 200w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 250w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 350w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 400w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 450w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 550w, {{ asset('frontend/menu/uni-pavers/concrete-uni-paver-block-products-img-3.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Uni Pavers Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
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
                                                    <span class="btn-nav-first-level " data-nav-toggle="">
                                                        <a href="#">
                                                            <span>{{__('Solid Bricks')}}</span>
                                                        </a>
                                                    </span>
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

                                                                <li class="child-link ">

                                                                    <h4 class="heading-4">
                                                                        {{__('Solid Bricks')}}
                                                                    </h4>

                                                                    <div class="nav-third-levels-wrapper">
                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'solid-bricks') }}"
                                                                                    data-preloadlink="true">Solid Brick (Gray)</a>

                                                                            </li>
                                                                        </ul>

                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'solid-bricks') }}"
                                                                                    data-preloadlink="true">240 x 112 X 70 mm
                                                                                    Tiles</a>

                                                                            </li>


                                                                        </ul>
                                                                    </div>

                                                                </li>
                                                                <li class="child-link child-link__image">

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'solid-bricks') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }}"
                                                                                    alt="Menu Image Solid Brick"
                                                                                    srcset="{{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 50w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 100w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 150w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 200w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 250w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 350w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 400w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 450w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 550w, {{ asset('frontend/menu/solid-brick/6-inch-solid-brick.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Solid Brick</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'solid-bricks') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }}"
                                                                                    alt="Menu Image Solid Brick"
                                                                                    srcset="{{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 50w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }}g 100w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 150w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 200w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 250w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 350w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 400w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 450w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 550w, {{ asset('frontend/menu/solid-brick/gray-cement-solid-brick-isolated-white-background-gray-cement-solid-brick-145449461.webp') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Solid Brick</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'solid-bricks') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }}"
                                                                                    alt="Solid Brick Menu Image"
                                                                                    srcset="{{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 50w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 100w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 150w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 200w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 250w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 350w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 400w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 450w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 550w, {{ asset('frontend/menu/solid-brick/KPWFy0gY4bXxSaQZa6cEgEthjpjYRCv41igUelqC.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Solid Brick</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
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
                                                    <span class="btn-nav-first-level " data-nav-toggle="">
                                                        <a href="#">
                                                            <span>{{__('Kerb Stone')}}</span>
                                                        </a>
                                                    </span>
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

                                                                <li class="child-link ">

                                                                    <h4 class="heading-4">
                                                                        {{__('Kerb Stone')}}
                                                                    </h4>

                                                                    <div class="nav-third-levels-wrapper">
                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'kerb-stone') }}"
                                                                                    data-preloadlink="true">Kerb Stone K1</a>

                                                                            </li>
                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'kerb-stone') }}"
                                                                                    data-preloadlink="true">Kerb Stone K4</a>

                                                                            </li>
                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'kerb-stone') }}"
                                                                                    data-preloadlink="true">Kerb Stone K6</a>

                                                                            </li>

                                                                        </ul>

                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'kerb-stone') }}"
                                                                                    data-preloadlink="true">550 x 330 X 150 mm
                                                                                    Tiles (K1)</a>

                                                                            </li>
                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'kerb-stone') }}"
                                                                                    data-preloadlink="true">500 x 250 X 150 /78 mm
                                                                                    Tiles (K4)</a>

                                                                            </li>
                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'kerb-stone') }}"
                                                                                    data-preloadlink="true">500 x 350 X 120 /65 mm
                                                                                    Tiles (K6)</a>

                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                </li>
                                                                <li class="child-link child-link__image">

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'kerb-stone') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }}"
                                                                                    alt="Menu Image Herringbone"
                                                                                    srcset="{{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 50w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 100w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 150w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 200w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 250w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 350w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 400w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 450w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 550w, {{ asset('frontend/menu/kerbe-stone/kerb-stone.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Kerbe Stone Tile</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'kerb-stone') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }}"
                                                                                    alt="Menu Image Kerb Stone"
                                                                                    srcset="{{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 50w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 100w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 150w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 200w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 250w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 350w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 400w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 450w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 550w, {{ asset('frontend/menu/kerbe-stone/e1e00baf-277f-4201-bc1b-8fd887b36ffd_concretekerb.webp') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Kerb Stone Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'kerb-stone') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }}"
                                                                                    alt="Kerb Stone Tiles Menu Image"
                                                                                    srcset="{{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 50w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 100w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 150w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 200w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 250w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 350w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 400w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 450w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 550w, {{ asset('frontend/menu/kerbe-stone/image_downloader_1635658187155--1636340403.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Kerb Stone</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- kljdfskj dsfkgdfjks lk;dsfj lkfjklsdfgjksdfjglksdfjglksdfjg sdfgklsdjfgklsdjlgkjsdlkgjsdlkgjsdfkgj sdkljfg sdklfgjksdfgj jklsd j -->
                                                <li id="nav-shop-by-shape-size" data-nav-item="true">
                                                    <span class="btn-nav-first-level " data-nav-toggle="">
                                                        <a href="#">
                                                            <span>{{__('Plank')}}</span>
                                                        </a>
                                                    </span>
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

                                                                <li class="child-link ">

                                                                    <h4 class="heading-4">
                                                                        {{__('Plank')}}
                                                                    </h4>

                                                                    <div class="nav-third-levels-wrapper">
                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'plank') }}"
                                                                                    data-preloadlink="true">Plank</a>

                                                                            </li>

                                                                        </ul>

                                                                        <ul class="nav-third-level">

                                                                            <li>

                                                                                <a href="{{ route('productCategory', 'plank') }}"
                                                                                    data-preloadlink="true">600 x 200 X 60 mm
                                                                                    Tiles</a>

                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                </li>
                                                                <li class="child-link child-link__image">

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'plank') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }}"
                                                                                    alt="Menu Image Herringbone"
                                                                                    srcset="{{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 50w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 100w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 150w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 200w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 250w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 350w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 400w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 450w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 550w, {{ asset('frontend/menu/plank/Floor_Tiles_Menu_Image.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Plank Tile</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'plank') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }}"
                                                                                    alt="Menu Image Subway"
                                                                                    srcset="{{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 50w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 100w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 150w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 200w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 250w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 350w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 400w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 450w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 550w, {{ asset('frontend/menu/plank/Native_Birch-tile-600x600.webp') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Plank Tiles</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                    <a class="menu-image-block"
                                                                        href="{{ route('productCategory', 'plank') }}">
                                                                        <div
                                                                            class="aspect-media aspect-media--square aspect-media--rounded">
                                                                            <picture>
                                                                                <source media="(max-width: 767px)"
                                                                                    sizes="1px"
                                                                                    srcset="{{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 1w">
                                                                                <img src="{{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }}"
                                                                                    alt="Mosaic Tiles Menu Image"
                                                                                    srcset="{{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 50w, {{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 100w, {{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 150w, {{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 200w, cdn/shop/files/Mosaic_Tiles_Menu_Image_v%3D1729782876%26width%3D250.jpg 250w, {{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 350w, {{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 400w, {{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 450w, {{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 550w, {{ asset('frontend/menu/plank/Screen-Shot-2021-09-06-at-6.01.25-PM.jpg') }} 600w"
                                                                                    width="500" height="500.0"
                                                                                    loading="lazy" fetchpriority="auto"
                                                                                    sizes="50vw">
                                                                            </picture>
                                                                        </div>
                                                                        <div class="menu-image-block__content">
                                                                            <span class="menu-image-block__title">Shop
                                                                                Plank Tile</span>
                                                                            <span class="menu-image-block__icon">
                                                                                <svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16 5C16 5.742 16.733 6.85 17.475 7.78C18.429 8.98 19.569 10.027 20.876 10.826C21.856 11.425 23.044 12 24 12M24 12C23.044 12 21.855 12.575 20.876 13.174C19.569 13.974 18.429 15.021 17.475 16.219C16.733 17.15 16 18.26 16 19M24 12L0 12"
                                                                                        stroke="black"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </a>

                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>


                                                <!-- kfasfjhasfj iosdfjsahfjksdhfjkasdhfjsdhfjkasdh fjkasdfkjshdafjkahsdfjk asdkjfasdjkf asdjfhkjasdfhkjadsfhjdfhajks  -->



                                                {{--<li id="nav-help" data-nav-item="true">
                                                    <span class="btn-nav-first-level " data-nav-toggle="">
                                                        <a href="#">
                                                            <span>{{__('FAQ')}}</span>
                                                        </a>
                                                    </span>
                                                </li>--}}

                                                <li id="nav-new-in" data-nav-item="true">
                                                    <a href="{{ route('about') }}" class="btn-nav-first-level "
                                                        data-preloadlink="true">
                                                        <span>{{__('About Us')}}</span>
                                                    </a>
                                                </li>

                                                <li id="nav-sale" data-nav-item="true">
                                                    <a href="{{ route('contact') }}"
                                                        class="btn-nav-first-level  highlighted_link"
                                                        data-preloadlink="true">
                                                        <span>{{__('Contact Us')}}</span>
                                                    </a>
                                                </li>

                                            </ul>

                                            <ul class="navigation-main__secondary-features tablet-up-hide">

                                                <li>
                                                    <a class="navigation-main__item" href="{{ route('login') }}">
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
                                                            <span class="icon-with-text__content">Sign in /
                                                                Account</span>
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

        <mobile-menu-drawer id="site-mobile-menu" data-body-class="custom-drawer-opened">
            <div class="custom-drawer">
                <div class="custom-drawer__main custom-drawer__main--mobile-menu">
                    <ul class="custom-drawer__list">

                        <li class="custom-drawer__item has-submenu">
                            <details class="custom-drawer__details">
                                <summary
                                    class="custom-drawer__summary mobile-menu-list-item summary-wrapper text--regular">
                                    <span>{{__('Parking Tile')}}</span>
                                    <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </summary>
                                <div class="custom-drawer__submenu">
                                    <div class="custom-drawer__inner-submenu">
                                        <button
                                            class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                            <span>{{__('Back to Main Menu')}}</span>
                                            <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                    stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </button>
                                        <ul class="custom-drawer__sublist">

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__('Parking Tile')}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="grid--mobile-card grid grid--2-col">

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen_v%3D1669909275%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen_v%3D1669909275%26width%3D50.jpg 50w, cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen_v%3D1669909275%26width%3D100.jpg 100w, cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen_v%3D1669909275%26width%3D150.jpg 150w, cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen_v%3D1669909275%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Wall Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/Montpellier-Ivory-60x120-06_v%3D1669040410%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/products/Montpellier-Ivory-60x120-06_v%3D1669040410%26width%3D50.jpg 50w, cdn/shop/products/Montpellier-Ivory-60x120-06_v%3D1669040410%26width%3D100.jpg 100w, cdn/shop/products/Montpellier-Ivory-60x120-06_v%3D1669040410%26width%3D150.jpg 150w, cdn/shop/products/Montpellier-Ivory-60x120-06_v%3D1669040410%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Floor Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Lounge-Ivory-01_v%3D1693909870%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Lounge-Ivory-01_v%3D1693909870%26width%3D50.jpg 50w, cdn/shop/files/Lounge-Ivory-01_v%3D1693909870%26width%3D100.jpg 100w, cdn/shop/files/Lounge-Ivory-01_v%3D1693909870%26width%3D150.jpg 150w, cdn/shop/files/Lounge-Ivory-01_v%3D1693909870%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Bathroom Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/PS-romance-marais_rose_v%3D1620318816%26width%3D200.jpg"
                                                                                        alt="Image of romantic marais rose tiles"
                                                                                        srcset="cdn/shop/files/PS-romance-marais_rose_v%3D1620318816%26width%3D50.jpg 50w, cdn/shop/files/PS-romance-marais_rose_v%3D1620318816%26width%3D100.jpg 100w, cdn/shop/files/PS-romance-marais_rose_v%3D1620318816%26width%3D150.jpg 150w, cdn/shop/files/PS-romance-marais_rose_v%3D1620318816%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Kitchen Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
                                                                                </svg>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Outdoor Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Abbey-Decor-Grey-12_v%3D1706273291%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Abbey-Decor-Grey-12_v%3D1706273291%26width%3D50.jpg 50w, cdn/shop/files/Abbey-Decor-Grey-12_v%3D1706273291%26width%3D100.jpg 100w, cdn/shop/files/Abbey-Decor-Grey-12_v%3D1706273291%26width%3D150.jpg 150w, cdn/shop/files/Abbey-Decor-Grey-12_v%3D1706273291%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Hallway Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Avery-Walnut-04_v%3D1707389060%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Avery-Walnut-04_v%3D1707389060%26width%3D50.jpg 50w, cdn/shop/files/Avery-Walnut-04_v%3D1707389060%26width%3D100.jpg 100w, cdn/shop/files/Avery-Walnut-04_v%3D1707389060%26width%3D150.jpg 150w, cdn/shop/files/Avery-Walnut-04_v%3D1707389060%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Living Room Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
                                                                                </svg>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Fireplace & Hearth Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Detroit-White-03_v%3D1710520322%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Detroit-White-03_v%3D1710520322%26width%3D50.jpg 50w, cdn/shop/files/Detroit-White-03_v%3D1710520322%26width%3D100.jpg 100w, cdn/shop/files/Detroit-White-03_v%3D1710520322%26width%3D150.jpg 150w, cdn/shop/files/Detroit-White-03_v%3D1710520322%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Feature Wall Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Melville-Grey-06_v%3D1706270712%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Melville-Grey-06_v%3D1706270712%26width%3D50.jpg 50w, cdn/shop/files/Melville-Grey-06_v%3D1706270712%26width%3D100.jpg 100w, cdn/shop/files/Melville-Grey-06_v%3D1706270712%26width%3D150.jpg 150w, cdn/shop/files/Melville-Grey-06_v%3D1706270712%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Porch Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Lucca-White-02_v%3D1701276141%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Lucca-White-02_v%3D1701276141%26width%3D50.jpg 50w, cdn/shop/files/Lucca-White-02_v%3D1701276141%26width%3D100.jpg 100w, cdn/shop/files/Lucca-White-02_v%3D1701276141%26width%3D150.jpg 150w, cdn/shop/files/Lucca-White-02_v%3D1701276141%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Luxury Vinyl Tiles')}}
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
                                    <span>{{__('Hollow Block')}}</span>
                                    <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </summary>
                                <div class="custom-drawer__submenu">
                                    <div class="custom-drawer__inner-submenu">
                                        <button
                                            class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                            <span>{{__('Back to Main Menu')}}</span>
                                            <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                    stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </button>
                                        <ul class="custom-drawer__sublist">

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__('Hollow Block')}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="grid--mobile-card grid grid--2-col">

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'hollow-block ') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Marais-Green-09_v%3D1757413576%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Marais-Green-09_v%3D1757413576%26width%3D50.jpg 50w, cdn/shop/files/Marais-Green-09_v%3D1757413576%26width%3D100.jpg 100w, cdn/shop/files/Marais-Green-09_v%3D1757413576%26width%3D150.jpg 150w, cdn/shop/files/Marais-Green-09_v%3D1757413576%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Green Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="#">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D50.jpg 50w, cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D100.jpg 100w, cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D150.jpg 150w, cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('White Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'parking-tiles') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/fez-teal_v%3D1712658148%26width%3D200.jpg"
                                                                                        alt="Fez Teal - Blue Moroccan Zellige Wall Tiles for Bathrooms & Kitchens 10 x 10 cm - Gloss Gloss"
                                                                                        srcset="cdn/shop/products/fez-teal_v%3D1712658148%26width%3D50.jpg 50w, cdn/shop/products/fez-teal_v%3D1712658148%26width%3D100.jpg 100w, cdn/shop/products/fez-teal_v%3D1712658148%26width%3D150.jpg 150w, cdn/shop/products/fez-teal_v%3D1712658148%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Blue Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="#">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/grey_tiles_colllection-img_v%3D1711362276%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/grey_tiles_colllection-img_v%3D1711362276%26width%3D50.jpg 50w, cdn/shop/files/grey_tiles_colllection-img_v%3D1711362276%26width%3D100.jpg 100w, cdn/shop/files/grey_tiles_colllection-img_v%3D1711362276%26width%3D150.jpg 150w, cdn/shop/files/grey_tiles_colllection-img_v%3D1711362276%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Grey Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="#">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
                                                                                </svg>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Beige Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="#">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Roxy-Pink-25_v%3D1749503430%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Roxy-Pink-25_v%3D1749503430%26width%3D50.jpg 50w, cdn/shop/files/Roxy-Pink-25_v%3D1749503430%26width%3D100.jpg 100w, cdn/shop/files/Roxy-Pink-25_v%3D1749503430%26width%3D150.jpg 150w, cdn/shop/files/Roxy-Pink-25_v%3D1749503430%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Pink Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="#">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
                                                                                </svg>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Black Tiles')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="#">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/byron-mix_v%3D1754381337%26width%3D200.png"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/products/byron-mix_v%3D1754381337%26width%3D50.png 50w, cdn/shop/products/byron-mix_v%3D1754381337%26width%3D100.png 100w, cdn/shop/products/byron-mix_v%3D1754381337%26width%3D150.png 150w, cdn/shop/products/byron-mix_v%3D1754381337%26width%3D200.png 200w"
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
                                                                            href="/collections/terracotta-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/PS-terracotta-siena-cotto_v%3D1629901719%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/PS-terracotta-siena-cotto_v%3D1629901719%26width%3D50.jpg 50w, cdn/shop/files/PS-terracotta-siena-cotto_v%3D1629901719%26width%3D100.jpg 100w, cdn/shop/files/PS-terracotta-siena-cotto_v%3D1629901719%26width%3D150.jpg 150w, cdn/shop/files/PS-terracotta-siena-cotto_v%3D1629901719%26width%3D200.jpg 200w"
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
                                                                            href="/collections/teal-turquoise-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/DwellTurquoise-02_v%3D1657572628%26width%3D200.jpg"
                                                                                        alt="Dwell Turquoise 6 x 24 cm - Designer Gloss Green Wall Tiles for Kitchen Splashbacks & Bathroom Feature Walls"
                                                                                        srcset="cdn/shop/products/DwellTurquoise-02_v%3D1657572628%26width%3D50.jpg 50w, cdn/shop/products/DwellTurquoise-02_v%3D1657572628%26width%3D100.jpg 100w, cdn/shop/products/DwellTurquoise-02_v%3D1657572628%26width%3D150.jpg 150w, cdn/shop/products/DwellTurquoise-02_v%3D1657572628%26width%3D200.jpg 200w"
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
                                    <span>{{__('Uni Pavers')}}</span>
                                    <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </summary>
                                <div class="custom-drawer__submenu">
                                    <div class="custom-drawer__inner-submenu">
                                        <button
                                            class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                            <span>{{__('Back to Main Menu')}}</span>
                                            <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                    stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </button>
                                        <ul class="custom-drawer__sublist">

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__('Uni Pavers')}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="grid--mobile-card grid grid--2-col">

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="/collections/marble-effect-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/Divine-Gold-03_v%3D1674741740%26width%3D200.jpg"
                                                                                        alt="Divine Gold - XL Luxury, Calacatta Marble Effect Floor & Wall Tiles - 60 x 120 cm for Bathrooms & Kitchens, Porcelain"
                                                                                        srcset="cdn/shop/products/Divine-Gold-03_v%3D1674741740%26width%3D50.jpg 50w, cdn/shop/products/Divine-Gold-03_v%3D1674741740%26width%3D100.jpg 100w, cdn/shop/products/Divine-Gold-03_v%3D1674741740%26width%3D150.jpg 150w, cdn/shop/products/Divine-Gold-03_v%3D1674741740%26width%3D200.jpg 200w"
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
                                                                            href="/collections/stone-effect-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Loire-Beige-04_v%3D1708694411%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Loire-Beige-04_v%3D1708694411%26width%3D50.jpg 50w, cdn/shop/files/Loire-Beige-04_v%3D1708694411%26width%3D100.jpg 100w, cdn/shop/files/Loire-Beige-04_v%3D1708694411%26width%3D150.jpg 150w, cdn/shop/files/Loire-Beige-04_v%3D1708694411%26width%3D200.jpg 200w"
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
                                                                            href="/collections/zellige-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/Zellige-Pearl-00_v%3D1741631213%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/products/Zellige-Pearl-00_v%3D1741631213%26width%3D50.jpg 50w, cdn/shop/products/Zellige-Pearl-00_v%3D1741631213%26width%3D100.jpg 100w, cdn/shop/products/Zellige-Pearl-00_v%3D1741631213%26width%3D150.jpg 150w, cdn/shop/products/Zellige-Pearl-00_v%3D1741631213%26width%3D200.jpg 200w"
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
                                                                            href="/collections/fluted-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/Fluted-Snow-Decor-02_v%3D1664544373%26width%3D200.jpg"
                                                                                        alt="Fluted Snow Decor - White Modern Feature Wall Tiles for Bathrooms & Kitchens - 5 x 20 cm - Matt Porcelain"
                                                                                        srcset="cdn/shop/products/Fluted-Snow-Decor-02_v%3D1664544373%26width%3D50.jpg 50w, cdn/shop/products/Fluted-Snow-Decor-02_v%3D1664544373%26width%3D100.jpg 100w, cdn/shop/products/Fluted-Snow-Decor-02_v%3D1664544373%26width%3D150.jpg 150w, cdn/shop/products/Fluted-Snow-Decor-02_v%3D1664544373%26width%3D200.jpg 200w"
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
                                                                            href="/collections/kit-kat-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01_v%3D1724848063%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01_v%3D1724848063%26width%3D50.jpg 50w, cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01_v%3D1724848063%26width%3D100.jpg 100w, cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01_v%3D1724848063%26width%3D150.jpg 150w, cdn/shop/products/Dolce-Bottle-Green-Kit-Kat-01_v%3D1724848063%26width%3D200.jpg 200w"
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
                                                                            href="/collections/patterned-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D50.jpg 50w, cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D100.jpg 100w, cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D150.jpg 150w, cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D200.jpg 200w"
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
                                                                            href="/collections/victorian-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Melville-White-04_v%3D1705678721%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Melville-White-04_v%3D1705678721%26width%3D50.jpg 50w, cdn/shop/files/Melville-White-04_v%3D1705678721%26width%3D100.jpg 100w, cdn/shop/files/Melville-White-04_v%3D1705678721%26width%3D150.jpg 150w, cdn/shop/files/Melville-White-04_v%3D1705678721%26width%3D200.jpg 200w"
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
                                                                            href="/collections/moroccan-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D50.jpg 50w, cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D100.jpg 100w, cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D150.jpg 150w, cdn/shop/files/Carnaby-Pink-08_v%3D1712159220%26width%3D200.jpg 200w"
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
                                                                            href="/collections/wood-effect-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/PS-traditional-arteak-castano_v%3D1620318816%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/PS-traditional-arteak-castano_v%3D1620318816%26width%3D50.jpg 50w, cdn/shop/files/PS-traditional-arteak-castano_v%3D1620318816%26width%3D100.jpg 100w, cdn/shop/files/PS-traditional-arteak-castano_v%3D1620318816%26width%3D150.jpg 150w, cdn/shop/files/PS-traditional-arteak-castano_v%3D1620318816%26width%3D200.jpg 200w"
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
                                                                            href="/collections/terrazzo-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/arlo-light_v%3D1717600324%26width%3D200.jpg"
                                                                                        alt="Arlo Light - White Terrazzo Porcelain Floor & Wall Tiles for Bathrooms & Kitchens - 20 x 20 cm"
                                                                                        srcset="cdn/shop/products/arlo-light_v%3D1717600324%26width%3D50.jpg 50w, cdn/shop/products/arlo-light_v%3D1717600324%26width%3D100.jpg 100w, cdn/shop/products/arlo-light_v%3D1717600324%26width%3D150.jpg 150w, cdn/shop/products/arlo-light_v%3D1717600324%26width%3D200.jpg 200w"
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
                                                                            href="/collections/onyx-effect-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Jewel-Onyx-Hero-mobile_v%3D1662457785%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Jewel-Onyx-Hero-mobile_v%3D1662457785%26width%3D50.jpg 50w, cdn/shop/files/Jewel-Onyx-Hero-mobile_v%3D1662457785%26width%3D100.jpg 100w, cdn/shop/files/Jewel-Onyx-Hero-mobile_v%3D1662457785%26width%3D150.jpg 150w, cdn/shop/files/Jewel-Onyx-Hero-mobile_v%3D1662457785%26width%3D200.jpg 200w"
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
                                                                            href="/collections/concrete-effect">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Mercury-Pearl-04_v%3D1708449525%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Mercury-Pearl-04_v%3D1708449525%26width%3D50.jpg 50w, cdn/shop/files/Mercury-Pearl-04_v%3D1708449525%26width%3D100.jpg 100w, cdn/shop/files/Mercury-Pearl-04_v%3D1708449525%26width%3D150.jpg 150w, cdn/shop/files/Mercury-Pearl-04_v%3D1708449525%26width%3D200.jpg 200w"
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
                                                                            href="/collections/star-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/Heritage-Star-White-00_v%3D1712158530%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/products/Heritage-Star-White-00_v%3D1712158530%26width%3D50.jpg 50w, cdn/shop/products/Heritage-Star-White-00_v%3D1712158530%26width%3D100.jpg 100w, cdn/shop/products/Heritage-Star-White-00_v%3D1712158530%26width%3D150.jpg 150w, cdn/shop/products/Heritage-Star-White-00_v%3D1712158530%26width%3D200.jpg 200w"
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
                                                                            href="/collections/checkerboard-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Chelsea-Checkerboard-N_W-07_v%3D1724241129%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Chelsea-Checkerboard-N_W-07_v%3D1724241129%26width%3D50.jpg 50w, cdn/shop/files/Chelsea-Checkerboard-N_W-07_v%3D1724241129%26width%3D100.jpg 100w, cdn/shop/files/Chelsea-Checkerboard-N_W-07_v%3D1724241129%26width%3D150.jpg 150w, cdn/shop/files/Chelsea-Checkerboard-N_W-07_v%3D1724241129%26width%3D200.jpg 200w"
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
                                                                            href="/collections/striped-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
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
                                    <span>{{__('Solid Bricks')}}</span>
                                    <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </summary>
                                <div class="custom-drawer__submenu">
                                    <div class="custom-drawer__inner-submenu">
                                        <button
                                            class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                            <span>{{__('Back to Main Menu')}}</span>
                                            <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                    stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </button>
                                        <ul class="custom-drawer__sublist">

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__('Solid Bricks')}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="grid--mobile-card grid grid--2-col">

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'solid-bricks') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Newlyn-Sage-01_v%3D1710950126%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Newlyn-Sage-01_v%3D1710950126%26width%3D50.jpg 50w, cdn/shop/files/Newlyn-Sage-01_v%3D1710950126%26width%3D100.jpg 100w, cdn/shop/files/Newlyn-Sage-01_v%3D1710950126%26width%3D150.jpg 150w, cdn/shop/files/Newlyn-Sage-01_v%3D1710950126%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                {{__('Solid Bricks')}}
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'solid-bricks') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/flatiron-4_v%3D1616750883%26width%3D200.jpg"
                                                                                        alt="Flatiron White - Modern Herringbone Wall & Floor Tiles for Kitchens & Bathrooms - 9 x 37 cm - Matt Porcelain"
                                                                                        srcset="cdn/shop/products/flatiron-4_v%3D1616750883%26width%3D50.jpg 50w, cdn/shop/products/flatiron-4_v%3D1616750883%26width%3D100.jpg 100w, cdn/shop/products/flatiron-4_v%3D1616750883%26width%3D150.jpg 150w, cdn/shop/products/flatiron-4_v%3D1616750883%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                Solid Bricks
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'solid-bricks') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Onice-Beige-Mosaic-01-1_v%3D1620316303%26width%3D200.png"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Onice-Beige-Mosaic-01-1_v%3D1620316303%26width%3D50.png 50w, cdn/shop/files/Onice-Beige-Mosaic-01-1_v%3D1620316303%26width%3D100.png 100w, cdn/shop/files/Onice-Beige-Mosaic-01-1_v%3D1620316303%26width%3D150.png 150w, cdn/shop/files/Onice-Beige-Mosaic-01-1_v%3D1620316303%26width%3D200.png 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                Solid Brics
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'solid-bricks') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D50.jpg 50w, cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D100.jpg 100w, cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D150.jpg 150w, cdn/shop/files/PS-skinny-elements-brick-matt_2fc27abe-ccee-4044-adea-7078efa70a42_v%3D1620319741%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                Solid Bricks
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'solid-bricks') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
                                                                                </svg>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                Solid Brick
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="{{ route('productCategory', 'solid-bricks') }}">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/XL-Metro-Tiles_v%3D1620319251%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/XL-Metro-Tiles_v%3D1620319251%26width%3D50.jpg 50w, cdn/shop/files/XL-Metro-Tiles_v%3D1620319251%26width%3D100.jpg 100w, cdn/shop/files/XL-Metro-Tiles_v%3D1620319251%26width%3D150.jpg 150w, cdn/shop/files/XL-Metro-Tiles_v%3D1620319251%26width%3D200.jpg 200w"
                                                                                        loading="lazy"
                                                                                        fetchpriority="auto"
                                                                                        sizes="100vw">
                                                                                </picture>

                                                                            </div>
                                                                            <p
                                                                                class="image-link-block__title text-body text-body text--bold hover-underline">
                                                                                Solid Brick
                                                                            </p>
                                                                        </a>
                                                                    </li>

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="/collections/300x600-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
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
                                                                            href="/collections/600x600-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
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
                                                                            href="/collections/600x1200-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
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
                                                                            href="/collections/900x900-tiles">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
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
                                    <span>{{__('Bathrooms')}}</span>
                                    <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </summary>
                                <div class="custom-drawer__submenu">
                                    <div class="custom-drawer__inner-submenu">
                                        <button
                                            class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                            <span>{{__('Back to Main Menu')}}</span>
                                            <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                    stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </button>
                                        <ul class="custom-drawer__sublist">

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__('Bathrooms')}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="grid--mobile-card grid grid--2-col">

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="/collections/taps">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/ShortTap-Gold_v%3D1743510815%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/ShortTap-Gold_v%3D1743510815%26width%3D50.jpg 50w, cdn/shop/files/ShortTap-Gold_v%3D1743510815%26width%3D100.jpg 100w, cdn/shop/files/ShortTap-Gold_v%3D1743510815%26width%3D150.jpg 150w, cdn/shop/files/ShortTap-Gold_v%3D1743510815%26width%3D200.jpg 200w"
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
                                                                            href="/collections/showers">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/ConcealedShower-Gold_v%3D1743510610%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/ConcealedShower-Gold_v%3D1743510610%26width%3D50.jpg 50w, cdn/shop/files/ConcealedShower-Gold_v%3D1743510610%26width%3D100.jpg 100w, cdn/shop/files/ConcealedShower-Gold_v%3D1743510610%26width%3D150.jpg 150w, cdn/shop/files/ConcealedShower-Gold_v%3D1743510610%26width%3D200.jpg 200w"
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
                                                                            href="/collections/bath-taps">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Filler-Gold_v%3D1743510558%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Filler-Gold_v%3D1743510558%26width%3D50.jpg 50w, cdn/shop/files/Filler-Gold_v%3D1743510558%26width%3D100.jpg 100w, cdn/shop/files/Filler-Gold_v%3D1743510558%26width%3D150.jpg 150w, cdn/shop/files/Filler-Gold_v%3D1743510558%26width%3D200.jpg 200w"
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
                                                                            href="/collections/bathroom-accessories">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <svg class="placeholder-img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 525.5 525.5">
                                                                                    <path
                                                                                        d="M375.5 345.2c0-.1 0-.1 0 0 0-.1 0-.1 0 0-1.1-2.9-2.3-5.5-3.4-7.8-1.4-4.7-2.4-13.8-.5-19.8 3.4-10.6 3.6-40.6 1.2-54.5-2.3-14-12.3-29.8-18.5-36.9-5.3-6.2-12.8-14.9-15.4-17.9 8.6-5.6 13.3-13.3 14-23 0-.3 0-.6.1-.8.4-4.1-.6-9.9-3.9-13.5-2.1-2.3-4.8-3.5-8-3.5h-54.9c-.8-7.1-3-13-5.2-17.5-6.8-13.9-12.5-16.5-21.2-16.5h-.7c-8.7 0-14.4 2.5-21.2 16.5-2.2 4.5-4.4 10.4-5.2 17.5h-48.5c-3.2 0-5.9 1.2-8 3.5-3.2 3.6-4.3 9.3-3.9 13.5 0 .2 0 .5.1.8.7 9.8 5.4 17.4 14 23-2.6 3.1-10.1 11.7-15.4 17.9-6.1 7.2-16.1 22.9-18.5 36.9-2.2 13.3-1.2 47.4 1 54.9 1.1 3.8 1.4 14.5-.2 19.4-1.2 2.4-2.3 5-3.4 7.9-4.4 11.6-6.2 26.3-5 32.6 1.8 9.9 16.5 14.4 29.4 14.4h176.8c12.9 0 27.6-4.5 29.4-14.4 1.2-6.5-.5-21.1-5-32.7zm-97.7-178c.3-3.2.8-10.6-.2-18 2.4 4.3 5 10.5 5.9 18h-5.7zm-36.3-17.9c-1 7.4-.5 14.8-.2 18h-5.7c.9-7.5 3.5-13.7 5.9-18zm4.5-6.9c0-.1.1-.2.1-.4 4.4-5.3 8.4-5.8 13.1-5.8h.7c4.7 0 8.7.6 13.1 5.8 0 .1 0 .2.1.4 3.2 8.9 2.2 21.2 1.8 25h-30.7c-.4-3.8-1.3-16.1 1.8-25zm-70.7 42.5c0-.3 0-.6-.1-.9-.3-3.4.5-8.4 3.1-11.3 1-1.1 2.1-1.7 3.4-2.1l-.6.6c-2.8 3.1-3.7 8.1-3.3 11.6 0 .2 0 .5.1.8.3 3.5.9 11.7 10.6 18.8.3.2.8.2 1-.2.2-.3.2-.8-.2-1-9.2-6.7-9.8-14.4-10-17.7 0-.3 0-.6-.1-.8-.3-3.2.5-7.7 3-10.5.8-.8 1.7-1.5 2.6-1.9h155.7c1 .4 1.9 1.1 2.6 1.9 2.5 2.8 3.3 7.3 3 10.5 0 .2 0 .5-.1.8-.3 3.6-1 13.1-13.8 20.1-.3.2-.5.6-.3 1 .1.2.4.4.6.4.1 0 .2 0 .3-.1 13.5-7.5 14.3-17.5 14.6-21.3 0-.3 0-.5.1-.8.4-3.5-.5-8.5-3.3-11.6l-.6-.6c1.3.4 2.5 1.1 3.4 2.1 2.6 2.9 3.5 7.9 3.1 11.3 0 .3 0 .6-.1.9-1.5 20.9-23.6 31.4-65.5 31.4h-43.8c-41.8 0-63.9-10.5-65.4-31.4zm91 89.1h-7c0-1.5 0-3-.1-4.2-.2-12.5-2.2-31.1-2.7-35.1h3.6c.8 0 1.4-.6 1.4-1.4v-14.1h2.4v14.1c0 .8.6 1.4 1.4 1.4h3.7c-.4 3.9-2.4 22.6-2.7 35.1v4.2zm65.3 11.9h-16.8c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h16.8v2.8h-62.2c0-.9-.1-1.9-.1-2.8h33.9c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-33.9c-.1-3.2-.1-6.3-.1-9h62.5v9zm-12.5 24.4h-6.3l.2-1.6h5.9l.2 1.6zm-5.8-4.5l1.6-12.3h2l1.6 12.3h-5.2zm-57-19.9h-62.4v-9h62.5c0 2.7 0 5.8-.1 9zm-62.4 1.4h62.4c0 .9-.1 1.8-.1 2.8H194v-2.8zm65.2 0h7.3c0 .9.1 1.8.1 2.8H259c.1-.9.1-1.8.1-2.8zm7.2-1.4h-7.2c.1-3.2.1-6.3.1-9h7c0 2.7 0 5.8.1 9zm-7.7-66.7v6.8h-9v-6.8h9zm-8.9 8.3h9v.7h-9v-.7zm0 2.1h9v2.3h-9v-2.3zm26-1.4h-9v-.7h9v.7zm-9 3.7v-2.3h9v2.3h-9zm9-5.9h-9v-6.8h9v6.8zm-119.3 91.1c-2.1-7.1-3-40.9-.9-53.6 2.2-13.5 11.9-28.6 17.8-35.6 5.6-6.5 13.5-15.7 15.7-18.3 11.4 6.4 28.7 9.6 51.8 9.6h6v14.1c0 .8.6 1.4 1.4 1.4h5.4c.3 3.1 2.4 22.4 2.7 35.1 0 1.2.1 2.6.1 4.2h-63.9c-.8 0-1.4.6-1.4 1.4v16.1c0 .8.6 1.4 1.4 1.4H256c-.8 11.8-2.8 24.7-8 33.3-2.6 4.4-4.9 8.5-6.9 12.2-.4.7-.1 1.6.6 1.9.2.1.4.2.6.2.5 0 1-.3 1.3-.8 1.9-3.7 4.2-7.7 6.8-12.1 5.4-9.1 7.6-22.5 8.4-34.7h7.8c.7 11.2 2.6 23.5 7.1 32.4.2.5.8.8 1.3.8.2 0 .4 0 .6-.2.7-.4 1-1.2.6-1.9-4.3-8.5-6.1-20.3-6.8-31.1H312l-2.4 18.6c-.1.4.1.8.3 1.1.3.3.7.5 1.1.5h9.6c.4 0 .8-.2 1.1-.5.3-.3.4-.7.3-1.1l-2.4-18.6H333c.8 0 1.4-.6 1.4-1.4v-16.1c0-.8-.6-1.4-1.4-1.4h-63.9c0-1.5 0-2.9.1-4.2.2-12.7 2.3-32 2.7-35.1h5.2c.8 0 1.4-.6 1.4-1.4v-14.1h6.2c23.1 0 40.4-3.2 51.8-9.6 2.3 2.6 10.1 11.8 15.7 18.3 5.9 6.9 15.6 22.1 17.8 35.6 2.2 13.4 2 43.2-1.1 53.1-1.2 3.9-1.4 8.7-1 13-1.7-2.8-2.9-4.4-3-4.6-.2-.3-.6-.5-.9-.6h-.5c-.2 0-.4.1-.5.2-.6.5-.8 1.4-.3 2 0 0 .2.3.5.8 1.4 2.1 5.6 8.4 8.9 16.7h-42.9v-43.8c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v44.9c0 .1-.1.2-.1.3 0 .1 0 .2.1.3v9c-1.1 2-3.9 3.7-10.5 3.7h-7.5c-.4 0-.7.3-.7.7 0 .4.3.7.7.7h7.5c5 0 8.5-.9 10.5-2.8-.1 3.1-1.5 6.5-10.5 6.5H210.4c-9 0-10.5-3.4-10.5-6.5 2 1.9 5.5 2.8 10.5 2.8h67.4c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-67.4c-6.7 0-9.4-1.7-10.5-3.7v-54.5c0-.8-.6-1.4-1.4-1.4s-1.4.6-1.4 1.4v43.8h-43.6c4.2-10.2 9.4-17.4 9.5-17.5.5-.6.3-1.5-.3-2s-1.5-.3-2 .3c-.1.2-1.4 2-3.2 5 .1-4.9-.4-10.2-1.1-12.8zm221.4 60.2c-1.5 8.3-14.9 12-26.6 12H174.4c-11.8 0-25.1-3.8-26.6-12-1-5.7.6-19.3 4.6-30.2H197v9.8c0 6.4 4.5 9.7 13.4 9.7h105.4c8.9 0 13.4-3.3 13.4-9.7v-9.8h44c4 10.9 5.6 24.5 4.6 30.2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M286.1 359.3c0 .4.3.7.7.7h14.7c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7h-14.7c-.3 0-.7.3-.7.7zm5.3-145.6c13.5-.5 24.7-2.3 33.5-5.3.4-.1.6-.5.4-.9-.1-.4-.5-.6-.9-.4-8.6 3-19.7 4.7-33 5.2-.4 0-.7.3-.7.7 0 .4.3.7.7.7zm-11.3.1c.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7H242c-19.9 0-35.3-2.5-45.9-7.4-.4-.2-.8 0-.9.3-.2.4 0 .8.3.9 10.8 5 26.4 7.5 46.5 7.5h38.1zm-7.2 116.9c.4.1.9.1 1.4.1 1.7 0 3.4-.7 4.7-1.9 1.4-1.4 1.9-3.2 1.5-5-.2-.8-.9-1.2-1.7-1.1-.8.2-1.2.9-1.1 1.7.3 1.2-.4 2-.7 2.4-.9.9-2.2 1.3-3.4 1-.8-.2-1.5.3-1.7 1.1s.2 1.5 1 1.7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M275.5 331.6c-.8 0-1.4.6-1.5 1.4 0 .8.6 1.4 1.4 1.5h.3c3.6 0 7-2.8 7.7-6.3.2-.8-.4-1.5-1.1-1.7-.8-.2-1.5.4-1.7 1.1-.4 2.3-2.8 4.2-5.1 4zm5.4 1.6c-.6.5-.6 1.4-.1 2 1.1 1.3 2.5 2.2 4.2 2.8.2.1.3.1.5.1.6 0 1.1-.3 1.3-.9.3-.7-.1-1.6-.8-1.8-1.2-.5-2.2-1.2-3-2.1-.6-.6-1.5-.6-2.1-.1zm-38.2 12.7c.5 0 .9 0 1.4-.1.8-.2 1.3-.9 1.1-1.7-.2-.8-.9-1.3-1.7-1.1-1.2.3-2.5-.1-3.4-1-.4-.4-1-1.2-.8-2.4.2-.8-.3-1.5-1.1-1.7-.8-.2-1.5.3-1.7 1.1-.4 1.8.1 3.7 1.5 5 1.2 1.2 2.9 1.9 4.7 1.9z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M241.2 349.6h.3c.8 0 1.4-.7 1.4-1.5s-.7-1.4-1.5-1.4c-2.3.1-4.6-1.7-5.1-4-.2-.8-.9-1.3-1.7-1.1-.8.2-1.3.9-1.1 1.7.7 3.5 4.1 6.3 7.7 6.3zm-9.7 3.6c.2 0 .3 0 .5-.1 1.6-.6 3-1.6 4.2-2.8.5-.6.5-1.5-.1-2s-1.5-.5-2 .1c-.8.9-1.8 1.6-3 2.1-.7.3-1.1 1.1-.8 1.8 0 .6.6.9 1.2.9z">
                                                                                    </path>
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
                                    <span>{{__('Accessories')}}</span>
                                    <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </summary>
                                <div class="custom-drawer__submenu">
                                    <div class="custom-drawer__inner-submenu">
                                        <button
                                            class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                            <span>{{__('Back to Main Menu')}}</span>
                                            <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                    stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </button>
                                        <ul class="custom-drawer__sublist">

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__('Accessories')}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="grid--mobile-card grid grid--2-col">

                                                                    <li class="grid__item">
                                                                        <a class="image-link-block text-center center"
                                                                            href="/collections/underfloor-heating">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e_v%3D1659958620%26width%3D200.jpg"
                                                                                        alt="snug underfloor heating mat 200w per m2"
                                                                                        srcset="cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e_v%3D1659958620%26width%3D50.jpg 50w, cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e_v%3D1659958620%26width%3D100.jpg 100w, cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e_v%3D1659958620%26width%3D150.jpg 150w, cdn/shop/products/Snug-Mat-160w_1a5e1687-f328-4701-9fe1-3f070c2f559e_v%3D1659958620%26width%3D200.jpg 200w"
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
                                                                            href="/collections/tile-spacers-wedges">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/3mm_v%3D1712149062%26width%3D200.webp"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/3mm_v%3D1712149062%26width%3D50.webp 50w, cdn/shop/files/3mm_v%3D1712149062%26width%3D100.webp 100w, cdn/shop/files/3mm_v%3D1712149062%26width%3D150.webp 150w, cdn/shop/files/3mm_v%3D1712149062%26width%3D200.webp 200w"
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
                                                                            href="/collections/tile-silicone">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Silicone-Color-12_v%3D1724241380%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Silicone-Color-12_v%3D1724241380%26width%3D50.jpg 50w, cdn/shop/files/Silicone-Color-12_v%3D1724241380%26width%3D100.jpg 100w, cdn/shop/files/Silicone-Color-12_v%3D1724241380%26width%3D150.jpg 150w, cdn/shop/files/Silicone-Color-12_v%3D1724241380%26width%3D200.jpg 200w"
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
                                                                            href="/collections/tile-grout">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/kerakoll-fugabella-color-grout-colour-01_v%3D1724247003%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/kerakoll-fugabella-color-grout-colour-01_v%3D1724247003%26width%3D50.jpg 50w, cdn/shop/files/kerakoll-fugabella-color-grout-colour-01_v%3D1724247003%26width%3D100.jpg 100w, cdn/shop/files/kerakoll-fugabella-color-grout-colour-01_v%3D1724247003%26width%3D150.jpg 150w, cdn/shop/files/kerakoll-fugabella-color-grout-colour-01_v%3D1724247003%26width%3D200.jpg 200w"
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
                                                                            href="/collections/tile-fixing-materials">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Tilemaster_Mat_v%3D1636464059%26width%3D200.png"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Tilemaster_Mat_v%3D1636464059%26width%3D50.png 50w, cdn/shop/files/Tilemaster_Mat_v%3D1636464059%26width%3D100.png 100w, cdn/shop/files/Tilemaster_Mat_v%3D1636464059%26width%3D150.png 150w, cdn/shop/files/Tilemaster_Mat_v%3D1636464059%26width%3D200.png 200w"
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
                                                                            href="/collections/tile-backer-boards">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7_v%3D1712149047%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7_v%3D1712149047%26width%3D50.jpg 50w, cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7_v%3D1712149047%26width%3D100.jpg 100w, cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7_v%3D1712149047%26width%3D150.jpg 150w, cdn/shop/files/deltaboard_2048x2048_94cbf133-22b4-4c79-a057-b290e1faf1c7_v%3D1712149047%26width%3D200.jpg 200w"
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
                                                                            href="/collections/tile-adhesive">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/image3_v%3D1712148806%26width%3D200.jpg"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/image3_v%3D1712148806%26width%3D50.jpg 50w, cdn/shop/files/image3_v%3D1712148806%26width%3D100.jpg 100w, cdn/shop/files/image3_v%3D1712148806%26width%3D150.jpg 150w, cdn/shop/files/image3_v%3D1712148806%26width%3D200.jpg 200w"
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
                                                                            href="/collections/sealing-cleaning">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021_v%3D1712149077%26width%3D200.webp"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021_v%3D1712149077%26width%3D50.webp 50w, cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021_v%3D1712149077%26width%3D100.webp 100w, cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021_v%3D1712149077%26width%3D150.webp 150w, cdn/shop/files/LTP-Porcelain-Floor-Tile-Cleaner-1ltr__54021_v%3D1712149077%26width%3D200.webp 200w"
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
                                                                            href="/collections/outdoor">
                                                                            <div
                                                                                class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">

                                                                                <picture>
                                                                                    <source media="(min-width: 800px)"
                                                                                        sizes="1px"
                                                                                        srcset="cdn/shop/t/399/assets/blank_svg_v%3D34565797900505550221760535067.svg 1w">
                                                                                    <img src="cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff_v%3D1712148978%26width%3D200.webp"
                                                                                        alt=""
                                                                                        srcset="cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff_v%3D1712148978%26width%3D50.webp 50w, cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff_v%3D1712148978%26width%3D100.webp 100w, cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff_v%3D1712148978%26width%3D150.webp 150w, cdn/shop/files/Pro-Pave_4ca7960f-89bc-4bd2-a8f2-5dbe04ee4eff_v%3D1712148978%26width%3D200.webp 200w"
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
                                    <span>{{__('Help')}}</span>
                                    <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </summary>
                                <div class="custom-drawer__submenu">
                                    <div class="custom-drawer__inner-submenu">
                                        <button
                                            class="js-close-details mobile-menu-list-item summary-wrapper text-body text--bold text-body--large">
                                            <span>{{__('Back to Main Menu')}}</span>
                                            <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1L0.999999 6.5L10 12" stroke="currentColor"
                                                    stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </button>
                                        <ul class="custom-drawer__sublist">

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__("Customer Service")}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="list-gap--s">

                                                                    <li>
                                                                        <a href="{{ route('delivery') }}"
                                                                            title="{{__('Deliveries')}}">{{__('Deliveries')}}</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="{{ route('return')}}"
                                                                            title="{{__('Returns')}}">{{__('Returns')}}</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="{{ route('damage') }}s"
                                                                            title="Damages">{{__('Damages')}}</a>
                                                                    </li>

                                                                    {{--<li>
                                                                        <a href="#" title="FAQs">FAQs</a>
                                                                    </li>--}}

                                                                    <li>
                                                                        <a href="#"
                                                                            title="Buy Now, Pay Later With Klarna">Buy
                                                                            Now, Pay Later With Klarna</a>
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </details>
                                                </accordion-row>
                                            </li>

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__('Join Us')}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="list-gap--s">

                                                                    <li>
                                                                        <a href="/pages/pro"
                                                                            title="Open A Trade Account">Open A Trade
                                                                            Account</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/pages/press"
                                                                            title="Press Enquiries">Press Enquiries</a>
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </details>
                                                </accordion-row>
                                            </li>

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
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
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="list-gap--s">

                                                                    <li>
                                                                        <a href="/blogs/help-advice"
                                                                            title="Help & Advice Centre">Help & Advice
                                                                            Centre</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/blogs/inspiration"
                                                                            title="Ideas & Inspiration">Ideas &
                                                                            Inspiration</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/blogs/buying-guides"
                                                                            title="Buying Guides">Buying Guides</a>
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </details>
                                                </accordion-row>
                                            </li>

                                            <li class="custom-drawer__subitem">
                                                <accordion-row animate=""
                                                    class="accordion accordion--no-padding accordion--mobile-menu">
                                                    <details>
                                                        <summary class="summary-wrapper mobile-menu-list-item">
                                                            <span class="accordion__title text--regular">
                                                                {{__('General')}}
                                                            </span>

                                                            <svg class="icon-caret" width="13" height="11"
                                                                viewBox="0 0 13 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 1L6.5 10L12 1" stroke="currentColor"
                                                                    stroke-width="1.3" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>

                                                        </summary>
                                                        <div class="accordion__info text-body text-body--smaller"
                                                            role="region">
                                                            <div>

                                                                <ul class="list-gap--s">

                                                                    <li>
                                                                        <a href="{{ route('about') }}" title="{{__('About Us')}}">{{__('About Us')}}</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="{{ route('contact') }}"
                                                                            title="{{__('Contact Us')}}">{{__('Contact Us')}}</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#"
                                                                            title="Reviews">Reviews</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="{{ route('sample') }}"
                                                                            title="Free Samples">Free Samples</a>
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
                            <a class="custom-drawer__link mobile-menu-list-item " title="{{__('About Us')}}"
                                href="{{ route('about') }}">
                                <span>{{__('About Us')}}</span>
                                <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>

                            </a>
                        </li>

                        <li class="custom-drawer__item">
                            <a style="--custom-color: #e8362a;"
                                class="custom-drawer__link mobile-menu-list-item  custom-drawer__link--highlight"
                                title="{{__('Contact Us')}}" href="{{ route('contact') }}">
                                <span>{{__('Contact Us')}}</span>
                                <svg class="icon-caret" width="11" height="13" viewBox="0 0 11 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12L10 6.5L1 1" stroke="currentColor" stroke-width="1.3"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>

                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </mobile-menu-drawer>