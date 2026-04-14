@extends('frontend.layouts.ecommercemaster')
@section('title', "Product Detail - ".env('APP_NAME'))

@push('css')

<style>
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-1px) scale(1.01);
        /* subtle movement + light zoom */
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.12);
        /* soft shadow */
    }
</style>

@endpush

@section('content')

<main role="main" id="MainContent">

    <div id="shopify-section-template--26303101174142__shogun-helper" class="shopify-section">

        <script type="text/javascript">
            window.__shgMoneyFormat = window.__shgMoneyFormat || {
                "GBP": {
                    "currency": "GBP",
                    "currency_symbol": "£",
                    "currency_symbol_location": "left",
                    "decimal_places": 2,
                    "decimal_separator": ".",
                    "thousands_separator": ","
                }
            };
            window.__shgCurrentCurrencyCode = window.__shgCurrentCurrencyCode || {
                currency: "GBP",
                currency_symbol: "£",
                decimal_separator: ".",
                thousands_separator: ",",
                decimal_places: 2,
                currency_symbol_location: "left"
            };
        </script>

    </div>
    <div id="shopify-section-template--26303101174142__main" class="shopify-section">
        <style>
            #shopify-section-template--26303101174142__main {
                overflow: hidden;
            }
        </style>

        <script>
            function cleanRefURL() {
                let url = document.referrer;
                let domain = document.location.origin;
                let path = url.replace(domain, '');
                let list = '';
                let length;
                if (path.includes('?')) {
                    let pos = path.indexOf('?');
                    list = path.slice(0, pos);
                } else {
                    list = path;
                }
                length = list.length;
                if (list.length > 1 && list.charAt(length - 1) == 'https://www.porcelainsuperstore.co.uk/') {
                    return list.slice(0, length - 1);
                } else if (list.length <= 1) {
                    return '/';
                } else {
                    return list;
                }
            }
            window.dataLayer = window.dataLayer || [];
            dataLayer.push({
                ecommerce: null
            });
            dataLayer.push({
                event: 'dl_view_item',
                ecommerce: {
                    currencyCode: 'GBP',
                    detail: {
                        actionField: {
                            list: cleanRefURL()
                        },
                        products: [{
                            name: 'Petra Ivory Floor Tile',
                            variant: 'Box',
                            id: 'LMR846N',
                            dimension2: '8292759634110',
                            dimension3: '44503110090942',
                            price: 0.0,
                            brand: 'PS - Stock',
                            category: 'Tile',
                            list_name: cleanRefURL()
                        }]
                    }
                }
            });
        </script>

        <div id="shopify-section-product"
            data-recently-viewed='{"handle": "petra-ivory-floor-tile", "title": "Petra Ivory Floor Tile", "url": "/products/petra-ivory-floor-tile", "image": "//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06_280x280.jpg?v=1726046231"}'
            data-product-variant-info='{                              "44503110090942": {        "price_per_meter_squared": "£39.00",        "sale_price_per_meter_squared": "",        "per_box_size": "0.96",        "size_dimensions": "40 x 60 cm",        "spec": ""        },                              "44503110123710": {        "price_per_meter_squared": "",        "sale_price_per_meter_squared": "",        "per_box_size": "0",        "size_dimensions": "",        "spec": ""        },                              "44503110156478": {        "price_per_meter_squared": "",        "sale_price_per_meter_squared": "",        "per_box_size": "0",        "size_dimensions": "",        "spec": ""        }}'
            class="yotpo-gallery-null">

            <section class="breadcrumbs-snippet" role="navigation" aria-label="breadcrumbs">
                <div class=" container ">

                    <a href="https://www.porcelainsuperstore.co.uk/" title="home">home</a>

                    <span aria-hidden="true" class="breadcrumbs-arrow"></span>

                    <a href="https://www.porcelainsuperstore.co.uk/collections/floor-tiles" title="">Floor Tiles</a>
                    <span aria-hidden="true" class="breadcrumbs-arrow"></span>
                    <a href="https://www.porcelainsuperstore.co.uk/collections/stone-effect-tiles" title="">Stone Effect
                        Tiles</a>

                </div>
            </section>

            <div class="product-details-upper" samitapbl-element="handle" p-handle="petra-ivory-floor-tile">
                <div class="container">
                    <div class="product-details__grid">

                        <style>
                            .product-media-list--new {
                                display: flex;
                                flex-direction: column;
                                gap: 0;
                            }


                            /* SWIPER SLIDER */
                            #pdpSwiperSlider,
                            .product-page-utilities {
                                --thumbs-width: 70px;
                                --slider-gap: 0;
                                position: relative;
                            }

                            #pdpSwiperSlider .main-product-page-slider {
                                margin-left: var(--slider-gap);
                            }

                            /* Main Slider */

                            /* #pdpSwiperSlider .td-product-media .swiper-slide {
  height: 0 !important;
  position: relative;
  padding-top: 100%;
} */

                            /* #pdpSwiperSlider .td-product-media .swiper-slide  img {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
} */

                            /* THUMBS */
                            #pdpSwiperSlider .swiper-thumbs {
                                display: block;
                                max-width: var(--thumbs-width);
                                min-width: var(--thumbs-width);
                            }


                            #pdpSwiperSlider img {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }

                            #pdpSwiperSlider .swiper-thumbs img {
                                display: flex;
                            }

                            #pdpSwiperSlider .swiper-thumbs .has-shading img {
                                opacity: .5;
                                transition: opacity .3s ease;
                            }

                            #pdpSwiperSlider .swiper-thumbs .swiper-slide.swiper-slide-thumb-active img {
                                opacity: 1;
                                border: 1px solid rgb(var(--border-1));
                            }

                            #pdpSwiperSlider .swiper-thumbs .swiper-slide.swiper-slide-thumb-active {
                                opacity: 1;
                                border: 1px solid #000;
                            }

                            #pdpSwiperSlider .swiper-pagination-bullets {
                                margin-top: 0;
                                margin-bottom: 0px;
                                width: 100% !important;
                                left: 0 !important;
                                bottom: 0;
                                top: 0;
                                justify-content: center;
                                align-items: center;
                                display: flex;
                            }

                            .main-product-page-slider {
                                position: relative;
                            }

                            .main-product-page-slider .custom-swiper-button {
                                --size: 40px;
                                top: 50%;
                                display: none;
                                align-items: center;
                                justify-content: center;
                                z-index: 10;
                                position: absolute;
                                transform: translateY(-50%);
                                width: var(--size);
                                height: var(--size);
                                background: rgb(var(--color-white));
                                border-radius: 100%;
                                cursor: pointer;
                                box-shadow: 0px 0px 24px 0px rgba(28, 28, 28, 0.19);
                            }

                            .main-product-page-slider .custom-swiper-button[prev] {
                                left: 1rem;
                            }

                            .main-product-page-slider .custom-swiper-button[next] {
                                right: 1rem;
                            }

                            .main-product-page-slider .custom-swiper-button svg {
                                width: 15px;
                                top: 1px;
                                position: relative;
                                height: 15px;
                            }

                            @media screen and (min-width: 1025px) {
                                #shopify-section-product .product-reviews-badge {
                                    max-width: 100%;
                                    margin-inline: auto;
                                    position: relative;
                                    margin-top: 30px;
                                }

                                @media screen and (max-width: 1024px) {


                                    .swiper-slide {
                                        width: 100% !important;
                                    }
                                }

                                #pdpSwiperSlider .swiper-pagination-bullets {
                                    display: none;
                                    margin-top: 4rem;
                                    margin-bottom: 0;
                                }

                                .main-product-page-slider .custom-swiper-button {
                                    display: flex;
                                }


                                #pdpSwiperSlider,
                                .product-page-utilities {
                                    --slider-gap: 20px;
                                    --thumbs-width: 70px;
                                }

                                #pdpSwiperSlider {
                                    --slider-gap: 20px;
                                    --thumbs-width: 70px;
                                    position: relative;
                                    display: flex;
                                    flex-direction: row-reverse;
                                    overflow: hidden;
                                    /* max-height: calc(var(--thumbs-width) * 5.6); */
                                }

                                .product-media-list--new {
                                    display: grid;
                                    grid-template-columns: auto;
                                    gap: 0;
                                }

                                #pdpSwiperSlider .swiper-thumbs {
                                    display: block;
                                    height: 100%;
                                    width: 100%;
                                    overflow: hidden;
                                }

                                #pdpSwiperSlider .main-product-page-slider {
                                    position: relative;
                                    max-width: calc(100% - var(--thumbs-width) - var(--slider-gap));
                                    width: 100%;
                                }

                                .main-product-page-slider .swiper-container {
                                    max-height: 680px;
                                    height: 100%;
                                    overflow: hidden;
                                }

                            }

                            .main-product-page-slider .aspect-media {
                                height: 100%;
                            }


                            .product-page-thumb-slider {
                                max-height: calc(var(--thumbs-width) * 5.6);
                            }

                            .main-product-page-slider__video-preview {
                                display: none;
                            }

                            @media screen and (min-width: 1024px) {
                                .product-media-list {
                                    margin-bottom: 0;
                                }

                                .product-page__media-container {
                                    margin-left: calc(var(--slider-gap) + var(--thumbs-width));
                                }

                                .main-product-page-slider__video-preview {
                                    display: block;
                                }
                            }

                            @media screen and (min-width: 1250px) {

                                #pdpSwiperSlider,
                                .product-page-utilities {
                                    --slider-gap: 20px;
                                    --thumbs-width: 100px;

                                }


                                #shopify-section-product .product-reviews-badge {
                                    margin-top: 25px;
                                }
                            }


                            @media screen and (min-width: 1400px) {

                                #pdpSwiperSlider,
                                .product-page-utilities {
                                    --slider-gap: 28px;
                                    --thumbs-width: 124px;
                                }

                                #shopify-section-product .product-reviews-badge {
                                    margin-top: 10px;
                                }
                            }

                            .td-product-media-thumbs .swiper-slide {
                                cursor: pointer;
                                border: 1px solid #f2f2f2;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: fit-content !important;
                                padding: 10px;
                            }

                            .custom-swiper-button--product-page {
                                position: relative;
                                transform: none;
                                width: 100%;
                                border: 0;
                            }



                            .product-page-utilities {
                                max-width: calc(100% - var(--thumbs-width) - var(--slider-gap));
                                width: 100%;
                                margin-left: auto;
                                display: flex;
                                justify-content: space-between;
                                align-items: flex-start;
                            }


                            .product-page-pagination-wrapper {
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                padding: 0 0 16px 0;
                            }

                            .product-page-pagination-wrapper .product-reviews-badge {
                                margin: 0 !important;
                                white-space: nowrap;
                            }

                            .product-page-utilities .roomvo-container {
                                width: 100%;
                            }

                            .product-page-utilities .custom-roomvo-button {
                                width: 100%;
                                border-radius: 0;
                                justify-content: center;
                                padding-bottom: 20px
                            }


                            .yotpo-gallery-null .swiper-pagination-fraction {
                                text-align: center;
                            }


                            .roomvo-null .product-page-utilities {
                                justify-content: center;
                                align-items: center;
                            }


                            .roomvo-null .product-page-utilities {
                                justify-content: center;
                                align-items: center;
                            }

                            .roomvo-null .product-page-utilities .product-reviews-badge {
                                margin: 0 !important;
                                left: -5% !important;
                            }


                            /* Hide the slash completely */
                            .swiper-pagination-fraction {
                                font-size: 0;
                            }

                            /* Restore the numbers + add Image/of */
                            .swiper-pagination-current::before {
                                content: "Image ";
                                font-size: 14px;
                            }

                            .swiper-pagination-current,
                            .swiper-pagination-total {
                                font-size: 14px;
                            }

                            .swiper-pagination-current::after {
                                content: " of ";
                            }



                            .yotpo-gallery-null .product-page-utilities {
                                justify-content: center;
                            }


                            .roomvo-active:not(.yotpo-gallery-null) .product-page-utilities {
                                display: flex;
                                align-items: center;
                            }

                            .roomvo-active:not(.yotpo-gallery-null) .product-page-utilities .product-reviews-badge {
                                margin: 0 !important;
                                left: 0 !important;
                            }


                            #pdpSwiperSlider {
                                flex-direction: column;
                            }



                            .main-product-sliders__wrapper {
                                display: flex;
                                flex-direction: row-reverse;
                            }

                            .product-page__media-container .product-video-preview-section__video-container {
                                border-radius: 0;
                            }


                            .main-product-page-slider__wrapper {
                                position: relative;
                            }

                            .main-product-page-slider__wrapper .roomvo-container {
                                position: absolute;
                                right: 15px;
                                bottom: 15px;
                                z-index: 2;
                            }


                            .roomvo-stimr.roomvo-stimr--mini {
                                --icon-size: 23px;
                                background: #FF8585;
                                font-size: 12px;
                                padding: 3px 13px 3px 8px;
                                border-radius: 50px;
                            }

                            .roomvo-stimr.roomvo-stimr--mini .custom-roomvo-button__icon {
                                margin-right: 4px;
                            }

                            .product-media-list__description {
                                margin-top: 22px;
                                display: flex;
                                padding: 50px;
                                background-color: rgb(255, 251, 244);
                            }

                            .product-media-list__details {
                                margin-top: 20px;
                                display: block;
                            }

                            .product-media-list__details .accordions {
                                padding: 0;
                                background-color: transparent;
                            }

                            .product-media-list__details .accordion__title-container {
                                margin: 0;
                                padding-inline: 0;
                                padding: 24px 0;
                                max-height: 78px;
                            }


                            @media screen and (max-width: 800px) {
                                .roomvo-stimr.roomvo-stimr--mini {}
                            }


                            @media screen and (min-width: 800px) {
                                .main-product-page-slider__wrapper .roomvo-container {
                                    right: 25px;
                                    bottom: 25px;
                                }

                                .main-product-page-slider__wrapper {
                                    margin-bottom: 16px;
                                }

                                .product-page-utilities {
                                    margin-top: 20px;
                                }

                                .product-page-utilities .roomvo-container {
                                    width: auto;
                                }

                                .product-page-utilities .custom-roomvo-button {
                                    width: auto;
                                    border-radius: 12px;
                                    padding: 9px 20px;
                                }

                                .roomvo-active:not(.yotpo-gallery-null) .product-page-utilities>* {
                                    max-width: calc(50% - 8px);
                                    width: 100%;
                                }

                                .roomvo-active:not(.yotpo-gallery-null) .product-page-utilities>*>*,
                                .roomvo-active:not(.yotpo-gallery-null) .product-page-utilities .product-reviews-badge {
                                    width: 100%;
                                }

                                .roomvo-active:not(.yotpo-gallery-null) .product-page-utilities .custom-roomvo-button {
                                    width: 100% !important;
                                    justify-content: flex-start !important;
                                }

                                .yotpo-gallery-null,
                                .roomvo-active .product-media-list {
                                    margin-bottom: 0 !important;
                                }

                            }

                            @media screen and (max-width: 1024px) {

                                #pdpSwiperSlider,
                                .product-page-utilities {
                                    --thumbs-width: 100%;
                                }

                                .main-product-sliders__wrapper {
                                    flex-direction: column;
                                }

                                .td-product-media-thumbs .swiper-slide {
                                    padding: 0;
                                }

                                .product-page-thumb-slider {
                                    padding: 10px 16px 0 16px;
                                }

                                .product-page-thumb-slider .swiper-container {
                                    overflow: hidden;
                                }

                                .product-page-pagination-wrapper {
                                    padding: 12px 20px;
                                }



                            }

                            #pdpSwiperSliderGrid {
                                min-width: 0;
                            }

                            .product-media-list__grid-container {
                                overflow: hidden;
                            }


                            .td-product-media-thumbs--grid li {
                                border: 0.5px solid #BFBAB6
                            }

                            .product-media-list__buttons {
                                display: flex;
                                width: 100%;
                                flex-direction: row;
                                justify-content: end;
                                gap: 14px;
                                padding-top: 24px;
                                flex-wrap: wrap;
                            }

                            .product-media-list__buttons .product-media-list__button {
                                height: 50px;
                                padding-inline: 18px;
                                font-size: 15px;
                                background-color: rgb(var(--color-new-bg));
                                border-radius: 30px !important;
                                color: inherit;
                                display: flex;
                                align-items: center;
                                transition: opacity 0.2s ease-in-out;
                                gap: 10px;
                            }

                            .product-media-list__button:hover {
                                opacity: 0.7;
                                cursor: pointer;
                            }

                            .product-media-list__button-icon {
                                height: 24px;
                            }

                            .product-media-list__button .roomvo-stimr.roomvo-stimr--mini {
                                background: transparent;
                                font-size: inherit;
                                padding: 0 !important;
                                --icon-size: 28px !important;
                            }

                            .product-media-list__button .custom-roomvo-button__icon {
                                background: transparent;
                                margin-right: 2px;
                            }

                            .product-media-list__button .custom-roomvo-button__icon img {
                                width: 100%;
                                height: 100%;
                            }


                            .product-media-list__modal-slider {}

                            #pdpSwiperSliderGrid video {
                                pointer-events: none;
                            }

                            .product-media-list__modal-slider {
                                position: fixed;
                                display: block;
                                z-index: 200;
                                top: 0;
                                left: 0;
                                height: 100vh;
                                width: 100vw;
                                background-color: #fff;
                                opacity: 0;
                                visibility: hidden;
                                pointer-events: none;
                                transition: opacity 0.15s ease-in;
                            }

                            .product-media-list__modal-slider.is-open {
                                opacity: 1;
                                visibility: visible;
                                pointer-events: auto;
                            }

                            .product-media-list__modal-slider .product-media-list__modal-wrapper {
                                max-height: 100%;
                                overflow: hidden;
                                height: 100vh;
                            }

                            .product-media-list__modal-slider .td-product-media {
                                display: flex;
                                aspect-ratio: 1;
                                max-width: 100%;
                                max-height: 100%;
                                margin-inline: auto;
                                padding: 32px 0;
                                overflow: unset;
                                pointer-events: none;
                                opacity: 0;
                                transition: opacity 0.3s ease-in;
                            }


                            #pdpMediaModal .product-media-list_close-btn {
                                position: absolute;
                                right: 30px;
                                top: 30px;
                                padding: 16px;
                                background-color: rgb(var(--color-new-bg));
                                display: flex;
                                z-index: 200;
                            }

                            #pdpMediaModal .product-media-list_close-btn svg {
                                width: 30px;
                                height: 30px;
                            }

                            #pdpMediaModal .product-media-list_close-btn:hover {
                                opacity: 0.7;
                                cursor: pointer;
                            }

                            .product-media-list__modal-slider.is-open .td-product-media {
                                pointer-events: auto;
                                opacity: 1;
                            }

                            #pdpMediaModal .product-page-pagination-wrapper {
                                position: absolute;
                                z-index: 10;
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                padding: 32px 0;
                            }

                            #pdpMediaModal .product-page-pagination-wrapper .swiper-fake-progress-bar {
                                display: flex;
                                width: auto;
                                gap: 2px;
                                padding: 12px 0;
                                min-width: 140px;
                                background: rgb(var(--color-new-bg));
                                border-radius: 30px;
                                justify-content: center;
                            }


                            #pdpMediaModal .product-media-list__modal-navigation {
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                justify-content: space-between;
                                align-items: center;
                                pointer-events: none;
                                z-index: 50;
                                top: 0;
                                display: flex;
                                padding-inline: 30px;
                            }

                            #pdpMediaModal .product-media-list__modal-navigation svg {
                                width: 16px;
                                height: 30px;
                            }

                            #pdpMediaModal .product-media-list__modal-navigation .new-swiper-button {
                                display: flex;
                                padding: 16px;
                                background-color: rgba(245, 242, 237, 0.85);
                                pointer-events: auto;
                                cursor: pointer;
                            }

                            @media screen and (max-width: 1024px) {
                                .product-media-list__modal-slider .td-product-media {
                                    padding: 32px;
                                }
                            }

                            @media screen and (min-width: 1024px) {
                                #pdpMediaModal .swiper-slide {
                                    overflow: hidden;
                                }
                            }
                        </style>

                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                initProductMediaModal();
                                document.addEventListener('shopify:section:load', () => {
                                    initProductMediaModal();
                                });
                            });

                            function initProductMediaModal() {
                                const wrapper = document.getElementById('pdpSwiperSliderGrid');
                                if (!wrapper) return;
                                const modal = wrapper.querySelector('#pdpMediaModal');
                                const closeButton = modal ? .querySelector('#close-modal');
                                const openButtons = document.querySelectorAll('[swiper-modal-trigger]');
                                if (!modal) {
                                    console.warn('Modal element #pdpMediaModal not found');
                                    return;
                                }
                                openButtons.forEach((btn) => {
                                    btn.removeEventListener('click', openModal);
                                    btn.addEventListener('click', openModal);
                                });
                                closeButton ? .removeEventListener('click', closeModal);
                                closeButton ? .addEventListener('click', closeModal);

                                function openModal() {
                                    modal.classList.add('is-open');
                                }

                                function closeModal() {
                                    modal.classList.remove('is-open');
                                }
                            }
                        </script>

                        <div class="product-media-list product-media-list--new">
                            <div class="product-badges">
                                <div class="product-badge_container" style="background-color: #ffdc59;">
                                    <span class="product-badge__label" style="color: #0d1f22;">Bestseller</span>
                                </div>
                            </div>
                            <swiper-slider class="tablet-up-hide" id="pdpSwiperSlider" data-options='{ 
      "loop": false,
      "slidesPerView": 1,
      "spaceBetween": 0,
      "grabCursor": true,
      "centeredSlides": true,
      "pagination": {
        "el": ".mobile-bullets--template--26303101174142__main"
      }
    }' data-product-images-slider data-swiper-thumbs="td-product-media-thumbs">
                                <div id="desktop_el" class="main-product-sliders__wrapper tablet-up-hide">
                                    <div class="main-product-page-slider">
                                        <div class="main-product-page-slider__wrapper">
                                            <div class="roomvo-container">
                                                <button class="roomvo-stimr roomvo-stimr--mini custom-roomvo-button"
                                                    data-sku="LMR846N"
                                                    style="--text-color: #fff;--bg-color: rgba(0,0,0,0);visibility: hidden">
                                                    <div class="custom-roomvo-button__icon"
                                                        style="--bg-color: rgba(0,0,0,0)">
                                                        <img src="http://www.porcelainsuperstore.co.uk/cdn/shop/files/roomvo_mobile_icon_white_2.svg?v=1731335335&amp;width=80"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/roomvo_mobile_icon_white_2.svg?v=1731335335&amp;width=80 80w"
                                                            width="80" height="68" loading="lazy" sizes="20vw">
                                                    </div>
                                                    <div class="custom-roomvo-button__content">
                                                        <strong style="--text-color: #fff"> See in your home</strong>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="swiper-container td-product-media swiper" data-swiper
                                                data-swiper-modal-launcher>

                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide" data-swiper-slide
                                                        data-anchor="product-image-list-img-1">

                                                        <div class="aspect-media aspect-media--square fake-background">

                                                            <img src="../cdn/shop/files/Petra-Ivory-0656d6.jpg?v=1726046231&amp;width=1200"
                                                                alt="Petra Ivory Floor Tile"
                                                                srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=1200 1200w"
                                                                width="1200" height="1200" loading="eager"
                                                                fetchpriority="high" sizes="50vw">

                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide" data-swiper-slide
                                                        data-anchor="product-image-list-img-2">

                                                        <div class="aspect-media aspect-media--square fake-background">

                                                            <img src="../cdn/shop/files/Petra-Ivory-02b136.jpg?v=1723808447&amp;width=1200"
                                                                alt="Petra Ivory Floor Tile"
                                                                srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=1200 1200w"
                                                                width="1200" height="1200" loading="lazy"
                                                                fetchpriority="auto" sizes="50vw">

                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide" data-swiper-slide
                                                        data-anchor="product-image-list-img-3">

                                                        <div class="aspect-media aspect-media--square fake-background">

                                                            <img src="../cdn/shop/files/Petra-Ivory-042043.jpg?v=1725011630&amp;width=1200"
                                                                alt="Petra Ivory Floor Tile"
                                                                srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=1200 1200w"
                                                                width="1200" height="1200" loading="lazy"
                                                                fetchpriority="auto" sizes="50vw">

                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide" data-swiper-slide
                                                        data-anchor="product-image-list-img-4">

                                                        <div class="aspect-media aspect-media--square fake-background">

                                                            <img src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98ee3c8.jpg?v=1725011778&amp;width=1200"
                                                                alt="Petra Ivory Floor Tile"
                                                                srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=1200 1200w"
                                                                width="1200" height="1200" loading="lazy"
                                                                fetchpriority="auto" sizes="50vw">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-page__media-container">
                                    <div class="product-page-pagination-wrapper">
                                        <div
                                            class="mobile-bullets--template--26303101174142__main swiper-fake-progress-bar">
                                        </div>

                                    </div>
                                </div>
                            </swiper-slider>
                            <swiper-slider class="tablet-hide" id="pdpSwiperSliderGrid" data-options='{ 
      "speed": 200,
      "loop": true,
      "slidesPerView": 1,
      "spaceBetween": "60%",
      "grabCursor": true,
      "centeredSlides": false,
      "pagination": {
        "el": ".bullets--template--26303101174142__main",
        "type": "fraction"
      },
      "navigation": {
        "nextEl": ".swiper-button-next--template--26303101174142__main",
        "prevEl": ".swiper-button-prev--template--26303101174142__main"
      }
    }' data-product-images-slider data-swiper-thumbs="td-product-media-thumbs--grid">
                                <div class="product-media-list__grid-container">
                                    <div class="swiper-container td-product-media-thumbs--grid" data-swiper-options='{
  "spaceBetween": 15,
  "grabCursor": true,
  "centeredSlides": false,
  "slidesPerView": 2,
  "grid": 
  { 
    "rows": 5, "fill": "row"
  }
}' data-swiper-thumbs>
                                        <ul class="swiper-wrapper">
                                            <li class="swiper-slide" data-swiper-slide swiper-modal-trigger
                                                data-slide-index="0"
                                                data-slide-id="product-swiper-slider-grid-28473461309630">
                                                <div class="aspect-media aspect-media--square fake-background">

                                                    <img src="../cdn/shop/files/Petra-Ivory-0656d6.jpg?v=1726046231&amp;width=1200"
                                                        alt="Petra Ivory Floor Tile"
                                                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=1200 1200w"
                                                        width="1200" height="1200" loading="eager" fetchpriority="high"
                                                        sizes="50vw">

                                                </div>
                                            </li>
                                            <li class="swiper-slide" data-swiper-slide swiper-modal-trigger
                                                data-slide-index="1"
                                                data-slide-id="product-swiper-slider-grid-28357409046718">
                                                <div class="aspect-media aspect-media--square fake-background">

                                                    <img src="../cdn/shop/files/Petra-Ivory-02b136.jpg?v=1723808447&amp;width=1200"
                                                        alt="Petra Ivory Floor Tile"
                                                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=1200 1200w"
                                                        width="1200" height="1200" loading="lazy" fetchpriority="auto"
                                                        sizes="50vw">

                                                </div>
                                            </li>
                                            <li class="swiper-slide" data-swiper-slide swiper-modal-trigger
                                                data-slide-index="2"
                                                data-slide-id="product-swiper-slider-grid-28422898090174">
                                                <div class="aspect-media aspect-media--square fake-background">

                                                    <img src="../cdn/shop/files/Petra-Ivory-042043.jpg?v=1725011630&amp;width=1200"
                                                        alt="Petra Ivory Floor Tile"
                                                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=1200 1200w"
                                                        width="1200" height="1200" loading="lazy" fetchpriority="auto"
                                                        sizes="50vw">

                                                </div>
                                            </li>
                                            <li class="swiper-slide" data-swiper-slide swiper-modal-trigger
                                                data-slide-index="3"
                                                data-slide-id="product-swiper-slider-grid-28422910116030">
                                                <div class="aspect-media aspect-media--square fake-background">

                                                    <img src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98ee3c8.jpg?v=1725011778&amp;width=1200"
                                                        alt="Petra Ivory Floor Tile"
                                                        srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=1200 1200w"
                                                        width="1200" height="1200" loading="lazy" fetchpriority="auto"
                                                        sizes="50vw">

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="pdpMediaModal"
                                    class="product-media-list__modal-slider swiper-modal tablet-hide" role="dialog"
                                    aria-modal="true" aria-label="Gallery">
                                    <div class="product-media-list__modal-wrapper">
                                        <button type="button" id="close-modal" class="product-media-list_close-btn"
                                            aria-label="Close">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z"
                                                        fill="#0F0F0F"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="product-media-list__modal-navigation">
                                            <button
                                                class="new-swiper-button icon-button swiper-button-prev--template--26303101174142__main"
                                                prev>

                                                <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                                                </svg>

                                            </button>
                                            <button
                                                class="new-swiper-button icon-button swiper-button-next--template--26303101174142__main"
                                                next>

                                                <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                                                </svg>

                                            </button>
                                        </div>
                                        <div class="swiper-container td-product-media swiper" data-swiper>
                                            <div class="product-page-pagination-wrapper">
                                                <div
                                                    class="bullets--template--26303101174142__main swiper-fake-progress-bar">
                                                </div>
                                            </div>
                                            <ul class="swiper-wrapper">
                                                <li class="swiper-slide" data-swiper-slide data-slide-index="0"
                                                    data-slide-id="product-swiper-slider-grid-28473461309630">
                                                    <div class="aspect-media aspect-media--square fake-background">

                                                        <img src="../cdn/shop/files/Petra-Ivory-0656d6.jpg?v=1726046231&amp;width=1200"
                                                            alt="Petra Ivory Floor Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231&amp;width=1200 1200w"
                                                            width="1200" height="1200" loading="eager"
                                                            fetchpriority="high" sizes="50vw">

                                                    </div>
                                                </li>
                                                <li class="swiper-slide" data-swiper-slide data-slide-index="1"
                                                    data-slide-id="product-swiper-slider-grid-28357409046718">
                                                    <div class="aspect-media aspect-media--square fake-background">

                                                        <img src="../cdn/shop/files/Petra-Ivory-02b136.jpg?v=1723808447&amp;width=1200"
                                                            alt="Petra Ivory Floor Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?v=1723808447&amp;width=1200 1200w"
                                                            width="1200" height="1200" loading="lazy"
                                                            fetchpriority="auto" sizes="50vw">

                                                    </div>
                                                </li>
                                                <li class="swiper-slide" data-swiper-slide data-slide-index="2"
                                                    data-slide-id="product-swiper-slider-grid-28422898090174">
                                                    <div class="aspect-media aspect-media--square fake-background">

                                                        <img src="../cdn/shop/files/Petra-Ivory-042043.jpg?v=1725011630&amp;width=1200"
                                                            alt="Petra Ivory Floor Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?v=1725011630&amp;width=1200 1200w"
                                                            width="1200" height="1200" loading="lazy"
                                                            fetchpriority="auto" sizes="50vw">

                                                    </div>
                                                </li>
                                                <li class="swiper-slide" data-swiper-slide data-slide-index="3"
                                                    data-slide-id="product-swiper-slider-grid-28422910116030">
                                                    <div class="aspect-media aspect-media--square fake-background">

                                                        <img src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98ee3c8.jpg?v=1725011778&amp;width=1200"
                                                            alt="Petra Ivory Floor Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=360 360w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=375 375w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=393 393w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=816 816w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=1000 1000w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?v=1725011778&amp;width=1200 1200w"
                                                            width="1200" height="1200" loading="lazy"
                                                            fetchpriority="auto" sizes="50vw">

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slider>
                            <div class="product-media-list__buttons tablet-hide">
                                <button type="button" swiper-modal-trigger aria-control="gallery-modals"
                                    class="product-media-list__button">
                                    <div class="product-media-list__button-icon">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.23 3.92017H2.97001C1.68001 3.92017 0.600006 4.95617 0.600006 6.25857V22.3018C0.600006 23.5746 1.65001 24.6402 2.97001 24.6402H19.23C20.52 24.6402 21.6 23.6042 21.6 22.3018V6.25857C21.6 4.95617 20.55 3.92017 19.23 3.92017ZM2.97001 23.4562C2.34001 23.4562 1.80001 22.953 1.80001 22.3018V20.9994L6.12001 15.405C6.33001 15.1386 6.63001 14.961 6.99001 14.961C7.32001 14.9314 7.65001 15.0794 7.89001 15.3162L15.69 23.4858H2.97001V23.4562ZM20.4 22.3018C20.4 22.9234 19.89 23.4562 19.23 23.4562H17.37L11.88 17.7434L13.02 16.2634C13.23 15.997 13.53 15.8194 13.89 15.8194C14.22 15.7898 14.55 15.9378 14.79 16.1746L20.4 22.0354V22.3018ZM20.4 20.3186L15.66 15.3754C15.18 14.8722 14.52 14.6058 13.8 14.6354C13.11 14.665 12.45 15.0202 12.03 15.553L11.01 16.8554L8.73001 14.4578C8.25001 13.9546 7.59001 13.6882 6.87001 13.7178C6.18001 13.7474 5.52001 14.1026 5.10001 14.6354L1.80001 19.0458V6.25857C1.80001 5.63697 2.31001 5.10417 2.97001 5.10417H19.23C19.86 5.10417 20.4 5.60737 20.4 6.25857V20.3186Z"
                                                fill="black" />
                                            <path
                                                d="M22.53 0.664062H6.27001C4.98001 0.664062 3.90001 1.70006 3.90001 3.00246C3.90001 3.32806 4.17001 3.59446 4.50001 3.59446C4.83001 3.59446 5.10001 3.32806 5.10001 3.00246C5.10001 2.38086 5.61001 1.84806 6.27001 1.84806H22.53C23.16 1.84806 23.7 2.35126 23.7 3.00246V19.0457C23.7 19.6673 23.19 20.2001 22.53 20.2001C22.2 20.2001 21.93 20.4665 21.93 20.7921C21.93 21.1177 22.2 21.3841 22.53 21.3841C23.82 21.3841 24.9 20.3481 24.9 19.0457V3.00246C24.9 1.70006 23.85 0.664062 22.53 0.664062Z"
                                                fill="black" />
                                            <path
                                                d="M5.7 7.17603C4.38 7.17603 3.3 8.24163 3.3 9.54403C3.3 10.8464 4.38 11.912 5.7 11.912C7.02 11.912 8.1 10.8464 8.1 9.54403C8.1 8.24163 7.02 7.17603 5.7 7.17603ZM5.7 10.728C5.04 10.728 4.5 10.1952 4.5 9.54403C4.5 8.89283 5.04 8.36003 5.7 8.36003C6.36 8.36003 6.9 8.89283 6.9 9.54403C6.9 10.1952 6.36 10.728 5.7 10.728Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                    View all images
                                </button>
                                <a id="view_yotpo_gallery" class="product-media-list__button hide"
                                    href="#productYotpoGallerySectionDesktop">
                                    <div class="product-media-list__button-icon">
                                        <svg width="28" height="25" viewBox="0 0 28 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.46 8.28809C13.9894 8.28809 11.1626 11.157 11.1626 14.6876C11.1626 18.2182 13.9894 21.0871 17.46 21.0871C20.9306 21.0871 23.7574 18.2182 23.7574 14.6876C23.7574 11.157 20.9306 8.28809 17.46 8.28809ZM17.46 19.5831C14.8034 19.5831 12.6426 17.3873 12.6426 14.6876C12.6426 11.9879 14.8034 9.79209 17.46 9.79209C20.1166 9.79209 22.2774 11.9879 22.2774 14.6876C22.2774 17.3873 20.1166 19.5831 17.46 19.5831Z"
                                                fill="black" />
                                            <path
                                                d="M24.1126 3.77611H11.17V2.38491C11.17 1.07643 10.1229 0.0161133 8.839 0.0161133H6.841C5.5534 0.0161133 4.51 1.08019 4.51 2.38491V3.77611H4.1474C2.1013 3.77611 0.440002 5.46435 0.440002 7.54363V21.0646C0.440002 23.1439 2.1013 24.8321 4.1474 24.8321H24.1126C26.1587 24.8321 27.82 23.1439 27.82 21.0646V7.54363C27.82 5.46435 26.1587 3.77611 24.1126 3.77611ZM5.99 2.38491C5.99 1.90739 6.3711 1.52011 6.841 1.52011H8.8353C9.3052 1.52011 9.6863 1.90739 9.6863 2.38491V3.77611H5.99V2.38491ZM26.34 21.0646C26.34 22.3129 25.341 23.3281 24.1126 23.3281H4.1474C2.919 23.3281 1.92 22.3129 1.92 21.0646V7.54363C1.92 6.29531 2.919 5.28011 4.1474 5.28011H24.1126C25.341 5.28011 26.34 6.29531 26.34 7.54363V21.0646Z"
                                                fill="black" />
                                            <path
                                                d="M5.98999 6.4082C4.76529 6.4082 3.76999 7.41964 3.76999 8.6642C3.76999 9.90876 4.76529 10.9202 5.98999 10.9202C7.21469 10.9202 8.20999 9.90876 8.20999 8.6642C8.20999 7.41964 7.21469 6.4082 5.98999 6.4082ZM5.98999 9.4162C5.58299 9.4162 5.24999 9.0778 5.24999 8.6642C5.24999 8.2506 5.58299 7.9122 5.98999 7.9122C6.39699 7.9122 6.72999 8.2506 6.72999 8.6642C6.72999 9.0778 6.39699 9.4162 5.98999 9.4162Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                    View customer photos
                                </a>
                                <div class="roomvo-container">
                                    <button
                                        class="product-media-list__button roomvo-stimr roomvo-stimr--mini custom-roomvo-button"
                                        data-sku="LMR846N"
                                        style="--text-color: #fff;--bg-color: #fff;visibility: hidden">
                                        <div class="custom-roomvo-button__icon" style="--bg-color:#fff">
                                            <img src="../cdn/shop/files/roomvo_icon_282b2fe2-8a64-4568-adb0-ecdbaac7fb626203.png?v=1757882168&amp;width=80"
                                                srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/roomvo_icon_282b2fe2-8a64-4568-adb0-ecdbaac7fb62.png?v=1757882168&amp;width=80 80w"
                                                width="80" height="86" loading="lazy" sizes="25vw">
                                        </div>
                                        <div class="custom-roomvo-button__content">
                                            <strong style="--text-color: #fff"> Try in your room</strong>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="product-media-list__description tablet-hide">

                                <style>
                                    .product-description-snippet__perfect-for {
                                        margin-bottom: 30px;
                                    }

                                    .product-description-snippet__perfect-for ul {
                                        padding: 0 16px;
                                        margin: 15px 0 0 !important;
                                    }


                                    .product-description-snippet__perfect-for ul>li+li {
                                        margin-top: 10px;
                                    }

                                    .product-description-snippet__perfect-for .icon-with-text {
                                        justify-content: flex-start;
                                    }

                                    .product-description-snippet__perfect-for .icon-with-text>*+* {
                                        margin: 0 0 0 12px;
                                    }

                                    .product-description-snippet__perfect-for .icon-with-text__text {
                                        font-size: 15px;
                                    }


                                    @media screen and (min-width: 800px) and (min-width: 950px) {
                                        .product-description-snippet__perfect-for .title {
                                            font-weight: 600;
                                            font-size: 1.625rem;
                                            font-family: var(--font-family);
                                        }

                                        .product-description-snippet__perfect-for ul {
                                            padding: 0;
                                            display: flex;
                                            align-items: flex-start;
                                            justify-content: space-between;
                                            gap: .65rem 1.25rem;
                                            flex-wrap: wrap;
                                            max-width: 525px;
                                        }

                                        .product-description-snippet__perfect-for ul>li {
                                            margin: 0 !important;
                                            max-width: calc(48% - 1.25rem);
                                            width: 100%;
                                        }

                                        .product-description-snippet__perfect-for .icon-with-text__text {
                                            font-size: 16px;
                                        }
                                    }

                                    .accordion__content.suitability {
                                        display: flex;
                                        flex-direction: column;
                                    }

                                    .accordion__content li:last-of-type {
                                        border-bottom: 0;
                                    }

                                    .accordion__content .suitability__group {
                                        display: flex;
                                        align-items: start;
                                        padding-bottom: 14px;
                                        border-bottom: 1px solid rgb(var(--color-new-border));
                                        width: 100%;
                                        flex-direction: row;
                                        flex-wrap: nowrap;
                                        flex: unset;
                                        margin-bottom: 16px;
                                    }

                                    .accordion__content .suitability__group-heading {
                                        font-weight: 600;
                                        min-width: 130px;
                                    }

                                    .accordion__content .suitability__list {
                                        display: flex;
                                        flex-direction: column;
                                        gap: 5px;
                                        width: 100%;
                                    }

                                    .accordion__content .suitability__list li {
                                        display: flex;
                                        width: 100%;
                                    }

                                    .accordion__content .suitability__list-name {
                                        max-width: 180px;
                                        width: 100%;
                                    }

                                    .accordion__content .accordion__description {
                                        width: 100%;
                                        display: inline;
                                    }

                                    @media screen and (max-width: 800px) {
                                        .accordion__content .suitability__list-name {
                                            max-width: 100%;
                                        }
                                    }

                                    @media screen and (min-width: 1024px) {
                                        .accordion__content .suitability__group-heading {
                                            min-width: 170px;
                                        }
                                    }
                                </style>

                                <section class="product-description-snippet" id="product-description-desktop">

                                    <div class="" has-icon
                                        style="--custom-desc-icon: url(http://www.porcelainsuperstore.co.uk/cdn/shop/files/desc_checkmark.svg?v=1727261404&amp;width=450)">
                                        <h2 class="h2 title">Description</h2>
                                        <article class="read-more-container" data-total-chars="1063" data-max-lines="7"
                                            data-line-height="1.5">
                                            <div class="read-more-content rte">
                                                <div>
                                                    <p>Infuse your home with the understated elegance of natural stone
                                                        with our Petra Ivory floor tiles.<br><br>Crafted in Italy, these
                                                        40 x 60 cm tiles bring a timeless limestone-inspired look,
                                                        perfect for creating a warm and inviting feel in modern
                                                        spaces.<br><br></p>
                                                    <ul>
                                                        <li>
                                                            <p>Made from porcelain, they're hard-wearing and easy to
                                                                live with. A truly authentic flooring choice for
                                                                kitchens, hallways and bathrooms alike.</p>
                                                        </li>
                                                        <li>
                                                            <p>The slightly tumbled texture and softly cushioned edges
                                                                create a natural lived-in feel underfoot, while the matt
                                                                surface offers excellent slip resistance</p>
                                                        </li>
                                                        <li>
                                                            <p>A soft sheen plays with the light, adding a touch of
                                                                elegance that enhances your home without stealing the
                                                                show</p>
                                                        </li>
                                                    </ul>
                                                    <p>To achieve the classic charm of natural flagstone, we recommend
                                                        laying the tiles in a staggered pattern for a relaxed, timeless
                                                        look.<br><br>For those seeking a more traditional finish, Petra
                                                        Ivory is also available in a <a
                                                            href="petra-ivory-modular-floor-tile.html">modular
                                                            format</a> - perfect for adding rustic character to your
                                                        home.</p>
                                                </div>
                                            </div>
                                            <button class="read-more-toggle site-link site-link--underline">Read
                                                more</button>
                                        </article>
                                        <div class="product-media-list__details tablet-hide">

                                            <ul class="accordions">

                                                <li class="accordion accordion--large" data-accordion-item="true"
                                                    id="tab-dimensions-details-desktop">
                                                    <div class="accordion__title-container"
                                                        data-accordion-title="product">
                                                        <h2 class="accordion__title">Dimensions & Details</h2>

                                                        <div class="image-container">
                                                            <div class="image-snippet image-snippet__fill--desktop image-snippet__fill--tablet image-snippet__fill--mobile"
                                                                style=" --aspect-ratio: 99.0 / 99.0; --aspect-ratio-tablet: 99.0 / 99.0; --aspect-ratio-mobile: 99.0 / 99.0;">
                                                                <img class="image-snippet__img image-snippet__img--fill image-snippet__img--desktop"
                                                                    width="99" height="99"
                                                                    src="../cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7ddea.png?crop=center&amp;height=99&amp;v=1651224296&amp;width=99"
                                                                    srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=360&v=1651224296&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=375&v=1651224296&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=393&v=1651224296&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=414&v=1651224296&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1280&v=1651224296&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1366&v=1651224296&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1440&v=1651224296&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1536&v=1651224296&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1920&v=1651224296&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=99&v=1651224296&width=99 99w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=198&v=1651224296&width=198 198w"
                                                                    alt="image" data-alt="image">

                                                                <img class="image-snippet__img image-snippet__img--fill image-snippet__img--tablet"
                                                                    width="99" height="99"
                                                                    src="../cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7ddea.png?crop=center&amp;height=99&amp;v=1651224296&amp;width=99"
                                                                    srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=360&v=1651224296&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=375&v=1651224296&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=393&v=1651224296&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=414&v=1651224296&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1280&v=1651224296&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1366&v=1651224296&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1440&v=1651224296&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1536&v=1651224296&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1920&v=1651224296&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=99&v=1651224296&width=99 99w"
                                                                    alt="image" data-alt="image">

                                                                <img class="image-snippet__img image-snippet__img--fill image-snippet__img--mobile"
                                                                    width="99" height="99"
                                                                    src="../cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7ddea.png?crop=center&amp;height=99&amp;v=1651224296&amp;width=99"
                                                                    srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=360&v=1651224296&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=375&v=1651224296&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=393&v=1651224296&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=414&v=1651224296&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1280&v=1651224296&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1366&v=1651224296&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1440&v=1651224296&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1536&v=1651224296&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=1920&v=1651224296&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/ruler_1_99x_crop_center_7f00c9b3-6db5-45fc-9878-51eda7a93ff7.png?crop=center&height=99&v=1651224296&width=99 99w"
                                                                    alt="image" data-alt="image">

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="accordion__body">

                                                        <ul class="accordion__content specifications"
                                                            data-product-variant-info-accordion>

                                                            <li>
                                                                <p class="bold">Colour</p>
                                                                <p class="accordion-info">Beige</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Finish</p>
                                                                <p class="accordion-info">Matt</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Grout joint</p>
                                                                <p class="accordion-info">3 mm</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">M2 / box</p>
                                                                <p class="accordion-info">0.96</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Material</p>
                                                                <p class="accordion-info">Porcelain</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Needs sealing</p>
                                                                <p class="accordion-info">No</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Origin</p>
                                                                <p class="accordion-info">Italy</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">PEI rating</p>
                                                                <p class="accordion-info">5</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Rectified</p>
                                                                <p class="accordion-info">No</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Sample size</p>
                                                                <p class="accordion-info">10 x 15 cm</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Slip rating</p>
                                                                <p class="accordion-info">R9</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Thickness</p>
                                                                <p class="accordion-info">10 mm</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Tiles / box</p>
                                                                <p class="accordion-info">4</p>
                                                            </li>

                                                            <li>
                                                                <p class="bold">Usage</p>
                                                                <p class="accordion-info">Floor</p>
                                                            </li>

                                                            <style>
                                                                .specifications {
                                                                    max-height: 280px;
                                                                }
                                                            </style>
                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="accordion accordion--large" data-accordion-item="true"
                                                    id="tab-suitable-for">
                                                    <div class="accordion__title-container"
                                                        data-accordion-title="product">
                                                        <h2 class="accordion__title">Suitable For</h2>

                                                    </div>
                                                    <div class="accordion__body">

                                                        <ul class="accordion__content suitability"
                                                            data-product-variant-info-accordion>

                                                            <li class="suitability__group">
                                                                <p class="suitability__group-heading">Bathroom</p>
                                                                <ul class="suitability__list">

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">Walls</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">Floors</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <li class="suitability__group">
                                                                <p class="suitability__group-heading">
                                                                    Shower</p>
                                                                <ul class="suitability__list">

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">Walls</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <span class="suitability__list-name">Wet Room
                                                                            Floors</span>
                                                                        <span class="suitability__list-value"><a
                                                                                href="mailto:help@porcelainsuperstore.co.uk"
                                                                                class="underline">
                                                                                <p><span
                                                                                        style="text-decoration:underline">Email
                                                                                        Us</span></p>
                                                                            </a>
                                                                        </span>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <li class="suitability__group">
                                                                <p class="suitability__group-heading">
                                                                    Kitchen</p>
                                                                <ul class="suitability__list">

                                                                    <li>
                                                                        <span class="suitability__list-name">Walls /
                                                                            Splashbacks</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">Floors</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <li class="suitability__group">
                                                                <p class="suitability__group-heading">
                                                                    Outdoor</p>
                                                                <ul class="suitability__list">

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">Walls</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">Floors</span>
                                                                        <span class="suitability__list-value"><a
                                                                                href="mailto:help@porcelainsuperstore.co.uk"
                                                                                class="underline">
                                                                                <p><span
                                                                                        style="text-decoration:underline">Email
                                                                                        Us</span></p>
                                                                            </a>
                                                                        </span>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <li class="suitability__group">
                                                                <p class="suitability__group-heading">
                                                                    Fireplaces</p>
                                                                <ul class="suitability__list">

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">Walls</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">Hearths</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <li class="suitability__group">
                                                                <p class="suitability__group-heading">
                                                                    Underfloor Heating</p>
                                                                <ul class="suitability__list">

                                                                    <li>
                                                                        <span
                                                                            class="suitability__list-name">&#12644;</span>
                                                                        <span class="suitability__list-value">Yes
                                                                        </span>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <p class="accordion__description">
                                                                If you require any further information on suitability
                                                                and slip ratings for areas such as wet rooms, please
                                                                feel free to contact us
                                                                <a href="mailto:help@porcelainsuperstore.co.uk"
                                                                    class="underline">help@porcelainsuperstore.co.uk</a>
                                                                so that we can offer the correct advice for your
                                                                situation.
                                                            </p>
                                                        </ul>

                                                    </div>
                                                </li>

                                                <li class="accordion accordion--large" data-accordion-item="true"
                                                    id="tab-delivery-returns">
                                                    <div class="accordion__title-container"
                                                        data-accordion-title="product">
                                                        <h2 class="accordion__title">Delivery & Returns</h2>

                                                    </div>
                                                    <div class="accordion__body">

                                                        <ul class="accordion__content">

                                                            <li class="full-width">
                                                                <p>We offer free kerbside delivery on most orders over
                                                                    £500 – quick, convenient and you can even choose a
                                                                    delivery day that suits you – up to three months in
                                                                    advance.<br /><br />If your order is under £500,
                                                                    delivery is £15 for lighter parcel orders (under
                                                                    18kg) and £40 for heavier pallet
                                                                    orders.<br /><br />Most orders arrive in just two
                                                                    working days, and if you order before 11pm, we’ll
                                                                    get everything moving right away.<br /><br />A few
                                                                    remote areas, like the Scottish Highlands or Channel
                                                                    Islands, may have extra charges – but we’ll always
                                                                    let you know before you check
                                                                    out.<br /><br /><strong>Returns<br /><br /></strong>We’re
                                                                    confident you’ll love your new purchases – but if
                                                                    things don’t work out, our 100-day returns policy
                                                                    gives you plenty of time to change your
                                                                    mind.<br /><br />You can return your full order for
                                                                    a refund anytime within 100 days of delivery, as
                                                                    long as everything is unused and in its original
                                                                    packaging.<br /><br />Just so you know – we can only
                                                                    accept full returns. If your order includes tiles,
                                                                    we’re not able to take back part-orders or leftover
                                                                    boxes.</p>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="accordion accordion--large" data-accordion-item="true"
                                                    id="tab-how-to-order">
                                                    <div class="accordion__title-container"
                                                        data-accordion-title="product">
                                                        <h2 class="accordion__title">How to Order</h2>

                                                    </div>
                                                    <div class="accordion__body">

                                                        <ul class="accordion__content">
                                                            <li class="full-width">
                                                                <div>
                                                                    <p>Ordering these tiles from Porcelain Superstore
                                                                        couldn’t be easier. Simply enter how many square
                                                                        metres you’ll need and we’ll tell you how many
                                                                        boxes are required to cover this
                                                                        area.&nbsp;We’ll always round this up to the
                                                                        nearest full box.&nbsp;<br><br>As a rule of
                                                                        thumb, we recommend adding 10% extra onto your
                                                                        order, to cover any waste, cuts and breakages.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="accordion accordion--large" data-accordion-item="true"
                                                    id="tab-how-to-install">
                                                    <div class="accordion__title-container"
                                                        data-accordion-title="product">
                                                        <h2 class="accordion__title">How to Install</h2>

                                                    </div>
                                                    <div class="accordion__body">

                                                        <ul class="accordion__content">
                                                            <li class="full-width">
                                                                <div>
                                                                    <p>While we recommend using a professional tiler,
                                                                        you can fix these ceramic wall tiles yourself -
                                                                        especially if you're a dab hand at DIY.</p>
                                                                    <br><br>
                                                                    <p>Please refer to our <a
                                                                            href="https://www.porcelainsuperstore.co.uk/blogs/tile101/how-to-install-ceramic-wall-tiles">Installation
                                                                            Guide</a> for further information.</p>
                                                                </div>
                                                            </li>

                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>

                        <div class="product-image-list">
                            <button class="product-image-list__close-btn"
                                data-click-toggle='{"target": "body", "remove": "modal-visible,modal-product-image-list"}'></button>
                            <div class="product-image-list__scroll">
                                <div class="product-image-list__items">

                                    <div id="product-image-list-img-1" class="product-image-list__item"
                                        data-click-toggle='{"target": "body", "remove": "modal-visible,modal-product-image-list"}'>
                                        <div class="image-snippet image-snippet__fill--desktop image-snippet__fill--tablet image-snippet__fill--mobile"
                                            style=" --aspect-ratio: 2048.0 / 2048.0; --aspect-ratio-tablet: 2048.0 / 2048.0; --aspect-ratio-mobile: 2048.0 / 2048.0;">
                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--desktop"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-06f60a.jpg?crop=center&amp;height=204&amp;v=1726046231&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-0656b4.jpg?crop=center&amp;height=2048&amp;v=1726046231&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=360&v=1726046231&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=375&v=1726046231&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=393&v=1726046231&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=414&v=1726046231&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1280&v=1726046231&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1366&v=1726046231&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1440&v=1726046231&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1536&v=1726046231&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1920&v=1726046231&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=2048&v=1726046231&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=4096&v=1726046231&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--tablet"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-06f60a.jpg?crop=center&amp;height=204&amp;v=1726046231&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-0656b4.jpg?crop=center&amp;height=2048&amp;v=1726046231&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=360&v=1726046231&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=375&v=1726046231&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=393&v=1726046231&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=414&v=1726046231&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1280&v=1726046231&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1366&v=1726046231&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1440&v=1726046231&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1536&v=1726046231&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1920&v=1726046231&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=2048&v=1726046231&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=4096&v=1726046231&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--mobile"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-06f60a.jpg?crop=center&amp;height=204&amp;v=1726046231&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-0656b4.jpg?crop=center&amp;height=2048&amp;v=1726046231&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=360&v=1726046231&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=375&v=1726046231&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=393&v=1726046231&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=414&v=1726046231&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1280&v=1726046231&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1366&v=1726046231&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1440&v=1726046231&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1536&v=1726046231&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=1920&v=1726046231&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=2048&v=1726046231&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?crop=center&height=4096&v=1726046231&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                        </div>
                                    </div>

                                    <div id="product-image-list-img-2" class="product-image-list__item"
                                        data-click-toggle='{"target": "body", "remove": "modal-visible,modal-product-image-list"}'>
                                        <div class="image-snippet image-snippet__fill--desktop image-snippet__fill--tablet image-snippet__fill--mobile"
                                            style=" --aspect-ratio: 1400.0 / 1400.0; --aspect-ratio-tablet: 1400.0 / 1400.0; --aspect-ratio-mobile: 1400.0 / 1400.0;">
                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--desktop"
                                                width="1400" height="1400"
                                                src="../cdn/shop/files/Petra-Ivory-02f8d4.jpg?crop=center&amp;height=140&amp;v=1723808447&amp;width=140"
                                                data-src="../cdn/shop/files/Petra-Ivory-026c7d.jpg?crop=center&amp;height=1400&amp;v=1723808447&amp;width=1400"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=360&v=1723808447&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=375&v=1723808447&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=393&v=1723808447&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=414&v=1723808447&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1280&v=1723808447&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1366&v=1723808447&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1440&v=1723808447&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1536&v=1723808447&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1920&v=1723808447&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1400&v=1723808447&width=1400 1400w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=2800&v=1723808447&width=2800 2800w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--tablet"
                                                width="1400" height="1400"
                                                src="../cdn/shop/files/Petra-Ivory-02f8d4.jpg?crop=center&amp;height=140&amp;v=1723808447&amp;width=140"
                                                data-src="../cdn/shop/files/Petra-Ivory-026c7d.jpg?crop=center&amp;height=1400&amp;v=1723808447&amp;width=1400"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=360&v=1723808447&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=375&v=1723808447&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=393&v=1723808447&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=414&v=1723808447&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1280&v=1723808447&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1366&v=1723808447&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1440&v=1723808447&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1536&v=1723808447&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1920&v=1723808447&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1400&v=1723808447&width=1400 1400w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=2800&v=1723808447&width=2800 2800w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--mobile"
                                                width="1400" height="1400"
                                                src="../cdn/shop/files/Petra-Ivory-02f8d4.jpg?crop=center&amp;height=140&amp;v=1723808447&amp;width=140"
                                                data-src="../cdn/shop/files/Petra-Ivory-026c7d.jpg?crop=center&amp;height=1400&amp;v=1723808447&amp;width=1400"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=360&v=1723808447&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=375&v=1723808447&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=393&v=1723808447&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=414&v=1723808447&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1280&v=1723808447&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1366&v=1723808447&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1440&v=1723808447&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1536&v=1723808447&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1920&v=1723808447&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=1400&v=1723808447&width=1400 1400w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-02.jpg?crop=center&height=2800&v=1723808447&width=2800 2800w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                        </div>
                                    </div>

                                    <div id="product-image-list-img-3" class="product-image-list__item"
                                        data-click-toggle='{"target": "body", "remove": "modal-visible,modal-product-image-list"}'>
                                        <div class="image-snippet image-snippet__fill--desktop image-snippet__fill--tablet image-snippet__fill--mobile"
                                            style=" --aspect-ratio: 2048.0 / 2048.0; --aspect-ratio-tablet: 2048.0 / 2048.0; --aspect-ratio-mobile: 2048.0 / 2048.0;">
                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--desktop"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-04fa17.jpg?crop=center&amp;height=204&amp;v=1725011630&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-045117.jpg?crop=center&amp;height=2048&amp;v=1725011630&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=360&v=1725011630&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=375&v=1725011630&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=393&v=1725011630&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=414&v=1725011630&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1280&v=1725011630&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1366&v=1725011630&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1440&v=1725011630&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1536&v=1725011630&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1920&v=1725011630&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=2048&v=1725011630&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=4096&v=1725011630&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--tablet"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-04fa17.jpg?crop=center&amp;height=204&amp;v=1725011630&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-045117.jpg?crop=center&amp;height=2048&amp;v=1725011630&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=360&v=1725011630&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=375&v=1725011630&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=393&v=1725011630&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=414&v=1725011630&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1280&v=1725011630&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1366&v=1725011630&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1440&v=1725011630&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1536&v=1725011630&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1920&v=1725011630&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=2048&v=1725011630&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=4096&v=1725011630&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--mobile"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-04fa17.jpg?crop=center&amp;height=204&amp;v=1725011630&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-045117.jpg?crop=center&amp;height=2048&amp;v=1725011630&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=360&v=1725011630&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=375&v=1725011630&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=393&v=1725011630&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=414&v=1725011630&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1280&v=1725011630&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1366&v=1725011630&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1440&v=1725011630&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1536&v=1725011630&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=1920&v=1725011630&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=2048&v=1725011630&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-04.jpg?crop=center&height=4096&v=1725011630&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                        </div>
                                    </div>

                                    <div id="product-image-list-img-4" class="product-image-list__item"
                                        data-click-toggle='{"target": "body", "remove": "modal-visible,modal-product-image-list"}'>
                                        <div class="image-snippet image-snippet__fill--desktop image-snippet__fill--tablet image-snippet__fill--mobile"
                                            style=" --aspect-ratio: 2048.0 / 2048.0; --aspect-ratio-tablet: 2048.0 / 2048.0; --aspect-ratio-mobile: 2048.0 / 2048.0;">
                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--desktop"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e8096.jpg?crop=center&amp;height=204&amp;v=1725011778&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98ee70d.jpg?crop=center&amp;height=2048&amp;v=1725011778&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=360&v=1725011778&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=375&v=1725011778&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=393&v=1725011778&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=414&v=1725011778&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1280&v=1725011778&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1366&v=1725011778&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1440&v=1725011778&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1536&v=1725011778&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1920&v=1725011778&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=2048&v=1725011778&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=4096&v=1725011778&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--tablet"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e8096.jpg?crop=center&amp;height=204&amp;v=1725011778&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98ee70d.jpg?crop=center&amp;height=2048&amp;v=1725011778&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=360&v=1725011778&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=375&v=1725011778&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=393&v=1725011778&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=414&v=1725011778&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1280&v=1725011778&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1366&v=1725011778&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1440&v=1725011778&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1536&v=1725011778&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1920&v=1725011778&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=2048&v=1725011778&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=4096&v=1725011778&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                            <img class="image-snippet__img image-snippet__img--fill image-snippet__img--mobile"
                                                width="2048" height="2048"
                                                src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e8096.jpg?crop=center&amp;height=204&amp;v=1725011778&amp;width=204"
                                                data-src="../cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98ee70d.jpg?crop=center&amp;height=2048&amp;v=1725011778&amp;width=2048"
                                                data-lazy-load loading="lazy"
                                                data-srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=360&v=1725011778&width=360 360w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=375&v=1725011778&width=375 375w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=393&v=1725011778&width=393 393w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=414&v=1725011778&width=414 414w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1280&v=1725011778&width=1280 1280w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1366&v=1725011778&width=1366 1366w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1440&v=1725011778&width=1440 1440w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1536&v=1725011778&width=1536 1536w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=1920&v=1725011778&width=1920 1920w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=2048&v=1725011778&width=2048 2048w,//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-05_b8311f31-913b-4fa2-a0b7-d301aeecc98e.jpg?crop=center&height=4096&v=1725011778&width=4096 4096w"
                                                alt="Petra Ivory Floor Tile" data-alt="Petra Ivory Floor Tile">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="product-details-form-wrapper">
                            <div class="product-details-form-wrapper-inner">
                                <div class="flex" style="justify-content:flex-end; margin: 8px 0 0;"></div>
                                <div class="product-main-details">
                                    <style>
                                        .product-main-details__secondary-info:not(:has(ul *)) {
                                            border: 0;
                                            padding: 0 !important;
                                        }

                                        @media screen and (max-width: 800px) {
                                            .product-main-details__secondary-info {
                                                margin-bottom: 5px;
                                            }

                                            .product-main-details__cta {
                                                margin-block: 24px;
                                            }

                                            .product-form-snippet>.product-main-details__secondary-info {
                                                margin-bottom: 27px;
                                            }

                                            .product-main-details__secondary-info--mobile {
                                                background-color: #ecf8ef;
                                                border: 1px solid #a9b3aa;
                                                border-radius: 10px;
                                            }

                                            .product-main-details__secondary-info--mobile .secondary-info__title {
                                                font-size: 16px;
                                                font-weight: 600;
                                                margin-bottom: 3px;
                                                display: block;
                                            }

                                            .product-main-details__secondary-info--mobile .secondary-info__subtitle {
                                                line-height: 20px;
                                                width: 100%;
                                            }




                                            .product-content-wrapper__upper {
                                                display: flex;
                                                flex-direction: column;
                                            }


                                            .product-content-wrapper__product-title {
                                                order: 0;
                                            }

                                            .product-content-wrapper__product-size {
                                                order: 1;
                                            }

                                            .product-content-wrapper__rating {
                                                order: 2;
                                            }

                                            .product-content-wrapper__details-list {
                                                order: 3;
                                            }

                                        }

                                        .highlights__list {
                                            gap: 0;
                                        }

                                        .highlights__list li:not(:first-child)::before {
                                            content: " & ";
                                            margin: 0 2px 0 6px;
                                            white-space: nowrap;
                                        }


                                        .shopify-product-form .btn--atc {
                                            border-radius: 5px;
                                        }

                                        .product-main-details__secondary-info .button--sample {
                                            display: flex;
                                            gap: 10px;
                                        }

                                        .sample__icon {
                                            max-height: 24px;
                                            max-width: 24px;
                                            order: -1;
                                        }

                                        .product-content-wrapper__details-list .product-badges {
                                            width: unset;
                                            position: relative;
                                            padding: 0;
                                        }
                                    </style>

                                    <div class="product-form-snippet">

                                        <form method="post" action="https://www.porcelainsuperstore.co.uk/cart/add"
                                            id="product_form_8292759634110" accept-charset="UTF-8"
                                            class="shopify-product-form" enctype="multipart/form-data"
                                            data-product-form="petra-ivory-floor-tile" data-product-in-stock="oos"
                                            data-product-stock-map="{
