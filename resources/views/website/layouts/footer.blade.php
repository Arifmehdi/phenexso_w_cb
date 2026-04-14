<div id="shopify-section-footer" class="shopify-section" >
      <style>
        .accordion--footer {
          color: rgb(var(--color-main-text));
        }

        .accordion--footer .accordion__title {
          font-size: 17px;
          font-weight: 400;
        }

        .accordion summary {
          padding: 1rem 0;
        }

        .footer-inner__text {
          width: 100%;
          text-align: center;
          padding: 0 16px;
          display: flex;
          flex-direction: column;
          gap: 18px;
        }

        .footer-inner__links a {
          font-size: 13px;
          line-height: 150%;
        }

        .footer-footer-inner small {
          width: 100%;
          text-align: center;
        }

        .footer-inner__payment-container {
          display: flex;
          justify-content: center;
          width: 100%;
          padding-block: 30px 24px;
        }


        @media screen and (max-width: 800px) {
          .footer-section .footer-menu>ul ul {
            display: block !important;
          }

          .footer-text-wrapper {
            display: flex;
            width: 100%;
            justify-content: center;
          }

        }

        @media screen and (min-width: 800px) {

          .footer-footer-inner {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: start;
            flex-wrap: nowrap;
          }

          .footer-inner__text {
            order: -1;
            text-align: left;
            flex: 1;
            margin-left: 0;
            padding: 0 24px 0 0;
            gap: 0;
          }

          .footer-inner__text-item {
            flex-direction: row;
            display: flex;
            gap: 4px;
            line-height: 150%;
          }

          .footer-inner__text-item strong {
            font-size: 12px;
            l
          }

          .footer-inner__copyright {
            display: flex;
            flex-direction: column;
            gap: 0;
          }

          .footer-inner__copyright .footer-inner__links {
            justify-content: right;
          }

          .footer-inner__copyright .footer-inner__links a {
            padding: 0 5px;
          }
        }

        .footer-section {
          padding-top: 3rem !important;
          background-color: #FFDB58 !important;
        }
      </style>
      <footer class="footer-section">

        <div class="footer-section-outer">
          <div class="footer-section-container container">
            <div class="brands-strip footer-section-brand-strip">
              <div class="container">
                <ul class="brands-list">

                </ul>
              </div>
            </div>
            <section class="footer-menu">

              <ul>
                <li class="footer-links link-contact-us tablet-hide">
                  <strong class="footer-heading h6">Contact Us </strong>
                  <div class="footer-menus-wrapper">
                    <span class="footer-links__phone-number">
                      {{ $ws->contact_mobile }}
                    </span>
                    <span class="footer-links__open-time">
                      Saturday to Thursday - 09:00am to 5.00pm
                    </span>
                    <a href="mailto:{{ $ws->contact_email }}" class="footer-links__email underline">
                      {{ $ws->contact_email }}
                    </a>
                  </div>
                </li>

                <li id="footer-links-about-us" class="footer-links">

                  <div class="tablet-up-hide">
                    <accordion-row animate="" class="accordion accordion--footer">
                      <details>
                        <summary class="summary-wrapper mobile-menu-list-item">
                          <span class="accordion__title text--regular">
                            About us
                          </span>

                          <svg class="icon-caret" width="14" height="10" viewBox="0 0 14 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3L7 8L2 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                          </svg>

                        </summary>
                        <div class="accordion__info text-body text-body--smaller" role="region">
                          <div>
                            <div class="footer-menus-wrapper">
                              <ul>

                                <li class="child-link">
                                  <p><a class="link" href="{{ route('about') }}">About us</a>
                                  </p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="{{ route('delivery') }}">Delivery</a>
                                  </p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="#">Returns</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="{{ route('sample') }}">Samples</a></p>
                                </li>

                              </ul>

                              <ul>

                                <li class="child-link">
                                  <p><a class="link" href="#">Help
                                      & FAQs</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="/pages/press">Press</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="/pages/reviews">Reviews</a></p>
                                </li>

                               {{-- <li class="child-link">
                                  <p><a class="link" href="/pages/html-sitemap">HTML
                                      Sitemap</a></p>
                                </li>--}}

                              </ul>
                            </div>
                          </div>
                        </div>
                      </details>
                    </accordion-row>
                  </div>
                  <div class="tablet-hide">
                    <strong class="h6 h-body text--bold footer-heading" data-click-toggle="{"
                      target":="" "#footer-links-about-us" ,="" "toggle" :="" "menu-open" }"="">
                      About us
                    </strong>

                    <div class="footer-menus-wrapper">
                      <ul>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('about') }}">About us</a></p>
                        </li>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('contact') }}">Contact</a></p>
                        </li>
                        
                        <li class="child-link">
                          <p><a class="link" href="#">Help &
                              FAQs</a></p>
                        </li>
                      </ul>

                     {{-- <ul>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('review') }}">Reviews</a></p>
                        </li>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('html_sitemap') }}">HTML Sitemap</a></p>
                        </li>

                      </ul>--}}

                    </div>
                  </div>

                </li>

                <li id="footer-links-learn" class="footer-links">

                  <div class="tablet-up-hide">
                    <accordion-row animate="" class="accordion accordion--footer">
                      <details>
                        <summary class="summary-wrapper mobile-menu-list-item">
                          <span class="accordion__title text--regular">
                            Learn
                          </span>

                          <svg class="icon-caret" width="14" height="10" viewBox="0 0 14 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3L7 8L2 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                          </svg>

                        </summary>
                        <div class="accordion__info text-body text-body--smaller" role="region">
                          <div>
                            <div class="footer-menus-wrapper">
                              <ul>

                                <li class="child-link">
                                  <p><a class="link" href="#">Login</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="#">FAQ</a></p>
                                </li>

                              </ul>

                              <ul>

                                <li class="child-link">
                                  <p><a class="link" href="#">Terms</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="#">Privacy
                                      and Cookies</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="#">Price
                                      Match</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="{{ route('productCategory', 'parking-tiles') }}">Parking
                                      Tiles</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="{{ route('productCategory', 'hollow-block') }}">Hollow Block</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="{{ route('productCategory', 'solid-bricks') }}">Solid Bricks</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="{{ route('productCategory', 'plank') }}">Plank
                                      Tiles</a></p>
                                </li>

                                <li class="child-link">
                                  <p><a class="link" href="{{ route('productCategory', 'kerb-stone') }}">Kerb Stone
                                      Tiles</a></p>
                                </li>

                              </ul>
                            </div>
                          </div>
                        </div>
                      </details>
                    </accordion-row>
                  </div>
                  <div class="tablet-hide">
                    <strong class="h6 h-body text--bold footer-heading" data-click-toggle="{"
                      target":="" "#footer-links-learn" ,="" "toggle" :="" "menu-open" }"="">
                      Learn
                    </strong>

                    <div class="footer-menus-wrapper">
                      <ul>

                        <li class="child-link">
                          <p><a class="link" href="#">Terms</a></p>
                        </li>

                        <li class="child-link">
                          <p><a class="link" href="#">Privacy and Cookies</a>
                          </p>
                        </li>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('login')}}">Login</a></p>
                        </li>

                      </ul>

                      <ul>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('productCategory', 'uni-pavers') }}">Uni Pavers Tile</a></p>
                        </li>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('productCategory', 'kerb-stone') }}">Curve Stone</a>
                          </p>
                        </li>

                      </ul>

                      <ul>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('productCategory', 'parking-tiles') }}">Parking Tiles Tiles</a>
                          </p>
                        </li>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('productCategory', 'solid-bricks') }}">Solid Bricks Tiles</a></p>
                        </li>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('productCategory', 'hollow-block') }}">Hollow Block</a></p>
                        </li>

                        <li class="child-link">
                          <p><a class="link" href="{{ route('productCategory', 'plank') }}">Plank Tiles</a>
                          </p>
                        </li>

                      </ul>

                    </div>
                  </div>

                </li>

              </ul>
              {{--<ul class="footer-social-links tablet-hide">
                <li>
                  <ul class="new-social-icons">

                    <li>
                      <a class="social-media-icon" href="https://www.tiktok.com">
                        <svg fill="#000000" width="28" height="28" viewBox="0 0 32 32" version="1.1"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z">
                          </path>
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a class="social-media-icon" href="{{ $ws->fb_url}}" target="_blank">
                        <svg width="28" height="28" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M25.52 12.76C25.52 5.71112 19.8088 0 12.76 0C5.71112 0 0 5.71112 0 12.76C0 19.14 4.63064 24.4395 10.7534 25.3656V16.4645H7.51192V12.76H10.7534V9.9816C10.7534 6.7916 12.6571 4.9908 15.5384 4.9908C16.979 4.9908 18.4196 5.24806 18.4196 5.24806V8.3866H16.8246C15.2297 8.3866 14.7151 9.36418 14.7151 10.3932V12.76H18.2653L17.6993 16.4645H14.7151V25.3656C20.8379 24.4395 25.52 19.14 25.52 12.76Z"
                            fill="#000000"></path>
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a class="social-media-icon" href="https://www.instagram.com/" target="_blank">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M11.8546 5.95358C8.56168 5.95358 5.93765 8.62906 5.93765 11.8705C5.93765 15.1634 8.56168 17.7874 11.8546 17.7874C15.096 17.7874 17.7715 15.1634 17.7715 11.8705C17.7715 8.62906 15.096 5.95358 11.8546 5.95358ZM11.8546 15.7294C9.74507 15.7294 7.99571 14.0315 7.99571 11.8705C7.99571 9.761 9.69361 8.0631 11.8546 8.0631C13.9641 8.0631 15.662 9.761 15.662 11.8705C15.662 14.0315 13.9641 15.7294 11.8546 15.7294ZM19.3665 5.74778C19.3665 4.97601 18.7491 4.35859 17.9773 4.35859C17.2055 4.35859 16.5881 4.97601 16.5881 5.74778C16.5881 6.51955 17.2055 7.13697 17.9773 7.13697C18.7491 7.13697 19.3665 6.51955 19.3665 5.74778ZM23.2768 7.13697C23.1739 5.28472 22.7623 3.63827 21.4246 2.30053C20.0868 0.962786 18.4404 0.551174 16.5881 0.448271C14.6844 0.345368 8.97329 0.345368 7.06959 0.448271C5.21733 0.551174 3.62233 0.962786 2.23314 2.30053C0.895404 3.63827 0.483791 5.28472 0.380888 7.13697C0.277985 9.04068 0.277985 14.7518 0.380888 16.6555C0.483791 18.5078 0.895404 20.1028 2.23314 21.4919C3.62233 22.8297 5.21733 23.2413 7.06959 23.3442C8.97329 23.4471 14.6844 23.4471 16.5881 23.3442C18.4404 23.2413 20.0868 22.8297 21.4246 21.4919C22.7623 20.1028 23.1739 18.5078 23.2768 16.6555C23.3797 14.7518 23.3797 9.04068 23.2768 7.13697ZM20.8071 18.6621C20.447 19.6911 19.6238 20.4629 18.6462 20.8745C17.1026 21.4919 13.501 21.3376 11.8546 21.3376C10.1567 21.3376 6.55507 21.4919 5.06298 20.8745C4.03395 20.4629 3.26217 19.6911 2.85056 18.6621C2.23314 17.17 2.3875 13.5684 2.3875 11.8705C2.3875 10.2241 2.23314 6.62245 2.85056 5.07891C3.26217 4.10133 4.03395 3.32956 5.06298 2.91794C6.55507 2.30053 10.1567 2.45488 11.8546 2.45488C13.501 2.45488 17.1026 2.30053 18.6462 2.91794C19.6238 3.27811 20.3955 4.10133 20.8071 5.07891C21.4246 6.62245 21.2702 10.2241 21.2702 11.8705C21.2702 13.5684 21.4246 17.17 20.8071 18.6621Z"
                            fill="#000000"></path>
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a class="social-media-icon" href="https://www.pinterest.co.uk//" target="_blank">
                        <svg width="28px" height="28px" viewBox="0 0 20 20" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none">

                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>

                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>

                          <g id="SVGRepo_iconCarrier">
                            <title>pinterest [#180]</title>
                            <desc>Created with Sketch.</desc>
                            <defs> </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -7399.000000)"
                                fill="#000000">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                  <path
                                    d="M173.876,7239 C168.399,7239 164,7243.43481 164,7248.95866 C164,7253.05869 166.407,7256.48916 169.893,7258.07936 C169.893,7256.21186 169.88,7256.45286 171.303,7250.38046 C170.521,7248.80236 171.129,7246.19673 172.88,7246.19673 C175.31,7246.19673 173.659,7249.79964 173.378,7251.2174 C173.129,7252.30544 173.959,7253.14238 174.955,7253.14238 C176.864,7253.14238 178.108,7250.71524 178.108,7247.87063 C178.108,7245.69456 176.615,7244.10437 174.042,7244.10437 C169.467,7244.10437 168.307,7249.19966 169.893,7250.79893 C170.292,7251.40294 169.893,7251.43118 169.893,7252.22174 C169.616,7253.05768 167.403,7251.84259 167.403,7248.70757 C167.403,7245.86195 169.727,7242.51518 174.457,7242.51518 C178.191,7242.51518 180.681,7245.27609 180.681,7248.2054 C180.681,7252.13805 178.523,7254.98366 175.37,7254.98366 C174.291,7254.98366 173.295,7254.3978 172.963,7253.72824 C172.36,7256.07371 172.238,7257.26258 171.303,7258.58153 C172.216,7258.83261 173.129,7259 174.125,7259 C179.602,7259 184,7254.56519 184,7249.04235 C183.752,7243.43481 179.353,7239 173.876,7239"
                                    id="pinterest-[#180]"> </path>
                                </g>
                              </g>
                            </g>
                          </g>

                        </svg>
                      </a>
                    </li>

                    <li>
                      <a class="social-media-icon" href="https://wa.me/message/OW5MADSFVAVEJ1">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"
                            fill="#000000"></path>
                        </svg>
                      </a>
                    </li>

                  </ul>
                </li>
                <li class="footer-social-links__payments">
                  <span style="text-align: right">Pay Safely & Securely</span>
                  <div class="footer-inner__payment-container">
                    <section class="payment-icons-wrapper">

                      <ul class="payment-icons">
                        <li>
                          <svg class="icon" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-labelledby="pi-american_express" viewBox="0 0 38 24" width="38" height="24">
                            <title id="pi-american_express">American Express</title>
                            <path fill="#000"
                              d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z"
                              opacity=".07"></path>
                            <path fill="#006FCF"
                              d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z">
                            </path>
                            <path fill="#FFF"
                              d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z">
                            </path>
                            <path fill="#006FCF"
                              d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z">
                            </path>
                            <path fill="#006FCF"
                              d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z">
                            </path>
                            <path fill="#FFF"
                              d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z">
                            </path>
                            <path fill="#006FCF"
                              d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z">
                            </path>
                            <path fill="#006FCF"
                              d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z">
                            </path>
                          </svg>
                        </li>
                        <li>
                          <svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0"
                            width="38" height="24" viewBox="0 0 165.521 105.965" xml:space="preserve"
                            aria-labelledby="pi-apple_pay">
                            <title id="pi-apple_pay">Apple Pay</title>
                            <path fill="#000"
                              d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z">
                            </path>
                            <path fill="#FFF"
                              d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875">
                            </path>
                            <g>
                              <g>
                                <path fill="#000"
                                  d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858">
                                </path>
                                <path fill="#000"
                                  d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048">
                                </path>
                              </g>
                              <g>
                                <path fill="#000"
                                  d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z">
                                </path>
                                <path fill="#000"
                                  d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z">
                                </path>
                                <path fill="#000"
                                  d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z">
                                </path>
                              </g>
                            </g>
                          </svg>
                        </li>
                        <li>
                          <svg class="icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38"
                            height="24" aria-labelledby="pi-google_pay">
                            <title id="pi-google_pay">Google Pay</title>
                            <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                              fill="#000" opacity=".07"></path>
                            <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                              fill="#FFF"></path>
                            <path
                              d="M18.093 11.976v3.2h-1.018v-7.9h2.691a2.447 2.447 0 0 1 1.747.692 2.28 2.28 0 0 1 .11 3.224l-.11.116c-.47.447-1.098.69-1.747.674l-1.673-.006zm0-3.732v2.788h1.698c.377.012.741-.135 1.005-.404a1.391 1.391 0 0 0-1.005-2.354l-1.698-.03zm6.484 1.348c.65-.03 1.286.188 1.778.613.445.43.682 1.03.65 1.649v3.334h-.969v-.766h-.049a1.93 1.93 0 0 1-1.673.931 2.17 2.17 0 0 1-1.496-.533 1.667 1.667 0 0 1-.613-1.324 1.606 1.606 0 0 1 .613-1.336 2.746 2.746 0 0 1 1.698-.515c.517-.02 1.03.093 1.49.331v-.208a1.134 1.134 0 0 0-.417-.901 1.416 1.416 0 0 0-.98-.368 1.545 1.545 0 0 0-1.319.717l-.895-.564a2.488 2.488 0 0 1 2.182-1.06zM23.29 13.52a.79.79 0 0 0 .337.662c.223.176.5.269.785.263.429-.001.84-.17 1.146-.472.305-.286.478-.685.478-1.103a2.047 2.047 0 0 0-1.324-.374 1.716 1.716 0 0 0-1.03.294.883.883 0 0 0-.392.73zm9.286-3.75l-3.39 7.79h-1.048l1.281-2.728-2.224-5.062h1.103l1.612 3.885 1.569-3.885h1.097z"
                              fill="#5F6368"></path>
                            <path
                              d="M13.986 11.284c0-.308-.024-.616-.073-.92h-4.29v1.747h2.451a2.096 2.096 0 0 1-.9 1.373v1.134h1.464a4.433 4.433 0 0 0 1.348-3.334z"
                              fill="#4285F4"></path>
                            <path
                              d="M9.629 15.721a4.352 4.352 0 0 0 3.01-1.097l-1.466-1.14a2.752 2.752 0 0 1-4.094-1.44H5.577v1.17a4.53 4.53 0 0 0 4.052 2.507z"
                              fill="#34A853"></path>
                            <path
                              d="M7.079 12.05a2.709 2.709 0 0 1 0-1.735v-1.17H5.577a4.505 4.505 0 0 0 0 4.075l1.502-1.17z"
                              fill="#FBBC04"></path>
                            <path
                              d="M9.629 8.44a2.452 2.452 0 0 1 1.74.68l1.3-1.293a4.37 4.37 0 0 0-3.065-1.183 4.53 4.53 0 0 0-4.027 2.5l1.502 1.171a2.715 2.715 0 0 1 2.55-1.875z"
                              fill="#EA4335"></path>
                          </svg>
                        </li>
                        <li>
                          <svg class="icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38"
                            height="24" aria-labelledby="pi-master">
                            <title id="pi-master">Mastercard</title>
                            <path opacity=".07"
                              d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                            </path>
                            <path fill="#fff"
                              d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                            </path>
                            <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                            <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                            <path fill="#FF5F00"
                              d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                            </path>
                          </svg>
                        </li>
                        <li>
                          <svg class="icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38"
                            height="24" aria-labelledby="pi-shopify_pay">
                            <title id="pi-shopify_pay">Shop Pay</title>
                            <path opacity=".07"
                              d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                              fill="#000"></path>
                            <path
                              d="M35.889 0C37.05 0 38 .982 38 2.182v19.636c0 1.2-.95 2.182-2.111 2.182H2.11C.95 24 0 23.018 0 21.818V2.182C0 .982.95 0 2.111 0H35.89z"
                              fill="#5A31F4"></path>
                            <path
                              d="M9.35 11.368c-1.017-.223-1.47-.31-1.47-.705 0-.372.306-.558.92-.558.54 0 .934.238 1.225.704a.079.079 0 00.104.03l1.146-.584a.082.082 0 00.032-.114c-.475-.831-1.353-1.286-2.51-1.286-1.52 0-2.464.755-2.464 1.956 0 1.275 1.15 1.597 2.17 1.82 1.02.222 1.474.31 1.474.705 0 .396-.332.582-.993.582-.612 0-1.065-.282-1.34-.83a.08.08 0 00-.107-.035l-1.143.57a.083.083 0 00-.036.111c.454.92 1.384 1.437 2.627 1.437 1.583 0 2.539-.742 2.539-1.98s-1.155-1.598-2.173-1.82v-.003zM15.49 8.855c-.65 0-1.224.232-1.636.646a.04.04 0 01-.069-.03v-2.64a.08.08 0 00-.08-.081H12.27a.08.08 0 00-.08.082v8.194a.08.08 0 00.08.082h1.433a.08.08 0 00.081-.082v-3.594c0-.695.528-1.227 1.239-1.227.71 0 1.226.521 1.226 1.227v3.594a.08.08 0 00.081.082h1.433a.08.08 0 00.081-.082v-3.594c0-1.51-.981-2.577-2.355-2.577zM20.753 8.62c-.778 0-1.507.24-2.03.588a.082.082 0 00-.027.109l.632 1.088a.08.08 0 00.11.03 2.5 2.5 0 011.318-.366c1.25 0 2.17.891 2.17 2.068 0 1.003-.736 1.745-1.669 1.745-.76 0-1.288-.446-1.288-1.077 0-.361.152-.657.548-.866a.08.08 0 00.032-.113l-.596-1.018a.08.08 0 00-.098-.035c-.799.299-1.359 1.018-1.359 1.984 0 1.46 1.152 2.55 2.76 2.55 1.877 0 3.227-1.313 3.227-3.195 0-2.018-1.57-3.492-3.73-3.492zM28.675 8.843c-.724 0-1.373.27-1.845.746-.026.027-.069.007-.069-.029v-.572a.08.08 0 00-.08-.082h-1.397a.08.08 0 00-.08.082v8.182a.08.08 0 00.08.081h1.433a.08.08 0 00.081-.081v-2.683c0-.036.043-.054.069-.03a2.6 2.6 0 001.808.7c1.682 0 2.993-1.373 2.993-3.157s-1.313-3.157-2.993-3.157zm-.271 4.929c-.956 0-1.681-.768-1.681-1.783s.723-1.783 1.681-1.783c.958 0 1.68.755 1.68 1.783 0 1.027-.713 1.783-1.681 1.783h.001z"
                              fill="#fff"></path>
                          </svg>
                        </li>
                        <li>
                          <svg class="icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38"
                            height="24" aria-labelledby="pi-visa">
                            <title id="pi-visa">Visa</title>
                            <path opacity=".07"
                              d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                            </path>
                            <path fill="#fff"
                              d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                            </path>
                            <path
                              d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                              fill="#142688"></path>
                          </svg>
                        </li>
                        <li>
                          <svg class="icon" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                            viewBox="0 0 38 24" aria-labelledby="pi-klarna">
                            <title id="pi-klarna">Klarna</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                fill="#FFB3C7"></path>
                              <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                                fill="#FFB3C7"></path>
                              <path
                                d="M34.117 13.184c-.487 0-.882.4-.882.892 0 .493.395.893.882.893.488 0 .883-.4.883-.893a.888.888 0 00-.883-.892zm-2.903-.69c0-.676-.57-1.223-1.274-1.223-.704 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.376h1.406v4.75h-1.406v-.303a2.446 2.446 0 01-1.394.435c-1.369 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .996.16 1.394.435v-.304zm-11.253.619v-.619h-1.44v4.75h1.443v-2.217c0-.749.802-1.15 1.359-1.15h.016v-1.382c-.57 0-1.096.247-1.378.618zm-3.586 1.756c0-.675-.57-1.222-1.274-1.222-.703 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.375h1.406v4.75h-1.406v-.303A2.446 2.446 0 0114.99 15c-1.368 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .997.16 1.394.435v-.304zm8.463-.128c-.561 0-1.093.177-1.448.663v-.535H22v4.75h1.417v-2.496c0-.722.479-1.076 1.055-1.076.618 0 .973.374.973 1.066v2.507h1.405v-3.021c0-1.106-.87-1.858-2.002-1.858zM10.465 14.87h1.472V8h-1.472v6.868zM4 14.87h1.558V8H4v6.87zM9.45 8a5.497 5.497 0 01-1.593 3.9l2.154 2.97H8.086l-2.341-3.228.604-.458A3.96 3.96 0 007.926 8H9.45z"
                                fill="#0A0B09" fill-rule="nonzero"></path>
                            </g>
                          </svg>
                        </li>
                      </ul>
                    </section>
                  </div>
                </li>
              </ul>--}}

            </section>
            {{--<div class="footer-text-wrapper">

              <div class="footer-text tablet-up-hide">
                <ul class="new-social-icons">

                  <li>
                    <a class="social-media-icon" href="https://www.tiktok.com" target="_blank">
                      <svg fill="#000000" width="28" height="28" viewBox="0 0 32 32" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z">
                        </path>
                      </svg>
                    </a>
                  </li>

                  <li>
                    <a class="social-media-icon" href="{{ $ws->fb_url }}" target="_blank">
                      <svg width="28" height="28" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M25.52 12.76C25.52 5.71112 19.8088 0 12.76 0C5.71112 0 0 5.71112 0 12.76C0 19.14 4.63064 24.4395 10.7534 25.3656V16.4645H7.51192V12.76H10.7534V9.9816C10.7534 6.7916 12.6571 4.9908 15.5384 4.9908C16.979 4.9908 18.4196 5.24806 18.4196 5.24806V8.3866H16.8246C15.2297 8.3866 14.7151 9.36418 14.7151 10.3932V12.76H18.2653L17.6993 16.4645H14.7151V25.3656C20.8379 24.4395 25.52 19.14 25.52 12.76Z"
                          fill="#000000"></path>
                      </svg>
                    </a>
                  </li>

                  <li>
                    <a class="social-media-icon" href="https://www.instagram.com/" target="_blank">
                      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M11.8546 5.95358C8.56168 5.95358 5.93765 8.62906 5.93765 11.8705C5.93765 15.1634 8.56168 17.7874 11.8546 17.7874C15.096 17.7874 17.7715 15.1634 17.7715 11.8705C17.7715 8.62906 15.096 5.95358 11.8546 5.95358ZM11.8546 15.7294C9.74507 15.7294 7.99571 14.0315 7.99571 11.8705C7.99571 9.761 9.69361 8.0631 11.8546 8.0631C13.9641 8.0631 15.662 9.761 15.662 11.8705C15.662 14.0315 13.9641 15.7294 11.8546 15.7294ZM19.3665 5.74778C19.3665 4.97601 18.7491 4.35859 17.9773 4.35859C17.2055 4.35859 16.5881 4.97601 16.5881 5.74778C16.5881 6.51955 17.2055 7.13697 17.9773 7.13697C18.7491 7.13697 19.3665 6.51955 19.3665 5.74778ZM23.2768 7.13697C23.1739 5.28472 22.7623 3.63827 21.4246 2.30053C20.0868 0.962786 18.4404 0.551174 16.5881 0.448271C14.6844 0.345368 8.97329 0.345368 7.06959 0.448271C5.21733 0.551174 3.62233 0.962786 2.23314 2.30053C0.895404 3.63827 0.483791 5.28472 0.380888 7.13697C0.277985 9.04068 0.277985 14.7518 0.380888 16.6555C0.483791 18.5078 0.895404 20.1028 2.23314 21.4919C3.62233 22.8297 5.21733 23.2413 7.06959 23.3442C8.97329 23.4471 14.6844 23.4471 16.5881 23.3442C18.4404 23.2413 20.0868 22.8297 21.4246 21.4919C22.7623 20.1028 23.1739 18.5078 23.2768 16.6555C23.3797 14.7518 23.3797 9.04068 23.2768 7.13697ZM20.8071 18.6621C20.447 19.6911 19.6238 20.4629 18.6462 20.8745C17.1026 21.4919 13.501 21.3376 11.8546 21.3376C10.1567 21.3376 6.55507 21.4919 5.06298 20.8745C4.03395 20.4629 3.26217 19.6911 2.85056 18.6621C2.23314 17.17 2.3875 13.5684 2.3875 11.8705C2.3875 10.2241 2.23314 6.62245 2.85056 5.07891C3.26217 4.10133 4.03395 3.32956 5.06298 2.91794C6.55507 2.30053 10.1567 2.45488 11.8546 2.45488C13.501 2.45488 17.1026 2.30053 18.6462 2.91794C19.6238 3.27811 20.3955 4.10133 20.8071 5.07891C21.4246 6.62245 21.2702 10.2241 21.2702 11.8705C21.2702 13.5684 21.4246 17.17 20.8071 18.6621Z"
                          fill="#000000"></path>
                      </svg>
                    </a>
                  </li>

                  <li>
                    <a class="social-media-icon" href="https://www.pinterest.co.uk/" target="_blank">
                      <svg width="28px" height="28px" viewBox="0 0 20 20" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>

                        <g id="SVGRepo_iconCarrier">
                          <title>pinterest [#180]</title>
                          <desc>Created with Sketch.</desc>
                          <defs> </defs>
                          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -7399.000000)"
                              fill="#000000">
                              <g id="icons" transform="translate(56.000000, 160.000000)">
                                <path
                                  d="M173.876,7239 C168.399,7239 164,7243.43481 164,7248.95866 C164,7253.05869 166.407,7256.48916 169.893,7258.07936 C169.893,7256.21186 169.88,7256.45286 171.303,7250.38046 C170.521,7248.80236 171.129,7246.19673 172.88,7246.19673 C175.31,7246.19673 173.659,7249.79964 173.378,7251.2174 C173.129,7252.30544 173.959,7253.14238 174.955,7253.14238 C176.864,7253.14238 178.108,7250.71524 178.108,7247.87063 C178.108,7245.69456 176.615,7244.10437 174.042,7244.10437 C169.467,7244.10437 168.307,7249.19966 169.893,7250.79893 C170.292,7251.40294 169.893,7251.43118 169.893,7252.22174 C169.616,7253.05768 167.403,7251.84259 167.403,7248.70757 C167.403,7245.86195 169.727,7242.51518 174.457,7242.51518 C178.191,7242.51518 180.681,7245.27609 180.681,7248.2054 C180.681,7252.13805 178.523,7254.98366 175.37,7254.98366 C174.291,7254.98366 173.295,7254.3978 172.963,7253.72824 C172.36,7256.07371 172.238,7257.26258 171.303,7258.58153 C172.216,7258.83261 173.129,7259 174.125,7259 C179.602,7259 184,7254.56519 184,7249.04235 C183.752,7243.43481 179.353,7239 173.876,7239"
                                  id="pinterest-[#180]"> </path>
                              </g>
                            </g>
                          </g>
                        </g>

                      </svg>
                    </a>
                  </li>

                  <li>
                    <a class="social-media-icon" href="https://wa.me/message/OW5MADSFVAVEJ1">
                      <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"
                          fill="#000000"></path>
                      </svg>
                    </a>
                  </li>

                </ul>
              </div>
            </div>--}}
          </div>
          <footer class="footer-footer container">
            <div class="footer-footer-inner">
              <div class="footer-inner__copyright">
                <div class="footer-inner__links">
                  <a href="#">Terms & Conditions</a>
                  <a href="#">Privacy & Cookies</a>
                </div>
                <small class="text-body text-body--small">

                  © 2025 Musafir International, All Rights Reserved
                </small>
              </div>
              {{--<div class="footer-inner__payment-container tablet-up-hide">
                <section class="payment-icons-wrapper">

                  <ul class="payment-icons">
                    <li>
                      <svg class="icon" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="pi-american_express" viewBox="0 0 38 24" width="38" height="24">
                        <title id="pi-american_express">American Express</title>
                        <path fill="#000"
                          d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z"
                          opacity=".07"></path>
                        <path fill="#006FCF"
                          d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z">
                        </path>
                        <path fill="#FFF"
                          d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z">
                        </path>
                        <path fill="#006FCF"
                          d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z">
                        </path>
                        <path fill="#006FCF"
                          d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z">
                        </path>
                        <path fill="#FFF"
                          d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z">
                        </path>
                        <path fill="#006FCF"
                          d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z">
                        </path>
                        <path fill="#006FCF"
                          d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z">
                        </path>
                      </svg>
                    </li>
                    <li>
                      <svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0"
                        width="38" height="24" viewBox="0 0 165.521 105.965" xml:space="preserve"
                        aria-labelledby="pi-apple_pay">
                        <title id="pi-apple_pay">Apple Pay</title>
                        <path fill="#000"
                          d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z">
                        </path>
                        <path fill="#FFF"
                          d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875">
                        </path>
                        <g>
                          <g>
                            <path fill="#000"
                              d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858">
                            </path>
                            <path fill="#000"
                              d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048">
                            </path>
                          </g>
                          <g>
                            <path fill="#000"
                              d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z">
                            </path>
                            <path fill="#000"
                              d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z">
                            </path>
                            <path fill="#000"
                              d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z">
                            </path>
                          </g>
                        </g>
                      </svg>
                    </li>
                    <li>
                      <svg class="icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38"
                        height="24" aria-labelledby="pi-google_pay">
                        <title id="pi-google_pay">Google Pay</title>
                        <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                          fill="#000" opacity=".07"></path>
                        <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                          fill="#FFF"></path>
                        <path
                          d="M18.093 11.976v3.2h-1.018v-7.9h2.691a2.447 2.447 0 0 1 1.747.692 2.28 2.28 0 0 1 .11 3.224l-.11.116c-.47.447-1.098.69-1.747.674l-1.673-.006zm0-3.732v2.788h1.698c.377.012.741-.135 1.005-.404a1.391 1.391 0 0 0-1.005-2.354l-1.698-.03zm6.484 1.348c.65-.03 1.286.188 1.778.613.445.43.682 1.03.65 1.649v3.334h-.969v-.766h-.049a1.93 1.93 0 0 1-1.673.931 2.17 2.17 0 0 1-1.496-.533 1.667 1.667 0 0 1-.613-1.324 1.606 1.606 0 0 1 .613-1.336 2.746 2.746 0 0 1 1.698-.515c.517-.02 1.03.093 1.49.331v-.208a1.134 1.134 0 0 0-.417-.901 1.416 1.416 0 0 0-.98-.368 1.545 1.545 0 0 0-1.319.717l-.895-.564a2.488 2.488 0 0 1 2.182-1.06zM23.29 13.52a.79.79 0 0 0 .337.662c.223.176.5.269.785.263.429-.001.84-.17 1.146-.472.305-.286.478-.685.478-1.103a2.047 2.047 0 0 0-1.324-.374 1.716 1.716 0 0 0-1.03.294.883.883 0 0 0-.392.73zm9.286-3.75l-3.39 7.79h-1.048l1.281-2.728-2.224-5.062h1.103l1.612 3.885 1.569-3.885h1.097z"
                          fill="#5F6368"></path>
                        <path
                          d="M13.986 11.284c0-.308-.024-.616-.073-.92h-4.29v1.747h2.451a2.096 2.096 0 0 1-.9 1.373v1.134h1.464a4.433 4.433 0 0 0 1.348-3.334z"
                          fill="#4285F4"></path>
                        <path
                          d="M9.629 15.721a4.352 4.352 0 0 0 3.01-1.097l-1.466-1.14a2.752 2.752 0 0 1-4.094-1.44H5.577v1.17a4.53 4.53 0 0 0 4.052 2.507z"
                          fill="#34A853"></path>
                        <path
                          d="M7.079 12.05a2.709 2.709 0 0 1 0-1.735v-1.17H5.577a4.505 4.505 0 0 0 0 4.075l1.502-1.17z"
                          fill="#FBBC04"></path>
                        <path
                          d="M9.629 8.44a2.452 2.452 0 0 1 1.74.68l1.3-1.293a4.37 4.37 0 0 0-3.065-1.183 4.53 4.53 0 0 0-4.027 2.5l1.502 1.171a2.715 2.715 0 0 1 2.55-1.875z"
                          fill="#EA4335"></path>
                      </svg>
                    </li>
                    <li>
                      <svg class="icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38"
                        height="24" aria-labelledby="pi-master">
                        <title id="pi-master">Mastercard</title>
                        <path opacity=".07"
                          d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff"
                          d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                        <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                        <path fill="#FF5F00"
                          d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                        </path>
                      </svg>
                    </li>
                    <li>
                      <svg class="icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38"
                        height="24" aria-labelledby="pi-shopify_pay">
                        <title id="pi-shopify_pay">Shop Pay</title>
                        <path opacity=".07"
                          d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                          fill="#000"></path>
                        <path
                          d="M35.889 0C37.05 0 38 .982 38 2.182v19.636c0 1.2-.95 2.182-2.111 2.182H2.11C.95 24 0 23.018 0 21.818V2.182C0 .982.95 0 2.111 0H35.89z"
                          fill="#5A31F4"></path>
                        <path
                          d="M9.35 11.368c-1.017-.223-1.47-.31-1.47-.705 0-.372.306-.558.92-.558.54 0 .934.238 1.225.704a.079.079 0 00.104.03l1.146-.584a.082.082 0 00.032-.114c-.475-.831-1.353-1.286-2.51-1.286-1.52 0-2.464.755-2.464 1.956 0 1.275 1.15 1.597 2.17 1.82 1.02.222 1.474.31 1.474.705 0 .396-.332.582-.993.582-.612 0-1.065-.282-1.34-.83a.08.08 0 00-.107-.035l-1.143.57a.083.083 0 00-.036.111c.454.92 1.384 1.437 2.627 1.437 1.583 0 2.539-.742 2.539-1.98s-1.155-1.598-2.173-1.82v-.003zM15.49 8.855c-.65 0-1.224.232-1.636.646a.04.04 0 01-.069-.03v-2.64a.08.08 0 00-.08-.081H12.27a.08.08 0 00-.08.082v8.194a.08.08 0 00.08.082h1.433a.08.08 0 00.081-.082v-3.594c0-.695.528-1.227 1.239-1.227.71 0 1.226.521 1.226 1.227v3.594a.08.08 0 00.081.082h1.433a.08.08 0 00.081-.082v-3.594c0-1.51-.981-2.577-2.355-2.577zM20.753 8.62c-.778 0-1.507.24-2.03.588a.082.082 0 00-.027.109l.632 1.088a.08.08 0 00.11.03 2.5 2.5 0 011.318-.366c1.25 0 2.17.891 2.17 2.068 0 1.003-.736 1.745-1.669 1.745-.76 0-1.288-.446-1.288-1.077 0-.361.152-.657.548-.866a.08.08 0 00.032-.113l-.596-1.018a.08.08 0 00-.098-.035c-.799.299-1.359 1.018-1.359 1.984 0 1.46 1.152 2.55 2.76 2.55 1.877 0 3.227-1.313 3.227-3.195 0-2.018-1.57-3.492-3.73-3.492zM28.675 8.843c-.724 0-1.373.27-1.845.746-.026.027-.069.007-.069-.029v-.572a.08.08 0 00-.08-.082h-1.397a.08.08 0 00-.08.082v8.182a.08.08 0 00.08.081h1.433a.08.08 0 00.081-.081v-2.683c0-.036.043-.054.069-.03a2.6 2.6 0 001.808.7c1.682 0 2.993-1.373 2.993-3.157s-1.313-3.157-2.993-3.157zm-.271 4.929c-.956 0-1.681-.768-1.681-1.783s.723-1.783 1.681-1.783c.958 0 1.68.755 1.68 1.783 0 1.027-.713 1.783-1.681 1.783h.001z"
                          fill="#fff"></path>
                      </svg>
                    </li>
                    <li>
                      <svg class="icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38"
                        height="24" aria-labelledby="pi-visa">
                        <title id="pi-visa">Visa</title>
                        <path opacity=".07"
                          d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                        </path>
                        <path fill="#fff"
                          d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                        </path>
                        <path
                          d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                          fill="#142688"></path>
                      </svg>
                    </li>
                    <li>
                      <svg class="icon" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24"
                        viewBox="0 0 38 24" aria-labelledby="pi-klarna">
                        <title id="pi-klarna">Klarna</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                            fill="#FFB3C7"></path>
                          <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                            fill="#FFB3C7"></path>
                          <path
                            d="M34.117 13.184c-.487 0-.882.4-.882.892 0 .493.395.893.882.893.488 0 .883-.4.883-.893a.888.888 0 00-.883-.892zm-2.903-.69c0-.676-.57-1.223-1.274-1.223-.704 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.376h1.406v4.75h-1.406v-.303a2.446 2.446 0 01-1.394.435c-1.369 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .996.16 1.394.435v-.304zm-11.253.619v-.619h-1.44v4.75h1.443v-2.217c0-.749.802-1.15 1.359-1.15h.016v-1.382c-.57 0-1.096.247-1.378.618zm-3.586 1.756c0-.675-.57-1.222-1.274-1.222-.703 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.375h1.406v4.75h-1.406v-.303A2.446 2.446 0 0114.99 15c-1.368 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .997.16 1.394.435v-.304zm8.463-.128c-.561 0-1.093.177-1.448.663v-.535H22v4.75h1.417v-2.496c0-.722.479-1.076 1.055-1.076.618 0 .973.374.973 1.066v2.507h1.405v-3.021c0-1.106-.87-1.858-2.002-1.858zM10.465 14.87h1.472V8h-1.472v6.868zM4 14.87h1.558V8H4v6.87zM9.45 8a5.497 5.497 0 01-1.593 3.9l2.154 2.97H8.086l-2.341-3.228.604-.458A3.96 3.96 0 007.926 8H9.45z"
                            fill="#0A0B09" fill-rule="nonzero"></path>
                        </g>
                      </svg>
                    </li>
                  </ul>
                </section>
              </div>--}}
              <div class="footer-inner__text">
                <div class="footer-inner__text-item">
                  <span>
                    <p>Musafir International</p>
                  </span>
                  <span>
                    <p><strong>Company Number:</strong> {{ $ws->contact_mobile}}</p>
                  </span>
                </div>
                <div class="footer-inner__text-item">
                  <span class="tablet-up-hide">
                    <p><strong>Head Office:</strong></p>
                  </span>
                  <span>
                    <p>{{ $ws->contact_address}}</p>
                  </span>
                </div>
              </div>
            </div>
          </footer>
        </div>
        <section class="cookie-warning-snippet hidden hide" hidden="" hide="">
          <div class="hide" data-cookie-warning="">
            <p>We use cookies to personalise your experience<br><a href="/pages/privacy-policy"><span
                  class="bold underline">Learn more</span></a></p>
            <button class="btn btn-primary" data-cookie-warning-btn="" type="text" aria-label="Close">
              Close
            </button>
          </div>
        </section>
      </footer>

    </div>