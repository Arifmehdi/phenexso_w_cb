@extends('website.layouts.home-master')

@section('title', 'Home - '. env('APP_NAME'))

@section('meta')
<meta name="description"
    content="North Bengal offers premium dairy products, latest news, and world-class services. Explore our departments and services with ease.">
<meta name="keywords" content="North Bengal, dairy products, latest news, services, departments, quality dairy">
<meta property="og:title" content="Home - North Bengal">
<meta property="og:description"
    content="Discover North Bengal’s quality dairy products, latest news, and world-class services.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/home-banner.png') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@push('css')

@endpush

@section('content')


  <main role="main" id="MainContent">

<section id="shopify-section-template--26303100518782__new_hero_slider_QnJqfM"
  class="shopify-section section">

  <style>
    /* SECTION */
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM {
      position: relative;
      overflow: hidden;
    }

    /* SLIDE */
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__slide.container {
      max-width: 100%;
      padding: 0;
      position: relative;
      min-height: 85vh;
    }

    /* IMAGE */
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__media {
      position: absolute;
      inset: 0;
      z-index: 1;
    }

    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 0 !important;
    }

    /* DARK OVERLAY (OPTIONAL) */
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__media::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.25);
      z-index: 2;
    }

    /* CONTENT (LEFT BOTTOM) */
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__content {
      position: absolute;
      left: 5%;
      bottom: 8%;
      z-index: 3;
      max-width: 520px;
      background: transparent;
      padding: 0;
    }

    /* TEXT STACK */
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__article {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }

    /* TEXT COLOR */
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__title,
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__text {
      color: #ffffff;
    }

    /* BUTTONS */
    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    .new-hero-banner__buttons {
      display: flex;
      gap: 14px;
      flex-wrap: nowrap;
    }

    #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
    a.button {
      border-radius: 0 !important;
    }

    /* MOBILE */
    @media (max-width: 768px) {
      #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
      .new-hero-banner__slide.container {
        min-height: 70vh;
      }

      #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
      .new-hero-banner__content {
        left: 6%;
        bottom: 6%;
        max-width: 90%;
      }

      #shopify-section-template--26303100518782__new_hero_slider_QnJqfM
      .new-hero-banner__buttons {
        flex-wrap: wrap;
      }
    }
  </style>

  <div>
    <ul class="new-hero-banner swiper-wrapper">
      <li class="new-hero-banner__slide container">

        <div class="new-hero-banner__media">
          <picture>
            <source srcset="{{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }}"
              media="(max-width: 850px)">
            <img src="{{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }}"
              srcset="
                {{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }} 400w,
                {{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }} 600w,
                {{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }} 2048w"
              sizes="100vw"
              loading="eager"
              fetchpriority="high"
              alt="Wenlow brick description">
          </picture>
        </div>

        <div class="new-hero-banner__content">
          <article class="new-hero-banner__article">

            <h1 class="new-hero-banner__title h1">
              {{ $slider->title }}
            </h1>

            <div class="new-hero-banner__text text-body text-body--large">
              <p>{{ $slider->description }}</p>
            </div>

            <div class="new-hero-banner__buttons">
              @if($slider->link != null)
              <a class="button button--white"
                href="{{ route('shop') }}">
                Shop Now
              </a>
              @endif 
              <!-- <a class="button button--white"
                href="#">
                Wenlow Brick
              </a> -->
            </div>

          </article>
        </div>

      </li>
    </ul>
  </div>