&quot;44503110090942&quot;: &quot;available&quot;, 
&quot;44503110123710&quot;: &quot;available&quot;, 
&quot;44503110156478&quot;: &quot;available&quot; }"><input type="hidden" name="form_type" value="product" /><input
                                                type="hidden" name="utf8" value="✓" />
                                            <div class="product-content-wrapper">
                                                <div class="product-content-wrapper__upper">

                                                    <ul class="product-content-wrapper__promo-badges">

                                                    </ul>

                                                    <div class="product-content-wrapper__rating h3">
                                                        <a href="#yotpoReviewsWidget">
                                                            <div class="yotpo-widget-instance yotpo-widget-instance--custom yotpo-widget-instance--large"
                                                                data-yotpo-instance-id="643481"
                                                                data-yotpo-product-id="8292759634110"
                                                                data-yotpo-cart-product-id=""
                                                                data-yotpo-section-id="product">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <h1 class="product-content-wrapper__product-title h3">Petra Ivory
                                                        Floor Tile</h1>
                                                    <div class="product-content-wrapper__product-size tablet-up-hide">40
                                                        x 60 cm</div>

                                                    <ul
                                                        class="product-content-wrapper__details-list text-body text-body--medium-large">
                                                        <li class="grid grid--2-col">

                                                            <div class="">
                                                                <strong class="text--bold">

                                                                    <div class="card-price metafield-price-per-size">
                                                                        <span data-price-per-meter-squared
                                                                            class="card-price__regular">£39.00 /
                                                                            m²</span></div>

                                                                </strong>
                                                            </div>
                                                            <div class="product-badges">
                                                                <div class="product-badge_container"
                                                                    style="background-color: #ffdc59;">
                                                                    <span class="product-badge__label"
                                                                        style="color: #0d1f22;">Bestseller</span>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="grid grid--2-col">

                                                            <div class="grid__item">

                                                                <scroll-into-view-button
                                                                    data-target="#tab-product-details-desktop"
                                                                    class="tablet-hide">
                                                                    <span>Read More</span>
                                                                    <span style='position: relative; top: 2px;'>

                                                                        <svg class="icon icon-caret-2" width="15"
                                                                            height="15" viewBox="0 0 15 15" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5"
                                                                                stroke="black" stroke-width="1.1"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>

                                                                    </span>
                                                                </scroll-into-view-button>
                                                            </div>

                                                            <div class="grid__item grid__item--end">

                                                                <scroll-into-view-button
                                                                    data-target="#tab-product-details-desktop"
                                                                    class="tablet-hide">
                                                                    <span>Product details</span>
                                                                    <span style='position: relative; top: 2px;'>

                                                                        <svg class="icon icon-caret-2" width="15"
                                                                            height="15" viewBox="0 0 15 15" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M3.5 5.5L7.5 9.5L11.5 5.5"
                                                                                stroke="black" stroke-width="1.1"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>

                                                                    </span>
                                                                </scroll-into-view-button>
                                                            </div>

                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class='product-content-wrapper__middle tablet-hide'>
                                                    <ul class='product-content-wrapper__highlights'>
                                                        <li class='product-content-wrapper__highlights-item'>
                                                            <div class='icon icon-highlight'>
                                                                <img src="http://www.porcelainsuperstore.co.uk/cdn/shop/files/icon-size.svg?v=1753385182&amp;width=60"
                                                                    alt="Highlights Icon" width="32" height="32">
                                                            </div>
                                                            <div class='highlights-item__description'>
                                                                <strong
                                                                    class='highlights__text highlights__text--bold'>Size</strong>

                                                                <span class='highlights__text'>40 x 60 cm</span>

                                                            </div>
                                                        </li>
                                                        <li class='product-content-wrapper__highlights-item'>
                                                            <div class='icon icon-highlight'>
                                                                <img src="http://www.porcelainsuperstore.co.uk/cdn/shop/files/icon-suitable.svg?v=1753385186&amp;width=60"
                                                                    alt="Highlights Icon" width="32" height="32">
                                                            </div>
                                                            <div class='highlights-item__description'>
                                                                <strong
                                                                    class='highlights__text highlights__text--bold'>Suitable
                                                                    for</strong>

                                                                <ul class="grid grid-3-col highlights__list">

                                                                    <li class='highlights__text'>
                                                                        Floor
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                        </li>
                                                        <li class='product-content-wrapper__highlights-item'>
                                                            <div class='icon icon-highlight'>
                                                                <img src="http://www.porcelainsuperstore.co.uk/cdn/shop/files/icon-polish.svg?v=1753385191&amp;width=60"
                                                                    alt="Highlights Icon" width="32" height="32">
                                                            </div>
                                                            <div class='highlights-item__description'>
                                                                <strong
                                                                    class='highlights__text highlights__text--bold'>Finish</strong>

                                                                <span class='highlights__text'>
                                                                    Matt
                                                                </span>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="product-main-details__secondary-info tablet-hide">

                                                    <ul>

                                                        <li class="product-main-details__large-sample">

                                                            <input type="hidden" value="1"
                                                                data-free-sample-quantity-input />
                                                            <button data-in-stock-text="LARGE SAMPLE - £2.50"
                                                                data-unavailable-text="Unavailable"
                                                                data-oos-text="Call to pre-order"
                                                                data-success-text="Added" data-add-to-cart
                                                                data-atc-quantity-input="[data-free-sample-quantity-input]"
                                                                data-atc-product-id="44503110156478"
                                                                data-is-large-sample="true"
                                                                data-sample-added-text="LARGE SAMPLE ADDED"
                                                                data-sample-added-error-toast-text="Maximum of 4 large samples and 1 sample per product"
                                                                data-max-samples="4/4 large samples added" type="button"
                                                                class="btn--atc button button--sample button--radius--secondary button--full-width">LARGE
                                                                SAMPLE - £2.50</button>

                                                        </li>

                                                        <li>

                                                            <input type="hidden" value="1"
                                                                data-free-sample-quantity-input />
                                                            <button data-in-stock-text="GET FREE SAMPLE"
                                                                data-unavailable-text="Unavailable"
                                                                data-oos-text="Call to pre-order"
                                                                data-success-text="Added" data-add-to-cart
                                                                data-atc-quantity-input="[data-free-sample-quantity-input]"
                                                                data-atc-product-id="44503110123710"
                                                                data-is-sample="true"
                                                                data-sample-added-text="SAMPLE ADDED"
                                                                data-sample-added-error-toast-text="Maximum of 4 samples and 1 sample per product"
                                                                data-max-samples="4/4 samples added" type="button"
                                                                class="btn--atc button button--sample button--radius--secondary button--full-width">GET
                                                                FREE SAMPLE</button>

                                                        </li>

                                                        <li
                                                            class='grid__item text-center product-main-details__alt-info'>

                                                            Try before you buy with a free small sample <br> or choose a
                                                            large sample (20 x 30cm) for £2.50

                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="product-content-wrapper__lower">
                                                    <div class="product-content-wrapper__form">

                                                        <script>
                                                            function cleanRefURL() {
                                                                let url = document.referrer;
                                                                let domain = document.location.origin;
                                                                let path = url.replace(domain, '');
                                                                let list = '';
                                                                let length;
                                                                if (path.includes('?')) {
                                                                    let pos = path.indexOf('?');
                                                                    list = path.slice(0, pos);
                                                                } else {
                                                                    list = path;
                                                                }
                                                                length = list.length;
                                                                if (list.length > 1 && list.charAt(length - 1) ==
                                                                    'https://www.porcelainsuperstore.co.uk/') {
                                                                    return list.slice(0, length - 1);
                                                                } else if (list.length <= 1) {
                                                                    return '/';
                                                                } else {
                                                                    return list;
                                                                }
                                                            }
                                                        </script>

                                                        <div>

                                                            <input type="hidden" id="option-1" data-option-select
                                                                value="Box" />

                                                            <noscript>
                                                                <select name="id">

                                                                    <option value="44503110090942">Box - £37.44</option>

                                                                    <option value="44503110123710">Sample - £0.00
                                                                    </option>

                                                                    <option value="44503110156478">Large Sample - £2.50
                                                                    </option>

                                                                </select>
                                                            </noscript>

                                                            <fieldset
                                                                class="order-by-form-options display-order-by-area">
                                                                <legend class="text--bolder product-form-label">
                                                                    How much do you need?
                                                                </legend>
                                                                <div class="grid grid--3-col" data-order-by-options>

                                                                    <div class="grid__item">
                                                                        <label for="squareMeterInput"
                                                                            class="visually-hidden">Enter m²</label>
                                                                        <div data-order-by-area>
                                                                            <div class="custom-suffix-input-container">
                                                                                <span data-low-stock
                                                                                    class="low-stock hide">Low stock -
                                                                                    please call</span>
                                                                                <input id="squareMeterInput"
                                                                                    type="number"
                                                                                    class="text-input text-input--auto input-with-suffix js-input-quantity"
                                                                                    inputmode="decimal" step="0.1"
                                                                                    min="0" input-with-suffix
                                                                                    placeholder='0.0 m²'
                                                                                    data-order-by-area-input
                                                                                    data-product-area-quantity-calc="0.96" />
                                                                                <span input-suffix
                                                                                    class="custom-input-suffix">m²</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        style="align-self: center; color: rgb(var(--color-main-text))"
                                                                        class="tablet-hide">or</span>
                                                                    <span
                                                                        style="align-self: center; color: rgb(var(--color-main-text))"
                                                                        class="tablet-up-hide">=</span>
                                                                    <div class="grid__item"
                                                                        style="text-transform: capitalize"
                                                                        data-order-by-box>

                                                                        <label
                                                                            class="label product-form-label  visually-hidden ">Select
                                                                            Quantity</label>

                                                                        <div class="quantity-selector-wrapper quantity-selector-wrapper--style-2"
                                                                            data-quantity-selector>

                                                                            <button role="button" type="button"
                                                                                data-quantity-dec
                                                                                class="btn-quantity-selector btn-dec  hide "
                                                                                aria-label="decrease quantity"
                                                                                data-click-toggle='{"target": ".input-cart-update-44503110090942", "remove": "hide"}'></button>

                                                                            <div class="custom-suffix-input-container">
                                                                                <input pattern=" 0+\.[0-9]*[1-9][0-9]*$"
                                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                    type="number"
                                                                                    class="text-input input-quantity js-input-quantity text-input--auto"
                                                                                    value="1" name="updates[]" min="1"
                                                                                    data-quantity-input input-pluralizer
                                                                                    data-pluralize-target="[product-unit-pluralize]"
                                                                                    data-pluralize-word="box"
                                                                                    data-compare-price=""
                                                                                    data-product-price="3744"
                                                                                    input-with-suffix
                                                                                    data-click-toggle='{"target": ".input-cart-update-44503110090942", "remove": "hide"}'
                                                                                    aria-label="Item quantity">

                                                                                <span input-suffix
                                                                                    product-unit-pluralize
                                                                                    class="custom-input-suffix">box</span>
                                                                            </div>

                                                                            <button role="button" type="button"
                                                                                data-quantity-inc
                                                                                class="btn-quantity-selector btn-inc  hide "
                                                                                aria-label="increase quantity"
                                                                                data-click-toggle='{"target": ".input-cart-update-44503110090942", "remove": "hide"}'></button>

                                                                        </div>
                                                                    </div>
                                                                    <style>
                                                                        .product-content-wrapper__form .grid {
                                                                            margin-bottom: 15px;
                                                                        }

                                                                        .product__extra-amount {
                                                                            display: flex;
                                                                            width: 100%;
                                                                            align-items: center;
                                                                            padding: 13px 15px 13px 20px;
                                                                            border-radius: 5px;
                                                                            background: rgb(var(--color-new-bg));
                                                                            border: 1px solid rgb(var(--color-new-border));
                                                                            justify-content: space-between;
                                                                        }

                                                                        .product__extra-amount.visible {
                                                                            display: flex;
                                                                        }


                                                                        .product__extra-amount>*+* {
                                                                            /* margin-left: .85rem; */
                                                                        }

                                                                        .product__extra-amount .custom-toggle {
                                                                            /* margin-right: auto; */
                                                                        }

                                                                        .product__extra-amount p {
                                                                            font-size: 13px;
                                                                        }

                                                                        @media screen and (min-width: 800px) {
                                                                            .product__extra-amount {
                                                                                background: transparent;
                                                                                justify-content: end;
                                                                                border: 0;
                                                                                gap: 8px;
                                                                                padding: 10px 0;
                                                                            }

                                                                            .product__extra-amount p {
                                                                                font-size: 16px;
                                                                            }
                                                                        }

                                                                        @media screen and (max-width: 800px) {
                                                                            .product__extra-amount {
                                                                                border: 0;
                                                                                justify-content: start;
                                                                                gap: 8px;
                                                                                padding: 18px 0;
                                                                            }
                                                                        }
                                                                    </style>
                                                                    <product-amount-modifier
                                                                        class="product__extra-amount">
                                                                        <p style="order: 1;">Add 10% for cuts & wastage
                                                                        </p>
                                                                        <div class="custom-toggle">
                                                                            <input type="checkbox"
                                                                                id="extra-amount-toggle"
                                                                                class="custom-toggle__input">
                                                                            <label for="extra-amount-toggle"
                                                                                class="custom-toggle__label"></label>
                                                                        </div>

                                                                    </product-amount-modifier>
                                                                </div>
                                                            </fieldset>

                                                            <input type="hidden" data-product-form-quantity-input
                                                                value="1" name="quantity">

                                                            <input type="hidden" name="id" value="44503110090942"
                                                                class="input-variant-id">

                                                            <div class="product-details-price">

                                                            </div>
                                                        </div>

                                                        <style>
                                                            .btn--need-help {
                                                                background-color: ;
                                                                color: ;
                                                                border-color: ;
                                                            }

                                                            .btn--need-help path {
                                                                fill: ;
                                                            }

                                                            @media screen and (min-width: 768px) {
                                                                .btn--need-help:hover {
                                                                    background-color: ;
                                                                    color: ;
                                                                    border-color: ;
                                                                }

                                                                .btn--need-help:hover path {
                                                                    fill: ;
                                                                }
                                                            }
                                                        </style>

                                                        <script>
                                                            let variantId = document.querySelector(".input-variant-id");
                                                            let productInfo = ShopifyAnalytics.meta.product;
                                                            let variantSku;
                                                            let variantTitle;
                                                            let variantPrice;

                                                            function dlAddToCart() {
                                                                for (let i = 0; i < productInfo.variants.length; i++) {
                                                                    if (variantId.value == productInfo.variants[i].id) {
                                                                        variantSku = productInfo.variants[i].sku;
                                                                        variantTitle = productInfo.variants[i]
                                                                            .public_title;
                                                                        variantPrice = productInfo.variants[i].price;
                                                                    }
                                                                }
                                                                dataLayer.push({
                                                                    event: 'dl_add_to_cart',
                                                                    ecommerce: {
                                                                        add: {
                                                                            actionField: {
                                                                                list: cleanRefURL()
                                                                            },
                                                                            products: [{
                                                                                name: 'Petra Ivory Floor Tile',
                                                                                variant: variantTitle,
                                                                                id: variantSku,
                                                                                dimension2: '8292759634110',
                                                                                dimension3: variantId
                                                                                    .value,
                                                                                price: variantPrice /
                                                                                    100,
                                                                                brand: 'PS - Stock',
                                                                                category: 'Tile',
                                                                                list_name: cleanRefURL()
                                                                            }]
                                                                        }
                                                                    }
                                                                });
                                                            }
                                                        </script>
                                                    </div>

                                                    <div class="product-content-wrapper__unit-size">
                                                        <div class="product-content-wrapper__you-get">
                                                            <span class="tablet-hide">You'll get:</span>
                                                            <div class="text-body text-body--medium-large text-center">
                                                                <span data-unit-qty class='text--bolder'>1</span> <span
                                                                    class='text--bolder'><span
                                                                        product-unit-pluralize>box</span></span> covers
                                                                <span data-unit-size class='text--bolder'>0.96</span>
                                                                <span class='text--bolder'>m²</span>
                                                            </div>
                                                        </div>

                                                        <div class="total-price-wrapper text-right">
                                                            <span class="tablet-hide">Total:</span>
                                                            <strong data-product-price=""
                                                                data-atc-price="">£37.44</strong>
                                                        </div>
                                                    </div>

                                                    <div class="add-to-cart-btn-container">
                                                        <button data-product-form-submit
                                                            data-in-stock-text="<div class='tablet-hide tablet-up-hide'>Add <span data-atc-quantity>1</span> <span product-unit-pluralize>box</span><span class='atc-divider'>-</span><span data-product-price data-atc-price>£37.44</span></div><div class=''>ADD TO BASKET</div>"
                                                            data-unavailable-text="Unavailable"
                                                            data-oos-text="Call to pre-order" data-success-text="Added"
                                                            data-add-to-cart
                                                            data-atc-quantity-input="[data-quantity-input],[data-product-form-quantity-input]"
                                                            data-atc-product-id="44503110090942" type="submit"
                                                            class="btn--atc button button--black-2 button--radius--secondary button--full-width"
                                                            onclick="dlAddToCart()">
                                                            <div class='tablet-hide tablet-up-hide'>Add <span
                                                                    data-atc-quantity>1</span> <span
                                                                    product-unit-pluralize>box</span><span
                                                                    class='atc-divider'>-</span><span data-product-price
                                                                    data-atc-price>£37.44</span></div>
                                                            <div class=''>ADD TO BASKET</div>
                                                        </button>

                                                    </div>

                                                    <div class="tablet-up-hide">

                                                        <div class="product-in-stock">
                                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="17" height="17" rx="8.5" fill="#34A853" />
                                                                <path
                                                                    d="M12.3335 7.01904C12.6987 6.65381 12.6987 6.08936 12.3335 5.72412C11.9682 5.35889 11.4038 5.35889 11.0385 5.72412L7.45264 9.31006L5.9585 7.84912C5.59326 7.48389 5.02881 7.48389 4.66358 7.84912C4.29834 8.21436 4.29834 8.77881 4.66358 9.14404L6.78858 11.2691C7.15381 11.6343 7.71826 11.6343 8.0835 11.2691L12.3335 7.01904Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <div class="product-in-stock__content">
                                                                <span class="product-in-stock__status">In stock</span>
                                                                <span>Delivery from <strong>Tue, 23 Dec</strong></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div
                                                        class="product-content-wrapper__features-list--mobile tablet-up-hide">
                                                        <div class="product-content-wrapper__features-container">
                                                            <ul>
                                                                <li>
                                                                    <img src="../cdn/shop/files/Returns-iconfe09.png?v=1761572391&amp;width=100"
                                                                        width="28px" height="20px" alt="returns icon" />
                                                                    <span>
                                                                        <p><a href="https://www.porcelainsuperstore.co.uk/pages/100-day-returns"
                                                                                title="returns"><span
                                                                                    style="text-decoration:underline">100
                                                                                    Day</span> risk free returns</a></p>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <img src="../cdn/shop/files/Box-icone915.png?v=1761572913&amp;width=100"
                                                                        width="28px" height="20px"
                                                                        alt="delivery icon" />
                                                                    <span>
                                                                        <p><a href="https://www.porcelainsuperstore.co.uk/pages/delivery"
                                                                                title="Delivery"><span
                                                                                    style="text-decoration:underline">Free
                                                                                    delivery</span> over £500</a></p>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <img src="../cdn/shop/files/Tag-icon31f3.png?v=1761572931&amp;width=100"
                                                                        width="28px" height="20px"
                                                                        alt="price match icon" />
                                                                    <span>
                                                                        <p><a href="https://www.porcelainsuperstore.co.uk/pages/price-match-promise"
                                                                                title="Price Match Promise"><span
                                                                                    style="text-decoration:underline">Price
                                                                                    match</span> promise</a></p>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-content-wrapper__payment-methods">
                                                            <section class="payment-icons-wrapper">

                                                                <ul class="payment-icons">
                                                                    <li>
                                                                        <svg class="icon"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            role="img"
                                                                            aria-labelledby="pi-american_express"
                                                                            viewBox="0 0 38 24" width="38" height="24">
                                                                            <title id="pi-american_express">American
                                                                                Express</title>
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
                                                                        <svg class="icon" version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            role="img" x="0" y="0" width="38"
                                                                            height="24" viewBox="0 0 165.521 105.965"
                                                                            xml:space="preserve"
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
                                                                        <svg class="icon"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            role="img" viewBox="0 0 38 24" width="38"
                                                                            height="24" aria-labelledby="pi-google_pay">
                                                                            <title id="pi-google_pay">Google Pay</title>
                                                                            <path
                                                                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                                                                fill="#000" opacity=".07"></path>
                                                                            <path
                                                                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
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
                                                                        <svg class="icon" viewBox="0 0 38 24"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            role="img" width="38" height="24"
                                                                            aria-labelledby="pi-master">
                                                                            <title id="pi-master">Mastercard</title>
                                                                            <path opacity=".07"
                                                                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                                            </path>
                                                                            <path fill="#fff"
                                                                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                                            </path>
                                                                            <circle fill="#EB001B" cx="15" cy="12"
                                                                                r="7"></circle>
                                                                            <circle fill="#F79E1B" cx="23" cy="12"
                                                                                r="7"></circle>
                                                                            <path fill="#FF5F00"
                                                                                d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                                                                            </path>
                                                                        </svg>
                                                                    </li>
                                                                    <li>
                                                                        <svg class="icon"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            role="img" viewBox="0 0 38 24" width="38"
                                                                            height="24"
                                                                            aria-labelledby="pi-shopify_pay">
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
                                                                        <svg class="icon" viewBox="0 0 38 24"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            role="img" width="38" height="24"
                                                                            aria-labelledby="pi-visa">
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
                                                                        <svg class="icon"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            role="img" width="38" height="24"
                                                                            viewBox="0 0 38 24"
                                                                            aria-labelledby="pi-klarna">
                                                                            <title id="pi-klarna">Klarna</title>
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <path
                                                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                                                                    fill="#FFB3C7"></path>
                                                                                <path
                                                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                                                                                    fill="#FFB3C7"></path>
                                                                                <path
                                                                                    d="M34.117 13.184c-.487 0-.882.4-.882.892 0 .493.395.893.882.893.488 0 .883-.4.883-.893a.888.888 0 00-.883-.892zm-2.903-.69c0-.676-.57-1.223-1.274-1.223-.704 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.376h1.406v4.75h-1.406v-.303a2.446 2.446 0 01-1.394.435c-1.369 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .996.16 1.394.435v-.304zm-11.253.619v-.619h-1.44v4.75h1.443v-2.217c0-.749.802-1.15 1.359-1.15h.016v-1.382c-.57 0-1.096.247-1.378.618zm-3.586 1.756c0-.675-.57-1.222-1.274-1.222-.703 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.375h1.406v4.75h-1.406v-.303A2.446 2.446 0 0114.99 15c-1.368 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .997.16 1.394.435v-.304zm8.463-.128c-.561 0-1.093.177-1.448.663v-.535H22v4.75h1.417v-2.496c0-.722.479-1.076 1.055-1.076.618 0 .973.374.973 1.066v2.507h1.405v-3.021c0-1.106-.87-1.858-2.002-1.858zM10.465 14.87h1.472V8h-1.472v6.868zM4 14.87h1.558V8H4v6.87zM9.45 8a5.497 5.497 0 01-1.593 3.9l2.154 2.97H8.086l-2.341-3.228.604-.458A3.96 3.96 0 007.926 8H9.45z"
                                                                                    fill="#0A0B09" fill-rule="nonzero">
                                                                                </path>
                                                                            </g>
                                                                        </svg>
                                                                    </li>
                                                                </ul>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-main-details__cta product-details-price-snippet">

                                                <div class="tablet-hide">

                                                    <div class="product-in-stock">
                                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="17" height="17" rx="8.5" fill="#34A853" />
                                                            <path
                                                                d="M12.3335 7.01904C12.6987 6.65381 12.6987 6.08936 12.3335 5.72412C11.9682 5.35889 11.4038 5.35889 11.0385 5.72412L7.45264 9.31006L5.9585 7.84912C5.59326 7.48389 5.02881 7.48389 4.66358 7.84912C4.29834 8.21436 4.29834 8.77881 4.66358 9.14404L6.78858 11.2691C7.15381 11.6343 7.71826 11.6343 8.0835 11.2691L12.3335 7.01904Z"
                                                                fill="white" />
                                                        </svg>
                                                        <div class="product-in-stock__content">
                                                            <span class="product-in-stock__status">In stock</span>
                                                            <span>Delivery from <strong>Tue, 23 Dec</strong></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="product-content-wrapper__features-list tablet-hide">

                                                    <div class='product-content-wrapper__features-heading'>
                                                        <span class="product-content-wrapper__features-title">Shop with
                                                            confidence</span>
                                                        <a href="https://www.porcelainsuperstore.co.uk/pages/about-us"
                                                            class="grid__item grid__item--end site-link site-link--underline product-content-wrapper__features-btn">About
                                                            Us</a>
                                                    </div>
                                                    <ul>
                                                        <li>

                                                            <div class="product-content-wrapper__features-icon">
                                                                <svg width="17" height="17" viewBox="0 0 17 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="17" height="17" rx="8.5"
                                                                        fill="#34A853" />
                                                                    <path
                                                                        d="M12.3335 7.01904C12.6987 6.65381 12.6987 6.08936 12.3335 5.72412C11.9682 5.35889 11.4038 5.35889 11.0385 5.72412L7.45264 9.31006L5.9585 7.84912C5.59326 7.48389 5.02881 7.48389 4.66358 7.84912C4.29834 8.21436 4.29834 8.77881 4.66358 9.14404L6.78858 11.2691C7.15381 11.6343 7.71826 11.6343 8.0835 11.2691L12.3335 7.01904Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </div>

                                                            <span><strong>100 Day</strong> Risk Free <a
                                                                    href="https://www.porcelainsuperstore.co.uk/pages/100-day-returns"
                                                                    class="site-link site-link--underline">Returns</a>
                                                            </span>
                                                        </li>
                                                        <li>

                                                            <div class="product-content-wrapper__features-icon">
                                                                <svg width="17" height="17" viewBox="0 0 17 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="17" height="17" rx="8.5"
                                                                        fill="#34A853" />
                                                                    <path
                                                                        d="M12.3335 7.01904C12.6987 6.65381 12.6987 6.08936 12.3335 5.72412C11.9682 5.35889 11.4038 5.35889 11.0385 5.72412L7.45264 9.31006L5.9585 7.84912C5.59326 7.48389 5.02881 7.48389 4.66358 7.84912C4.29834 8.21436 4.29834 8.77881 4.66358 9.14404L6.78858 11.2691C7.15381 11.6343 7.71826 11.6343 8.0835 11.2691L12.3335 7.01904Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </div>

                                                            <span>Over <strong>1,000,000</strong> Orders
                                                                Delivered</span>
                                                        </li>
                                                        <li>

                                                            <div class="product-content-wrapper__features-icon">
                                                                <svg width="17" height="17" viewBox="0 0 17 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="17" height="17" rx="8.5"
                                                                        fill="#34A853" />
                                                                    <path
                                                                        d="M12.3335 7.01904C12.6987 6.65381 12.6987 6.08936 12.3335 5.72412C11.9682 5.35889 11.4038 5.35889 11.0385 5.72412L7.45264 9.31006L5.9585 7.84912C5.59326 7.48389 5.02881 7.48389 4.66358 7.84912C4.29834 8.21436 4.29834 8.77881 4.66358 9.14404L6.78858 11.2691C7.15381 11.6343 7.71826 11.6343 8.0835 11.2691L12.3335 7.01904Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </div>

                                                            <span>
                                                                <p><strong>Free delivery</strong> over £500</p>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <div class="product-content-wrapper__payment-methods">
                                                                <section class="payment-icons-wrapper">

                                                                    <ul class="payment-icons">
                                                                        <li>
                                                                            <svg class="icon"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                role="img"
                                                                                aria-labelledby="pi-american_express"
                                                                                viewBox="0 0 38 24" width="38"
                                                                                height="24">
                                                                                <title id="pi-american_express">American
                                                                                    Express</title>
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
                                                                            <svg class="icon" version="1.1"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                role="img" x="0" y="0" width="38"
                                                                                height="24"
                                                                                viewBox="0 0 165.521 105.965"
                                                                                xml:space="preserve"
                                                                                aria-labelledby="pi-apple_pay">
                                                                                <title id="pi-apple_pay">Apple Pay
                                                                                </title>
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
                                                                            <svg class="icon"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                role="img" viewBox="0 0 38 24"
                                                                                width="38" height="24"
                                                                                aria-labelledby="pi-google_pay">
                                                                                <title id="pi-google_pay">Google Pay
                                                                                </title>
                                                                                <path
                                                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                                                                    fill="#000" opacity=".07"></path>
                                                                                <path
                                                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
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
                                                                            <svg class="icon" viewBox="0 0 38 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                role="img" width="38" height="24"
                                                                                aria-labelledby="pi-master">
                                                                                <title id="pi-master">Mastercard</title>
                                                                                <path opacity=".07"
                                                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                                                </path>
                                                                                <path fill="#fff"
                                                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                                                </path>
                                                                                <circle fill="#EB001B" cx="15" cy="12"
                                                                                    r="7"></circle>
                                                                                <circle fill="#F79E1B" cx="23" cy="12"
                                                                                    r="7"></circle>
                                                                                <path fill="#FF5F00"
                                                                                    d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                                                                                </path>
                                                                            </svg>
                                                                        </li>
                                                                        <li>
                                                                            <svg class="icon"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                role="img" viewBox="0 0 38 24"
                                                                                width="38" height="24"
                                                                                aria-labelledby="pi-shopify_pay">
                                                                                <title id="pi-shopify_pay">Shop Pay
                                                                                </title>
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
                                                                            <svg class="icon" viewBox="0 0 38 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                role="img" width="38" height="24"
                                                                                aria-labelledby="pi-visa">
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
                                                                            <svg class="icon"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                role="img" width="38" height="24"
                                                                                viewBox="0 0 38 24"
                                                                                aria-labelledby="pi-klarna">
                                                                                <title id="pi-klarna">Klarna</title>
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <path
                                                                                        d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                                                                        fill="#FFB3C7"></path>
                                                                                    <path
                                                                                        d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                                                                                        fill="#FFB3C7"></path>
                                                                                    <path
                                                                                        d="M34.117 13.184c-.487 0-.882.4-.882.892 0 .493.395.893.882.893.488 0 .883-.4.883-.893a.888.888 0 00-.883-.892zm-2.903-.69c0-.676-.57-1.223-1.274-1.223-.704 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.376h1.406v4.75h-1.406v-.303a2.446 2.446 0 01-1.394.435c-1.369 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .996.16 1.394.435v-.304zm-11.253.619v-.619h-1.44v4.75h1.443v-2.217c0-.749.802-1.15 1.359-1.15h.016v-1.382c-.57 0-1.096.247-1.378.618zm-3.586 1.756c0-.675-.57-1.222-1.274-1.222-.703 0-1.274.547-1.274 1.222 0 .675.57 1.223 1.274 1.223.704 0 1.274-.548 1.274-1.223zm.005-2.375h1.406v4.75h-1.406v-.303A2.446 2.446 0 0114.99 15c-1.368 0-2.478-1.122-2.478-2.507 0-1.384 1.11-2.506 2.478-2.506.517 0 .997.16 1.394.435v-.304zm8.463-.128c-.561 0-1.093.177-1.448.663v-.535H22v4.75h1.417v-2.496c0-.722.479-1.076 1.055-1.076.618 0 .973.374.973 1.066v2.507h1.405v-3.021c0-1.106-.87-1.858-2.002-1.858zM10.465 14.87h1.472V8h-1.472v6.868zM4 14.87h1.558V8H4v6.87zM9.45 8a5.497 5.497 0 01-1.593 3.9l2.154 2.97H8.086l-2.341-3.228.604-.458A3.96 3.96 0 007.926 8H9.45z"
                                                                                        fill="#0A0B09"
                                                                                        fill-rule="nonzero"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </li>
                                                                    </ul>
                                                                </section>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div
                                                    class="product-main-details__secondary-info product-main-details__secondary-info--mobile tablet-up-hide">

                                                    <span class="secondary-info__title">Need a Free Sample?</span>

                                                    <ul>

                                                        <li>
                                                            <p>
                                                                <p>Choose either a free cut sample or a larger<br />A4
                                                                    size
                                                                    piece to try at home</p>
                                                            </p>
                                                        </li>

                                                        <li>

                                                            <input type="hidden" value="1"
                                                                data-free-sample-quantity-input />
                                                            <button data-in-stock-text="GET FREE SAMPLE"
                                                                data-unavailable-text="Unavailable"
                                                                data-oos-text="Call to pre-order"
                                                                data-success-text="Added" data-add-to-cart
                                                                data-atc-quantity-input="[data-free-sample-quantity-input]"
                                                                data-atc-product-id="44503110123710"
                                                                data-is-sample="true"
                                                                data-sample-added-text="SAMPLE ADDED"
                                                                data-sample-added-error-toast-text="Maximum of 4 samples and 1 sample per product"
                                                                data-max-samples="4/4 samples added" type="button"
                                                                class="btn--atc button button--sample button--radius--secondary button--full-width">GET
                                                                FREE SAMPLE
                                                                <div class="sample__icon">
                                                                    <svg width="21" height="21" viewBox="0 0 21 21"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M4.59375 17.7188C4.33416 17.7188 4.0804 17.6418 3.86456 17.4976C3.64872 17.3533 3.4805 17.1483 3.38116 16.9085C3.28182 16.6687 3.25583 16.4048 3.30647 16.1502C3.35711 15.8956 3.48212 15.6617 3.66567 15.4782C3.84923 15.2946 4.08309 15.1696 4.33769 15.119C4.59229 15.0683 4.85619 15.0943 5.09602 15.1937C5.33585 15.293 5.54083 15.4612 5.68505 15.6771C5.82927 15.8929 5.90625 16.1467 5.90625 16.4062C5.90625 16.7543 5.76797 17.0882 5.52183 17.3343C5.27569 17.5805 4.94185 17.7188 4.59375 17.7188ZM21 14.4375V18.375C21 19.0712 20.7234 19.7389 20.2312 20.2312C19.7389 20.7234 19.0712 21 18.375 21H4.59367C3.37535 21 2.20693 20.516 1.34545 19.6545C0.483972 18.793 -1.79019e-10 17.6246 0 16.4062V2.625C0 1.92881 0.276562 1.26113 0.768845 0.768845C1.26113 0.276562 1.92881 0 2.625 0H6.5625C7.25869 0 7.92637 0.276562 8.41865 0.768845C8.91094 1.26113 9.1875 1.92881 9.1875 2.625V5.31593L11.0903 3.41314C11.334 3.16939 11.6234 2.97603 11.9419 2.84411C12.2604 2.71219 12.6017 2.6443 12.9464 2.6443C13.2912 2.6443 13.6325 2.71219 13.951 2.84411C14.2695 2.97603 14.5588 3.16939 14.8026 3.41314L17.5869 6.1974C17.8306 6.44116 18.024 6.73053 18.1559 7.04901C18.2878 7.36749 18.3557 7.70884 18.3557 8.05356C18.3557 8.39828 18.2878 8.73962 18.1559 9.0581C18.024 9.37659 17.8306 9.66596 17.5869 9.90972L15.6841 11.8125H18.375C19.0712 11.8125 19.7389 12.0891 20.2312 12.5813C20.7234 13.0736 21 13.7413 21 14.4375ZM9.18225 16.4581L16.6588 8.98165C16.7806 8.85977 16.8773 8.71508 16.9433 8.55584C17.0092 8.3966 17.0432 8.22593 17.0432 8.05357C17.0432 7.88121 17.0092 7.71053 16.9433 7.55129C16.8773 7.39205 16.7806 7.24736 16.6588 7.12548L13.8745 4.34125C13.6284 4.09511 13.2945 3.95683 12.9464 3.95683C12.5983 3.95683 12.2645 4.09511 12.0184 4.34125L9.1875 7.17213V16.4062C9.1875 16.424 9.18254 16.4404 9.18225 16.4581ZM4.93667 19.67C5.76481 19.5533 6.52139 19.1369 7.06297 18.4996C7.60454 17.8623 7.89348 17.0485 7.875 16.2124V2.625C7.875 2.2769 7.73672 1.94306 7.49058 1.69692C7.24444 1.45078 6.9106 1.3125 6.5625 1.3125H2.625C2.2769 1.3125 1.94306 1.45078 1.69692 1.69692C1.45078 1.94306 1.3125 2.2769 1.3125 2.625V16.4062C1.31302 16.8659 1.41001 17.3204 1.5972 17.7402C1.78439 18.1601 2.05762 18.536 2.39921 18.8436C2.7408 19.1512 3.14315 19.3837 3.58024 19.526C4.01734 19.6684 4.47944 19.7174 4.93667 19.67ZM19.6875 14.4375C19.6875 14.0894 19.5492 13.7556 19.3031 13.5094C19.0569 13.2633 18.7231 13.125 18.375 13.125H14.4375V13.0591L7.84199 19.6545C7.82974 19.6667 7.81436 19.6754 7.80202 19.6875H18.375C18.7231 19.6875 19.0569 19.5492 19.3031 19.3031C19.5492 19.0569 19.6875 18.7231 19.6875 18.375V14.4375Z"
                                                                            fill="white" />
                                                                    </svg>
                                                                </div>

                                                            </button>

                                                        </li>

                                                        <li class="product-main-details__large-sample">

                                                            <input type="hidden" value="1"
                                                                data-free-sample-quantity-input />
                                                            <button data-in-stock-text="LARGE SAMPLE - £2.50"
                                                                data-unavailable-text="Unavailable"
                                                                data-oos-text="Call to pre-order"
                                                                data-success-text="Added" data-add-to-cart
                                                                data-atc-quantity-input="[data-free-sample-quantity-input]"
                                                                data-atc-product-id="44503110156478"
                                                                data-is-large-sample="true"
                                                                data-sample-added-text="LARGE SAMPLE ADDED"
                                                                data-sample-added-error-toast-text="Maximum of 4 large samples and 1 sample per product"
                                                                data-max-samples="4/4 large samples added" type="button"
                                                                class="btn--atc button button--sample button--radius--secondary button--full-width">LARGE
                                                                SAMPLE - £2.50</button>

                                                        </li>

                                                        <li
                                                            class='grid__item text-center product-main-details__alt-info tablet-hide'>

                                                            Try before you buy with a free small sample <br> or choose a
                                                            large sample (20 x 30cm) for £2.50

                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="tablet-hide">
                                                    <div class="product-details-gallery-wrapper__secondary-info">
                                                        <h3 class="h2 title text-center tablet-up-hide">Need help?</h3>
                                                        <h3 class="h2 title text-center tablet-hide">Need some help?
                                                        </h3>

                                                        <ul style="margin: 16px 0 0;">

                                                            <div class="product-help__icon-buttons">
                                                                <li class="product-help__button--with-icon">
                                                                    <a class="button button--with-icon button--text-normal button--full-width button--radius--secondary product-help__button"
                                                                        href="tel:+4403300940304">
                                                                        <span class="button__icon">
                                                                            <svg viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g id="SVGRepo_bgCarrier"
                                                                                    stroke-width="0"></g>
                                                                                <g id="SVGRepo_tracerCarrier"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></g>
                                                                                <g id="SVGRepo_iconCarrier">
                                                                                    <path
                                                                                        d="M16.1007 13.359L15.5719 12.8272H15.5719L16.1007 13.359ZM16.5562 12.9062L17.085 13.438H17.085L16.5562 12.9062ZM18.9728 12.5894L18.6146 13.2483L18.9728 12.5894ZM20.8833 13.628L20.5251 14.2869L20.8833 13.628ZM21.4217 16.883L21.9505 17.4148L21.4217 16.883ZM20.0011 18.2954L19.4723 17.7636L20.0011 18.2954ZM18.6763 18.9651L18.7459 19.7119H18.7459L18.6763 18.9651ZM8.81536 14.7266L9.34418 14.1947L8.81536 14.7266ZM4.00289 5.74561L3.2541 5.78816L3.2541 5.78816L4.00289 5.74561ZM10.4775 7.19738L11.0063 7.72922H11.0063L10.4775 7.19738ZM10.6342 4.54348L11.2346 4.09401L10.6342 4.54348ZM9.37326 2.85908L8.77286 3.30855V3.30855L9.37326 2.85908ZM6.26145 2.57483L6.79027 3.10667H6.79027L6.26145 2.57483ZM4.69185 4.13552L4.16303 3.60368H4.16303L4.69185 4.13552ZM12.0631 11.4972L12.5919 10.9654L12.0631 11.4972ZM16.6295 13.8909L17.085 13.438L16.0273 12.3743L15.5719 12.8272L16.6295 13.8909ZM18.6146 13.2483L20.5251 14.2869L21.2415 12.9691L19.331 11.9305L18.6146 13.2483ZM20.8929 16.3511L19.4723 17.7636L20.5299 18.8273L21.9505 17.4148L20.8929 16.3511ZM18.6067 18.2184C17.1568 18.3535 13.4056 18.2331 9.34418 14.1947L8.28654 15.2584C12.7186 19.6653 16.9369 19.8805 18.7459 19.7119L18.6067 18.2184ZM9.34418 14.1947C5.4728 10.3453 4.83151 7.10765 4.75168 5.70305L3.2541 5.78816C3.35456 7.55599 4.14863 11.144 8.28654 15.2584L9.34418 14.1947ZM10.7195 8.01441L11.0063 7.72922L9.9487 6.66555L9.66189 6.95073L10.7195 8.01441ZM11.2346 4.09401L9.97365 2.40961L8.77286 3.30855L10.0338 4.99296L11.2346 4.09401ZM5.73263 2.04299L4.16303 3.60368L5.22067 4.66736L6.79027 3.10667L5.73263 2.04299ZM10.1907 7.48257C9.66189 6.95073 9.66117 6.95144 9.66045 6.95216C9.66021 6.9524 9.65949 6.95313 9.659 6.95362C9.65802 6.95461 9.65702 6.95561 9.65601 6.95664C9.65398 6.95871 9.65188 6.96086 9.64972 6.9631C9.64539 6.96759 9.64081 6.97245 9.63599 6.97769C9.62634 6.98816 9.61575 7.00014 9.60441 7.01367C9.58174 7.04072 9.55605 7.07403 9.52905 7.11388C9.47492 7.19377 9.41594 7.2994 9.36589 7.43224C9.26376 7.70329 9.20901 8.0606 9.27765 8.50305C9.41189 9.36833 10.0078 10.5113 11.5343 12.0291L12.5919 10.9654C11.1634 9.54499 10.8231 8.68059 10.7599 8.27309C10.7298 8.07916 10.761 7.98371 10.7696 7.96111C10.7748 7.94713 10.7773 7.9457 10.7709 7.95525C10.7677 7.95992 10.7624 7.96723 10.7541 7.97708C10.75 7.98201 10.7451 7.98759 10.7394 7.99381C10.7365 7.99692 10.7335 8.00019 10.7301 8.00362C10.7285 8.00534 10.7268 8.00709 10.725 8.00889C10.7241 8.00979 10.7232 8.0107 10.7223 8.01162C10.7219 8.01208 10.7212 8.01278 10.7209 8.01301C10.7202 8.01371 10.7195 8.01441 10.1907 7.48257ZM11.5343 12.0291C13.0613 13.5474 14.2096 14.1383 15.0763 14.2713C15.5192 14.3392 15.8763 14.285 16.1472 14.1841C16.28 14.1346 16.3858 14.0763 16.4658 14.0227C16.5058 13.9959 16.5392 13.9704 16.5663 13.9479C16.5799 13.9367 16.5919 13.9262 16.6024 13.9166C16.6077 13.9118 16.6126 13.9073 16.6171 13.903C16.6194 13.9008 16.6215 13.8987 16.6236 13.8967C16.6246 13.8957 16.6256 13.8947 16.6266 13.8937C16.6271 13.8932 16.6279 13.8925 16.6281 13.8923C16.6288 13.8916 16.6295 13.8909 16.1007 13.359C15.5719 12.8272 15.5726 12.8265 15.5733 12.8258C15.5735 12.8256 15.5742 12.8249 15.5747 12.8244C15.5756 12.8235 15.5765 12.8226 15.5774 12.8217C15.5793 12.82 15.581 12.8183 15.5827 12.8166C15.5862 12.8133 15.5895 12.8103 15.5926 12.8074C15.5988 12.8018 15.6044 12.7969 15.6094 12.7929C15.6192 12.7847 15.6265 12.7795 15.631 12.7764C15.6403 12.7702 15.6384 12.773 15.6236 12.7785C15.5991 12.7876 15.501 12.8189 15.3038 12.7886C14.8905 12.7253 14.02 12.3853 12.5919 10.9654L11.5343 12.0291ZM9.97365 2.40961C8.95434 1.04802 6.94996 0.83257 5.73263 2.04299L6.79027 3.10667C7.32195 2.578 8.26623 2.63181 8.77286 3.30855L9.97365 2.40961ZM4.75168 5.70305C4.73201 5.35694 4.89075 4.9954 5.22067 4.66736L4.16303 3.60368C3.62571 4.13795 3.20329 4.89425 3.2541 5.78816L4.75168 5.70305ZM19.4723 17.7636C19.1975 18.0369 18.9029 18.1908 18.6067 18.2184L18.7459 19.7119C19.4805 19.6434 20.0824 19.2723 20.5299 18.8273L19.4723 17.7636ZM11.0063 7.72922C11.9908 6.7503 12.064 5.2019 11.2346 4.09401L10.0338 4.99295C10.4373 5.53193 10.3773 6.23938 9.9487 6.66555L11.0063 7.72922ZM20.5251 14.2869C21.3429 14.7315 21.4703 15.7769 20.8929 16.3511L21.9505 17.4148C23.2908 16.0821 22.8775 13.8584 21.2415 12.9691L20.5251 14.2869ZM17.085 13.438C17.469 13.0562 18.0871 12.9616 18.6146 13.2483L19.331 11.9305C18.2474 11.3414 16.9026 11.5041 16.0273 12.3743L17.085 13.438Z"
                                                                                        fill="#000000"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="button__text">
                                                                            <p>Our friendly team are here to
                                                                                help<br />Monday to Friday | 9am - 5pm
                                                                                <br /><span
                                                                                    style="text-decoration:underline"><strong>0330
                                                                                        094 0304</strong></span></p>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="product-help__button--with-icon">
                                                                    <a class="button button--with-icon button--text-normal button--full-width button--radius--secondary product-help__button"
                                                                        href="mailto:help@porcelainsuperstore.co.uk">
                                                                        <span class="button__icon">
                                                                            <svg height="200px" width="200px"
                                                                                version="1.1" id="_x32_"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                viewBox="0 0 512 512"
                                                                                xml:space="preserve" fill="#000000">
                                                                                <g id="SVGRepo_bgCarrier"
                                                                                    stroke-width="0"></g>
                                                                                <g id="SVGRepo_tracerCarrier"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></g>
                                                                                <g id="SVGRepo_iconCarrier">
                                                                                    <style type="text/css">
                                                                                        .st0 {
                                                                                            fill: #000000;
                                                                                        }
                                                                                    </style>
                                                                                    <g>
                                                                                        <path class="st0"
                                                                                            d="M510.746,110.361c-2.128-10.754-6.926-20.918-13.926-29.463c-1.422-1.794-2.909-3.39-4.535-5.009 c-12.454-12.52-29.778-19.701-47.531-19.701H67.244c-17.951,0-34.834,7-47.539,19.708c-1.608,1.604-3.099,3.216-4.575,5.067 c-6.97,8.509-11.747,18.659-13.824,29.428C0.438,114.62,0,119.002,0,123.435v265.137c0,9.224,1.874,18.206,5.589,26.745 c3.215,7.583,8.093,14.772,14.112,20.788c1.516,1.509,3.022,2.901,4.63,4.258c12.034,9.966,27.272,15.45,42.913,15.45h377.51 c15.742,0,30.965-5.505,42.967-15.56c1.604-1.298,3.091-2.661,4.578-4.148c5.818-5.812,10.442-12.49,13.766-19.854l0.438-1.05 c3.646-8.377,5.497-17.33,5.497-26.628V123.435C512,119.06,511.578,114.649,510.746,110.361z M34.823,99.104 c0.951-1.392,2.165-2.821,3.714-4.382c7.689-7.685,17.886-11.914,28.706-11.914h377.51c10.915,0,21.115,4.236,28.719,11.929 c1.313,1.327,2.567,2.8,3.661,4.272l2.887,3.88l-201.5,175.616c-6.212,5.446-14.21,8.443-22.523,8.443 c-8.231,0-16.222-2.99-22.508-8.436L32.19,102.939L34.823,99.104z M26.755,390.913c-0.109-0.722-0.134-1.524-0.134-2.341V128.925 l156.37,136.411L28.199,400.297L26.755,390.913z M464.899,423.84c-6.052,3.492-13.022,5.344-20.145,5.344H67.244 c-7.127,0-14.094-1.852-20.142-5.344l-6.328-3.668l159.936-139.379l17.528,15.246c10.514,9.128,23.922,14.16,37.761,14.16 c13.89,0,27.32-5.032,37.827-14.16l17.521-15.253L471.228,420.18L464.899,423.84z M485.372,388.572 c0,0.803-0.015,1.597-0.116,2.304l-1.386,9.472L329.012,265.409l156.36-136.418V388.572z">
                                                                                        </path>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="button__text">
                                                                            <p><span
                                                                                    style="text-decoration:underline">help@porcelainsuperstore.co.uk</span>
                                                                            </p>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="product-help__button--with-icon">
                                                                    <a class="button button--with-icon button--text-normal button--full-width button--radius--secondary button--whatsapp product-help__button"
                                                                        href="https://wa.me/message/OW5MADSFVAVEJ1">
                                                                        <span class="button__icon">
                                                                            <svg width="35" height="36"
                                                                                viewBox="0 0 35 36" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.872559 34.389L3.22197 25.7837C1.77256 23.2655 1.01035 20.4079 1.01122 17.4811C1.01558 8.32459 8.44231 0.875122 17.5696 0.875122C21.999 0.876872 26.1554 2.60668 29.2818 5.74519C32.4074 8.88457 34.1289 13.0564 34.1271 17.4942C34.1237 26.6508 26.6952 34.1011 17.5696 34.1011H17.5626C14.792 34.1002 12.0685 33.4029 9.65016 32.0791L0.872559 34.389Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M0.872676 34.8264C0.75756 34.8264 0.645932 34.7809 0.563084 34.6969C0.454072 34.5858 0.41134 34.4239 0.452328 34.2743L2.75378 25.8432C1.32704 23.3005 0.574421 20.4131 0.576165 17.482C0.579653 8.08308 8.2026 0.437622 17.5697 0.437622C22.1133 0.439372 26.3822 2.21468 29.5906 5.43631C32.7991 8.65881 34.565 12.9409 34.5633 17.4942C34.5598 26.8922 26.936 34.5386 17.5697 34.5386C14.7886 34.5377 12.0372 33.8491 9.59533 32.5463L0.983432 34.8116C0.946804 34.8221 0.910176 34.8264 0.872676 34.8264Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.5695 0.874967C21.9989 0.876716 26.1553 2.60653 29.2817 5.74503C32.4073 8.88441 34.1288 13.0563 34.127 17.4941C34.1235 26.6506 26.6951 34.1009 17.5695 34.1009H17.5625C14.7919 34.1001 12.0684 33.4027 9.65005 32.0789L0.87245 34.3888L3.22186 25.7835C1.77245 23.2654 1.01024 20.4077 1.01111 17.481C1.01547 8.32443 8.4422 0.874967 17.5695 0.874967ZM17.5695 0C7.96255 0 0.143382 7.84145 0.139021 17.481C0.138149 20.427 0.879427 23.3301 2.28524 25.8999L0.0308821 34.1587C-0.0510945 34.4606 0.0326262 34.7825 0.252393 35.0048C0.418091 35.1728 0.642218 35.2647 0.87245 35.2647C0.946578 35.2647 1.02071 35.255 1.09396 35.2358L9.54191 33.0134C12.0082 34.2978 14.7727 34.9759 17.5625 34.9768C27.1765 34.9768 34.9956 27.1345 35 17.495C35.0017 12.8235 33.1904 8.43118 29.9 5.1273C26.6079 1.82256 22.2291 0.00174993 17.5695 0Z"
                                                                                    fill="#CFD8DC" />
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M27.3038 7.72777C24.7049 5.11862 21.2506 3.68105 17.5739 3.68018C9.98317 3.68018 3.80964 9.87144 3.80615 17.4819C3.80528 20.0902 4.53261 22.6293 5.91051 24.8281L6.23842 25.3505L4.84743 30.4437L10.0564 29.0735L10.5596 29.3727C12.6718 30.6309 15.0945 31.2959 17.5643 31.2967H17.5695C25.1549 31.2967 31.3285 25.1046 31.3311 17.4933C31.332 13.8053 29.9026 10.3369 27.3038 7.72777Z"
                                                                                    fill="#40C351" />
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M13.4306 10.539C13.1211 9.84778 12.7949 9.83378 12.4993 9.82153C12.2577 9.81103 11.9821 9.81191 11.7065 9.81191C11.4309 9.81191 10.9827 9.91603 10.6033 10.3316C10.224 10.7472 9.15479 11.7508 9.15479 13.793C9.15479 15.8352 10.6373 17.8091 10.844 18.0856C11.0507 18.3621 13.7062 22.687 17.9115 24.3512C21.4059 25.7337 22.1176 25.4589 22.8763 25.3898C23.635 25.3207 25.3242 24.3862 25.6687 23.4168C26.0132 22.4473 26.0132 21.617 25.9103 21.4437C25.8065 21.2705 25.5309 21.1672 25.1175 20.959C24.7042 20.7507 22.6696 19.7472 22.2902 19.6089C21.9109 19.4707 21.6353 19.4015 21.3588 19.8172C21.0833 20.2319 20.2905 21.1672 20.049 21.4437C19.8074 21.7211 19.5658 21.7561 19.1524 21.5478C18.7391 21.3396 17.4065 20.9021 15.8254 19.4882C14.5958 18.3883 13.7655 17.0295 13.524 16.6139C13.2824 16.1992 13.4978 15.9743 13.7054 15.7669C13.8911 15.5806 14.1187 15.2822 14.3263 15.0398C14.533 14.7975 14.6019 14.6242 14.7397 14.3477C14.8774 14.0704 14.8086 13.828 14.7048 13.6206C14.6027 13.4124 13.7987 11.3597 13.4306 10.539Z"
                                                                                    fill="white" />
                                                                            </svg>
                                                                        </span>
                                                                        <span class="button__text">
                                                                            <p><span style="text-decoration:underline"><strong>Chat
                                                                                        to us</strong></span> on
                                                                                WhatsApp</p>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </div>

                                                            <li style="margin-top: 16px">
                                                                <modal-opener>
                                                                    <button type="button" modal-trigger
                                                                        data-target-modal="quoteRequestModal"
                                                                        class="button button--white button--text-normal button--full-width button--radius--secondary product-help__button">
                                                                        <span class="button__text">Request a
                                                                            Quote</span>
                                                                    </button>
                                                                </modal-opener>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="product-id" value="8292759634110" /><input
                                                type="hidden" name="section-id"
                                                value="template--26303101174142__main" />
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="application/ld+json">
            {
                "@context": "http://schema.org/",
                "@type": "Product",
                "name": "Petra Ivory Floor Tile",
                "url": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile",
                "mpn": "8292759634110",
                "sku": "LMR846N",
                "description": "Infuse your home with the understated elegance of natural stone with our Petra Ivory floor tiles.Crafted in Italy, these 40 x 60 cm tiles bring a timeless limestone-inspired look, perfect for creating a warm and inviting feel in modern spaces.Made from porcelain, they&#39;re hard-wearing and easy to live with. A truly authentic flooring choice for kitchens, hallways and bathrooms alike.The slightly tumbled texture and softly cushioned edges create a natural lived-in feel underfoot, while the matt surface offers excellent slip resistanceA soft sheen plays with the light, adding a touch of elegance that enhances your home without stealing the showTo achieve the classic charm of natural flagstone, we recommend laying the tiles in a staggered pattern for a relaxed, timeless look.For those seeking a more traditional finish, Petra Ivory is also available in a modular format - perfect for adding rustic character to your home.",
                "image": [
                    "https://www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231"
                ],
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": 4.8,
                    "ratingCount": 28,
                    "reviewCount": 28,
                    "bestRating": 5,
                    "worstRating": 1
                },
                "model": [{
                        "@type": "ProductModel",
                        "@id": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile#productModel=44503110090942",
                        "url": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile?variant=44503110090942",
                        "name": "Petra Ivory Floor Tile Box",
                        "mpn": "44503110090942",
                        "image": "https://www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231",
                        "sku": "LMR846N",
                        "weight": {
                            "@type": "QuantitativeValue",
                            "unitCode": "kg",
                            "value": "35.7 kg"
                        },
                        "brand": {
                            "@type": "Thing",
                            "name": "PS - Stock"
                        },
                        "offers": {
                            "@type": "Offer",
                            "availability": "http://schema.org/InStock",
                            "price": "37.44",
                            "priceCurrency": "GBP",
                            "url": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile?variant=44503110090942",
                            "seller": {
                                "@type": "Organization",
                                "@id": "https://www.porcelainsuperstore.co.uk#organization"
                            }
                        }
                    },
                    {
                        "@type": "ProductModel",
                        "@id": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile#productModel=44503110123710",
                        "url": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile?variant=44503110123710",
                        "name": "Petra Ivory Floor Tile Sample",
                        "mpn": "44503110123710",
                        "image": "https://www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231",
                        "sku": "LMR846N-SAM",
                        "weight": {
                            "@type": "QuantitativeValue",
                            "unitCode": "kg",
                            "value": "0.31 kg"
                        },
                        "brand": {
                            "@type": "Thing",
                            "name": "PS - Stock"
                        },
                        "offers": {
                            "@type": "Offer",
                            "availability": "http://schema.org/InStock",
                            "price": "0.0",
                            "priceCurrency": "GBP",
                            "url": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile?variant=44503110123710",
                            "seller": {
                                "@type": "Organization",
                                "@id": "https://www.porcelainsuperstore.co.uk#organization"
                            }
                        }
                    },
                    {
                        "@type": "ProductModel",
                        "@id": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile#productModel=44503110156478",
                        "url": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile?variant=44503110156478",
                        "name": "Petra Ivory Floor Tile Large Sample",
                        "mpn": "44503110156478",
                        "image": "https://www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06.jpg?v=1726046231",
                        "sku": "ADD-LMR846N-LARSAM",
                        "weight": {
                            "@type": "QuantitativeValue",
                            "unitCode": "kg",
                            "value": "1.2 kg"
                        },
                        "brand": {
                            "@type": "Thing",
                            "name": "PS - Stock"
                        },
                        "offers": {
                            "@type": "Offer",
                            "availability": "http://schema.org/InStock",
                            "price": "2.5",
                            "priceCurrency": "GBP",
                            "url": "https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile?variant=44503110156478",
                            "seller": {
                                "@type": "Organization",
                                "@id": "https://www.porcelainsuperstore.co.uk#organization"
                            }
                        }
                    }
                ]
            }
        </script>

        <site-modal id="quoteRequestModal" class="site-modal">
            <div class="site-modal-wrapper">
                <div class="site-modal-wrapper__header js-track-sticky-state">
                    <h2 class="h2 title">Request a Quote</h2>
                    <button class="close-button js-close-modal" aria-label="Close">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.125 1.125L13.875 13.875" stroke="#212A2F" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.875 1.125L1.125 13.875" stroke="#212A2F" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="site-modal-wrapper__content">
                    <div class="request-quote-form">

                        <div class="form-container">
                            <form method="post" action="https://www.porcelainsuperstore.co.uk/contact#contact_form"
                                id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden"
                                    name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />

                                <div class="row">
                                    <div class="col">
                                        <label class="label" for="ContactFormName">First name<span
                                                class="asterisk">*</span></label>
                                        <input type="text" class="text-input" name="contact[first_name]"
                                            id="ContactFormName" placeholder="First name" required value="">
                                    </div>
                                    <div class="col">
                                        <label class="label" for="ContactFormLastName">Last name<span
                                                class="asterisk">*</span></label>
                                        <input type="text" class="text-input" name="contact[last_name]"
                                            id="ContactFormLastName" placeholder="Last name" required value="">
                                    </div>
                                    <div class="col">
                                        <label class="label" for="ContactFormEmail">Email<span
                                                class="asterisk">*</span></label>
                                        <input type="email" name="contact[email]" id="ContactFormEmail"
                                            class="text-input" placeholder="Email" required value="" spellcheck="false"
                                            autocomplete="off" autocapitalize="off">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label class="label" for="ContactFormPhone">Phone number</label>
                                        <input type="tel" name="contact[phone]" id="ContactFormPhone" class="text-input"
                                            placeholder="Phone number" value="" pattern="[0-9\-]*">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label class="label" for="ContactFormTargetProduct">Product</label>
                                        <input type="text" name="contact[product_name]" id="ContactFormTargetProduct"
                                            class="text-input" value="Petra Ivory Floor Tile"
                                            placeholder="Petra Ivory Floor Tile">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label class="label" for="ContactFormTileQty">Quantity<span
                                                class="asterisk">*</span></label>
                                        <input type="number" required name="contact[tile_qty]" id="ContactFormTileQty"
                                            class="text-input" placeholder="Enter the quantity of tiles"
                                            pattern="[0-9\-]*">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label class="label" for="ContactFormUnit">Unit<span
                                                class="asterisk">*</span></label>
                                        <div class="select-wrapper">
                                            <select required name="contact[unit]" id="ContactFormUnit" class="select">
                                                <option value="" disabled selected>Select unit</option>
                                                <option value="m2">m²</option>
                                                <option value="boxes">Boxes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="button button--primary button--full-width"
                                    value="Send Message"
                                    data-click-toggle='{"target": ".form-container", "add": "validated"}'>

                                <div class="contact-errors"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </site-modal>

        <script src="../cdn/shop/t/399/assets/product-extra-amount-scriptea67.js?v=139945645454920572621760535067" defer
            async></script>
        <script>
            const mainProductContainer = document.querySelector("#shopify-section-product");
            const productInfoContainer = document.querySelector('.product-details-form-wrapper');
            const quantityInputs = productInfoContainer.querySelectorAll(
                '.product-content-wrapper__form .input-quantity');
            quantityInputs.forEach(input => {
                window.addEventListener("productQtyChanged", () => {
                    quantityInputs.forEach(input => {
                        if (input.hasAttribute("data-quantity-input")) {
                            setTimeout(() => {
                                updateAtcPrices(input.firstChild.nodeValue);
                            }, 100);
                        }
                    })
                })
            });

            function updateAtcPrices(price) {
                const priceEls = productInfoContainer.querySelectorAll('[data-atc-price]');
                priceEls.forEach(el => {
                    el.innerHTML = price
                });
            }
            window.addEventListener('load', () => {
                const roomvoButton = mainProductContainer.querySelector(".custom-roomvo-button[data-sku]");
                if (roomvoButton && roomvoButton.getAttribute('data-active') === 'false') {
                    mainProductContainer.classList.add('roomvo-null')
                } else {
                    mainProductContainer.classList.add('roomvo-active')
                }
            })
        </script>

    </div>
    <section id="shopify-section-template--26303101174142__new_product_details_LNbLiJ"
        class="shopify-section product-details-section tablet-up-hide">
        <style data-shopify>
            .product-details-section {
                background-color: transparent;
                padding: 0;
            }

            .section-template--26303101174142__new_product_details_LNbLiJ-padding {
                padding-top: calc(0px);
                padding-bottom: calc(0px);
            }

            .product-details-section .accordions {
                background-color: transparent;
            }

            .product-details-section .accordions li:first-child .accordion__title-container {
                border-top: none;
            }

            .product-details-section .accordion__title-container {
                padding-inline: 0;
            }

            .product-details-section .accordion__title-container::after {
                right: 0
            }

            .product-details-section .accordion__title {
                font-size: 1rem;
            }

            .product-details-section .accordion__content {
                margin: 0;
            }

            .product-details-section .accordion__content li>*:only-child {
                margin-left: 0;
            }

            @media screen and (max-width: 800px) {
                .section-template--26303101174142__new_product_details_LNbLiJ-padding {
                    padding-top: calc(0px * 0.75);
                    padding-bottom: calc(0px * 0.75);
                }
            }
        </style>

        <div class="new-product-details section-template--26303101174142__new_product_details_LNbLiJ-padding">

            <style>
                .product-description-snippet__perfect-for {
                    margin-bottom: 30px;
                }

                .product-description-snippet__perfect-for ul {
                    padding: 0 16px;
                    margin: 15px 0 0 !important;
                }


                .product-description-snippet__perfect-for ul>li+li {
                    margin-top: 10px;
                }

                .product-description-snippet__perfect-for .icon-with-text {
                    justify-content: flex-start;
                }

                .product-description-snippet__perfect-for .icon-with-text>*+* {
                    margin: 0 0 0 12px;
                }

                .product-description-snippet__perfect-for .icon-with-text__text {
                    font-size: 15px;
                }


                @media screen and (min-width: 800px) and (min-width: 950px) {
                    .product-description-snippet__perfect-for .title {
                        font-weight: 600;
                        font-size: 1.625rem;
                        font-family: var(--font-family);
                    }

                    .product-description-snippet__perfect-for ul {
                        padding: 0;
                        display: flex;
                        align-items: flex-start;
                        justify-content: space-between;
                        gap: .65rem 1.25rem;
                        flex-wrap: wrap;
                        max-width: 525px;
                    }

                    .product-description-snippet__perfect-for ul>li {
                        margin: 0 !important;
                        max-width: calc(48% - 1.25rem);
                        width: 100%;
                    }

                    .product-description-snippet__perfect-for .icon-with-text__text {
                        font-size: 16px;
                    }
                }

                .accordion__content.suitability {
                    display: flex;
                    flex-direction: column;
                }

                .accordion__content li:last-of-type {
                    border-bottom: 0;
                }

                .accordion__content .suitability__group {
                    display: flex;
                    align-items: start;
                    padding-bottom: 14px;
                    border-bottom: 1px solid rgb(var(--color-new-border));
                    width: 100%;
                    flex-direction: row;
                    flex-wrap: nowrap;
                    flex: unset;
                    margin-bottom: 16px;
                }

                .accordion__content .suitability__group-heading {
                    font-weight: 600;
                    min-width: 130px;
                }

                .accordion__content .suitability__list {
                    display: flex;
                    flex-direction: column;
                    gap: 5px;
                    width: 100%;
                }

                .accordion__content .suitability__list li {
                    display: flex;
                    width: 100%;
                }

                .accordion__content .suitability__list-name {
                    max-width: 180px;
                    width: 100%;
                }

                .accordion__content .accordion__description {
                    width: 100%;
                    display: inline;
                }

                @media screen and (max-width: 800px) {
                    .accordion__content .suitability__list-name {
                        max-width: 100%;
                    }
                }

                @media screen and (min-width: 1024px) {
                    .accordion__content .suitability__group-heading {
                        min-width: 170px;
                    }
                }
            </style>

            <section class="product-description-snippet" id='product-description'>

                <div class="" has-icon
                    style="--custom-desc-icon: url(http://www.porcelainsuperstore.co.uk/cdn/shop/files/desc_checkmark.svg?v=1727261404&amp;width=450)">
                    <h2 class="h2 title">Description</h2>
                    <article class="read-more-container" data-total-chars="1063" data-max-lines="7"
                        data-line-height="1.5">
                        <div class="read-more-content rte">
                            <div>
                                <p>Infuse your home with the understated elegance of natural stone with our Petra Ivory
                                    floor tiles.<br><br>Crafted in Italy, these 40 x 60 cm tiles bring a timeless
                                    limestone-inspired look, perfect for creating a warm and inviting feel in modern
                                    spaces.<br><br></p>
                                <ul>
                                    <li>
                                        <p>Made from porcelain, they're hard-wearing and easy to live with. A truly
                                            authentic flooring choice for kitchens, hallways and bathrooms alike.</p>
                                    </li>
                                    <li>
                                        <p>The slightly tumbled texture and softly cushioned edges create a natural
                                            lived-in feel underfoot, while the matt surface offers excellent slip
                                            resistance</p>
                                    </li>
                                    <li>
                                        <p>A soft sheen plays with the light, adding a touch of elegance that enhances
                                            your home without stealing the show</p>
                                    </li>
                                </ul>
                                <p>To achieve the classic charm of natural flagstone, we recommend laying the tiles in a
                                    staggered pattern for a relaxed, timeless look.<br><br>For those seeking a more
                                    traditional finish, Petra Ivory is also available in a <a
                                        href="petra-ivory-modular-floor-tile.html">modular format</a> - perfect for
                                    adding rustic character to your home.</p>
                            </div>
                        </div>
                        <button class="read-more-toggle site-link site-link--underline">Read more</button>
                    </article>
                    <div class="product-media-list__details tablet-hide">

                        <ul class="accordions">

                            <li class="accordion accordion--large" data-accordion-item="true"
                                id="tab-dimensions-details-desktop">
                                <div class="accordion__title-container" data-accordion-title="product">
                                    <h2 class="accordion__title">Dimensions & Details</h2>

                                    <div class="image-container">
                                        <div class="image-snippet image-snippet__fill--desktop image-snippet__fill--tablet image-snippet__fill--mobile"
                                            style=" --aspect-ratio: 99.0 / 0.0; --aspect-ratio-tablet: 99.0 / 0.0; --aspect-ratio-mobile: 99.0 / 0.0;">

                                        </div>
                                    </div>

                                </div>
                                <div class="accordion__body">

                                    <ul class="accordion__content specifications" data-product-variant-info-accordion>

                                        <li>
                                            <p class="bold">Colour</p>
                                            <p class="accordion-info">Beige</p>
                                        </li>

                                        <li>
                                            <p class="bold">Finish</p>
                                            <p class="accordion-info">Matt</p>
                                        </li>

                                        <li>
                                            <p class="bold">Grout joint</p>
                                            <p class="accordion-info">3 mm</p>
                                        </li>

                                        <li>
                                            <p class="bold">M2 / box</p>
                                            <p class="accordion-info">0.96</p>
                                        </li>

                                        <li>
                                            <p class="bold">Material</p>
                                            <p class="accordion-info">Porcelain</p>
                                        </li>

                                        <li>
                                            <p class="bold">Needs sealing</p>
                                            <p class="accordion-info">No</p>
                                        </li>

                                        <li>
                                            <p class="bold">Origin</p>
                                            <p class="accordion-info">Italy</p>
                                        </li>

                                        <li>
                                            <p class="bold">PEI rating</p>
                                            <p class="accordion-info">5</p>
                                        </li>

                                        <li>
                                            <p class="bold">Rectified</p>
                                            <p class="accordion-info">No</p>
                                        </li>

                                        <li>
                                            <p class="bold">Sample size</p>
                                            <p class="accordion-info">10 x 15 cm</p>
                                        </li>

                                        <li>
                                            <p class="bold">Slip rating</p>
                                            <p class="accordion-info">R9</p>
                                        </li>

                                        <li>
                                            <p class="bold">Thickness</p>
                                            <p class="accordion-info">10 mm</p>
                                        </li>

                                        <li>
                                            <p class="bold">Tiles / box</p>
                                            <p class="accordion-info">4</p>
                                        </li>

                                        <li>
                                            <p class="bold">Usage</p>
                                            <p class="accordion-info">Floor</p>
                                        </li>

                                        <style>
                                            .specifications {
                                                max-height: 280px;
                                            }
                                        </style>
                                    </ul>
                                </div>
                            </li>

                            <li class="accordion accordion--large" data-accordion-item="true" id="tab-suitable-for">
                                <div class="accordion__title-container" data-accordion-title="product">
                                    <h2 class="accordion__title">Suitable For</h2>

                                </div>
                                <div class="accordion__body">

                                    <ul class="accordion__content suitability" data-product-variant-info-accordion>

                                        <li class="suitability__group">
                                            <p class="suitability__group-heading">Bathroom</p>
                                            <ul class="suitability__list">

                                                <li>
                                                    <span class="suitability__list-name">Walls</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                                <li>
                                                    <span class="suitability__list-name">Floors</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="suitability__group">
                                            <p class="suitability__group-heading">
                                                Shower</p>
                                            <ul class="suitability__list">

                                                <li>
                                                    <span class="suitability__list-name">Walls</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                                <li>
                                                    <span class="suitability__list-name">Wet Room Floors</span>
                                                    <span class="suitability__list-value"><a
                                                            href="mailto:help@porcelainsuperstore.co.uk"
                                                            class="underline">
                                                            <p><span style="text-decoration:underline">Email</span></p>
                                                        </a>
                                                    </span>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="suitability__group">
                                            <p class="suitability__group-heading">
                                                Kitchen</p>
                                            <ul class="suitability__list">

                                                <li>
                                                    <span class="suitability__list-name">Walls / Splashbacks</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                                <li>
                                                    <span class="suitability__list-name">Floors</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="suitability__group">
                                            <p class="suitability__group-heading">
                                                Outdoor</p>
                                            <ul class="suitability__list">

                                                <li>
                                                    <span class="suitability__list-name">Walls</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                                <li>
                                                    <span class="suitability__list-name">Floors</span>
                                                    <span class="suitability__list-value"><a
                                                            href="mailto:help@porcelainsuperstore.co.uk"
                                                            class="underline">
                                                            <p><span style="text-decoration:underline">Email</span></p>
                                                        </a>
                                                    </span>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="suitability__group">
                                            <p class="suitability__group-heading">
                                                Fireplaces</p>
                                            <ul class="suitability__list">

                                                <li>
                                                    <span class="suitability__list-name">Walls</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                                <li>
                                                    <span class="suitability__list-name">Hearths</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="suitability__group">
                                            <p class="suitability__group-heading">
                                                Underfloor Heating</p>
                                            <ul class="suitability__list">

                                                <li>
                                                    <span class="suitability__list-name">&#12644;</span>
                                                    <span class="suitability__list-value">Yes
                                                    </span>
                                                </li>

                                            </ul>
                                        </li>

                                        <p class="accordion__description">
                                            If you require any further information on suitability and slip ratings for
                                            areas such as wet rooms, please feel free to contact us
                                            <a href="mailto:help@porcelainsuperstore.co.uk"
                                                class="underline">help@porcelainsuperstore.co.uk</a>
                                            so that we can offer the correct advice for your situation.
                                        </p>
                                    </ul>

                                </div>
                            </li>

                            <li class="accordion accordion--large" data-accordion-item="true" id="tab-delivery-returns">
                                <div class="accordion__title-container" data-accordion-title="product">
                                    <h2 class="accordion__title">Delivery & Returns</h2>

                                </div>
                                <div class="accordion__body">

                                    <ul class="accordion__content">

                                        <li class="full-width">
                                            <p>We offer free kerbside delivery on most orders over £500 – quick,
                                                convenient and you can even choose a delivery day that suits you – up to
                                                three months in advance.<br /><br />If your order is under £500,
                                                delivery is £15 for lighter parcel orders (under 18kg) and £36 for
                                                heavier pallet orders.<br /><br />Most orders arrive in just two working
                                                days, and if you order before 11pm, we’ll get everything moving right
                                                away.<br /><br />A few remote areas, like the Scottish Highlands or
                                                Channel Islands, may have extra charges – but we’ll always let you know
                                                before you check
                                                out.<br /><br /><strong>Returns<br /><br /></strong>We’re confident
                                                you’ll love your new purchases – but if things don’t work out, our
                                                100-day returns policy gives you plenty of time to change your
                                                mind.<br /><br />You can return your full order for a refund anytime
                                                within 100 days of delivery, as long as everything is unused and in its
                                                original packaging.<br /><br />Just so you know – we can only accept
                                                full returns. If your order includes tiles, we’re not able to take back
                                                part-orders or leftover boxes.</p>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="accordion accordion--large" data-accordion-item="true" id="tab-how-to-order">
                                <div class="accordion__title-container" data-accordion-title="product">
                                    <h2 class="accordion__title">How to Order</h2>

                                </div>
                                <div class="accordion__body">

                                    <ul class="accordion__content">
                                        <li class="full-width">
                                            <div>
                                                <p>Ordering these tiles from Porcelain Superstore couldn’t be easier.
                                                    Simply enter how many square metres you’ll need and we’ll tell you
                                                    how many boxes are required to cover this area.&nbsp;We’ll always
                                                    round this up to the nearest full box.&nbsp;<br><br>As a rule of
                                                    thumb, we recommend adding 10% extra onto your order, to cover any
                                                    waste, cuts and breakages.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="accordion accordion--large" data-accordion-item="true" id="tab-how-to-install">
                                <div class="accordion__title-container" data-accordion-title="product">
                                    <h2 class="accordion__title">How to Install</h2>

                                </div>
                                <div class="accordion__body">

                                    <ul class="accordion__content">
                                        <li class="full-width">
                                            <div>
                                                <p>While we recommend using a professional tiler, you can fix these
                                                    ceramic wall tiles yourself - especially if you're a dab hand at
                                                    DIY.</p><br><br>
                                                <p>Please refer to our <a
                                                        href="https://www.porcelainsuperstore.co.uk/blogs/tile101/how-to-install-ceramic-wall-tiles">Installation
                                                        Guide</a> for further information.</p>
                                            </div>
                                        </li>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </section>
            <ul class="accordions">

                <li class="accordion accordion--large" data-accordion-item="true" id="tab-dimensions-details">
                    <div class="accordion__title-container" data-accordion-title="product">
                        <h2 class="accordion__title">Dimensions & Details</h2>

                        <div class="image-container">
                            <div class="image-snippet image-snippet__fill--desktop image-snippet__fill--tablet image-snippet__fill--mobile"
                                style=" --aspect-ratio: 99.0 / 0.0; --aspect-ratio-tablet: 99.0 / 0.0; --aspect-ratio-mobile: 99.0 / 0.0;">

                            </div>
                        </div>

                    </div>
                    <div class="accordion__body">

                        <ul class="accordion__content specifications" data-product-variant-info-accordion>

                            <li>
                                <p class="bold">Colour</p>
                                <p class="accordion-info">Beige</p>
                            </li>

                            <li>
                                <p class="bold">Finish</p>
                                <p class="accordion-info">Matt</p>
                            </li>

                            <li>
                                <p class="bold">Grout joint</p>
                                <p class="accordion-info">3 mm</p>
                            </li>

                            <li>
                                <p class="bold">M2 / box</p>
                                <p class="accordion-info">0.96</p>
                            </li>

                            <li>
                                <p class="bold">Material</p>
                                <p class="accordion-info">Porcelain</p>
                            </li>

                            <li>
                                <p class="bold">Needs sealing</p>
                                <p class="accordion-info">No</p>
                            </li>

                            <li>
                                <p class="bold">Origin</p>
                                <p class="accordion-info">Italy</p>
                            </li>

                            <li>
                                <p class="bold">PEI rating</p>
                                <p class="accordion-info">5</p>
                            </li>

                            <li>
                                <p class="bold">Rectified</p>
                                <p class="accordion-info">No</p>
                            </li>

                            <li>
                                <p class="bold">Sample size</p>
                                <p class="accordion-info">10 x 15 cm</p>
                            </li>

                            <li>
                                <p class="bold">Slip rating</p>
                                <p class="accordion-info">R9</p>
                            </li>

                            <li>
                                <p class="bold">Thickness</p>
                                <p class="accordion-info">10 mm</p>
                            </li>

                            <li>
                                <p class="bold">Tiles / box</p>
                                <p class="accordion-info">4</p>
                            </li>

                            <li>
                                <p class="bold">Usage</p>
                                <p class="accordion-info">Floor</p>
                            </li>

                            <style>
                                .specifications {
                                    max-height: 280px;
                                }
                            </style>
                        </ul>
                    </div>
                </li>

                <li class="accordion accordion--large" data-accordion-item="true" id="tab-suitable-for">
                    <div class="accordion__title-container" data-accordion-title="product">
                        <h2 class="accordion__title">Suitable For</h2>

                    </div>
                    <div class="accordion__body">

                        <ul class="accordion__content suitability" data-product-variant-info-accordion>

                            <li class="suitability__group">
                                <p class="suitability__group-heading">Bathroom</p>
                                <ul class="suitability__list">

                                    <li>
                                        <span class="suitability__list-name">Walls</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                    <li>
                                        <span class="suitability__list-name">Floors</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                </ul>
                            </li>

                            <li class="suitability__group">
                                <p class="suitability__group-heading">
                                    Shower</p>
                                <ul class="suitability__list">

                                    <li>
                                        <span class="suitability__list-name">Walls</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                    <li>
                                        <span class="suitability__list-name">Wet Room Floors</span>
                                        <span class="suitability__list-value"><a
                                                href="mailto:help@porcelainsuperstore.co.uk" class="underline">
                                                <p><span style="text-decoration:underline">Email</span></p>
                                            </a>
                                        </span>
                                    </li>

                                </ul>
                            </li>

                            <li class="suitability__group">
                                <p class="suitability__group-heading">
                                    Kitchen</p>
                                <ul class="suitability__list">

                                    <li>
                                        <span class="suitability__list-name">Walls / Splashbacks</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                    <li>
                                        <span class="suitability__list-name">Floors</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                </ul>
                            </li>

                            <li class="suitability__group">
                                <p class="suitability__group-heading">
                                    Outdoor</p>
                                <ul class="suitability__list">

                                    <li>
                                        <span class="suitability__list-name">Walls</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                    <li>
                                        <span class="suitability__list-name">Floors</span>
                                        <span class="suitability__list-value"><a
                                                href="mailto:help@porcelainsuperstore.co.uk" class="underline">
                                                <p><span style="text-decoration:underline">Email</span></p>
                                            </a>
                                        </span>
                                    </li>

                                </ul>
                            </li>

                            <li class="suitability__group">
                                <p class="suitability__group-heading">
                                    Fireplaces</p>
                                <ul class="suitability__list">

                                    <li>
                                        <span class="suitability__list-name">Walls</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                    <li>
                                        <span class="suitability__list-name">Hearths</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                </ul>
                            </li>

                            <li class="suitability__group">
                                <p class="suitability__group-heading">
                                    Underfloor Heating</p>
                                <ul class="suitability__list">

                                    <li>
                                        <span class="suitability__list-name">&#12644;</span>
                                        <span class="suitability__list-value">Yes
                                        </span>
                                    </li>

                                </ul>
                            </li>

                            <p class="accordion__description">
                                If you require any further information on suitability and slip ratings for areas such as
                                wet rooms, please feel free to contact us
                                <a href="mailto:help@porcelainsuperstore.co.uk"
                                    class="underline">help@porcelainsuperstore.co.uk</a>
                                so that we can offer the correct advice for your situation.
                            </p>
                        </ul>

                    </div>
                </li>

                <li class="accordion accordion--large" data-accordion-item="true" id="tab-delivery-returns">
                    <div class="accordion__title-container" data-accordion-title="product">
                        <h2 class="accordion__title">Delivery & Returns</h2>

                    </div>
                    <div class="accordion__body">

                        <ul class="accordion__content">

                            <li class="full-width">
                                <p>We offer free kerbside delivery on most orders over £500 – quick, convenient and you
                                    can even choose a delivery day that suits you – up to three months in
                                    advance.<br /><br />If your order is under £500, delivery is £15 for lighter parcel
                                    orders (under 18kg) and £36 for heavier pallet orders.<br /><br />Most orders arrive
                                    in just two working days, and if you order before 11pm, we’ll get everything moving
                                    right away.<br /><br />A few remote areas, like the Scottish Highlands or Channel
                                    Islands, may have extra charges – but we’ll always let you know before you check
                                    out.<br /><br /><strong>Returns<br /><br /></strong>We’re confident you’ll love your
                                    new purchases – but if things don’t work out, our 100-day returns policy gives you
                                    plenty of time to change your mind.<br /><br />You can return your full order for a
                                    refund anytime within 100 days of delivery, as long as everything is unused and in
                                    its original packaging.<br /><br />Just so you know – we can only accept full
                                    returns. If your order includes tiles, we’re not able to take back part-orders or
                                    leftover boxes.</p>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="accordion accordion--large" data-accordion-item="true" id="tab-how-to-order">
                    <div class="accordion__title-container" data-accordion-title="product">
                        <h2 class="accordion__title">How to Order</h2>

                    </div>
                    <div class="accordion__body">

                        <ul class="accordion__content">
                            <li class="full-width">
                                <div>
                                    <p>Ordering these tiles from Porcelain Superstore couldn’t be easier. Simply enter
                                        how many square metres you’ll need and we’ll tell you how many boxes are
                                        required to cover this area.&nbsp;We’ll always round this up to the nearest full
                                        box.&nbsp;<br><br>As a rule of thumb, we recommend adding 10% extra onto your
                                        order, to cover any waste, cuts and breakages.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="accordion accordion--large" data-accordion-item="true" id="tab-how-to-install">
                    <div class="accordion__title-container" data-accordion-title="product">
                        <h2 class="accordion__title">How to Install</h2>

                    </div>
                    <div class="accordion__body">

                        <ul class="accordion__content">
                            <li class="full-width">
                                <div>
                                    <p>While we recommend using a professional tiler, you can fix these ceramic wall
                                        tiles yourself - especially if you're a dab hand at DIY.</p><br><br>
                                    <p>Please refer to our <a
                                            href="https://www.porcelainsuperstore.co.uk/blogs/tile101/how-to-install-ceramic-wall-tiles">Installation
                                            Guide</a> for further information.</p>
                                </div>
                            </li>

                    </div>
                </li>

            </ul>

        </div>

    </section>
    <div id="shopify-section-template--26303101174142__shogun-above" class="shopify-section">

    </div>
    <section id="shopify-section-template--26303101174142__new_related_products_MXf6zX"
        class="shopify-section section gapless-slider-section">
        <style data-shopify>
            #shopify-section-template--26303101174142__new_related_products_MXf6zX {
                background:
            }


            .new-related-products__navigation {
                position: absolute;
                width: 100%;
                z-index: 10;
            }

            .section-template--26303101174142__new_related_products_MXf6zX-padding {
                padding-top: calc(56px * 0.5);
                padding-bottom: calc(40px * 0.5);
            }

            @media screen and (min-width: 750px) {
                .section-template--26303101174142__new_related_products_MXf6zX-padding {
                    padding-top: 56px;
                    padding-bottom: 40px;
                }
            }

            @media screen and (max-width: 800px) {
                .template-product .section-template--26303101174142__new_related_products_MXf6zX-padding .section-header-wrapper__title.h2 {
                    text-align: left;
                }

            }
        </style>

        <div class="">

            <div class="section-template--26303101174142__new_related_products_MXf6zX-padding">

                <div class="container">
                    <div class="section-header-wrapper new-related-products  section-header-wrapper--has-nav ">

                        <div style="display: flex; flex-direction: column">
                            <h3 class="section-header-wrapper__title h2">

                                <p>You may also like</p>

                            </h3>
                            <p class="section-header-wrapper__subtitle h3 text-body text-body--large"></p>
                        </div>

                    </div>
                    <swiper-slider data-options='
    {
    "speed": 500,
    "loop": false,
    "autoplay": false,
    "initialSlide": 0,
    "slidesPerView": 2,
    "centeredSlides": false,
    "spaceBetween": 9,
    "breakpoints": {
        "750": {
          "slidesPerView": 3
        },
        "900": {
          "slidesPerView": 4,
          "spaceBetween": 9,
          "centeredSlides": false
        },
        "1200": {
          "slidesPerView": 4,
          "spaceBetween": 16
        }
    },
    "navigation": {
    "nextEl": ".swiper-button-next--template--26303101174142__new_related_products_MXf6zX",
    "prevEl": ".swiper-button-prev--template--26303101174142__new_related_products_MXf6zX"
    },
    "pagination": {
        "el": ".bullets--template--26303101174142__new_related_products_MXf6zX"
    }
    }
