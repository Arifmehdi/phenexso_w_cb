@extends('website.test.test_include.test_app')

@section('title', 'Test Header')
@section('meta_description', 'This is a test header page for City Builders.')
@section('meta_keywords', 'test header, City Builders, tile manufacturer')
@section('content')
<!-- Hero Banner -->
<section class="hero-banner">
    <div class="hero-slide">
        <img src="{{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }}" alt="Tiles">
        <div class="hero-content">
            <h1>{{ $slider->title }}</h1>
            <p>{{ $slider->description }}</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">New In</a>
                <a href="{{ route('shop') }}" class="btn btn-secondary">Shop Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Category Grid -->
<section class="category-section">
    <div class="container">
        <h2 class="section-title">Find your perfect products</h2>
        <div class="category-grid">
            @forelse($categories as $category)
            <a href="{{ route('productCategory', $category->slug) }}" class="category-card">
                <div class="category-img">
                    <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}"
                        alt="{{ $category->name_en }}">
                </div>
                <h3>  
                    @if(app()->getLocale() == 'bn')
                        {{ $category->name_bn }}
                    @else
                        {{ $category->name_en }}
                    @endif 
                </h3>
                <span class="shop-link">Shop now</span>
            </a>
            @empty
            <p>No categories found.</p>
            @endforelse

            <!-- <a href="#" class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&h=400&fit=crop"
                        alt="Kitchen Tiles">
                </div>
                <h3>Kitchen Tiles</h3>
                <span class="shop-link">Shop now</span>
            </a>
            <a href="#" class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=400&h=400&fit=crop"
                        alt="Wall Tiles">
                </div>
                <h3>Wall Tiles</h3>
                <span class="shop-link">Shop now</span>
            </a>
            <a href="#" class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=400&h=400&fit=crop"
                        alt="Floor Tiles">
                </div>
                <h3>Floor Tiles</h3>
                <span class="shop-link">Shop now</span>
            </a>
            <a href="#" class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?w=400&h=400&fit=crop"
                        alt="Outdoor Tiles">
                </div>
                <h3>Outdoor Tiles</h3>
                <span class="shop-link">Shop now</span>
            </a>
            <a href="#" class="category-card">
                <div class="category-img">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&h=400&fit=crop"
                        alt="Wood Effects">
                </div>
                <h3>Wood Effects</h3>
                <span class="shop-link">Shop now</span>
            </a> -->
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="about-wrapper">
            <div class="about-content">
                <h2>Tiles for every home</h2>
                <p>As a family company with decades of tile experience, we believe great design doesn't need to cost the
                    earth. And with over 800 wall and floor tiles to choose from, it's no wonder more than 500,000
                    customers trust us for their homes.</p>
                <a href="{{ route('test_about') }}" class="btn btn-dark">About Us</a>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=600&h=600&fit=crop"
                    alt="Tiles">
            </div>
        </div>
    </div>
</section>




<!-- Stats Strip -->
<section style="background: #E81D23; padding: 40px 0;">
    <div class="container">
        <div style="display:grid; grid-template-columns: repeat(4,1fr); gap: 20px; text-align: center;">
            <div>
                <div style="font-size:40px; font-weight:800; color:#fff;">800+</div>
                <div style="font-size:14px; color:rgba(255,255,255,0.85); margin-top:4px; font-weight:500;">Products
                    Available</div>
            </div>
            <div>
                <div style="font-size:40px; font-weight:800; color:#fff;">500K+</div>
                <div style="font-size:14px; color:rgba(255,255,255,0.85); margin-top:4px; font-weight:500;">Happy
                    Customers</div>
            </div>
            <div>
                <div style="font-size:40px; font-weight:800; color:#fff;">25+</div>
                <div style="font-size:14px; color:rgba(255,255,255,0.85); margin-top:4px; font-weight:500;">Years
                    Experience</div>
            </div>
            <div>
                <div style="font-size:40px; font-weight:800; color:#fff;">100%</div>
                <div style="font-size:14px; color:rgba(255,255,255,0.85); margin-top:4px; font-weight:500;">Quality
                    Guaranteed</div>
            </div>
        </div>
    </div>
</section>