</section>

    <section id="shopify-section-template--26303100518782__new_complex_grid_blocks_8z9Gih"
      class="shopify-section section">
      <link href="cdn/shop/t/399/assets/section-complex-gridf9d4.css?v=68589970837183501041760535067" rel="stylesheet"
        type="text/css" media="all" />
      <style data-shopify>
        #shopify-section-template--26303100518782__new_complex_grid_blocks_8z9Gih {
          background: rgba(0, 0, 0, 0)
        }

        #shopify-section-template--26303100518782__new_complex_grid_blocks_8z9Gih .grid {
          --grid-desktop-horizontal-spacing: 24px;
          --grid-desktop-vertical-spacing: 24px;
          --grid-mobile-horizontal-spacing: 15px;
          --grid-mobile-vertical-spacing: 15px;
        }

        #shopify-section-template--26303100518782__new_complex_grid_blocks_8z9Gih .complex-grid {
          --grid-desktop-horizontal-spacing: 24px;
          --grid-desktop-vertical-spacing: 24px;
          --grid-mobile-horizontal-spacing: 15px;
          --grid-mobile-vertical-spacing: 15px;
        }

        .section-template--26303100518782__new_complex_grid_blocks_8z9Gih-padding {
          padding-top: calc(40px * 0.75);
          padding-bottom: calc(44px * 0.75);
        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__new_complex_grid_blocks_8z9Gih-padding {
            padding-top: 40px;
            padding-bottom: 44px;
          }
        }

        .new-grid-blocks .collection-card {
          border-radius: 0;
        }

        .new-grid-blocks .new-grid-blocks__list {
          display: grid;
          width: 100%;
          row-gap: 28px;
          column-gap: 10px;
        }

        .new-grid-blocks .new-grid-blocks__list .collection-card {
          position: relative;
          height: 100%;
          display: flex;
          flex-direction: column;
        }

        .new-grid-blocks .new-grid-blocks__list .collection-card__descrition {
          display: flex;
          flex-direction: column;
          flex-grow: 1;
        }

        .new-grid-blocks .new-grid-blocks__list .site-link--underline {
          margin-top: auto;
        }


        #shopify-section-template--26303100518782__new_complex_grid_blocks_8z9Gih .new-grid-blocks .new-grid-blocks__list {
          grid-template-columns: repeat(2, minmax(0, 1fr));
          ;
        }

        .new-grid-blocks .collection-card__media {
          overflow: hidden;

        }

        .new-grid-blocks .collection-card__media--square {
          border-radius: 10px;
          aspect-ratio: 1/1;
        }

        .new-grid-blocks .collection-card__media--circle {
          aspect-ratio: 1/1;
          border-radius: 100%;
        }

        .new-grid-blocks .collection-card__media--arch {
          aspect-ratio: 0.75;
          border-radius: 70px 70px 0 0;
        }

        .new-grid-blocks img {
          height: 100%;
          object-fit: cover;
        }

        .new-grid-blocks .collection-card__title {
          font-size: 18px;
          font-weight: 600;
          margin-top: 10px;
          display: block;
          line-height: 140%;
        }

        .new-grid-blocks .collection-card__info {
          margin-block: 8px 15px;
          line-height: 140%;
        }

        .new-grid-blocks .site-link {
          font-size: 13px;
          margin-top: 3px;
        }

        @media screen and (min-width: 1024px) {
          #shopify-section-template--26303100518782__new_complex_grid_blocks_8z9Gih .new-grid-blocks .new-grid-blocks__list {
            grid-template-columns: repeat(6, minmax(0, 1fr));
            column-gap: 18px;
          }

        }
      </style>
      <div class="section-template--26303100518782__new_complex_grid_blocks_8z9Gih-padding">
        <div class="container">

          <div class="section-header-wrapper text-center">
            <h2 class="section-header-wrapper__title h3">



              <p><strong>Find your perfect tiles</strong></p>

            </h2>
          </div>


          <div class="new-grid-blocks">
            <ul class="new-grid-blocks__list">

            @forelse($categories as $category)
              <li class="new-grid-blocks__item">

                <a class="collection-card" href="{{ route('productCategory', $category->slug) }}">
                  <div class="collection-card__media collection-card__media--arch">
                    <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}?v=1745920199&amp;width=650"
                      srcset="{{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}?v=1745920199&amp;width=400 400w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}?v=1745920199&amp;width=450 450w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}?v=1745920199&amp;width=500 500w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}?v=1745920199&amp;width=550 550w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}?v=1745920199&amp;width=650 650w"
                      width="1500" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                  <div class="collection-card__descrition">
                    <span class="collection-card__title">
                      <p>
                        @if(app()->getLocale() == 'bn')
                            {{ $category->name_bn }}
                        @else
                            {{ $category->name_en }}
                        @endif 
                      </p>
                    </span>
                    <span class="site-link site-link--underline">Shop now</span>

                  </div>
                </a>
              </li>
              @empty 
              @endforelse 
            </ul>
          </div>
        </div>
      </div>


    </section>
    <div id="shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6" class="shopify-section">
      <style data-shopify>
        #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 {
          background: #f0ebe3
        }

        #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 * {
          color: #0d1f22 !important;
        }

        #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 .seo-text__btn::after {
          background: #0d1f22 !important;
        }

        .section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6-padding {
          padding-top: calc(48px * 0.75);
          padding-bottom: calc(72px * 0.75);
        }

        #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 .seo-text__wrapper {
          display: flex;
          flex-direction: row;
          gap: 48px;
        }

        #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 .seo-text__info {
          flex: 1;
          display: flex;
          flex-direction: column;
          justify-content: center;
        }

        #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 .seo-text__image {
          flex: 1.6;
        }

        #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 .seo-text__image .image-snippet {
          aspect-ratio: 1.65;
        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6-padding {
            padding-top: 48px;
            padding-bottom: 72px;
          }
        }

        @media screen and (min-width: 1024px) {
          #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 {
            background: #f0ebe3
          }

          #shopify-section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6 .new-seo-text__button {
            min-width: 140px;
            max-height: 50px;
          }
        }

        .new-seo-text__button {
          margin-top: 14px;
          min-height: 40px;
          font-size: 15px;
          line-height: unset;
        }
      </style>
      <section class="seo-text seo-text--template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6"
        data-seo-section="template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6">
        <div class="section-template--26303100518782__74132764-067f-4bad-b24c-2425af7989a6-padding">
          <div class="container">
            <div class="seo-text__wrapper">
              <div class="seo-text__info">
                <h2 class="seo-text__heading">Tiles for every home</h2>
                <div class="seo-text__text">
                  <p>As a family company with decades of tile experience, we believe great design doesn’t need to cost
                    the earth. And with over 800 wall and floor tiles to choose from, it’s no wonder more than 500,000
                    customers trust us for their homes.</p>
                </div>

                <div>
                  <a class='new-seo-text__button button button--wrapper '
                    style="background-color: #000000; color: #ffffff !important;" href="{{ route('about') }}">
                    About Us
                  </a>
                </div>

              </div>

              <div class="seo-text__image tablet-hide">
                <div
                  class="image-snippet image-snippet__fill--desktop image-snippet__fill--tablet image-snippet__fill--mobile"
                  style=" --aspect-ratio: 1200.0 / 1200.0; --aspect-ratio-tablet: 1200.0 / 1200.0; --aspect-ratio-mobile: 1200.0 / 1200.0;">
                  <img class="image-snippet__img image-snippet__img--fill image-snippet__img--desktop" width="1200"
                    height="1200"
                    src="cdn/shop/files/Muse-Bianco-0351d5.jpg?crop=center&amp;height=120&amp;v=1762740261&amp;width=120"
                    data-src="cdn/shop/files/Muse-Bianco-0322a2.jpg?crop=center&amp;height=1200&amp;v=1762740261&amp;width=1200"
                    data-lazy-load loading="lazy"
                    data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=360&v=1762740261&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=375&v=1762740261&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=393&v=1762740261&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=414&v=1762740261&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1280&v=1762740261&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1366&v=1762740261&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1440&v=1762740261&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1536&v=1762740261&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1920&v=1762740261&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1200&v=1762740261&width=1200 1200w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=2400&v=1762740261&width=2400 2400w"
                    alt="image" data-alt="image">


                  <img class="image-snippet__img image-snippet__img--fill image-snippet__img--tablet" width="1200"
                    height="1200"
                    src="cdn/shop/files/Muse-Bianco-0351d5.jpg?crop=center&amp;height=120&amp;v=1762740261&amp;width=120"
                    data-src="cdn/shop/files/Muse-Bianco-0322a2.jpg?crop=center&amp;height=1200&amp;v=1762740261&amp;width=1200"
                    data-lazy-load loading="lazy"
                    data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=360&v=1762740261&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=375&v=1762740261&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=393&v=1762740261&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=414&v=1762740261&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1280&v=1762740261&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1366&v=1762740261&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1440&v=1762740261&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1536&v=1762740261&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1920&v=1762740261&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1200&v=1762740261&width=1200 1200w"
                    alt="image" data-alt="image">


                  <img class="image-snippet__img image-snippet__img--fill image-snippet__img--mobile" width="1200"
                    height="1200"
                    src="cdn/shop/files/Muse-Bianco-0351d5.jpg?crop=center&amp;height=120&amp;v=1762740261&amp;width=120"
                    data-src="cdn/shop/files/Muse-Bianco-0322a2.jpg?crop=center&amp;height=1200&amp;v=1762740261&amp;width=1200"
                    data-lazy-load loading="lazy"
                    data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=360&v=1762740261&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=375&v=1762740261&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=393&v=1762740261&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=414&v=1762740261&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1280&v=1762740261&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1366&v=1762740261&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1440&v=1762740261&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1536&v=1762740261&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1920&v=1762740261&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Muse-Bianco-03.jpg?crop=center&height=1200&v=1762740261&width=1200 1200w"
                    alt="image" data-alt="image">

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

    </div>
    <section id="shopify-section-template--26303100518782__new_logo_slider_THMemi"
      class="shopify-section section gapless-slider-section">
      <style data-shopify>
        #shopify-section-template--26303100518782__new_logo_slider_THMemi {
          background: #f0ebe3
        }

        #shopify-section-template--26303100518782__new_logo_slider_THMemi .swiper {
          overflow: visible;
        }


        #shopify-section-template--26303100518782__new_logo_slider_THMemi .image-link-block>*+* {
          margin-top: 20px;
        }

        .section-template--26303100518782__new_logo_slider_THMemi-padding {
          padding-top: calc(48px * 0.5);
          padding-bottom: calc(48px * 0.5);
        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__new_logo_slider_THMemi-padding {
            padding-top: 48px;
            padding-bottom: 48px;
          }
        }

        @media screen and (max-width: 750px) {
          #shopify-section-template--26303100518782__new_logo_slider_THMemi .section-header-wrapper {
            margin-bottom: 10px;
          }
        }

        .section-template--26303100518782__new_logo_slider_THMemi-padding .swiper-wrapper {
          transition-timing-function: linear !important;
        }
      </style>
      <div class="section-template--26303100518782__new_logo_slider_THMemi-padding">
        <div class="container">
          <div class="section-header-wrapper  text-center center">

            <h3 class="section-header-wrapper__title h3">



              <p><strong>As Seen In</strong></p>

            </h3>


            <p class="section-header-wrapper__subtitle text-body text-body--large"></p>

          </div>
          <swiper-slider data-options='
        {
        "speed": 1400,
        "loop": true,
        "autoplay": {
            "delay": 0,
            "disableOnInteraction": false
        },
        "freeMode": {
            "enabled": false,    
            "momentum": false,
            "minimumVelocity": 0
        },
        "slidesPerView": 3,
        "centeredSlides": false,
        "spaceBetween": 30,
        "breakpoints": {
            "500": {
                "spaceBetween": 40
            },
            "800": {
            "slidesPerView": 5,
            "spaceBetween": 40
            },
            "1025": {
            "slidesPerView":  5,
            "spaceBetween": 45
            }
        }
    }
