@extends('website.layouts.master')

@section('title', 'Contact Us - ' . config('app.name'))
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
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/661d3e15ecdbe9010ffa68af_661d3e85aa991d00fdf13a97.css') }}">
<main role="main" id="MainContent">

    <div class="shg-clearfix"></div>
    <div data-region="main" data-shogun-power-up-id="" data-shogun-power-up-type="" data-shogun-page-type="page"
        data-shogun-variant-id="661d3e85aa991d00fdf13a97" data-shogun-platform-type="shopify"
        data-shogun-page-version-id="661d3e15ecdbe9010ffa68af" data-shogun-page-id="661d21dc9da9500110b6a7e5"
        data-shogun-site-id="6a41b354-9fb4-42ac-a828-99a294124b22" data-shogun-id="661d21dc9da9500110b6a7e5"
        class="shogun-root">

        <x-bread-crumb
            image="https://i.shgcdn.com/529b570c-d9d5-4438-83f8-c669ee93d873/-/format/auto/-/preview/3000x3000/-/quality/lighter/"
            title="Contact Us" subtitle="We're ready to help with all your tile related queries" />


        <div class="shg-box-vertical-align-wrapper">
            <div id="s-224421d7-282e-474b-a375-c069a5e44019" class="shg-box shg-c">
                <div class="shg-box-overlay"></div>
                <div class="shg-box-content">
                    <div class="shg-c" id="s-cae54723-7b1e-4936-934f-aae8f4a8e5fc">
                        <div class="shg-rich-text shg-theme-text-content">
                            <p style="line-height: 24px; text-align: center;"><span style="font-size: 16px;"><span
                                        data-fontfamily="Averta" style="font-family: Averta;">Have a question about a
                                        tile, some feedback or maybe you just want a chat? <br>Get in touch by phone or
                                        email and one of our tile experts will get back to you as soon as possible.
                                    </span></span></p>
                        </div>
                    </div>
                    <div class="shg-box-vertical-align-wrapper">
                        <div id="s-e9140cfa-e3a8-4604-9f27-84678ce14ed5" class="shg-box shg-c">
                            <div class="shg-box-overlay"></div>
                            <div class="shg-box-content">
                                <div class="shg-c" id="s-82120338-7d38-4a0a-aad3-4f6baa61ae0d">
                                    <div class="shg-rich-text shg-theme-text-content">
                                        <p> </p>
                                        <p style="text-align: center;"><span style="font-size: 16px;"><span
                                                    data-fontfamily="Averta" style="font-family: Averta;">Have a
                                                    question about a tile, some feedback or maybe you just want a chat?
                                                    Get in touch by phone or email and one of our tile experts will get
                                                    back to you as soon as possible. </span></span></p>
                                        <div class="band">
                                            <div class="wrap wrap--narrow wrap--tab-width">
                                                <div class="gr1d cols-3 cols-m-1 gap-40px">
                                                    <div class="col-span-2 col-span-m-1">
                                                        <form method="post" enctype="multipart/form-data"
                                                            action="https://loaf.com/contact-us" class="contact-form"
                                                            accept-charset="utf-8">
                                                            <div class="grid grid--form">
                                                                <div class="grid__item l-full"> </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="s-08f00be4-e896-421d-8bb1-d94d52753e0a" class="shg-c">
                                    <div data-col-grid-mode-on="" class="shg-row">
                                        <div class="shg-c-lg-7 shg-c-md-7 shg-c-sm-7 shg-c-xs-12">
                                            <div class="shg-c" >
                                                <form action="{{ route('contact.store') }}" method="POST" id="s-6bc1c335-5c70-457e-a2e1-9f45402c401e" class="shogun-form-box">
                                                    @csrf

                                                    <div class="shg-c shg-align-left"
                                                        id="s-72436feb-71f7-44b5-a673-44f1930b1f62">
                                                        <div class="shogun-heading-component">
                                                            <h6><a href="tel:03300940304" target="_self"> Send us a
                                                                    message:<br> </a></h6>
                                                                {{-- Success Message --}}
                                                                @if(session('success'))
                                                                    <div class="alert alert-success">{{ session('success') }}</div>
                                                                @endif

                                                                {{-- Validation Errors --}}
                                                                @if($errors->any())
                                                                    <div class="alert alert-danger" style="color: red">
                                                                        <ul>
                                                                            @foreach($errors->all() as $error)
                                                                                <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif

                                                        </div>
                                                    </div>
                                                    <div class="shg-c" id="s-dc9ea0ca-7c9c-4c28-9b70-2fff5973c5b9">
                                                        <div data-field-type="text" class="shogun-form-text-input">
                                                            <label class="shogun-form-label">Name*</label> 
                                                            <input
                                                                required="true" type="text" placeholder="" name="name"
                                                                class="shogun-form-box-field shogun-form-text-input-field"
                                                                id="input-s-dc9ea0ca-7c9c-4c28-9b70-2fff5973c5b9">
                                                        </div>
                                                    </div>
                                                    <div class="shg-c" id="s-e600608c-eace-4c4c-890c-64634af80229">
                                                        <div data-field-type="email" class="shogun-form-text-input">
                                                            <label class="shogun-form-label">Email address*</label>
                                                            <input required="true" type="email" placeholder=""
                                                                name="email"
                                                                class="shogun-form-box-field shogun-form-text-input-field"
                                                                id="input-s-e600608c-eace-4c4c-890c-64634af80229">
                                                        </div>
                                                    </div>
                                                    <div class="shg-c" id="s-c2651cb8-f586-4340-a26d-9c462b7953ec">
                                                        <div data-field-type="textarea" class="shogun-form-text-input">
                                                            <label class="shogun-form-label">Message*</label> <textarea
                                                                required="true" placeholder="Your message"
                                                                name="message"
                                                                class="shogun-form-box-field shogun-form-text-input-field"
                                                                id="form-textarea-s-c2651cb8-f586-4340-a26d-9c462b7953ec"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="shg-c shg-btn-wrapper shg-align-center"
                                                        id="s-281b7ca0-1965-4841-8395-831f9945364a-btn-wrapper"><button
                                                            type="submit" class="shg-btn shg-cse shogun-form-box-submit"
                                                            id="s-281b7ca0-1965-4841-8395-831f9945364a"> Send message
                                                        </button></div>
                                                    <div class="shogun-form-success-msg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewbox="-1 -1 26 26" height="16" width="16">
                                                            <path fill="currentColor"
                                                                d="M18.48 6.45a1.25 1.25 0 0 0-1.747.264l-5.924 8.04-3.767-3.014a1.251 1.251 0 0 0-1.563 1.953l4.783 3.826a1.263 1.263 0 0 0 1.787-.235l6.7-9.087a1.25 1.25 0 0 0-.269-1.748z">
                                                            </path>
                                                            <path fill="currentColor"
                                                                d="M0 12C0 5.373 5.373 0 12 0c6.625.007 11.993 5.375 12 12 0 6.627-5.373 12-12 12S0 18.627 0 12zm2 0c0 5.523 4.477 10 10 10 5.52-.006 9.994-4.48 10-10 0-5.523-4.477-10-10-10S2 6.477 2 12z"
                                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                                        </svg> <span>Thank you - we'll get back to you soon.</span>
                                                    </div>
                                                    <div class="shogun-form-error-msg-container">
                                                        <div class="shogun-form-error-msg">
                                                            <svg height="16px" width="16px" viewbox="0 0 26 26">
                                                                <path fill="currentColor"
                                                                    d="M13 1c6.627 0 12 5.373 12 12s-5.373 12-12 12S1 19.627 1 13 6.373 1 13 1zm0 1.5C7.201 2.5 2.5 7.201 2.5 13S7.201 23.5 13 23.5 23.5 18.799 23.5 13 18.799 2.5 13 2.5zm0 14.25l.123.007a1.125 1.125 0 11-.246 0L13 16.75zM13 5.5a.75.75 0 01.743.648l.007.102v8.25a.75.75 0 01-1.493.102l-.007-.102V6.25A.75.75 0 0113 5.5z"
                                                                    fillrule="nonzero"></path>
                                                            </svg> <span></span>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="shg-c-lg-5 shg-c-md-5 shg-c-sm-5 shg-c-xs-12">
                                            <div class="shg-c shg-align-left"
                                                id="s-18bd1ab1-53d1-41f6-8d51-c10a1f72d431">
                                                <div class="shogun-heading-component">
                                                    <h6><a href="tel:03300940304" target="_self"> Give us a
                                                            call:<br>{{ $ws->contact_mobile }}<br> </a></h6>
                                                </div>
                                            </div>
                                            <div class="shg-c" id="s-55383147-efaf-4dbc-83da-b67934e99676">
                                                <div class="shg-rich-text shg-theme-text-content">
                                                    <p><span style="font-size: 18px;"><strong>Telephone opening
                                                                hours</strong></span></p>
                                                </div>
                                            </div>
                                            <div class="shg-c" id="s-ceac0776-e993-490d-b64b-fa5bac8f2d54">
                                                <div class="shogun-table-wrapper">
                                                    <table class="shogun-table">
                                                        <thead class="shogun-table-column-container">
                                                            <tr>
                                                                <td class="shogun-table-column"></td>
                                                                <td class="shogun-table-column"></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="shogun-table-row-container">
                                                                <td class="shogun-table-row">
                                                                    <div class="shg-c"
                                                                        id="s-10c4790f-a651-4d59-8d2d-0cc97ab32d1d">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Monday</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-05c5bcc7-1df3-4225-b471-eeedfc88142c">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Tuesday</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-72ecfd91-4f07-4bd8-8569-512ff94365b3">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Wednesday</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-8772d10d-cc2a-4f25-b6b1-988e217b988d">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Thursday</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-c6dc0243-3af2-4ffd-bef5-2892d82fd0cd">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Friday</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-073d1ba6-5dcc-4305-acd0-9e451ef93d40">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Saturday</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-57360ead-3e6f-4e36-a2b2-b5551c96d93a">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Sunday</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="shogun-table-row">
                                                                    <div class="shg-c"
                                                                        id="s-7398f51d-a3f8-45c7-a150-112e791a85df">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span style="font-size: 16px;">9:00am -
                                                                                    5:00pm</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-788d61dc-0643-41c4-8776-222d80763a0c">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span style="font-size: 16px;">9:00am -
                                                                                    5:00pm</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-d506e3ab-2f56-4514-8ccf-1dc6e0dbb1f5">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span style="font-size: 16px;">9:00am -
                                                                                    5:00pm</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-d60201ac-724e-41e0-9ba1-cbfc9701ee0f">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span style="font-size: 16px;">9:00am -
                                                                                    5:00pm</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-852e0e76-910e-4e4d-a6f2-f7484e67bbf4">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span style="font-size: 16px;">9:00am -
                                                                                    4:30pm</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-d6bacf77-bf9e-45da-89e1-882e4d74cf5e">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Closed</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="shg-c"
                                                                        id="s-00fc98e6-46a2-4a4d-955a-7d0708ca72d1">
                                                                        <div
                                                                            class="shg-rich-text shg-theme-text-content">
                                                                            <p><span
                                                                                    style="font-size: 16px;">Closed</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="shg-c" id="s-62fb4268-3044-4aee-b5bc-a2a4962d7da4">
                                                <div class="shg-rich-text shg-theme-text-content">
                                                    <p><span data-fontfamily="Tiempos"
                                                            style="font-family: Tiempos; font-size: 30px;">Our
                                                            Address:</span></p>
                                                </div>
                                            </div>
                                            <div class="shg-c" id="s-d3ffd205-0453-4805-a267-298a2dde3cb8">
                                                <div class="shg-rich-text shg-theme-text-content">
                                                    <p style="line-height: 22px;"><strong><span
                                                                style="font-size: 16px;">This is a collection warehouse
                                                                only - we don't currently have a
                                                                showroom</span></strong></p>
                                                    <p style="line-height: 22px;"> </p>
                                                    <p style="line-height: 22px;"><span style="font-size: 16px;">{{ $ws->contact_address}}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>
<script type="text/javascript" src="{{ asset('frontend/js/global-assets-fbc1b7763a9df86edf4082364e848f5effb850d3.js') }}" defer></script>
@endsection

@push('css')

@endpush