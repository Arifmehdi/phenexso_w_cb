@extends('website.layouts.master')

@section('title', 'Shop - '. env('APP_NAME'))

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
    <main role="main" id="MainContent">
      
      <div id="shopify-section-template--26303100092798__native_collection_nPVQGD" class="shopify-section section">

      <!-- jksajksadfjhjfhsadjfhsjkdfjksdfkjsdf hsdjkfhjksdhfkjdshfjksdhfjkasdhf  -->
          <style>
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




<!-- sdflksfasjkfjaskfjksladfjklsdjflkasdflkdfkaslkfalskdfjklsjfkjadkfjakfjsdfjksd fjjdf  -->

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
      
        <span>Bathroom Tiles</span>
      
    
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

    <div class="text-container truncated-container read-more-container text-center" data-total-chars="645" data-chars="255" data-line-height="1.5">
      <h1 class="h3 title" style="">Bathroom Tiles</h1>
        
            <div class="read-more-content">
                <p>With an extensive range of colours and designs, we have bathroom tiles to suit any home. Made from ceramic and porcelain, they are waterproof and easy to maintain - a practical choice for wet and steamy rooms, in other words. Whatever your style, you're sure to find the perfect tile for your bathroom, shower or luxury en-suite.<br><span style="text-decoration: underline; color: rgb(53, 140, 159);"><a href="https://www.porcelainsuperstore.co.uk/blogs/buying-guides/bathroom-tiles-buying-guide-2023" title="Bathroom Tiles buying guide" style="color: rgb(53, 140, 159); text-decoration: underline;">Bathroom tiles buying guide</a></span></p>
            </div> 
            <div class="read-more__button-container">
              <button class="read-more-toggle site-link site-link--underline">Read more</button>    
            </div>
            
        

        

        

        
        
        <div class=" swiper-wrapper-no-nav  ">
        

          <swiper-slider class="" data-options='{
  "speed": 500,
  "loop": false,
  "autoplay": false,
  "initialSlide": 0,
  "slidesPerView": 3.5,
  "centeredSlides": false,
  "spaceBetween": 14,
  "breakpoints": {
      "900": {
        "slidesPerView": 4,
        "centeredSlides": false
      },
      "1200": {
        "slidesPerView": 6
      }
  },
  "navigation": {
  "nextEl": ".swiper-button-next--template--26303100092798__native_collection_nPVQGD",
  "prevEl": ".swiper-button-prev--template--26303100092798__native_collection_nPVQGD"
  },
  "pagination": false
  }'>
            <div class="swiper js-guard-snap">
              <ul class="blocks-slider swiper-wrapper">
                
                      <li class="swiper-slide swiper-slide--auto-height" >
                        
                          <a class="image-link-block text-center center" href="white-bathroom-tiles.html" style="width: 100%;">
                              <div class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                                  <img src="../cdn/shop/files/Lusso-Gold-013046.jpg?v=1693912776&amp;width=750" alt="Lusso Gold Bathroom Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-01.jpg?v=1693912776&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-01.jpg?v=1693912776&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-01.jpg?v=1693912776&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-01.jpg?v=1693912776&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-01.jpg?v=1693912776&amp;width=750 750w" sizes="100vw">
                                  
                              </div>
                              
                              
                              <p class="image-link-block__title text-body text-body--smaller text--bold">
                                  White
                              </p>
                          </a>
                          
                      </li>
                  
                      <li class="swiper-slide swiper-slide--auto-height" >
                        
                          <a class="image-link-block text-center center" href="beige-bathroom-tiles.html" style="width: 100%;">
                              <div class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                                  <img src="../cdn/shop/products/Locke-Almond-04c57b.jpg?v=1652359291&amp;width=750" alt="Locke Almond - Beige Porcelain Tiles for Bathroom Walls &amp; Kitchen Floors - 32 x 62.5 cm, Matt" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-04.jpg?v=1652359291&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-04.jpg?v=1652359291&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-04.jpg?v=1652359291&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-04.jpg?v=1652359291&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-04.jpg?v=1652359291&amp;width=750 750w" sizes="100vw">
                                  
                              </div>
                              
                              
                              <p class="image-link-block__title text-body text-body--smaller text--bold">
                                  Beige
                              </p>
                          </a>
                          
                      </li>
                  
                      <li class="swiper-slide swiper-slide--auto-height" >
                        
                          <a class="image-link-block text-center center" href="grey-bathroom-tiles.html" style="width: 100%;">
                              <div class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                                  <img src="../cdn/shop/files/Motion-Grey-30x60-060310.jpg?v=1696497645&amp;width=750" alt="" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Grey-30x60-06.jpg?v=1696497645&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Grey-30x60-06.jpg?v=1696497645&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Grey-30x60-06.jpg?v=1696497645&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Grey-30x60-06.jpg?v=1696497645&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Grey-30x60-06.jpg?v=1696497645&amp;width=750 750w" sizes="100vw">
                                  
                              </div>
                              
                              
                              <p class="image-link-block__title text-body text-body--smaller text--bold">
                                  Grey
                              </p>
                          </a>
                          
                      </li>
                  
                      <li class="swiper-slide swiper-slide--auto-height" >
                        
                          <a class="image-link-block text-center center" href="green-tiles.html" style="width: 100%;">
                              <div class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                                  <img src="../cdn/shop/files/Marais-Green-094708.jpg?v=1757413576&amp;width=750" alt="" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Marais-Green-09.jpg?v=1757413576&amp;width=750 750w" sizes="100vw">
                                  
                              </div>
                              
                              
                              <p class="image-link-block__title text-body text-body--smaller text--bold">
                                  Green
                              </p>
                          </a>
                          
                      </li>
                  
                      <li class="swiper-slide swiper-slide--auto-height" >
                        
                          <a class="image-link-block text-center center" href="floor-tiles.html" style="width: 100%;">
                              <div class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                                  <img src="../cdn/shop/products/Montpellier-Ivory-60x120-06e010.jpg?v=1669040410&amp;width=750" alt="" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Montpellier-Ivory-60x120-06.jpg?v=1669040410&amp;width=750 750w" sizes="100vw">
                                  
                              </div>
                              
                              
                              <p class="image-link-block__title text-body text-body--smaller text--bold">
                                  Floor
                              </p>
                          </a>
                          
                      </li>
                  
                      <li class="swiper-slide swiper-slide--auto-height" >
                        
                          <a class="image-link-block text-center center" href="wall-tiles.html" style="width: 100%;">
                              <div class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                                  <img src="../cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchenfc48.jpg?v=1669909275&amp;width=750" alt="" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/White_Herringbone_Wall_Tiles_in_Modern_Kitchen.jpg?v=1669909275&amp;width=750 750w" sizes="100vw">
                                  
                              </div>
                              
                              
                              <p class="image-link-block__title text-body text-body--smaller text--bold">
                                  Wall
                              </p>
                          </a>
                          
                      </li>
                  
              </ul>
            </div>
          </swiper-slider>


          


        
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
                    <a href="bathroom-tiles.html" class="active-facets__button-remove underline">
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
  value="Beige"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-1"
  title="Beige"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_beige_small5f74.jpg?v=1783742319593636031);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Beige</span> (84)
                              </span>
                              <span class="visually-hidden">Beige (84 products)
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
  value="Black"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-2"
  title="Black"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_black_small843c.jpg?v=8956519011751195913);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Black</span> (34)
                              </span>
                              <span class="visually-hidden">Black (34 products)
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
  value="Blue"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-3"
  title="Blue"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_blue_small6836.jpg?v=15256520960457269895);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Blue</span> (75)
                              </span>
                              <span class="visually-hidden">Blue (75 products)
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
  value="Brown"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-4"
  title="Brown"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_brown_small3fbc.jpg?v=338346258807019803);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Brown</span> (11)
                              </span>
                              <span class="visually-hidden">Brown (11 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-5"
  name="filter.p.m.custom.filter_colour"
  value="Green"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-5"
  title="Green"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_green_small867e.jpg?v=3497274801390206174);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Green</span> (69)
                              </span>
                              <span class="visually-hidden">Green (69 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-6"
  name="filter.p.m.custom.filter_colour"
  value="Grey"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-6"
  title="Grey"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_grey_small1742.jpg?v=5667096436932717727);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Grey</span> (52)
                              </span>
                              <span class="visually-hidden">Grey (52 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-7"
  name="filter.p.m.custom.filter_colour"
  value="Pink"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-7"
  title="Pink"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_pink_smalld822.jpg?v=10552249410871022836);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Pink</span> (25)
                              </span>
                              <span class="visually-hidden">Pink (25 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-8"
  name="filter.p.m.custom.filter_colour"
  value="Red"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-8"
  title="Red"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_red_small798a.jpg?v=11032106754366766923);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Red</span> (12)
                              </span>
                              <span class="visually-hidden">Red (12 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-9"
  name="filter.p.m.custom.filter_colour"
  value="Terracotta"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-9"
  title="Terracotta"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_terracotta_small3af8.jpg?v=16253344334556971899);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Terracotta</span> (18)
                              </span>
                              <span class="visually-hidden">Terracotta (18 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-10"
  name="filter.p.m.custom.filter_colour"
  value="White"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-10"
  title="White"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_white_small259a.jpg?v=1913405391209899642);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">White</span> (127)
                              </span>
                              <span class="visually-hidden">White (127 products)
                              </span>
</label>

                                  </div>
                                </div></li>
<li class="list-menu__item facets__item"><div class="facets__label facet-checkbox facet-swatch 
">
                                  <div class="swatch-input-wrapper">
                                    

<input
  type="checkbox"
  id="Filter-filter.p.m.custom.filter_colour-11"
  name="filter.p.m.custom.filter_colour"
  value="Yellow"
  form="FacetFiltersForm"
  class="swatch-input__input"
  
  
  
>
<label
  for="Filter-filter.p.m.custom.filter_colour-11"
  title="Yellow"
  class="swatch-input__label"
>
  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_yellow_small3b52.jpg?v=6340306962666864116);"
  
