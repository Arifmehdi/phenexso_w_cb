@extends('website.layouts.master')

@section('title', 'About Us - '. env('APP_NAME'))

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
                    @if(app()->getLocale() == 'en')
                        {!! $ws->about_en !!}
                    @else
                        {!! $ws->about_bn !!}
                    @endif
                </main>
            </div>
        </section>

    </div>
</main>
@endsection

@push('scripts')

@endpush