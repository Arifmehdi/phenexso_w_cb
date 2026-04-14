@extends('website.layouts.master')

@section('title', 'Press - '. env('APP_NAME'))

@section('meta')
<meta name="description"
    content="Learn about Hubli’s mission to transform Bangladesh’s food supply chain and eliminate food wastage with a smart, efficient national network.">
<meta name="keywords" content="Hubli, food hub, supply chain, food wastage, Bangladesh, agriculture">
<meta property="og:title" content="About Us - Hubli">
<meta property="og:description"
    content="Transforming Bangladesh’s food supply chain with smart logistics and technology.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection

@push('styles')

</style>
@endpush

@section('content')
<main role="main" id="MainContent">

    <div id="shopify-section-template--26303100813694__main" class="shopify-section">
        <section class="page-template">





            <div class="container">
                <main class="rte">
                    <h1 class="heading-1 bold">Press Enquiries</h1>
                    <h3>Want to feature our gorgeous tiles? Sounds great!</h3>
                    <meta charset="utf-8">
                    <p>For images, interviews, product loans, projects or partnerships we're here to help.<br><br>Please
                        contact John or Sam at <a href="#">JWC PR</a> by emailing: <a
                            href="mailto:help@musafir.bd.com">help@musafir.bd.com</a> <br> <br>You
                        can also download high resolution images from our <a
                            href="#">Press Loft press
                            office</a>.</p>
                    <p><img src="{{ asset('frontend/resources/rialtof7de.jpg') }}"
                            alt=""></p>
                </main>
            </div>
        </section>

    </div>
</main>

@endsection

@push('scripts')

@endpush