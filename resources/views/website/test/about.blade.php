@extends('website.test.test_include.test_app')

@section('title', 'About Us - '. env('APP_NAME'))
@section('meta_description', 'This is a test header page for Musafir International.')
@section('meta_keywords', 'test header, Musafir International, tile manufacturer')
@section('content')

    <style>
        .page-banner {
            position: relative;
            height: 300px;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1920&h=400&fit=crop');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .page-banner h1 {
            color: #fff;
            font-size: 48px;
            font-weight: 700;
        }
        .about-content-section {
            padding: 80px 0;
        }
        .about-content-section .container {
            max-width: 900px;
        }
        .about-content-section h2 {
            font-size: 32px;
            margin-bottom: 24px;
        }
        .about-content-section p {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }
        .feature-card {
            text-align: center;
            padding: 30px;
            background: #f9f9f9;
            border-radius: 10px;
        }
        .feature-card h3 {
            font-size: 20px;
            margin-bottom: 12px;
        }
        .feature-card p {
            font-size: 14px;
            color: #666;
        }
        @media (max-width: 768px) {
            .page-banner h1 { font-size: 32px; }
            .features-grid { grid-template-columns: 1fr; }
        }

        /* Team Section Styles */
        .team-section {
            padding: 80px 0;
            background-color: #fcfcfc;
        }
        .team-section h2 {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 60px;
            position: relative;
            color: #333;
        }
        .team-section h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #ee3124, #f7941d);
            border-radius: 2px;
        }
        .team-grid {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .team-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            width: 380px;
            text-align: center;
            border: 1px solid #eee;
        }
        .team-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }
        .team-image-wrapper {
            width: 100%;
            height: 450px;
            overflow: hidden;
            position: relative;
        }
        .team-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .team-card:hover .team-image-wrapper img {
            transform: scale(1.08);
        }
        .team-info {
            padding: 30px 20px;
            background: #fff;
        }
        .team-info h3 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #222;
            text-transform: uppercase;
        }
        .team-info .designation {
            color: #ee3124;
            font-weight: 600;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 5px;
            display: block;
        }
        .team-info .company {
            color: #666;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 0;
            line-height: 1.4;
        }
        @media (max-width: 768px) {
            .team-card { width: 100%; max-width: 400px; }
            .team-image-wrapper { height: 400px; }
            .team-section h2 { font-size: 28px; }
        }
    </style>
    <section class="page-banner">
        <h1>About Us</h1>
    </section>

    <section class="about-content-section">
        <div class="container">
            @if(app()->getLocale() == 'en')
                {!! $ws->about_en !!}
            @else
                {!! $ws->about_bn !!}
            @endif
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h2>Our Leadership</h2>
            <div class="team-grid">
                @foreach($teamMembers as $member)
                <!-- Team Member -->
                <div class="team-card">
                    <div class="team-image-wrapper">
                        <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $member->fiName()]) }}" alt="{{ $member->name }}">
                    </div>
                    <div class="team-info">
                        <h3>{{ $member->name }}</h3>
                        <span class="designation">{{ $member->designation }}</span>
                        @if($member->company)
                        <p class="company">{{ $member->company }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection