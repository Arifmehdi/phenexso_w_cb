@extends('website.test.test_include.test_app')

@section('title', 'Test Header')
@section('meta_description', 'This is a test header page for Musafir International.')
@section('meta_keywords', 'test header, Musafir International, tile manufacturer')
@section('content')

    <style>
        .checkout-page {
            padding: 40px 0;
            background: #f8f9fa;
        }
        
        .checkout-header {
            margin-bottom: 40px;
        }
        
        .checkout-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #212a2f;
            margin-bottom: 10px;
        }
        
        .checkout-steps {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .step {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #888;
        }
        
        .step.active {
            color: #e8362a;
            font-weight: 600;
        }
        
        .step.completed {
            color: #27ae60;
        }
        
        .step-number {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #e5e5e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 600;
        }
        
        .step.active .step-number {
            background: #e8362a;
            color: #fff;
        }
        
        .step.completed .step-number {
            background: #27ae60;
            color: #fff;
        }
        
        .step-line {
            width: 60px;
            height: 2px;
            background: #e5e5e5;
        }
        
        .step.completed + .step-line {
            background: #27ae60;
        }
        
        .checkout-layout {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 40px;
        }
        
        .checkout-form {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .form-section {
            margin-bottom: 35px;
        }
        
        .form-section:last-child {
            margin-bottom: 0;
        }
        
        .form-section h2 {
            font-size: 20px;
            font-weight: 600;
            color: #212a2f;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .form-row.full-width {
            grid-template-columns: 1fr;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #212a2f;
            margin-bottom: 8px;
        }
        
        .form-group label span {
            color: #e8362a;
        }
        
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            font-size: 14px;
            color: #212a2f;
            transition: all 0.3s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #e8362a;
            box-shadow: 0 0 0 3px rgba(232, 54, 42, 0.1);
        }
        
        .form-input::placeholder {
            color: #aaa;
        }
        
        .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            font-size: 14px;
            color: #212a2f;
            background: #fff;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23666' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
        }
        
        .form-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            cursor: pointer;
        }
        
        .form-checkbox input {
            width: 20px;
            height: 20px;
            accent-color: #e8362a;
            margin-top: 2px;
        }
        
        .form-checkbox span {
            font-size: 14px;
            color: #555;
            line-height: 1.5;
        }
        
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .payment-option {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 20px;
            border: 2px solid #e5e5e5;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .payment-option:hover {
            border-color: #ccc;
        }
        
        .payment-option.active {
            border-color: #e8362a;
            background: #fff9f9;
        }
        
        .payment-option input {
            accent-color: #e8362a;
        }
        
        .payment-icon {
            width: 50px;
            height: 35px;
            background: #f8f9fa;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .payment-info h4 {
            font-size: 15px;
            font-weight: 600;
            color: #212a2f;
            margin-bottom: 3px;
        }
        
        .payment-info p {
            font-size: 13px;
            color: #888;
        }
        
        .order-summary {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            height: fit-content;
            position: sticky;
            top: 20px;
        }
        
        .order-summary h2 {
            font-size: 20px;
            font-weight: 600;
            color: #212a2f;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .cart-items {
            margin-bottom: 25px;
        }
        
        .cart-item {
            display: flex;
            gap: 15px;
            padding-bottom: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .cart-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .cart-item-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }
        
        .cart-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .cart-item-details {
            flex: 1;
        }
        
        .cart-item-title {
            font-size: 14px;
            font-weight: 600;
            color: #212a2f;
            margin-bottom: 5px;
        }
        
        .cart-item-variant {
            font-size: 13px;
            color: #888;
            margin-bottom: 8px;
        }
        
        .cart-item-price {
            font-size: 15px;
            font-weight: 600;
            color: #212a2f;
        }
        
        .cart-item-qty {
            font-size: 13px;
            color: #888;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 14px;
        }
        
        .summary-row.subtotal {
            font-size: 16px;
            font-weight: 600;
            color: #212a2f;
            padding-top: 15px;
            margin-top: 15px;
            border-top: 1px solid #e5e5e5;
        }
        
        .summary-row.total {
            font-size: 20px;
            font-weight: 700;
            color: #212a2f;
            padding-top: 15px;
            margin-top: 15px;
            border-top: 1px solid #e5e5e5;
        }
        
        .summary-row.total span:last-child {
            color: #e8362a;
        }
        
        .place-order-btn {
            width: 100%;
            padding: 16px;
            background: #212a2f;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 20px;
        }
        
        .place-order-btn:hover {
            background: #e8362a;
        }
        
        .secure-checkout {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
            font-size: 13px;
            color: #888;
        }
        
        .secure-checkout svg {
            width: 16px;
            height: 16px;
        }
        
        .promo-code {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e5e5e5;
        }
        
        .promo-form {
            display: flex;
            gap: 10px;
        }
        
        .promo-form input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            font-size: 14px;
        }
        
        .promo-form button {
            padding: 10px 20px;
            background: #212a2f;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .promo-form button:hover {
            background: #e8362a;
        }
        
        .empty-cart-message {
            text-align: center;
            padding: 60px 20px;
        }
        
        .empty-cart-message svg {
            width: 80px;
            height: 80px;
            color: #ccc;
            margin-bottom: 20px;
        }
        
        .empty-cart-message h3 {
            font-size: 20px;
            font-weight: 600;
            color: #212a2f;
            margin-bottom: 10px;
        }
        
        .empty-cart-message p {
            font-size: 14px;
            color: #888;
            margin-bottom: 25px;
        }
        
        .empty-cart-message a {
            display: inline-block;
            padding: 12px 30px;
            background: #e8362a;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: background 0.3s;
        }
        
        .empty-cart-message a:hover {
            background: #212a2f;
        }
        
        @media (max-width: 991px) {
            .checkout-layout {
                grid-template-columns: 1fr;
            }
            
            .order-summary {
                position: static;
                order: -1;
            }
        }
        
        @media (max-width: 767px) {
            .checkout-header h1 {
                font-size: 26px;
            }
            
            .checkout-steps {
                flex-wrap: wrap;
            }
            
            .step-line {
                display: none;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .checkout-form,
            .order-summary {
                padding: 20px;
            }
            
            .cart-item {
                flex-direction: column;
            }
            
            .cart-item-image {
                width: 100%;
                height: 150px;
            }
        }
    </style>
    <!-- Checkout Page -->
    <main class="checkout-page">
        <div class="container">
            <div class="checkout-header">
                <h1>Checkout</h1>
                <div class="checkout-steps">
                    <div class="step completed">
                        <span class="step-number">1</span>
                        <span>Cart</span>
                    </div>
                    <div class="step-line"></div>
                    <div class="step active">
                        <span class="step-number">2</span>
                        <span>Details</span>
                    </div>
                    <div class="step-line"></div>
                    <div class="step">
                        <span class="step-number">3</span>
                        <span>Payment</span>
                    </div>
                </div>
            </div>
            
            <div class="checkout-layout">
                <!-- Checkout Form -->
                <div class="checkout-form">
                    <form id="checkoutForm">
                        <!-- Contact Information -->
                        <div class="form-section">
                            <h2>Contact Information</h2>
                            <div class="form-group">
                                <label>Email Address <span>*</span></label>
                                <input type="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number <span>*</span></label>
                                <input type="tel" class="form-input" placeholder="+880 1XXXXXXXXX" required>
                            </div>
                            <label class="form-checkbox">
                                <input type="checkbox">
                                <span>Keep me updated with news and offers</span>
                            </label>
                        </div>
                        
                        <!-- Shipping Address -->
                        <div class="form-section">
                            <h2>Shipping Address</h2>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>First Name <span>*</span></label>
                                    <input type="text" class="form-input" placeholder="First name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name <span>*</span></label>
                                    <input type="text" class="form-input" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Company Name (Optional)</label>
                                <input type="text" class="form-input" placeholder="Company name">
                            </div>
                            <div class="form-group">
                                <label>Address <span>*</span></label>
                                <input type="text" class="form-input" placeholder="Street address" required>
                            </div>
                            <div class="form-group">
                                <label>Apartment, suite, etc. (Optional)</label>
                                <input type="text" class="form-input" placeholder="Apartment, suite, unit, etc.">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>City <span>*</span></label>
                                    <input type="text" class="form-input" placeholder="City" required>
                                </div>
                                <div class="form-group">
                                    <label>Post Code <span>*</span></label>
                                    <input type="text" class="form-input" placeholder="Post code" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Country <span>*</span></label>
                                <select class="form-select" required>
                                    <option value="">Select country</option>
                                    <option value="BD" selected>Bangladesh</option>
                                    <option value="IN">India</option>
                                    <option value="NP">Nepal</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="SG">Singapore</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Billing Address -->
                        <div class="form-section">
                            <h2>Billing Address</h2>
                            <label class="form-checkbox">
                                <input type="checkbox" id="sameAsShipping" checked onchange="toggleBillingAddress()">
                                <span>Same as shipping address</span>
                            </label>
                            
                            <div id="billingAddressFields" style="display: none; margin-top: 20px;">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" class="form-input" placeholder="First name">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name <span>*</span></label>
                                        <input type="text" class="form-input" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address <span>*</span></label>
                                    <input type="text" class="form-input" placeholder="Street address">
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>City <span>*</span></label>
                                        <input type="text" class="form-input" placeholder="City">
                                    </div>
                                    <div class="form-group">
                                        <label>Post Code <span>*</span></label>
                                        <input type="text" class="form-input" placeholder="Post code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Delivery Options -->
                        <div class="form-section">
                            <h2>Delivery Options</h2>
                            <div class="payment-methods">
                                <label class="payment-option active">
                                    <input type="radio" name="delivery" value="standard" checked>
                                    <div class="payment-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="1" y="3" width="15" height="13"/>
                                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                                            <circle cx="5.5" cy="18.5" r="2.5"/>
                                            <circle cx="18.5" cy="18.5" r="2.5"/>
                                        </svg>
                                    </div>
                                    <div class="payment-info">
                                        <h4>Standard Delivery</h4>
                                        <p>5-7 business days - Free over £500</p>
                                    </div>
                                </label>
                                <label class="payment-option">
                                    <input type="radio" name="delivery" value="express">
                                    <div class="payment-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                                        </svg>
                                    </div>
                                    <div class="payment-info">
                                        <h4>Express Delivery</h4>
                                        <p>2-3 business days - £40</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Payment Method -->
                        <div class="form-section">
                            <h2>Payment Method</h2>
                            <div class="payment-methods">
                                <label class="payment-option active">
                                    <input type="radio" name="payment" value="cod" checked>
                                    <div class="payment-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                                            <line x1="1" y1="10" x2="23" y2="10"/>
                                        </svg>
                                    </div>
                                    <div class="payment-info">
                                        <h4>Cash on Delivery</h4>
                                        <p>Pay when you receive your order</p>
                                    </div>
                                </label>
                                <label class="payment-option">
                                    <input type="radio" name="payment" value="card">
                                    <div class="payment-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                                            <line x1="1" y1="10" x2="23" y2="10"/>
                                        </svg>
                                    </div>
                                    <div class="payment-info">
                                        <h4>Credit/Debit Card</h4>
                                        <p>Pay with Visa, Mastercard, bKash, Nagad</p>
                                    </div>
                                </label>
                                <label class="payment-option">
                                    <input type="radio" name="payment" value="bank">
                                    <div class="payment-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <line x1="12" y1="1" x2="12" y2="23"/>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                                        </svg>
                                    </div>
                                    <div class="payment-info">
                                        <h4>Bank Transfer</h4>
                                        <p>Direct bank transfer</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Order Summary -->
                <aside class="order-summary">
                    <h2>Order Summary</h2>
                    
                    <div class="cart-items">
                        <div class="cart-item">
                            <div class="cart-item-image">
                                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=200&h=200&fit=crop" alt="Pantheon Ivory Tile">
                            </div>
                            <div class="cart-item-details">
                                <h3 class="cart-item-title">Pantheon Ivory Tile</h3>
                                <p class="cart-item-variant">32 x 62.5 cm - Ivory</p>
                                <p class="cart-item-qty">Qty: 2</p>
                                <p class="cart-item-price">£85.00</p>
                            </div>
                        </div>
                        
                        <div class="cart-item">
                            <div class="cart-item-image">
                                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=200&h=200&fit=crop" alt="Heritage Star Blue">
                            </div>
                            <div class="cart-item-details">
                                <h3 class="cart-item-title">Heritage Star Blue</h3>
                                <p class="cart-item-variant">30 x 60 cm - Blue</p>
                                <p class="cart-item-qty">Qty: 1</p>
                                <p class="cart-item-price">£38.00</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>£123.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <div class="summary-row">
                        <span>Tax</span>
                        <span>£0.00</span>
                    </div>
                    <div class="summary-row subtotal">
                        <span>Total</span>
                        <span>£123.00</span>
                    </div>
                    
                    <button type="submit" form="checkoutForm" class="place-order-btn">Place Order</button>
                    
                    <div class="secure-checkout">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                        Secure Checkout - SSL Encrypted
                    </div>
                    
                    <div class="promo-code">
                        <label class="form-group" style="margin-bottom: 10px;">Have a promo code?</label>
                        <div class="promo-form">
                            <input type="text" placeholder="Enter code">
                            <button type="button">Apply</button>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
@endsection