'>
            <div class="swiper">
              <ul class="logo-slider swiper-wrapper">


                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/homes_gardens0d29.png?v=1755610652&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/homes_gardens.png?v=1755610652&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/homes_gardens.png?v=1755610652&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/homes_gardens.png?v=1755610652&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/homes_gardens.png?v=1755610652&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/house6157.png?v=1759238603&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/house.png?v=1759238603&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/house.png?v=1759238603&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/house.png?v=1759238603&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/house.png?v=1759238603&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/livinga08e.png?v=1759238622&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/living.png?v=1759238622&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/living.png?v=1759238622&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/living.png?v=1759238622&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/living.png?v=1759238622&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/gooda08e.png?v=1759238622&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/good.png?v=1759238622&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/good.png?v=1759238622&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/good.png?v=1759238622&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/good.png?v=1759238622&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img
                      src="cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59a08e.png?v=1759238622&amp;width=500"
                      alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59.png?v=1759238622&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59.png?v=1759238622&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59.png?v=1759238622&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59.png?v=1759238622&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/times1e73.png?v=1759238941&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/times.png?v=1759238941&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/times.png?v=1759238941&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/times.png?v=1759238941&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/times.png?v=1759238941&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/hello1e73.png?v=1759238941&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/hello.png?v=1759238941&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/hello.png?v=1759238941&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/hello.png?v=1759238941&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/hello.png?v=1759238941&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>



                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/homes_gardens0d29.png?v=1755610652&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/homes_gardens.png?v=1755610652&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/homes_gardens.png?v=1755610652&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/homes_gardens.png?v=1755610652&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/homes_gardens.png?v=1755610652&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/house6157.png?v=1759238603&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/house.png?v=1759238603&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/house.png?v=1759238603&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/house.png?v=1759238603&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/house.png?v=1759238603&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/livinga08e.png?v=1759238622&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/living.png?v=1759238622&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/living.png?v=1759238622&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/living.png?v=1759238622&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/living.png?v=1759238622&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/gooda08e.png?v=1759238622&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/good.png?v=1759238622&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/good.png?v=1759238622&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/good.png?v=1759238622&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/good.png?v=1759238622&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img
                      src="cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59a08e.png?v=1759238622&amp;width=500"
                      alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59.png?v=1759238622&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59.png?v=1759238622&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59.png?v=1759238622&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/elle_0334d5bc-70a6-4f09-8f6b-9e58fbc1ca59.png?v=1759238622&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/times1e73.png?v=1759238941&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/times.png?v=1759238941&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/times.png?v=1759238941&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/times.png?v=1759238941&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/times.png?v=1759238941&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <div><img src="cdn/shop/files/hello1e73.png?v=1759238941&amp;width=500" alt=""
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/hello.png?v=1759238941&amp;width=350 350w, //www.porcelainsuperstore.co.uk/cdn/shop/files/hello.png?v=1759238941&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/hello.png?v=1759238941&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/hello.png?v=1759238941&amp;width=500 500w"
                      width="677" height="376.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                </li>


              </ul>

            </div>
          </swiper-slider>
        </div>
      </div>

    </section>
    <section id="shopify-section-template--26303100518782__new_product_slider_eGenyy"
      class="shopify-section section gapless-slider-section">
      <link href="cdn/shop/t/399/assets/section-new-testimonial-cardsddbc.css?v=5457717943832134721760535067"
        rel="stylesheet" type="text/css" media="all" />
      <style data-shopify>
        #shopify-section-template--26303100518782__new_product_slider_eGenyy {
          background: rgba(0, 0, 0, 0)
        }


        #shopify-section-template--26303100518782__new_product_slider_eGenyy .image-link-block>*+* {
          margin-top: 20px;
        }

        .section-template--26303100518782__new_product_slider_eGenyy-padding {
          padding-top: calc(52px * 0.75);
          padding-bottom: calc(72px * 0.75);
        }

        .cl-product-card--minimal .image-snippet__img {
          border-radius: 10px;
        }

        #shopify-section-template--26303100518782__new_product_slider_eGenyy .site-link span {
          font-weight: 600;
        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__new_product_slider_eGenyy-padding {
            padding-top: 52px;
            padding-bottom: 72px;
          }

          #shopify-section-template--26303100518782__new_product_slider_eGenyy .cl-product-card-name {
            font-size: 18px;
            padding-bottom: 5px !important;
          }

          #shopify-section-template--26303100518782__new_product_slider_eGenyy .cl-product-card-size,
          #shopify-section-template--26303100518782__new_product_slider_eGenyy .cl-product-card-finish{
          font-size: 16px;
          padding-bottom: 5px !important;
        }

        #shopify-section-template--26303100518782__new_product_slider_eGenyy .card-price {
          font-size: 18px;
          font-weight: 600;
        }

        #shopify-section-template--26303100518782__new_product_slider_eGenyy .site-link {
          font-size: 18px;
        }

        .cl-product-card--minimal .image-snippet__img {
          border-radius: 0;
        }
        }

        .cl-product-card--minimal {
          border: 0;
          border-radius: 0;
        }

        .cl-product-card--minimal .cl-product-card-info {
          background-color: transparent;
        }


        .cl-product-card--minimal .cl-product-card-name {
          font-size: 15px;
          font-weight: 600;
          padding-inline: 0 !important;
        }

        .cl-product-card--minimal .cl-product-card-size {
          font-size: 14px;
          padding-inline: 0 !important;
        }

        .cl-product-card--minimal .card-price {
          margin-top: 0;
          padding-inline: 0 !important;
        }
      </style>
      <div class="section-template--26303100518782__new_product_slider_eGenyy-padding">
        <div class="container">
          <div class="section-header-wrapper  section-header-wrapper--has-link  text-left">

            <h3 class="section-header-wrapper__title h3">



              <p><strong>Our most loved tiles</strong></p>

            </h3>


            <a class='underline site-link' href="{{ route('shop') }}">
              <span class="tablet-up-hide">View All</span><span class="tablet-hide">Discover our bestsellers</span></a>

          </div>
          <swiper-slider data-options='
            {
            "speed": 500,
            "loop": false,
            "autoplay": false,
            "initialSlide": 0,
            "slidesPerView": 1.5,
            "centeredSlides": false,
            "spaceBetween": 14,
            "breakpoints": {
                "750": {
                  "slidesPerView": 3
                },
                "980": {
                  "slidesPerView": 4,
                  "spaceBetween": 16,
                  "centeredSlides": false
                },
                "1200": {
                  "slidesPerView": 4,
                  "spaceBetween": 18
                }
            },
            "navigation": {
            "nextEl": ".swiper-button-next--template--26303100518782__new_product_slider_eGenyy",
            "prevEl": ".swiper-button-prev--template--26303100518782__new_product_slider_eGenyy"
            },
            "pagination": {
                "el": ".swiper-pagination--progress-bar",
                "type": "progressbar"
              }
            }'>
            <div class="swiper product-swiper">
              <ul class="product-slider swiper-wrapper">

                @forelse($popular_products as $popular_product)
                <li class="swiper-slide swiper-slide--auto-height">
                    <div class="cl-product-card cl-product-card--minimal">
                        <div class="product-badges">
                            <div class="product-badge_container" style="background-color: #ffdc59;">
                                <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
                            </div>
                        </div>
                        
                        <div class="cl-product-card__badge"></div>
                        
                        <div class="cl-product-card-image">
                            <a href="{{ route('productDetails', $popular_product->slug) }}" title="{{ app()->getLocale() === 'bn' ? $popular_product->name_bn : $popular_product->name_en }}" data-preloadlink="true">
                                <div>
                                    <!-- Main Image -->
                                    <div class="image-snippet">
                                        @php
                                            $mainImage = $popular_product->fi();
                                            $imageUrl = route('imagecache', ['template' => 'pnism', 'filename' => $mainImage]);
                                        @endphp
                                        <img src="{{ $imageUrl }}" 
                                            alt="{{ app()->getLocale() === 'bn' ? $popular_product->name_bn : $popular_product->name_en }}"
                                            srcset="{{ $imageUrl }} 400w,
                                                    {{ $imageUrl }}&width=250 250w,
                                                    {{ $imageUrl }}&width=300 300w,
                                                    {{ $imageUrl }}&width=400 400w"
                                            width="400" 
                                            height="400" 
                                            loading="lazy" 
                                            sizes="30vw"
                                            class="image-snippet__img image-snippet__img--fill">
                                    </div>

                                    <!-- Hover Image - Use second product image if available -->
                                    {{--<div class="img-hover">
                                        @php
                                            // Get second image or use first image if no second exists
                                            $hoverImage = $popular_product->images->count() > 1 ? 
                                                        $popular_product->images[1]->filename : $mainImage;
                                            $hoverImageUrl = route('imagecache', ['template' => 'pnism', 'filename' => $hoverImage]);
                                        @endphp
                                        <img src="{{ $hoverImageUrl }}" 
                                            alt="{{ app()->getLocale() === 'bn' ? $popular_product->name_bn : $popular_product->name_en }}"
                                            srcset="{{ $hoverImageUrl }} 400w,
                                                    {{ $hoverImageUrl }}&width=250 250w,
                                                    {{ $hoverImageUrl }}&width=300 300w,
                                                    {{ $hoverImageUrl }}&width=400 400w"
                                            width="400" 
                                            height="400" 
                                            loading="lazy" 
                                            sizes="30vw"
                                            class="image-snippet__img image-snippet__img--fill">
                                    </div>--}}
                                </div>
                            </a>
                        </div>

                        <div class="cl-product-card-info no_free_sample">
                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                <a class="hover-underline" href="{{ route('productDetails', $popular_product->slug) }}" title="{{ app()->getLocale() === 'bn' ? $popular_product->name_bn : $popular_product->name_en }}">
                                    @if(app()->getLocale() == 'bn')
                                        {{ $popular_product->name_bn }}
                                    @else
                                        {{ $popular_product->name_en }}
                                    @endif
                                </a>
                            </h3>
                            
                            <div class="cl-product-card-size">
                                <!-- Add actual size if available in your product model -->
                                {{ $popular_product->dimensions ?? '32 x 62.5 cm' }}
                            </div>

                            <div class="card-price mobile-size-- metafield-price-per-size">
                                <span data-price-per-meter-squared class="card-price__regular">
                                    {{ number_format($popular_product->price, 0) }} ৳
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                @empty
                <li class="swiper-slide">
                    <div class="text-center py-4">
                        <p>No popular products found</p>
                    </div>
                </li>
                @endforelse

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

                    .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation {
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

                    .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .new-swiper-button {
                      display: flex;
                      padding: 9px 6px 9px 8px;
                      background-color: rgba(245, 242, 237, 0.85);
                      pointer-events: auto;
                      cursor: pointer;
                    }

                    .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .new-swiper-button {
                      transition: all 0.2s ease-in-out;
                    }

                    .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .swiper-button-next--template--26303100518782__new_product_slider_eGenyy {
                      transform: translateX(100%);
                    }

                    .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .swiper-button-prev--template--26303100518782__new_product_slider_eGenyy {
                      transform: translateX(-100%);
                    }


                    .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation .new-swiper-button path {
                      stroke: rgb(var(--color-black));
                    }

                    @media screen and (min-width: 800px) {
                      .cl-product-card--rich.cl-product-card--7464710602942 .product-card__slider-navigation {
                        display: flex;
                      }

                      .cl-product-card--rich.cl-product-card--7464710602942 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                        transform: translateX(0);
                      }
                    }

                    @media screen and (max-width: 800px) {
                      .cl-product-card-info .card-price.mobile-size-- {
                        font-size: px;
                      }
                    }
                  </style>

