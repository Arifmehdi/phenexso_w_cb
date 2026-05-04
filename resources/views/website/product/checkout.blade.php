@extends('website.test.test_include.test_app')

@section('title', 'Checkout - '.env('APP_NAME'))

@push('styles')
<style>
    :root {
        --cb-primary: #e8362a;
        --cb-primary-hover: #d12e23;
        --cb-bg: #f8fafc;
        --cb-card-bg: #ffffff;
        --cb-text-main: #1e293b;
        --cb-text-muted: #64748b;
        --cb-border: #e2e8f0;
        --cb-radius: 12px;
        --cb-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --cb-shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    #cb-checkout-wrapper {
        padding: 40px 0 80px !important;
        background-color: var(--cb-bg) !important;
        min-height: 100vh !important;
        font-family: 'Poppins', sans-serif !important;
        color: var(--cb-text-main) !important;
    }

    .cb-container {
        max-width: 1140px !important;
        margin: 0 auto !important;
        padding: 0 20px !important;
    }

    .checkout-header {
        margin-bottom: 40px !important;
        text-align: left !important;
    }

    .checkout-header h1 {
        font-weight: 800 !important;
        font-size: 32px !important;
        margin-bottom: 8px !important;
        color: var(--cb-text-main) !important;
    }

    .checkout-header p {
        color: var(--cb-text-muted) !important;
        font-size: 16px !important;
    }

    .cb-row {
        display: flex !important;
        flex-wrap: wrap !important;
        margin: 0 -12px !important;
    }

    .cb-col-left {
        flex: 0 0 58% !important;
        max-width: 58% !important;
        padding: 0 12px !important;
    }

    .cb-col-right {
        flex: 0 0 42% !important;
        max-width: 42% !important;
        padding: 0 12px !important;
    }

    @media (max-width: 991px) {
        .cb-col-left, .cb-col-right {
            flex: 0 0 100% !important;
            max-width: 100% !important;
        }
        .cb-col-right {
            margin-top: 30px !important;
        }
    }

    .cb-card {
        background: var(--cb-card-bg) !important;
        border: 1px solid var(--cb-border) !important;
        border-radius: var(--cb-radius) !important;
        margin-bottom: 24px !important;
        box-shadow: var(--cb-shadow) !important;
        transition: box-shadow 0.3s ease !important;
    }

    .cb-card:hover {
        box-shadow: var(--cb-shadow-lg) !important;
    }

    .cb-card-header {
        padding: 20px 24px !important;
        border-bottom: 1px solid var(--cb-border) !important;
        display: flex !important;
        align-items: center !important;
        gap: 12px !important;
    }

    .cb-card-header h2 {
        font-size: 18px !important;
        font-weight: 700 !important;
        margin: 0 !important;
        color: var(--cb-text-main) !important;
    }

    .cb-card-header i {
        color: var(--cb-primary) !important;
        font-size: 20px !important;
    }

    .cb-card-body {
        padding: 24px !important;
    }

    /* Form Elements */
    .form-grid {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        gap: 20px !important;
    }

    @media (max-width: 575px) {
        .form-grid {
            grid-template-columns: 1fr !important;
        }
    }

    .cb-form-group {
        margin-bottom: 20px !important;
    }

    .cb-label {
        display: block !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        margin-bottom: 8px !important;
        color: var(--cb-text-main) !important;
    }

    .cb-input, .cb-select, .cb-textarea {
        width: 100% !important;
        padding: 12px 16px !important;
        border: 1.5px solid var(--cb-border) !important;
        border-radius: 8px !important;
        font-size: 15px !important;
        background: #fff !important;
        transition: all 0.2s ease !important;
        color: var(--cb-text-main) !important;
    }

    .cb-input:focus, .cb-select:focus, .cb-textarea:focus {
        border-color: var(--cb-primary) !important;
        outline: none !important;
        box-shadow: 0 0 0 4px rgba(232, 54, 42, 0.1) !important;
    }

    /* Payment Methods */
    .payment-options {
        display: grid !important;
        gap: 16px !important;
    }

    .cb-payment-item {
        border: 2px solid var(--cb-border) !important;
        border-radius: var(--cb-radius) !important;
        padding: 20px !important;
        cursor: pointer !important;
        transition: all 0.2s ease !important;
        position: relative !important;
    }

    .cb-payment-item:hover {
        border-color: var(--cb-primary) !important;
        background-color: rgba(232, 54, 42, 0.02) !important;
    }

    .cb-payment-item.active {
        border-color: var(--cb-primary) !important;
        background-color: rgba(232, 54, 42, 0.05) !important;
    }

    .cb-payment-label {
        display: flex !important;
        align-items: center !important;
        gap: 15px !important;
        font-weight: 700 !important;
        font-size: 16px !important;
        margin: 0 !important;
        cursor: pointer !important;
    }

    .cb-payment-label input[type="radio"] {
        accent-color: var(--cb-primary) !important;
        width: 20px !important;
        height: 20px !important;
    }

    .cb-payment-info {
        margin-top: 10px !important;
        padding-left: 35px !important;
        font-size: 14px !important;
        color: var(--cb-text-muted) !important;
        display: none !important;
    }

    .cb-payment-item.active .cb-payment-info {
        display: block !important;
    }

    /* Shipping Method */
    #shipping-method-container {
        margin-top: 24px !important;
        padding: 20px !important;
        background: #f1f5f9 !important;
        border-radius: var(--cb-radius) !important;
        border: 1.5px dashed var(--cb-border) !important;
    }

    .shipping-method-item {
        margin-bottom: 12px !important;
        display: flex !important;
        align-items: center !important;
        gap: 10px !important;
        padding: 10px !important;
        background: #fff !important;
        border-radius: 8px !important;
        border: 1px solid var(--cb-border) !important;
    }

    /* Sticky Sidebar */
    .sticky-sidebar {
        position: sticky !important;
        top: 100px !important;
    }

    /* Buttons */
    .cb-btn-primary {
        background: var(--cb-primary) !important;
        color: #fff !important;
        border: none !important;
        width: 100% !important;
        padding: 18px !important;
        border-radius: var(--cb-radius) !important;
        font-size: 16px !important;
        font-weight: 700 !important;
        cursor: pointer !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 6px rgba(232, 54, 42, 0.2) !important;
    }

    .cb-btn-primary:hover:not(:disabled) {
        background: var(--cb-primary-hover) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 12px rgba(232, 54, 42, 0.3) !important;
    }

    .cb-btn-primary:disabled {
        background: #cbd5e1 !important;
        box-shadow: none !important;
        cursor: not-allowed !important;
    }

    /* Terms */
    .terms-box {
        margin: 20px 0 !important;
        padding: 12px !important;
        border-radius: 8px !important;
        background: rgba(0,0,0,0.02) !important;
    }

    .terms-label {
        display: flex !important;
        gap: 12px !important;
        align-items: flex-start !important;
        font-size: 13px !important;
        line-height: 1.5 !important;
        color: var(--cb-text-muted) !important;
        cursor: pointer !important;
    }

    .terms-label input {
        margin-top: 3px !important;
        accent-color: var(--cb-primary) !important;
    }

    .terms-label a {
        color: var(--cb-primary) !important;
        text-decoration: underline !important;
        font-weight: 600 !important;
    }

    /* Cart Summary Overrides */
    .cart-action-wrapper table {
        border-radius: 8px !important;
        overflow: hidden !important;
    }

    .cart-action-wrapper th {
        background: #f8fafc !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        font-size: 11px !important;
        letter-spacing: 0.05em !important;
    }

    .empty-cart-state {
        text-align: center !important;
        padding: 80px 40px !important;
    }

    .empty-cart-state i {
        font-size: 64px !important;
        color: #e2e8f0 !important;
        margin-bottom: 24px !important;
    }