'>
                        <div class="swiper product-swiper">

                            <ul class="new-related-products__navigation section-header-wrapper__navigation">
                                <li>
                                    <button
                                        class="new-swiper-button icon-button swiper-button-prev--template--26303101174142__new_related_products_MXf6zX"
                                        prev>

                                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                                        </svg>

                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="new-swiper-button icon-button swiper-button-next--template--26303101174142__new_related_products_MXf6zX"
                                        next>

                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                                        </svg>

                                    </button>
                                </li>
                            </ul>

                            <ul class="related-products-slider product-slider swiper-wrapper">

                                <li class="swiper-slide swiper-slide--auto-height">

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

                                        .cl-product-card--rich.cl-product-card--7785428287678 .product-card__slider-navigation {
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

                                        .cl-product-card--rich.cl-product-card--7785428287678 .product-card__slider-navigation .new-swiper-button {
                                            display: flex;
                                            padding: 9px 6px 9px 8px;
                                            background-color: rgba(245, 242, 237, 0.85);
                                            pointer-events: auto;
                                            cursor: pointer;
                                        }

                                        .cl-product-card--rich.cl-product-card--7785428287678 .product-card__slider-navigation .new-swiper-button {
                                            transition: all 0.2s ease-in-out;
                                        }

                                        .cl-product-card--rich.cl-product-card--7785428287678 .product-card__slider-navigation .swiper-button-next--template--26303101174142__new_related_products_MXf6zX {
                                            transform: translateX(100%);
                                        }

                                        .cl-product-card--rich.cl-product-card--7785428287678 .product-card__slider-navigation .swiper-button-prev--template--26303101174142__new_related_products_MXf6zX {
                                            transform: translateX(-100%);
                                        }


                                        .cl-product-card--rich.cl-product-card--7785428287678 .product-card__slider-navigation .new-swiper-button path {
                                            stroke: rgb(var(--color-black));
                                        }

                                        @media screen and (min-width: 800px) {
                                            .cl-product-card--rich.cl-product-card--7785428287678 .product-card__slider-navigation {
                                                display: flex;
                                            }

                                            .cl-product-card--rich.cl-product-card--7785428287678 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                                                transform: translateX(0);
                                            }
                                        }

                                        @media screen and (max-width: 800px) {
                                            .cl-product-card-info .card-price.mobile-size-- {
                                                font-size: px;
                                            }
                                        }
                                    </style>
                                    <div
                                        class="cl-product-card cl-product-card--standard cl-product-card--7785428287678">

                                        <div class="product-badges"></div>

                                        <div class="cl-product-card__badge">

                                        </div>

                                        <div class="cl-product-card-image">
                                            <a href="loire-beige.html" title="Loire Beige Floor Tile"
                                                data-preloadlink="true">
                                                <div>
                                                    <div class="image-snippet ">
                                                        <img src="../cdn/shop/files/Loire-Beige-03f52d.jpg?v=1708694411&amp;width=400"
                                                            alt="Loire Beige Floor Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-03.jpg?v=1708694411&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-03.jpg?v=1708694411&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-03.jpg?v=1708694411&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <div class="img-hover">
                                                        <img src="../cdn/shop/files/Loire-Beige-01f52d.jpg?v=1708694411&amp;width=400"
                                                            alt="Loire Beige Floor Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-01.jpg?v=1708694411&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-01.jpg?v=1708694411&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Beige-01.jpg?v=1708694411&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <!-- <button aria-label="Add to Wishlist" data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_7785428287678" data-swaction="addToWishlist" data-product-id="7785428287678" data-variant-id="43151101362366" data-product-url="https://www.porcelainsuperstore.co.uk/products/loire-beige">
        
      </button> -->

                                                </div>
                                            </a>

                                        </div>

                                        <div class="cl-product-card-info
    
    no_free_sample">

                                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                                <a class="hover-underline" href="loire-beige.html"
                                                    title="Loire Beige Floor Tile">
                                                    Loire Beige Floor Tile
                                                </a>
                                            </h3>

                                            <div class="cl-product-card-size ">
                                                60 x 90 cm
                                            </div>

                                            <div class="card-price mobile-size-- metafield-price-per-size"><span
                                                    data-price-per-meter-squared class="card-price__regular">£42.00 /
                                                    m²</span></div>

                                            <a class="cl-product-card-yotpo-rating"
                                                href="loire-beige.html#yotpoReviewsWidget">
                                                <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                                                    data-yotpo-instance-id="643481"
                                                    data-yotpo-product-id="7785428287678" data-yotpo-cart-product-id=""
                                                    data-yotpo-section-id="product">
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

                                <li class="swiper-slide swiper-slide--auto-height">

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

                                        .cl-product-card--rich.cl-product-card--7785427927230 .product-card__slider-navigation {
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

                                        .cl-product-card--rich.cl-product-card--7785427927230 .product-card__slider-navigation .new-swiper-button {
                                            display: flex;
                                            padding: 9px 6px 9px 8px;
                                            background-color: rgba(245, 242, 237, 0.85);
                                            pointer-events: auto;
                                            cursor: pointer;
                                        }

                                        .cl-product-card--rich.cl-product-card--7785427927230 .product-card__slider-navigation .new-swiper-button {
                                            transition: all 0.2s ease-in-out;
                                        }

                                        .cl-product-card--rich.cl-product-card--7785427927230 .product-card__slider-navigation .swiper-button-next--template--26303101174142__new_related_products_MXf6zX {
                                            transform: translateX(100%);
                                        }

                                        .cl-product-card--rich.cl-product-card--7785427927230 .product-card__slider-navigation .swiper-button-prev--template--26303101174142__new_related_products_MXf6zX {
                                            transform: translateX(-100%);
                                        }


                                        .cl-product-card--rich.cl-product-card--7785427927230 .product-card__slider-navigation .new-swiper-button path {
                                            stroke: rgb(var(--color-black));
                                        }

                                        @media screen and (min-width: 800px) {
                                            .cl-product-card--rich.cl-product-card--7785427927230 .product-card__slider-navigation {
                                                display: flex;
                                            }

                                            .cl-product-card--rich.cl-product-card--7785427927230 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                                                transform: translateX(0);
                                            }
                                        }

                                        @media screen and (max-width: 800px) {
                                            .cl-product-card-info .card-price.mobile-size-- {
                                                font-size: px;
                                            }
                                        }
                                    </style>
                                    <div
                                        class="cl-product-card cl-product-card--standard cl-product-card--7785427927230">

                                        <div class="product-badges"></div>

                                        <div class="cl-product-card__badge">

                                        </div>

                                        <div class="cl-product-card-image">
                                            <a href="loire-oro.html" title="Loire Oro Floor Tile"
                                                data-preloadlink="true">
                                                <div>
                                                    <div class="image-snippet ">
                                                        <img src="../cdn/shop/files/Loire-Oro-04b22e.jpg?v=1708694407&amp;width=400"
                                                            alt="Loire Oro Floor Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Oro-04.jpg?v=1708694407&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Oro-04.jpg?v=1708694407&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Oro-04.jpg?v=1708694407&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <div class="img-hover">
                                                        <img src="../cdn/shop/files/Loire-Oro-01b22e.jpg?v=1708694407&amp;width=400"
                                                            alt="Loire Oro Floor Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Oro-01.jpg?v=1708694407&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Oro-01.jpg?v=1708694407&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Loire-Oro-01.jpg?v=1708694407&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <!-- <button aria-label="Add to Wishlist" data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_7785427927230" data-swaction="addToWishlist" data-product-id="7785427927230" data-variant-id="43151100707006" data-product-url="https://www.porcelainsuperstore.co.uk/products/loire-oro">
        
      </button> -->

                                                </div>
                                            </a>

                                        </div>

                                        <div class="cl-product-card-info
    
    no_free_sample">

                                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                                <a class="hover-underline" href="loire-oro.html"
                                                    title="Loire Oro Floor Tile">
                                                    Loire Oro Floor Tile
                                                </a>
                                            </h3>

                                            <div class="cl-product-card-size ">
                                                60 x 90 cm
                                            </div>

                                            <div class="card-price mobile-size-- metafield-price-per-size"><span
                                                    data-price-per-meter-squared class="card-price__regular">£42.00 /
                                                    m²</span></div>

                                            <a class="cl-product-card-yotpo-rating"
                                                href="loire-oro.html#yotpoReviewsWidget">
                                                <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                                                    data-yotpo-instance-id="643481"
                                                    data-yotpo-product-id="7785427927230" data-yotpo-cart-product-id=""
                                                    data-yotpo-section-id="product">
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

                                <li class="swiper-slide swiper-slide--auto-height">

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

                                        .cl-product-card--rich.cl-product-card--8292751638718 .product-card__slider-navigation {
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

                                        .cl-product-card--rich.cl-product-card--8292751638718 .product-card__slider-navigation .new-swiper-button {
                                            display: flex;
                                            padding: 9px 6px 9px 8px;
                                            background-color: rgba(245, 242, 237, 0.85);
                                            pointer-events: auto;
                                            cursor: pointer;
                                        }

                                        .cl-product-card--rich.cl-product-card--8292751638718 .product-card__slider-navigation .new-swiper-button {
                                            transition: all 0.2s ease-in-out;
                                        }

                                        .cl-product-card--rich.cl-product-card--8292751638718 .product-card__slider-navigation .swiper-button-next--template--26303101174142__new_related_products_MXf6zX {
                                            transform: translateX(100%);
                                        }

                                        .cl-product-card--rich.cl-product-card--8292751638718 .product-card__slider-navigation .swiper-button-prev--template--26303101174142__new_related_products_MXf6zX {
                                            transform: translateX(-100%);
                                        }


                                        .cl-product-card--rich.cl-product-card--8292751638718 .product-card__slider-navigation .new-swiper-button path {
                                            stroke: rgb(var(--color-black));
                                        }

                                        @media screen and (min-width: 800px) {
                                            .cl-product-card--rich.cl-product-card--8292751638718 .product-card__slider-navigation {
                                                display: flex;
                                            }

                                            .cl-product-card--rich.cl-product-card--8292751638718 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                                                transform: translateX(0);
                                            }
                                        }

                                        @media screen and (max-width: 800px) {
                                            .cl-product-card-info .card-price.mobile-size-- {
                                                font-size: px;
                                            }
                                        }
                                    </style>
                                    <div
                                        class="cl-product-card cl-product-card--standard cl-product-card--8292751638718">

                                        <div class="product-badges">
                                            <div class="product-badge_container" style="background-color: #ffdc59;">
                                                <span class="product-badge__label"
                                                    style="color: #0d1f22;">Bestseller</span>
                                            </div>
                                        </div>

                                        <div class="cl-product-card__badge">

                                        </div>

                                        <div class="cl-product-card-image">
                                            <a href="petra-ivory-modular-floor-tile.html"
                                                title="Petra Ivory Modular Tile" data-preloadlink="true">
                                                <div>
                                                    <div class="image-snippet ">
                                                        <img src="../cdn/shop/files/Petra-Ivory-Modular-04bd9c.jpg?v=1725011436&amp;width=400"
                                                            alt="Petra Ivory Modular Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-Modular-04.jpg?v=1725011436&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-Modular-04.jpg?v=1725011436&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-Modular-04.jpg?v=1725011436&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <div class="img-hover">
                                                        <img src="../cdn/shop/files/Petra-Ivory-Modular-020c88.jpg?v=1723806669&amp;width=400"
                                                            alt="Petra Ivory Modular Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-Modular-02.jpg?v=1723806669&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-Modular-02.jpg?v=1723806669&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-Modular-02.jpg?v=1723806669&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <!-- <button aria-label="Add to Wishlist" data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_8292751638718" data-swaction="addToWishlist" data-product-id="8292751638718" data-variant-id="44503094395070" data-product-url="https://www.porcelainsuperstore.co.uk/products/petra-ivory-modular-floor-tile">
        
      </button> -->

                                                </div>
                                            </a>

                                        </div>

                                        <div class="cl-product-card-info
    
    no_free_sample">

                                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                                <a class="hover-underline" href="petra-ivory-modular-floor-tile.html"
                                                    title="Petra Ivory Modular Tile">
                                                    Petra Ivory Modular Tile
                                                </a>
                                            </h3>

                                            <div class="cl-product-card-size ">
                                                Modular
                                            </div>

                                            <div class="card-price mobile-size-- metafield-price-per-size"><span
                                                    data-price-per-meter-squared class="card-price__regular">£58.00 /
                                                    m²</span></div>

                                            <a class="cl-product-card-yotpo-rating"
                                                href="petra-ivory-modular-floor-tile.html#yotpoReviewsWidget">
                                                <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                                                    data-yotpo-instance-id="643481"
                                                    data-yotpo-product-id="8292751638718" data-yotpo-cart-product-id=""
                                                    data-yotpo-section-id="product">
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

                                <li class="swiper-slide swiper-slide--auto-height">

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

                                        .cl-product-card--rich.cl-product-card--7785426485438 .product-card__slider-navigation {
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

                                        .cl-product-card--rich.cl-product-card--7785426485438 .product-card__slider-navigation .new-swiper-button {
                                            display: flex;
                                            padding: 9px 6px 9px 8px;
                                            background-color: rgba(245, 242, 237, 0.85);
                                            pointer-events: auto;
                                            cursor: pointer;
                                        }

                                        .cl-product-card--rich.cl-product-card--7785426485438 .product-card__slider-navigation .new-swiper-button {
                                            transition: all 0.2s ease-in-out;
                                        }

                                        .cl-product-card--rich.cl-product-card--7785426485438 .product-card__slider-navigation .swiper-button-next--template--26303101174142__new_related_products_MXf6zX {
                                            transform: translateX(100%);
                                        }

                                        .cl-product-card--rich.cl-product-card--7785426485438 .product-card__slider-navigation .swiper-button-prev--template--26303101174142__new_related_products_MXf6zX {
                                            transform: translateX(-100%);
                                        }


                                        .cl-product-card--rich.cl-product-card--7785426485438 .product-card__slider-navigation .new-swiper-button path {
                                            stroke: rgb(var(--color-black));
                                        }

                                        @media screen and (min-width: 800px) {
                                            .cl-product-card--rich.cl-product-card--7785426485438 .product-card__slider-navigation {
                                                display: flex;
                                            }

                                            .cl-product-card--rich.cl-product-card--7785426485438 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                                                transform: translateX(0);
                                            }
                                        }

                                        @media screen and (max-width: 800px) {
                                            .cl-product-card-info .card-price.mobile-size-- {
                                                font-size: px;
                                            }
                                        }
                                    </style>
                                    <div
                                        class="cl-product-card cl-product-card--standard cl-product-card--7785426485438">

                                        <div class="product-badges">
                                            <div class="product-badge_container" style="background-color: #ffdc59;">
                                                <span class="product-badge__label"
                                                    style="color: #0d1f22;">Bestseller</span>
                                            </div>
                                        </div>

                                        <div class="cl-product-card__badge">

                                        </div>

                                        <div class="cl-product-card-image">
                                            <a href="manor-warm.html" title="Manor Warm Modular Tile"
                                                data-preloadlink="true">
                                                <div>
                                                    <div class="image-snippet ">
                                                        <img src="../cdn/shop/files/Manor-Warm-046be3.jpg?v=1719394288&amp;width=400"
                                                            alt="Manor Warm Modular Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Manor-Warm-04.jpg?v=1719394288&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Manor-Warm-04.jpg?v=1719394288&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Manor-Warm-04.jpg?v=1719394288&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <div class="img-hover">
                                                        <img src="../cdn/shop/files/Manor-Warm-056be3.jpg?v=1719394288&amp;width=400"
                                                            alt="Manor Warm Modular Tile"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Manor-Warm-05.jpg?v=1719394288&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Manor-Warm-05.jpg?v=1719394288&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Manor-Warm-05.jpg?v=1719394288&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <!-- <button aria-label="Add to Wishlist" data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_7785426485438" data-swaction="addToWishlist" data-product-id="7785426485438" data-variant-id="43151097462974" data-product-url="https://www.porcelainsuperstore.co.uk/products/manor-warm">
        
      </button> -->

                                                </div>
                                            </a>

                                        </div>

                                        <div class="cl-product-card-info
    
    no_free_sample">

                                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                                <a class="hover-underline" href="manor-warm.html"
                                                    title="Manor Warm Modular Tile">
                                                    Manor Warm Modular Tile
                                                </a>
                                            </h3>

                                            <div class="cl-product-card-size ">
                                                Modular
                                            </div>

                                            <div class="card-price mobile-size-- metafield-price-per-size"><span
                                                    data-price-per-meter-squared class="card-price__regular">£52.50 /
                                                    m²</span></div>

                                            <a class="cl-product-card-yotpo-rating"
                                                href="manor-warm.html#yotpoReviewsWidget">
                                                <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                                                    data-yotpo-instance-id="643481"
                                                    data-yotpo-product-id="7785426485438" data-yotpo-cart-product-id=""
                                                    data-yotpo-section-id="product">
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
                    </swiper-slider>
                </div>

            </div>
        </div>

    </section>
    <section id="shopify-section-template--26303101174142__product_need_help_BbYdag"
        class="shopify-section product-help-section">
        <div class="tablet-up-hide container">
            <div class="product-details-gallery-wrapper__secondary-info">
                <h3 class="h2 title text-center tablet-up-hide">Need some help?</h3>
                <h3 class="h2 title text-center tablet-hide">Try before you buy...</h3>
                <div class="product-help__text-body">
                    <div>
                        <p>Our friendly team are here to help<br />Monday - Friday | 9am to 5pm</p>
                    </div>
                    <a href="tel:+4403300940304" class="site-link site-link--underline product-help__phone"><strong>0330
                            094 0304</strong></a>
                </div>

                <ul style="margin: 16px 0 0;">

                    <div class="product-help__icon-buttons">
                        <li class="product-help__button--with-icon">
                            <a class="button button--with-icon button--text-normal button--full-width button--radius--secondary product-help__button"
                                href="tel:+4403300940304">
                                <span class="button__icon">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M16.1007 13.359L15.5719 12.8272H15.5719L16.1007 13.359ZM16.5562 12.9062L17.085 13.438H17.085L16.5562 12.9062ZM18.9728 12.5894L18.6146 13.2483L18.9728 12.5894ZM20.8833 13.628L20.5251 14.2869L20.8833 13.628ZM21.4217 16.883L21.9505 17.4148L21.4217 16.883ZM20.0011 18.2954L19.4723 17.7636L20.0011 18.2954ZM18.6763 18.9651L18.7459 19.7119H18.7459L18.6763 18.9651ZM8.81536 14.7266L9.34418 14.1947L8.81536 14.7266ZM4.00289 5.74561L3.2541 5.78816L3.2541 5.78816L4.00289 5.74561ZM10.4775 7.19738L11.0063 7.72922H11.0063L10.4775 7.19738ZM10.6342 4.54348L11.2346 4.09401L10.6342 4.54348ZM9.37326 2.85908L8.77286 3.30855V3.30855L9.37326 2.85908ZM6.26145 2.57483L6.79027 3.10667H6.79027L6.26145 2.57483ZM4.69185 4.13552L4.16303 3.60368H4.16303L4.69185 4.13552ZM12.0631 11.4972L12.5919 10.9654L12.0631 11.4972ZM16.6295 13.8909L17.085 13.438L16.0273 12.3743L15.5719 12.8272L16.6295 13.8909ZM18.6146 13.2483L20.5251 14.2869L21.2415 12.9691L19.331 11.9305L18.6146 13.2483ZM20.8929 16.3511L19.4723 17.7636L20.5299 18.8273L21.9505 17.4148L20.8929 16.3511ZM18.6067 18.2184C17.1568 18.3535 13.4056 18.2331 9.34418 14.1947L8.28654 15.2584C12.7186 19.6653 16.9369 19.8805 18.7459 19.7119L18.6067 18.2184ZM9.34418 14.1947C5.4728 10.3453 4.83151 7.10765 4.75168 5.70305L3.2541 5.78816C3.35456 7.55599 4.14863 11.144 8.28654 15.2584L9.34418 14.1947ZM10.7195 8.01441L11.0063 7.72922L9.9487 6.66555L9.66189 6.95073L10.7195 8.01441ZM11.2346 4.09401L9.97365 2.40961L8.77286 3.30855L10.0338 4.99296L11.2346 4.09401ZM5.73263 2.04299L4.16303 3.60368L5.22067 4.66736L6.79027 3.10667L5.73263 2.04299ZM10.1907 7.48257C9.66189 6.95073 9.66117 6.95144 9.66045 6.95216C9.66021 6.9524 9.65949 6.95313 9.659 6.95362C9.65802 6.95461 9.65702 6.95561 9.65601 6.95664C9.65398 6.95871 9.65188 6.96086 9.64972 6.9631C9.64539 6.96759 9.64081 6.97245 9.63599 6.97769C9.62634 6.98816 9.61575 7.00014 9.60441 7.01367C9.58174 7.04072 9.55605 7.07403 9.52905 7.11388C9.47492 7.19377 9.41594 7.2994 9.36589 7.43224C9.26376 7.70329 9.20901 8.0606 9.27765 8.50305C9.41189 9.36833 10.0078 10.5113 11.5343 12.0291L12.5919 10.9654C11.1634 9.54499 10.8231 8.68059 10.7599 8.27309C10.7298 8.07916 10.761 7.98371 10.7696 7.96111C10.7748 7.94713 10.7773 7.9457 10.7709 7.95525C10.7677 7.95992 10.7624 7.96723 10.7541 7.97708C10.75 7.98201 10.7451 7.98759 10.7394 7.99381C10.7365 7.99692 10.7335 8.00019 10.7301 8.00362C10.7285 8.00534 10.7268 8.00709 10.725 8.00889C10.7241 8.00979 10.7232 8.0107 10.7223 8.01162C10.7219 8.01208 10.7212 8.01278 10.7209 8.01301C10.7202 8.01371 10.7195 8.01441 10.1907 7.48257ZM11.5343 12.0291C13.0613 13.5474 14.2096 14.1383 15.0763 14.2713C15.5192 14.3392 15.8763 14.285 16.1472 14.1841C16.28 14.1346 16.3858 14.0763 16.4658 14.0227C16.5058 13.9959 16.5392 13.9704 16.5663 13.9479C16.5799 13.9367 16.5919 13.9262 16.6024 13.9166C16.6077 13.9118 16.6126 13.9073 16.6171 13.903C16.6194 13.9008 16.6215 13.8987 16.6236 13.8967C16.6246 13.8957 16.6256 13.8947 16.6266 13.8937C16.6271 13.8932 16.6279 13.8925 16.6281 13.8923C16.6288 13.8916 16.6295 13.8909 16.1007 13.359C15.5719 12.8272 15.5726 12.8265 15.5733 12.8258C15.5735 12.8256 15.5742 12.8249 15.5747 12.8244C15.5756 12.8235 15.5765 12.8226 15.5774 12.8217C15.5793 12.82 15.581 12.8183 15.5827 12.8166C15.5862 12.8133 15.5895 12.8103 15.5926 12.8074C15.5988 12.8018 15.6044 12.7969 15.6094 12.7929C15.6192 12.7847 15.6265 12.7795 15.631 12.7764C15.6403 12.7702 15.6384 12.773 15.6236 12.7785C15.5991 12.7876 15.501 12.8189 15.3038 12.7886C14.8905 12.7253 14.02 12.3853 12.5919 10.9654L11.5343 12.0291ZM9.97365 2.40961C8.95434 1.04802 6.94996 0.83257 5.73263 2.04299L6.79027 3.10667C7.32195 2.578 8.26623 2.63181 8.77286 3.30855L9.97365 2.40961ZM4.75168 5.70305C4.73201 5.35694 4.89075 4.9954 5.22067 4.66736L4.16303 3.60368C3.62571 4.13795 3.20329 4.89425 3.2541 5.78816L4.75168 5.70305ZM19.4723 17.7636C19.1975 18.0369 18.9029 18.1908 18.6067 18.2184L18.7459 19.7119C19.4805 19.6434 20.0824 19.2723 20.5299 18.8273L19.4723 17.7636ZM11.0063 7.72922C11.9908 6.7503 12.064 5.2019 11.2346 4.09401L10.0338 4.99295C10.4373 5.53193 10.3773 6.23938 9.9487 6.66555L11.0063 7.72922ZM20.5251 14.2869C21.3429 14.7315 21.4703 15.7769 20.8929 16.3511L21.9505 17.4148C23.2908 16.0821 22.8775 13.8584 21.2415 12.9691L20.5251 14.2869ZM17.085 13.438C17.469 13.0562 18.0871 12.9616 18.6146 13.2483L19.331 11.9305C18.2474 11.3414 16.9026 11.5041 16.0273 12.3743L17.085 13.438Z"
                                                fill="#000000"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="button__text">Click to call</span>
                            </a>
                        </li>
                        <li class="product-help__button--with-icon">
                            <a class="button button--with-icon button--text-normal button--full-width button--radius--secondary product-help__button"
                                href="mailto:help@porcelainsuperstore.co.uk">
                                <span class="button__icon">
                                    <svg height="200px" width="200px" version="1.1" id="_x32_"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #000000;
                                                }
                                            </style>
                                            <g>
                                                <path class="st0"
                                                    d="M510.746,110.361c-2.128-10.754-6.926-20.918-13.926-29.463c-1.422-1.794-2.909-3.39-4.535-5.009 c-12.454-12.52-29.778-19.701-47.531-19.701H67.244c-17.951,0-34.834,7-47.539,19.708c-1.608,1.604-3.099,3.216-4.575,5.067 c-6.97,8.509-11.747,18.659-13.824,29.428C0.438,114.62,0,119.002,0,123.435v265.137c0,9.224,1.874,18.206,5.589,26.745 c3.215,7.583,8.093,14.772,14.112,20.788c1.516,1.509,3.022,2.901,4.63,4.258c12.034,9.966,27.272,15.45,42.913,15.45h377.51 c15.742,0,30.965-5.505,42.967-15.56c1.604-1.298,3.091-2.661,4.578-4.148c5.818-5.812,10.442-12.49,13.766-19.854l0.438-1.05 c3.646-8.377,5.497-17.33,5.497-26.628V123.435C512,119.06,511.578,114.649,510.746,110.361z M34.823,99.104 c0.951-1.392,2.165-2.821,3.714-4.382c7.689-7.685,17.886-11.914,28.706-11.914h377.51c10.915,0,21.115,4.236,28.719,11.929 c1.313,1.327,2.567,2.8,3.661,4.272l2.887,3.88l-201.5,175.616c-6.212,5.446-14.21,8.443-22.523,8.443 c-8.231,0-16.222-2.99-22.508-8.436L32.19,102.939L34.823,99.104z M26.755,390.913c-0.109-0.722-0.134-1.524-0.134-2.341V128.925 l156.37,136.411L28.199,400.297L26.755,390.913z M464.899,423.84c-6.052,3.492-13.022,5.344-20.145,5.344H67.244 c-7.127,0-14.094-1.852-20.142-5.344l-6.328-3.668l159.936-139.379l17.528,15.246c10.514,9.128,23.922,14.16,37.761,14.16 c13.89,0,27.32-5.032,37.827-14.16l17.521-15.253L471.228,420.18L464.899,423.84z M485.372,388.572 c0,0.803-0.015,1.597-0.116,2.304l-1.386,9.472L329.012,265.409l156.36-136.418V388.572z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="button__text">Email</span>
                            </a>
                        </li>
                        <li class="product-help__button--with-icon">
                            <a class="button button--with-icon button--text-normal button--full-width button--radius--secondary button--whatsapp product-help__button"
                                href="https://wa.me/message/OW5MADSFVAVEJ1">
                                <span class="button__icon">
                                    <svg width="35" height="36" viewBox="0 0 35 36" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.872559 34.389L3.22197 25.7837C1.77256 23.2655 1.01035 20.4079 1.01122 17.4811C1.01558 8.32459 8.44231 0.875122 17.5696 0.875122C21.999 0.876872 26.1554 2.60668 29.2818 5.74519C32.4074 8.88457 34.1289 13.0564 34.1271 17.4942C34.1237 26.6508 26.6952 34.1011 17.5696 34.1011H17.5626C14.792 34.1002 12.0685 33.4029 9.65016 32.0791L0.872559 34.389Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.872676 34.8264C0.75756 34.8264 0.645932 34.7809 0.563084 34.6969C0.454072 34.5858 0.41134 34.4239 0.452328 34.2743L2.75378 25.8432C1.32704 23.3005 0.574421 20.4131 0.576165 17.482C0.579653 8.08308 8.2026 0.437622 17.5697 0.437622C22.1133 0.439372 26.3822 2.21468 29.5906 5.43631C32.7991 8.65881 34.565 12.9409 34.5633 17.4942C34.5598 26.8922 26.936 34.5386 17.5697 34.5386C14.7886 34.5377 12.0372 33.8491 9.59533 32.5463L0.983432 34.8116C0.946804 34.8221 0.910176 34.8264 0.872676 34.8264Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.5695 0.874967C21.9989 0.876716 26.1553 2.60653 29.2817 5.74503C32.4073 8.88441 34.1288 13.0563 34.127 17.4941C34.1235 26.6506 26.6951 34.1009 17.5695 34.1009H17.5625C14.7919 34.1001 12.0684 33.4027 9.65005 32.0789L0.87245 34.3888L3.22186 25.7835C1.77245 23.2654 1.01024 20.4077 1.01111 17.481C1.01547 8.32443 8.4422 0.874967 17.5695 0.874967ZM17.5695 0C7.96255 0 0.143382 7.84145 0.139021 17.481C0.138149 20.427 0.879427 23.3301 2.28524 25.8999L0.0308821 34.1587C-0.0510945 34.4606 0.0326262 34.7825 0.252393 35.0048C0.418091 35.1728 0.642218 35.2647 0.87245 35.2647C0.946578 35.2647 1.02071 35.255 1.09396 35.2358L9.54191 33.0134C12.0082 34.2978 14.7727 34.9759 17.5625 34.9768C27.1765 34.9768 34.9956 27.1345 35 17.495C35.0017 12.8235 33.1904 8.43118 29.9 5.1273C26.6079 1.82256 22.2291 0.00174993 17.5695 0Z"
                                            fill="#CFD8DC" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M27.3038 7.72777C24.7049 5.11862 21.2506 3.68105 17.5739 3.68018C9.98317 3.68018 3.80964 9.87144 3.80615 17.4819C3.80528 20.0902 4.53261 22.6293 5.91051 24.8281L6.23842 25.3505L4.84743 30.4437L10.0564 29.0735L10.5596 29.3727C12.6718 30.6309 15.0945 31.2959 17.5643 31.2967H17.5695C25.1549 31.2967 31.3285 25.1046 31.3311 17.4933C31.332 13.8053 29.9026 10.3369 27.3038 7.72777Z"
                                            fill="#40C351" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.4306 10.539C13.1211 9.84778 12.7949 9.83378 12.4993 9.82153C12.2577 9.81103 11.9821 9.81191 11.7065 9.81191C11.4309 9.81191 10.9827 9.91603 10.6033 10.3316C10.224 10.7472 9.15479 11.7508 9.15479 13.793C9.15479 15.8352 10.6373 17.8091 10.844 18.0856C11.0507 18.3621 13.7062 22.687 17.9115 24.3512C21.4059 25.7337 22.1176 25.4589 22.8763 25.3898C23.635 25.3207 25.3242 24.3862 25.6687 23.4168C26.0132 22.4473 26.0132 21.617 25.9103 21.4437C25.8065 21.2705 25.5309 21.1672 25.1175 20.959C24.7042 20.7507 22.6696 19.7472 22.2902 19.6089C21.9109 19.4707 21.6353 19.4015 21.3588 19.8172C21.0833 20.2319 20.2905 21.1672 20.049 21.4437C19.8074 21.7211 19.5658 21.7561 19.1524 21.5478C18.7391 21.3396 17.4065 20.9021 15.8254 19.4882C14.5958 18.3883 13.7655 17.0295 13.524 16.6139C13.2824 16.1992 13.4978 15.9743 13.7054 15.7669C13.8911 15.5806 14.1187 15.2822 14.3263 15.0398C14.533 14.7975 14.6019 14.6242 14.7397 14.3477C14.8774 14.0704 14.8086 13.828 14.7048 13.6206C14.6027 13.4124 13.7987 11.3597 13.4306 10.539Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span class="button__text">WhatsApp</span>
                            </a>
                        </li>
                    </div>

                    <li style="margin-top: 16px">
                        <modal-opener>
                            <button type="button" modal-trigger data-target-modal="quoteRequestModal"
                                class="button button--white button--text-normal button--full-width button--radius--secondary product-help__button">
                                <span class="button__text">Request a Quote</span>
                            </button>
                        </modal-opener>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <div id="shopify-section-template--26303101174142__product_video_preview_tthzbe" class="shopify-section">
        <style data-shopify>
            @media screen and (max-width: 800px) {

                .product-video-preview-section {
                    padding-bottom: 0;
                }

                .section-template--26303101174142__product_video_preview_tthzbe-padding {
                    padding-top: calc(100px * 0.75);
                    padding-bottom: calc(44px * 0.75);
                }

            }

            .section-template--26303101174142__product_video_preview_tthzbe-padding {
                padding-top: calc(100px);
                padding-bottom: calc(44px);
            }
        </style>

        <section
            class="product-video-preview-section section-template--26303101174142__product_video_preview_tthzbe-padding tablet-up-hide">
            <div class="container">
                <div class="grid grid--2-col-desktop grid--1-col-tablet-down">
                </div>
            </div>
        </section>

    </div>
    <div id="shopify-section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V" class="shopify-section">
        <style data-shopify>
            .section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V-padding {
                padding-top: calc(40px * 0.5);
                padding-bottom: calc(40px * 0.5);
            }

            #productYotpoGallerySection[custom-yotpo-empty="true"] {
                padding-block: 10px !important;
            }

            #productYotpoGallerySection[custom-yotpo-empty="true"] .section-header-wrapper {
                display: none;
            }

            #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V .y-hover-elements {
                display: none;
            }

            #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V #productYotpoGallerySectionDesktop:not(:has(.yotpo-pictures-widget *)) {
                padding: 0;
            }

            @media screen and (min-width: 750px) {
                .section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V-padding {
                    padding-top: 40px;
                    padding-bottom: 40px;
                }
            }

            @media screen and (max-width: 800px) {
                #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V {
                    background-color: ;
                    border-bottom: 1px solid rgb(var(--color-new-border))
                }

                #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V:not(:has(.yotpo-pictures-widget *)) {
                    border: none;
                }

                .section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V-padding:not(:has(.yotpo-pictures-widget *)) {
                    padding: 0;
                }
            }
        </style>

        <div class="tablet-hide">
            <div id="productYotpoGallerySectionDesktop"
                class="section-template--26303101174142__yotpo_product_instagram_gallery_pAiB6V-padding"
                style="visibility: hidden;max-height: 0;" custom-yotpo-empty="true">
                <div>
                    <div class="yotpo-instagram-gallery">
                        <div class="container">

                            <div class="section-header-wrapper text-center center">

                                <h3 class="section-header-wrapper__title h2">

                                    <p>In Real Homes</p>

                                </h3>

                                <p class="section-header-wrapper__subtitle h5 text-body text-body--large">See how
                                    customers are using these tiles</p>

                            </div>
                            <div class="yotpo yotpo-pictures-widget" data-gallery-id="66e02acf9a0b7aee903ab002"
                                data-product-id="8292759634110"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                // Callback function to execute when mutations are observed
                const observerCallback = (mutationsList, observer) => {
                    for (const mutation of mutationsList) {
                        if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
                            const mainProductContainer = document.querySelector("#shopify-section-product");
                            const reviewsBadges = document.querySelectorAll('.product-reviews-badge');
                            const viewButton = document.getElementById('view_yotpo_gallery');
                            const yotpoGallerySection = document.querySelector(
                                '#productYotpoGallerySectionDesktop');
                            const yotpoGallery = yotpoGallerySection.querySelector(
                            '.yotpo-display-wrapper');
                            if (yotpoGallery) {
                                yotpoGallerySection.setAttribute('custom-yotpo-empty', false)
                                yotpoGallerySection.style.visibility = 'visible';
                                yotpoGallerySection.style.maxHeight = '100%';
                                mainProductContainer.classList.remove('yotpo-gallery-null');
                                reviewsBadges.forEach(badge => {
                                    badge.classList.remove('hide')
                                })
                                viewButton.classList.remove('hide');
                                observer.disconnect();
                            }
                        }
                    }
                };
                const observer = new MutationObserver(observerCallback);
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            });
        </script>

    </div>
    <div id="shopify-section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb" class="shopify-section">
        <style data-shopify>
            .section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb-padding {
                padding-top: calc(40px * 0.5);
                padding-bottom: calc(40px * 0.5);
            }

            #productYotpoGallerySection[custom-yotpo-empty="true"] {
                padding-block: 10px !important;
            }

            #productYotpoGallerySection[custom-yotpo-empty="true"] .section-header-wrapper {
                display: none;
            }

            #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb .y-hover-elements {
                display: none;
            }

            #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb #productYotpoGallerySectionDesktop:not(:has(.yotpo-pictures-widget *)) {
                padding: 0;
            }

            @media screen and (min-width: 750px) {
                .section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb-padding {
                    padding-top: 40px;
                    padding-bottom: 40px;
                }
            }

            @media screen and (max-width: 800px) {
                #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb {
                    background-color: #f5f2ec;
                    border-bottom: 1px solid rgb(var(--color-new-border))
                }

                #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb:not(:has(.yotpo-pictures-widget *)) {
                    border: none;
                }

                .section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb-padding:not(:has(.yotpo-pictures-widget *)) {
                    padding: 0;
                }
            }
        </style>

        <div class="tablet-up-hide">
            <div id="productYotpoGallerySectionMobile"
                class="section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb-padding"
                style="visibility: hidden;max-height: 0;" custom-yotpo-empty="true">
                <div>
                    <div class="yotpo-instagram-gallery">
                        <div class="container">

                            <div class="section-header-wrapper text-center center">

                                <h3 class="section-header-wrapper__title h2">

                                    <p>In real homes</p>

                                </h3>

                                <p class="section-header-wrapper__subtitle h5 text-body text-body--large">See how
                                    customers are using these tiles</p>

                            </div>
                            <div class="yotpo yotpo-pictures-widget" data-gallery-id="66e031bc9a0b7a25ae39d0b1"
                                data-product-id="8292759634110"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                // Callback function to execute when mutations are observed
                const observerCallback = (mutationsList, observer) => {
                    for (const mutation of mutationsList) {
                        if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
                            const mainProductContainer = document.querySelector("#shopify-section-product");
                            const reviewsBadges = document.querySelectorAll('.product-reviews-badge');
                            const viewButton = document.getElementById('view_yotpo_gallery');
                            const yotpoGallerySection = document.querySelector(
                                '#productYotpoGallerySectionMobile');
                            const yotpoGallery = yotpoGallerySection.querySelector(
                            '.yotpo-display-wrapper');
                            if (yotpoGallery) {
                                yotpoGallerySection.setAttribute('custom-yotpo-empty', false)
                                yotpoGallerySection.style.visibility = 'visible';
                                yotpoGallerySection.style.maxHeight = '100%';
                                mainProductContainer.classList.remove('yotpo-gallery-null');
                                reviewsBadges.forEach(badge => {
                                    badge.classList.remove('hide')
                                })
                                viewButton.classList.remove('hide');
                                observer.disconnect();
                            }
                        }
                    }
                };
                const observer = new MutationObserver(observerCallback);
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            });
        </script>

        <style>
            @media screen and (max-width: 800px) {
                #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb .section-header-wrapper {
                    /* font-family: var(--font-family-secondary); */
                    text-align: center;
                    margin-bottom: 24px;
                }

                #shopify-section-template--26303101174142__yotpo_product_instagram_gallery_LVVLPb .section-header-wrapper:not(.section-header-wrapper--has-nav)>*+* {
                    margin-top: 0;
                }
            }
        </style>
    </div>
    <section id="shopify-section-template--26303101174142__image_with_text_nrcbd3" class="shopify-section">
        <style data-shopify>
            #shopify-section-template--26303101174142__image_with_text_nrcbd3 {
                position: relative;
                overflow: hidden;
            }

            #shopify-section-template--26303101174142__image_with_text_nrcbd3 .image-link-block>*+* {
                margin-top: 20px;
            }

            .section-template--26303101174142__image_with_text_nrcbd3-padding {
                padding-top: calc(0px * 0.3);
                padding-bottom: calc(0px * 0.3);
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

            #shopify-section-template--26303101174142__image_with_text_nrcbd3 .image-with-text__image img {
                object-fit: contain;
                width: 60%;
                height: 100%;
            }

            #shopify-section-template--26303101174142__image_with_text_nrcbd3 .image-with-text__btn {
                padding: 8px 20px;
                font-size: 15px;
                font-weight: 600;
                line-height: 140%;
                min-height: 40px;
                min-width: 177px;
            }

            #shopify-section-template--26303101174142__image_with_text_nrcbd3 .image-with-text {}

            #shopify-section-template--26303101174142__image_with_text_nrcbd3 .image-with-text__p {
                font-size: 16px;
            }


            @media screen and (max-width: 1024px) {
                .section-template--26303101174142__image_with_text_nrcbd3-padding.mobile--container {
                    margin: 0 16px;
                }

                .section-template--26303101174142__image_with_text_nrcbd3-padding.mobile--container {
                    border-radius: 15px;
                    overflow: hidden;
                }

            }

            @media screen and (min-width: 750px) {
                .section-template--26303101174142__image_with_text_nrcbd3-padding {
                    padding-top: calc(0px * 0.4);
                    padding-bottom: calc(0px * 0.4);
                }
            }

            @media screen and (min-width: 1024px) {

                .section-template--26303101174142__image_with_text_nrcbd3-padding {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                .section-template--26303101174142__image_with_text_nrcbd3-padding.desktop--container {
                    margin: 0 auto;
                    max-width: 1354px;
                    width: 100%;
                }

                .image-with-text__content .image-with-text__text {
                    align-items: left;

                }

                #shopify-section-template--26303101174142__image_with_text_nrcbd3 .image-with-text__btn {
                    font-size: 18px;
                    min-height: 50px;
                }

                .section-template--26303101174142__image_with_text_nrcbd3-padding .image-with-text__content {
                    padding-inline: 0%;
                }


                #shopify-section-template--26303101174142__image_with_text_nrcbd3:before {
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
                #shopify-section-template--26303101174142__image_with_text_nrcbd3:before {
                    width: 40%;
                }
            }

            @media screen and (min-width: 3400px) {
                #shopify-section-template--26303101174142__image_with_text_nrcbd3:before {
                    width: 45%;
                }
            }
        </style>

        <div
            class="section-template--26303101174142__image_with_text_nrcbd3-padding desktop--fullwidth mobile--fullwidth">
            <div class="image-with-text image-with-text--left">
                <div class="">
                    <div class="image-with-text__content" style="color: #000000">

                        <div class="image-with-text__image" style="aspect-ratio: 2.0">

                            <img src="../cdn/shop/files/sample-box98ac.png?v=1759245573&amp;width=750"
                                srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=400 400w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=450 450w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=500 500w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=550 550w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=650 650w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=700 700w, //www.porcelainsuperstore.co.uk/cdn/shop/files/sample-box.png?v=1759245573&amp;width=750 750w"
                                width="1024" height="50" loading="lazy" fetchpriority="auto" sizes="50vw">

                        </div>

                        <div class="image-with-text__text">

                            <h3 class="image-with-text__heading h2">

                                <p>Free Samples</p>

                            </h3>

                            <div class="image-with-text__p text-body text-body--smaller">
                                <p>Try before you buy with our sample service - completely free of charge and delivered
                                    in two working days.</p>
                            </div>

                            <a class="image-with-text__btn button"
                                href="https://www.porcelainsuperstore.co.uk/pages/samples"
                                style="color: #ffffff; background-color:#000000">
                                Read More
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="shopify-section-template--26303101174142__new_related_products_a7rPpa"
        class="shopify-section section gapless-slider-section">
        <style data-shopify>
            #shopify-section-template--26303101174142__new_related_products_a7rPpa {
                background:
            }


            .new-related-products__navigation {
                position: absolute;
                width: 100%;
                z-index: 10;
            }

            .section-template--26303101174142__new_related_products_a7rPpa-padding {
                padding-top: calc(92px * 0.5);
                padding-bottom: calc(92px * 0.5);
            }

            @media screen and (min-width: 750px) {
                .section-template--26303101174142__new_related_products_a7rPpa-padding {
                    padding-top: 92px;
                    padding-bottom: 92px;
                }
            }

            @media screen and (max-width: 800px) {
                .template-product .section-template--26303101174142__new_related_products_a7rPpa-padding .section-header-wrapper__title.h2 {
                    text-align: left;
                }

            }
        </style>

        <div class="">

            <div class="section-template--26303101174142__new_related_products_a7rPpa-padding">

                <div class="container">
                    <div class="section-header-wrapper new-related-products  section-header-wrapper--has-nav ">

                        <div style="display: flex; flex-direction: column">
                            <h3 class="section-header-wrapper__title h2">

                                <p>Installation Materials</p>

                            </h3>
                            <p class="section-header-wrapper__subtitle h5 text-body text-body--large">Recommended
                                adhesive & grout for this tile</p>
                        </div>

                    </div>
                    <swiper-slider data-options='
    {
    "speed": 500,
    "loop": false,
    "autoplay": false,
    "initialSlide": 0,
    "slidesPerView": 2,
    "centeredSlides": false,
    "spaceBetween": 9,
    "breakpoints": {
        "750": {
          "slidesPerView": 3
        },
        "900": {
          "slidesPerView": 4,
          "spaceBetween": 9,
          "centeredSlides": false
        },
        "1200": {
          "slidesPerView": 4,
          "spaceBetween": 16
        }
    },
    "navigation": {
    "nextEl": ".swiper-button-next--template--26303101174142__new_related_products_a7rPpa",
    "prevEl": ".swiper-button-prev--template--26303101174142__new_related_products_a7rPpa"
    },
    "pagination": {
        "el": ".bullets--template--26303101174142__new_related_products_a7rPpa"
    }
    }