<!-- Logo Slider / Brand Marquee -->
<section class="logo-slider-section">
    <div class="container">
        <h3 class="section-title">As Seen In</h3>
        <div class="logo-slider">
            <div class="logo-track">
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Times"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Living"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Times"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Living"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Times"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Living"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Times"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Living"></div>
            </div>
            <div class="logo-track">
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Living"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Times"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Living"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Times"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Living"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Times"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Living"></div>
                <div class="logo-item"><img src="{{ asset('frontend/assets/img/tc.jpg.jpeg') }}" alt="Times"></div>
            </div>
        </div>
    </div>
</section>


<!-- Products Slider -->
<section class="products-section">
    <div class="container">
        <div class="section-header">
            <h2>Our most loved Products</h2>
            <a href="#" class="view-all">View All</a>
        </div>
        <div class="products-slider">
            @forelse($products as $product)
            <a href="{{ route('productDetails', $product->slug) }}">
            <div class="product-card">
                <!-- <div class="product-badge">Bestseller</div> -->
                <div class="product-image">
                    <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}"
                        alt="{{ $product->name_en }}">
                    <img class="hover-img"
                        src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}"
                        alt="{{ $product->name_en }}">
                </div>
                <div class="product-info">
                    <h3>                    
                        @if(app()->getLocale() == 'bn')
                        {{ $product->name_bn }}
                        @else
                        {{ $product->name_en }}
                        @endif
                    </h3>
                    <!-- <p class="size">32 x 62.5 cm</p> -->
                    {{-- <p class="price">৳{{ $product->final_price }} / m²</p> --}}
                    <p class="price">৳{{ $product->final_price }} </p>
                </div>
            </div>
            </a>
            @empty 
            <p>No products found.</p>
            @endforelse
            {{--<div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=400&fit=crop"
                        alt="Product">
                    <img class="hover-img"
                        src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?w=400&h=400&fit=crop"
                        alt="Product">
                </div>
                <div class="product-info">
                    <h3>Heritage Star Blue</h3>
                    <p class="size">30 x 60 cm</p>
                    <p class="price">£38.00 / m²</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=400&h=400&fit=crop"
                        alt="Product">
                    <img class="hover-img"
                        src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=400&h=400&fit=crop"
                        alt="Product">
                </div>
                <div class="product-info">
                    <h3>Signature Velar</h3>
                    <p class="size">60 x 60 cm</p>
                    <p class="price">£45.00 / m²</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&h=400&fit=crop"
                        alt="Product">
                    <img class="hover-img"
                        src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=400&h=400&fit=crop"
                        alt="Product">
                </div>
                <div class="product-info">
                    <h3>Loft Greige</h3>
                    <p class="size">20 x 120 cm</p>
                    <p class="price">£52.00 / m²</p>
                </div>
            </div>--}}
        </div>
    </div>
</section>



<style>

</style>
{{--<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title">Our Client Reviews</h2>

        <div class="testimonial-slider">
            <div class="testimonial-track">
                @forelse($testimonials as $testimonial)
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">
                        "@if(app()->getLocale() == 'bn')
                        {!! $testimonial->text_bn !!}
                        @else
                        {!! $testimonial->text_en !!}
                        @endif"
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MR</div>
                        <div class="author-info">
                            <h4>{{ $testimonial->name }}</h4>
                            <span>{{ $testimonial->company }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <p>No testimonials found.</p>
                @endforelse

                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">
                        "Best tile showroom! Great variety and knowledgeable staff."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">SK</div>
                        <div class="author-info">
                            <h4>Sarah Khan</h4>
                            <span>Chittagong, Bangladesh</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">
                        "Very satisfied with the quality. Will definitely come back again."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AH</div>
                        <div class="author-info">
                            <h4>Ahmed Hasan</h4>
                            <span>Sylhet, Bangladesh</span>
                        </div>
                    </div>
                </div>

                <!-- Duplicate for smooth loop -->
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <p class="testimonial-text">
                        "Excellent quality tiles! The delivery was on time and the team was very helpful."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MR</div>
                        <div class="author-info">
                            <h4>Md. Rahim</h4>
                            <span>Dhaka, Bangladesh</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>--}}
@endsection