<!-- lkldsjgkjdfgjdfksgjdksflgj dsfgjlkdsfg ldjlkg jsdklg jklsdfgj ksdgklsdgklsdjgkljsdkgjsdklf   -->

              </ul>
              <div class="swiper-pagination--progress-bar tablet-up-hide"></div>
            </div>
          </swiper-slider>
        </div>
      </div>

    </section>
    <section id="shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b"
      class="shopify-section">
      <style data-shopify>
        #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b {
          position: relative;
          overflow: hidden;
        }

        #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b .image-link-block>*+* {
          margin-top: 20px;
        }

        .section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b-padding {
          padding-top: calc(0px * 0.3);
          padding-bottom: calc(0px * 0.3);
          background: #2a2e36;
        }

        .image-with-text__text {
          padding: 32px;
        }

        .image-with-text--left .image-with-text__text {
          order: 2;
        }

        .image-with-text--right .image-with-text__text {
          order: 0;
        }

        .image-with-text__content .image-with-text__image {
          width: 100%;
          height: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
          aspect-ratio: var(--custom-aspect-ratio);
        }

        #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b .image-with-text__image img {
          object-fit: cover;
          width: 100%;
          height: 100%;
        }

        #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b .image-with-text__btn {
          padding: 8px 20px;
          font-size: 15px;
          font-weight: 600;
          line-height: 140%;
          min-height: 40px;
          min-width: 177px;
        }

        #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b .image-with-text {}

        #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b .image-with-text__p {
          font-size: 16px;
        }


        @media screen and (max-width: 1024px) {
          .section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b-padding.mobile--container {
            margin: 0 16px;
          }

          .section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b-padding.mobile--container {
            border-radius: 15px;
            overflow: hidden;
          }

        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b-padding {
            padding-top: calc(0px * 0.4);
            padding-bottom: calc(0px * 0.4);
          }
        }

        @media screen and (min-width: 1024px) {

          .section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b-padding {
            padding-top: 0px;
            padding-bottom: 0px;
          }

          .section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b-padding.desktop--container {
            margin: 0 auto;
            max-width: 1354px;
            width: 100%;
          }

          .image-with-text__content .image-with-text__text {
            align-items: left;

            max-width: 420px;
            min-width: 330px;

          }

          #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b .image-with-text__btn {
            font-size: 18px;
            min-height: 50px;
          }

          .section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b-padding .image-with-text__content {
            padding-inline: 0%;
          }


          #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b:before {
            position: absolute;
            content: "";
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 33%;
            background: rgba(0, 0, 0, 0);
          }

        }

        @media screen and (min-width: 2200px) {
          #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b:before {
            width: 40%;
          }
        }

        @media screen and (min-width: 3400px) {
          #shopify-section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b:before {
            width: 45%;
          }
        }
      </style>
      <div
        class="section-template--26303100518782__5032a3ba-03eb-4ac5-9f18-ef4c7ee5c71b-padding desktop--container mobile--fullwidth">
        <div class="image-with-text image-with-text--left">
          <div class="">
            <div class="image-with-text__content" style="color: #ffffff">


              <div class="image-with-text__image" style="aspect-ratio: 1.4285714285714286">

                <img src="cdn/shop/files/Chelsea-Checkerboard-N_W-089564.jpg?v=1724241129&amp;width=750"
                  srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=700 700w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Chelsea-Checkerboard-N_W-08.jpg?v=1724241129&amp;width=750 750w"
                  width="2048" height="70" loading="lazy" fetchpriority="auto" sizes="50vw">

              </div>

              <div class="image-with-text__text">

                <h3 class="image-with-text__heading h2">

                  <p>Timeless Classics</p>

                </h3>


                <div class="image-with-text__p text-body text-body--smaller">
                  <p>Add charm and character to your kitchens, hallways or bathrooms with our timeless checkerboard
                    tiles</p>
                </div>


                <a class="image-with-text__btn button" href="{{ route('shop') }}"
                  style="color: #000000; background-color:#ffffff">
                  Shop now
                </a>

              </div>


            </div>
          </div>
        </div>
      </div>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <section id="shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3"
      class="shopify-section section gapless-slider-section">
      <link href="cdn/shop/t/399/assets/section-new-testimonial-cardsddbc.css?v=5457717943832134721760535067"
        rel="stylesheet" type="text/css" media="all" />
      <style data-shopify>
        #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 {
          background: #f0ebe3;
        }

        #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 .swiper {
          overflow: visible;
        }

        .section-template--26303100518782__new_testimonials_advanced_m7QXc3-padding {
          padding-top: calc(52px * 0.75);
          padding-bottom: calc(52px * 0.75);
        }

        #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 .section-header-wrapper__icons {
          display: flex;
          width: 100%;
          justify-content: center;
          gap: 5px;
          margin-bottom: 8px;
        }

        #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 .section-header-wrapper__icon {
          width: 22px;
        }

        #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 .section-header-wrapper {
          margin-bottom: 35px;
        }

        #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 .section-header-wrapper__title {
          font-weight: 600;
          margin-top: 0;
        }

        #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 .section-header-wrapper__title.h2 {
          font-size: 30px;
          line-height: 140%;
        }


        @media screen and (min-width: 750px) {
          .section-template--26303100518782__new_testimonials_advanced_m7QXc3-padding {
            padding-top: 52px;
            padding-bottom: 52px;
          }

          #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 .section-header-wrapper__icons {
            margin-bottom: 16px;
          }

          #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 .section-header-wrapper__icon {
            width: 32px;
          }

          @media screen and (min-width: 1024px) {
            #shopify-section-template--26303100518782__new_testimonials_advanced_m7QXc3 {
              margin-top: 72px;
              margin-bottom: 0px;
            }

          }

        }
      </style>
      <div class="section-template--26303100518782__new_testimonials_advanced_m7QXc3-padding">
        <div class="container">
          <div class="section-header-wrapper text-center center">

            <div class="section-header-wrapper__icons">

              <div class="section-header-wrapper__icon">
                <svg width="100%" height="100%" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.9897 0.789551L22.2364 13.5635H35.9794L24.8611 21.4586L29.1079 34.2326L17.9897 26.3375L6.87146 34.2326L11.1182 21.4586L0 13.5635H13.7418L17.9897 0.789551Z"
                    fill="#000000" />
                </svg>
              </div>

              <div class="section-header-wrapper__icon">
                <svg width="100%" height="100%" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.9897 0.789551L22.2364 13.5635H35.9794L24.8611 21.4586L29.1079 34.2326L17.9897 26.3375L6.87146 34.2326L11.1182 21.4586L0 13.5635H13.7418L17.9897 0.789551Z"
                    fill="#000000" />
                </svg>
              </div>

              <div class="section-header-wrapper__icon">
                <svg width="100%" height="100%" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.9897 0.789551L22.2364 13.5635H35.9794L24.8611 21.4586L29.1079 34.2326L17.9897 26.3375L6.87146 34.2326L11.1182 21.4586L0 13.5635H13.7418L17.9897 0.789551Z"
                    fill="#000000" />
                </svg>
              </div>

              <div class="section-header-wrapper__icon">
                <svg width="100%" height="100%" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.9897 0.789551L22.2364 13.5635H35.9794L24.8611 21.4586L29.1079 34.2326L17.9897 26.3375L6.87146 34.2326L11.1182 21.4586L0 13.5635H13.7418L17.9897 0.789551Z"
                    fill="#000000" />
                </svg>
              </div>

              <div class="section-header-wrapper__icon">
                <svg width="100%" height="100%" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.9897 0.789551L22.2364 13.5635H35.9794L24.8611 21.4586L29.1079 34.2326L17.9897 26.3375L6.87146 34.2326L11.1182 21.4586L0 13.5635H13.7418L17.9897 0.789551Z"
                    fill="#000000" />
                </svg>
              </div>

            </div>



            <h3 class="section-header-wrapper__title tablet-hide h2">



              <p><strong>Our Client Reviews</strong></p>

            </h3>


            <h3 class="section-header-wrapper__title tablet-up-hide h2">



              <p><strong>Our Client Reviews</strong></p>

            </h3>


            <p class="section-header-wrapper__subtitle text-body text-body--large"></p>

          </div>
    <swiper-slider data-options='
    {
    "grabCursor": true,
    "speed": 500,
    "loop": false,
    "autoplay": false,
    "initialSlide": 1,
    "slidesPerView": 1.5,
    "centeredSlides": false,
    "spaceBetween": 14,
    "breakpoints": {
        "500": {
            "slidesPerView": 1.5
        },        
        "700": {
            "slidesPerView": 2.5,
            "initialSlide": 1
        },
        "800": {
            "slidesPerView": 3.5,
            "initialSlide": 0
        },
        "900": {
            "slidesPerView": 4,
            "initialSlide": 0
        },
        "1200": {
          "slidesPerView": 6,
          "initialSlide": 1
        }
    },
    "pagination": {
        "el": ".swiper-pagination--progress-bar",
        "type": "progressbar"
      }
    }