></span>

  <span class="facet-checkbox__text" aria-hidden="true">
                                <span class="facet-checkbox__text-label">Yellow</span> (3)
                              </span>
                              <span class="visually-hidden">Yellow (3 products)
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
                                <span class="facet-checkbox__text-label">Floor</span> (267)
                              </span>
                              <span class="visually-hidden">Floor (267 products)
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
                                <span class="facet-checkbox__text-label">Wall</span> (456)
                              </span>
                              <span class="visually-hidden">Wall (456 products)
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
                                <span class="facet-checkbox__text-label">Small</span> (293)
                              </span>
                              <span class="visually-hidden">Small (293 products)
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
                                <span class="facet-checkbox__text-label">Medium</span> (114)
                              </span>
                              <span class="visually-hidden">Medium (114 products)
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
                                <span class="facet-checkbox__text-label">Large</span> (59)
                              </span>
                              <span class="visually-hidden">Large (59 products)
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
                                <span class="facet-checkbox__text-label">Extra Large</span> (60)
                              </span>
                              <span class="visually-hidden">Extra Large (60 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.v.m.product.filter_size-5" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.v.m.product.filter_size"
                                    value="Modular"
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
                                <span class="facet-checkbox__text-label">Modular</span> (1)
                              </span>
                              <span class="visually-hidden">Modular (1 product)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.v.m.product.filter_size-6" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.v.m.product.filter_size"
                                    value="Mosaic"
                                    id="Filter-filter.v.m.product.filter_size-6"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Mosaic</span> (32)
                              </span>
                              <span class="visually-hidden">Mosaic (32 products)
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
                                <span class="facet-checkbox__text-label">Classic</span> (59)
                              </span>
                              <span class="visually-hidden">Classic (59 products)
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
                                <span class="facet-checkbox__text-label">Luxury</span> (92)
                              </span>
                              <span class="visually-hidden">Luxury (92 products)
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
                                <span class="facet-checkbox__text-label">Modern</span> (169)
                              </span>
                              <span class="visually-hidden">Modern (169 products)
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
                                <span class="facet-checkbox__text-label">Patterned</span> (56)
                              </span>
                              <span class="visually-hidden">Patterned (56 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-5" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Rustic"
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
                                <span class="facet-checkbox__text-label">Rustic</span> (29)
                              </span>
                              <span class="visually-hidden">Rustic (29 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-6" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Stone"
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
                                <span class="facet-checkbox__text-label">Stone</span> (1)
                              </span>
                              <span class="visually-hidden">Stone (1 product)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-7" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Victorian"
                                    id="Filter-filter.p.m.custom.filter_tile_style-7"
                                    
                                    
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
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_style-8" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_style"
                                    value="Vintage"
                                    id="Filter-filter.p.m.custom.filter_tile_style-8"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Vintage</span> (108)
                              </span>
                              <span class="visually-hidden">Vintage (108 products)
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
                                <span class="facet-checkbox__text-label">Gloss</span> (228)
                              </span>
                              <span class="visually-hidden">Gloss (228 products)
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
                                <span class="facet-checkbox__text-label">Matt</span> (287)
                              </span>
                              <span class="visually-hidden">Matt (287 products)
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
                                    value="Chevron"
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
                                <span class="facet-checkbox__text-label">Chevron</span> (3)
                              </span>
                              <span class="visually-hidden">Chevron (3 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-2" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Diamond"
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
                                <span class="facet-checkbox__text-label">Diamond</span> (7)
                              </span>
                              <span class="visually-hidden">Diamond (7 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-3" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Fishscale"
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
                                <span class="facet-checkbox__text-label">Fishscale</span> (4)
                              </span>
                              <span class="visually-hidden">Fishscale (4 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-4" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Hexagon"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-4"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Hexagon</span> (27)
                              </span>
                              <span class="visually-hidden">Hexagon (27 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-5" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Modular"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-5"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Modular</span> (1)
                              </span>
                              <span class="visually-hidden">Modular (1 product)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-6" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Mosaic"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-6"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Mosaic</span> (6)
                              </span>
                              <span class="visually-hidden">Mosaic (6 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-7" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Picket"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-7"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Picket</span> (2)
                              </span>
                              <span class="visually-hidden">Picket (2 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-8" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Plank"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-8"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Plank</span> (10)
                              </span>
                              <span class="visually-hidden">Plank (10 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-9" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Rectangle"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-9"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Rectangle</span> (293)
                              </span>
                              <span class="visually-hidden">Rectangle (293 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_shape-10" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_shape"
                                    value="Square"
                                    id="Filter-filter.p.m.custom.filter_tile_shape-10"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Square</span> (158)
                              </span>
                              <span class="visually-hidden">Square (158 products)
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
                                <span class="facet-checkbox__text-label">Ceramic</span> (215)
                              </span>
                              <span class="visually-hidden">Ceramic (215 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_material-2" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_material"
                                    value="Glass"
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
                                <span class="facet-checkbox__text-label">Glass</span> (11)
                              </span>
                              <span class="visually-hidden">Glass (11 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_material-3" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_material"
                                    value="Marble"
                                    id="Filter-filter.p.m.custom.filter_tile_material-3"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Marble</span> (2)
                              </span>
                              <span class="visually-hidden">Marble (2 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_material-4" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_material"
                                    value="Natural Stone"
                                    id="Filter-filter.p.m.custom.filter_tile_material-4"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Natural Stone</span> (2)
                              </span>
                              <span class="visually-hidden">Natural Stone (2 products)
                              </span>
                                </label></li>
<li class="list-menu__item facets__item"><label for="Filter-filter.p.m.custom.filter_tile_material-5" class="facets__label facet-checkbox 
">
                                  <input
                                    type="checkbox"
                                    name="filter.p.m.custom.filter_tile_material"
                                    value="Porcelain"
                                    id="Filter-filter.p.m.custom.filter_tile_material-5"
                                    
                                    
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
                                <span class="facet-checkbox__text-label">Porcelain</span> (285)
                              </span>
                              <span class="visually-hidden">Porcelain (285 products)
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
                                  value="Beige"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-1"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_beige_small5f74.jpg?v=1783742319593636031);"
  
></span>

                                  Beige
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
                                  value="Black"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-2"
                                  
                                  
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
                                for="Filter-filter.p.m.custom.filter_colour-mobile-3"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Blue"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-3"
                                  
                                  
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
                                for="Filter-filter.p.m.custom.filter_colour-mobile-4"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Brown"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-4"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_brown_small3fbc.jpg?v=338346258807019803);"
  
></span>

                                  Brown
                                </div>
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-5"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Green"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-5"
                                  
                                  
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
                                for="Filter-filter.p.m.custom.filter_colour-mobile-6"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Grey"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-6"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_grey_small1742.jpg?v=5667096436932717727);"
  
></span>

                                  Grey
                                </div>
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-7"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Pink"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-7"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_pink_smalld822.jpg?v=10552249410871022836);"
  
></span>

                                  Pink
                                </div>
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-8"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Red"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-8"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_red_small798a.jpg?v=11032106754366766923);"
  
></span>

                                  Red
                                </div>
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-9"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Terracotta"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-9"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_terracotta_small3af8.jpg?v=16253344334556971899);"
  
></span>

                                  Terracotta
                                </div>
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-10"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="White"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-10"
                                  
                                  
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
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_colour-mobile-11"
                                class="facets__label mobile-facets__label  facet-swatch   "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_colour"
                                  value="Yellow"
                                  id="Filter-filter.p.m.custom.filter_colour-mobile-11"
                                  
                                  
                                >
                                <div
                                  for=""
                                  title="FilterListValueDrop"
                                  class="swatch-input__label"
                                >
                                  
<span
  
    class="swatch"
    style="--swatch--background: url(../cdn/shop/files/swatch_yellow_small3b52.jpg?v=6340306962666864116);"
  
></span>

                                  Yellow
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

                                <span class="facet-checkbox__text" aria-hidden="true">Floor (267)</span
                                >
                                <span class="visually-hidden">Floor (267 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Wall (456)</span
                                >
                                <span class="visually-hidden">Wall (456 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Small (293)</span
                                >
                                <span class="visually-hidden">Small (293 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Medium (114)</span
                                >
                                <span class="visually-hidden">Medium (114 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Large (59)</span
                                >
                                <span class="visually-hidden">Large (59 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Extra Large (60)</span
                                >
                                <span class="visually-hidden">Extra Large (60 products)</span
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
                                  value="Modular"
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

                                <span class="facet-checkbox__text" aria-hidden="true">Modular (1)</span
                                >
                                <span class="visually-hidden">Modular (1 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.v.m.product.filter_size-mobile-6"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.v.m.product.filter_size"
                                  value="Mosaic"
                                  id="Filter-filter.v.m.product.filter_size-mobile-6"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Mosaic (32)</span
                                >
                                <span class="visually-hidden">Mosaic (32 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Classic (59)</span
                                >
                                <span class="visually-hidden">Classic (59 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Luxury (92)</span
                                >
                                <span class="visually-hidden">Luxury (92 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Modern (169)</span
                                >
                                <span class="visually-hidden">Modern (169 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Patterned (56)</span
                                >
                                <span class="visually-hidden">Patterned (56 products)</span
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
                                  value="Rustic"
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

                                <span class="facet-checkbox__text" aria-hidden="true">Rustic (29)</span
                                >
                                <span class="visually-hidden">Rustic (29 products)</span
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
                                  value="Stone"
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

                                <span class="facet-checkbox__text" aria-hidden="true">Stone (1)</span
                                >
                                <span class="visually-hidden">Stone (1 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_style-mobile-7"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_style"
                                  value="Victorian"
                                  id="Filter-filter.p.m.custom.filter_tile_style-mobile-7"
                                  
                                  
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
                                for="Filter-filter.p.m.custom.filter_tile_style-mobile-8"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_style"
                                  value="Vintage"
                                  id="Filter-filter.p.m.custom.filter_tile_style-mobile-8"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Vintage (108)</span
                                >
                                <span class="visually-hidden">Vintage (108 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Gloss (228)</span
                                >
                                <span class="visually-hidden">Gloss (228 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Matt (287)</span
                                >
                                <span class="visually-hidden">Matt (287 products)</span
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
                                  value="Chevron"
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

                                <span class="facet-checkbox__text" aria-hidden="true">Chevron (3)</span
                                >
                                <span class="visually-hidden">Chevron (3 products)</span
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
                                  value="Diamond"
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

                                <span class="facet-checkbox__text" aria-hidden="true">Diamond (7)</span
                                >
                                <span class="visually-hidden">Diamond (7 products)</span
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
                                  value="Fishscale"
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

                                <span class="facet-checkbox__text" aria-hidden="true">Fishscale (4)</span
                                >
                                <span class="visually-hidden">Fishscale (4 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-4"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Hexagon"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-4"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Hexagon (27)</span
                                >
                                <span class="visually-hidden">Hexagon (27 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-5"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Modular"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-5"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Modular (1)</span
                                >
                                <span class="visually-hidden">Modular (1 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-6"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Mosaic"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-6"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Mosaic (6)</span
                                >
                                <span class="visually-hidden">Mosaic (6 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-7"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Picket"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-7"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Picket (2)</span
                                >
                                <span class="visually-hidden">Picket (2 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-8"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Plank"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-8"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Plank (10)</span
                                >
                                <span class="visually-hidden">Plank (10 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-9"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Rectangle"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-9"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Rectangle (293)</span
                                >
                                <span class="visually-hidden">Rectangle (293 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_shape-mobile-10"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_shape"
                                  value="Square"
                                  id="Filter-filter.p.m.custom.filter_tile_shape-mobile-10"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Square (158)</span
                                >
                                <span class="visually-hidden">Square (158 products)</span
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

                                <span class="facet-checkbox__text" aria-hidden="true">Ceramic (215)</span
                                >
                                <span class="visually-hidden">Ceramic (215 products)</span
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
                                  value="Glass"
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

                                <span class="facet-checkbox__text" aria-hidden="true">Glass (11)</span
                                >
                                <span class="visually-hidden">Glass (11 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_material-mobile-3"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_material"
                                  value="Marble"
                                  id="Filter-filter.p.m.custom.filter_tile_material-mobile-3"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Marble (2)</span
                                >
                                <span class="visually-hidden">Marble (2 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_material-mobile-4"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_material"
                                  value="Natural Stone"
                                  id="Filter-filter.p.m.custom.filter_tile_material-mobile-4"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Natural Stone (2)</span
                                >
                                <span class="visually-hidden">Natural Stone (2 products)</span
                                >
                                
                              </label>
                            </li>
      <!-- HOOK -->
                            <li class="mobile-facets__item list-menu__item">                              
                              <label
                                for="Filter-filter.p.m.custom.filter_tile_material-mobile-5"
                                class="facets__label mobile-facets__label  "
                              >
                                
                                <input
                                  class="mobile-facets__checkbox"
                                  type="checkbox"
                                  name="filter.p.m.custom.filter_tile_material"
                                  value="Porcelain"
                                  id="Filter-filter.p.m.custom.filter_tile_material-mobile-5"
                                  
                                  
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

                                <span class="facet-checkbox__text" aria-hidden="true">Porcelain (285)</span
                                >
                                <span class="visually-hidden">Porcelain (285 products)</span
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
        <span class="button__text" id="ProductCount">515 products
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
                  <span id="ProductCountDesktop">515 products
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

  .cl-product-card--rich.cl-product-card--7755408867518 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7755408867518 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7755408867518 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7755408867518 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7755408867518 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7755408867518 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7755408867518 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7755408867518 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--7755408867518">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/lounge-ivory" title="Lounge Ivory Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Lounge-Ivory-01d79b.jpg?v=1693909870&amp;width=400" alt="Lounge Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-01.jpg?v=1693909870&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-01.jpg?v=1693909870&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-01.jpg?v=1693909870&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/lounge-ivory" title="Lounge Ivory Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Lounge-Ivory-020e0b.jpg?v=1693914686&amp;width=400" alt="Lounge Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-02.jpg?v=1693914686&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-02.jpg?v=1693914686&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-02.jpg?v=1693914686&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/lounge-ivory" title="Lounge Ivory Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Lounge-Ivory-03b605.jpg?v=1694164401&amp;width=400" alt="Lounge Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-03.jpg?v=1694164401&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-03.jpg?v=1694164401&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lounge-Ivory-03.jpg?v=1694164401&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/lounge-ivory"  title="Lounge Ivory Tile">
          Lounge Ivory Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        Various Sizes
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span>from </span><span data-price-per-meter-squared class="card-price__regular">£29.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/lounge-ivory#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7755408867518" 
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

  .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7203618062526 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7203618062526 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--7203618062526">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor" title="Locke Almond Decor Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/Locke-Almond-Decor-02adc4.jpg?v=1652359323&amp;width=400" alt="Locke Almond Decor Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-02.jpg?v=1652359323&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-02.jpg?v=1652359323&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-02.jpg?v=1652359323&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor" title="Locke Almond Decor Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Locke-Almond-Decor-018d64.jpg?v=1739443502&amp;width=400" alt="Locke Almond Decor Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-01.jpg?v=1739443502&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-01.jpg?v=1739443502&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-01.jpg?v=1739443502&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor" title="Locke Almond Decor Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/Locke-Almond-Decor-038d64.jpg?v=1739443502&amp;width=400" alt="Locke Almond Decor Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-03.jpg?v=1739443502&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-03.jpg?v=1739443502&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Locke-Almond-Decor-03.jpg?v=1739443502&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor" title="Locke Almond Decor Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Locke-Almond-Decor-058d64.jpg?v=1739443502&amp;width=400" alt="Locke Almond Decor Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-05.jpg?v=1739443502&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-05.jpg?v=1739443502&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Locke-Almond-Decor-05.jpg?v=1739443502&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor"  title="Locke Almond Decor Tile">
          Locke Almond Decor Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        32 x 62.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£51.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/locke-almond-decor#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7203618062526" 
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

  .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7464710504638 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7464710504638 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--7464710504638">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor" title="Pantheon Ivory Fluted Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/Pantheon-Ivory-Decor-02fb78.jpg?v=1681730436&amp;width=400" alt="Pantheon Ivory Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-02.jpg?v=1681730436&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-02.jpg?v=1681730436&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-02.jpg?v=1681730436&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor" title="Pantheon Ivory Fluted Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Pantheon-Ivory-Decor-013b77.jpg?v=1739443262&amp;width=400" alt="Pantheon Ivory Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-01.jpg?v=1739443262&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-01.jpg?v=1739443262&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-01.jpg?v=1739443262&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor" title="Pantheon Ivory Fluted Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/Pantheon-Ivory-Decor-033b77.jpg?v=1739443262&amp;width=400" alt="Pantheon Ivory Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-03.jpg?v=1739443262&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-03.jpg?v=1739443262&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-Decor-03.jpg?v=1739443262&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor" title="Pantheon Ivory Fluted Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Pantheon-Ivory-Decor-06_2f446d7d-0105-4a23-ac45-11b05d4b2b4e3b77.jpg?v=1739443262&amp;width=400" alt="Pantheon Ivory Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-06_2f446d7d-0105-4a23-ac45-11b05d4b2b4e.jpg?v=1739443262&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-06_2f446d7d-0105-4a23-ac45-11b05d4b2b4e.jpg?v=1739443262&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-06_2f446d7d-0105-4a23-ac45-11b05d4b2b4e.jpg?v=1739443262&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor" title="Pantheon Ivory Fluted Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Pantheon-Ivory-Decor-07_067a309a-9935-4bb8-9d2d-c3fe5b2724ca3b77.jpg?v=1739443262&amp;width=400" alt="Pantheon Ivory Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-07_067a309a-9935-4bb8-9d2d-c3fe5b2724ca.jpg?v=1739443262&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-07_067a309a-9935-4bb8-9d2d-c3fe5b2724ca.jpg?v=1739443262&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-Decor-07_067a309a-9935-4bb8-9d2d-c3fe5b2724ca.jpg?v=1739443262&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor"  title="Pantheon Ivory Fluted Tile">
          Pantheon Ivory Fluted Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        32 x 62.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£52.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory-decor#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7464710504638" 
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

  .cl-product-card--rich.cl-product-card--6588833988798 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588833988798 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588833988798 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588833988798 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588833988798 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588833988798 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588833988798 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588833988798 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--6588833988798">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/zellige-pearl" title="Zellige Pearl Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/Zellige-Pearl-00d5b4.jpg?v=1741631213&amp;width=400" alt="Zellige Pearl Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Zellige-Pearl-00.jpg?v=1741631213&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Zellige-Pearl-00.jpg?v=1741631213&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Zellige-Pearl-00.jpg?v=1741631213&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/zellige-pearl" title="Zellige Pearl Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Zellige-Pearl-06d5b4.jpg?v=1741631213&amp;width=400" alt="Zellige Pearl Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-06.jpg?v=1741631213&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-06.jpg?v=1741631213&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-06.jpg?v=1741631213&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/zellige-pearl" title="Zellige Pearl Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Zellige-Pearl-040af0.jpg?v=1741201473&amp;width=400" alt="Zellige Pearl Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-04.jpg?v=1741201473&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-04.jpg?v=1741201473&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-04.jpg?v=1741201473&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/zellige-pearl" title="Zellige Pearl Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Zellige-Pearl-030af0.jpg?v=1741201473&amp;width=400" alt="Zellige Pearl Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-03.jpg?v=1741201473&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-03.jpg?v=1741201473&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-03.jpg?v=1741201473&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/zellige-pearl" title="Zellige Pearl Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/products/apsope0af0.jpg?v=1741201473&amp;width=400" alt="Zellige Pearl Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/apsope.jpg?v=1741201473&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/apsope.jpg?v=1741201473&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/apsope.jpg?v=1741201473&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/zellige-pearl" title="Zellige Pearl Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Zellige-Pearl-0891ad.jpg?v=1743676840&amp;width=400" alt="Zellige Pearl Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-08.jpg?v=1743676840&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-08.jpg?v=1743676840&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Zellige-Pearl-08.jpg?v=1743676840&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/zellige-pearl"  title="Zellige Pearl Wall Tile">
          Zellige Pearl Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        13 x 13 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£57.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/zellige-pearl#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588833988798" 
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

  .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7464710602942 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--7464710602942">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory" title="Pantheon Ivory Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/Pantheon-Ivory-05e231.jpg?v=1681730428&amp;width=400" alt="Pantheon Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-05.jpg?v=1681730428&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-05.jpg?v=1681730428&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-05.jpg?v=1681730428&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory" title="Pantheon Ivory Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Pantheon-Ivory-017e66.jpg?v=1739443184&amp;width=400" alt="Pantheon Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-01.jpg?v=1739443184&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-01.jpg?v=1739443184&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-01.jpg?v=1739443184&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory" title="Pantheon Ivory Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/Pantheon-Ivory-047e66.jpg?v=1739443184&amp;width=400" alt="Pantheon Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-04.jpg?v=1739443184&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-04.jpg?v=1739443184&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-04.jpg?v=1739443184&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory" title="Pantheon Ivory Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Pantheon-Ivory-06_efd16233-a958-4673-9003-3cfe232e0ce47e66.jpg?v=1739443184&amp;width=400" alt="Pantheon Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-06_efd16233-a958-4673-9003-3cfe232e0ce4.jpg?v=1739443184&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-06_efd16233-a958-4673-9003-3cfe232e0ce4.jpg?v=1739443184&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-06_efd16233-a958-4673-9003-3cfe232e0ce4.jpg?v=1739443184&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory" title="Pantheon Ivory Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/products/Pantheon-Ivory-037e66.jpg?v=1739443184&amp;width=400" alt="Pantheon Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-03.jpg?v=1739443184&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-03.jpg?v=1739443184&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Pantheon-Ivory-03.jpg?v=1739443184&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory" title="Pantheon Ivory Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Pantheon-Ivory-08_f3251afc-1997-4fa4-bd95-327c64ebc8f47e66.jpg?v=1739443184&amp;width=400" alt="Pantheon Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-08_f3251afc-1997-4fa4-bd95-327c64ebc8f4.jpg?v=1739443184&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-08_f3251afc-1997-4fa4-bd95-327c64ebc8f4.jpg?v=1739443184&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pantheon-Ivory-08_f3251afc-1997-4fa4-bd95-327c64ebc8f4.jpg?v=1739443184&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory"  title="Pantheon Ivory Tile">
          Pantheon Ivory Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        32 x 62.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£42.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/pantheon-ivory#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7464710602942" 
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

  .cl-product-card--rich.cl-product-card--6588801515710 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588801515710 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588801515710 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588801515710 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588801515710 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588801515710 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588801515710 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588801515710 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--6588801515710">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/celine-crema" title="Celine Crema Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Celine-Crema-01792f.jpg?v=1759504409&amp;width=400" alt="Celine Crema Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-01.jpg?v=1759504409&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-01.jpg?v=1759504409&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-01.jpg?v=1759504409&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/celine-crema" title="Celine Crema Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Celine-Crema-15ae19.jpg?v=1759923061&amp;width=400" alt="Celine Crema Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-15.jpg?v=1759923061&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-15.jpg?v=1759923061&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-15.jpg?v=1759923061&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/celine-crema" title="Celine Crema Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Celine-Crema-16ae19.jpg?v=1759923061&amp;width=400" alt="Celine Crema Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-16.jpg?v=1759923061&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-16.jpg?v=1759923061&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-16.jpg?v=1759923061&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/celine-crema" title="Celine Crema Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Celine-Crema-17ae19.jpg?v=1759923061&amp;width=400" alt="Celine Crema Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-17.jpg?v=1759923061&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-17.jpg?v=1759923061&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-17.jpg?v=1759923061&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/celine-crema" title="Celine Crema Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Celine-Crema-14ea19.jpg?v=1759847492&amp;width=400" alt="Celine Crema Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-14.jpg?v=1759847492&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-14.jpg?v=1759847492&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-14.jpg?v=1759847492&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/celine-crema" title="Celine Crema Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Celine-Crema-18ea19.jpg?v=1759847492&amp;width=400" alt="Celine Crema Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-18.jpg?v=1759847492&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-18.jpg?v=1759847492&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-18.jpg?v=1759847492&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/celine-crema" title="Celine Crema Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Celine-Crema-13ea19.jpg?v=1759847492&amp;width=400" alt="Celine Crema Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-13.jpg?v=1759847492&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-13.jpg?v=1759847492&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Celine-Crema-13.jpg?v=1759847492&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/celine-crema"  title="Celine Crema Tile">
          Celine Crema Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        32 x 62.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£33.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/celine-crema#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588801515710" 
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

  .cl-product-card--rich.cl-product-card--15320726143358 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15320726143358 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15320726143358 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15320726143358 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15320726143358 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15320726143358 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15320726143358 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15320726143358 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15320726143358">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile" title="Wenlow Brick Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Wenlow-brick-08b8b6.jpg?v=1745944664&amp;width=400" alt="Wenlow Brick Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-08.jpg?v=1745944664&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-08.jpg?v=1745944664&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-08.jpg?v=1745944664&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile" title="Wenlow Brick Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Wenlow-brick-03b8b6.jpg?v=1745944664&amp;width=400" alt="Wenlow Brick Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-03.jpg?v=1745944664&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-03.jpg?v=1745944664&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-03.jpg?v=1745944664&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile" title="Wenlow Brick Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Wenlow-brick-09b8b6.jpg?v=1745944664&amp;width=400" alt="Wenlow Brick Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-09.jpg?v=1745944664&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-09.jpg?v=1745944664&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-09.jpg?v=1745944664&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile" title="Wenlow Brick Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Wenlow-brick-04b8b6.jpg?v=1745944664&amp;width=400" alt="Wenlow Brick Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-04.jpg?v=1745944664&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-04.jpg?v=1745944664&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-04.jpg?v=1745944664&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile" title="Wenlow Brick Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Wenlow-brick-05b8b6.jpg?v=1745944664&amp;width=400" alt="Wenlow Brick Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-05.jpg?v=1745944664&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-05.jpg?v=1745944664&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-05.jpg?v=1745944664&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile" title="Wenlow Brick Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Wenlow-brick-06b8b6.jpg?v=1745944664&amp;width=400" alt="Wenlow Brick Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-06.jpg?v=1745944664&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-06.jpg?v=1745944664&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-06.jpg?v=1745944664&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile" title="Wenlow Brick Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Wenlow-brick-07b8b6.jpg?v=1745944664&amp;width=400" alt="Wenlow Brick Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-07.jpg?v=1745944664&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-07.jpg?v=1745944664&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Wenlow-brick-07.jpg?v=1745944664&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile"  title="Wenlow Brick Tile">
          Wenlow Brick Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        7 x 28 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£43.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/wenlow-brick-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15320726143358" 
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

  .cl-product-card--rich.cl-product-card--8274261803198 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--8274261803198 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--8274261803198 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--8274261803198 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--8274261803198 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--8274261803198 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--8274261803198 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--8274261803198 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--8274261803198">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Chelsea-Checkerboard-N_W-08b813.jpg?v=1724241129&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Chelsea-Checkerboard-N_W-04_a73f760a-c783-4ecc-ac1e-e95b42703633fd1a.jpg?v=1724073729&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-04_a73f760a-c783-4ecc-ac1e-e95b42703633.jpg?v=1724073729&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-04_a73f760a-c783-4ecc-ac1e-e95b42703633.jpg?v=1724073729&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-04_a73f760a-c783-4ecc-ac1e-e95b42703633.jpg?v=1724073729&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Chelsea-Checkerboard-N_W-055a73.jpg?v=1724070202&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-05.jpg?v=1724070202&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-05.jpg?v=1724070202&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-05.jpg?v=1724070202&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Chelsea-Checkerboard-N_W-02fda8.jpg?v=1722871061&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-02.jpg?v=1722871061&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-02.jpg?v=1722871061&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-02.jpg?v=1722871061&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Chelsea-Checkerboard-N_W-06b813.jpg?v=1724241129&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-06.jpg?v=1724241129&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-06.jpg?v=1724241129&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-06.jpg?v=1724241129&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Chelsea-Checkerboard-N_W-03fda8.jpg?v=1722871061&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-03.jpg?v=1722871061&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-03.jpg?v=1722871061&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-03.jpg?v=1722871061&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Chelsea-Nero-030401.jpg?v=1724070213&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Nero-03.jpg?v=1724070213&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Nero-03.jpg?v=1724070213&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Nero-03.jpg?v=1724070213&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 8">
                    <img src="../cdn/shop/files/Chelsea-Checkerboard-N_W-07b813.jpg?v=1724241129&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-07.jpg?v=1724241129&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-07.jpg?v=1724241129&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-07.jpg?v=1724241129&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix" title="Chelsea Classic Mix Tile" data-preloadlink="true"><div class="image-snippet 9">
                    <img src="../cdn/shop/files/Chelsea-White-07_dc9f1a20-c4e9-494b-879e-cb794d987bc8e204.jpg?v=1724070230&amp;width=400" alt="Chelsea Classic Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-White-07_dc9f1a20-c4e9-494b-879e-cb794d987bc8.jpg?v=1724070230&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-White-07_dc9f1a20-c4e9-494b-879e-cb794d987bc8.jpg?v=1724070230&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-White-07_dc9f1a20-c4e9-494b-879e-cb794d987bc8.jpg?v=1724070230&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix"  title="Chelsea Classic Mix Tile">
          Chelsea Classic Mix Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        30 x 30 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      

        <div class="card-price mobile-size--14 metafield-price-per-size">
          
<span>£142.50 / Pack</span>
            
</div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/chelsea-classic-mix#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="8274261803198" 
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

  .cl-product-card--rich.cl-product-card--7577998065854 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7577998065854 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7577998065854 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7577998065854 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7577998065854 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7577998065854 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7577998065854 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7577998065854 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--7577998065854">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/dune" title="Dune Floor & Wall Tiles" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Dune-018aa5.jpg?v=1759922982&amp;width=400" alt="Dune Floor &amp; Wall Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dune-01.jpg?v=1759922982&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dune-01.jpg?v=1759922982&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dune-01.jpg?v=1759922982&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dune" title="Dune Floor & Wall Tiles" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/products/Palma-Avorio-048aa5.jpg?v=1759922982&amp;width=400" alt="Dune Floor &amp; Wall Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-04.jpg?v=1759922982&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-04.jpg?v=1759922982&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-04.jpg?v=1759922982&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dune" title="Dune Floor & Wall Tiles" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Dune-02079a.jpg?v=1764668521&amp;width=400" alt="Dune Floor &amp; Wall Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Dune-02.jpg?v=1764668521&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dune-02.jpg?v=1764668521&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Dune-02.jpg?v=1764668521&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dune" title="Dune Floor & Wall Tiles" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/products/Palma-Avorio-16079a.jpg?v=1764668521&amp;width=400" alt="Dune Floor &amp; Wall Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-16.jpg?v=1764668521&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-16.jpg?v=1764668521&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-16.jpg?v=1764668521&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dune" title="Dune Floor & Wall Tiles" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/products/Palma-Avorio-10079a.jpg?v=1764668521&amp;width=400" alt="Dune Floor &amp; Wall Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-10.jpg?v=1764668521&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-10.jpg?v=1764668521&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-10.jpg?v=1764668521&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dune" title="Dune Floor & Wall Tiles" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/products/Palma-Avorio-12079a.jpg?v=1764668521&amp;width=400" alt="Dune Floor &amp; Wall Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-12.jpg?v=1764668521&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-12.jpg?v=1764668521&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-12.jpg?v=1764668521&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/dune" title="Dune Floor & Wall Tiles" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/products/Palma-Avorio-1437c5.jpg?v=1764667812&amp;width=400" alt="Dune Floor &amp; Wall Tiles" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-14.jpg?v=1764667812&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-14.jpg?v=1764667812&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Palma-Avorio-14.jpg?v=1764667812&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/dune"  title="Dune Floor & Wall Tiles">
          Dune Floor & Wall Tiles
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        32 x 62 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£39.60 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/dune#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7577998065854" 
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

  .cl-product-card--rich.cl-product-card--6588801843390 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588801843390 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588801843390 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588801843390 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588801843390 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588801843390 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588801843390 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588801843390 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--6588801843390">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/cemento-light-grey" title="Cemento Light Grey Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Cemento-Light-Grey-30x60-07a8ff.jpg?v=1757416707&amp;width=400" alt="Cemento Light Grey Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-07.jpg?v=1757416707&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-07.jpg?v=1757416707&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-07.jpg?v=1757416707&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/cemento-light-grey" title="Cemento Light Grey Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Cemento-Light-Grey-30x60-04a8ff.jpg?v=1757416707&amp;width=400" alt="Cemento Light Grey Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-04.jpg?v=1757416707&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-04.jpg?v=1757416707&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-04.jpg?v=1757416707&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/cemento-light-grey" title="Cemento Light Grey Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Cemento-Light-Grey-60x60-06a8ff.jpg?v=1757416707&amp;width=400" alt="Cemento Light Grey Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-06.jpg?v=1757416707&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-06.jpg?v=1757416707&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-06.jpg?v=1757416707&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/cemento-light-grey" title="Cemento Light Grey Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Cemento-Light-Grey-60x60-04a8ff.jpg?v=1757416707&amp;width=400" alt="Cemento Light Grey Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-04.jpg?v=1757416707&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-04.jpg?v=1757416707&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-04.jpg?v=1757416707&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/cemento-light-grey" title="Cemento Light Grey Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Cemento-Light-Grey-30x60-05a8ff.jpg?v=1757416707&amp;width=400" alt="Cemento Light Grey Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-05.jpg?v=1757416707&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-05.jpg?v=1757416707&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-30x60-05.jpg?v=1757416707&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/cemento-light-grey" title="Cemento Light Grey Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Cemento-Light-Grey-60x60-05a8ff.jpg?v=1757416707&amp;width=400" alt="Cemento Light Grey Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-05.jpg?v=1757416707&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-05.jpg?v=1757416707&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Cemento-Light-Grey-60x60-05.jpg?v=1757416707&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/cemento-light-grey"  title="Cemento Light Grey Tile">
          Cemento Light Grey Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        Various Sizes
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span>from </span><span data-price-per-meter-squared class="card-price__regular">£31.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/cemento-light-grey#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588801843390" 
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

  .cl-product-card--rich.cl-product-card--6588822454462 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588822454462 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588822454462 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588822454462 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588822454462 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588822454462 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588822454462 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588822454462 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--6588822454462">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-sand" title="Motion Sand Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/products/a033920-1810a.jpg?v=1618233442&amp;width=400" alt="Motion Sand Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-1.jpg?v=1618233442&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-1.jpg?v=1618233442&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-1.jpg?v=1618233442&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-sand" title="Motion Sand Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/products/a033920-3810a.jpg?v=1618233442&amp;width=400" alt="Motion Sand Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-3.jpg?v=1618233442&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-3.jpg?v=1618233442&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-3.jpg?v=1618233442&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-sand" title="Motion Sand Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/a033920-2810a.jpg?v=1618233442&amp;width=400" alt="Motion Sand Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-2.jpg?v=1618233442&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-2.jpg?v=1618233442&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033920-2.jpg?v=1618233442&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-sand" title="Motion Sand Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/products/Motion-Sand-60x60-01d2f0.jpg?v=1658938798&amp;width=400" alt="Motion Sand Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-01.jpg?v=1658938798&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-01.jpg?v=1658938798&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-01.jpg?v=1658938798&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-sand" title="Motion Sand Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/products/Motion-Sand-60x60-034145.jpg?v=1658938805&amp;width=400" alt="Motion Sand Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-03.jpg?v=1658938805&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-03.jpg?v=1658938805&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-03.jpg?v=1658938805&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-sand" title="Motion Sand Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/products/Motion-Sand-60x60-024145.jpg?v=1658938805&amp;width=400" alt="Motion Sand Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-02.jpg?v=1658938805&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-02.jpg?v=1658938805&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Sand-60x60-02.jpg?v=1658938805&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/motion-sand"  title="Motion Sand Tile">
          Motion Sand Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        Various Sizes
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
        
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span>from </span><span data-price-per-meter-squared class="card-price__regular">£33.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/motion-sand#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588822454462" 
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

  .cl-product-card--rich.cl-product-card--6588822356158 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--6588822356158 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--6588822356158 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--6588822356158 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--6588822356158 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--6588822356158 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--6588822356158 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--6588822356158 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--6588822356158">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Motion-Light-30x60-049afd.jpg?v=1716411170&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-30x60-04.jpg?v=1716411170&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-30x60-04.jpg?v=1716411170&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-30x60-04.jpg?v=1716411170&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/products/a033869-39afd.jpg?v=1716411170&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-3.jpg?v=1716411170&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-3.jpg?v=1716411170&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-3.jpg?v=1716411170&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/products/motion-light-60x609afd.jpg?v=1716411170&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/motion-light-60x60.jpg?v=1716411170&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/motion-light-60x60.jpg?v=1716411170&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/motion-light-60x60.jpg?v=1716411170&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/products/a033869-13450.jpg?v=1696497677&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-1.jpg?v=1696497677&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-1.jpg?v=1696497677&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-1.jpg?v=1696497677&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Motion-Light-60x60-093450.jpg?v=1696497677&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-60x60-09.jpg?v=1696497677&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-60x60-09.jpg?v=1696497677&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-60x60-09.jpg?v=1696497677&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/products/motion-light-60x60-23450.jpg?v=1696497677&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/motion-light-60x60-2.jpg?v=1696497677&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/motion-light-60x60-2.jpg?v=1696497677&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/motion-light-60x60-2.jpg?v=1696497677&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/products/a033869-23450.jpg?v=1696497677&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-2.jpg?v=1696497677&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-2.jpg?v=1696497677&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/a033869-2.jpg?v=1696497677&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 8">
                    <img src="../cdn/shop/products/Motion-Light-60x60-023450.jpg?v=1696497677&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Light-60x60-02.jpg?v=1696497677&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Light-60x60-02.jpg?v=1696497677&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/Motion-Light-60x60-02.jpg?v=1696497677&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/motion-light" title="Motion Light Tile" data-preloadlink="true"><div class="image-snippet 9">
                    <img src="../cdn/shop/files/Motion-Light-30x60-053450.jpg?v=1696497677&amp;width=400" alt="Motion Light Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-30x60-05.jpg?v=1696497677&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-30x60-05.jpg?v=1696497677&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Motion-Light-30x60-05.jpg?v=1696497677&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/motion-light"  title="Motion Light Tile">
          Motion Light Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        Various Sizes
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
        
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span>from </span><span data-price-per-meter-squared class="card-price__regular">£33.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/motion-light#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="6588822356158" 
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

  .cl-product-card--rich.cl-product-card--7692203524286 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7692203524286 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7692203524286 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7692203524286 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7692203524286 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7692203524286 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7692203524286 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7692203524286 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--7692203524286">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished" title="Destiny White Polished Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Destiny-White-Polished-30x60-02cde2.jpg?v=1690389219&amp;width=400" alt="Destiny White Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-02.jpg?v=1690389219&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-02.jpg?v=1690389219&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-02.jpg?v=1690389219&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished" title="Destiny White Polished Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Destiny-White-Polished-30x60-01cde2.jpg?v=1690389219&amp;width=400" alt="Destiny White Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-01.jpg?v=1690389219&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-01.jpg?v=1690389219&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-01.jpg?v=1690389219&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished" title="Destiny White Polished Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Destiny-White-Polished-30x60-03cde2.jpg?v=1690389219&amp;width=400" alt="Destiny White Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-03.jpg?v=1690389219&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-03.jpg?v=1690389219&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-30x60-03.jpg?v=1690389219&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished" title="Destiny White Polished Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Destiny-White-Polished-60x60-01cde2.jpg?v=1690389219&amp;width=400" alt="Destiny White Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x60-01.jpg?v=1690389219&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x60-01.jpg?v=1690389219&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x60-01.jpg?v=1690389219&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished" title="Destiny White Polished Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Destiny-White-Polished-60x120-02cde2.jpg?v=1690389219&amp;width=400" alt="Destiny White Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-02.jpg?v=1690389219&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-02.jpg?v=1690389219&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-02.jpg?v=1690389219&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished" title="Destiny White Polished Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Destiny-White-Polished-60x120-03cde2.jpg?v=1690389219&amp;width=400" alt="Destiny White Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-03.jpg?v=1690389219&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-03.jpg?v=1690389219&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-03.jpg?v=1690389219&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished" title="Destiny White Polished Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Destiny-White-Polished-60x120-01cde2.jpg?v=1690389219&amp;width=400" alt="Destiny White Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-01.jpg?v=1690389219&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-01.jpg?v=1690389219&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Destiny-White-Polished-60x120-01.jpg?v=1690389219&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished"  title="Destiny White Polished Tile">
          Destiny White Polished Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        Various Sizes
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
        
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span>from </span><span data-price-per-meter-squared class="card-price__regular">£36.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/destiny-white-polished#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7692203524286" 
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

  .cl-product-card--rich.cl-product-card--15348093026686 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15348093026686 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15348093026686 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15348093026686 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15348093026686 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15348093026686 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15348093026686 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15348093026686 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15348093026686">
  

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
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-sky-wall-tile" title="Farrow Sky Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Farrow-Sky-0773e9.jpg?v=1749039699&amp;width=400" alt="Farrow Sky Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-07.jpg?v=1749039699&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-07.jpg?v=1749039699&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-07.jpg?v=1749039699&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-sky-wall-tile" title="Farrow Sky Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Farrow-Sky-0373e9.jpg?v=1749039699&amp;width=400" alt="Farrow Sky Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-03.jpg?v=1749039699&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-03.jpg?v=1749039699&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-03.jpg?v=1749039699&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-sky-wall-tile" title="Farrow Sky Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Farrow-Sky-0473e9.jpg?v=1749039699&amp;width=400" alt="Farrow Sky Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-04.jpg?v=1749039699&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-04.jpg?v=1749039699&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-04.jpg?v=1749039699&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-sky-wall-tile" title="Farrow Sky Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Farrow-Sky-055e57.jpg?v=1748001294&amp;width=400" alt="Farrow Sky Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-05.jpg?v=1748001294&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-05.jpg?v=1748001294&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-05.jpg?v=1748001294&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-sky-wall-tile" title="Farrow Sky Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Farrow-Sky-0608a4.jpg?v=1747918976&amp;width=400" alt="Farrow Sky Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-06.jpg?v=1747918976&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-06.jpg?v=1747918976&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Sky-06.jpg?v=1747918976&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/farrow-sky-wall-tile"  title="Farrow Sky Wall Tile">
          Farrow Sky Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        10 x 20 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size">
              <s class="card-price__regular">£47.14 / m²</s>
            
<span  class="card-price__sale">£33.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/farrow-sky-wall-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15348093026686" 
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

  .cl-product-card--rich.cl-product-card--15348097581438 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15348097581438 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15348097581438 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15348097581438 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15348097581438 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15348097581438 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15348097581438 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15348097581438 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15348097581438">
  

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
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-stone-wall-tile" title="Farrow Stone Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Farrow-Linen-089df6.jpg?v=1749039926&amp;width=400" alt="Farrow Stone Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Linen-08.jpg?v=1749039926&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Linen-08.jpg?v=1749039926&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Linen-08.jpg?v=1749039926&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-stone-wall-tile" title="Farrow Stone Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Farrow-Stone-067054.jpg?v=1749039914&amp;width=400" alt="Farrow Stone Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-06.jpg?v=1749039914&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-06.jpg?v=1749039914&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-06.jpg?v=1749039914&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-stone-wall-tile" title="Farrow Stone Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Farrow-Stone-057054.jpg?v=1749039914&amp;width=400" alt="Farrow Stone Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-05.jpg?v=1749039914&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-05.jpg?v=1749039914&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-05.jpg?v=1749039914&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-stone-wall-tile" title="Farrow Stone Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Farrow-Stone-047054.jpg?v=1749039914&amp;width=400" alt="Farrow Stone Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-04.jpg?v=1749039914&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-04.jpg?v=1749039914&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-04.jpg?v=1749039914&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-stone-wall-tile" title="Farrow Stone Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Farrow-Stone-077054.jpg?v=1749039914&amp;width=400" alt="Farrow Stone Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-07.jpg?v=1749039914&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-07.jpg?v=1749039914&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-07.jpg?v=1749039914&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/farrow-stone-wall-tile" title="Farrow Stone Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Farrow-Stone-03d06a.jpg?v=1749039912&amp;width=400" alt="Farrow Stone Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-03.jpg?v=1749039912&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-03.jpg?v=1749039912&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-Stone-03.jpg?v=1749039912&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/farrow-stone-wall-tile"  title="Farrow Stone Wall Tile">
          Farrow Stone Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        10 x 20 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size">
              <s class="card-price__regular">£47.14 / m²</s>
            
<span  class="card-price__sale">£33.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/farrow-stone-wall-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15348097581438" 
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

  .cl-product-card--rich.cl-product-card--15348339638654 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15348339638654 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15348339638654 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15348339638654 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15348339638654 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15348339638654 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15348339638654 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15348339638654 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15348339638654">
  

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
                <a href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile" title="Frame White Wall Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Farrow-White-09_79da15c0-3c8b-4723-8531-23c53c447dea64f2.jpg?v=1760364845&amp;width=400" alt="Frame White Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-09_79da15c0-3c8b-4723-8531-23c53c447dea.jpg?v=1760364845&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-09_79da15c0-3c8b-4723-8531-23c53c447dea.jpg?v=1760364845&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-09_79da15c0-3c8b-4723-8531-23c53c447dea.jpg?v=1760364845&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile" title="Frame White Wall Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Farrow-White-0464f2.jpg?v=1760364845&amp;width=400" alt="Frame White Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-04.jpg?v=1760364845&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-04.jpg?v=1760364845&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-04.jpg?v=1760364845&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile" title="Frame White Wall Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Farrow-White-0164f2.jpg?v=1760364845&amp;width=400" alt="Frame White Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-01.jpg?v=1760364845&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-01.jpg?v=1760364845&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-01.jpg?v=1760364845&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile" title="Frame White Wall Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Farrow-White-0364f2.jpg?v=1760364845&amp;width=400" alt="Frame White Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-03.jpg?v=1760364845&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-03.jpg?v=1760364845&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-03.jpg?v=1760364845&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile" title="Frame White Wall Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Farrow-White-0864f2.jpg?v=1760364845&amp;width=400" alt="Frame White Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-08.jpg?v=1760364845&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-08.jpg?v=1760364845&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-08.jpg?v=1760364845&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile" title="Frame White Wall Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Farrow-White-0764f2.jpg?v=1760364845&amp;width=400" alt="Frame White Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-07.jpg?v=1760364845&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-07.jpg?v=1760364845&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-07.jpg?v=1760364845&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile" title="Frame White Wall Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Farrow-White-0574c9.jpg?v=1749039656&amp;width=400" alt="Frame White Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-05.jpg?v=1749039656&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-05.jpg?v=1749039656&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-05.jpg?v=1749039656&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile" title="Frame White Wall Tile" data-preloadlink="true"><div class="image-snippet 8">
                    <img src="../cdn/shop/files/Farrow-White-0653d9.jpg?v=1749039430&amp;width=400" alt="Frame White Wall Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-06.jpg?v=1749039430&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-06.jpg?v=1749039430&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Farrow-White-06.jpg?v=1749039430&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile"  title="Frame White Wall Tile">
          Frame White Wall Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        10 x 30 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size">
              <s class="card-price__regular">£36.41 / m²</s>
            
<span  class="card-price__sale">£25.49 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/frame-white-wall-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15348339638654" 
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

  .cl-product-card--rich.cl-product-card--15368935440766 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15368935440766 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15368935440766 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15368935440766 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15368935440766 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15368935440766 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15368935440766 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15368935440766 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15368935440766">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile" title="Limestone Ivory Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Limestone-Ivory-07c053.jpg?v=1747308243&amp;width=400" alt="Limestone Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-07.jpg?v=1747308243&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-07.jpg?v=1747308243&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-07.jpg?v=1747308243&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile" title="Limestone Ivory Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Limestone-Ivory-1313e5.jpg?v=1758020549&amp;width=400" alt="Limestone Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-13.jpg?v=1758020549&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-13.jpg?v=1758020549&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-13.jpg?v=1758020549&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile" title="Limestone Ivory Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Limestone-Ivory-1013e5.jpg?v=1758020549&amp;width=400" alt="Limestone Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-10.jpg?v=1758020549&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-10.jpg?v=1758020549&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-10.jpg?v=1758020549&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile" title="Limestone Ivory Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Limestone-Ivory-1213e5.jpg?v=1758020549&amp;width=400" alt="Limestone Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-12.jpg?v=1758020549&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-12.jpg?v=1758020549&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-12.jpg?v=1758020549&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile" title="Limestone Ivory Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Limestone-Ivory-15_cd4d0866-f356-4474-a436-f4bf76fdc26713e5.jpg?v=1758020549&amp;width=400" alt="Limestone Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-15_cd4d0866-f356-4474-a436-f4bf76fdc267.jpg?v=1758020549&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-15_cd4d0866-f356-4474-a436-f4bf76fdc267.jpg?v=1758020549&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-15_cd4d0866-f356-4474-a436-f4bf76fdc267.jpg?v=1758020549&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile" title="Limestone Ivory Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Limestone-Ivory-1413e5.jpg?v=1758020549&amp;width=400" alt="Limestone Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-14.jpg?v=1758020549&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-14.jpg?v=1758020549&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-14.jpg?v=1758020549&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile" title="Limestone Ivory Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Limestone-Ivory-1169b6.jpg?v=1757584819&amp;width=400" alt="Limestone Ivory Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-11.jpg?v=1757584819&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-11.jpg?v=1757584819&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Ivory-11.jpg?v=1757584819&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile"  title="Limestone Ivory Tile">
          Limestone Ivory Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        30 x 60 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£29.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/limestone-ivory-wall-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15368935440766" 
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

  .cl-product-card--rich.cl-product-card--15368961261950 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15368961261950 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15368961261950 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15368961261950 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15368961261950 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15368961261950 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15368961261950 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15368961261950 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15368961261950">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-taupe-wall-tile" title="Limestone Taupe Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Limestone-Taupe-12f9ab.jpg?v=1757418333&amp;width=400" alt="Limestone Taupe Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-12.jpg?v=1757418333&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-12.jpg?v=1757418333&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-12.jpg?v=1757418333&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-taupe-wall-tile" title="Limestone Taupe Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Limestone-Taupe-01a6c4.jpg?v=1757418324&amp;width=400" alt="Limestone Taupe Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-01.jpg?v=1757418324&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-01.jpg?v=1757418324&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-01.jpg?v=1757418324&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-taupe-wall-tile" title="Limestone Taupe Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Limestone-Taupe-02a6c4.jpg?v=1757418324&amp;width=400" alt="Limestone Taupe Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-02.jpg?v=1757418324&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-02.jpg?v=1757418324&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-02.jpg?v=1757418324&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/limestone-taupe-wall-tile" title="Limestone Taupe Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Limestone-Taupe-03a6c4.jpg?v=1757418324&amp;width=400" alt="Limestone Taupe Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-03.jpg?v=1757418324&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-03.jpg?v=1757418324&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Limestone-Taupe-03.jpg?v=1757418324&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/limestone-taupe-wall-tile"  title="Limestone Taupe Tile">
          Limestone Taupe Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        30 x 60 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£29.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/limestone-taupe-wall-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15368961261950" 
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

  .cl-product-card--rich.cl-product-card--15615529484670 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15615529484670 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15615529484670 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15615529484670 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15615529484670 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15615529484670 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15615529484670 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15615529484670 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15615529484670">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-ivory-tile" title="Aura Ivory Gloss Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Aura-Ivory-031643.jpg?v=1761218812&amp;width=400" alt="Aura Ivory Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-03.jpg?v=1761218812&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-03.jpg?v=1761218812&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-03.jpg?v=1761218812&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-ivory-tile" title="Aura Ivory Gloss Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Aura-Ivory-011643.jpg?v=1761218812&amp;width=400" alt="Aura Ivory Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-01.jpg?v=1761218812&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-01.jpg?v=1761218812&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-01.jpg?v=1761218812&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-ivory-tile" title="Aura Ivory Gloss Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Aura-Ivory-021643.jpg?v=1761218812&amp;width=400" alt="Aura Ivory Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-02.jpg?v=1761218812&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-02.jpg?v=1761218812&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Ivory-02.jpg?v=1761218812&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/aura-ivory-tile"  title="Aura Ivory Gloss Tile">
          Aura Ivory Gloss Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        29.5 x 59.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£32.40 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/aura-ivory-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15615529484670" 
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

  .cl-product-card--rich.cl-product-card--15627724226942 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15627724226942 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15627724226942 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15627724226942 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15627724226942 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15627724226942 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15627724226942 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15627724226942 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15627724226942">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-rose-tile" title="Aura Rose Gloss Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Aura-Rose-030548.jpg?v=1761215695&amp;width=400" alt="Aura Rose Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-03.jpg?v=1761215695&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-03.jpg?v=1761215695&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-03.jpg?v=1761215695&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-rose-tile" title="Aura Rose Gloss Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Aura-Rose-010548.jpg?v=1761215695&amp;width=400" alt="Aura Rose Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-01.jpg?v=1761215695&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-01.jpg?v=1761215695&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-01.jpg?v=1761215695&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/aura-rose-tile" title="Aura Rose Gloss Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Aura-Rose-020548.jpg?v=1761215695&amp;width=400" alt="Aura Rose Gloss Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-02.jpg?v=1761215695&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-02.jpg?v=1761215695&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Aura-Rose-02.jpg?v=1761215695&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/aura-rose-tile"  title="Aura Rose Gloss Tile">
          Aura Rose Gloss Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        29.5 x 59.5 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£32.40 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/aura-rose-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15627724226942" 
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

  .cl-product-card--rich.cl-product-card--15627728454014 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15627728454014 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15627728454014 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15627728454014 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15627728454014 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15627728454014 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15627728454014 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15627728454014 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15627728454014">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-tile" title="Como Beige Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Como-Beige-053735.jpg?v=1761059798&amp;width=400" alt="Como Beige Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-05.jpg?v=1761059798&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-05.jpg?v=1761059798&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-05.jpg?v=1761059798&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-tile" title="Como Beige Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Como-Beige-013735.jpg?v=1761059798&amp;width=400" alt="Como Beige Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-01.jpg?v=1761059798&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-01.jpg?v=1761059798&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-01.jpg?v=1761059798&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-tile" title="Como Beige Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Como-Beige-023735.jpg?v=1761059798&amp;width=400" alt="Como Beige Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-02.jpg?v=1761059798&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-02.jpg?v=1761059798&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-02.jpg?v=1761059798&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-tile" title="Como Beige Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Como-Beige-043735.jpg?v=1761059798&amp;width=400" alt="Como Beige Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-04.jpg?v=1761059798&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-04.jpg?v=1761059798&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-04.jpg?v=1761059798&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-tile" title="Como Beige Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Como-Beige-033735.jpg?v=1761059798&amp;width=400" alt="Como Beige Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-03.jpg?v=1761059798&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-03.jpg?v=1761059798&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-03.jpg?v=1761059798&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/como-beige-tile"  title="Como Beige Tile">
          Como Beige Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        31.6 x 60.8 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£28.80 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/como-beige-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15627728454014" 
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

  .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15627728945534 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15627728945534 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15627728945534">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile" title="Como Beige Fluted Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Como-Beige-Fluted-04ebdc.jpg?v=1761059825&amp;width=400" alt="Como Beige Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-04.jpg?v=1761059825&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-04.jpg?v=1761059825&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-04.jpg?v=1761059825&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile" title="Como Beige Fluted Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Como-Beige-Fluted-01ebdc.jpg?v=1761059825&amp;width=400" alt="Como Beige Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-01.jpg?v=1761059825&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-01.jpg?v=1761059825&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-01.jpg?v=1761059825&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile" title="Como Beige Fluted Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Como-Beige-Fluted-02ebdc.jpg?v=1761059825&amp;width=400" alt="Como Beige Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-02.jpg?v=1761059825&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-02.jpg?v=1761059825&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-02.jpg?v=1761059825&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile" title="Como Beige Fluted Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Como-Beige-Fluted-03ebdc.jpg?v=1761059825&amp;width=400" alt="Como Beige Fluted Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-03.jpg?v=1761059825&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-03.jpg?v=1761059825&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Como-Beige-Fluted-03.jpg?v=1761059825&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile"  title="Como Beige Fluted Tile">
          Como Beige Fluted Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        31.6 x 60.8 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£33.60 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/como-beige-fluted-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15627728945534" 
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

  .cl-product-card--rich.cl-product-card--15370313367934 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--15370313367934 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--15370313367934 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--15370313367934 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--15370313367934 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--15370313367934 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--15370313367934 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--15370313367934 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--15370313367934">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile" title="Chelsea Red Mix Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Chelsea-Antique-Red-024058.jpg?v=1747909143&amp;width=400" alt="Chelsea Red Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Antique-Red-02.jpg?v=1747909143&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Antique-Red-02.jpg?v=1747909143&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Antique-Red-02.jpg?v=1747909143&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile" title="Chelsea Red Mix Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Chelsea-Red-Mix-01_c6e27c0a-7aa9-4db7-bf81-25baa2d6597a1e9b.jpg?v=1749035880&amp;width=400" alt="Chelsea Red Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-01_c6e27c0a-7aa9-4db7-bf81-25baa2d6597a.jpg?v=1749035880&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-01_c6e27c0a-7aa9-4db7-bf81-25baa2d6597a.jpg?v=1749035880&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-01_c6e27c0a-7aa9-4db7-bf81-25baa2d6597a.jpg?v=1749035880&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile" title="Chelsea Red Mix Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Chelsea-Antique-Red-011e9b.jpg?v=1749035880&amp;width=400" alt="Chelsea Red Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Antique-Red-01.jpg?v=1749035880&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Antique-Red-01.jpg?v=1749035880&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Antique-Red-01.jpg?v=1749035880&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile" title="Chelsea Red Mix Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Chelsea-Red-01_6683d091-6737-444c-bb6f-20d4d697514a1e9b.jpg?v=1749035880&amp;width=400" alt="Chelsea Red Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-01_6683d091-6737-444c-bb6f-20d4d697514a.jpg?v=1749035880&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-01_6683d091-6737-444c-bb6f-20d4d697514a.jpg?v=1749035880&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-01_6683d091-6737-444c-bb6f-20d4d697514a.jpg?v=1749035880&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile" title="Chelsea Red Mix Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Chelsea-Red-Mix-02_9fa5afbe-ac53-4ab5-9274-01ad58250a711e9b.jpg?v=1749035880&amp;width=400" alt="Chelsea Red Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-02_9fa5afbe-ac53-4ab5-9274-01ad58250a71.jpg?v=1749035880&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-02_9fa5afbe-ac53-4ab5-9274-01ad58250a71.jpg?v=1749035880&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-02_9fa5afbe-ac53-4ab5-9274-01ad58250a71.jpg?v=1749035880&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile" title="Chelsea Red Mix Tile" data-preloadlink="true"><div class="image-snippet 6">
                    <img src="../cdn/shop/files/Chelsea-White_7d4fa123-7ef3-4bf8-a736-eac0a154b0171e9b.jpg?v=1749035880&amp;width=400" alt="Chelsea Red Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-White_7d4fa123-7ef3-4bf8-a736-eac0a154b017.jpg?v=1749035880&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-White_7d4fa123-7ef3-4bf8-a736-eac0a154b017.jpg?v=1749035880&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-White_7d4fa123-7ef3-4bf8-a736-eac0a154b017.jpg?v=1749035880&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile" title="Chelsea Red Mix Tile" data-preloadlink="true"><div class="image-snippet 7">
                    <img src="../cdn/shop/files/Chelsea-Red-Mix-03_280136f1-af64-4378-bbf6-4860167add7d1e9b.jpg?v=1749035880&amp;width=400" alt="Chelsea Red Mix Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-03_280136f1-af64-4378-bbf6-4860167add7d.jpg?v=1749035880&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-03_280136f1-af64-4378-bbf6-4860167add7d.jpg?v=1749035880&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Red-Mix-03_280136f1-af64-4378-bbf6-4860167add7d.jpg?v=1749035880&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile"  title="Chelsea Red Mix Tile">
          Chelsea Red Mix Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        30 x 30 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      

        <div class="card-price mobile-size--14 metafield-price-per-size">
          
<span>£142.50 / Pack</span>
            
</div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/chelsea-red-mix-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="15370313367934" 
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

  .cl-product-card--rich.cl-product-card--7755408769214 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7755408769214 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7755408769214 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7755408769214 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7755408769214 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7755408769214 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7755408769214 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7755408769214 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--7755408769214">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/lusso-gold" title="Lusso Gold Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Lusso-Gold-01ef3f.jpg?v=1693912776&amp;width=400" alt="Lusso Gold Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-01.jpg?v=1693912776&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-01.jpg?v=1693912776&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-01.jpg?v=1693912776&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/lusso-gold" title="Lusso Gold Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Lusso-Gold-025e7a.jpg?v=1693917618&amp;width=400" alt="Lusso Gold Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-02.jpg?v=1693917618&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-02.jpg?v=1693917618&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-02.jpg?v=1693917618&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/lusso-gold" title="Lusso Gold Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Lusso-Gold-030eba.jpg?v=1694164438&amp;width=400" alt="Lusso Gold Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-03.jpg?v=1694164438&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-03.jpg?v=1694164438&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Lusso-Gold-03.jpg?v=1694164438&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/lusso-gold"  title="Lusso Gold Tile">
          Lusso Gold Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        Various Sizes
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span>from </span><span data-price-per-meter-squared class="card-price__regular">£29.50 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/lusso-gold#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7755408769214" 
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

  .cl-product-card--rich.cl-product-card--7881446752446 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--7881446752446 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--7881446752446 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--7881446752446 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--7881446752446 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--7881446752446 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--7881446752446 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--7881446752446 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--7881446752446">
  
<div class="product-badges"><div class="product-badge_container" style="background-color: #d11e21;">
            <span class="product-badge__label" style="color: #ffffff;">Sale</span>
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
                <a href="https://www.porcelainsuperstore.co.uk/products/signature-marmara-polished-tile" title="Signature Marmara Polished Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Signature-Marmara-Polished-063025.jpg?v=1714563031&amp;width=400" alt="Signature Marmara Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-06.jpg?v=1714563031&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-06.jpg?v=1714563031&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-06.jpg?v=1714563031&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/signature-marmara-polished-tile" title="Signature Marmara Polished Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Signature-Marmara-Polished-053025.jpg?v=1714563031&amp;width=400" alt="Signature Marmara Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-05.jpg?v=1714563031&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-05.jpg?v=1714563031&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-05.jpg?v=1714563031&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/signature-marmara-polished-tile" title="Signature Marmara Polished Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Signature-Marmara-Polished-03f981.jpg?v=1711467139&amp;width=400" alt="Signature Marmara Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-03.jpg?v=1711467139&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-03.jpg?v=1711467139&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-03.jpg?v=1711467139&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/signature-marmara-polished-tile" title="Signature Marmara Polished Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Signature-Marmara-Polished-01f981.jpg?v=1711467139&amp;width=400" alt="Signature Marmara Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-01.jpg?v=1711467139&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-01.jpg?v=1711467139&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-01.jpg?v=1711467139&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/signature-marmara-polished-tile" title="Signature Marmara Polished Tile" data-preloadlink="true"><div class="image-snippet 5">
                    <img src="../cdn/shop/files/Signature-Marmara-Polished-02f981.jpg?v=1711467139&amp;width=400" alt="Signature Marmara Polished Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-02.jpg?v=1711467139&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-02.jpg?v=1711467139&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Signature-Marmara-Polished-02.jpg?v=1711467139&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/signature-marmara-polished-tile"  title="Signature Marmara Polished Tile">
          Signature Marmara Polished Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        60 x 120 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£51.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/signature-marmara-polished-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="7881446752446" 
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

  .cl-product-card--rich.cl-product-card--8287243174078 .product-card__slider-navigation{
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

  .cl-product-card--rich.cl-product-card--8287243174078 .product-card__slider-navigation .new-swiper-button{
    display: flex;
    padding: 9px 6px 9px 8px;
    background-color: rgba(245,242,237, 0.85);
    pointer-events: auto;
    cursor: pointer;
  }

  .cl-product-card--rich.cl-product-card--8287243174078 .product-card__slider-navigation .new-swiper-button{
    transition: all 0.2s ease-in-out;
  }

  .cl-product-card--rich.cl-product-card--8287243174078 .product-card__slider-navigation .swiper-button-next--template--26303100092798__native_collection_nPVQGD{
    transform: translateX(100%);
  }

  .cl-product-card--rich.cl-product-card--8287243174078 .product-card__slider-navigation .swiper-button-prev--template--26303100092798__native_collection_nPVQGD{
    transform:translateX(-100%);
  }
  

  .cl-product-card--rich.cl-product-card--8287243174078 .product-card__slider-navigation .new-swiper-button path{
    stroke: rgb(var(--color-black));
  }

  @media screen and (min-width: 800px){
    .cl-product-card--rich.cl-product-card--8287243174078 .product-card__slider-navigation{
      display: flex;
    }

    .cl-product-card--rich.cl-product-card--8287243174078 .swiper:hover
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
<div class="cl-product-card cl-product-card--rich cl-product-card--8287243174078">
  
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
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-rosa-tile" title="Chelsea Rosa Tile" data-preloadlink="true"><div class="image-snippet 1">
                    <img src="../cdn/shop/files/Chelsea-Rosa-036b47.jpg?v=1724071406&amp;width=400" alt="Chelsea Rosa Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-03.jpg?v=1724071406&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-03.jpg?v=1724071406&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-03.jpg?v=1724071406&amp;width=400 400w" width="400" height="400" loading="eager" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-rosa-tile" title="Chelsea Rosa Tile" data-preloadlink="true"><div class="image-snippet 2">
                    <img src="../cdn/shop/files/Chelsea-Rosa-046b47.jpg?v=1724071406&amp;width=400" alt="Chelsea Rosa Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-04.jpg?v=1724071406&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-04.jpg?v=1724071406&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-04.jpg?v=1724071406&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-rosa-tile" title="Chelsea Rosa Tile" data-preloadlink="true"><div class="image-snippet 3">
                    <img src="../cdn/shop/files/Chelsea-Rosa-056b47.jpg?v=1724071406&amp;width=400" alt="Chelsea Rosa Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-05.jpg?v=1724071406&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-05.jpg?v=1724071406&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-05.jpg?v=1724071406&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
                  </div>
                </a>
              </div>
            </li>
          
            <li class="swiper-slide">
              <div class="cl-product-card-image">
                <a href="https://www.porcelainsuperstore.co.uk/products/chelsea-rosa-tile" title="Chelsea Rosa Tile" data-preloadlink="true"><div class="image-snippet 4">
                    <img src="../cdn/shop/files/Chelsea-Rosa-06_b971ae28-8c74-48b0-99cb-254bc9c9a456c8b2.jpg?v=1724073565&amp;width=400" alt="Chelsea Rosa Tile" srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-06_b971ae28-8c74-48b0-99cb-254bc9c9a456.jpg?v=1724073565&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-06_b971ae28-8c74-48b0-99cb-254bc9c9a456.jpg?v=1724073565&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Rosa-06_b971ae28-8c74-48b0-99cb-254bc9c9a456.jpg?v=1724073565&amp;width=400 400w" width="400" height="400" loading="lazy" sizes="30vw" class="image-snippet__img image-snippet__img--fill">
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
        <a class="hover-underline" href="https://www.porcelainsuperstore.co.uk/products/chelsea-rosa-tile"  title="Chelsea Rosa Tile">
          Chelsea Rosa Tile
        </a>
      </h3>
      
      
      
      <div class="cl-product-card-size ">
        30 x 30 cm
      </div>
      
      
      
      
      
      
      
      
      
      
      


      
      
      
      
      
        
        
      
        
          
          
      
      
<div class="card-price mobile-size--14 metafield-price-per-size"><span data-price-per-meter-squared class="card-price__regular">£54.00 / m²</span></div>
        
      
      
    
    
    <a class="cl-product-card-yotpo-rating" href="https://www.porcelainsuperstore.co.uk/products/chelsea-rosa-tile#yotpoReviewsWidget">
      <div class="yotpo-widget-instance yotpo-widget-instance--custom" 
        data-yotpo-instance-id="643481" 
        data-yotpo-product-id="8287243174078" 
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
            <a href="bathroom-tiles4658.html?page=2">
              <span class="visually-hidden">page</span> <span>2</span>
            </a>
          </li><li>
            <a href="bathroom-tiles9ba9.html?page=3">
              <span class="visually-hidden">page</span> <span>3</span>
            </a>
          </li><li>
              <span class="visually-hidden">page</span> <span>&hellip;</span>
            </li><li>
            <a href="bathroom-tiles9683.html?page=18">
              <span class="visually-hidden">page</span> <span>18</span>
            </a>
          </li><li class="next">
          <a href="bathroom-tiles4658.html?page=2">
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