@extends('website.layouts.master')

@section('title', 'Shop - Porcelaina')

@section('meta')
    <meta name="description" content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
    <meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
    <meta property="og:title" content="Contact Us - North Bengal">
    <meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
    <meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
    <meta property="og:type" content="website">
@endsection
@section('content')
 <style>

        /* START OF CUSTOM FONTS */
      @font-face {
        font-family: 'Averta'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/Averta-Regular.otf?v=132307005384782132101760535067) format('opentype'); /* Replace with the path to your TTF font file */
        font-weight: 400; /* Font weight (e.g., normal, bold) */
        font-style: normal; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }

      @font-face {
        font-family: 'Averta'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/Averta-Semibold.ttf?v=86714098920346636591760535067) format('truetype'); /* Replace with the path to your TTF font file */
        font-weight: 600; /* Font weight (e.g., normal, bold) */
        font-style: normal; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }

      @font-face {
        font-family: 'Averta'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/Averta-Bold.ttf?v=100079186755115163071760535067) format('truetype'); /* Replace with the path to your TTF font file */
        font-weight: 700; /* Font weight (e.g., normal, bold) */
        font-style: normal; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }


      @font-face {
        font-family: 'Tiempos'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/files/TestTiemposHeadline-Regular.otf?v=12233819918518029248) format('opentype'); /* Replace with the path to your TTF font file */
        font-weight: 400; /* Font weight (e.g., normal, bold) */
        font-style: normal; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }

      @font-face {
        font-family: 'Tiempos'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/TestTiemposHeadline-RegularItalic.otf?v=64180024250323040751760535067) format('opentype'); /* Replace with the path to your TTF font file */
        font-weight: 400; /* Font weight (e.g., normal, bold) */
        font-style: italic; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }

      @font-face {
        font-family: 'Tiempos'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/files/TestTiemposHeadline-Medium.otf?v=302210958632624768) format('opentype'); /* Replace with the path to your TTF font file */
        font-weight: 500; /* Font weight (e.g., normal, bold) */ 
        font-style: normal; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }

      @font-face {
        font-family: 'TiemposBody'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/files/TestTiemposText-Regular.otf?v=10964991604929808213) format('opentype'); /* Replace with the path to your TTF font file */
        font-weight: 400; /* Font weight (e.g., normal, bold) */
        font-style: normal; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }

        @font-face {
        font-family: 'TiemposBody'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/files/TestTiemposText-Medium.otf?v=2366348726971260784) format('opentype'); /* Replace with the path to your TTF font file */
        font-weight: 500; /* Font weight (e.g., normal, bold) */
        font-style: normal; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }

      @font-face {
        font-family: 'AvertaDemoPE'; /* Replace with your chosen font family name */
        src: url(http://www.porcelainsuperstore.co.uk/cdn/shop/t/399/assets/AvertaDemoPE-Regular.otf?v=109376810998580442821760535067) format('opentype'); /* Replace with the path to your TTF font file */
        font-weight: 400; /* Font weight (e.g., normal, bold) */
        font-style: normal; /* Font style (e.g., normal, italic) */
        font-stretch: normal; /* Font stretch (e.g., normal, condensed) */
        font-display: swap;
      }



      
  .shopify-section {
    opacity: 1 !important;
  }
  @media(max-width: 767px){
    section.content-background-image-snippet .image-container img.img-mob {
      height: 483.6px;
    }
    .icon-text-section .icon-text-inner .icon-text-item img {
      width: 32px;
      height: 32px;
    }
  }

  .template-search .grid-list,
  .template-collection .grid-list{
    grid-gap: 12px !important;
    display: grid !important;
    grid-auto-flow: row dense;

  }

  @media (max-width:767px){
    .template-search .grid-list,
    .template-collection .grid-list{
      grid-gap: 12px !important;
    }
  }
  

  img.opt_lazy {
    height: auto !important;
  }

  @media (min-width:1300px){
    .product-details-form-wrapper-inner-wrapper {
      min-height: 350px !important;
    }
    div#shopify-section-template--15616983531710__1612956442369ba9bf .image-container {
      min-height: 846px !important;
    }
  }
  
  @media(min-width:767px){
      
    .area-selector-wrapper input {
    font-size: 14px;
    margin-bottom: 0;
    width: 110%;
}
  
    
  }
  
  
 

</style>

    <style>
  .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-editor .ql-font-tahoma {
    font-family: Tahoma !important;
  }
  


  
  @media(min-width: 767px){
    .cl-product-card-container.grid-list.collection {
      grid-gap: 48px 32px !important;
      grid-template-columns: repeat(4,1fr);
    }
    .yotpo.bottomLine {
      min-height: unset !important;
    }
  }
  



  @media (max-width: 767px){
    .icon-text-section .icon-text-inner .icon-text-item img {
      width: unset;
      height: unset;
    }

    


    .product-details-upper ol.flickity-page-dots {
      bottom: 22px;
      left: 16px;
    }
    .product-details-upper ol.flickity-page-dots .dot {
      width: 8px;
      height: 8px;
      margin: 0 8px 0px 0px;
      background: #e5e5e5;
      opacity: 1;
    }
    .product-details-upper ol.flickity-page-dots .dot.is-selected{
      background: #212a2f;
    }
    .product-details-upper div#featureds img.slide {
      max-height: 390px !important;
      height: 390px !important;
      min-height: 390px !important;
    }

  }

  @media screen and (max-width: 767px){
    .product-actions-snippet {
      cursor: pointer;

      display: flex;
      position: absolute;
      right: 0;
      top: -33px;
    }

    #shopify-section-product .product-details-form-wrapper {
      margin-top: -16px;
    }
    section.content-background-image-snippet .image-container img.img-mob{
      object-fit: cover !important;
    }
  }

  @media screen and (min-width: 1024px){

    .cl-product-card-container.grid-list .grid-item .cl-product-card a .cl-product-card-image {
      max-height: 335.5px;
      max-width: 335.5px;
    }

  }
  @media(min-width: 767px){
    .product-related-products-snippet .cl-product-card-container.grid-list{
      grid-gap: 32px !important;
    }

  }

</style>
<style data-shopify>#shopify-section-new-promo-bar {
    background: #fbf7f3;
}

#shopify-section-new-promo-bar .icon-with-text {
    color: #212a2f;
}

#shopify-section-new-promo-bar .swiper {
    width: 100%;
}
.promo-bar-slider {
	padding-block: 13px;
}

#shopify-section-new-promo-bar .swiper-wrapper-with-nav{
	--size: 40px;
}

#shopify-section-new-promo-bar .swiper-wrapper-with-nav > .custom-swiper-button {
    --size: 40px;
	width: var(--size);
	height: var(--size);
	min-width: var(--size);
}

.swiper-wrapper-with-nav swiper-slider {
	max-width: calc(100% - var(--size) * 2);
}


#shopify-section-new-promo-bar .swiper-wrapper-with-nav > .custom-swiper-button svg {
    width: 14px;
    height: 14px;
}

@media screen and (min-width: 990px) {
    #shopify-section-new-promo-bar .custom-swiper-button {
        display: none;
    }
}

@media screen and (min-width: 1150px) {
    .promo-bar-slider__slide + .promo-bar-slider__slide {
        border-left: 1px solid rgba(33, 42, 47, .1);
    }
}</style>



    <main role="main" id="MainContent">
      
      <div id="shopify-section-template--26303100092798__native_collection_nPVQGD" class="shopify-section section">
<style data-shopify>.section-template--26303100092798__native_collection_nPVQGD-padding {
    padding-top: 0px;
    padding-bottom: 27px;

  }

  .button__icon-group{
    display: flex;
    gap: 6px;
    margin-left: 10px;
  }

  .button__icon.disabled svg{
    fill: #d1d1d1;  
  }

  @media screen and (min-width: 750px) {
    .section-template--26303100092798__native_collection_nPVQGD-padding {
      padding-top: 0px;
      padding-bottom: 36px;
    }
  }

  @media screen and (max-width: 800px){
    
  }

  @media screen and (min-width: 800px) {
      #shopify-section-template--26303100092798__native_collection_nPVQGD swiper-slider {
      max-width: 100%;
      width: 100%;
      margin-inline: auto;
    }
  }</style><script>