'>
            <div class="swiper">
              <ul class="advanced-testimonials-slider swiper-wrapper">
                @forelse($testimonials as $testimonial)
                <li class="swiper-slide swiper-slide--auto-height">
                  <div class="advanced-testimonial-card">
                    <div class="advanced-testimonial-card__media">
                    @php
                        $testimonialImage = $testimonial->image
                            ? asset('storage/' . $testimonial->image)
                            : asset('frontend/assets/img/northbengal/default_user.png');
                    @endphp

                    <img
                        src="{{ $testimonialImage }}"
                        alt="{{ app()->getLocale() === 'bn' ? $testimonial->name_bn : $testimonial->name_en }}"
                        loading="lazy"
                        width="606"
                        height="610">

                    </div>
                    <article class="advanced-testimonial-card__content text-left">

                      <div class="advanced-testimonial-card__text">
                        <p>
                        @if(app()->getLocale() == 'bn')
                            {!! \Illuminate\Support\Str::limit($testimonial->text_bn, 150) !!}
                        @else
                            {!! \Illuminate\Support\Str::limit($testimonial->text_en, 150) !!}
                        @endif

                        </p>
                      </div>
                      <p class="advanced-testimonial-card__author text-body text-body--small text--bold">- {{$testimonial->name}}, {{$testimonial->company}}
                      </p>

                      <a class="site-link underline" id="testimonial_button" href="{{ route('shop') }}">Shop
                        Now</a>

                    </article>
                  </div>
                </li>
                @empty 
                @endforelse
              </ul>
              <div class="swiper-pagination--progress-bar"></div>
            </div>
          </swiper-slider>
        </div>
      </div>

    </section>
    <section id="shopify-section-template--26303100518782__new_block_slider_rPMwy7"
      class="shopify-section section gapless-slider-section">
      <style data-shopify>
        #shopify-section-template--26303100518782__new_block_slider_rPMwy7 {
          background: rgba(0, 0, 0, 0)
        }


        .image-link-block__title {
          font-size: 18px;
          font-weight: 600;
        }

        .section-template--26303100518782__new_block_slider_rPMwy7-padding {
          padding-top: calc(48px);
          padding-bottom: calc(48px);
        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__new_block_slider_rPMwy7-padding {
            padding-top: 48px;
            padding-bottom: 48px;
          }

          #shopify-section-template--26303100518782__new_block_slider_rPMwy7 .section-header-wrapper {
            text-align: left;
          }

          #shopify-section-template--26303100518782__new_block_slider_rPMwy7 #slider_block_button {
            font-size: 14px;
          }
        }
      </style>
      <div class="section-template--26303100518782__new_block_slider_rPMwy7-padding">
        <div class="container">
          <div class="section-header-wrapper  text-left">

            <h3 class="section-header-wrapper__title h3">



              <p><strong>Trending styles</strong></p>

            </h3>


          </div>
          <swiper-slider data-options='
    {
    "speed": 500,
    "loop": false,
    "autoplay": false,
    "initialSlide": 0,
    "slidesPerView": 1.6,
    "centeredSlides": false,
    "spaceBetween": 8,
    "breakpoints": {
        "750": {
          "slidesPerView": 3
        },
        "900": {
          "slidesPerView": 4,
          "spaceBetween": 14,
          "centeredSlides": false
        },
        "1200": {
          "slidesPerView": 4,
          "spaceBetween": 18
        }
    },
    "navigation": {
    "nextEl": ".swiper-button-next--template--26303100518782__new_block_slider_rPMwy7",
    "prevEl": ".swiper-button-prev--template--26303100518782__new_block_slider_rPMwy7"
    },
    "pagination": {
        "el": ".swiper-pagination--progress-bar",
        "type": "progressbar"
      }
    }
