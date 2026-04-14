@extends('website.test.test_include.test_app')

@section('title', 'Test Header')
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
    </style>
    <section class="page-banner">
        <h1>About Us</h1>
    </section>

    <section class="about-content-section">
        <div class="container">
            <h2>Tiles for every home</h2>
            <p>As a family company with decades of tile experience, we believe great design doesn't need to cost the earth. And with over 800 wall and floor tiles to choose from, it's no wonder more than 500,000 customers trust us for their homes.</p>
            <p>Musafir International is Bangladesh's premier manufacturer of premium tiles, parking tiles, hollow blocks, solid bricks, pavers & construction materials. We provide durable, stylish solutions for residential & commercial projects.</p>
            <p>Our commitment to quality has made us a trusted name in the construction industry. We continuously innovate to bring you the best products at competitive prices.</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Quality Products</h3>
                    <p>We ensure every product meets the highest quality standards</p>
                </div>
                <div class="feature-card">
                    <h3>Expert Team</h3>
                    <p>Our experienced team provides professional guidance</p>
                </div>
                <div class="feature-card">
                    <h3>Customer First</h3>
                    <p>We prioritize customer satisfaction in everything we do</p>
                </div>
            </div>
        </div>
    </section>
@endsection