document.addEventListener('DOMContentLoaded', () => {
  const button  = document.getElementById('button-switch-grid');
  const grid    = document.getElementById('product-grid');
  const oneCol  = document.getElementById('icon_one_col');
  const twoCol  = document.getElementById('icon_two_col');

  const STORAGE_KEY = 'productGridLayout';
  const LAYOUTS = {
    one: {
      add:    ['grid--1-col-tablet-down', 'grid--2-col-desktop'],
      remove: ['grid--2-col-tablet-down', 'grid--3-col-desktop'],
      icons:  { oneDisabled: false, twoDisabled: true },
      pressed: true,
    },
    two: {
      add:    ['grid--2-col-tablet-down', 'grid--3-col-desktop'],
      remove: ['grid--1-col-tablet-down', 'grid--2-col-desktop'],
      icons:  { oneDisabled: true, twoDisabled: false },
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
  const initialMode = saved
    ? saved
    : grid.classList.contains('grid--2-col-tablet-down') ? 'two' : 'one';

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


<div class="gapless-slider-section collection-header-wrapper"
  style="
  background: #ffffff;
  color: #0d1f22"
  
  >
  <div class="container">
    
 
<section class="breadcrumbs-snippet" role="navigation" aria-label="breadcrumbs">
  <div class="">
    
      
    <a href="https://www.porcelainsuperstore.co.uk/" title="home">home</a>
    
    
      
      <span aria-hidden="true" class="breadcrumbs-arrow"></span>
      
        <span>Green Tiles</span>
      
    
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


  @media screen and (min-width: 768px){
    .read-more-container .swiper-wrapper{
      max-width: 788px;
      min-width: 768px;
    }
  }
</style>






<header class="header-collections-snippet collection-header" role="banner">

    <div class="text-container truncated-container read-more-container text-center" data-total-chars="330" data-chars="255" data-line-height="1.5">
      <h1 class="h3 title" style="">Green Tiles</h1>
        
            <div class="read-more-content">
                <p>Explore our collection of green tiles, featuring a range of sizes and styles to suit every budget. From trendy herringbone patterns to vibrant, nature-inspired designs, these tiles bring a fresh and unique touch to any space. Not sure on your shade? Don't worry, you can order up to four free samples to try before you buy!</p>
            </div> 
            <div class="read-more__button-container">
              <button class="read-more-toggle site-link site-link--underline">Read more</button>    
            </div>
            
        

        

        
      </div>

    
</header>
</section>
  </div>
</div>

<div class="section-template--26303100092798__native_collection_nPVQGD-padding gradient color-"><div class=" facets-vertical container">
      <script src="../cdn/shop/t/399/assets/facets1b8c.js?v=100372155717150459141760535067" defer="defer"></script><aside
          aria-labelledby="verticalTitle"
          class="facets-wrapper"
          id="main-collection-filters"
          data-id="template--26303100092798__native_collection_nPVQGD"
        >
        <div class="mobile-facets-navbar tablet-up-hide">
        </div>
                
          
<div class="facets-container"><facet-filters-form class="facets tablet-hide">
      <form
        id="FacetFiltersForm"
        class="facets__form-vertical"
      >
          
          <div
            id="FacetsWrapperDesktop"
            
          >
<div class="active-facets active-facets-desktop">
                <div class="active-facets-vertical-filter"><h2
                      class="facets__heading facets__heading--vertical caption-large text-body"
                      id="verticalTitle"
                      tabindex="-1"
                    >
                      Filter By
                    </h2><facet-remove class="active-facets__button-wrapper">
                    <a href="green-tiles.html" class="active-facets__button-remove underline">
                      <span>Clear All</span>
                    </a>
                  </facet-remove>
                </div>






</div>


              
                  <details
                    id="Details-filter.p.m.custom.filter_colour-template--26303100092798__native_collection_nPVQGD"
                    class=" facets__disclosure-vertical js-filter"
                    data-index="1"
                    
                      open
                    
                  >
                    <summary
                      class="facets__summary caption-large focus-offset"
                      aria-label="Colour (0 selected)"
                    >
                      <div>
                        <span class="facets__summary-label">Colour
<span class="facets__selected hide">
                              (0)</span
                            ></span>
                        
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                      </div>
                    </summary>
                    <div
                      id="Facet-1-template--26303100092798__native_collection_nPVQGD"
                      class="parent-display facets__display-vertical"
                    ><fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                        <legend class="visually-hidden">Colour</legend><ul
                          class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical facets__list--swatches  list-unstyled"
                          role="list"
                        >
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-1"
  name="filter.p.m.custom.filter_colour"
  value="Black"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-1"
  title="Black"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_black_small843c.jpg?v=8956519011751195913);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Black</span> (1)
                              </span>
                              <span class="visually-hidden">Black (1 product)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-2"
  name="filter.p.m.custom.filter_colour"
  value="Blue"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-2"
  title="Blue"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_blue_small6836.jpg?v=15256520960457269895);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Blue</span> (2)
                              </span>
                              <span class="visually-hidden">Blue (2 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-3"
  name="filter.p.m.custom.filter_colour"
  value="Green"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-3"
  title="Green"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_green_small867e.jpg?v=3497274801390206174);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Green</span> (76)
                              </span>
                              <span class="visually-hidden">Green (76 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-4"
  name="filter.p.m.custom.filter_colour"
  value="White"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-4"
  title="White"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_white_small259a.jpg?v=1913405391209899642);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">White</span> (5)
                              </span>
                              <span class="visually-hidden">White (5 products)
                              </span>
</label>

                                  </div>
                                </div></li></ul>
                      </fieldset>
                    </div>
                  </details>
                


              
                  <details
                    id="Details-filter.p.m.custom.filter_tile_type-template--26303100092798__native_collection_nPVQGD"
                    class=" facets__disclosure-vertical js-filter"
                    data-index="2"
                    
                  >
                    <summary
                      class="facets__summary caption-large focus-offset"
                      aria-label="Wall or Floor (0 selected)"
                    >
                      <div>
                        <span class="facets__summary-label">Wall or Floor
<span class="facets__selected hide">
                              (0)</span
                            ></span>
                        
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                      </div>
                    </summary>
                    <div
                      id="Facet-2-template--26303100092798__native_collection_nPVQGD"
                      class="parent-display facets__display-vertical"
                    ><fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                        <legend class="visually-hidden">Wall or Floor</legend><ul
                          class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                          role="list"
                        >
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_type-1" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_type"
                                    value="Floor"
                                    id="Filter-filter.p.m.custom.filter_tile_type-1"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Floor</span> (34)
                              </span>
                              <span class="visually-hidden">Floor (34 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_type-2" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_type"
                                    value="Wall"
                                    id="Filter-filter.p.m.custom.filter_tile_type-2"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Wall</span> (83)
                              </span>
                              <span class="visually-hidden">Wall (83 products)
                              </span>
                                </label></li></ul>
                      </fieldset>
                    </div>
                  </details>
                


              
                  <details
                    id="Details-filter.v.m.product.filter_size-template--26303100092798__native_collection_nPVQGD"
                    class=" facets__disclosure-vertical js-filter"
                    data-index="3"
                    
                  >
                    <summary
                      class="facets__summary caption-large focus-offset"
                      aria-label="Tile Size (0 selected)"
                    >
                      <div>
                        <span class="facets__summary-label">Tile Size
<span class="facets__selected hide">
                              (0)</span
                            ></span>
                        
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                      </div>
                    </summary>
                    <div
                      id="Facet-3-template--26303100092798__native_collection_nPVQGD"
                      class="parent-display facets__display-vertical"
                    ><fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                        <legend class="visually-hidden">Tile Size</legend><ul
                          class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                          role="list"
                        >
<li class="list-menu__item facets__item"><label for="Filter-filter.v.m.product.filter_size-1" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.v.m.product.filter_size"
                                    value="Small"
                                    id="Filter-filter.v.m.product.filter_size-1"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Small</span> (65)
                              </span>
                              <span class="visually-hidden">Small (65 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.v.m.product.filter_size-2" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.v.m.product.filter_size"
                                    value="Medium"
                                    id="Filter-filter.v.m.product.filter_size-2"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Medium</span> (8)
                              </span>
                              <span class="visually-hidden">Medium (8 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.v.m.product.filter_size-3" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.v.m.product.filter_size"
                                    value="Large"
                                    id="Filter-filter.v.m.product.filter_size-3"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Large</span> (3)
                              </span>
                              <span class="visually-hidden">Large (3 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.v.m.product.filter_size-4" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.v.m.product.filter_size"
                                    value="Extra Large"
                                    id="Filter-filter.v.m.product.filter_size-4"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Extra Large</span> (7)
                              </span>
                              <span class="visually-hidden">Extra Large (7 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.v.m.product.filter_size-5" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.v.m.product.filter_size"
                                    value="Mosaic"
                                    id="Filter-filter.v.m.product.filter_size-5"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Mosaic</span> (3)
                              </span>
                              <span class="visually-hidden">Mosaic (3 products)
                              </span>
                                </label></li></ul>
                      </fieldset>
                    </div>
                  </details>
                


              
                  <details
                    id="Details-filter.p.m.custom.filter_tile_style-template--26303100092798__native_collection_nPVQGD"
                    class=" facets__disclosure-vertical js-filter"
                    data-index="4"
                    
                  >
                    <summary
                      class="facets__summary caption-large focus-offset"
                      aria-label="Style (0 selected)"
                    >
                      <div>
                        <span class="facets__summary-label">Style
<span class="facets__selected hide">
                              (0)</span
                            ></span>
                        
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                      </div>
                    </summary>
                    <div
                      id="Facet-4-template--26303100092798__native_collection_nPVQGD"
                      class="parent-display facets__display-vertical"
                    ><fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                        <legend class="visually-hidden">Style</legend><ul
                          class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                          role="list"
                        >
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-1" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Classic"
                                    id="Filter-filter.p.m.custom.filter_tile_style-1"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Classic</span> (7)
                              </span>
                              <span class="visually-hidden">Classic (7 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-2" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Luxury"
                                    id="Filter-filter.p.m.custom.filter_tile_style-2"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Luxury</span> (7)
                              </span>
                              <span class="visually-hidden">Luxury (7 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-3" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Modern"
                                    id="Filter-filter.p.m.custom.filter_tile_style-3"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Modern</span> (25)
                              </span>
                              <span class="visually-hidden">Modern (25 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-4" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Patterned"
                                    id="Filter-filter.p.m.custom.filter_tile_style-4"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Patterned</span> (12)
                              </span>
                              <span class="visually-hidden">Patterned (12 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-5" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Victorian"
                                    id="Filter-filter.p.m.custom.filter_tile_style-5"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Victorian</span> (1)
                              </span>
                              <span class="visually-hidden">Victorian (1 product)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-6" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Vintage"
                                    id="Filter-filter.p.m.custom.filter_tile_style-6"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Vintage</span> (33)
                              </span>
                              <span class="visually-hidden">Vintage (33 products)
                              </span>
                                </label></li></ul>
                      </fieldset>
                    </div>
                  </details>
                


              
                  <details
                    id="Details-filter.p.m.custom.filter_tile_finish-template--26303100092798__native_collection_nPVQGD"
                    class=" facets__disclosure-vertical js-filter"
                    data-index="5"
                    
                  >
                    <summary
                      class="facets__summary caption-large focus-offset"
                      aria-label="Finish (0 selected)"
                    >
                      <div>
                        <span class="facets__summary-label">Finish
<span class="facets__selected hide">
                              (0)</span
                            ></span>
                        
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                      </div>
                    </summary>
                    <div
                      id="Facet-5-template--26303100092798__native_collection_nPVQGD"
                      class="parent-display facets__display-vertical"
                    ><fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                        <legend class="visually-hidden">Finish</legend><ul
                          class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                          role="list"
                        >
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_finish-1" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_finish"
                                    value="Gloss"
                                    id="Filter-filter.p.m.custom.filter_tile_finish-1"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Gloss</span> (49)
                              </span>
                              <span class="visually-hidden">Gloss (49 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_finish-2" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_finish"
                                    value="Matt"
                                    id="Filter-filter.p.m.custom.filter_tile_finish-2"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Matt</span> (36)
                              </span>
                              <span class="visually-hidden">Matt (36 products)
                              </span>
                                </label></li></ul>
                      </fieldset>
                    </div>
                  </details>
                


              
                  <details
                    id="Details-filter.p.m.custom.filter_tile_shape-template--26303100092798__native_collection_nPVQGD"
                    class=" facets__disclosure-vertical js-filter"
                    data-index="6"
                    
                  >
                    <summary
                      class="facets__summary caption-large focus-offset"
                      aria-label="Shape (0 selected)"
                    >
                      <div>
                        <span class="facets__summary-label">Shape
<span class="facets__selected hide">
                              (0)</span
                            ></span>
                        
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                      </div>
                    </summary>
                    <div
                      id="Facet-6-template--26303100092798__native_collection_nPVQGD"
                      class="parent-display facets__display-vertical"
                    ><fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                        <legend class="visually-hidden">Shape</legend><ul
                          class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                          role="list"
                        >
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-1" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Hexagon"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-1"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Hexagon</span> (2)
                              </span>
                              <span class="visually-hidden">Hexagon (2 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-2" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Rectangle"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-2"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Rectangle</span> (59)
                              </span>
                              <span class="visually-hidden">Rectangle (59 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-3" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Square"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-3"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Square</span> (23)
                              </span>
                              <span class="visually-hidden">Square (23 products)
                              </span>
                                </label></li></ul>
                      </fieldset>
                    </div>
                  </details>
                


              
                  <details
                    id="Details-filter.p.m.custom.filter_tile_material-template--26303100092798__native_collection_nPVQGD"
                    class=" facets__disclosure-vertical js-filter"
                    data-index="7"
                    
                  >
                    <summary
                      class="facets__summary caption-large focus-offset"
                      aria-label="Material (0 selected)"
                    >
                      <div>
                        <span class="facets__summary-label">Material
<span class="facets__selected hide">
                              (0)</span
                            ></span>
                        
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                      </div>
                    </summary>
                    <div
                      id="Facet-7-template--26303100092798__native_collection_nPVQGD"
                      class="parent-display facets__display-vertical"
                    ><fieldset class="facets-wrap parent-wrap  facets-wrap-vertical">
                        <legend class="visually-hidden">Material</legend><ul
                          class="facets-layout facets-layout-list facets-layout-list--text facets__list--vertical  list-unstyled"
                          role="list"
                        >
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_material-1" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_material"
                                    value="Ceramic"
                                    id="Filter-filter.p.m.custom.filter_tile_material-1"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Ceramic</span> (47)
                              </span>
                              <span class="visually-hidden">Ceramic (47 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_material-2" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_material"
                                    value="Porcelain"
                                    id="Filter-filter.p.m.custom.filter_tile_material-2"
                                    
                                    
                                  ><svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1"
                                          stroke="currentColor"
                                          stroke-width="1.75"
                                          stroke-linecap="round"
                                          stroke-linejoin="round" />
                                      </svg><span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Porcelain</span> (38)
                              </span>
                              <span class="visually-hidden">Porcelain (38 products)
                              </span>
                                </label></li></ul>
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
          <button type="button" aria-label="Close Filters" class="custom-drawer-button" drawer-trigger="" data-target-drawer="mobile-facets-drawer">
            <span class="button__icon">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
  
            </span>
          </button>
      </div>
      <div class="custom-drawer__main custom-drawer__main--no-padding">

    
      <facet-filters-form>
        <form id="FacetFiltersFormMobile" class="mobile-facets">
            <div class="mobile-facets__main has-submenu gradient"><div class="mobile-facets__active-facets active-facets active-facets-mobile medium-hide large-up-hide">
                    
                      <p class="text-center text-body" style="opacity:.4">There are no applied filters.</p>
                    
                    
                </div>

                  
                      <accordion-row
                      animate
                      class="accordion accordion--filter accordion--no-padding"
                    >
                      <details
                        id="Details-Mobile-1-template--26303100092798__native_collection_nPVQGD"
                        class="js-filter"
                        data-index="mobile-1"
                      >
                        <summary>
                          <div class="accordion__title">
                            <span >Colour</span>
                            
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                          </div>
                        </summary>
                        
                        <div
                          class="accordion__info"
                          id="FacetMobile-1-template--26303100092798__native_collection_nPVQGD"
                          role="region"
                          aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD"
                        >
                        <ul class="facets-layout-list mobile-facets__list  mobile-facets__list--swatches  list-unstyled" role="list">
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-1"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Black"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-1"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_black_small843c.jpg?v=8956519011751195913);"
  
></span>

                                  Black
                                </div>
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-2"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Blue"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-2"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_blue_small6836.jpg?v=15256520960457269895);"
  
></span>

                                  Blue
                                </div>
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-3"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Green"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-3"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_green_small867e.jpg?v=3497274801390206174);"
  
></span>

                                  Green
                                </div>
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-4"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="White"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-4"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_white_small259a.jpg?v=1913405391209899642);"
  
></span>

                                  White
                                </div>
                                
                              </label>
                            </li></ul>
                        </div>
                      </details>
                    </accordion-row>
                    


                  
                      <accordion-row
                      animate
                      class="accordion accordion--filter accordion--no-padding"
                    >
                      <details
                        id="Details-Mobile-2-template--26303100092798__native_collection_nPVQGD"
                        class="js-filter"
                        data-index="mobile-2"
                      >
                        <summary>
                          <div class="accordion__title">
                            <span >Wall or Floor</span>
                            
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                          </div>
                        </summary>
                        
                        <div
                          class="accordion__info"
                          id="FacetMobile-2-template--26303100092798__native_collection_nPVQGD"
                          role="region"
                          aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD"
                        >
                        <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_type-mobile-1"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_type"
                                  value="Floor"
                                  id="Filter-filter.p.m.custom.filter_tile_type-mobile-1"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Floor (34)</span
                                >
                                <span class="visually-hidden">Floor (34 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_type-mobile-2"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_type"
                                  value="Wall"
                                  id="Filter-filter.p.m.custom.filter_tile_type-mobile-2"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Wall (83)</span
                                >
                                <span class="visually-hidden">Wall (83 products)</span
                                >
                                
                              </label>
                            </li></ul>
                        </div>
                      </details>
                    </accordion-row>
                    


                  
                      <accordion-row
                      animate
                      class="accordion accordion--filter accordion--no-padding"
                    >
                      <details
                        id="Details-Mobile-3-template--26303100092798__native_collection_nPVQGD"
                        class="js-filter"
                        data-index="mobile-3"
                      >
                        <summary>
                          <div class="accordion__title">
                            <span >Tile Size</span>
                            
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                          </div>
                        </summary>
                        
                        <div
                          class="accordion__info"
                          id="FacetMobile-3-template--26303100092798__native_collection_nPVQGD"
                          role="region"
                          aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD"
                        >
                        <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.v.m.product.filter_size-mobile-1"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.v.m.product.filter_size"
                                  value="Small"
                                  id="Filter-filter.v.m.product.filter_size-mobile-1"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Small (65)</span
                                >
                                <span class="visually-hidden">Small (65 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.v.m.product.filter_size-mobile-2"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.v.m.product.filter_size"
                                  value="Medium"
                                  id="Filter-filter.v.m.product.filter_size-mobile-2"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Medium (8)</span
                                >
                                <span class="visually-hidden">Medium (8 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.v.m.product.filter_size-mobile-3"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.v.m.product.filter_size"
                                  value="Large"
                                  id="Filter-filter.v.m.product.filter_size-mobile-3"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Large (3)</span
                                >
                                <span class="visually-hidden">Large (3 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.v.m.product.filter_size-mobile-4"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.v.m.product.filter_size"
                                  value="Extra Large"
                                  id="Filter-filter.v.m.product.filter_size-mobile-4"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Extra Large (7)</span
                                >
                                <span class="visually-hidden">Extra Large (7 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.v.m.product.filter_size-mobile-5"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.v.m.product.filter_size"
                                  value="Mosaic"
                                  id="Filter-filter.v.m.product.filter_size-mobile-5"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Mosaic (3)</span
                                >
                                <span class="visually-hidden">Mosaic (3 products)</span
                                >
                                
                              </label>
                            </li></ul>
                        </div>
                      </details>
                    </accordion-row>
                    


                  
                      <accordion-row
                      animate
                      class="accordion accordion--filter accordion--no-padding"
                    >
                      <details
                        id="Details-Mobile-4-template--26303100092798__native_collection_nPVQGD"
                        class="js-filter"
                        data-index="mobile-4"
                      >
                        <summary>
                          <div class="accordion__title">
                            <span >Style</span>
                            
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                          </div>
                        </summary>
                        
                        <div
                          class="accordion__info"
                          id="FacetMobile-4-template--26303100092798__native_collection_nPVQGD"
                          role="region"
                          aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD"
                        >
                        <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_style-mobile-1"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_style"
                                  value="Classic"
                                  id="Filter-filter.p.m.custom.filter_tile_style-mobile-1"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Classic (7)</span
                                >
                                <span class="visually-hidden">Classic (7 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_style-mobile-2"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_style"
                                  value="Luxury"
                                  id="Filter-filter.p.m.custom.filter_tile_style-mobile-2"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Luxury (7)</span
                                >
                                <span class="visually-hidden">Luxury (7 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_style-mobile-3"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_style"
                                  value="Modern"
                                  id="Filter-filter.p.m.custom.filter_tile_style-mobile-3"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Modern (25)</span
                                >
                                <span class="visually-hidden">Modern (25 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_style-mobile-4"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_style"
                                  value="Patterned"
                                  id="Filter-filter.p.m.custom.filter_tile_style-mobile-4"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Patterned (12)</span
                                >
                                <span class="visually-hidden">Patterned (12 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_style-mobile-5"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_style"
                                  value="Victorian"
                                  id="Filter-filter.p.m.custom.filter_tile_style-mobile-5"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Victorian (1)</span
                                >
                                <span class="visually-hidden">Victorian (1 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_style-mobile-6"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_style"
                                  value="Vintage"
                                  id="Filter-filter.p.m.custom.filter_tile_style-mobile-6"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Vintage (33)</span
                                >
                                <span class="visually-hidden">Vintage (33 products)</span
                                >
                                
                              </label>
                            </li></ul>
                        </div>
                      </details>
                    </accordion-row>
                    


                  
                      <accordion-row
                      animate
                      class="accordion accordion--filter accordion--no-padding"
                    >
                      <details
                        id="Details-Mobile-5-template--26303100092798__native_collection_nPVQGD"
                        class="js-filter"
                        data-index="mobile-5"
                      >
                        <summary>
                          <div class="accordion__title">
                            <span >Finish</span>
                            
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                          </div>
                        </summary>
                        
                        <div
                          class="accordion__info"
                          id="FacetMobile-5-template--26303100092798__native_collection_nPVQGD"
                          role="region"
                          aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD"
                        >
                        <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_finish-mobile-1"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_finish"
                                  value="Gloss"
                                  id="Filter-filter.p.m.custom.filter_tile_finish-mobile-1"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Gloss (49)</span
                                >
                                <span class="visually-hidden">Gloss (49 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_finish-mobile-2"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_finish"
                                  value="Matt"
                                  id="Filter-filter.p.m.custom.filter_tile_finish-mobile-2"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Matt (36)</span
                                >
                                <span class="visually-hidden">Matt (36 products)</span
                                >
                                
                              </label>
                            </li></ul>
                        </div>
                      </details>
                    </accordion-row>
                    


                  
                      <accordion-row
                      animate
                      class="accordion accordion--filter accordion--no-padding"
                    >
                      <details
                        id="Details-Mobile-6-template--26303100092798__native_collection_nPVQGD"
                        class="js-filter"
                        data-index="mobile-6"
                      >
                        <summary>
                          <div class="accordion__title">
                            <span >Shape</span>
                            
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                          </div>
                        </summary>
                        
                        <div
                          class="accordion__info"
                          id="FacetMobile-6-template--26303100092798__native_collection_nPVQGD"
                          role="region"
                          aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD"
                        >
                        <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-1"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Hexagon"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-1"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Hexagon (2)</span
                                >
                                <span class="visually-hidden">Hexagon (2 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-2"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Rectangle"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-2"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Rectangle (59)</span
                                >
                                <span class="visually-hidden">Rectangle (59 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-3"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Square"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-3"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Square (23)</span
                                >
                                <span class="visually-hidden">Square (23 products)</span
                                >
                                
                              </label>
                            </li></ul>
                        </div>
                      </details>
                    </accordion-row>
                    


                  
                      <accordion-row
                      animate
                      class="accordion accordion--filter accordion--no-padding"
                    >
                      <details
                        id="Details-Mobile-7-template--26303100092798__native_collection_nPVQGD"
                        class="js-filter"
                        data-index="mobile-7"
                      >
                        <summary>
                          <div class="accordion__title">
                            <span >Material</span>
                            
  <svg class="icon icon-caret-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5 5.5L7.5 9.5L11.5 5.5" stroke="black" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>

                          </div>
                        </summary>
                        
                        <div
                          class="accordion__info"
                          id="FacetMobile-7-template--26303100092798__native_collection_nPVQGD"
                          role="region"
                          aria-labelledby="Summary--template--26303100092798__native_collection_nPVQGD"
                        >
                        <ul class="facets-layout-list mobile-facets__list  list-unstyled" role="list">
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_material-mobile-1"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_material"
                                  value="Ceramic"
                                  id="Filter-filter.p.m.custom.filter_tile_material-mobile-1"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Ceramic (47)</span
                                >
                                <span class="visually-hidden">Ceramic (47 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_material-mobile-2"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_material"
                                  value="Porcelain"
                                  id="Filter-filter.p.m.custom.filter_tile_material-mobile-2"
                                  
                                  
                                >


                                    <div class="custom-checkbox">
                                      <svg class="icon icon-checkbox" width="1.6rem" height="1.6rem" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.2 1H5C2.79086 1 1 2.79086 1 5V16.2C1 18.4091 2.79086 20.2 5 20.2H16.2C18.4091 20.2 20.2 18.4091 20.2 16.2V5C20.2 2.79086 18.4091 1 16.2 1Z" stroke="#D3D3D3" stroke-width="1.2"/>
                                      </svg>
  
                                      <svg
                                        aria-hidden="true"
                                        class="icon icon-checkmark"
                                        width="1.1rem"
                                        height="0.7rem"
                                        viewBox="0 0 11 7"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path d="M1.5 3.5L2.83333 4.75L4.16667 6L9.5 1" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                    </div>

                                <span class="facet-checkbox__text" aria-hidden="true">Porcelain (38)</span
                                >
                                <span class="visually-hidden">Porcelain (38 products)</span
                                >
                                
                              </label>
                            </li></ul>
                        </div>
                      </details>
                    </accordion-row>
                    

                                        
            </div>

            
</form>
      </facet-filters-form>
    </div>
        <div class="custom-drawer__footer">
      <button type="button" class="button button--full-width button--with-icon button--black-2" drawer-trigger="" data-target-drawer="mobile-facets-drawer">
        <span class="button__text">View </span>
        <span class="button__text" id="ProductCount">85 products
</span>
      </button>
    </div>
    </div>
  </custom-drawer> 
</div>

        </aside><div
        class="product-grid-container"
        
      ><facet-filters-form class="facets facets-vertical-sort">
            <form class="facets-vertical-form" id="FacetSortForm">
              <div class="product-count-vertical tablet-hide light" role="status">
                <h2 class="product-count__text text-body">
                  <span id="ProductCountDesktop">85 products
</span>
                </h2><div class="loading__spinner hidden">
    <svg
      aria-hidden="true"
      focusable="false"
      class="spinner"
      viewBox="0 0 66 66"
      xmlns="http://www.w3.org/2000/svg"
    >
      <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
    </svg>
  </div>
  </div>
              
              <div class="tablet-up-hide">

                <button type="button" aria-label="Toggle Filters" class="custom-drawer-button button button--primary button--with-icon button--full-width" drawer-trigger="" data-target-drawer="mobile-facets-drawer">
                  <span class="button__text">FILTER BY</span>
                  <span class="button__icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.25 11.9999H8.895M4.534 11.9999H2.75M4.534 11.9999C4.534 11.4217 4.76368 10.8672 5.17251 10.4584C5.58134 10.0496 6.13583 9.81989 6.714 9.81989C7.29217 9.81989 7.84666 10.0496 8.25549 10.4584C8.66432 10.8672 8.894 11.4217 8.894 11.9999C8.894 12.5781 8.66432 13.1326 8.25549 13.5414C7.84666 13.9502 7.29217 14.1799 6.714 14.1799C6.13583 14.1799 5.58134 13.9502 5.17251 13.5414C4.76368 13.1326 4.534 12.5781 4.534 11.9999ZM21.25 18.6069H15.502M15.502 18.6069C15.502 19.1852 15.2718 19.7403 14.8628 20.1492C14.4539 20.5582 13.8993 20.7879 13.321 20.7879C12.7428 20.7879 12.1883 20.5572 11.7795 20.1484C11.3707 19.7396 11.141 19.1851 11.141 18.6069M15.502 18.6069C15.502 18.0286 15.2718 17.4745 14.8628 17.0655C14.4539 16.6566 13.8993 16.4269 13.321 16.4269C12.7428 16.4269 12.1883 16.6566 11.7795 17.0654C11.3707 17.4742 11.141 18.0287 11.141 18.6069M11.141 18.6069H2.75M21.25 5.39289H18.145M13.784 5.39289H2.75M13.784 5.39289C13.784 4.81472 14.0137 4.26023 14.4225 3.8514C14.8313 3.44257 15.3858 3.21289 15.964 3.21289C16.2503 3.21289 16.5338 3.26928 16.7983 3.37883C17.0627 3.48839 17.3031 3.64897 17.5055 3.8514C17.7079 4.05383 17.8685 4.29415 17.9781 4.55864C18.0876 4.82313 18.144 5.10661 18.144 5.39289C18.144 5.67917 18.0876 5.96265 17.9781 6.22714C17.8685 6.49163 17.7079 6.73195 17.5055 6.93438C17.3031 7.13681 17.0627 7.29739 16.7983 7.40695C16.5338 7.5165 16.2503 7.57289 15.964 7.57289C15.3858 7.57289 14.8313 7.34321 14.4225 6.93438C14.0137 6.52555 13.784 5.97106 13.784 5.39289Z" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                  </svg>
                  </span>
                </button> 
              </div>
              
              <div class="facet-filters sorting caption">
                <div class="facet-filters__field">
                  <label for="SortBy" class="facet-filters__label button--with-icon">
                    <span class="button__text">SORT BY</span>
                    <span class="button__icon" style="display: flex;">
                      <svg viewBox="0 0 21 21" width='18' height='18' xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="none" fill-rule="evenodd" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" transform="translate(2 4)"> <path d="m8.5 8.5 4 4.107 4-4.107"></path> <path d="m8.5 4.5-4-4-4 3.997"></path> <path d="m4.5.5v12"></path> <path d="m12.5.5v12"></path> </g> </g></svg>  
                    </span>
                  </label>  
                  <div class="select"><select
                      name="sort_by"
                      class="facet-filters__sort select__select caption-large"
                      id="SortBy"
                      aria-describedby="a11y-refresh-page-message"
                    >
                        <option value="manual" selected="selected">Recommended</option>
                        <option value="best-selling" >Best selling</option>
                        <option value="title-ascending" >Alphabetically, A-Z</option>
                        <option value="title-descending" >Alphabetically, Z-A</option>
                        <option value="created-ascending" >Date, old to new</option>
                        <option value="created-descending" >Date, new to old</option>
                      
                    </select>
                    

                  </div>
                </div>
              </div>
              <div class="facets__switch-view tablet-up-hide">
                <button type="button" id='button-switch-grid' aria-label="switch collection grid view" class="custom-drawer-button button button--primary button--with-icon button--full-width">
                  <span class="button__text">VIEW</span>
                  <div class="button__icon-group">
                    <span class="button__icon" id="icon_one_col">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="black" xmlns="http://www.w3.org/2000/svg">
                          <rect width="15" height="15" fill="unset"/>
                        </svg>
                    </span>
                    <span class="button__icon" id="icon_two_col">
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="black" xmlns="http://www.w3.org/2000/svg">
                        <rect y="8" width="7" height="7" fill="unset"/>
                        <rect x="8" y="8" width="7" height="7" fill="unset"/>
                        <rect width="7" height="7" fill="unset"/>
                        <rect x="8" width="7" height="7" fill="unset"/>
                      </svg>
                    </span>
                  </div>
                </button>
              </div>
            </form>
          </facet-filters-form><div id="ProductGridContainer"><div
              class="collection"
            >
              <div class="loading-overlay gradient"></div>
              <ul
                id="product-grid"
                data-id="template--26303100092798__native_collection_nPVQGD"
                class="
                  grid product-grid grid--2-col-tablet-down
                  grid--3-col-desktop
                  
                "
              >
                

<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588806267070 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588806267070 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588806267070 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588806267070 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588806267070 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588806267070 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588806267070 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588806267070 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588806267070">
  
<div class="product-badges"><div class="product-badge_container" style="background-color: #ffdc59;">
            <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
        </div></div>

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
                <a href="https://www.porcelainsuperstore.co.uk/products/dwell-emerald" title="Dwell Emerald Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/m6rqfca1.jpg?v=1617968411&amp;width=400" alt="Dwell Emerald Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/m6rq.jpg?v=1617968411&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/m6rq.jpg?v=1617968411&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/m6rq.jpg?v=1617968411&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dwell-emerald" title="Dwell Emerald Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Dwell-Emerald-027e4c.jpg?v=1719417903&amp;width=400" alt="Dwell Emerald Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-02.jpg?v=1719417903&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-02.jpg?v=1719417903&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-02.jpg?v=1719417903&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dwell-emerald" title="Dwell Emerald Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Dwell-Emerald-037e4c.jpg?v=1719417903&amp;width=400" alt="Dwell Emerald Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-03.jpg?v=1719417903&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-03.jpg?v=1719417903&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-03.jpg?v=1719417903&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dwell-emerald" title="Dwell Emerald Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Dwell-Emerald-057e4c.jpg?v=1719417903&amp;width=400" alt="Dwell Emerald Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-05.jpg?v=1719417903&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-05.jpg?v=1719417903&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-05.jpg?v=1719417903&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dwell-emerald" title="Dwell Emerald Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Dwell-Emerald-047e4c.jpg?v=1719417903&amp;width=400" alt="Dwell Emerald Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-04.jpg?v=1719417903&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-04.jpg?v=1719417903&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-04.jpg?v=1719417903&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dwell-emerald" title="Dwell Emerald Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Dwell-Emerald-017e4c.jpg?v=1719417903&amp;width=400" alt="Dwell Emerald Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-01.jpg?v=1719417903&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-01.jpg?v=1719417903&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dwell-Emerald-01.jpg?v=1719417903&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/dwell-emerald"  title="Dwell Emerald Tile">
          Dwell Emerald Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        6 x 24 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£66.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/dwell-emerald#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588806267070" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--15320908988798 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15320908988798 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15320908988798 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15320908988798 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15320908988798 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15320908988798 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15320908988798 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15320908988798 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--15320908988798">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/strata-green" title="Strata Green Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Strata-Green-13_b47a5f1e-587f-4c13-be20-71c676a28f586b5c.jpg?v=1760708408&amp;width=400" alt="Strata Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-13_b47a5f1e-587f-4c13-be20-71c676a28f58.jpg?v=1760708408&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-13_b47a5f1e-587f-4c13-be20-71c676a28f58.jpg?v=1760708408&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-13_b47a5f1e-587f-4c13-be20-71c676a28f58.jpg?v=1760708408&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/strata-green" title="Strata Green Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Strata-Green-086b5c.jpg?v=1760708408&amp;width=400" alt="Strata Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-08.jpg?v=1760708408&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-08.jpg?v=1760708408&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-08.jpg?v=1760708408&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/strata-green" title="Strata Green Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Strata-Green-16207e.jpg?v=1761659248&amp;width=400" alt="Strata Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-16.jpg?v=1761659248&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-16.jpg?v=1761659248&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-16.jpg?v=1761659248&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/strata-green" title="Strata Green Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Strata-Green-15207e.jpg?v=1761659248&amp;width=400" alt="Strata Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-15.jpg?v=1761659248&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-15.jpg?v=1761659248&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-15.jpg?v=1761659248&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/strata-green" title="Strata Green Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Strata-Green-10207e.jpg?v=1761659248&amp;width=400" alt="Strata Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-10.jpg?v=1761659248&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-10.jpg?v=1761659248&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-10.jpg?v=1761659248&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/strata-green" title="Strata Green Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Strata-Green-14_c1298916-43af-42c3-84c3-0a9c9ec762d6207e.jpg?v=1761659248&amp;width=400" alt="Strata Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-14_c1298916-43af-42c3-84c3-0a9c9ec762d6.jpg?v=1761659248&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-14_c1298916-43af-42c3-84c3-0a9c9ec762d6.jpg?v=1761659248&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-14_c1298916-43af-42c3-84c3-0a9c9ec762d6.jpg?v=1761659248&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/strata-green" title="Strata Green Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Strata-Green-09207e.jpg?v=1761659248&amp;width=400" alt="Strata Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-09.jpg?v=1761659248&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-09.jpg?v=1761659248&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-09.jpg?v=1761659248&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/strata-green" title="Strata Green Tile" data-preloadlink="true"><div class="image-snippet 8">
                    <img src="../cdn/shop/files/Strata-Green-11207e.jpg?v=1761659248&amp;width=400" alt="Strata Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-11.jpg?v=1761659248&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-11.jpg?v=1761659248&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Strata-Green-11.jpg?v=1761659248&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/strata-green"  title="Strata Green Tile">
          Strata Green Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        30 x 60 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£34.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/strata-green#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15320908988798" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588823765182 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588823765182 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588823765182 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588823765182 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588823765182 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588823765182 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588823765182 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588823765182 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588823765182">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/opal-emerald" title="Opal Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Opal-Emerald-016cb4.jpg?v=1731519669&amp;width=400" alt="Opal Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-01.jpg?v=1731519669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-01.jpg?v=1731519669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-01.jpg?v=1731519669&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/opal-emerald" title="Opal Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Opal-Emerald-036cb4.jpg?v=1731519669&amp;width=400" alt="Opal Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-03.jpg?v=1731519669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-03.jpg?v=1731519669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-03.jpg?v=1731519669&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/opal-emerald" title="Opal Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Opal-Emerald-046cb4.jpg?v=1731519669&amp;width=400" alt="Opal Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-04.jpg?v=1731519669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-04.jpg?v=1731519669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-04.jpg?v=1731519669&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/opal-emerald" title="Opal Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Opal-Emerald-076cb4.jpg?v=1731519669&amp;width=400" alt="Opal Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-07.jpg?v=1731519669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-07.jpg?v=1731519669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-07.jpg?v=1731519669&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/opal-emerald" title="Opal Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Opal-Emerald-026cb4.jpg?v=1731519669&amp;width=400" alt="Opal Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-02.jpg?v=1731519669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-02.jpg?v=1731519669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-02.jpg?v=1731519669&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/opal-emerald" title="Opal Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Opal-Emerald-066cb4.jpg?v=1731519669&amp;width=400" alt="Opal Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-06.jpg?v=1731519669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-06.jpg?v=1731519669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-06.jpg?v=1731519669&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/opal-emerald" title="Opal Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Opal-Emerald-086cb4.jpg?v=1731519669&amp;width=400" alt="Opal Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-08.jpg?v=1731519669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-08.jpg?v=1731519669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-08.jpg?v=1731519669&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/opal-emerald" title="Opal Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 8">
                    <img src="../cdn/shop/files/Opal-Emerald-056cb4.jpg?v=1731519669&amp;width=400" alt="Opal Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-05.jpg?v=1731519669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-05.jpg?v=1731519669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Opal-Emerald-05.jpg?v=1731519669&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/opal-emerald"  title="Opal Emerald Wall Tile">
          Opal Emerald Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        7.5 x 30 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£41.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/opal-emerald#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588823765182" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588821831870 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588821831870 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588821831870 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588821831870 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588821831870 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588821831870 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588821831870 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588821831870 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588821831870">
  
<div class="product-badges"><div class="product-badge_container" style="background-color: #ffdc59;">
            <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
        </div></div>

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
                <a href="https://www.porcelainsuperstore.co.uk/products/marais-green" title="Marais Green Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Marais-Green-09a923.jpg?v=1757413576&amp;width=400" alt="Marais Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/marais-green" title="Marais Green Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Marais-Green-01_3f009783-0eeb-4fa8-9af2-22f425f0620ba923.jpg?v=1757413576&amp;width=400" alt="Marais Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-01_3f009783-0eeb-4fa8-9af2-22f425f0620b.jpg?v=1757413576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-01_3f009783-0eeb-4fa8-9af2-22f425f0620b.jpg?v=1757413576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-01_3f009783-0eeb-4fa8-9af2-22f425f0620b.jpg?v=1757413576&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/marais-green" title="Marais Green Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Marais-Green-05a923.jpg?v=1757413576&amp;width=400" alt="Marais Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-05.jpg?v=1757413576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-05.jpg?v=1757413576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-05.jpg?v=1757413576&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/marais-green" title="Marais Green Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Marais-Green-04_89d72324-f4cf-4ea4-b9fc-6ff6c8c55038a923.jpg?v=1757413576&amp;width=400" alt="Marais Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-04_89d72324-f4cf-4ea4-b9fc-6ff6c8c55038.jpg?v=1757413576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-04_89d72324-f4cf-4ea4-b9fc-6ff6c8c55038.jpg?v=1757413576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-04_89d72324-f4cf-4ea4-b9fc-6ff6c8c55038.jpg?v=1757413576&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/marais-green" title="Marais Green Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Marais-Green-03_df6bcc53-36c8-491f-9aed-3fc37eb2ff7ba923.jpg?v=1757413576&amp;width=400" alt="Marais Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-03_df6bcc53-36c8-491f-9aed-3fc37eb2ff7b.jpg?v=1757413576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-03_df6bcc53-36c8-491f-9aed-3fc37eb2ff7b.jpg?v=1757413576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-03_df6bcc53-36c8-491f-9aed-3fc37eb2ff7b.jpg?v=1757413576&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/marais-green" title="Marais Green Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Marais-Green-02_645af731-9565-46b3-9722-39bfb1a2f35ba923.jpg?v=1757413576&amp;width=400" alt="Marais Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-02_645af731-9565-46b3-9722-39bfb1a2f35b.jpg?v=1757413576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-02_645af731-9565-46b3-9722-39bfb1a2f35b.jpg?v=1757413576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-02_645af731-9565-46b3-9722-39bfb1a2f35b.jpg?v=1757413576&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/marais-green" title="Marais Green Wall Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Marais-Green-06a923.jpg?v=1757413576&amp;width=400" alt="Marais Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-06.jpg?v=1757413576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-06.jpg?v=1757413576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-06.jpg?v=1757413576&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/marais-green" title="Marais Green Wall Tile" data-preloadlink="true"><div class="image-snippet 8">
                    <img src="../cdn/shop/files/Marais-Green-07a923.jpg?v=1757413576&amp;width=400" alt="Marais Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-07.jpg?v=1757413576&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-07.jpg?v=1757413576&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-07.jpg?v=1757413576&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/marais-green"  title="Marais Green Wall Tile">
          Marais Green Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        6.5 x 20 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£49.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/marais-green#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588821831870" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--8020348928190 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--8020348928190 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--8020348928190 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--8020348928190 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--8020348928190 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--8020348928190 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--8020348928190 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--8020348928190 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--8020348928190">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/faenza-sage-tile" title="Faenza Sage Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Faenza-Sage-0789a2.jpg?v=1737460222&amp;width=400" alt="Faenza Sage Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-07.jpg?v=1737460222&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-07.jpg?v=1737460222&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-07.jpg?v=1737460222&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/faenza-sage-tile" title="Faenza Sage Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Faenza-Sage-0489a2.jpg?v=1737460222&amp;width=400" alt="Faenza Sage Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-04.jpg?v=1737460222&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-04.jpg?v=1737460222&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-04.jpg?v=1737460222&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/faenza-sage-tile" title="Faenza Sage Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Faenza-Sage-0289a2.jpg?v=1737460222&amp;width=400" alt="Faenza Sage Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-02.jpg?v=1737460222&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-02.jpg?v=1737460222&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-02.jpg?v=1737460222&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/faenza-sage-tile" title="Faenza Sage Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Faenza-Sage-0189a2.jpg?v=1737460222&amp;width=400" alt="Faenza Sage Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-01.jpg?v=1737460222&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-01.jpg?v=1737460222&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-01.jpg?v=1737460222&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/faenza-sage-tile" title="Faenza Sage Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Faenza-Sage-0689a2.jpg?v=1737460222&amp;width=400" alt="Faenza Sage Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-06.jpg?v=1737460222&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-06.jpg?v=1737460222&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-06.jpg?v=1737460222&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/faenza-sage-tile" title="Faenza Sage Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Faenza-Sage-0589a2.jpg?v=1737460222&amp;width=400" alt="Faenza Sage Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-05.jpg?v=1737460222&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-05.jpg?v=1737460222&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Faenza-Sage-05.jpg?v=1737460222&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/faenza-sage-tile"  title="Faenza Sage Tile">
          Faenza Sage Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        32 x 62.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£54.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/faenza-sage-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="8020348928190" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--8331198136510 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--8331198136510 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--8331198136510 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--8331198136510 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--8331198136510 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--8331198136510 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--8331198136510 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--8331198136510 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--8331198136510">
  
<div class="product-badges"><div class="product-badge_container" style="background-color: #ffdc59;">
            <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
        </div></div>

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
                <a href="https://www.porcelainsuperstore.co.uk/products/capri-green-tile" title="Capri Green Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Capri-Green-0574e0.jpg?v=1730468455&amp;width=400" alt="Capri Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-05.jpg?v=1730468455&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-05.jpg?v=1730468455&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-05.jpg?v=1730468455&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/capri-green-tile" title="Capri Green Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Capri-Green-04_975fb55c-ded8-46c6-8438-602b997d9ea574e0.jpg?v=1730468455&amp;width=400" alt="Capri Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-04_975fb55c-ded8-46c6-8438-602b997d9ea5.jpg?v=1730468455&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-04_975fb55c-ded8-46c6-8438-602b997d9ea5.jpg?v=1730468455&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-04_975fb55c-ded8-46c6-8438-602b997d9ea5.jpg?v=1730468455&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/capri-green-tile" title="Capri Green Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Capri-Green-03_86ce5320-0f1b-4cf0-ad6c-dd53749a090e7012.jpg?v=1730468456&amp;width=400" alt="Capri Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-03_86ce5320-0f1b-4cf0-ad6c-dd53749a090e.jpg?v=1730468456&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-03_86ce5320-0f1b-4cf0-ad6c-dd53749a090e.jpg?v=1730468456&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-03_86ce5320-0f1b-4cf0-ad6c-dd53749a090e.jpg?v=1730468456&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/capri-green-tile" title="Capri Green Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Capri-Green-0674e0.jpg?v=1730468455&amp;width=400" alt="Capri Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-06.jpg?v=1730468455&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-06.jpg?v=1730468455&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-06.jpg?v=1730468455&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/capri-green-tile" title="Capri Green Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Capri-Green-077012.jpg?v=1730468456&amp;width=400" alt="Capri Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-07.jpg?v=1730468456&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-07.jpg?v=1730468456&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Capri-Green-07.jpg?v=1730468456&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/capri-green-tile"  title="Capri Green Tile">
          Capri Green Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        31.6 x 60 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£21.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/capri-green-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="8331198136510" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--8020482883774 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--8020482883774 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--8020482883774 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--8020482883774 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--8020482883774 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--8020482883774 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--8020482883774 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--8020482883774 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--8020482883774">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile" title="Dolce Vita Aqua Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Dolce-Vitta-Aqua-06_2dcca6ed-eaa6-4c4b-82a3-07babdcf9c21525b.jpg?v=1743672669&amp;width=400" alt="Dolce Vita Aqua Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-06_2dcca6ed-eaa6-4c4b-82a3-07babdcf9c21.jpg?v=1743672669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-06_2dcca6ed-eaa6-4c4b-82a3-07babdcf9c21.jpg?v=1743672669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-06_2dcca6ed-eaa6-4c4b-82a3-07babdcf9c21.jpg?v=1743672669&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile" title="Dolce Vita Aqua Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="http://www.porcelainsuperstore.co.uk/cdn/shop/files/dolce-vita-aqua.webp?v=1733837214&amp;width=400" alt="Dolce Vita Aqua Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/dolce-vita-aqua.webp?v=1733837214&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/dolce-vita-aqua.webp?v=1733837214&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/dolce-vita-aqua.webp?v=1733837214&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile" title="Dolce Vita Aqua Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Dolce-Vitta-Aqua-07_0089eb75-b136-464c-8da6-9f118c13c86aaf2f.jpg?v=1733837214&amp;width=400" alt="Dolce Vita Aqua Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-07_0089eb75-b136-464c-8da6-9f118c13c86a.jpg?v=1733837214&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-07_0089eb75-b136-464c-8da6-9f118c13c86a.jpg?v=1733837214&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-07_0089eb75-b136-464c-8da6-9f118c13c86a.jpg?v=1733837214&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile" title="Dolce Vita Aqua Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Dolce-Vitta-Aqua-05af2f.jpg?v=1733837214&amp;width=400" alt="Dolce Vita Aqua Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-05.jpg?v=1733837214&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-05.jpg?v=1733837214&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-05.jpg?v=1733837214&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile" title="Dolce Vita Aqua Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Dolce-Vitta-Aqua-03_3cf44960-1483-4997-85a0-696796454465af2f.jpg?v=1733837214&amp;width=400" alt="Dolce Vita Aqua Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-03_3cf44960-1483-4997-85a0-696796454465.jpg?v=1733837214&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-03_3cf44960-1483-4997-85a0-696796454465.jpg?v=1733837214&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-03_3cf44960-1483-4997-85a0-696796454465.jpg?v=1733837214&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile" title="Dolce Vita Aqua Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Dolce-Vitta-Aqua-04af2f.jpg?v=1733837214&amp;width=400" alt="Dolce Vita Aqua Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-04.jpg?v=1733837214&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-04.jpg?v=1733837214&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-04.jpg?v=1733837214&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile" title="Dolce Vita Aqua Wall Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Dolce-Vitta-Aqua-02af2f.jpg?v=1733837214&amp;width=400" alt="Dolce Vita Aqua Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-02.jpg?v=1733837214&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-02.jpg?v=1733837214&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Aqua-02.jpg?v=1733837214&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile"  title="Dolce Vita Aqua Wall Tile">
          Dolce Vita Aqua Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        5.2 x 16 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£66.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-aqua-wall-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="8020482883774" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--14761803448702 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--14761803448702 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--14761803448702 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--14761803448702 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--14761803448702 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--14761803448702 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--14761803448702 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--14761803448702 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--14761803448702">
  
<div class="product-badges"><div class="product-badge_container" style="background-color: #ffdc59;">
            <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
        </div></div>

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
                <a href="https://www.porcelainsuperstore.co.uk/products/myth-green-tile" title="Myth Green Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Myth-Green-03_56ea6a3f-5880-4a64-ab8a-89b8d07f21acb093.jpg?v=1733484028&amp;width=400" alt="Myth Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-03_56ea6a3f-5880-4a64-ab8a-89b8d07f21ac.jpg?v=1733484028&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-03_56ea6a3f-5880-4a64-ab8a-89b8d07f21ac.jpg?v=1733484028&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-03_56ea6a3f-5880-4a64-ab8a-89b8d07f21ac.jpg?v=1733484028&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/myth-green-tile" title="Myth Green Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Myth-Green-074026.jpg?v=1733484029&amp;width=400" alt="Myth Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-07.jpg?v=1733484029&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-07.jpg?v=1733484029&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-07.jpg?v=1733484029&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/myth-green-tile" title="Myth Green Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Myth-Green-02fc29.jpg?v=1731062304&amp;width=400" alt="Myth Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-02.jpg?v=1731062304&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-02.jpg?v=1731062304&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-02.jpg?v=1731062304&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/myth-green-tile" title="Myth Green Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Myth-Green-064026.jpg?v=1733484029&amp;width=400" alt="Myth Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-06.jpg?v=1733484029&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-06.jpg?v=1733484029&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-06.jpg?v=1733484029&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/myth-green-tile" title="Myth Green Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Myth-Green-05b093.jpg?v=1733484028&amp;width=400" alt="Myth Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-05.jpg?v=1733484028&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-05.jpg?v=1733484028&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-05.jpg?v=1733484028&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/myth-green-tile" title="Myth Green Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Myth-Green-04b093.jpg?v=1733484028&amp;width=400" alt="Myth Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-04.jpg?v=1733484028&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-04.jpg?v=1733484028&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Myth-Green-04.jpg?v=1733484028&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/myth-green-tile"  title="Myth Green Tile">
          Myth Green Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        5 x 40 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£50.95 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/myth-green-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="14761803448702" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--7897267273918 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7897267273918 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7897267273918 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7897267273918 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7897267273918 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7897267273918 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7897267273918 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7897267273918 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--7897267273918">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/nancy-green-decor-tile" title="Nancy Green Decor Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Nancy-Green-Decor-02217c.jpg?v=1764248101&amp;width=400" alt="Nancy Green Decor Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-02.jpg?v=1764248101&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-02.jpg?v=1764248101&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-02.jpg?v=1764248101&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/nancy-green-decor-tile" title="Nancy Green Decor Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Nancy-Green-Decor-04217c.jpg?v=1764248101&amp;width=400" alt="Nancy Green Decor Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-04.jpg?v=1764248101&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-04.jpg?v=1764248101&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-04.jpg?v=1764248101&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/nancy-green-decor-tile" title="Nancy Green Decor Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Nancy-Green-Decor-05217c.jpg?v=1764248101&amp;width=400" alt="Nancy Green Decor Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-05.jpg?v=1764248101&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-05.jpg?v=1764248101&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-05.jpg?v=1764248101&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/nancy-green-decor-tile" title="Nancy Green Decor Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Nancy-Green-Decor-0619c2.jpg?v=1710856882&amp;width=400" alt="Nancy Green Decor Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-06.jpg?v=1710856882&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-06.jpg?v=1710856882&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Nancy-Green-Decor-06.jpg?v=1710856882&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/nancy-green-decor-tile"  title="Nancy Green Decor Tile">
          Nancy Green Decor Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        15 x 15 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£87.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/nancy-green-decor-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7897267273918" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588808036542 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588808036542 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588808036542 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588808036542 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588808036542 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588808036542 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588808036542 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588808036542 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588808036542">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/fez-deep-green" title="Fez Ivy Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Fez-Ivy-06466b.jpg?v=1706116579&amp;width=400" alt="Fez Ivy Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-06.jpg?v=1706116579&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-06.jpg?v=1706116579&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-06.jpg?v=1706116579&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fez-deep-green" title="Fez Ivy Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Fez-Ivy-049bab.jpg?v=1712658134&amp;width=400" alt="Fez Ivy Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-04.jpg?v=1712658134&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-04.jpg?v=1712658134&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-04.jpg?v=1712658134&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fez-deep-green" title="Fez Ivy Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/fez_ivy9bab.jpg?v=1712658134&amp;width=400" alt="Fez Ivy Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/fez_ivy.jpg?v=1712658134&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/fez_ivy.jpg?v=1712658134&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/fez_ivy.jpg?v=1712658134&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fez-deep-green" title="Fez Ivy Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Fez-Ivy-07466b.jpg?v=1706116579&amp;width=400" alt="Fez Ivy Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-07.jpg?v=1706116579&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-07.jpg?v=1706116579&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Ivy-07.jpg?v=1706116579&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fez-deep-green" title="Fez Ivy Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Fez-Collection466b.jpg?v=1706116579&amp;width=400" alt="Fez Ivy Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Collection.jpg?v=1706116579&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Collection.jpg?v=1706116579&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Collection.jpg?v=1706116579&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/fez-deep-green"  title="Fez Ivy Wall Tile">
          Fez Ivy Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        10 x 10 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£80.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/fez-deep-green#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588808036542" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--7464763818174 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7464763818174 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7464763818174 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7464763818174 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7464763818174 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7464763818174 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7464763818174 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7464763818174 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--7464763818174">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/auberge-green-patterned-tile" title="Auberge Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Aurberge-Green-07cccf.jpg?v=1710345952&amp;width=400" alt="Auberge Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aurberge-Green-07.jpg?v=1710345952&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aurberge-Green-07.jpg?v=1710345952&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aurberge-Green-07.jpg?v=1710345952&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/auberge-green-patterned-tile" title="Auberge Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Aurberge-Green-06cccf.jpg?v=1710345952&amp;width=400" alt="Auberge Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aurberge-Green-06.jpg?v=1710345952&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aurberge-Green-06.jpg?v=1710345952&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aurberge-Green-06.jpg?v=1710345952&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/auberge-green-patterned-tile" title="Auberge Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/Aurberge-Green-02cccf.jpg?v=1710345952&amp;width=400" alt="Auberge Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Aurberge-Green-02.jpg?v=1710345952&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Aurberge-Green-02.jpg?v=1710345952&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Aurberge-Green-02.jpg?v=1710345952&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/auberge-green-patterned-tile"  title="Auberge Green Patterned Tile">
          Auberge Green Patterned Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        33 x 33 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£52.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/auberge-green-patterned-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7464763818174" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--7297599733950 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7297599733950 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7297599733950 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7297599733950 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7297599733950 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7297599733950 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7297599733950 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7297599733950 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--7297599733950">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-plain" title="Fluted Emerald Plain Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/Fluted-Emerald-Plain-0170df.jpg?v=1664553006&amp;width=400" alt="Fluted Emerald Plain Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emerald-Plain-01.jpg?v=1664553006&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emerald-Plain-01.jpg?v=1664553006&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emerald-Plain-01.jpg?v=1664553006&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-plain" title="Fluted Emerald Plain Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Fluted-Emerald-Plain-0748d0.jpg?v=1721233780&amp;width=400" alt="Fluted Emerald Plain Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-07.jpg?v=1721233780&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-07.jpg?v=1721233780&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-07.jpg?v=1721233780&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-plain" title="Fluted Emerald Plain Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Fluted-Emerald-Plain-0648d0.jpg?v=1721233780&amp;width=400" alt="Fluted Emerald Plain Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-06.jpg?v=1721233780&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-06.jpg?v=1721233780&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-06.jpg?v=1721233780&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-plain" title="Fluted Emerald Plain Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Fluted-Emerald-Plain-0448d0.jpg?v=1721233780&amp;width=400" alt="Fluted Emerald Plain Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-04.jpg?v=1721233780&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-04.jpg?v=1721233780&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-04.jpg?v=1721233780&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-plain" title="Fluted Emerald Plain Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Fluted-Emerald-Plain-08_532092dc-9e6d-4907-a9be-10dce93270a96245.jpg?v=1721233828&amp;width=400" alt="Fluted Emerald Plain Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-08_532092dc-9e6d-4907-a9be-10dce93270a9.jpg?v=1721233828&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-08_532092dc-9e6d-4907-a9be-10dce93270a9.jpg?v=1721233828&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-08_532092dc-9e6d-4907-a9be-10dce93270a9.jpg?v=1721233828&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-plain" title="Fluted Emerald Plain Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Fluted-Emerald-Plain-0548d0.jpg?v=1721233780&amp;width=400" alt="Fluted Emerald Plain Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-05.jpg?v=1721233780&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-05.jpg?v=1721233780&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Plain-05.jpg?v=1721233780&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-plain"  title="Fluted Emerald Plain Wall Tile">
          Fluted Emerald Plain Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        5 x 20 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£49.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-plain#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7297599733950" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588804825278 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588804825278 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588804825278 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588804825278 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588804825278 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588804825278 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588804825278 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588804825278 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588804825278">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/crackle-bottle-green" title="Crackle Bottle Green Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Crackle-Bottle-Green-0541d6.jpg?v=1764884477&amp;width=400" alt="Crackle Bottle Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-05.jpg?v=1764884477&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-05.jpg?v=1764884477&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-05.jpg?v=1764884477&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/crackle-bottle-green" title="Crackle Bottle Green Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Crackle-Bottle-Green-0141d6.jpg?v=1764884477&amp;width=400" alt="Crackle Bottle Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-01.jpg?v=1764884477&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-01.jpg?v=1764884477&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-01.jpg?v=1764884477&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/crackle-bottle-green" title="Crackle Bottle Green Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Crackle-Bottle-Green-03_930fd5ce-f0f5-4e5f-9dc4-13e5709e2ccf41d6.jpg?v=1764884477&amp;width=400" alt="Crackle Bottle Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-03_930fd5ce-f0f5-4e5f-9dc4-13e5709e2ccf.jpg?v=1764884477&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-03_930fd5ce-f0f5-4e5f-9dc4-13e5709e2ccf.jpg?v=1764884477&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-03_930fd5ce-f0f5-4e5f-9dc4-13e5709e2ccf.jpg?v=1764884477&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/crackle-bottle-green" title="Crackle Bottle Green Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Crackle-Bottle-Green-0441d6.jpg?v=1764884477&amp;width=400" alt="Crackle Bottle Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-04.jpg?v=1764884477&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-04.jpg?v=1764884477&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-04.jpg?v=1764884477&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/crackle-bottle-green" title="Crackle Bottle Green Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Crackle-Bottle-Green-0341d6.jpg?v=1764884477&amp;width=400" alt="Crackle Bottle Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-03.jpg?v=1764884477&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-03.jpg?v=1764884477&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-03.jpg?v=1764884477&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/crackle-bottle-green" title="Crackle Bottle Green Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Crackle-Bottle-Green-0241d6.jpg?v=1764884477&amp;width=400" alt="Crackle Bottle Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-02.jpg?v=1764884477&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-02.jpg?v=1764884477&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Crackle-Bottle-Green-02.jpg?v=1764884477&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/crackle-bottle-green"  title="Crackle Bottle Green Wall Tile">
          Crackle Bottle Green Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        7.5 x 15 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size">
              <s class="card-price__regular">£95.00 / m²</s>
            
<span  class="card-price__sale">£78.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/crackle-bottle-green#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588804825278" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--15370319462782 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15370319462782 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15370319462782 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15370319462782 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15370319462782 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15370319462782 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15370319462782 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15370319462782 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--15370319462782">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-green-tile" title="Chelsea Green Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Chelsea-Green-04_3aae96a5-7024-4731-b02c-df80e74d6bc2faba.jpg?v=1750942527&amp;width=400" alt="Chelsea Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-04_3aae96a5-7024-4731-b02c-df80e74d6bc2.jpg?v=1750942527&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-04_3aae96a5-7024-4731-b02c-df80e74d6bc2.jpg?v=1750942527&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-04_3aae96a5-7024-4731-b02c-df80e74d6bc2.jpg?v=1750942527&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-green-tile" title="Chelsea Green Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Chelsea-Green-03_6d088a33-fd91-4d89-9106-85cc32509237faba.jpg?v=1750942527&amp;width=400" alt="Chelsea Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-03_6d088a33-fd91-4d89-9106-85cc32509237.jpg?v=1750942527&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-03_6d088a33-fd91-4d89-9106-85cc32509237.jpg?v=1750942527&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-03_6d088a33-fd91-4d89-9106-85cc32509237.jpg?v=1750942527&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-green-tile" title="Chelsea Green Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Chelsea-Green-02_887e5e45-b095-4eb3-8a48-4237ddf0ee3efaba.jpg?v=1750942527&amp;width=400" alt="Chelsea Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-02_887e5e45-b095-4eb3-8a48-4237ddf0ee3e.jpg?v=1750942527&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-02_887e5e45-b095-4eb3-8a48-4237ddf0ee3e.jpg?v=1750942527&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-02_887e5e45-b095-4eb3-8a48-4237ddf0ee3e.jpg?v=1750942527&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-green-tile" title="Chelsea Green Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Chelsea-Green-01_b9b1ae38-2840-4399-a550-930acdd14949faba.jpg?v=1750942527&amp;width=400" alt="Chelsea Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-01_b9b1ae38-2840-4399-a550-930acdd14949.jpg?v=1750942527&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-01_b9b1ae38-2840-4399-a550-930acdd14949.jpg?v=1750942527&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Green-01_b9b1ae38-2840-4399-a550-930acdd14949.jpg?v=1750942527&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/chelsea-green-tile"  title="Chelsea Green Tile">
          Chelsea Green Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        30 x 30 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£54.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/chelsea-green-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15370319462782" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--15615536562558 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15615536562558 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15615536562558 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15615536562558 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15615536562558 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15615536562558 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15615536562558 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15615536562558 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--15615536562558">
  
<div class="product-badges"><div class="product-badge_container" style="background-color: #40c351;">
            <span class="product-badge__label" style="color: #ffffff;">New in</span>
        </div></div>

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
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-green-tile" title="Aura Green Gloss Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Aura-Green-0482b0.jpg?v=1761215698&amp;width=400" alt="Aura Green Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-04.jpg?v=1761215698&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-04.jpg?v=1761215698&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-04.jpg?v=1761215698&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-green-tile" title="Aura Green Gloss Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Aura-Green-0182b0.jpg?v=1761215698&amp;width=400" alt="Aura Green Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-01.jpg?v=1761215698&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-01.jpg?v=1761215698&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-01.jpg?v=1761215698&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-green-tile" title="Aura Green Gloss Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Aura-Green-0282b0.jpg?v=1761215698&amp;width=400" alt="Aura Green Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-02.jpg?v=1761215698&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-02.jpg?v=1761215698&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Green-02.jpg?v=1761215698&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/aura-green-tile"  title="Aura Green Gloss Tile">
          Aura Green Gloss Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        29.5 x 59.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£32.40 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/aura-green-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15615536562558" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--15371247059326 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15371247059326 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15371247059326 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15371247059326 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15371247059326 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15371247059326 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15371247059326 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15371247059326 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--15371247059326">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/terrazzo-green-tile" title="Terrazzo Green Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Terrazzo-Green-0187b4.jpg?v=1753718194&amp;width=400" alt="Terrazzo Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo-Green-01.jpg?v=1753718194&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo-Green-01.jpg?v=1753718194&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo-Green-01.jpg?v=1753718194&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/terrazzo-green-tile" title="Terrazzo Green Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Terrazzo_Green_Tile87b4.jpg?v=1753718194&amp;width=400" alt="Terrazzo Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo_Green_Tile.jpg?v=1753718194&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo_Green_Tile.jpg?v=1753718194&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo_Green_Tile.jpg?v=1753718194&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/terrazzo-green-tile" title="Terrazzo Green Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Terrazzo-Green-020ae9.jpg?v=1750236075&amp;width=400" alt="Terrazzo Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo-Green-02.jpg?v=1750236075&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo-Green-02.jpg?v=1750236075&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo-Green-02.jpg?v=1750236075&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/terrazzo-green-tile"  title="Terrazzo Green Tile">
          Terrazzo Green Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        60 x 60 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£30.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/terrazzo-green-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15371247059326" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--15383780491646 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15383780491646 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15383780491646 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15383780491646 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15383780491646 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15383780491646 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15383780491646 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15383780491646 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--15383780491646">
  
<div class="product-badges"><div class="product-badge_container" style="background-color: #40c351;">
            <span class="product-badge__label" style="color: #ffffff;">New in</span>
        </div></div>

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
                <a href="https://www.porcelainsuperstore.co.uk/products/foundry-green" title="Foundry Green Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Foundry-Green-04c4d8.jpg?v=1748598521&amp;width=400" alt="Foundry Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-04.jpg?v=1748598521&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-04.jpg?v=1748598521&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-04.jpg?v=1748598521&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/foundry-green" title="Foundry Green Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Foundry-Green-01c4d8.jpg?v=1748598521&amp;width=400" alt="Foundry Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-01.jpg?v=1748598521&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-01.jpg?v=1748598521&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-01.jpg?v=1748598521&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/foundry-green" title="Foundry Green Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Foundry-Green-02c4d8.jpg?v=1748598521&amp;width=400" alt="Foundry Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-02.jpg?v=1748598521&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-02.jpg?v=1748598521&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-02.jpg?v=1748598521&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/foundry-green" title="Foundry Green Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Foundry-Green-03c4d8.jpg?v=1748598521&amp;width=400" alt="Foundry Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-03.jpg?v=1748598521&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-03.jpg?v=1748598521&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Foundry-Green-03.jpg?v=1748598521&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/foundry-green"  title="Foundry Green Tile">
          Foundry Green Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        60 x 120 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£52.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/foundry-green#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15383780491646" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588828713150 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588828713150 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588828713150 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588828713150 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588828713150 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588828713150 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588828713150 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588828713150 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588828713150">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/soulful-emerald" title="Soulful Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Soulful-Emerald-20d0b1.jpg?v=1737020532&amp;width=400" alt="Soulful Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-20.jpg?v=1737020532&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-20.jpg?v=1737020532&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-20.jpg?v=1737020532&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/soulful-emerald" title="Soulful Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Soulful-Emerald-21d0b1.jpg?v=1737020532&amp;width=400" alt="Soulful Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-21.jpg?v=1737020532&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-21.jpg?v=1737020532&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-21.jpg?v=1737020532&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/soulful-emerald" title="Soulful Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Soulful-Emerald-25_17c6021f-bae5-4967-94b4-502f61934981b59d.jpg?v=1737021264&amp;width=400" alt="Soulful Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-25_17c6021f-bae5-4967-94b4-502f61934981.jpg?v=1737021264&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-25_17c6021f-bae5-4967-94b4-502f61934981.jpg?v=1737021264&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-25_17c6021f-bae5-4967-94b4-502f61934981.jpg?v=1737021264&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/soulful-emerald" title="Soulful Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Soulful-Emerald-22b59d.jpg?v=1737021264&amp;width=400" alt="Soulful Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-22.jpg?v=1737021264&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-22.jpg?v=1737021264&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-22.jpg?v=1737021264&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/soulful-emerald" title="Soulful Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Soulful-Emerald-23b59d.jpg?v=1737021264&amp;width=400" alt="Soulful Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-23.jpg?v=1737021264&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-23.jpg?v=1737021264&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-23.jpg?v=1737021264&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/soulful-emerald" title="Soulful Emerald Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Soulful-Emerald-24_1ed4fff2-baee-4352-8dac-1fc63057a679b59d.jpg?v=1737021264&amp;width=400" alt="Soulful Emerald Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-24_1ed4fff2-baee-4352-8dac-1fc63057a679.jpg?v=1737021264&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-24_1ed4fff2-baee-4352-8dac-1fc63057a679.jpg?v=1737021264&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Soulful-Emerald-24_1ed4fff2-baee-4352-8dac-1fc63057a679.jpg?v=1737021264&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/soulful-emerald"  title="Soulful Emerald Wall Tile">
          Soulful Emerald Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        10 x 20 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£24.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/soulful-emerald#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588828713150" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--14979493101950 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--14979493101950 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--14979493101950 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--14979493101950 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--14979493101950 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--14979493101950 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--14979493101950 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--14979493101950 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--14979493101950">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/esme-green-patterned-tile" title="Esme Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Esme-Green-07079e.jpg?v=1741210092&amp;width=400" alt="Esme Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-07.jpg?v=1741210092&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-07.jpg?v=1741210092&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-07.jpg?v=1741210092&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/esme-green-patterned-tile" title="Esme Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Esme-Green-08079e.jpg?v=1741210092&amp;width=400" alt="Esme Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-08.jpg?v=1741210092&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-08.jpg?v=1741210092&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-08.jpg?v=1741210092&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/esme-green-patterned-tile" title="Esme Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Esme-Green-05079e.jpg?v=1741210092&amp;width=400" alt="Esme Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-05.jpg?v=1741210092&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-05.jpg?v=1741210092&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-05.jpg?v=1741210092&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/esme-green-patterned-tile" title="Esme Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Esme-Green-04079e.jpg?v=1741210092&amp;width=400" alt="Esme Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-04.jpg?v=1741210092&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-04.jpg?v=1741210092&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-04.jpg?v=1741210092&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/esme-green-patterned-tile" title="Esme Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Esme-Green-09079e.jpg?v=1741210092&amp;width=400" alt="Esme Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-09.jpg?v=1741210092&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-09.jpg?v=1741210092&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-09.jpg?v=1741210092&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/esme-green-patterned-tile" title="Esme Green Patterned Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Esme-Green-06079e.jpg?v=1741210092&amp;width=400" alt="Esme Green Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-06.jpg?v=1741210092&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-06.jpg?v=1741210092&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Esme-Green-06.jpg?v=1741210092&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/esme-green-patterned-tile"  title="Esme Green Patterned Tile">
          Esme Green Patterned Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        22.5 x 22.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£41.80 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/esme-green-patterned-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="14979493101950" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--14820915741054 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--14820915741054 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--14820915741054 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--14820915741054 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--14820915741054 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--14820915741054 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--14820915741054 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--14820915741054 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--14820915741054">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Moxie-Emerald-02546f.jpg?v=1731948098&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-02.jpg?v=1731948098&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-02.jpg?v=1731948098&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-02.jpg?v=1731948098&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Moxie-Emerald-082f88.jpg?v=1732633471&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-08.jpg?v=1732633471&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-08.jpg?v=1732633471&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-08.jpg?v=1732633471&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Moxie-Emerald-03546f.jpg?v=1731948098&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-03.jpg?v=1731948098&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-03.jpg?v=1731948098&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-03.jpg?v=1731948098&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Moxie-Emerald-052f88.jpg?v=1732633471&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-05.jpg?v=1732633471&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-05.jpg?v=1732633471&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-05.jpg?v=1732633471&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Moxie-Emerald-01546f.jpg?v=1731948098&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-01.jpg?v=1731948098&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-01.jpg?v=1731948098&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-01.jpg?v=1731948098&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Moxie-Emerald-092f88.jpg?v=1732633471&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-09.jpg?v=1732633471&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-09.jpg?v=1732633471&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-09.jpg?v=1732633471&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Moxie-Emerald-04546f.jpg?v=1731948098&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-04.jpg?v=1731948098&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-04.jpg?v=1731948098&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-04.jpg?v=1731948098&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 8">
                    <img src="../cdn/shop/files/Moxie-Emerald-06557c.jpg?v=1732633470&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-06.jpg?v=1732633470&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-06.jpg?v=1732633470&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-06.jpg?v=1732633470&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles" title="Moxie Emerald Kit Kat Tiles" data-preloadlink="true"><div class="image-snippet 9">
                    <img src="../cdn/shop/files/Moxie-Emerald-07557c.jpg?v=1732633470&amp;width=400" alt="Moxie Emerald Kit Kat Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-07.jpg?v=1732633470&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-07.jpg?v=1732633470&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-07.jpg?v=1732633470&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles"  title="Moxie Emerald Kit Kat Tiles">
          Moxie Emerald Kit Kat Tiles
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        35 x 35 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£52.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/moxie-emerald-kit-kat-tiles#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="14820915741054" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7297600028862 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7297600028862 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
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
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor" title="Fluted Emerald Decor Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/Fluted-Emeraold-Decor-05ad3d.jpg?v=1664559914&amp;width=400" alt="Fluted Emerald Decor Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-05.jpg?v=1664559914&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-05.jpg?v=1664559914&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-05.jpg?v=1664559914&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor" title="Fluted Emerald Decor Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Fluted-Emerald-Decor-09bcc2.jpg?v=1721233488&amp;width=400" alt="Fluted Emerald Decor Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-09.jpg?v=1721233488&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-09.jpg?v=1721233488&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-09.jpg?v=1721233488&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor" title="Fluted Emerald Decor Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/Fluted-Emeraold-Decor-03787b.jpg?v=1721233502&amp;width=400" alt="Fluted Emerald Decor Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-03.jpg?v=1721233502&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-03.jpg?v=1721233502&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Fluted-Emeraold-Decor-03.jpg?v=1721233502&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor" title="Fluted Emerald Decor Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Fluted-Emerald-Decor-10bcc2.jpg?v=1721233488&amp;width=400" alt="Fluted Emerald Decor Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-10.jpg?v=1721233488&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-10.jpg?v=1721233488&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-10.jpg?v=1721233488&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor" title="Fluted Emerald Decor Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Fluted-Emerald-Decor-06bcc2.jpg?v=1721233488&amp;width=400" alt="Fluted Emerald Decor Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-06.jpg?v=1721233488&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-06.jpg?v=1721233488&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-06.jpg?v=1721233488&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor" title="Fluted Emerald Decor Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Fluted-Emerald-Decor-11bcc2.jpg?v=1721233488&amp;width=400" alt="Fluted Emerald Decor Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-11.jpg?v=1721233488&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-11.jpg?v=1721233488&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-11.jpg?v=1721233488&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor" title="Fluted Emerald Decor Wall Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Fluted-Emerald-Decor-08_1fd32c11-c53b-4d4a-aa2c-262d4bb044cade0d.jpg?v=1721233727&amp;width=400" alt="Fluted Emerald Decor Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-08_1fd32c11-c53b-4d4a-aa2c-262d4bb044ca.jpg?v=1721233727&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-08_1fd32c11-c53b-4d4a-aa2c-262d4bb044ca.jpg?v=1721233727&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fluted-Emerald-Decor-08_1fd32c11-c53b-4d4a-aa2c-262d4bb044ca.jpg?v=1721233727&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor"  title="Fluted Emerald Decor Wall Tile">
          Fluted Emerald Decor Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        5 x 20 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£54.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/fluted-emerald-decor#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7297600028862" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--7885650198718 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7885650198718 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7885650198718 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7885650198718 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7885650198718 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7885650198718 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7885650198718 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7885650198718 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--7885650198718">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/noho-green-tile" title="Noho Green Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Noho-Green-0217b3.jpg?v=1715613017&amp;width=400" alt="Noho Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-02.jpg?v=1715613017&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-02.jpg?v=1715613017&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-02.jpg?v=1715613017&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/noho-green-tile" title="Noho Green Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Noho-Green-05_d1ceee0b-333a-4d3b-abd3-49c8768ff5d98826.jpg?v=1733508449&amp;width=400" alt="Noho Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-05_d1ceee0b-333a-4d3b-abd3-49c8768ff5d9.jpg?v=1733508449&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-05_d1ceee0b-333a-4d3b-abd3-49c8768ff5d9.jpg?v=1733508449&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-05_d1ceee0b-333a-4d3b-abd3-49c8768ff5d9.jpg?v=1733508449&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/noho-green-tile" title="Noho Green Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Noho-Green-04_2ee14264-9387-43ef-9805-b270155af2508826.jpg?v=1733508449&amp;width=400" alt="Noho Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-04_2ee14264-9387-43ef-9805-b270155af250.jpg?v=1733508449&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-04_2ee14264-9387-43ef-9805-b270155af250.jpg?v=1733508449&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-04_2ee14264-9387-43ef-9805-b270155af250.jpg?v=1733508449&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/noho-green-tile" title="Noho Green Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Noho-Green-03_2bd54bec-ed62-4d11-9969-e7e8475f2cca8826.jpg?v=1733508449&amp;width=400" alt="Noho Green Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-03_2bd54bec-ed62-4d11-9969-e7e8475f2cca.jpg?v=1733508449&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-03_2bd54bec-ed62-4d11-9969-e7e8475f2cca.jpg?v=1733508449&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Noho-Green-03_2bd54bec-ed62-4d11-9969-e7e8475f2cca.jpg?v=1733508449&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/noho-green-tile"  title="Noho Green Tile">
          Noho Green Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        4.8 x 45 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£62.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/noho-green-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7885650198718" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--7600824352958 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7600824352958 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7600824352958 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7600824352958 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7600824352958 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7600824352958 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7600824352958 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7600824352958 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--7600824352958">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/heath-jade" title="Heath Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Heath-Jade-1098ae.jpg?v=1710499565&amp;width=400" alt="Heath Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-10.jpg?v=1710499565&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-10.jpg?v=1710499565&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-10.jpg?v=1710499565&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/heath-jade" title="Heath Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Heath-Jade-0498ae.jpg?v=1710499565&amp;width=400" alt="Heath Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-04.jpg?v=1710499565&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-04.jpg?v=1710499565&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-04.jpg?v=1710499565&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/heath-jade" title="Heath Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Heath-Jade-11_9d1ced09-57d1-4b44-9749-c32c29ce4ee9ede5.jpg?v=1708080178&amp;width=400" alt="Heath Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-11_9d1ced09-57d1-4b44-9749-c32c29ce4ee9.jpg?v=1708080178&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-11_9d1ced09-57d1-4b44-9749-c32c29ce4ee9.jpg?v=1708080178&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-11_9d1ced09-57d1-4b44-9749-c32c29ce4ee9.jpg?v=1708080178&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/heath-jade" title="Heath Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Heath-Jade-1289db.jpg?v=1708080184&amp;width=400" alt="Heath Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-12.jpg?v=1708080184&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-12.jpg?v=1708080184&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Heath-Jade-12.jpg?v=1708080184&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/heath-jade"  title="Heath Jade Wall Tile">
          Heath Jade Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        10 x 10 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£52.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/heath-jade#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7600824352958" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--8020486684862 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--8020486684862 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--8020486684862 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--8020486684862 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--8020486684862 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--8020486684862 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--8020486684862 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--8020486684862 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--8020486684862">
  
<div class="product-badges"><div class="product-badge_container" style="background-color: #ffdc59;">
            <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
        </div></div>

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
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile" title="Dolce Vita Green Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Dolce-Vitta-Green-0692d5.jpg?v=1743672604&amp;width=400" alt="Dolce Vita Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-06.jpg?v=1743672604&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-06.jpg?v=1743672604&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-06.jpg?v=1743672604&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile" title="Dolce Vita Green Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="http://www.porcelainsuperstore.co.uk/cdn/shop/files/dolce-vita-green.webp?v=1715094344&amp;width=400" alt="Dolce Vita Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/dolce-vita-green.webp?v=1715094344&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/dolce-vita-green.webp?v=1715094344&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/dolce-vita-green.webp?v=1715094344&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile" title="Dolce Vita Green Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Dolce-Vitta-Green-0355a0.jpg?v=1715094344&amp;width=400" alt="Dolce Vita Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-03.jpg?v=1715094344&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-03.jpg?v=1715094344&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-03.jpg?v=1715094344&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile" title="Dolce Vita Green Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Dolce-Vitta-Green-0755a0.jpg?v=1715094344&amp;width=400" alt="Dolce Vita Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-07.jpg?v=1715094344&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-07.jpg?v=1715094344&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-07.jpg?v=1715094344&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile" title="Dolce Vita Green Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Dolce-Vitta-Green-0555a0.jpg?v=1715094344&amp;width=400" alt="Dolce Vita Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-05.jpg?v=1715094344&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-05.jpg?v=1715094344&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-05.jpg?v=1715094344&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile" title="Dolce Vita Green Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Dolce-Vitta-Green-02_00654667-a1d1-4e32-a27b-461bf170d1e11afd.jpg?v=1733843314&amp;width=400" alt="Dolce Vita Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-02_00654667-a1d1-4e32-a27b-461bf170d1e1.jpg?v=1733843314&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-02_00654667-a1d1-4e32-a27b-461bf170d1e1.jpg?v=1733843314&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-02_00654667-a1d1-4e32-a27b-461bf170d1e1.jpg?v=1733843314&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile" title="Dolce Vita Green Wall Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Dolce-Vitta-Green-041afd.jpg?v=1733843314&amp;width=400" alt="Dolce Vita Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-04.jpg?v=1733843314&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-04.jpg?v=1733843314&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dolce-Vitta-Green-04.jpg?v=1733843314&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile"  title="Dolce Vita Green Wall Tile">
          Dolce Vita Green Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        5.2 x 16 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£66.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/dolce-vita-green-wall-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="8020486684862" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588804530366 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588804530366 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588804530366 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588804530366 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588804530366 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588804530366 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588804530366 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588804530366 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588804530366">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage" title="Countrywide Sage Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Countrywide-Sage-034d98.jpg?v=1743671728&amp;width=400" alt="Countrywide Sage Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-03.jpg?v=1743671728&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-03.jpg?v=1743671728&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-03.jpg?v=1743671728&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage" title="Countrywide Sage Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/countrywide-sage_d1fd07ab-28ee-410f-a51d-b4b579aa8014403c.jpg?v=1764684868&amp;width=400" alt="Countrywide Sage Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/countrywide-sage_d1fd07ab-28ee-410f-a51d-b4b579aa8014.jpg?v=1764684868&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/countrywide-sage_d1fd07ab-28ee-410f-a51d-b4b579aa8014.jpg?v=1764684868&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/countrywide-sage_d1fd07ab-28ee-410f-a51d-b4b579aa8014.jpg?v=1764684868&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage" title="Countrywide Sage Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Countrywide-Sage-07403c.jpg?v=1764684868&amp;width=400" alt="Countrywide Sage Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-07.jpg?v=1764684868&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-07.jpg?v=1764684868&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-07.jpg?v=1764684868&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage" title="Countrywide Sage Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Countrywide-Sage-05403c.jpg?v=1764684868&amp;width=400" alt="Countrywide Sage Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-05.jpg?v=1764684868&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-05.jpg?v=1764684868&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-05.jpg?v=1764684868&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage" title="Countrywide Sage Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Countrywide-Sage-02403c.jpg?v=1764684868&amp;width=400" alt="Countrywide Sage Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-02.jpg?v=1764684868&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-02.jpg?v=1764684868&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-02.jpg?v=1764684868&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage" title="Countrywide Sage Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Countrywide-Sage-04403c.jpg?v=1764684868&amp;width=400" alt="Countrywide Sage Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-04.jpg?v=1764684868&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-04.jpg?v=1764684868&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-04.jpg?v=1764684868&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage" title="Countrywide Sage Wall Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Countrywide-Sage-01403c.jpg?v=1764684868&amp;width=400" alt="Countrywide Sage Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-01.jpg?v=1764684868&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-01.jpg?v=1764684868&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-01.jpg?v=1764684868&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage" title="Countrywide Sage Wall Tile" data-preloadlink="true"><div class="image-snippet 8">
                    <img src="../cdn/shop/files/Countrywide-Sage-08403c.jpg?v=1764684868&amp;width=400" alt="Countrywide Sage Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-08.jpg?v=1764684868&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-08.jpg?v=1764684868&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Countrywide-Sage-08.jpg?v=1764684868&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage"  title="Countrywide Sage Wall Tile">
          Countrywide Sage Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        7.5 x 30 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£54.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/countrywide-sage#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588804530366" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588822192318 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588822192318 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588822192318 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588822192318 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588822192318 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588822192318 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588822192318 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588822192318 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588822192318">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/moorish-verde" title="Moorish Verde Patterned Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Moorish-Verde-01f3fc.jpg?v=1712054618&amp;width=400" alt="Moorish Verde Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-01.jpg?v=1712054618&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-01.jpg?v=1712054618&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-01.jpg?v=1712054618&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moorish-verde" title="Moorish Verde Patterned Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/products/moorish-verde-3f3fc.jpg?v=1712054618&amp;width=400" alt="Moorish Verde Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/moorish-verde-3.jpg?v=1712054618&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/moorish-verde-3.jpg?v=1712054618&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/moorish-verde-3.jpg?v=1712054618&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moorish-verde" title="Moorish Verde Patterned Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Moorish-Verde-02_b2edd9d2-894b-4524-8177-5dbce5ca1f29f3fc.jpg?v=1712054618&amp;width=400" alt="Moorish Verde Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-02_b2edd9d2-894b-4524-8177-5dbce5ca1f29.jpg?v=1712054618&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-02_b2edd9d2-894b-4524-8177-5dbce5ca1f29.jpg?v=1712054618&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-02_b2edd9d2-894b-4524-8177-5dbce5ca1f29.jpg?v=1712054618&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/moorish-verde" title="Moorish Verde Patterned Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Moorish-Verde-03f3fc.jpg?v=1712054618&amp;width=400" alt="Moorish Verde Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-03.jpg?v=1712054618&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-03.jpg?v=1712054618&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moorish-Verde-03.jpg?v=1712054618&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/moorish-verde"  title="Moorish Verde Patterned Tile">
          Moorish Verde Patterned Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        12.5 x 12.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£63.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/moorish-verde#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588822192318" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588825174206 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588825174206 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588825174206 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588825174206 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588825174206 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588825174206 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588825174206 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588825174206 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588825174206">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/palm-springs-green" title="Palm Springs Green Hexagon Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/hhpsgn_419f2.jpg?v=1690902204&amp;width=400" alt="Palm Springs Green Hexagon Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_4.jpg?v=1690902204&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_4.jpg?v=1690902204&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_4.jpg?v=1690902204&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/palm-springs-green" title="Palm Springs Green Hexagon Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/products/hhpsgn_119f2.jpg?v=1690902204&amp;width=400" alt="Palm Springs Green Hexagon Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_1.jpg?v=1690902204&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_1.jpg?v=1690902204&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_1.jpg?v=1690902204&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/palm-springs-green" title="Palm Springs Green Hexagon Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/hhpsgn_319f2.jpg?v=1690902204&amp;width=400" alt="Palm Springs Green Hexagon Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_3.jpg?v=1690902204&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_3.jpg?v=1690902204&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_3.jpg?v=1690902204&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/palm-springs-green" title="Palm Springs Green Hexagon Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/products/hhpsgn19f2.jpg?v=1690902204&amp;width=400" alt="Palm Springs Green Hexagon Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn.jpg?v=1690902204&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn.jpg?v=1690902204&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn.jpg?v=1690902204&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/palm-springs-green" title="Palm Springs Green Hexagon Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/products/hhpsgn_219f2.jpg?v=1690902204&amp;width=400" alt="Palm Springs Green Hexagon Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_2.jpg?v=1690902204&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_2.jpg?v=1690902204&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/hhpsgn_2.jpg?v=1690902204&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/palm-springs-green"  title="Palm Springs Green Hexagon Tile">
          Palm Springs Green Hexagon Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        14 x 16 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£39.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/palm-springs-green#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588825174206" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588799189182 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588799189182 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588799189182 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588799189182 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588799189182 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588799189182 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588799189182 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588799189182 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588799189182">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/artiste-verde-mix" title="Artiste Verde Mix Patterned Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/aqa_sta_ve_3bb28.jpg?v=1617961805&amp;width=400" alt="Artiste Verde Mix Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_3.jpg?v=1617961805&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_3.jpg?v=1617961805&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_3.jpg?v=1617961805&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/artiste-verde-mix" title="Artiste Verde Mix Patterned Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/products/aqa_sta_ve_1bb28.jpg?v=1617961805&amp;width=400" alt="Artiste Verde Mix Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_1.jpg?v=1617961805&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_1.jpg?v=1617961805&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_1.jpg?v=1617961805&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/artiste-verde-mix" title="Artiste Verde Mix Patterned Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/aqa_sta_ve_2bb28.jpg?v=1617961805&amp;width=400" alt="Artiste Verde Mix Patterned Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_2.jpg?v=1617961805&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_2.jpg?v=1617961805&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/aqa_sta_ve_2.jpg?v=1617961805&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/artiste-verde-mix"  title="Artiste Verde Mix Patterned Tile">
          Artiste Verde Mix Patterned Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        15 x 15 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£74.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/artiste-verde-mix#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588799189182" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588796633278 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588796633278 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588796633278 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588796633278 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588796633278 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588796633278 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588796633278 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588796633278 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588796633278">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green" title="Albert's Racing Green Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Alberts-Racing-Green-01_57b99091-3035-433c-a0ac-d5eddf60566663d2.jpg?v=1764870665&amp;width=400" alt="Albert&#39;s Racing Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-01_57b99091-3035-433c-a0ac-d5eddf605666.jpg?v=1764870665&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-01_57b99091-3035-433c-a0ac-d5eddf605666.jpg?v=1764870665&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-01_57b99091-3035-433c-a0ac-d5eddf605666.jpg?v=1764870665&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green" title="Albert's Racing Green Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Alberts-Racing-Green-02_9e1b6fde-394e-4f79-a54f-ef9d9b8e69e463d2.jpg?v=1764870665&amp;width=400" alt="Albert&#39;s Racing Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-02_9e1b6fde-394e-4f79-a54f-ef9d9b8e69e4.jpg?v=1764870665&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-02_9e1b6fde-394e-4f79-a54f-ef9d9b8e69e4.jpg?v=1764870665&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-02_9e1b6fde-394e-4f79-a54f-ef9d9b8e69e4.jpg?v=1764870665&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green" title="Albert's Racing Green Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/va03193_c63d2.jpg?v=1764870665&amp;width=400" alt="Albert&#39;s Racing Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/va03193_c.jpg?v=1764870665&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/va03193_c.jpg?v=1764870665&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/va03193_c.jpg?v=1764870665&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green" title="Albert's Racing Green Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Alberts-Racing-Green-06_1ad7160a-a65b-456a-80f7-093a3a7ae8b063d2.jpg?v=1764870665&amp;width=400" alt="Albert&#39;s Racing Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-06_1ad7160a-a65b-456a-80f7-093a3a7ae8b0.jpg?v=1764870665&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-06_1ad7160a-a65b-456a-80f7-093a3a7ae8b0.jpg?v=1764870665&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-06_1ad7160a-a65b-456a-80f7-093a3a7ae8b0.jpg?v=1764870665&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green" title="Albert's Racing Green Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Alberts-Racing-Green-05_1803769f-04b2-4995-9dcb-b727659968fa63d2.jpg?v=1764870665&amp;width=400" alt="Albert&#39;s Racing Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-05_1803769f-04b2-4995-9dcb-b727659968fa.jpg?v=1764870665&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-05_1803769f-04b2-4995-9dcb-b727659968fa.jpg?v=1764870665&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-05_1803769f-04b2-4995-9dcb-b727659968fa.jpg?v=1764870665&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green" title="Albert's Racing Green Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Alberts-Racing-Green-03_0e5048df-49e0-445f-acd6-e5284c3eb6da63d2.jpg?v=1764870665&amp;width=400" alt="Albert&#39;s Racing Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-03_0e5048df-49e0-445f-acd6-e5284c3eb6da.jpg?v=1764870665&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-03_0e5048df-49e0-445f-acd6-e5284c3eb6da.jpg?v=1764870665&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-03_0e5048df-49e0-445f-acd6-e5284c3eb6da.jpg?v=1764870665&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green" title="Albert's Racing Green Wall Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Alberts-Racing-Green-04_69906608-78f8-4090-bd93-f0cef2a46d2d63d2.jpg?v=1764870665&amp;width=400" alt="Albert&#39;s Racing Green Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-04_69906608-78f8-4090-bd93-f0cef2a46d2d.jpg?v=1764870665&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-04_69906608-78f8-4090-bd93-f0cef2a46d2d.jpg?v=1764870665&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Alberts-Racing-Green-04_69906608-78f8-4090-bd93-f0cef2a46d2d.jpg?v=1764870665&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green"  title="Albert's Racing Green Wall Tile">
          Albert's Racing Green Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        7.5 x 15 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£79.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/alberts-racing-green#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588796633278" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
<li
                    class="grid__item"
                    
                  >
                    


<style data-shopify>

  .cl-product-card .swiper-pagination--progress-bar{
    border-radius: 0;
    margin-top: 0;
  }

  .cl-product-card .swiper-pagination--progress-bar .swiper-pagination-progressbar-fill{
    border-radius: 0;
  }

  .cl-product-card .btn--atc{
    text-transform: unset;
  }

  .cl-product-card--rich.cl-product-card--6588801908926 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588801908926 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588801908926 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588801908926 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588801908926 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588801908926 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588801908926 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588801908926 .swiper:hover
    .product-card__slider-navigation .new-swiper-button {
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 800px){
    .cl-product-card-info .card-price.mobile-size--14{
      font-size: 14px;
    }
  }

</style>
<div class="cl-product-card cl-product-card--rich cl-product-card--6588801908926">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/chalk-jade" title="Chalk Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/21243_b_104e0.jpg?v=1617963661&amp;width=400" alt="Chalk Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/21243_b_1.jpg?v=1617963661&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/21243_b_1.jpg?v=1617963661&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/21243_b_1.jpg?v=1617963661&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chalk-jade" title="Chalk Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/products/21243_a_104e0.jpg?v=1617963661&amp;width=400" alt="Chalk Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/21243_a_1.jpg?v=1617963661&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/21243_a_1.jpg?v=1617963661&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/21243_a_1.jpg?v=1617963661&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chalk-jade" title="Chalk Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/chalk-jade04e0.jpg?v=1617963661&amp;width=400" alt="Chalk Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/chalk-jade.jpg?v=1617963661&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/chalk-jade.jpg?v=1617963661&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/chalk-jade.jpg?v=1617963661&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chalk-jade" title="Chalk Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/products/21243_d04e0.jpg?v=1617963661&amp;width=400" alt="Chalk Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/21243_d.jpg?v=1617963661&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/21243_d.jpg?v=1617963661&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/21243_d.jpg?v=1617963661&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chalk-jade" title="Chalk Jade Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/products/21243_c60c5.jpg?v=1616750689&amp;width=400" alt="Chalk Jade Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/21243_c.jpg?v=1616750689&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/21243_c.jpg?v=1616750689&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/21243_c.jpg?v=1616750689&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
        </ul>
        <div class="product-card__slider-navigation">
          <button class="new-swiper-button icon-button swiper-button-prev--template--26303100092798__native_collection_nPVQGD" prev>
            
    <svg width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    

    
          </button>
          <button class="new-swiper-button icon-button swiper-button-next--template--26303100092798__native_collection_nPVQGD" next>
            
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2"/>
    </svg>    
    
    
          </button>
        </div>
        <div class="swiper-pagination--progress-bar"></div>
      </div>
    </swiper-slider>
  
  

    

    
      
        
          
            
            
          
            
              
              
        
      
    
  

  
  <div
    class="cl-product-card-info
    
    ">
    
      
      <h3 class="cl-product-card-name bold" data-aid="product-card">
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/chalk-jade"  title="Chalk Jade Wall Tile">
          Chalk Jade Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        7.5 x 15 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£44.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/chalk-jade#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588801908926" 
        data-yotpo-cart-product-id="" 
        data-yotpo-section-id="collection">
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
                  </li></ul><footer class="pagination-snippet" role="navigation">
  <div class="container">
    <ol><li class="previous disabled">
          <span aria-hidden="true">&laquo;</span>
          Previous <span class="visually-hidden">page</span>
        </li><li class="active" aria-current="page">
              <span class="visually-hidden">page</span> <span>1</span>
            </li><li>
            <a href="green-tiles4658.html?page=2">
              <span class="visually-hidden">page</span> <span>2</span>
            </a>
          </li><li>
            <a href="green-tiles9ba9.html?page=3">
              <span class="visually-hidden">page</span> <span>3</span>
            </a>
          </li><li class="next">
          <a href="green-tiles4658.html?page=2">
             Next<span class="visually-hidden">page</span>
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li></ol>
  </div>
</footer>

</div></div>
      </div>
    </div></div>



</div><div id="shopify-section-template--26303100092798__1694466118e809c2bc" class="shopify-section">



</div><div id="shopify-section-template--26303100092798__shogun-below" class="shopify-section">




</div><div id="shopify-section-template--26303100092798__shogun-optimizer" class="shopify-section">




</div>
    </main>

@endsection 
@push('js')

@endpush