'>
            <div class="swiper">
              <ul class="blocks-slider swiper-wrapper text-left">

              @forelse($products as $product)

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block" href="{{ route('productDetails', $product->slug) }}">
                    <div
                      class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                      <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}&amp;width=750"
                        srcset="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}, {{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}&amp;width=500 500w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}?v=1758919714&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Terrazzo-Beige-02.jpg?v=1758919714&amp;width=650 650w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}?v=1758919714&amp;width=750 750w"
                        width="2048" height="2048.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                    </div>
                    <p class="image-link-block__title text-body text-body--large text--bold">
                        @if(app()->getLocale() == 'bn')
                            {{ $product->name_bn }}
                        @else
                            {{ $product->name_en }}
                        @endif
                    </p>

                    <a class="site-link underline" id="slider_block_button" href="{{ route('productDetails', $product->slug) }}">Shop
                      now</a>
                  </a>
                </li>
                @empty 
                <p>There have no tiles here </p>
                @endforelse

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block" href="#">
                    <div
                      class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                      <img
                        src="cdn/shop/files/Meadow-Decor-05_f5517d58-6a6f-45a4-a61d-951eef7f473577b2.jpg?v=1764866925&amp;width=750"
                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Meadow-Decor-05_f5517d58-6a6f-45a4-a61d-951eef7f4735.jpg?v=1764866925&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Meadow-Decor-05_f5517d58-6a6f-45a4-a61d-951eef7f4735.jpg?v=1764866925&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Meadow-Decor-05_f5517d58-6a6f-45a4-a61d-951eef7f4735.jpg?v=1764866925&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Meadow-Decor-05_f5517d58-6a6f-45a4-a61d-951eef7f4735.jpg?v=1764866925&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Meadow-Decor-05_f5517d58-6a6f-45a4-a61d-951eef7f4735.jpg?v=1764866925&amp;width=750 750w"
                        width="2048" height="2048.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                    </div>
                    <p class="image-link-block__title text-body text-body--large text--bold">
                      Patterned
                    </p>
                    <a class="site-link underline" id="slider_block_button" href="#">Shop
                      now</a>
                  </a>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block" href="#">
                    <div
                      class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                      <img src="cdn/shop/files/Fez-Mix-Beige-Ruby-012443.jpg?v=1764245782&amp;width=750"
                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Mix-Beige-Ruby-01.jpg?v=1764245782&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Mix-Beige-Ruby-01.jpg?v=1764245782&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Mix-Beige-Ruby-01.jpg?v=1764245782&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Mix-Beige-Ruby-01.jpg?v=1764245782&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Fez-Mix-Beige-Ruby-01.jpg?v=1764245782&amp;width=750 750w"
                        width="2048" height="2048.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                    </div>
                    <p class="image-link-block__title text-body text-body--large text--bold">
                      Zellige
                    </p>
                    <a class="site-link underline" id="slider_block_button" href="#">Shop
                      now</a>
                  </a>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block" href="#">
                    <div
                      class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                      <img src="cdn/shop/files/Moxie-Emerald-026385.jpg?v=1731948098&amp;width=750"
                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-02.jpg?v=1731948098&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-02.jpg?v=1731948098&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-02.jpg?v=1731948098&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-02.jpg?v=1731948098&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Moxie-Emerald-02.jpg?v=1731948098&amp;width=750 750w"
                        width="2048" height="2048.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                    </div>
                    <p class="image-link-block__title text-body text-body--large text--bold">
                      Kit Kat
                    </p>
                    <a class="site-link underline" id="slider_block_button" href="#">Shop
                      now</a>
                  </a>
                </li>

              </ul>
              <div class="swiper-pagination--progress-bar tablet-up-hide"></div>
            </div>
          </swiper-slider>
        </div>
      </div>

    </section>
    <section id="shopify-section-template--26303100518782__image_with_text_68rnxe" class="shopify-section">
      <style data-shopify>
        #shopify-section-template--26303100518782__image_with_text_68rnxe {
          position: relative;
          overflow: hidden;
        }

        #shopify-section-template--26303100518782__image_with_text_68rnxe .image-link-block>*+* {
          margin-top: 20px;
        }

        .section-template--26303100518782__image_with_text_68rnxe-padding {
          padding-top: calc(32px * 0.3);
          padding-bottom: calc(32px * 0.3);
          background: #f9c34e;
        }

        .image-with-text__text {
          padding: 32px;
        }

        .image-with-text--left .image-with-text__text {
          order: 2;
        }

        .image-with-text--right .image-with-text__text {
          order: 0;
        }

        .image-with-text__content .image-with-text__image {
          width: 100%;
          height: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
          aspect-ratio: var(--custom-aspect-ratio);
        }

        #shopify-section-template--26303100518782__image_with_text_68rnxe .image-with-text__image img {
          object-fit: contain;
          width: 85%;
          height: 100%;
        }

        #shopify-section-template--26303100518782__image_with_text_68rnxe .image-with-text__btn {
          padding: 8px 20px;
          font-size: 15px;
          font-weight: 600;
          line-height: 140%;
          min-height: 40px;
          min-width: 177px;
        }

        #shopify-section-template--26303100518782__image_with_text_68rnxe .image-with-text {}

        #shopify-section-template--26303100518782__image_with_text_68rnxe .image-with-text__p {
          font-size: 16px;
        }


        @media screen and (max-width: 1024px) {
          .section-template--26303100518782__image_with_text_68rnxe-padding.mobile--container {
            margin: 0 16px;
          }

          .section-template--26303100518782__image_with_text_68rnxe-padding.mobile--container {
            border-radius: 15px;
            overflow: hidden;
          }

        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__image_with_text_68rnxe-padding {
            padding-top: calc(32px * 0.4);
            padding-bottom: calc(32px * 0.4);
          }
        }

        @media screen and (min-width: 1024px) {

          .section-template--26303100518782__image_with_text_68rnxe-padding {
            padding-top: 32px;
            padding-bottom: 32px;
          }

          .section-template--26303100518782__image_with_text_68rnxe-padding.desktop--container {
            margin: 0 auto;
            max-width: 1354px;
            width: 100%;
          }

          .image-with-text__content .image-with-text__text {
            align-items: left;

          }

          #shopify-section-template--26303100518782__image_with_text_68rnxe .image-with-text__btn {
            font-size: 18px;
            min-height: 50px;
          }

          .section-template--26303100518782__image_with_text_68rnxe-padding .image-with-text__content {
            padding-inline: 20%;
          }


          #shopify-section-template--26303100518782__image_with_text_68rnxe:before {
            position: absolute;
            content: "";
            display: block;
            top: 0;
            bottom: 0;
            right: 0;
            height: 100%;
            width: 33%;
            background: rgba(0, 0, 0, 0);
          }

        }

        @media screen and (min-width: 2200px) {
          #shopify-section-template--26303100518782__image_with_text_68rnxe:before {
            width: 40%;
          }
        }

        @media screen and (min-width: 3400px) {
          #shopify-section-template--26303100518782__image_with_text_68rnxe:before {
            width: 45%;
          }
        }
      </style>

      <div
        class="section-template--26303100518782__image_with_text_68rnxe-padding desktop--fullwidth mobile--container">
        <div class="image-with-text image-with-text--right">
          <div class="">
            <div class="image-with-text__content" style="color: #000000">


              <div class="image-with-text__text">

                <h3 class="image-with-text__heading h2">



                  <p>Free Samples</p>

                </h3>


                <div class="image-with-text__p text-body text-body--smaller">
                  <p>Try before you buy with our sample service - completely free of charge and delivered in two working
                    days.</p>
                </div>


                <a class="image-with-text__btn button" href="#"
                  style="color: #ffffff; background-color:#000000">
                  Read More
                </a>

              </div>



              <div class="image-with-text__image" style="aspect-ratio: 2.0">

                <img src="cdn/shop/files/sample-box98ac.png?v=1759245573&amp;width=750"
                  srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=700 700w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=750 750w"
                  width="1024" height="50" loading="lazy" fetchpriority="auto" sizes="50vw">

              </div>


            </div>
          </div>
        </div>
      </div>


    </section>
    <section id="shopify-section-template--26303100518782__new_block_slider_fPxCPL"
      class="shopify-section section gapless-slider-section">
      <style data-shopify>
        #shopify-section-template--26303100518782__new_block_slider_fPxCPL {
          background: rgba(0, 0, 0, 0)
        }


        .image-link-block__title {
          font-size: 18px;
          font-weight: 600;
        }

        .section-template--26303100518782__new_block_slider_fPxCPL-padding {
          padding-top: calc(36px);
          padding-bottom: calc(44px);
        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__new_block_slider_fPxCPL-padding {
            padding-top: 36px;
            padding-bottom: 44px;
          }

          #shopify-section-template--26303100518782__new_block_slider_fPxCPL .section-header-wrapper {
            text-align: left;
          }

          #shopify-section-template--26303100518782__new_block_slider_fPxCPL #slider_block_button {
            font-size: 14px;
          }
        }
      </style>
      <div class="section-template--26303100518782__new_block_slider_fPxCPL-padding">
        <div class="container">
          <div class="section-header-wrapper  text-left">

            <h3 class="section-header-wrapper__title h3">



              <p><strong>Shop by Colour</strong></p>

            </h3>


          </div>
          <swiper-slider data-options='
    {
    "speed": 500,
    "loop": false,
    "autoplay": false,
    "initialSlide": 0,
    "slidesPerView": 2.5,
    "centeredSlides": false,
    "spaceBetween": 8,
    "breakpoints": {
        "750": {
          "slidesPerView": 3
        },
        "900": {
          "slidesPerView": 4,
          "spaceBetween": 14,
          "centeredSlides": false
        },
        "1200": {
          "slidesPerView": 6,
          "spaceBetween": 18
        }
    },
    "navigation": {
    "nextEl": ".swiper-button-next--template--26303100518782__new_block_slider_fPxCPL",
    "prevEl": ".swiper-button-prev--template--26303100518782__new_block_slider_fPxCPL"
    },
    "pagination": {
        "el": ".swiper-pagination--progress-bar",
        "type": "progressbar"
      }
    }