</style>
@endpush

@section('content')

@php
    $user = Auth::user();
    $location = $user ? $user->locations()->first() : null;
@endphp

<div id="cb-checkout-wrapper">
    <div class="cb-container">
        <div class="checkout-header">
            <h1>{{ __('Checkout') }}</h1>
            <p>{{ __('Please enter your details to complete the purchase.') }}</p>
        </div>

        @if($cartItems->isEmpty())
            <div class="cb-card">
                <div class="cb-card-body">
                    <div class="empty-cart-state">
                        <i class="fas fa-shopping-cart"></i>
                        <h2 style="font-weight: 700; margin-bottom: 12px;">Your cart is currently empty</h2>
                        <p style="color: var(--cb-text-muted); margin-bottom: 30px;">Before you can proceed to checkout, you must add some products to your shopping cart.</p>
                        <a href="{{ route('shop') }}" class="cb-btn-primary" style="display: inline-block; width: auto; text-decoration: none; padding: 15px 40px;">Return to Shop</a>
                    </div>
                </div>
            </div>
        @else
            <div class="cb-row">
                <!-- Left Side: Forms -->
                <div class="cb-col-left">
                    <!-- Delivery Info -->
                    <div class="cb-card">
                        <div class="cb-card-header">
                            <i class="fas fa-shipping-fast"></i>
                            <h2>{{ __('Shipping Information') }}</h2>
                        </div>
                        <div class="cb-card-body">
                            <form id="shipping-info-form">
                                <div class="form-grid">
                                    <div class="cb-form-group">
                                        <label class="cb-label">{{ __('Full Name') }} <span style="color:red">*</span></label>
                                        <input type="text" class="cb-input" id="name" value="{{ $location ? $location->name : ($user ? $user->name : '') }}" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="cb-form-group">
                                        <label class="cb-label">{{ __('Email Address') }} <span style="color:red">*</span></label>
                                        <input type="email" class="cb-input" id="email" value="{{ $location ? $location->email : ($user ? $user->email : '') }}" placeholder="example@domain.com" required>
                                    </div>
                                </div>

                                <div class="form-grid">
                                    <div class="cb-form-group">
                                        <label class="cb-label">{{ __('Phone Number') }} <span style="color:red">*</span></label>
                                        <input type="tel" class="cb-input" id="mobile" value="{{ $location ? $location->mobile : ($user ? $user->mobile : '') }}" placeholder="01XXXXXXXXX" required>
                                    </div>
                                    <div class="cb-form-group">
                                        <label class="cb-label">{{ __('District') }} <span style="color:red">*</span></label>
                                        <select class="cb-select" id="district" required>
                                            <option selected disabled value="">{{ __('Select District') }}</option>
                                            @foreach($districts as $district)
                                                <option value="{{ $district->id }}" {{ ($location && $location->district_id == $district->id) ? 'selected' : '' }}>
                                                    {{ $district->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="cb-form-group">
                                    <label class="cb-label">{{ __('Thana / Area') }} <span style="color:red">*</span></label>
                                    <select class="cb-select" id="thana" required>
                                        <option selected disabled value="">{{ __('Select District First') }}</option>
                                    </select>
                                </div>

                                <div class="cb-form-group" style="margin-bottom: 0;">
                                    <label class="cb-label">{{ __('Full Street Address') }} <span style="color:red">*</span></label>
                                    <textarea class="cb-textarea" id="address" rows="3" required placeholder="Flat/House No, Street name, Landmark...">{{ $location ? $location->address_title : '' }}</textarea>
                                </div>

                                <!-- Dynamic Shipping Methods Section -->
                                <div id="shipping-method-container" style="display: none;">
                                    <h4 style="font-size: 15px; margin-bottom: 15px; font-weight: 700;">{{ __('Choose Shipping Option') }}</h4>
                                    <div id="shipping-method-list">
                                        <!-- Populated via JS -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="cb-card">
                        <div class="cb-card-header">
                            <i class="fas fa-wallet"></i>
                            <h2>{{ __('Payment Method') }}</h2>
                        </div>
                        <div class="cb-card-body">
                            <form id="orderForm" method="POST">
                                @csrf
                                <input type="hidden" name="shipping_price" id="shipping_val" value="0">
                                
                                <div class="payment-options">
                                    <div class="cb-payment-item" id="pay-cod-item">
                                        <label class="cb-payment-label">
                                            <input type="radio" name="payment_method" value="cod" class="payment-radio">
                                            <span class="d-flex align-items-center gap-2">
                                                <i class="fas fa-money-bill-wave text-success"></i>
                                                {{ __('Cash on Delivery') }}
                                            </span>
                                        </label>
                                        <div class="cb-payment-info">
                                            Pay with cash when your order arrives at your doorstep.
                                        </div>
                                    </div>

                                    <div class="cb-payment-item" id="pay-online-item">
                                        <label class="cb-payment-label">
                                            <input type="radio" name="payment_method" value="online" class="payment-radio">
                                            <span class="d-flex align-items-center gap-2">
                                                <i class="fas fa-credit-card text-primary"></i>
                                                {{ __('Online Payment') }}
                                            </span>
                                        </label>
                                        <div class="cb-payment-info">
                                            Pay securely via bKash, Rocket, Cards or other mobile banking methods.
                                        </div>
                                    </div>
                                </div>

                                <div class="cb-form-group" style="margin-top: 24px;">
                                    <label class="cb-label">{{ __('Order Note (Optional)') }}</label>
                                    <textarea name="order_note" class="cb-textarea" rows="2" placeholder="Instructions for delivery..."></textarea>
                                </div>

                                <div class="terms-box">
                                    <label class="terms-label">
                                        <input type="checkbox" id="agree-terms" required>
                                        <span>I have read and agree to the website <a href="{{ route('terms') }}">terms and conditions</a> and <a href="{{ route('privacy-policy') }}">privacy policy</a>.</span>
                                    </label>
                                </div>

                                <button type="submit" class="cb-btn-primary" id="place-order-btn" disabled>
                                    <i class="fas fa-lock me-2"></i> {{ __('Place Order Now') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Order Summary -->
                <div class="cb-col-right">
                    <div class="sticky-sidebar">
                        <div class="cb-card" style="border-top: 4px solid var(--cb-primary);">
                            <div class="cb-card-header" style="background: #fcfcfc;">
                                <i class="fas fa-shopping-bag"></i>
                                <h2>{{ __('Order Summary') }}</h2>
                            </div>
                            <div class="cb-card-body" style="padding: 0;">
                                @include('frontend.home.includes.checkout-cart-items', ['cartItems' => $cartItems])
                            </div>
                        </div>
                        
                        <div style="padding: 0 10px; text-align: center;">
                            <p style="font-size: 13px; color: var(--cb-text-muted);">
                                <i class="fas fa-shield-alt text-success"></i> Secure Checkout Guaranteed
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const districtSelect = document.getElementById('district');
    const thanaSelect = document.getElementById('thana');
    const shipContainer = document.getElementById('shipping-method-container');
    const orderForm = document.getElementById('orderForm');
    const paymentItems = document.querySelectorAll('.cb-payment-item');
    const termsCheck = document.getElementById('agree-terms');
    const placeBtn = document.getElementById('place-order-btn');

    const codUrl = "{{ route('codOrderStore') }}";
    const onlineUrl = "{{ url('order/store') }}";

    // 1. Payment Interaction
    paymentItems.forEach(item => {
        item.addEventListener('click', function(e) {
            // Prevent double trigger if clicking the radio directly
            if (e.target.type !== 'radio') {
                const radio = this.querySelector('input');
                radio.checked = true;
            }
            
            paymentItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
            checkFormValidity();
        });
    });

    if(termsCheck) termsCheck.addEventListener('change', checkFormValidity);

    function checkFormValidity() {
        const hasPayment = document.querySelector('.payment-radio:checked');
        placeBtn.disabled = !(hasPayment && termsCheck.checked);
    }

    // 2. District & Thana Logic
    if (districtSelect) {
        districtSelect.addEventListener('change', function() {
            const dId = this.value;
            loadThanas(dId);
            loadShipping(dId);
        });

        // Load initial if available
        @if($location && $location->district_id)
            loadThanas("{{ $location->district_id }}", "{{ $location->upazila_id }}");
            loadShipping("{{ $location->district_id }}");
        @endif
    }

    function loadThanas(dId, selectedId = null) {
        fetch(`/get-upazilas/${dId}`)
            .then(r => r.json())
            .then(data => {
                thanaSelect.innerHTML = '<option selected disabled value="">{{ __("Select Thana") }}</option>';
                data.forEach(t => {
                    const opt = document.createElement('option');
                    opt.value = t.id;
                    opt.textContent = t.name;
                    if (selectedId && t.id == selectedId) opt.selected = true;
                    thanaSelect.appendChild(opt);
                });
            });
    }

    function loadShipping(dId) {
        fetch(`/get-shipping-methods/${dId}`)
            .then(r => r.json())
            .then(data => {
                const list = document.getElementById('shipping-method-list');
                if (data.length > 0) {
                    list.innerHTML = '';
                    data.forEach((m, i) => {
                        const div = document.createElement('div');
                        div.className = 'shipping-method-item';
                        div.innerHTML = `
                            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; width: 100%; margin: 0;">
                                <input type="radio" name="ship_opt" value="${m.price}" ${i === 0 ? 'checked' : ''} style="accent-color: var(--cb-primary);">
                                <div style="flex-grow: 1;">
                                    <div style="font-weight: 600; font-size: 14px;">${m.name}</div>
                                </div>
                                <div style="font-weight: 700; color: var(--cb-primary);">Tk. ${m.price}</div>
                            </label>
                        `;
                        list.appendChild(div);
                    });
                    shipContainer.style.display = 'block';
                    document.querySelectorAll('input[name="ship_opt"]').forEach(r => {
                        r.addEventListener('change', calcTotal);
                    });
                    calcTotal();
                } else {
                    shipContainer.style.display = 'none';
                    document.getElementById('shipping_val').value = 0;
                    calcTotal();
                }
            });
    }

    function calcTotal() {
        // Elements from the included partial
        const subtotalEl = document.querySelector('.subtotal');
        const discountEl = document.querySelector('.discount');
        const shipDisplay = document.getElementById('shipping-price');
        const totalDisplay = document.querySelector('.payable');

        if (subtotalEl && discountEl && totalDisplay) {
            const sub = parseFloat(subtotalEl.getAttribute('data-value')) || 0;
            const disc = parseFloat(discountEl.getAttribute('data-value')) || 0;
            const selShip = document.querySelector('input[name="ship_opt"]:checked');
            const ship = selShip ? parseFloat(selShip.value) : 0;
            const grandTotal = sub - disc + ship;

            if (shipDisplay) shipDisplay.textContent = `Tk. ${ship.toFixed(2)}`;
            document.getElementById('shipping_val').value = ship;
            totalDisplay.textContent = `Tk. ${grandTotal.toFixed(2)}`;
        }
    }

    // 3. Form Submission
    orderForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const method = document.querySelector('.payment-radio:checked').value;
        orderForm.action = method === 'cod' ? codUrl : onlineUrl;

        // Map visible fields to hidden inputs for backend
        const mapping = {
            'temp_name': document.getElementById('name').value,
            'temp_email': document.getElementById('email').value,
            'temp_mobile': document.getElementById('mobile').value,
            'temp_billing_address': document.getElementById('address').value,
            'temp_district': document.getElementById('district').value,
            'temp_thana': document.getElementById('thana').value
        };

        // Remove old hidden mapping inputs if they exist (to avoid duplicates on multi-submit)
        const oldInputs = orderForm.querySelectorAll('input[name^="temp_"]');
        oldInputs.forEach(input => input.remove());

        for (const [name, val] of Object.entries(mapping)) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            input.value = val;
            orderForm.appendChild(input);
        }

        Swal.fire({
            title: 'Confirm Your Order',
            text: "Would you like to proceed with the purchase?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#e8362a',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Yes, Place Order',
            cancelButtonText: 'Review Order'
        }).then((result) => {
            if (result.isConfirmed) {
                orderForm.submit();
            }
        });
    });
});
</script>
@endsection