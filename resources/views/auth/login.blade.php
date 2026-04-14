@extends('website.layouts.master')
@section('content')
<link rel="stylesheet" type="text/css"
    href="{{ asset('frontend/css/661d3e15ecdbe9010ffa68af_661d3e85aa991d00fdf13a97.css') }}">
<main role="main" id="MainContent">
    <div class="shg-clearfix"></div>
    <div data-region="main" data-shogun-power-up-id="" data-shogun-power-up-type="" data-shogun-page-type="page"
        data-shogun-variant-id="661d3e85aa991d00fdf13a97" data-shogun-platform-type="shopify"
        data-shogun-page-version-id="661d3e15ecdbe9010ffa68af" data-shogun-page-id="661d21dc9da9500110b6a7e5"
        data-shogun-site-id="6a41b354-9fb4-42ac-a828-99a294124b22" data-shogun-id="661d21dc9da9500110b6a7e5"
        class="shogun-root">

        <x-bread-crumb
            image="https://i.shgcdn.com/529b570c-d9d5-4438-83f8-c669ee93d873/-/format/auto/-/preview/3000x3000/-/quality/lighter/"
            title="Sign IN" subtitle="We're ready to help with all your tile related queries" />

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
                                    <div data-col-grid-mode-on="" class="shg-row" style="justify-content : center">
                                        <div class="shg-c-lg-7 shg-c-md-7 shg-c-sm-7 shg-c-xs-12">
                                            <div class="shg-c" id="s-6bc1c335-5c70-457e-a2e1-9f45402c401e">

                                                <form action="{{ route('login') }}" method="POST"
                                                    class="shogun-form-box">
                                                    @csrf

                                                    {{-- Success / Error Messages --}}
                                                    @if(session('success'))
                                                    <div class="alert alert-success"
                                                        style="text-align:center; margin-bottom:15px;">
                                                        {{ session('success') }}
                                                    </div>
                                                    @endif

                                                    @if(session('error'))
                                                    <div class="alert alert-danger"
                                                        style="text-align:center; margin-bottom:15px; color:red">
                                                        {{ session('error') }}
                                                    </div>
                                                    @endif

                                                    {{-- Validation Errors --}}
                                                    @if($errors->any())
                                                    <div class="alert alert-danger"
                                                        style="text-align:center; margin-bottom:15px;">
                                                        <ul style="list-style:none; padding:0; margin:0; color:red">
                                                            @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                    <div class="shg-c shg-align-left"
                                                        id="s-72436feb-71f7-44b5-a673-44f1930b1f62">
                                                        <div class="shogun-heading-component">
                                                            <h6> Login <br></h6>
                                                        </div>
                                                    </div>

                                                    <div class="shg-c" id="s-dc9ea0ca-7c9c-4c28-9b70-2fff5973c5b9">
                                                        <div data-field-type="text" class="shogun-form-text-input">
                                                            <label class="shogun-form-label">Email*</label>
                                                            <input required="true" type="text" placeholder=""
                                                                name="email"
                                                                class="shogun-form-box-field shogun-form-text-input-field"
                                                                id="input-s-dc9ea0ca-7c9c-4c28-9b70-2fff5973c5b9">
                                                        </div>
                                                    </div>
                                                    <div class="shg-c" id="s-e600608c-eace-4c4c-890c-64634af80229">
                                                        <div data-field-type="email" class="shogun-form-text-input">
                                                            <label class="shogun-form-label">Password*</label>
                                                            <input required="true" type="password" placeholder=""
                                                                name="password"
                                                                class="shogun-form-box-field shogun-form-text-input-field"
                                                                id="input-s-e600608c-eace-4c4c-890c-64634af80229">
                                                        </div>
                                                    </div>
                                                    <div class="shg-c shg-btn-wrapper shg-align-center"
                                                        id="s-281b7ca0-1965-4841-8395-831f9945364a-btn-wrapper"><button
                                                            type="submit" class="shg-btn shg-cse shogun-form-box-submit"
                                                            id="s-281b7ca0-1965-4841-8395-831f9945364a">Sign In
                                                        </button></div>
                                                </form>
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
<script type="text/javascript"
    src="{{ asset('frontend/js/global-assets-fbc1b7763a9df86edf4082364e848f5effb850d3.js') }}" defer></script>
@endsection