'>
            <div class="swiper">
              <ul class="blocks-slider swiper-wrapper text-left">

              @forelse($color_products as $color_product)
                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block" href="{{ route('productDetails', $color_product->slug) }}">
                    <div
                      class="image-link-block__media media-hover media-hover--scale aspect-media aspect-media--rounded aspect-media--square">
                      <img
                        src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $color_product->fi()]) }}?v=1620319741&amp;width=750"
                        srcset="{{ route('imagecache', ['template' => 'pnism', 'filename' => $color_product->fi()]) }}?v=1620319741&amp;width=450 450w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $color_product->fi()]) }}?v=1620319741&amp;width=500 500w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $color_product->fi()]) }}?v=1620319741&amp;width=550 550w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $color_product->fi()]) }}?v=1620319741&amp;width=650 650w, {{ route('imagecache', ['template' => 'pnism', 'filename' => $color_product->fi()]) }}?v=1620319741&amp;width=750 750w"
                        width="650" height="650.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                    </div>
                    <p class="image-link-block__title text-body text-body--large text--bold">
                        @if(app()->getLocale() == 'bn')
                            {{ $color_product->name_bn }}
                        @else
                            {{ $color_product->name_en }}
                        @endif
                    </p>
                    <a class="site-link underline" id="slider_block_button" href="{{ route('productDetails', $color_product->slug) }}">Shop
                      now</a>
                  </a>
                </li>
                @empty 
                
                @endforelse 

              </ul>
              <div class="swiper-pagination--progress-bar tablet-up-hide"></div>
            </div>
          </swiper-slider>
        </div>
      </div>

    </section>
    <section id="shopify-section-template--26303100518782__new_complex_grid_blocks_djLRRP"
      class="shopify-section section">
      <link href="cdn/shop/t/399/assets/section-complex-gridf9d4.css?v=68589970837183501041760535067" rel="stylesheet"
        type="text/css" media="all" />
      <style data-shopify>
        #shopify-section-template--26303100518782__new_complex_grid_blocks_djLRRP {
          background: #f0ebe3
        }

        #shopify-section-template--26303100518782__new_complex_grid_blocks_djLRRP .grid {
          --grid-desktop-horizontal-spacing: 24px;
          --grid-desktop-vertical-spacing: 24px;
          --grid-mobile-horizontal-spacing: 15px;
          --grid-mobile-vertical-spacing: 15px;
        }

        #shopify-section-template--26303100518782__new_complex_grid_blocks_djLRRP .complex-grid {
          --grid-desktop-horizontal-spacing: 24px;
          --grid-desktop-vertical-spacing: 24px;
          --grid-mobile-horizontal-spacing: 15px;
          --grid-mobile-vertical-spacing: 15px;
        }

        .section-template--26303100518782__new_complex_grid_blocks_djLRRP-padding {
          padding-top: calc(40px * 0.75);
          padding-bottom: calc(40px * 0.75);
        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__new_complex_grid_blocks_djLRRP-padding {
            padding-top: 40px;
            padding-bottom: 40px;
          }
        }

        .new-grid-blocks .collection-card {
          border-radius: 0;
        }

        .new-grid-blocks .new-grid-blocks__list {
          display: grid;
          width: 100%;
          row-gap: 28px;
          column-gap: 10px;
        }

        .new-grid-blocks .new-grid-blocks__list .collection-card {
          position: relative;
          height: 100%;
          display: flex;
          flex-direction: column;
        }

        .new-grid-blocks .new-grid-blocks__list .collection-card__descrition {
          display: flex;
          flex-direction: column;
          flex-grow: 1;
        }

        .new-grid-blocks .new-grid-blocks__list .site-link--underline {
          margin-top: auto;
        }


        #shopify-section-template--26303100518782__new_complex_grid_blocks_djLRRP .new-grid-blocks .new-grid-blocks__list {
          grid-template-columns: repeat(2, minmax(0, 1fr));
          ;
        }

        .new-grid-blocks .collection-card__media {
          overflow: hidden;

        }

        .new-grid-blocks .collection-card__media--square {
          border-radius: 10px;
          aspect-ratio: 1/1;
        }

        .new-grid-blocks .collection-card__media--circle {
          aspect-ratio: 1/1;
          border-radius: 100%;
        }

        .new-grid-blocks .collection-card__media--arch {
          aspect-ratio: 0.75;
          border-radius: 70px 70px 0 0;
        }

        .new-grid-blocks img {
          height: 100%;
          object-fit: cover;
        }

        .new-grid-blocks .collection-card__title {
          font-size: 18px;
          font-weight: 600;
          margin-top: 10px;
          display: block;
          line-height: 140%;
        }

        .new-grid-blocks .collection-card__info {
          margin-block: 8px 15px;
          line-height: 140%;
        }

        .new-grid-blocks .site-link {
          font-size: 13px;
          margin-top: 3px;
        }

        @media screen and (min-width: 1024px) {
          #shopify-section-template--26303100518782__new_complex_grid_blocks_djLRRP .new-grid-blocks .new-grid-blocks__list {
            grid-template-columns: repeat(4, minmax(0, 1fr));
            column-gap: 18px;
          }

        }
      </style>
      <div class="section-template--26303100518782__new_complex_grid_blocks_djLRRP-padding">
        <div class="container">

          <div class="section-header-wrapper text-left">
            <h2 class="section-header-wrapper__title h3">



              <p><strong>We're here to help</strong></p>

            </h2>
          </div>


          <div class="new-grid-blocks">
            <ul class="new-grid-blocks__list">

              <li class="new-grid-blocks__item">

                <a class="collection-card" href="{{ route('contact') }}">
                  <div class="collection-card__media collection-card__media--square">
                    <img src="cdn/shop/files/contact-usf7d8.png?v=1755707871&amp;width=650"
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/contact-us.png?v=1755707871&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/contact-us.png?v=1755707871&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/contact-us.png?v=1755707871&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/contact-us.png?v=1755707871&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/contact-us.png?v=1755707871&amp;width=650 650w"
                      width="622" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                  <div class="collection-card__descrition">
                    <span class="collection-card__title">
                      <p>Contact Us</p>
                    </span>
                    <p class="collection-card__info">Chat, email, call or WhatsApp - our team will help with any tile
                      query.</p>
                    <span class="site-link--underline" style="color: #000000">
                      <p><strong>Chat to Us</strong></p>
                    </span>

                  </div>
                </a>
              </li>

              <li class="new-grid-blocks__item">

                <a class="collection-card" href="{{ route('contact') }}">
                  <div class="collection-card__media collection-card__media--square">
                    <img src="cdn/shop/files/ChevronOakTiled6ac.jpg?v=1750236872&amp;width=650"
                      alt="Chevron Oak Floor Tile"
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/ChevronOakTile.jpg?v=1750236872&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ChevronOakTile.jpg?v=1750236872&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ChevronOakTile.jpg?v=1750236872&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ChevronOakTile.jpg?v=1750236872&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/ChevronOakTile.jpg?v=1750236872&amp;width=650 650w"
                      width="2048" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                  <div class="collection-card__descrition">
                    <span class="collection-card__title">
                      <p>Help & Advice</p>
                    </span>
                    <p class="collection-card__info">Guides on choosing, installing and caring for your tiles - all in
                      one place.</p>
                    <span class="site-link--underline" style="color: #000000">
                      <p><strong>Read More</strong></p>
                    </span>

                  </div>
                </a>
              </li>

              <li class="new-grid-blocks__item">

                <a class="collection-card" href="{{ route('trade') }}">
                  <div class="collection-card__media collection-card__media--square">
                    <img src="cdn/shop/files/tradeb907.png?v=1759246504&amp;width=650"
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/trade.png?v=1759246504&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/trade.png?v=1759246504&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/trade.png?v=1759246504&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/trade.png?v=1759246504&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/trade.png?v=1759246504&amp;width=650 650w"
                      width="1024" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                  <div class="collection-card__descrition">
                    <span class="collection-card__title">
                      <p>Trade Accounts</p>
                    </span>
                    <p class="collection-card__info">Interior designer, architect, tiler or builder? Get exclusive
                      discounts & more.</p>
                    <span class="site-link--underline" style="color: #000000">
                      <p><strong>Open an Account</strong></p>
                    </span>

                  </div>
                </a>
              </li>

              <li class="new-grid-blocks__item">

                <a class="collection-card" href="#">
                  <div class="collection-card__media collection-card__media--square">
                    <img src="cdn/shop/files/carnaby-pink86f9.jpg?v=1729778589&amp;width=650"
                      srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/carnaby-pink.jpg?v=1729778589&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/carnaby-pink.jpg?v=1729778589&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/carnaby-pink.jpg?v=1729778589&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/carnaby-pink.jpg?v=1729778589&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/carnaby-pink.jpg?v=1729778589&amp;width=650 650w"
                      width="500" loading="lazy" fetchpriority="auto" sizes="100vw">
                  </div>
                  <div class="collection-card__descrition">
                    <span class="collection-card__title">
                      <p>Inspiration</p>
                    </span>
                    <p class="collection-card__info">Browse real homes, style ideas and design tips to spark your next
                      project.</p>
                    <span class="site-link--underline" style="color: #000000">
                      <p><strong>Get Inspired</strong></p>
                    </span>

                  </div>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>


    </section>
    <section id="shopify-section-template--26303100518782__new_instagram_section_jCJTV4"
      class="shopify-section section gapless-slider-section">
      <link href="cdn/shop/t/399/assets/section-new-testimonial-cardsddbc.css?v=5457717943832134721760535067"
        rel="stylesheet" type="text/css" media="all" />
      <style data-shopify>
        #shopify-section-template--26303100518782__new_instagram_section_jCJTV4 {
          background: rgba(0, 0, 0, 0)
        }


        #shopify-section-template--26303100518782__new_instagram_section_jCJTV4 .image-link-block>*+* {
          margin-top: 20px;
        }

        .section-template--26303100518782__new_instagram_section_jCJTV4-padding {
          padding-top: calc(40px * 0.75);
          padding-bottom: calc(80px * 0.75);
        }


        .section-template--26303100518782__new_instagram_section_jCJTV4-padding .instagram-section__subtitle {
          margin-top: 0;
        }

        .section-template--26303100518782__new_instagram_section_jCJTV4-padding .instagram-section__title {
          margin-bottom: 32px;
        }

        @media screen and (min-width: 750px) {
          .section-template--26303100518782__new_instagram_section_jCJTV4-padding {
            padding-top: 40px;
            padding-bottom: 80px;
          }
        }
      </style>
      <div class="section-template--26303100518782__new_instagram_section_jCJTV4-padding">
        <div class="container">
          <div class="instagram-section__title section-header-wrapper text-center center">


            <h3 class="section-header-wrapper__title h1">



              <p>Latest Stories</p>

            </h3>


            <p class="section-header-wrapper__subtitle text-body text-body--large instagram-section__subtitle">For new
            styles and inspirations follow @musafirint on social media</p>

          </div>
          <swiper-slider data-options='
    {
    "speed": 500,
    "loop": false,
    "autoplay": false,
    "initialSlide": 1,
    "slidesPerView": 1.5,
    "centeredSlides": true,
    "spaceBetween": 14,
    "breakpoints": {
        "750": {
          "slidesPerView": 3
        },
        "900": {
          "initialSlide": 0,
          "slidesPerView": 4,
          "spaceBetween": 16,
          "centeredSlides": false
        },
        "1200": {
          "centeredSlides": false,
          "slidesPerView": 5,
          "spaceBetween": 18
        }
    },
    "navigation": {
    "nextEl": ".swiper-button-next--template--26303100518782__new_instagram_section_jCJTV4",
    "prevEl": ".swiper-button-prev--template--26303100518782__new_instagram_section_jCJTV4"
    },
    "pagination": {
        "el": ".bullets--template--26303100518782__new_instagram_section_jCJTV4"
    }
    }
