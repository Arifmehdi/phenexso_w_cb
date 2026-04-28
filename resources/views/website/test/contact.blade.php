@extends('website.test.test_include.test_app')

@section('title', 'Contact Us - '. env('APP_NAME'))
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
        .contact-section {
            padding: 80px 0;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }
        .contact-info h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .contact-info p {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
        }
        .contact-details {
            margin-top: 30px;
        }
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
        }
        .contact-item svg {
            flex-shrink: 0;
            margin-top: 4px;
        }
        .contact-item h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .contact-item p {
            font-size: 15px;
            margin: 0;
        }
        .contact-form h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 15px;
            font-family: inherit;
            transition: border-color 0.3s;
        }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #f9d175;
        }
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        .map-container {
            margin-top: 60px;
        }
        .map-container iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .page-banner h1 { font-size: 32px; }
            .contact-grid { grid-template-columns: 1fr; }
        }
    </style>
    <section class="page-banner">
        <h1>Contact Us</h1>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>We'd love to hear from you. Our team is ready to answer your questions and help you find the perfect tiles for your project.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#212a2f" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <div>
                                <h4>Phone</h4>
                                <p>{{ $ws->contact_mobile }}</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#212a2f" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <div>
                                <h4>Email</h4>
                                <p>{{ $ws->contact_email }}</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#212a2f" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <div>
                                <h4>Address</h4>
                                <p>{{ $ws->contact_address}}</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#212a2f" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                            <div>
                                <h4>Opening Hours</h4>
                                <p>Saturday to Thursday - 09:00am to 5.00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h2>Send us a Message</h2>
                    <form action="{{ route('contact.store') }}" method="POST" >
                    @csrf
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
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject">
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="products">Product Information</option>
                                <option value="orders">Orders</option>
                                <option value="support">Technical Support</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Send Message</button>
                    </form>
                </div>
            </div>
            
            <div class="map-container">
                <iframe src="{{ $ws->iframe_map }}" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    @endsection