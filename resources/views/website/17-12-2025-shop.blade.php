@extends('website.layouts.master')

@section('title', 'Shop - Porcelaina')

@section('meta')
<meta name="description"
  content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
<meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
<meta property="og:title" content="Contact Us - North Bengal">
<meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection
@section('content')

<style>
  /* Main layout wrapper */
  .collection-layout-wrapper {
    display: flex;
    gap: 30px;
    position: relative;
  }

  /* Mobile styles */
  @media screen and (max-width: 768px) {
    .collection-layout-wrapper {
      flex-direction: column;
      gap: 20px;
    }
    
    /* Filter sidebar - full width on mobile */
    .facets-wrapper {
      width: 100% !important;
      flex-shrink: 0 !important;
    }
    
    /* Product grid container */
    .product-grid-container {
      width: 100% !important;
      order: 2; /* Ensure products appear after filters on mobile */
    }
    
    /* Sorting controls container */
    .product-grid-header {
      width: 100%;
      margin-bottom: 20px;
    }
    
    /* Ensure product grid shows properly on mobile */
    .product-grid.grid--2-col-tablet-down .grid__item {
      width: calc(50% - 10px) !important;
    }
    
    .product-grid.grid--1-col-tablet-down .grid__item {
      width: 100% !important;
    }
  }
  
  /* Desktop styles */
  @media screen and (min-width: 769px) {
    .collection-layout-wrapper {
      display: flex;
      flex-wrap: nowrap;
      align-items: flex-start;
    }
    
    /* Filter sidebar - fixed width on desktop */
    .facets-wrapper {
      width: 25%;
      flex-shrink: 0;
      position: sticky;
      top: 20px;
      align-self: flex-start;
    }
    
    /* Product grid container - takes remaining space */
    .product-grid-container {
      width: 75%;
      flex-grow: 1;
    }
    
    /* Product grid columns */
    .product-grid.grid--2-col-desktop .grid__item {
      width: calc(50% - 15px);
    }
    
    .product-grid.grid--3-col-desktop .grid__item {
      width: calc(33.333% - 20px);
    }
    
    /* Sorting controls - make sure they're in the product grid container */
    .product-grid-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
      width: 100%;
    }
    
    .product-grid-header .facets-vertical-sort {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }
  }
  
  /* General fixes */
  .product-grid {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 20px !important;
  }
  
  .grid__item {
    flex-shrink: 0;
  }
  
  /* Ensure the sorting controls are properly positioned */
  .product-count-vertical {
    flex: 1;
  }
  
  .facet-filters.sorting {
    margin-left: 20px;
  }
  
  .facets__switch-view {
    margin-left: 20px;
  }