'>
                        <div class="swiper product-swiper">

                            <ul class="new-related-products__navigation section-header-wrapper__navigation">
                                <li>
                                    <button
                                        class="new-swiper-button icon-button swiper-button-prev--template--26303101174142__new_related_products_a7rPpa"
                                        prev>

                                        <svg width="13" height="20" viewBox="0 0 13 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1L2 10L12 19" stroke="#6B6B6B" stroke-width="2" />
                                        </svg>

                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="new-swiper-button icon-button swiper-button-next--template--26303101174142__new_related_products_a7rPpa"
                                        next>

                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 19L10 10L1 1" stroke="#6B6B6B" stroke-width="2" />
                                        </svg>

                                    </button>
                                </li>
                            </ul>

                            <ul class="related-products-slider product-slider swiper-wrapper">

                                <li class="swiper-slide swiper-slide--auto-height">

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

                                        .cl-product-card--rich.cl-product-card--8262529319102 .product-card__slider-navigation {
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

                                        .cl-product-card--rich.cl-product-card--8262529319102 .product-card__slider-navigation .new-swiper-button {
                                            display: flex;
                                            padding: 9px 6px 9px 8px;
                                            background-color: rgba(245, 242, 237, 0.85);
                                            pointer-events: auto;
                                            cursor: pointer;
                                        }

                                        .cl-product-card--rich.cl-product-card--8262529319102 .product-card__slider-navigation .new-swiper-button {
                                            transition: all 0.2s ease-in-out;
                                        }

                                        .cl-product-card--rich.cl-product-card--8262529319102 .product-card__slider-navigation .swiper-button-next--template--26303101174142__new_related_products_a7rPpa {
                                            transform: translateX(100%);
                                        }

                                        .cl-product-card--rich.cl-product-card--8262529319102 .product-card__slider-navigation .swiper-button-prev--template--26303101174142__new_related_products_a7rPpa {
                                            transform: translateX(-100%);
                                        }


                                        .cl-product-card--rich.cl-product-card--8262529319102 .product-card__slider-navigation .new-swiper-button path {
                                            stroke: rgb(var(--color-black));
                                        }

                                        @media screen and (min-width: 800px) {
                                            .cl-product-card--rich.cl-product-card--8262529319102 .product-card__slider-navigation {
                                                display: flex;
                                            }

                                            .cl-product-card--rich.cl-product-card--8262529319102 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                                                transform: translateX(0);
                                            }
                                        }

                                        @media screen and (max-width: 800px) {
                                            .cl-product-card-info .card-price.mobile-size-- {
                                                font-size: px;
                                            }
                                        }
                                    </style>
                                    <div
                                        class="cl-product-card cl-product-card--standard cl-product-card--8262529319102">

                                        <div class="product-badges"></div>

                                        <div class="cl-product-card__badge">

                                        </div>

                                        <div class="cl-product-card-image">
                                            <a href="fugabella-grout-25-beige.html" title="Fugabella Grout 25 Beige"
                                                data-preloadlink="true">
                                                <div>
                                                    <div class="image-snippet ">
                                                        <img src="../cdn/shop/files/K_Fb_Color_25_3_kg_22_PLxUK_c9f432e3-0e97-411a-9108-6e83aeeddbcad797.jpg?v=1722340925&amp;width=400"
                                                            alt="Fugabella Grout 25 Beige"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/K_Fb_Color_25_3_kg_22_PLxUK_c9f432e3-0e97-411a-9108-6e83aeeddbca.jpg?v=1722340925&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/K_Fb_Color_25_3_kg_22_PLxUK_c9f432e3-0e97-411a-9108-6e83aeeddbca.jpg?v=1722340925&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/K_Fb_Color_25_3_kg_22_PLxUK_c9f432e3-0e97-411a-9108-6e83aeeddbca.jpg?v=1722340925&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <!-- <button aria-label="Add to Wishlist" data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_8262529319102" data-swaction="addToWishlist" data-product-id="8262529319102" data-variant-id="44430403600574" data-product-url="https://www.porcelainsuperstore.co.uk/products/fugabella-grout-25-beige">
        
      </button> -->

                                                </div>
                                            </a>

                                        </div>

                                        <div class="cl-product-card-info
    single-image
    no_free_sample">

                                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                                <a class="hover-underline" href="fugabella-grout-25-beige.html"
                                                    title="Fugabella Grout 25 Beige">
                                                    Fugabella Grout 25 Beige
                                                </a>
                                            </h3>

                                            <div class="cl-product-card-size ">
                                                3kg
                                            </div>

                                            <div class="card-price mobile-size-- metafield-price-per-size">

                                                <span>£19.00 / Bag</span>

                                            </div>

                                            <a class="cl-product-card-yotpo-rating"
                                                href="fugabella-grout-25-beige.html#yotpoReviewsWidget">
                                                <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                                                    data-yotpo-instance-id="643481"
                                                    data-yotpo-product-id="8262529319102" data-yotpo-cart-product-id=""
                                                    data-yotpo-section-id="product">
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

                                <li class="swiper-slide swiper-slide--auto-height">

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

                                        .cl-product-card--rich.cl-product-card--6588834087102 .product-card__slider-navigation {
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

                                        .cl-product-card--rich.cl-product-card--6588834087102 .product-card__slider-navigation .new-swiper-button {
                                            display: flex;
                                            padding: 9px 6px 9px 8px;
                                            background-color: rgba(245, 242, 237, 0.85);
                                            pointer-events: auto;
                                            cursor: pointer;
                                        }

                                        .cl-product-card--rich.cl-product-card--6588834087102 .product-card__slider-navigation .new-swiper-button {
                                            transition: all 0.2s ease-in-out;
                                        }

                                        .cl-product-card--rich.cl-product-card--6588834087102 .product-card__slider-navigation .swiper-button-next--template--26303101174142__new_related_products_a7rPpa {
                                            transform: translateX(100%);
                                        }

                                        .cl-product-card--rich.cl-product-card--6588834087102 .product-card__slider-navigation .swiper-button-prev--template--26303101174142__new_related_products_a7rPpa {
                                            transform: translateX(-100%);
                                        }


                                        .cl-product-card--rich.cl-product-card--6588834087102 .product-card__slider-navigation .new-swiper-button path {
                                            stroke: rgb(var(--color-black));
                                        }

                                        @media screen and (min-width: 800px) {
                                            .cl-product-card--rich.cl-product-card--6588834087102 .product-card__slider-navigation {
                                                display: flex;
                                            }

                                            .cl-product-card--rich.cl-product-card--6588834087102 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                                                transform: translateX(0);
                                            }
                                        }

                                        @media screen and (max-width: 800px) {
                                            .cl-product-card-info .card-price.mobile-size-- {
                                                font-size: px;
                                            }
                                        }
                                    </style>
                                    <div
                                        class="cl-product-card cl-product-card--standard cl-product-card--6588834087102">

                                        <div class="product-badges"></div>

                                        <div class="cl-product-card__badge">

                                        </div>

                                        <div class="cl-product-card-image">
                                            <a href="tilemaster-standard-set-setaflex-white-20kg.html"
                                                title="Standard Set Setaflex - White" data-preloadlink="true">
                                                <div>
                                                    <div class="image-snippet ">
                                                        <img src="../cdn/shop/files/setaflex-standard-white_fddff86b-3a21-4922-bae5-9ee3f185434f91cf.jpg?v=1713535534&amp;width=400"
                                                            alt="Standard Set Setaflex - White"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/setaflex-standard-white_fddff86b-3a21-4922-bae5-9ee3f185434f.jpg?v=1713535534&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/setaflex-standard-white_fddff86b-3a21-4922-bae5-9ee3f185434f.jpg?v=1713535534&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/setaflex-standard-white_fddff86b-3a21-4922-bae5-9ee3f185434f.jpg?v=1713535534&amp;width=400 400w"
                                                            width="400" height="413" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <!-- <button aria-label="Add to Wishlist" data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_6588834087102" data-swaction="addToWishlist" data-product-id="6588834087102" data-variant-id="39435448746174" data-product-url="https://www.porcelainsuperstore.co.uk/products/tilemaster-standard-set-setaflex-white-20kg">
        
      </button> -->

                                                </div>
                                            </a>

                                        </div>

                                        <div class="cl-product-card-info
    single-image
    no_free_sample">

                                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                                <a class="hover-underline"
                                                    href="tilemaster-standard-set-setaflex-white-20kg.html"
                                                    title="Standard Set Setaflex - White">
                                                    Standard Set Setaflex - White
                                                </a>
                                            </h3>

                                            <div class="cl-product-card-size ">
                                                20kg Bag
                                            </div>

                                            <div class="card-price mobile-size-- metafield-price-per-size">

                                                <span>£23.00 / Bag</span>

                                            </div>

                                            <a class="cl-product-card-yotpo-rating"
                                                href="tilemaster-standard-set-setaflex-white-20kg.html#yotpoReviewsWidget">
                                                <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                                                    data-yotpo-instance-id="643481"
                                                    data-yotpo-product-id="6588834087102" data-yotpo-cart-product-id=""
                                                    data-yotpo-section-id="product">
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

                                <li class="swiper-slide swiper-slide--auto-height">

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

                                        .cl-product-card--rich.cl-product-card--8262531219646 .product-card__slider-navigation {
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

                                        .cl-product-card--rich.cl-product-card--8262531219646 .product-card__slider-navigation .new-swiper-button {
                                            display: flex;
                                            padding: 9px 6px 9px 8px;
                                            background-color: rgba(245, 242, 237, 0.85);
                                            pointer-events: auto;
                                            cursor: pointer;
                                        }

                                        .cl-product-card--rich.cl-product-card--8262531219646 .product-card__slider-navigation .new-swiper-button {
                                            transition: all 0.2s ease-in-out;
                                        }

                                        .cl-product-card--rich.cl-product-card--8262531219646 .product-card__slider-navigation .swiper-button-next--template--26303101174142__new_related_products_a7rPpa {
                                            transform: translateX(100%);
                                        }

                                        .cl-product-card--rich.cl-product-card--8262531219646 .product-card__slider-navigation .swiper-button-prev--template--26303101174142__new_related_products_a7rPpa {
                                            transform: translateX(-100%);
                                        }


                                        .cl-product-card--rich.cl-product-card--8262531219646 .product-card__slider-navigation .new-swiper-button path {
                                            stroke: rgb(var(--color-black));
                                        }

                                        @media screen and (min-width: 800px) {
                                            .cl-product-card--rich.cl-product-card--8262531219646 .product-card__slider-navigation {
                                                display: flex;
                                            }

                                            .cl-product-card--rich.cl-product-card--8262531219646 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                                                transform: translateX(0);
                                            }
                                        }

                                        @media screen and (max-width: 800px) {
                                            .cl-product-card-info .card-price.mobile-size-- {
                                                font-size: px;
                                            }
                                        }
                                    </style>
                                    <div
                                        class="cl-product-card cl-product-card--standard cl-product-card--8262531219646">

                                        <div class="product-badges"></div>

                                        <div class="cl-product-card__badge">

                                        </div>

                                        <div class="cl-product-card-image">
                                            <a href="silicone-color-25-beige.html" title="Silicone Color 25 Beige"
                                                data-preloadlink="true">
                                                <div>
                                                    <div class="image-snippet ">
                                                        <img src="../cdn/shop/files/Silicone-Color-255c17.jpg?v=1724241523&amp;width=400"
                                                            alt="Silicone Color 25 Beige"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/files/Silicone-Color-25.jpg?v=1724241523&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Silicone-Color-25.jpg?v=1724241523&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/files/Silicone-Color-25.jpg?v=1724241523&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <!-- <button aria-label="Add to Wishlist" data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_8262531219646" data-swaction="addToWishlist" data-product-id="8262531219646" data-variant-id="44430406615230" data-product-url="https://www.porcelainsuperstore.co.uk/products/silicone-color-25-beige">
        
      </button> -->

                                                </div>
                                            </a>

                                        </div>

                                        <div class="cl-product-card-info
    single-image
    no_free_sample">

                                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                                <a class="hover-underline" href="silicone-color-25-beige.html"
                                                    title="Silicone Color 25 Beige">
                                                    Silicone Color 25 Beige
                                                </a>
                                            </h3>

                                            <div class="cl-product-card-size is-empty">

                                            </div>

                                            <div class="card-price mobile-size-- metafield-price-per-size">

                                                <span>£18.50 / Tube</span>

                                            </div>

                                            <a class="cl-product-card-yotpo-rating"
                                                href="silicone-color-25-beige.html#yotpoReviewsWidget">
                                                <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                                                    data-yotpo-instance-id="643481"
                                                    data-yotpo-product-id="8262531219646" data-yotpo-cart-product-id=""
                                                    data-yotpo-section-id="product">
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

                                <li class="swiper-slide swiper-slide--auto-height">

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

                                        .cl-product-card--rich.cl-product-card--7383653449918 .product-card__slider-navigation {
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

                                        .cl-product-card--rich.cl-product-card--7383653449918 .product-card__slider-navigation .new-swiper-button {
                                            display: flex;
                                            padding: 9px 6px 9px 8px;
                                            background-color: rgba(245, 242, 237, 0.85);
                                            pointer-events: auto;
                                            cursor: pointer;
                                        }

                                        .cl-product-card--rich.cl-product-card--7383653449918 .product-card__slider-navigation .new-swiper-button {
                                            transition: all 0.2s ease-in-out;
                                        }

                                        .cl-product-card--rich.cl-product-card--7383653449918 .product-card__slider-navigation .swiper-button-next--template--26303101174142__new_related_products_a7rPpa {
                                            transform: translateX(100%);
                                        }

                                        .cl-product-card--rich.cl-product-card--7383653449918 .product-card__slider-navigation .swiper-button-prev--template--26303101174142__new_related_products_a7rPpa {
                                            transform: translateX(-100%);
                                        }


                                        .cl-product-card--rich.cl-product-card--7383653449918 .product-card__slider-navigation .new-swiper-button path {
                                            stroke: rgb(var(--color-black));
                                        }

                                        @media screen and (min-width: 800px) {
                                            .cl-product-card--rich.cl-product-card--7383653449918 .product-card__slider-navigation {
                                                display: flex;
                                            }

                                            .cl-product-card--rich.cl-product-card--7383653449918 .swiper:hover .product-card__slider-navigation .new-swiper-button {
                                                transform: translateX(0);
                                            }
                                        }

                                        @media screen and (max-width: 800px) {
                                            .cl-product-card-info .card-price.mobile-size-- {
                                                font-size: px;
                                            }
                                        }
                                    </style>
                                    <div
                                        class="cl-product-card cl-product-card--standard cl-product-card--7383653449918">

                                        <div class="product-badges"></div>

                                        <div class="cl-product-card__badge">

                                        </div>

                                        <div class="cl-product-card-image">
                                            <a href="3mm-tile-spacers.html" title="3mm Tile Spacers"
                                                data-preloadlink="true">
                                                <div>
                                                    <div class="image-snippet ">
                                                        <img src="../cdn/shop/products/tileasy_spacer_b1fa9f5c-951d-4cf5-80df-c67aa153068a3ca2.jpg?v=1661858829&amp;width=400"
                                                            alt="3mm Tile Spacers"
                                                            srcset="//www.porcelainsuperstore.co.uk/cdn/shop/products/tileasy_spacer_b1fa9f5c-951d-4cf5-80df-c67aa153068a.jpg?v=1661858829&amp;width=250 250w, //www.porcelainsuperstore.co.uk/cdn/shop/products/tileasy_spacer_b1fa9f5c-951d-4cf5-80df-c67aa153068a.jpg?v=1661858829&amp;width=300 300w, //www.porcelainsuperstore.co.uk/cdn/shop/products/tileasy_spacer_b1fa9f5c-951d-4cf5-80df-c67aa153068a.jpg?v=1661858829&amp;width=400 400w"
                                                            width="400" height="400" loading="lazy" sizes="30vw"
                                                            class="image-snippet__img image-snippet__img--fill">
                                                    </div>

                                                    <!-- <button aria-label="Add to Wishlist" data-with-epi="true" class="swym-button swym-add-to-wishlist-view-product product_7383653449918" data-swaction="addToWishlist" data-product-id="7383653449918" data-variant-id="42018461057214" data-product-url="https://www.porcelainsuperstore.co.uk/products/3mm-tile-spacers">
        
      </button> -->

                                                </div>
                                            </a>

                                        </div>

                                        <div class="cl-product-card-info
    single-image
    no_free_sample">

                                            <h3 class="cl-product-card-name bold" data-aid="product-card">
                                                <a class="hover-underline" href="3mm-tile-spacers.html"
                                                    title="3mm Tile Spacers">
                                                    3mm Tile Spacers
                                                </a>
                                            </h3>

                                            <div class="cl-product-card-size ">
                                                250 or 500 bag
                                            </div>

                                            <div class="card-price mobile-size-- metafield-price-per-size">

                                                <span>£3.25 / 500</span>

                                            </div>

                                            <a class="cl-product-card-yotpo-rating"
                                                href="3mm-tile-spacers.html#yotpoReviewsWidget">
                                                <div class="yotpo-widget-instance yotpo-widget-instance--custom"
                                                    data-yotpo-instance-id="643481"
                                                    data-yotpo-product-id="7383653449918" data-yotpo-cart-product-id=""
                                                    data-yotpo-section-id="product">
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
                    </swiper-slider>
                </div>

            </div>
        </div>

    </section>
    <section id="shopify-section-template--26303101174142__product-yotpo" class="shopify-section section">
        <style data-shopify>
            #shopify-section-template--26303101174142__product-yotpo {
                background: #faf7f2;
                overflow: hidden;
            }

            .section-template--26303101174142__product-yotpo-padding {
                padding-top: calc(96px * 0.4);
                padding-bottom: calc(96px * 0.4);
            }


            .yotpo .main-widget.yotpo-display-wrapper .yotpo-nav-content {
                background: none;
            }

            .yotpo .main-widget.yotpo-display-wrapper .new-yotpo-small-box ul {
                width: 100% !important;
                padding-bottom: 8px;
                border-bottom: 2px solid rgba(var(--color-main-text), .2);
            }

            .yotpo .main-widget.yotpo-display-wrapper .new-yotpo-small-box ul .yotpo-nav-tab.yotpo-active .yotpo-nav-wrapper span::after {
                bottom: -11px !important;
                width: 100% !important;
            }

            .yotpo .yotpo-nav ul .yotpo-nav-tab span {
                font-size: 1.125rem;
                font-weight: 600;
            }


            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container {
                background: none !important;
            }



            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container {
                margin: 35px auto 0;
                width: 100%;
                max-width: 401px;
                padding-bottom: 0 !important;
            }

            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-question-button,
            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-review-button.write-question-review-button {
                height: 50px !important;
                border-radius: 20px;
            }


            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-review-button.write-question-review-button:hover {
                opacity: .65;
            }

            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-review-button.write-question-review-button {
                background: rgba(var(--color-main-text), 1) !important;
            }

            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-question-button {
                background: none !important;
                border: 1px solid rgba(var(--color-main-text), 1) !important;
            }

            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-question-button>span {
                color: rgba(var(--color-main-text), 1) !important;
            }

            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-question-button:hover>span {
                color: rgba(var(--color-white), 1) !important;
            }

            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-question-button>span,
            .yotpo .main-widget.yotpo-display-wrapper .write-question-review-buttons-container .write-review-button.write-question-review-button>span {
                margin: 0 !important;
                height: auto !important;
                font-weight: 400 !important;
            }

            @media screen and (min-width: 750px) {
                .yotpo .yotpo-nav ul .yotpo-nav-tab span {
                    font-size: 1.375rem;
                }

                .section-template--26303101174142__product-yotpo-padding {
                    padding-top: 96px;
                    padding-bottom: 96px;
                }
            }
        </style>
        <div class="section-template--26303101174142__product-yotpo-padding">
            <div class="container">
                <div class="section-header-wrapper text-center center">

                    <h2 class="section-header-wrapper__title h3">

                        Why people
                        <span class="decor-underline decor-underline--2 ">love</span>
                        this tile

                    </h2>

                    <p class="section-header-wrapper__subtitle text-body text-body--large"></p>

                </div>

                <div class="product-yotpo">
                    <div class="yotpo yotpo-main-widget" id="yotpoReviewsWidget" data-product-id="8292759634110"
                        data-name="Petra Ivory Floor Tile"
                        data-url="https://www.porcelainsuperstore.co.uk/products/petra-ivory-floor-tile"
                        data-image-url="//www.porcelainsuperstore.co.uk/cdn/shop/files/Petra-Ivory-06_large.jpg%3Fv=1726046231"
                        data-price="" data-currency="GBP"
                        data-description="&lt;p&gt;Infuse your home with the understated elegance of natural stone with our Petra Ivory floor tiles.&lt;br&gt;&lt;br&gt;Crafted in Italy, these 40 x 60 cm tiles bring a timeless limestone-inspired look, perfect for creating a warm and inviting feel in modern spaces.&lt;br&gt;&lt;br&gt;&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;Made from porcelain, they&#39;re hard-wearing and easy to live with. A truly authentic flooring choice for kitchens, hallways and bathrooms alike.&lt;/li&gt;
&lt;li&gt;The slightly tumbled texture and softly cushioned edges create a natural lived-in feel underfoot, while the matt surface offers excellent slip resistance&lt;/li&gt;
&lt;li&gt;A soft sheen plays with the light, adding a touch of elegance that enhances your home without stealing the show&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;To achieve the classic charm of natural flagstone, we recommend laying the tiles in a staggered pattern for a relaxed, timeless look.&lt;br&gt;&lt;br&gt;For those seeking a more traditional finish, Petra Ivory is also available in a &lt;a href=_/products/petra-ivory-modular-floor-tile__modular.html format&lt;/a&gt; - perfect for adding rustic character to your home.&lt;/p&gt;">

                    </div>
                </div>

            </div>
        </div>

    </section>
    <div id="shopify-section-template--26303101174142__shogun-optimizer" class="shopify-section">

    </div>
</main>
@endsection

@push('js')

@endpush