'>
            <div class="swiper">
              <ul class="insta-blocks-slider swiper-wrapper">

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block text-center center"
                    href="https://www.instagram.com/p/Cq75YWHIBSy/?img_index=2">
                    <div
                      class="image-link-block__media media-hover aspect-media aspect-media--rounded aspect-media--square">
                      <img src="cdn/shop/files/Green_kitchen_wall_tiles803c.jpg?v=1725527540&amp;width=750"
                        alt="Green tiles in shaker kitchen"
                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Green_kitchen_wall_tiles.jpg?v=1725527540&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Green_kitchen_wall_tiles.jpg?v=1725527540&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Green_kitchen_wall_tiles.jpg?v=1725527540&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Green_kitchen_wall_tiles.jpg?v=1725527540&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Green_kitchen_wall_tiles.jpg?v=1725527540&amp;width=750 750w"
                        width="240" height="240.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                      <div class="media-hover-overlay media-hover-overlay--instagram"></div>
                    </div>
                  </a>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block text-center center"
                    href="https://www.instagram.com/ahouseonashbank/p/CYuOFRNL3E2/">
                    <div
                      class="image-link-block__media media-hover aspect-media aspect-media--rounded aspect-media--square">
                      <img src="cdn/shop/files/Herringbone_wood_tiles3470.jpg?v=1725527578&amp;width=750"
                        alt="Wood tiles laid herringbone"
                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Herringbone_wood_tiles.jpg?v=1725527578&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Herringbone_wood_tiles.jpg?v=1725527578&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Herringbone_wood_tiles.jpg?v=1725527578&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Herringbone_wood_tiles.jpg?v=1725527578&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Herringbone_wood_tiles.jpg?v=1725527578&amp;width=750 750w"
                        width="1440" height="1800.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                      <div class="media-hover-overlay media-hover-overlay--instagram"></div>
                    </div>
                  </a>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block text-center center" href="https://www.instagram.com/p/C42qrUvMRuy/">
                    <div
                      class="image-link-block__media media-hover aspect-media aspect-media--rounded aspect-media--square">
                      <img src="cdn/shop/files/Black_and_white_victorian_floor_tiles8e27.jpg?v=1725527608&amp;width=750"
                        alt="Victorian tiles in hallway"
                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Black_and_white_victorian_floor_tiles.jpg?v=1725527608&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Black_and_white_victorian_floor_tiles.jpg?v=1725527608&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Black_and_white_victorian_floor_tiles.jpg?v=1725527608&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Black_and_white_victorian_floor_tiles.jpg?v=1725527608&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Black_and_white_victorian_floor_tiles.jpg?v=1725527608&amp;width=750 750w"
                        width="1440" height="1797.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                      <div class="media-hover-overlay media-hover-overlay--instagram"></div>
                    </div>
                  </a>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block text-center center" href="https://www.instagram.com/p/C5DLJKgKwvG/">
                    <div
                      class="image-link-block__media media-hover aspect-media aspect-media--rounded aspect-media--square">
                      <img src="cdn/shop/files/Gloss_white_kitchen_splashback_tilesc024.jpg?v=1725527641&amp;width=750"
                        alt="Gloss white tiles over kitchen splashback"
                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Gloss_white_kitchen_splashback_tiles.jpg?v=1725527641&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Gloss_white_kitchen_splashback_tiles.jpg?v=1725527641&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Gloss_white_kitchen_splashback_tiles.jpg?v=1725527641&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Gloss_white_kitchen_splashback_tiles.jpg?v=1725527641&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Gloss_white_kitchen_splashback_tiles.jpg?v=1725527641&amp;width=750 750w"
                        width="1440" height="1800.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                      <div class="media-hover-overlay media-hover-overlay--instagram"></div>
                    </div>
                  </a>
                </li>

                <li class="swiper-slide swiper-slide--auto-height">
                  <a class="image-link-block text-center center" href="https://www.instagram.com/p/C42TqgDuyDB/">
                    <div
                      class="image-link-block__media media-hover aspect-media aspect-media--rounded aspect-media--square">
                      <img
                        src="cdn/shop/files/Pink_fluted_wall_tiles_f00509c8-db97-483e-ad0b-f00d4ab5965bd9d5.jpg?v=1725530382&amp;width=750"
                        alt="Pink fluted splashback tiles"
                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Pink_fluted_wall_tiles_f00509c8-db97-483e-ad0b-f00d4ab5965b.jpg?v=1725530382&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pink_fluted_wall_tiles_f00509c8-db97-483e-ad0b-f00d4ab5965b.jpg?v=1725530382&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pink_fluted_wall_tiles_f00509c8-db97-483e-ad0b-f00d4ab5965b.jpg?v=1725530382&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pink_fluted_wall_tiles_f00509c8-db97-483e-ad0b-f00d4ab5965b.jpg?v=1725530382&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Pink_fluted_wall_tiles_f00509c8-db97-483e-ad0b-f00d4ab5965b.jpg?v=1725530382&amp;width=750 750w"
                        width="1080" height="720.0" loading="lazy" fetchpriority="auto" sizes="100vw">
                      <div class="media-hover-overlay media-hover-overlay--instagram"></div>
                    </div>
                  </a>
                </li>

              </ul>


            </div>
          </swiper-slider>
        </div>
      </div>

    </section>
  </main>
@endsection



@push('js')

@endpush