</style>
<main role="main" id="MainContent">

  <div id="shopify-section-template--26303100092798__native_collection_nPVQGD" class="shopify-section section">
    <style data-shopify>
      .section-template--26303100092798__native_collection_nPVQGD-padding {
        padding-top: 0px;
        padding-bottom: 27px;

      }

      .button__icon-group {
        display: flex;
        gap: 6px;
        margin-left: 10px;
      }

      .button__icon.disabled svg {
        fill: #d1d1d1;
      }

      @media screen and (min-width: 750px) {
        .section-template--26303100092798__native_collection_nPVQGD-padding {
          padding-top: 0px;
          padding-bottom: 36px;
        }
      }

      @media screen and (max-width: 800px) {}

      @media screen and (min-width: 800px) {
        #shopify-section-template--26303100092798__native_collection_nPVQGD swiper-slider {
          max-width: 100%;
          width: 100%;
          margin-inline: auto;
        }
      }
    </style>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const button = document.getElementById('button-switch-grid');
        const grid = document.getElementById('product-grid');
        const oneCol = document.getElementById('icon_one_col');
        const twoCol = document.getElementById('icon_two_col');
        const STORAGE_KEY = 'productGridLayout';
        const LAYOUTS = {
          one: {
            add: ['grid--1-col-tablet-down', 'grid--2-col-desktop'],
            remove: ['grid--2-col-tablet-down', 'grid--3-col-desktop'],
            icons: {
              oneDisabled: false,
              twoDisabled: true
            },
            pressed: true,
          },
          two: {
            add: ['grid--2-col-tablet-down', 'grid--3-col-desktop'],
            remove: ['grid--1-col-tablet-down', 'grid--2-col-desktop'],
            icons: {
              oneDisabled: true,
              twoDisabled: false
            },
            pressed: false,
          },
        };
        const applyLayout = (mode) => {
          const config = LAYOUTS[mode];
          if (!config) return;
          config.remove.forEach(c => grid.classList.remove(c));
          config.add.forEach(c => grid.classList.add(c));
          oneCol.classList.toggle('disabled', config.icons.oneDisabled);
          twoCol.classList.toggle('disabled', config.icons.twoDisabled);
          button.setAttribute('aria-pressed', String(config.pressed));
          localStorage.setItem(STORAGE_KEY, mode);
        };
        const saved = localStorage.getItem(STORAGE_KEY);
        const initialMode = saved ?
          saved :
          grid.classList.contains('grid--2-col-tablet-down') ? 'two' : 'one';
        applyLayout(initialMode);
        button.addEventListener('click', () => {
          const next = (localStorage.getItem(STORAGE_KEY) === 'one') ? 'two' : 'one';
          applyLayout(next);
        });
        button.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            button.click();
          }
        });
      });
    </script>

    <div class="gapless-slider-section collection-header-wrapper" style="background: #ffffff;color: #0d1f22">
      <div class="container">

        <section class="breadcrumbs-snippet" role="navigation" aria-label="breadcrumbs">
          <div class="">

            <a href="https://www.porcelainsuperstore.co.uk/" title="home">home</a>

            <span aria-hidden="true" class="breadcrumbs-arrow"></span>
            <a href="wall-tiles.html" title="">Wall Tiles</a>

            <span aria-hidden="true" class="breadcrumbs-arrow"></span>

            <span>Fluted Tiles</span>

          </div>
        </section>

        <section class="collection-section" style="background-color: ">

          <style data-shopify>
            .cl-product-card .swiper,
            .cl-product-card .swiper-wrapper,
            .header-collections-snippet .swiper,
            .header-collections-snippet .swiper-wrapper {
              touch-action: pan-y;
              overscroll-behavior-x: contain;
            }


            @media screen and (min-width: 768px) {
              .read-more-container .swiper-wrapper {
                max-width: 788px;
                min-width: 768px;
              }
            }
          </style>

          <header class="header-collections-snippet collection-header" role="banner">

            <div class="text-container truncated-container read-more-container text-center" data-total-chars="436"
              data-chars="255" data-line-height="1.5">
              <h1 class="h3 title" style="">Fluted Tiles</h1>

              <div class="read-more-content">
                <p>Add a refined look to your home with our fluted tiles, ideal for creating striking
                  feature walls in kitchens, bathrooms, or any Japandi-inspired space. With their
                  unique ribbed design, these tiles offer subtle texture and a modern aesthetic while
                  remaining easy to clean and maintain. Perfect if you're seeking a blend of
                  minimalism and warmth, fluted tiles offer an elegant finish that's perfect for calm
                  and contemporary rooms.</p>
              </div>
              <div class="read-more__button-container">
                <button class="read-more-toggle site-link site-link--underline">Read more</button>
              </div>

            </div>

          </header>
        </section>
      </div>
    </div>

    <div class="section-template--26303100092798__native_collection_nPVQGD-padding gradient color-">
      <div class=" facets-vertical container">
        <script src="{{ asset('frontend/cdn/shop/t/399/assets/facets1b8c.js') }}" defer="defer"></script>
        <div class="d-flex collection-layout-wrapper">
          <aside class="facets-wrapper" style="width: 25%; flex-shrink: 0;">
            <div class="mobile-facets-navbar tablet-up-hide">
            </div>

            <div class="facets-container">
              <facet-filters-form class="facets tablet-hide">
                <form id="FacetFiltersForm" class="facets__form-vertical">

                  <div id="FacetsWrapperDesktop">
                    <div class="active-facets active-facets-desktop">
                      <div class="active-facets-vertical-filter">
                        <h2 class="facets__heading facets__heading--vertical caption-large text-body" id="verticalTitle"
                          tabindex="-1">
                          Filter By
                        </h2>
                        <facet-remove class="active-facets__button-wrapper">
                          <a href="fluted-tiles.html" class="active-facets__button-remove underline">
                            <span>Clear All</span>
                          </a>
                        </facet-remove>
                      </div>

                    </div>

                    <details
                      id="Details-filter.p.m.custom.filter_colour-template--26303100092798__native_collection_nPVQGD"
                      class=" facets__disclosure-vertical js-filter" data-index="1" open>
                      <summary class="facets__summary caption-large focus-offset" aria-label="Colour (0 selected)">
                        <div>
                          <span class="facets__summary-label">Colour
                            <span class="facets__selected hide">
                              (0)</span></span>

                          <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-1-template--26303100092798__native_collection_nPVQGD"
                        class="parent-display facets__display-vertical">
                        <fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                          <legend class="visually-hidden">Colour</legend>
                          <ul
                            class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical facets__list--swatches  list-unstyled"
                            role="list">
                            <li class="list-menu__item facets__item">
                              <div class="facets__label facet-checkbox facet-swatch ">
                                <div class="swatch-input-wrapper">

                                  <input type="checkbox" id="Filter-filter.p.m.custom.filter_colour-1"
                                    name="filter.p.m.custom.filter_colour" value="Beige" form="FacetFiltersForm"
                                    class="swatch-input__input">
                                  <label for="Filter-filter.p.m.custom.filter_colour-1" title="Beige"
                                    class="swatch-input__label">

                                    <span class="swatch"
                                      style="--swatch--background: url({{ asset('frontend/cdn/shop/files/swatch_beige_small5f74.jpg') }});"></span>

                                    <span class="facet-checkbox__text" aria-hidden="true">
                                      <span class="facet-checkbox__text-label">Beige</span>
                                      (6)
                                    </span>
                                    <span class="visually-hidden">Beige (6 products)
                                    </span>
                                  </label>

                                </div>
                              </div>
                            </li>
                            <li class="list-menu__item facets__item">
                              <div class="facets__label facet-checkbox facet-swatch ">
                                <div class="swatch-input-wrapper">

                                  <input type="checkbox" id="Filter-filter.p.m.custom.filter_colour-2"
                                    name="filter.p.m.custom.filter_colour" value="Blue" form="FacetFiltersForm"
                                    class="swatch-input__input">
                                  <label for="Filter-filter.p.m.custom.filter_colour-2" title="Blue"
                                    class="swatch-input__label">

                                    <span class="swatch"
                                      style="--swatch--background: url({{ asset('frontend/cdn/shop/files/swatch_blue_small6836.jpg') }});"></span>

                                    <span class="facet-checkbox__text" aria-hidden="true">
                                      <span class="facet-checkbox__text-label">Blue</span>
                                      (1)
                                    </span>
                                    <span class="visually-hidden">Blue (1 product)
                                    </span>
                                  </label>

                                </div>
                              </div>
                            </li>
                            <li class="list-menu__item facets__item">
                              <div class="facets__label facet-checkbox facet-swatch ">
                                <div class="swatch-input-wrapper">

                                  <input type="checkbox" id="Filter-filter.p.m.custom.filter_colour-3"
                                    name="filter.p.m.custom.filter_colour" value="Brown" form="FacetFiltersForm"
                                    class="swatch-input__input">
                                  <label for="Filter-filter.p.m.custom.filter_colour-3" title="Brown"
                                    class="swatch-input__label">

                                    <span class="swatch"
                                      style="--swatch--background: url(../cdn/shop/files/swatch_brown_small3fbc.jpg?v=338346258807019803);"></span>

                                    <span class="facet-checkbox__text" aria-hidden="true">
                                      <span class="facet-checkbox__text-label">Brown</span>
                                      (1)
                                    </span>
                                    <span class="visually-hidden">Brown (1 product)
                                    </span>
                                  </label>

                                </div>
                              </div>
                            </li>
                            <li class="list-menu__item facets__item">
                              <div class="facets__label facet-checkbox facet-swatch ">
                                <div class="swatch-input-wrapper">

                                  <input type="checkbox" id="Filter-filter.p.m.custom.filter_colour-4"
                                    name="filter.p.m.custom.filter_colour" value="Green" form="FacetFiltersForm"
                                    class="swatch-input__input">
                                  <label for="Filter-filter.p.m.custom.filter_colour-4" title="Green"
                                    class="swatch-input__label">

                                    <span class="swatch"
                                      style="--swatch--background: url(../cdn/shop/files/swatch_green_small867e.jpg?v=3497274801390206174);"></span>

                                    <span class="facet-checkbox__text" aria-hidden="true">
                                      <span class="facet-checkbox__text-label">Green</span>
                                      (1)
                                    </span>
                                    <span class="visually-hidden">Green (1 product)
                                    </span>
                                  </label>

                                </div>
                              </div>
                            </li>
                            <li class="list-menu__item facets__item">
                              <div class="facets__label facet-checkbox facet-swatch ">
                                <div class="swatch-input-wrapper">

                                  <input type="checkbox" id="Filter-filter.p.m.custom.filter_colour-5"
                                    name="filter.p.m.custom.filter_colour" value="Grey" form="FacetFiltersForm"
                                    class="swatch-input__input">
                                  <label for="Filter-filter.p.m.custom.filter_colour-5" title="Grey"
                                    class="swatch-input__label">

                                    <span class="swatch"
                                      style="--swatch--background: url(../cdn/shop/files/swatch_grey_small1742.jpg?v=5667096436932717727);"></span>

                                    <span class="facet-checkbox__text" aria-hidden="true">
                                      <span class="facet-checkbox__text-label">Grey</span>
                                      (2)
                                    </span>
                                    <span class="visually-hidden">Grey (2 products)
                                    </span>
                                  </label>

                                </div>
                              </div>
                            </li>
                            <li class="list-menu__item facets__item">
                              <div class="facets__label facet-checkbox facet-swatch ">
                                <div class="swatch-input-wrapper">

                                  <input type="checkbox" id="Filter-filter.p.m.custom.filter_colour-6"
                                    name="filter.p.m.custom.filter_colour" value="Pink" form="FacetFiltersForm"
                                    class="swatch-input__input">
                                  <label for="Filter-filter.p.m.custom.filter_colour-6" title="Pink"
                                    class="swatch-input__label">

                                    <span class="swatch"
                                      style="--swatch--background: url(../cdn/shop/files/swatch_pink_smalld822.jpg?v=10552249410871022836);"></span>

                                    <span class="facet-checkbox__text" aria-hidden="true">
                                      <span class="facet-checkbox__text-label">Pink</span>
                                      (1)
                                    </span>
                                    <span class="visually-hidden">Pink (1 product)
                                    </span>
                                  </label>

                                </div>
                              </div>
                            </li>
                            <li class="list-menu__item facets__item">
                              <div class="facets__label facet-checkbox facet-swatch ">
                                <div class="swatch-input-wrapper">

                                  <input type="checkbox" id="Filter-filter.p.m.custom.filter_colour-7"
                                    name="filter.p.m.custom.filter_colour" value="Terracotta" form="FacetFiltersForm"
                                    class="swatch-input__input">
                                  <label for="Filter-filter.p.m.custom.filter_colour-7" title="Terracotta"
                                    class="swatch-input__label">

                                    <span class="swatch"
                                      style="--swatch--background: url(../cdn/shop/files/swatch_terracotta_small3af8.jpg?v=16253344334556971899);"></span>

                                    <span class="facet-checkbox__text" aria-hidden="true">
                                      <span class="facet-checkbox__text-label">Terracotta</span>
                                      (1)
                                    </span>
                                    <span class="visually-hidden">Terracotta (1
                                      product)
                                    </span>
                                  </label>

                                </div>
                              </div>
                            </li>
                            <li class="list-menu__item facets__item">
                              <div class="facets__label facet-checkbox facet-swatch ">
                                <div class="swatch-input-wrapper">

                                  <input type="checkbox" id="Filter-filter.p.m.custom.filter_colour-8"
                                    name="filter.p.m.custom.filter_colour" value="White" form="FacetFiltersForm"
                                    class="swatch-input__input">
                                  <label for="Filter-filter.p.m.custom.filter_colour-8" title="White"
                                    class="swatch-input__label">

                                    <span class="swatch"
                                      style="--swatch--background: url(../cdn/shop/files/swatch_white_small259a.jpg?v=1913405391209899642);"></span>

                                    <span class="facet-checkbox__text" aria-hidden="true">
                                      <span class="facet-checkbox__text-label">White</span>
                                      (2)
                                    </span>
                                    <span class="visually-hidden">White (2 products)
                                    </span>
                                  </label>

                                </div>
                              </div>
                            </li>
                          </ul>
                        </fieldset>
                      </div>
                    </details>

                    <details
                      id="Details-filter.p.m.custom.filter_tile_type-template--26303100092798__native_collection_nPVQGD"
                      class=" facets__disclosure-vertical js-filter" data-index="2">
                      <summary class="facets__summary caption-large focus-offset"
                        aria-label="Wall or Floor (0 selected)">
                        <div>
                          <span class="facets__summary-label">Wall or Floor
                            <span class="facets__selected hide">
                              (0)</span></span>

                          <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-2-template--26303100092798__native_collection_nPVQGD"
                        class="parent-display facets__display-vertical">
                        <fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                          <legend class="visually-hidden">Wall or Floor</legend>
                          <ul
                            class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                            role="list">
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_type-1" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_type" value="Floor"
                                  id="Filter-filter.p.m.custom.filter_tile_type-1"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Floor</span>
                                  (3)
                                </span>
                                <span class="visually-hidden">Floor (3 products)
                                </span>
                              </label></li>
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_type-2" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_type" value="Wall"
                                  id="Filter-filter.p.m.custom.filter_tile_type-2"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Wall</span>
                                  (15)
                                </span>
                                <span class="visually-hidden">Wall (15 products)
                                </span>
                              </label></li>
                          </ul>
                        </fieldset>
                      </div>
                    </details>

                    <details
                      id="Details-filter.v.m.product.filter_size-template--26303100092798__native_collection_nPVQGD"
                      class=" facets__disclosure-vertical js-filter" data-index="3">
                      <summary class="facets__summary caption-large focus-offset" aria-label="Tile Size (0 selected)">
                        <div>
                          <span class="facets__summary-label">Tile Size
                            <span class="facets__selected hide">
                              (0)</span></span>

                          <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-3-template--26303100092798__native_collection_nPVQGD"
                        class="parent-display facets__display-vertical">
                        <fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                          <legend class="visually-hidden">Tile Size</legend>
                          <ul
                            class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                            role="list">
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.v.m.product.filter_size-1" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.v.m.product.filter_size" value="Small"
                                  id="Filter-filter.v.m.product.filter_size-1"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Small</span>
                                  (5)
                                </span>
                                <span class="visually-hidden">Small (5 products)
                                </span>
                              </label></li>
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.v.m.product.filter_size-2" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.v.m.product.filter_size" value="Medium"
                                  id="Filter-filter.v.m.product.filter_size-2"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Medium</span>
                                  (7)
                                </span>
                                <span class="visually-hidden">Medium (7 products)
                                </span>
                              </label></li>
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.v.m.product.filter_size-3" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.v.m.product.filter_size" value="Large"
                                  id="Filter-filter.v.m.product.filter_size-3"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Large</span>
                                  (3)
                                </span>
                                <span class="visually-hidden">Large (3 products)
                                </span>
                              </label></li>
                          </ul>
                        </fieldset>
                      </div>
                    </details>

                    <details
                      id="Details-filter.p.m.custom.filter_tile_style-template--26303100092798__native_collection_nPVQGD"
                      class=" facets__disclosure-vertical js-filter" data-index="4">
                      <summary class="facets__summary caption-large focus-offset" aria-label="Style (0 selected)">
                        <div>
                          <span class="facets__summary-label">Style
                            <span class="facets__selected hide">
                              (0)</span></span>

                          <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-4-template--26303100092798__native_collection_nPVQGD"
                        class="parent-display facets__display-vertical">
                        <fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                          <legend class="visually-hidden">Style</legend>
                          <ul
                            class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                            role="list">
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_style-1" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_style" value="Classic"
                                  id="Filter-filter.p.m.custom.filter_tile_style-1"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Classic</span>
                                  (3)
                                </span>
                                <span class="visually-hidden">Classic (3 products)
                                </span>
                              </label></li>
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_style-2" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_style" value="Modern"
                                  id="Filter-filter.p.m.custom.filter_tile_style-2"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Modern</span>
                                  (12)
                                </span>
                                <span class="visually-hidden">Modern (12 products)
                                </span>
                              </label></li>
                          </ul>
                        </fieldset>
                      </div>
                    </details>

                    <details
                      id="Details-filter.p.m.custom.filter_tile_finish-template--26303100092798__native_collection_nPVQGD"
                      class=" facets__disclosure-vertical js-filter" data-index="5">
                      <summary class="facets__summary caption-large focus-offset" aria-label="Finish (0 selected)">
                        <div>
                          <span class="facets__summary-label">Finish
                            <span class="facets__selected hide">
                              (0)</span></span>

                          <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-5-template--26303100092798__native_collection_nPVQGD"
                        class="parent-display facets__display-vertical">
                        <fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                          <legend class="visually-hidden">Finish</legend>
                          <ul
                            class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                            role="list">
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_finish-1" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_finish" value="Gloss"
                                  id="Filter-filter.p.m.custom.filter_tile_finish-1"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Gloss</span>
                                  (1)
                                </span>
                                <span class="visually-hidden">Gloss (1 product)
                                </span>
                              </label></li>
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_finish-2" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_finish" value="Matt"
                                  id="Filter-filter.p.m.custom.filter_tile_finish-2"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Matt</span>
                                  (14)
                                </span>
                                <span class="visually-hidden">Matt (14 products)
                                </span>
                              </label></li>
                          </ul>
                        </fieldset>
                      </div>
                    </details>

                    <details
                      id="Details-filter.p.m.custom.filter_tile_shape-template--26303100092798__native_collection_nPVQGD"
                      class=" facets__disclosure-vertical js-filter" data-index="6">
                      <summary class="facets__summary caption-large focus-offset" aria-label="Shape (0 selected)">
                        <div>
                          <span class="facets__summary-label">Shape
                            <span class="facets__selected hide">
                              (0)</span></span>

                          <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-6-template--26303100092798__native_collection_nPVQGD"
                        class="parent-display facets__display-vertical">
                        <fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                          <legend class="visually-hidden">Shape</legend>
                          <ul
                            class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                            role="list">
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_shape-1" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_shape" value="Rectangle"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-1"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Rectangle</span>
                                  (15)
                                </span>
                                <span class="visually-hidden">Rectangle (15 products)
                                </span>
                              </label></li>
                          </ul>
                        </fieldset>
                      </div>
                    </details>

                    <details
                      id="Details-filter.p.m.custom.filter_tile_material-template--26303100092798__native_collection_nPVQGD"
                      class=" facets__disclosure-vertical js-filter" data-index="7">
                      <summary class="facets__summary caption-large focus-offset" aria-label="Material (0 selected)">
                        <div>
                          <span class="facets__summary-label">Material
                            <span class="facets__selected hide">
                              (0)</span></span>

                          <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>

                        </div>
                      </summary>
                      <div id="Facet-7-template--26303100092798__native_collection_nPVQGD"
                        class="parent-display facets__display-vertical">
                        <fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                          <legend class="visually-hidden">Material</legend>
                          <ul
                            class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                            role="list">
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_material-1" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_material" value="Ceramic"
                                  id="Filter-filter.p.m.custom.filter_tile_material-1"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Ceramic</span>
                                  (8)
                                </span>
                                <span class="visually-hidden">Ceramic (8 products)
                                </span>
                              </label></li>
                            <li class="list-menu__item facets__item"><label
                                for="Filter-filter.p.m.custom.filter_tile_material-2" class="facets__label facet-checkbox ">
                                <input type="checkbox" name="filter.p.m.custom.filter_tile_material" value="Porcelain"
                                  id="Filter-filter.p.m.custom.filter_tile_material-2"><svg class="icon icon-checkbox"
                                  width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                    stroke="#D3D3D3" stroke-width="1.2" />
                                </svg>
                                <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem" height="0.7rem"
                                  viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                </svg><span class="facet-checkbox__text" aria-hidden="true">
                                  <span class="facet-checkbox__text-label">Porcelain</span>
                                  (7)
                                </span>
                                <span class="visually-hidden">Porcelain (7 products)
                                </span>
                              </label></li>
                          </ul>
                        </fieldset>
                      </div>
                    </details>

                  </div>

                </form>
              </facet-filters-form>

              <custom-drawer id="mobile-facets-drawer" data-body-class="custom-drawer-opened">
                <div class="custom-drawer">
                  <div class="custom-drawer__header">
                    <h4 class="h3">Filters</h4>
                    <button type="button" aria-label="Close Filters" class="custom-drawer-button" drawer-trigger=""
                      data-target-drawer="mobile-facets-drawer">
                      <span class="button__icon">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>

                      </span>
                    </button>
                  </div>
                  <div class="custom-drawer__main custom-drawer__main--no-padding">

                    <facet-filters-form>
                      <form id="FacetFiltersFormMobile" class="mobile-facets">
                        <div class="mobile-facets__main has-submenu gradient">
                          <div
                            class="mobile-facets__active-facets active-facets active-facets-mobile medium-hide large-up-hide">

                            <p class="text-center text-body" style="opacity:.4">There are no
                              applied filters.</p>

                          </div>

                          <accordion-row animate class="accordion accordion--filter accordion--no-padding">
                            <details id="Details-Mobile-1-template--26303100092798__native_collection_nPVQGD"
                              class="js-filter" data-index="mobile-1">
                              <summary>
                                <div class="accordion__title">
                                  <span>Colour</span>

                                  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                                </div>
                              </summary>

                              <div class="accordion__info"
                                id="FacetMobile-1-template--26303100092798__native_collection_nPVQGD" role="region"
                                aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD">
                                <ul
                                  class="facets-layout-list mobile-facets__list  mobile-facets__list--swatches  list-unstyled"
                                  role="list">
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_colour-mobile-1"
                                      class="facets__label mobile-facets__label  facet-swatch   ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_colour" value="Beige"
                                        id="Filter-filter.p.m.custom.filter_colour-mobile-1">
                                      <div for="" title="FilterListValueDrop" class="swatch-input__label">

                                        <span class="swatch"
                                          style="--swatch--background: url(../cdn/shop/files/swatch_beige_small5f74.jpg?v=1783742319593636031);"></span>

                                        Beige
                                      </div>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_colour-mobile-2"
                                      class="facets__label mobile-facets__label  facet-swatch   ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_colour" value="Blue"
                                        id="Filter-filter.p.m.custom.filter_colour-mobile-2">
                                      <div for="" title="FilterListValueDrop" class="swatch-input__label">

                                        <span class="swatch"
                                          style="--swatch--background: url(../cdn/shop/files/swatch_blue_small6836.jpg?v=15256520960457269895);"></span>

                                        Blue
                                      </div>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_colour-mobile-3"
                                      class="facets__label mobile-facets__label  facet-swatch   ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_colour" value="Brown"
                                        id="Filter-filter.p.m.custom.filter_colour-mobile-3">
                                      <div for="" title="FilterListValueDrop" class="swatch-input__label">

                                        <span class="swatch"
                                          style="--swatch--background: url(../cdn/shop/files/swatch_brown_small3fbc.jpg?v=338346258807019803);"></span>

                                        Brown
                                      </div>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_colour-mobile-4"
                                      class="facets__label mobile-facets__label  facet-swatch   ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_colour" value="Green"
                                        id="Filter-filter.p.m.custom.filter_colour-mobile-4">
                                      <div for="" title="FilterListValueDrop" class="swatch-input__label">

                                        <span class="swatch"
                                          style="--swatch--background: url(../cdn/shop/files/swatch_green_small867e.jpg?v=3497274801390206174);"></span>

                                        Green
                                      </div>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_colour-mobile-5"
                                      class="facets__label mobile-facets__label  facet-swatch   ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_colour" value="Grey"
                                        id="Filter-filter.p.m.custom.filter_colour-mobile-5">
                                      <div for="" title="FilterListValueDrop" class="swatch-input__label">

                                        <span class="swatch"
                                          style="--swatch--background: url(../cdn/shop/files/swatch_grey_small1742.jpg?v=5667096436932717727);"></span>

                                        Grey
                                      </div>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_colour-mobile-6"
                                      class="facets__label mobile-facets__label  facet-swatch   ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_colour" value="Pink"
                                        id="Filter-filter.p.m.custom.filter_colour-mobile-6">
                                      <div for="" title="FilterListValueDrop" class="swatch-input__label">

                                        <span class="swatch"
                                          style="--swatch--background: url(../cdn/shop/files/swatch_pink_smalld822.jpg?v=10552249410871022836);"></span>

                                        Pink
                                      </div>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_colour-mobile-7"
                                      class="facets__label mobile-facets__label  facet-swatch   ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_colour" value="Terracotta"
                                        id="Filter-filter.p.m.custom.filter_colour-mobile-7">
                                      <div for="" title="FilterListValueDrop" class="swatch-input__label">

                                        <span class="swatch"
                                          style="--swatch--background: url(../cdn/shop/files/swatch_terracotta_small3af8.jpg?v=16253344334556971899);"></span>

                                        Terracotta
                                      </div>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_colour-mobile-8"
                                      class="facets__label mobile-facets__label  facet-swatch   ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_colour" value="White"
                                        id="Filter-filter.p.m.custom.filter_colour-mobile-8">
                                      <div for="" title="FilterListValueDrop" class="swatch-input__label">

                                        <span class="swatch"
                                          style="--swatch--background: url(../cdn/shop/files/swatch_white_small259a.jpg?v=1913405391209899642);"></span>

                                        White
                                      </div>

                                    </label>
                                  </li>
                                </ul>
                              </div>
                            </details>
                          </accordion-row>

                          <accordion-row animate class="accordion accordion--filter accordion--no-padding">
                            <details id="Details-Mobile-2-template--26303100092798__native_collection_nPVQGD"
                              class="js-filter" data-index="mobile-2">
                              <summary>
                                <div class="accordion__title">
                                  <span>Wall or Floor</span>

                                  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                                </div>
                              </summary>

                              <div class="accordion__info"
                                id="FacetMobile-2-template--26303100092798__native_collection_nPVQGD" role="region"
                                aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD">
                                <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_type-mobile-1"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_type" value="Floor"
                                        id="Filter-filter.p.m.custom.filter_tile_type-mobile-1">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Floor (3)</span>
                                      <span class="visually-hidden">Floor (3
                                        products)</span>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_type-mobile-2"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_type" value="Wall"
                                        id="Filter-filter.p.m.custom.filter_tile_type-mobile-2">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Wall (15)</span>
                                      <span class="visually-hidden">Wall (15
                                        products)</span>

                                    </label>
                                  </li>
                                </ul>
                              </div>
                            </details>
                          </accordion-row>

                          <accordion-row animate class="accordion accordion--filter accordion--no-padding">
                            <details id="Details-Mobile-3-template--26303100092798__native_collection_nPVQGD"
                              class="js-filter" data-index="mobile-3">
                              <summary>
                                <div class="accordion__title">
                                  <span>Tile Size</span>

                                  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                                </div>
                              </summary>

                              <div class="accordion__info"
                                id="FacetMobile-3-template--26303100092798__native_collection_nPVQGD" role="region"
                                aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD">
                                <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.v.m.product.filter_size-mobile-1"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.v.m.product.filter_size" value="Small"
                                        id="Filter-filter.v.m.product.filter_size-mobile-1">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Small (5)</span>
                                      <span class="visually-hidden">Small (5
                                        products)</span>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.v.m.product.filter_size-mobile-2"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.v.m.product.filter_size" value="Medium"
                                        id="Filter-filter.v.m.product.filter_size-mobile-2">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Medium (7)</span>
                                      <span class="visually-hidden">Medium (7
                                        products)</span>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.v.m.product.filter_size-mobile-3"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.v.m.product.filter_size" value="Large"
                                        id="Filter-filter.v.m.product.filter_size-mobile-3">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Large (3)</span>
                                      <span class="visually-hidden">Large (3
                                        products)</span>

                                    </label>
                                  </li>
                                </ul>
                              </div>
                            </details>
                          </accordion-row>

                          <accordion-row animate class="accordion accordion--filter accordion--no-padding">
                            <details id="Details-Mobile-4-template--26303100092798__native_collection_nPVQGD"
                              class="js-filter" data-index="mobile-4">
                              <summary>
                                <div class="accordion__title">
                                  <span>Style</span>

                                  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                                </div>
                              </summary>

                              <div class="accordion__info"
                                id="FacetMobile-4-template--26303100092798__native_collection_nPVQGD" role="region"
                                aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD">
                                <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_style-mobile-1"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_style" value="Classic"
                                        id="Filter-filter.p.m.custom.filter_tile_style-mobile-1">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Classic (3)</span>
                                      <span class="visually-hidden">Classic (3
                                        products)</span>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_style-mobile-2"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_style" value="Modern"
                                        id="Filter-filter.p.m.custom.filter_tile_style-mobile-2">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Modern (12)</span>
                                      <span class="visually-hidden">Modern (12
                                        products)</span>

                                    </label>
                                  </li>
                                </ul>
                              </div>
                            </details>
                          </accordion-row>

                          <accordion-row animate class="accordion accordion--filter accordion--no-padding">
                            <details id="Details-Mobile-5-template--26303100092798__native_collection_nPVQGD"
                              class="js-filter" data-index="mobile-5">
                              <summary>
                                <div class="accordion__title">
                                  <span>Finish</span>

                                  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                                </div>
                              </summary>

                              <div class="accordion__info"
                                id="FacetMobile-5-template--26303100092798__native_collection_nPVQGD" role="region"
                                aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD">
                                <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_finish-mobile-1"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_finish" value="Gloss"
                                        id="Filter-filter.p.m.custom.filter_tile_finish-mobile-1">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Gloss (1)</span>
                                      <span class="visually-hidden">Gloss (1
                                        products)</span>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_finish-mobile-2"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_finish" value="Matt"
                                        id="Filter-filter.p.m.custom.filter_tile_finish-mobile-2">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Matt (14)</span>
                                      <span class="visually-hidden">Matt (14
                                        products)</span>

                                    </label>
                                  </li>
                                </ul>
                              </div>
                            </details>
                          </accordion-row>

                          <accordion-row animate class="accordion accordion--filter accordion--no-padding">
                            <details id="Details-Mobile-6-template--26303100092798__native_collection_nPVQGD"
                              class="js-filter" data-index="mobile-6">
                              <summary>
                                <div class="accordion__title">
                                  <span>Shape</span>

                                  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                                </div>
                              </summary>

                              <div class="accordion__info"
                                id="FacetMobile-6-template--26303100092798__native_collection_nPVQGD" role="region"
                                aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD">
                                <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_shape-mobile-1"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_shape" value="Rectangle"
                                        id="Filter-filter.p.m.custom.filter_tile_shape-mobile-1">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Rectangle (15)</span>
                                      <span class="visually-hidden">Rectangle (15
                                        products)</span>

                                    </label>
                                  </li>
                                </ul>
                              </div>
                            </details>
                          </accordion-row>

                          <accordion-row animate class="accordion accordion--filter accordion--no-padding">
                            <details id="Details-Mobile-7-template--26303100092798__native_collection_nPVQGD"
                              class="js-filter" data-index="mobile-7">
                              <summary>
                                <div class="accordion__title">
                                  <span>Material</span>

                                  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>

                                </div>
                              </summary>

                              <div class="accordion__info"
                                id="FacetMobile-7-template--26303100092798__native_collection_nPVQGD" role="region"
                                aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD">
                                <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_material-mobile-1"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_material" value="Ceramic"
                                        id="Filter-filter.p.m.custom.filter_tile_material-mobile-1">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Ceramic (8)</span>
                                      <span class="visually-hidden">Ceramic (8
                                        products)</span>

                                    </label>
                                  </li>
                                  <!-- HOOK -->
                                  <li class="mobile-facets__item list-menu__item">
                                    <label for="Filter-filter.p.m.custom.filter_tile_material-mobile-2"
                                      class="facets__label mobile-facets__label  ">

                                      <input class="mobile-facets__checkbox" type="checkbox"
                                        name="filter.p.m.custom.filter_tile_material" value="Porcelain"
                                        id="Filter-filter.p.m.custom.filter_tile_material-mobile-2">

                                      <div class="custom-checkbox">
                                        <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem"
                                          viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z"
                                            stroke="#D3D3D3" stroke-width="1.2" />
                                        </svg>

                                        <svg aria-hidden="true" class="icon icon-checkmark" width="1.1rem"
                                          height="0.7rem" viewBox="0 0 11 7" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor"
                                            stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>

                                      <span class="facet-checkbox__text" aria-hidden="true">Porcelain (7)</span>
                                      <span class="visually-hidden">Porcelain (7
                                        products)</span>

                                    </label>
                                  </li>
                                </ul>
                              </div>
                            </details>
                          </accordion-row>

                        </div>

                      </form>
                    </facet-filters-form>
                  </div>
                  <div class="custom-drawer__footer">
                    <button type="button" class="button button--full-width button--with-icon button--black-2"
                      drawer-trigger="" data-target-drawer="mobile-facets-drawer">
                      <span class="button__text">View </span>
                      <span class="button__text" id="ProductCount">15 products
                      </span>
                    </button>
                  </div>
                </div>
              </custom-drawer>
            </div>

          </aside>
          <!-- Right Side Products and Sorting (Approx 75% width) -->
          <div class="product-grid-container" >
            <!-- Sorting and View Controls -->
            <div class="product-grid-header">
              <facet-filters-form class="facets facets-vertical-sort">
                <form class="facets-vertical-form" id="FacetSortForm">
                  <div class="product-count-vertical tablet-hide light" role="status">
                    <h2 class="product-count__text text-body">
                      <span id="ProductCountDesktop">15 products
                      </span>
                    </h2>

                  </div>

                  <div class="tablet-up-hide">

                    <button type="button" aria-label="Toggle Filters"
                      class="custom-drawer-button button button--primary button--with-icon button--full-width"
                      drawer-trigger="" data-target-drawer="mobile-facets-drawer">
                      <span class="button__text">FILTER BY</span>
                      <span class="button__icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M21.25 11.9999H8.895M4.534 11.9999H2.75M4.534 11.9999C4.534 11.4217 4.76368 10.8672 5.17251 10.4584C5.58134 10.0496 6.13583 9.81989 6.714 9.81989C7.29217 9.81989 7.84666 10.0496 8.25549 10.4584C8.66432 10.8672 8.894 11.4217 8.894 11.9999C8.894 12.5781 8.66432 13.1326 8.25549 13.5414C7.84666 13.9502 7.29217 14.1799 6.714 14.1799C6.13583 14.1799 5.58134 13.9502 5.17251 13.5414C4.76368 13.1326 4.534 12.5781 4.534 11.9999ZM21.25 18.6069H15.502M15.502 18.6069C15.502 19.1852 15.2718 19.7403 14.8628 20.1492C14.4539 20.5582 13.8993 20.7879 13.321 20.7879C12.7428 20.7879 12.1883 20.5572 11.7795 20.1484C11.3707 19.7396 11.141 19.1851 11.141 18.6069M15.502 18.6069C15.502 18.0286 15.2718 17.4745 14.8628 17.0655C14.4539 16.6566 13.8993 16.4269 13.321 16.4269C12.7428 16.4269 12.1883 16.6566 11.7795 17.0654C11.3707 17.4742 11.141 18.0287 11.141 18.6069M11.141 18.6069H2.75M21.25 5.39289H18.145M13.784 5.39289H2.75M13.784 5.39289C13.784 4.81472 14.0137 4.26023 14.4225 3.8514C14.8313 3.44257 15.3858 3.21289 15.964 3.21289C16.2503 3.21289 16.5338 3.26928 16.7983 3.37883C17.0627 3.48839 17.3031 3.64897 17.5055 3.8514C17.7079 4.05383 17.8685 4.29415 17.9781 4.55864C18.0876 4.82313 18.144 5.10661 18.144 5.39289C18.144 5.67917 18.0876 5.96265 17.9781 6.22714C17.8685 6.49163 17.7079 6.73195 17.5055 6.93438C17.3031 7.13681 17.0627 7.29739 16.7983 7.40695C16.5338 7.5165 16.2503 7.57289 15.964 7.57289C15.3858 7.57289 14.8313 7.34321 14.4225 6.93438C14.0137 6.52555 13.784 5.97106 13.784 5.39289Z"
                            stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                        </svg>
                      </span>
                    </button>
                  </div>

                  <div class="facet-filters sorting caption">
                    <div class="facet-filters__field">
                      <label for="SortBy" class="facet-filters__label button--with-icon">
                        <span class="button__text">SORT BY</span>
                        <span class="button__icon" style="display: flex;">
                          <svg viewBox="0 0 21 21" width='18' height='18' xmlns="http://www.w3.org/2000/svg"
                            fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                              <g fill="none" fill-rule="evenodd" stroke="#000000" stroke-linecap="round"
                                stroke-linejoin="round" transform="translate(2 4)">
                                <path d="m8.5 8.5 4 4.107 4-4.107"></path>
                                <path d="m8.5 4.5-4-4-4 3.997"></path>
                                <path d="m4.5.5v12"></path>
                                <path d="m12.5.5v12"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                      </label>
                      <div class="select"><select name="sort_by"
                          class="facet-filters__sort select__select caption-large" id="SortBy"
                          aria-describedby="a11y-refresh-page-message">
                          <option value="manual">Recommended</option>
                          <option value="best-selling" selected="selected">Best selling
                          </option>
                          <option value="title-ascending">Alphabetically, A-Z</option>
                          <option value="title-descending">Alphabetically, Z-A</option>
                          <option value="created-ascending">Date, old to new</option>
                          <option value="created-descending">Date, new to old</option>

                        </select>

                      </div>
                    </div>
                  </div>
                  <div class="facets__switch-view tablet-up-hide">
                    <button type="button" id='button-switch-grid' aria-label="switch collection grid view"
                      class="custom-drawer-button button button--primary button--with-icon button--full-width">
                      <span class="button__text">VIEW</span>
                      <div class="button__icon-group">
                        <span class="button__icon" id="icon_one_col">
                          <svg width="15" height="15" viewBox="0 0 15 15" fill="black"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="15" height="15" fill="unset" />
                          </svg>
                        </span>
                        <span class="button__icon" id="icon_two_col">
                          <svg width="15" height="15" viewBox="0 0 15 15" fill="black"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="8" width="7" height="7" fill="unset" />
                            <rect x="8" y="8" width="7" height="7" fill="unset" />
                            <rect width="7" height="7" fill="unset" />
                            <rect x="8" width="7" height="7" fill="unset" />
                          </svg>
                        </span>
                      </div>
                    </button>
                  </div>
                </form>
              </facet-filters-form>
            </div>
            <div id="ProductGridContainer">
              <div class="collection">
                <div class="loading-overlay gradient"></div>
                <ul id="product-grid" data-id="template--26303100092798__native_collection_nPVQGD" class="
                  grid product-grid grid--2-col-tablet-down
                  grid--3-col-desktop">

                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7203618062526 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7203618062526">

                      <div class="product-badges">
                        <div class="product-badge_container" style="background-color: #ffdc59;">
                          <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
                        </div>
                      </div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                              {
                                "speed": 500,
                                "direction": "horizontal",
                                "autoplay": false,
                                "initialSlide": 0,
                                "slidesPerView": 1,
                                "centeredSlides": false,
                                "preloadImages": false,
                                "lazy": { "enabled": true, "checkInView": true},
                                "pagination": {
                                  "el": ".swiper-pagination--progress-bar",
                                  "type": "progressbar"
                                },
                                "navigation": {
                                  "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                                  "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                                }
                              }
                            '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor"
                                  title="Locke Almond Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/products/Locke-Almond-Decor-02adc4.jpg?v=1652359323&amp;width=400"
                                      alt="Locke Almond Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-02.jpg?v=1652359323&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-02.jpg?v=1652359323&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-02.jpg?v=1652359323&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor"
                                  title="Locke Almond Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Locke-Almond-Decor-018d64.jpg?v=1739443502&amp;width=400"
                                      alt="Locke Almond Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-01.jpg?v=1739443502&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-01.jpg?v=1739443502&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-01.jpg?v=1739443502&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor"
                                  title="Locke Almond Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/products/Locke-Almond-Decor-038d64.jpg?v=1739443502&amp;width=400"
                                      alt="Locke Almond Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-03.jpg?v=1739443502&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-03.jpg?v=1739443502&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-03.jpg?v=1739443502&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor"
                                  title="Locke Almond Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Locke-Almond-Decor-058d64.jpg?v=1739443502&amp;width=400"
                                      alt="Locke Almond Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-05.jpg?v=1739443502&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-05.jpg?v=1739443502&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-05.jpg?v=1739443502&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor"
                            title="Locke Almond Decor Tile">
                            Locke Almond Decor Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          32 x 62.5 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£51.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7203618062526"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7297605271742 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7297605271742 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7297605271742 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7297605271742 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7297605271742 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7297605271742 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7297605271742 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7297605271742 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7297605271742">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                          {
                            "speed": 500,
                            "direction": "horizontal",
                            "autoplay": false,
                            "initialSlide": 0,
                            "slidesPerView": 1,
                            "centeredSlides": false,
                            "preloadImages": false,
                            "lazy": { "enabled": true, "checkInView": true},
                            "pagination": {
                              "el": ".swiper-pagination--progress-bar",
                              "type": "progressbar"
                            },
                            "navigation": {
                              "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                              "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                            }
                          }
                        '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor"
                                  title="Fluted Snow Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/products/Fluted-Snow-Decor-021b44.jpg?v=1664544373&amp;width=400"
                                      alt="Fluted Snow Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-02.jpg?v=1664544373&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-02.jpg?v=1664544373&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-02.jpg?v=1664544373&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor"
                                  title="Fluted Snow Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Decor-07_7bdfd5dc-db48-49f5-96f7-94c4696414d2f504.jpg?v=1721378056&amp;width=400"
                                      alt="Fluted Snow Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-07_7bdfd5dc-db48-49f5-96f7-94c4696414d2.jpg?v=1721378056&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-07_7bdfd5dc-db48-49f5-96f7-94c4696414d2.jpg?v=1721378056&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-07_7bdfd5dc-db48-49f5-96f7-94c4696414d2.jpg?v=1721378056&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor"
                                  title="Fluted Snow Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/products/Fluted-Snow-Decor-01961b.jpg?v=1721378065&amp;width=400"
                                      alt="Fluted Snow Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-01.jpg?v=1721378065&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-01.jpg?v=1721378065&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Snow-Decor-01.jpg?v=1721378065&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor"
                                  title="Fluted Snow Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Decor-08_abf5d7d6-a629-42d9-b582-cc6be329478e4807.jpg?v=1721378055&amp;width=400"
                                      alt="Fluted Snow Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-08_abf5d7d6-a629-42d9-b582-cc6be329478e.jpg?v=1721378055&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-08_abf5d7d6-a629-42d9-b582-cc6be329478e.jpg?v=1721378055&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-08_abf5d7d6-a629-42d9-b582-cc6be329478e.jpg?v=1721378055&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor"
                                  title="Fluted Snow Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Decor-09_20224961-723b-446d-9e90-73ab43247b19f504.jpg?v=1721378056&amp;width=400"
                                      alt="Fluted Snow Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-09_20224961-723b-446d-9e90-73ab43247b19.jpg?v=1721378056&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-09_20224961-723b-446d-9e90-73ab43247b19.jpg?v=1721378056&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-09_20224961-723b-446d-9e90-73ab43247b19.jpg?v=1721378056&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor"
                                  title="Fluted Snow Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Decor-05_2ec62522-d959-45e1-80fa-3ef7f0f4dbf4f504.jpg?v=1721378056&amp;width=400"
                                      alt="Fluted Snow Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-05_2ec62522-d959-45e1-80fa-3ef7f0f4dbf4.jpg?v=1721378056&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-05_2ec62522-d959-45e1-80fa-3ef7f0f4dbf4.jpg?v=1721378056&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-05_2ec62522-d959-45e1-80fa-3ef7f0f4dbf4.jpg?v=1721378056&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor"
                                  title="Fluted Snow Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 7">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Decor-06_cf70915e-5195-4c16-b83e-828118e58a7ff504.jpg?v=1721378056&amp;width=400"
                                      alt="Fluted Snow Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-06_cf70915e-5195-4c16-b83e-828118e58a7f.jpg?v=1721378056&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-06_cf70915e-5195-4c16-b83e-828118e58a7f.jpg?v=1721378056&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Decor-06_cf70915e-5195-4c16-b83e-828118e58a7f.jpg?v=1721378056&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor"
                            title="Fluted Snow Decor Wall Tile">
                            Fluted Snow Decor Wall Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          5 x 20 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£54.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7297605271742"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7464710504638 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7464710504638">

                      <div class="product-badges">
                        <div class="product-badge_container" style="background-color: #ffdc59;">
                          <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
                        </div>
                      </div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                        {
                          "speed": 500,
                          "direction": "horizontal",
                          "autoplay": false,
                          "initialSlide": 0,
                          "slidesPerView": 1,
                          "centeredSlides": false,
                          "preloadImages": false,
                          "lazy": { "enabled": true, "checkInView": true},
                          "pagination": {
                            "el": ".swiper-pagination--progress-bar",
                            "type": "progressbar"
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                            "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                          }
                        }
                      '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor"
                                  title="Pantheon Ivory Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/products/Pantheon-Ivory-Decor-02fb78.jpg?v=1681730436&amp;width=400"
                                      alt="Pantheon Ivory Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-02.jpg?v=1681730436&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-02.jpg?v=1681730436&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-02.jpg?v=1681730436&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor"
                                  title="Pantheon Ivory Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Pantheon-Ivory-Decor-013b77.jpg?v=1739443262&amp;width=400"
                                      alt="Pantheon Ivory Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-01.jpg?v=1739443262&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-01.jpg?v=1739443262&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-01.jpg?v=1739443262&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor"
                                  title="Pantheon Ivory Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/products/Pantheon-Ivory-Decor-033b77.jpg?v=1739443262&amp;width=400"
                                      alt="Pantheon Ivory Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-03.jpg?v=1739443262&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-03.jpg?v=1739443262&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-03.jpg?v=1739443262&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor"
                                  title="Pantheon Ivory Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Pantheon-Ivory-Decor-06_2f446d7d-0105-4a23-ac45-11b05d4b2b4e3b77.jpg?v=1739443262&amp;width=400"
                                      alt="Pantheon Ivory Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-06_2f446d7d-0105-4a23-ac45-11b05d4b2b4e.jpg?v=1739443262&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-06_2f446d7d-0105-4a23-ac45-11b05d4b2b4e.jpg?v=1739443262&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-06_2f446d7d-0105-4a23-ac45-11b05d4b2b4e.jpg?v=1739443262&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor"
                                  title="Pantheon Ivory Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/files/Pantheon-Ivory-Decor-07_067a309a-9935-4bb8-9d2d-c3fe5b2724ca3b77.jpg?v=1739443262&amp;width=400"
                                      alt="Pantheon Ivory Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-07_067a309a-9935-4bb8-9d2d-c3fe5b2724ca.jpg?v=1739443262&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-07_067a309a-9935-4bb8-9d2d-c3fe5b2724ca.jpg?v=1739443262&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-07_067a309a-9935-4bb8-9d2d-c3fe5b2724ca.jpg?v=1739443262&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor"
                            title="Pantheon Ivory Fluted Tile">
                            Pantheon Ivory Fluted Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          32 x 62.5 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£52.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7464710504638"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7664145465534 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7664145465534 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7664145465534 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7664145465534 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7664145465534 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7664145465534 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7664145465534 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7664145465534 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7664145465534">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                          {
                            "speed": 500,
                            "direction": "horizontal",
                            "autoplay": false,
                            "initialSlide": 0,
                            "slidesPerView": 1,
                            "centeredSlides": false,
                            "preloadImages": false,
                            "lazy": { "enabled": true, "checkInView": true},
                            "pagination": {
                              "el": ".swiper-pagination--progress-bar",
                              "type": "progressbar"
                            },
                            "navigation": {
                              "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                              "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                            }
                          }
                        '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-oak-slat-wood"
                                  title="Forest Oak Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img src="../cdn/shop/files/Forest-Oak-Slatwood0725.jpg?v=1691138178&amp;width=400"
                                      alt="Forest Oak Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slatwood.jpg?v=1691138178&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slatwood.jpg?v=1691138178&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slatwood.jpg?v=1691138178&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-oak-slat-wood"
                                  title="Forest Oak Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Forest-Oak-Slat-Wood-07b865.jpg?v=1718186035&amp;width=400"
                                      alt="Forest Oak Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-07.jpg?v=1718186035&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-07.jpg?v=1718186035&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-07.jpg?v=1718186035&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-oak-slat-wood"
                                  title="Forest Oak Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/files/Forest-Oak-Slat-Wood-03b865.jpg?v=1718186035&amp;width=400"
                                      alt="Forest Oak Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-03.jpg?v=1718186035&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-03.jpg?v=1718186035&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-03.jpg?v=1718186035&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-oak-slat-wood"
                                  title="Forest Oak Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Forest-Oak-Slat-Wood-05b865.jpg?v=1718186035&amp;width=400"
                                      alt="Forest Oak Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-05.jpg?v=1718186035&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-05.jpg?v=1718186035&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-05.jpg?v=1718186035&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-oak-slat-wood"
                                  title="Forest Oak Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/files/Forest-Oak-Slat-Wood-06b865.jpg?v=1718186035&amp;width=400"
                                      alt="Forest Oak Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-06.jpg?v=1718186035&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-06.jpg?v=1718186035&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Oak-Slat-Wood-06.jpg?v=1718186035&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/forest-oak-slat-wood"
                            title="Forest Oak Slat Wood Wall Tile">
                            Forest Oak Slat Wood Wall Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          30 x 90 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£34.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/forest-oak-slat-wood#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7664145465534"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7297605140670 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7297605140670 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7297605140670 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7297605140670 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7297605140670 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7297605140670 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7297605140670 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7297605140670 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7297605140670">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                        {
                          "speed": 500,
                          "direction": "horizontal",
                          "autoplay": false,
                          "initialSlide": 0,
                          "slidesPerView": 1,
                          "centeredSlides": false,
                          "preloadImages": false,
                          "lazy": { "enabled": true, "checkInView": true},
                          "pagination": {
                            "el": ".swiper-pagination--progress-bar",
                            "type": "progressbar"
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                            "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                          }
                        }
                      '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor"
                                  title="Fluted Pink Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/products/Flute-Pink-Decor-03fdd0.jpg?v=1664554389&amp;width=400"
                                      alt="Fluted Pink Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Flute-Pink-Decor-03.jpg?v=1664554389&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Flute-Pink-Decor-03.jpg?v=1664554389&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Flute-Pink-Decor-03.jpg?v=1664554389&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor"
                                  title="Fluted Pink Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img src="../cdn/shop/files/Flute-Pink-Decor-094de3.jpg?v=1721375621&amp;width=400"
                                      alt="Fluted Pink Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-09.jpg?v=1721375621&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-09.jpg?v=1721375621&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-09.jpg?v=1721375621&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor"
                                  title="Fluted Pink Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/products/Flute-Pink-Decor-025190.jpg?v=1721375631&amp;width=400"
                                      alt="Fluted Pink Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Flute-Pink-Decor-02.jpg?v=1721375631&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Flute-Pink-Decor-02.jpg?v=1721375631&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Flute-Pink-Decor-02.jpg?v=1721375631&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor"
                                  title="Fluted Pink Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img src="../cdn/shop/files/Flute-Pink-Decor-0838bb.jpg?v=1721375622&amp;width=400"
                                      alt="Fluted Pink Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-08.jpg?v=1721375622&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-08.jpg?v=1721375622&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-08.jpg?v=1721375622&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor"
                                  title="Fluted Pink Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img src="../cdn/shop/files/Flute-Pink-Decor-0538bb.jpg?v=1721375622&amp;width=400"
                                      alt="Fluted Pink Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-05.jpg?v=1721375622&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-05.jpg?v=1721375622&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-05.jpg?v=1721375622&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor"
                                  title="Fluted Pink Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img src="../cdn/shop/files/Flute-Pink-Decor-0638bb.jpg?v=1721375622&amp;width=400"
                                      alt="Fluted Pink Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-06.jpg?v=1721375622&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-06.jpg?v=1721375622&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-06.jpg?v=1721375622&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor"
                                  title="Fluted Pink Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 7">
                                    <img src="../cdn/shop/files/Flute-Pink-Decor-104de3.jpg?v=1721375621&amp;width=400"
                                      alt="Fluted Pink Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-10.jpg?v=1721375621&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-10.jpg?v=1721375621&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Flute-Pink-Decor-10.jpg?v=1721375621&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor"
                            title="Fluted Pink Decor Wall Tile">
                            Fluted Pink Decor Wall Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          5 x 20 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£54.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/fluted-pink-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7297605140670"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7664145596606 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7664145596606 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7664145596606 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7664145596606 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7664145596606 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7664145596606 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7664145596606 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7664145596606 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7664145596606">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                        {
                          "speed": 500,
                          "direction": "horizontal",
                          "autoplay": false,
                          "initialSlide": 0,
                          "slidesPerView": 1,
                          "centeredSlides": false,
                          "preloadImages": false,
                          "lazy": { "enabled": true, "checkInView": true},
                          "pagination": {
                            "el": ".swiper-pagination--progress-bar",
                            "type": "progressbar"
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                            "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                          }
                        }
                      '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-walnut-slat-wood"
                                  title="Forest Walnut Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/files/Forest-Walnut-Slat-107a64.jpg?v=1757431838&amp;width=400"
                                      alt="Forest Walnut Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-10.jpg?v=1757431838&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-10.jpg?v=1757431838&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-10.jpg?v=1757431838&amp;width=400 400w"
                                      width="400" height="392" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-walnut-slat-wood"
                                  title="Forest Walnut Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Forest-Walnut-Slat-097a64.jpg?v=1757431838&amp;width=400"
                                      alt="Forest Walnut Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-09.jpg?v=1757431838&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-09.jpg?v=1757431838&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-09.jpg?v=1757431838&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-walnut-slat-wood"
                                  title="Forest Walnut Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/files/Forest-Walnut-Slatwood7a64.jpg?v=1757431838&amp;width=400"
                                      alt="Forest Walnut Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slatwood.jpg?v=1757431838&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slatwood.jpg?v=1757431838&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slatwood.jpg?v=1757431838&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-walnut-slat-wood"
                                  title="Forest Walnut Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Forest-Walnut-Slat-077a64.jpg?v=1757431838&amp;width=400"
                                      alt="Forest Walnut Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-07.jpg?v=1757431838&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-07.jpg?v=1757431838&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-07.jpg?v=1757431838&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/forest-walnut-slat-wood"
                                  title="Forest Walnut Slat Wood Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/files/Forest-Walnut-Slat-087a64.jpg?v=1757431838&amp;width=400"
                                      alt="Forest Walnut Slat Wood Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-08.jpg?v=1757431838&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-08.jpg?v=1757431838&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Forest-Walnut-Slat-08.jpg?v=1757431838&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info ">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/forest-walnut-slat-wood"
                            title="Forest Walnut Slat Wood Wall Tile">
                            Forest Walnut Slat Wood Wall Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          30 x 90 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£34.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/forest-walnut-slat-wood#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7664145596606"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7577998033086 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7577998033086 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7577998033086 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7577998033086 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7577998033086 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7577998033086 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7577998033086 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7577998033086 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7577998033086">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                        {
                          "speed": 500,
                          "direction": "horizontal",
                          "autoplay": false,
                          "initialSlide": 0,
                          "slidesPerView": 1,
                          "centeredSlides": false,
                          "preloadImages": false,
                          "lazy": { "enabled": true, "checkInView": true},
                          "pagination": {
                            "el": ".swiper-pagination--progress-bar",
                            "type": "progressbar"
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                            "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                          }
                        }
                      '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-cotto-decor"
                                  title="Locke Cotto Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/products/Locke-Cotto-Decor-0711b0.jpg?v=1681763036&amp;width=400"
                                      alt="Locke Cotto Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-07.jpg?v=1681763036&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-07.jpg?v=1681763036&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-07.jpg?v=1681763036&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-cotto-decor"
                                  title="Locke Cotto Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img src="../cdn/shop/files/Locke-Cotto-Decor-05d7cb.jpg?v=1739443427&amp;width=400"
                                      alt="Locke Cotto Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Cotto-Decor-05.jpg?v=1739443427&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Cotto-Decor-05.jpg?v=1739443427&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Cotto-Decor-05.jpg?v=1739443427&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-cotto-decor"
                                  title="Locke Cotto Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/products/Locke-Cotto-Decor-06d7cb.jpg?v=1739443427&amp;width=400"
                                      alt="Locke Cotto Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-06.jpg?v=1739443427&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-06.jpg?v=1739443427&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-06.jpg?v=1739443427&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-cotto-decor"
                                  title="Locke Cotto Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img src="../cdn/shop/files/Locke-Cotto-Decor-12d7cb.jpg?v=1739443427&amp;width=400"
                                      alt="Locke Cotto Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Cotto-Decor-12.jpg?v=1739443427&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Cotto-Decor-12.jpg?v=1739443427&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Cotto-Decor-12.jpg?v=1739443427&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-cotto-decor"
                                  title="Locke Cotto Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/products/Locke-Cotto-Decor-08d7cb.jpg?v=1739443427&amp;width=400"
                                      alt="Locke Cotto Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-08.jpg?v=1739443427&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-08.jpg?v=1739443427&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Cotto-Decor-08.jpg?v=1739443427&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/locke-cotto-decor"
                            title="Locke Cotto Decor Tile">
                            Locke Cotto Decor Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          32 x 62 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£51.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/locke-cotto-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7577998033086"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7297600028862 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7297600028862">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                          {
                            "speed": 500,
                            "direction": "horizontal",
                            "autoplay": false,
                            "initialSlide": 0,
                            "slidesPerView": 1,
                            "centeredSlides": false,
                            "preloadImages": false,
                            "lazy": { "enabled": true, "checkInView": true},
                            "pagination": {
                              "el": ".swiper-pagination--progress-bar",
                              "type": "progressbar"
                            },
                            "navigation": {
                              "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                              "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                            }
                          }
                        '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"
                                  title="Fluted Emerald Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/products/Fluted-Emeraold-Decor-05ad3d.jpg?v=1664559914&amp;width=400"
                                      alt="Fluted Emerald Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-05.jpg?v=1664559914&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-05.jpg?v=1664559914&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-05.jpg?v=1664559914&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"
                                  title="Fluted Emerald Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Fluted-Emerald-Decor-09bcc2.jpg?v=1721233488&amp;width=400"
                                      alt="Fluted Emerald Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-09.jpg?v=1721233488&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-09.jpg?v=1721233488&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-09.jpg?v=1721233488&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"
                                  title="Fluted Emerald Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/products/Fluted-Emeraold-Decor-03787b.jpg?v=1721233502&amp;width=400"
                                      alt="Fluted Emerald Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-03.jpg?v=1721233502&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-03.jpg?v=1721233502&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-03.jpg?v=1721233502&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"
                                  title="Fluted Emerald Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Fluted-Emerald-Decor-10bcc2.jpg?v=1721233488&amp;width=400"
                                      alt="Fluted Emerald Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-10.jpg?v=1721233488&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-10.jpg?v=1721233488&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-10.jpg?v=1721233488&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"
                                  title="Fluted Emerald Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/files/Fluted-Emerald-Decor-06bcc2.jpg?v=1721233488&amp;width=400"
                                      alt="Fluted Emerald Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-06.jpg?v=1721233488&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-06.jpg?v=1721233488&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-06.jpg?v=1721233488&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"
                                  title="Fluted Emerald Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img
                                      src="../cdn/shop/files/Fluted-Emerald-Decor-11bcc2.jpg?v=1721233488&amp;width=400"
                                      alt="Fluted Emerald Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-11.jpg?v=1721233488&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-11.jpg?v=1721233488&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-11.jpg?v=1721233488&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"
                                  title="Fluted Emerald Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 7">
                                    <img
                                      src="../cdn/shop/files/Fluted-Emerald-Decor-08_1fd32c11-c53b-4d4a-aa2c-262d4bb044cade0d.jpg?v=1721233727&amp;width=400"
                                      alt="Fluted Emerald Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-08_1fd32c11-c53b-4d4a-aa2c-262d4bb044ca.jpg?v=1721233727&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-08_1fd32c11-c53b-4d4a-aa2c-262d4bb044ca.jpg?v=1721233727&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-08_1fd32c11-c53b-4d4a-aa2c-262d4bb044ca.jpg?v=1721233727&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info ">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"
                            title="Fluted Emerald Decor Wall Tile">
                            Fluted Emerald Decor Wall Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          5 x 20 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£54.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7297600028862"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7664145137854 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7664145137854 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7664145137854 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7664145137854 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7664145137854 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7664145137854 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7664145137854 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7664145137854 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7664145137854">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                          {
                            "speed": 500,
                            "direction": "horizontal",
                            "autoplay": false,
                            "initialSlide": 0,
                            "slidesPerView": 1,
                            "centeredSlides": false,
                            "preloadImages": false,
                            "lazy": { "enabled": true, "checkInView": true},
                            "pagination": {
                              "el": ".swiper-pagination--progress-bar",
                              "type": "progressbar"
                            },
                            "navigation": {
                              "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                              "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                            }
                          }
                        '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/oslo-oak-fluted"
                                  title="Oslo Oak Fluted Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img src="../cdn/shop/files/Oslo-Oak-Fluted-100db7.jpg?v=1689668257&amp;width=400"
                                      alt="Oslo Oak Fluted Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-10.jpg?v=1689668257&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-10.jpg?v=1689668257&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-10.jpg?v=1689668257&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/oslo-oak-fluted"
                                  title="Oslo Oak Fluted Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img src="../cdn/shop/files/Oslo-Oak-Fluted-11b850.jpg?v=1718186699&amp;width=400"
                                      alt="Oslo Oak Fluted Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-11.jpg?v=1718186699&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-11.jpg?v=1718186699&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-11.jpg?v=1718186699&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/oslo-oak-fluted"
                                  title="Oslo Oak Fluted Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img src="../cdn/shop/files/Oslo-Oak-Fluted-08b850.jpg?v=1718186699&amp;width=400"
                                      alt="Oslo Oak Fluted Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-08.jpg?v=1718186699&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-08.jpg?v=1718186699&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-08.jpg?v=1718186699&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/oslo-oak-fluted"
                                  title="Oslo Oak Fluted Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img src="../cdn/shop/files/Oslo-Oak-Fluted-12b850.jpg?v=1718186699&amp;width=400"
                                      alt="Oslo Oak Fluted Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-12.jpg?v=1718186699&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-12.jpg?v=1718186699&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-12.jpg?v=1718186699&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/oslo-oak-fluted"
                                  title="Oslo Oak Fluted Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img src="../cdn/shop/files/Oslo-Oak-Fluted-09b850.jpg?v=1718186699&amp;width=400"
                                      alt="Oslo Oak Fluted Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-09.jpg?v=1718186699&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-09.jpg?v=1718186699&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-09.jpg?v=1718186699&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/oslo-oak-fluted"
                                  title="Oslo Oak Fluted Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img src="../cdn/shop/files/Oslo-Oak-Fluted-13bd2f.jpg?v=1718186680&amp;width=400"
                                      alt="Oslo Oak Fluted Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-13.jpg?v=1718186680&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-13.jpg?v=1718186680&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Oslo-Oak-Fluted-13.jpg?v=1718186680&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/oslo-oak-fluted"
                            title="Oslo Oak Fluted Wall Tile">
                            Oslo Oak Fluted Wall Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          30 x 90 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£49.95
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/oslo-oak-fluted#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7664145137854"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7577997967550 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7577997967550 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7577997967550 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7577997967550 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7577997967550 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7577997967550 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7577997967550 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7577997967550 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7577997967550">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                          {
                            "speed": 500,
                            "direction": "horizontal",
                            "autoplay": false,
                            "initialSlide": 0,
                            "slidesPerView": 1,
                            "centeredSlides": false,
                            "preloadImages": false,
                            "lazy": { "enabled": true, "checkInView": true},
                            "pagination": {
                              "el": ".swiper-pagination--progress-bar",
                              "type": "progressbar"
                            },
                            "navigation": {
                              "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                              "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                            }
                          }
                        '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-grey-decor"
                                  title="Locke Grey Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/products/Locke-Grey-Decor-0849d0.jpg?v=1681731074&amp;width=400"
                                      alt="Locke Grey Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-08.jpg?v=1681731074&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-08.jpg?v=1681731074&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-08.jpg?v=1681731074&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-grey-decor"
                                  title="Locke Grey Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img src="../cdn/shop/files/Locke-Grey-Decor-065ab8.jpg?v=1739443526&amp;width=400"
                                      alt="Locke Grey Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Grey-Decor-06.jpg?v=1739443526&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Grey-Decor-06.jpg?v=1739443526&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Grey-Decor-06.jpg?v=1739443526&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-grey-decor"
                                  title="Locke Grey Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/products/Locke-Grey-Decor-095ab8.jpg?v=1739443526&amp;width=400"
                                      alt="Locke Grey Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-09.jpg?v=1739443526&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-09.jpg?v=1739443526&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-09.jpg?v=1739443526&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-grey-decor"
                                  title="Locke Grey Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/products/Locke-Grey-Decor-075ab8.jpg?v=1739443526&amp;width=400"
                                      alt="Locke Grey Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-07.jpg?v=1739443526&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-07.jpg?v=1739443526&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-07.jpg?v=1739443526&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-grey-decor"
                                  title="Locke Grey Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img src="../cdn/shop/files/Locke-Grey-Decor-135ab8.jpg?v=1739443526&amp;width=400"
                                      alt="Locke Grey Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Grey-Decor-13.jpg?v=1739443526&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Grey-Decor-13.jpg?v=1739443526&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Grey-Decor-13.jpg?v=1739443526&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/locke-grey-decor"
                                  title="Locke Grey Decor Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img
                                      src="../cdn/shop/products/Locke-Grey-Decor-105ab8.jpg?v=1739443526&amp;width=400"
                                      alt="Locke Grey Decor Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-10.jpg?v=1739443526&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-10.jpg?v=1739443526&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Grey-Decor-10.jpg?v=1739443526&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/locke-grey-decor"
                            title="Locke Grey Decor Tile">
                            Locke Grey Decor Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          32 x 62 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£51.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/locke-grey-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7577997967550"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7297600094398 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7297600094398 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7297600094398 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7297600094398 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7297600094398 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7297600094398 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7297600094398 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7297600094398 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7297600094398">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                          {
                            "speed": 500,
                            "direction": "horizontal",
                            "autoplay": false,
                            "initialSlide": 0,
                            "slidesPerView": 1,
                            "centeredSlides": false,
                            "preloadImages": false,
                            "lazy": { "enabled": true, "checkInView": true},
                            "pagination": {
                              "el": ".swiper-pagination--progress-bar",
                              "type": "progressbar"
                            },
                            "navigation": {
                              "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                              "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                            }
                          }
                        '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-denim-decor"
                                  title="Fluted Denim Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/products/Fluted-Denim-Decor-02773f.jpg?v=1664552944&amp;width=400"
                                      alt="Fluted Denim Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Denim-Decor-02.jpg?v=1664552944&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Denim-Decor-02.jpg?v=1664552944&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Denim-Decor-02.jpg?v=1664552944&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-denim-decor"
                                  title="Fluted Denim Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Fluted-Denim-Decor-0681a0.jpg?v=1721231984&amp;width=400"
                                      alt="Fluted Denim Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-06.jpg?v=1721231984&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-06.jpg?v=1721231984&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-06.jpg?v=1721231984&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-denim-decor"
                                  title="Fluted Denim Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/files/Fluted-Denim-Decor-07_e0c85912-96bf-432c-a98e-4939d4699dc28a90.jpg?v=1721232743&amp;width=400"
                                      alt="Fluted Denim Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-07_e0c85912-96bf-432c-a98e-4939d4699dc2.jpg?v=1721232743&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-07_e0c85912-96bf-432c-a98e-4939d4699dc2.jpg?v=1721232743&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-07_e0c85912-96bf-432c-a98e-4939d4699dc2.jpg?v=1721232743&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-denim-decor"
                                  title="Fluted Denim Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Fluted-Denim-Decor-1081a0.jpg?v=1721231984&amp;width=400"
                                      alt="Fluted Denim Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-10.jpg?v=1721231984&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-10.jpg?v=1721231984&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-10.jpg?v=1721231984&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-denim-decor"
                                  title="Fluted Denim Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/files/Fluted-Denim-Decor-08_d054d8a8-eb93-4a04-94b2-96a2023f9464a61a.jpg?v=1721232303&amp;width=400"
                                      alt="Fluted Denim Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-08_d054d8a8-eb93-4a04-94b2-96a2023f9464.jpg?v=1721232303&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-08_d054d8a8-eb93-4a04-94b2-96a2023f9464.jpg?v=1721232303&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-08_d054d8a8-eb93-4a04-94b2-96a2023f9464.jpg?v=1721232303&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-denim-decor"
                                  title="Fluted Denim Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img
                                      src="../cdn/shop/files/Fluted-Denim-Decor-11_c25b63cf-1d80-46b7-8e3a-0e57509df7c1ff86.jpg?v=1721232304&amp;width=400"
                                      alt="Fluted Denim Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-11_c25b63cf-1d80-46b7-8e3a-0e57509df7c1.jpg?v=1721232304&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-11_c25b63cf-1d80-46b7-8e3a-0e57509df7c1.jpg?v=1721232304&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Denim-Decor-11_c25b63cf-1d80-46b7-8e3a-0e57509df7c1.jpg?v=1721232304&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/fluted-denim-decor"
                            title="Fluted Denim Decor Wall Tile">
                            Fluted Denim Decor Wall Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          5 x 20 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£52.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/fluted-denim-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7297600094398"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7577997869246 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7577997869246 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7577997869246 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7577997869246 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7577997869246 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7577997869246 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7577997869246 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7577997869246 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7577997869246">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                          {
                            "speed": 500,
                            "direction": "horizontal",
                            "autoplay": false,
                            "initialSlide": 0,
                            "slidesPerView": 1,
                            "centeredSlides": false,
                            "preloadImages": false,
                            "lazy": { "enabled": true, "checkInView": true},
                            "pagination": {
                              "el": ".swiper-pagination--progress-bar",
                              "type": "progressbar"
                            },
                            "navigation": {
                              "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                              "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                            }
                          }
                        '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-silver-decor"
                                  title="Pantheon Silver Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/files/Pantheon-Silver-Decor-12bac6.jpg?v=1753183589&amp;width=400"
                                      alt="Pantheon Silver Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-12.jpg?v=1753183589&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-12.jpg?v=1753183589&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-12.jpg?v=1753183589&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-silver-decor"
                                  title="Pantheon Silver Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Pantheon-Silver-Decor-07bac6.jpg?v=1753183589&amp;width=400"
                                      alt="Pantheon Silver Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-07.jpg?v=1753183589&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-07.jpg?v=1753183589&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-07.jpg?v=1753183589&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-silver-decor"
                                  title="Pantheon Silver Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/files/Pantheon-Silver-18_1a07da5c-3075-4023-a49a-8a9630d5d1b5bac6.jpg?v=1753183589&amp;width=400"
                                      alt="Pantheon Silver Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-18_1a07da5c-3075-4023-a49a-8a9630d5d1b5.jpg?v=1753183589&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-18_1a07da5c-3075-4023-a49a-8a9630d5d1b5.jpg?v=1753183589&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-18_1a07da5c-3075-4023-a49a-8a9630d5d1b5.jpg?v=1753183589&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-silver-decor"
                                  title="Pantheon Silver Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Pantheon-Silver-Decor-11bac6.jpg?v=1753183589&amp;width=400"
                                      alt="Pantheon Silver Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-11.jpg?v=1753183589&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-11.jpg?v=1753183589&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-11.jpg?v=1753183589&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-silver-decor"
                                  title="Pantheon Silver Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/products/Pantheon-Silver-Decor-06bac6.jpg?v=1753183589&amp;width=400"
                                      alt="Pantheon Silver Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Silver-Decor-06.jpg?v=1753183589&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Silver-Decor-06.jpg?v=1753183589&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Silver-Decor-06.jpg?v=1753183589&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-silver-decor"
                                  title="Pantheon Silver Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img
                                      src="../cdn/shop/files/Pantheon-Silver-Decor-10bac6.jpg?v=1753183589&amp;width=400"
                                      alt="Pantheon Silver Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-10.jpg?v=1753183589&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-10.jpg?v=1753183589&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Silver-Decor-10.jpg?v=1753183589&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/pantheon-silver-decor"
                            title="Pantheon Silver Fluted Tile">
                            Pantheon Silver Fluted Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          32 x 62 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£52.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/pantheon-silver-decor#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7577997869246"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--7661275807934 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--7661275807934 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--7661275807934 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--7661275807934 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--7661275807934 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--7661275807934 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--7661275807934 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--7661275807934 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--7661275807934">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                        {
                          "speed": 500,
                          "direction": "horizontal",
                          "autoplay": false,
                          "initialSlide": 0,
                          "slidesPerView": 1,
                          "centeredSlides": false,
                          "preloadImages": false,
                          "lazy": { "enabled": true, "checkInView": true},
                          "pagination": {
                            "el": ".swiper-pagination--progress-bar",
                            "type": "progressbar"
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                            "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                          }
                        }
                      '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-gloss-decor-wall-tile"
                                  title="Fluted Snow Gloss Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Gloss-Decor-037054.jpg?v=1686937799&amp;width=400"
                                      alt="Fluted Snow Gloss Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-03.jpg?v=1686937799&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-03.jpg?v=1686937799&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-03.jpg?v=1686937799&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-gloss-decor-wall-tile"
                                  title="Fluted Snow Gloss Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Gloss-Decor-09_b3375d0b-2203-4151-81a2-ddf3046843a7941d.jpg?v=1721377805&amp;width=400"
                                      alt="Fluted Snow Gloss Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-09_b3375d0b-2203-4151-81a2-ddf3046843a7.jpg?v=1721377805&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-09_b3375d0b-2203-4151-81a2-ddf3046843a7.jpg?v=1721377805&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-09_b3375d0b-2203-4151-81a2-ddf3046843a7.jpg?v=1721377805&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-gloss-decor-wall-tile"
                                  title="Fluted Snow Gloss Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Gloss-Decor-08_18307079-6cce-43f2-bc32-8ee704ae8380941d.jpg?v=1721377805&amp;width=400"
                                      alt="Fluted Snow Gloss Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-08_18307079-6cce-43f2-bc32-8ee704ae8380.jpg?v=1721377805&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-08_18307079-6cce-43f2-bc32-8ee704ae8380.jpg?v=1721377805&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-08_18307079-6cce-43f2-bc32-8ee704ae8380.jpg?v=1721377805&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-gloss-decor-wall-tile"
                                  title="Fluted Snow Gloss Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Gloss-Decor-06782e.jpg?v=1721377577&amp;width=400"
                                      alt="Fluted Snow Gloss Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-06.jpg?v=1721377577&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-06.jpg?v=1721377577&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-06.jpg?v=1721377577&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-gloss-decor-wall-tile"
                                  title="Fluted Snow Gloss Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Gloss-Decor-052ec8.jpg?v=1721377576&amp;width=400"
                                      alt="Fluted Snow Gloss Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-05.jpg?v=1721377576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-05.jpg?v=1721377576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-05.jpg?v=1721377576&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-gloss-decor-wall-tile"
                                  title="Fluted Snow Gloss Decor Wall Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img
                                      src="../cdn/shop/files/Fluted-Snow-Gloss-Decor-07782e.jpg?v=1721377577&amp;width=400"
                                      alt="Fluted Snow Gloss Decor Wall Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-07.jpg?v=1721377577&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-07.jpg?v=1721377577&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Snow-Gloss-Decor-07.jpg?v=1721377577&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-gloss-decor-wall-tile"
                            title="Fluted Snow Gloss Decor Wall Tile">
                            Fluted Snow Gloss Decor Wall Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          5 x 20 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£47.05
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/fluted-snow-gloss-decor-wall-tile#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="7661275807934"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--15337699410302 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--15337699410302 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--15337699410302 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--15337699410302 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--15337699410302 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--15337699410302 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--15337699410302 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--15337699410302 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--15337699410302">

                      <div class="product-badges"></div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                        {
                          "speed": 500,
                          "direction": "horizontal",
                          "autoplay": false,
                          "initialSlide": 0,
                          "slidesPerView": 1,
                          "centeredSlides": false,
                          "preloadImages": false,
                          "lazy": { "enabled": true, "checkInView": true},
                          "pagination": {
                            "el": ".swiper-pagination--progress-bar",
                            "type": "progressbar"
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                            "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                          }
                        }
                      '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile"
                                  title="Echo Beige Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img src="../cdn/shop/files/Echo-Beige-1075e5.jpg?v=1747142229&amp;width=400"
                                      alt="Echo Beige Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-10.jpg?v=1747142229&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-10.jpg?v=1747142229&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-10.jpg?v=1747142229&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile"
                                  title="Echo Beige Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img src="../cdn/shop/files/Echo-Beige-0975e5.jpg?v=1747142229&amp;width=400"
                                      alt="Echo Beige Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-09.jpg?v=1747142229&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-09.jpg?v=1747142229&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-09.jpg?v=1747142229&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile"
                                  title="Echo Beige Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img
                                      src="../cdn/shop/files/Echo-Beige-07_98d28565-5714-4906-9d73-9f3d37b3306275e5.jpg?v=1747142229&amp;width=400"
                                      alt="Echo Beige Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-07_98d28565-5714-4906-9d73-9f3d37b33062.jpg?v=1747142229&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-07_98d28565-5714-4906-9d73-9f3d37b33062.jpg?v=1747142229&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-07_98d28565-5714-4906-9d73-9f3d37b33062.jpg?v=1747142229&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile"
                                  title="Echo Beige Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img src="../cdn/shop/files/Echo-Beige-1175e5.jpg?v=1747142229&amp;width=400"
                                      alt="Echo Beige Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-11.jpg?v=1747142229&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-11.jpg?v=1747142229&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-11.jpg?v=1747142229&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile"
                                  title="Echo Beige Tile" data-preloadlink="true">
                                  <div class="image-snippet 5">
                                    <img
                                      src="../cdn/shop/files/Echo-Beige-04_020261db-4e36-4709-b084-b1ff59163bf275e5.jpg?v=1747142229&amp;width=400"
                                      alt="Echo Beige Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-04_020261db-4e36-4709-b084-b1ff59163bf2.jpg?v=1747142229&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-04_020261db-4e36-4709-b084-b1ff59163bf2.jpg?v=1747142229&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-04_020261db-4e36-4709-b084-b1ff59163bf2.jpg?v=1747142229&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile"
                                  title="Echo Beige Tile" data-preloadlink="true">
                                  <div class="image-snippet 6">
                                    <img
                                      src="../cdn/shop/files/Echo-Beige-06_86fd304a-c145-45d0-adef-629e5908f2715abc.jpg?v=1747139447&amp;width=400"
                                      alt="Echo Beige Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-06_86fd304a-c145-45d0-adef-629e5908f271.jpg?v=1747139447&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-06_86fd304a-c145-45d0-adef-629e5908f271.jpg?v=1747139447&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-06_86fd304a-c145-45d0-adef-629e5908f271.jpg?v=1747139447&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile"
                                  title="Echo Beige Tile" data-preloadlink="true">
                                  <div class="image-snippet 7">
                                    <img src="../cdn/shop/files/Echo-Beige-085abc.jpg?v=1747139447&amp;width=400"
                                      alt="Echo Beige Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-08.jpg?v=1747139447&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-08.jpg?v=1747139447&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Echo-Beige-08.jpg?v=1747139447&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile"
                            title="Echo Beige Tile">
                            Echo Beige Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          11.5 x 21.3 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£60.00
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/echo-beige-tile#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="15337699410302"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                  <li class="grid__item">

                    <style data-shopify>
                      .cl-product-card .swiper-pagination--progress-bar {
                        border-radius: 0;
                        margin-top: 0;
                      }

                      .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill {
                        border-radius: 0;
                      }

                      .cl-product-card .btn--atc {
                        text-transform: unset;
                      }

                      .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation {
                        display: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        justify-content: space-between;
                        align-items: center;
                        pointer-events: none;
                        z-index: 50;
                        top: 0;
                      }

                      .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .new-swiper-button {
                        display: flex;
                        padding: 9px 6px 9px 8px;
                        background-color: rgba(245, 242, 237, 0.85);
                        pointer-events: auto;
                        cursor: pointer;
                      }

                      .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .new-swiper-button {
                        transition: all 0.2s ease-in-out;
                      }

                      .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(100%);
                      }

                      .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD {
                        transform: translateX(-100%);
                      }


                      .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .new-swiper-button path {
                        stroke: rgb(var(--color-black));
                      }

                      @media screen and (min-width: 800px) {
                        .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation {
                          display: flex;
                        }

                        .cl-product-card--rich.cl-product-card--15627728945534 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                          transform: translateX(0);
                        }
                      }

                      @media screen and (max-width: 800px) {
                        .cl-product-card-info .card-price.mobile-size--14 {
                          font-size: 14px;
                        }
                      }
                    </style>
                    <div class="cl-product-card cl-product-card--rich cl-product-card--15627728945534">

                      <div class="product-badges">
                        <div class="product-badge_container" style="background-color: #40c351;">
                          <span class="product-badge__label" style="color: #ffffff;">New
                            in</span>
                        </div>
                      </div>

                      <div class="cl-product-card__badge">

                      </div>

                      <swiper-slider data-options='
                        {
                          "speed": 500,
                          "direction": "horizontal",
                          "autoplay": false,
                          "initialSlide": 0,
                          "slidesPerView": 1,
                          "centeredSlides": false,
                          "preloadImages": false,
                          "lazy": { "enabled": true, "checkInView": true},
                          "pagination": {
                            "el": ".swiper-pagination--progress-bar",
                            "type": "progressbar"
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
                            "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                          }
                        }
                      '>
                        <div class="swiper js-guard-snap">
                          <ul class="swiper-wrapper">

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile"
                                  title="Como Beige Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 1">
                                    <img src="../cdn/shop/files/Como-Beige-Fluted-04ebdc.jpg?v=1761059825&amp;width=400"
                                      alt="Como Beige Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-04.jpg?v=1761059825&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-04.jpg?v=1761059825&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-04.jpg?v=1761059825&amp;width=400 400w"
                                      width="400" height="400" loading="eager" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile"
                                  title="Como Beige Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 2">
                                    <img src="../cdn/shop/files/Como-Beige-Fluted-01ebdc.jpg?v=1761059825&amp;width=400"
                                      alt="Como Beige Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-01.jpg?v=1761059825&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-01.jpg?v=1761059825&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-01.jpg?v=1761059825&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile"
                                  title="Como Beige Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 3">
                                    <img src="../cdn/shop/files/Como-Beige-Fluted-02ebdc.jpg?v=1761059825&amp;width=400"
                                      alt="Como Beige Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-02.jpg?v=1761059825&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-02.jpg?v=1761059825&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-02.jpg?v=1761059825&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                            <li class="swiper-slide">
                              <div class="cl-product-card-image">
                                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile"
                                  title="Como Beige Fluted Tile" data-preloadlink="true">
                                  <div class="image-snippet 4">
                                    <img src="../cdn/shop/files/Como-Beige-Fluted-03ebdc.jpg?v=1761059825&amp;width=400"
                                      alt="Como Beige Fluted Tile"
                                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-03.jpg?v=1761059825&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-03.jpg?v=1761059825&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-03.jpg?v=1761059825&amp;width=400 400w"
                                      width="400" height="400" loading="lazy" sizes="30vw"
                                      class="image-snippet__img image-snippet__img--fill">
                                  </div>
                                </a>
                              </div>
                            </li>

                          </ul>
                          <div class="product-card__slider-navigation">
                            <button
                              class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
                              prev>

                              <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                            <button
                              class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD"
                              next>

                              <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                              </svg>

                            </button>
                          </div>
                          <div class="swiper-pagination--progress-bar"></div>
                        </div>
                      </swiper-slider>

                      <div class="cl-product-card-info">

                        <h3 class="cl-product-card-name bold" data-aid="product-card">
                          <a class="hover-underline"
                            href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile"
                            title="Como Beige Fluted Tile">
                            Como Beige Fluted Tile
                          </a>
                        </h3>

                        <div class="cl-product-card-size ">
                          31.6 x 60.8 cm
                        </div>

                        <div class="card-price mobile-size--14 metafield-price-per-size"><span
                            data-price-per-meter-squared class="card-price__regular">£33.60
                            /
                            m²</span></div>

                        <a class="cl-product-card-yotpo-rating"
                          href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile#yotpoReviewsWidget">
                          <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                            data-yotpo-instance-id="643481" data-yotpo-product-id="15627728945534"
                            data-yotpo-cart-product-id="" data-yotpo-section-id="collection">
                          </div>
                        </a>

                      </div>
                    </div>

                    <script>
                      document.addEventListener('touch', (e) => {
                        const btn = e.target.closest('[product_card_atc]');
                        if (!btn) return;
                        e.stopPropagation();
                        e.preventDefault();
                      });
                    </script>
                  </li>
                </ul>
              </div>
            </div>
          </div>


    </div>
    <div id="shopify-section-template--26303100092798__1694466118e809c2bc" class="shopify-section">

    </div>
    <div id="shopify-section-template--26303100092798__shogun-below" class="shopify-section">

    </div>
    <div id="shopify-section-template--26303100092798__shogun-optimizer" class="shopify-section">

    </div>
</main>

@endsection
@push('js')

@endpush