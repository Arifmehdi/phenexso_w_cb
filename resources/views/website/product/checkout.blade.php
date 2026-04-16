@extends('website.test.test_include.test_app')

@section('title', 'Checkout - '.env('APP_NAME'))

@push('styles')
<style>
    /* 
       IMPORTANT: Using !important on layout-critical styles to ensure 
       they show up even if the base layout has strong resets.
    */
    #cb-checkout-wrapper {
        padding: 60px 0 !important;
        background-color: #fbf7f3 !important;
        min-height: 80vh !important;
        display: block !important;
        width: 100% !important;
    }

    .cb-container {
        max-width: 1200px !important;
        margin: 0 auto !important;
        padding: 0 15px !important;
    }

    .cb-row {
        display: flex !important;
        flex-wrap: wrap !important;
        margin: 0 -15px !important;
    }

    .cb-col-7 {
        flex: 0 0 58.333333% !important;
        max-width: 58.333333% !important;
        padding: 0 15px !important;
    }

    .cb-col-5 {
        flex: 0 0 41.666667% !important;
        max-width: 41.666667% !important;
        padding: 0 15px !important;
    }

    @media (max-width: 991px) {
        .cb-col-7, .cb-col-5 {
            flex: 0 0 100% !important;
            max-width: 100% !important;
        }
    }

    .cb-card {
        background: #ffffff !important;
        border: 1px solid #e5e5e5 !important;
        border-radius: 12px !important;
        margin-bottom: 30px !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05) !important;
        overflow: hidden !important;
    }

    .cb-card-header {
        background: #212a2f !important;
        color: #ffffff !important;
        padding: 18px 25px !important;
        font-weight: 600 !important;
        font-size: 18px !important;
        display: flex !important;
        align-items: center !important;
        gap: 12px !important;
    }

    /* .cb-card-body {
        padding: 30px !important;
    } */

    /* Form Styling */
    .cb-form-group {
        margin-bottom: 20px !important;
    }

    .cb-label {
        display: block !important;
        font-size: 14px !important;
        font-weight: 500 !important;
        margin-bottom: 8px !important;
        color: #444 !important;
    }

    .cb-input, .cb-select, .cb-textarea {
        width: 100% !important;
        height: 48px !important;
        padding: 10px 15px !important;
        border: 1px solid #ddd !important;
        border-radius: 8px !important;
        font-size: 14px !important;
        background: #fff !important;
        transition: all 0.3s !important;
        box-sizing: border-box !important;
        display: block !important;
    }

    .cb-textarea {
        height: auto !important;
    }

    .cb-input:focus, .cb-select:focus {
        border-color: #e8362a !important;
        outline: none !important;
        box-shadow: 0 0 0 3px rgba(232, 54, 42, 0.1) !important;
    }

    /* Payment List */
    .cb-payment-list {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .cb-payment-item {
        border: 1px solid #eee !important;
        border-radius: 10px !important;
        margin-bottom: 12px !important;
        cursor: pointer !important;
        transition: all 0.3s !important;
    }

    .cb-payment-item:hover {
        border-color: #e8362a !important;
    }

    .cb-payment-item.active {
        border-color: #e8362a !important;
        background-color: #fff9f9 !important;
    }

    .cb-payment-label {
        padding: 15px 20px !important;
        display: flex !important;
        align-items: center !important;
        gap: 12px !important;
        font-weight: 600 !important;
        width: 100% !important;
        cursor: pointer !important;
    }

    .cb-payment-info {
        padding: 0 20px 15px 48px !important;
        font-size: 13px !important;
        color: #777 !important;
        display: none !important;
    }

    .cb-payment-item.active .cb-payment-info {
        display: block !important;
    }

    /* Summary Specifics */
    .cb-summary-line {
        display: flex !important;
        justify-content: space-between !important;
        margin-bottom: 12px !important;
        font-size: 15px !important;
    }

    .cb-summary-total {
        border-top: 2px solid #eee !important;
        margin-top: 15px !important;
        padding-top: 15px !important;
        font-weight: 700 !important;
        font-size: 20px !important;
        color: #e8362a !important;
    }

    /* Primary Button */
    .cb-btn-main {
        background: #e8362a !important;
        color: #fff !important;
        border: none !important;
        width: 100% !important;
        padding: 16px !important;
        border-radius: 10px !important;
        font-size: 16px !important;
        font-weight: 700 !important;
        cursor: pointer !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        transition: background 0.3s !important;
        margin-top: 20px !important;
    }

    .cb-btn-main:hover:not(:disabled) {
        background: #d12e23 !important;
    }

    .cb-btn-main:disabled {
        background: #ccc !important;
        cursor: not-allowed !important;
    }

    /* Utilities */
    .text-red { color: #e8362a !important; }
    .mt-30 { margin-top: 30px !important; }
    .sticky-side {
        position: sticky !important;
        top: 100px !important;
    }

    /* Fix for "Your Order" broken layout (Bootstrap classes used in partial) */
    .cart-action-wrapper table {
        width: 100% !important;
        border-collapse: collapse !important;
        margin-bottom: 0 !important;
    }

    .cart-action-wrapper th {
        background: #f8f9fa !important;
        padding: 12px 10px !important;
        text-align: left !important;
        font-size: 13px !important;
        color: #212a2f !important;
        border-bottom: 2px solid #eee !important;
    }

    .cart-action-wrapper td {
        padding: 15px 10px !important;
        border-bottom: 1px solid #eee !important;
        vertical-align: middle !important;
        font-size: 14px !important;
    }

    .cart-action-wrapper .img-thumbnail {
        border-radius: 6px !important;
        border: 1px solid #eee !important;
        padding: 2px !important;
    }

    .cart-action-wrapper .btn-sm {
        padding: 4px 8px !important;
        font-size: 12px !important;
        border-radius: 4px !important;
        cursor: pointer !important;
    }

    .cart-action-wrapper .btn-danger {
        background: #ff4d4d !important;
        color: #fff !important;
        border: none !important;
    }

    .cart-action-wrapper .btn-dark {
        background: #212a2f !important;
        color: #fff !important;
        border: none !important;
    }

    /* Bootstrap-like Utility Shims for the partial */
    .d-flex { display: flex !important; }
    .align-items-center { align-items: center !important; }
    .justify-content-between { justify-content: space-between !important; }
    .gap-2 { gap: 8px !important; }
    .text-white { color: #fff !important; }
    .text-success { color: #28a745 !important; }
    .text-danger { color: #e8362a !important; }
    .text-primary { color: #007bff !important; }
    .text-muted { color: #6c757d !important; }
    .text-end { text-align: right !important; }
    .text-center { text-align: center !important; }
    .fw-bold { font-weight: 700 !important; }
    .fw-semibold { font-weight: 600 !important; }
    .p-3 { padding: 16px !important; }
    .py-2 { padding-top: 8px !important; padding-bottom: 8px !important; }
    .px-3 { padding-left: 16px !important; padding-right: 16px !important; }
    .mb-0 { margin-bottom: 0 !important; }
    .mb-3 { margin-bottom: 16px !important; }
    .mt-2 { margin-top: 8px !important; }
    .bg-dark { background-color: #212a2f !important; }
    .bg-white { background-color: #fff !important; }
    .border-top { border-top: 1px solid #dee2e6 !important; }
    .rounded { border-radius: 8px !important; }
    .ms-2 { margin-left: 8px !important; }
    .badge {
        display: inline-block !important;
        padding: 4px 8px !important;
        border-radius: 4px !important;
        font-size: 12px !important;
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
        <h1 style="margin-bottom: 40px; font-weight: 800; font-size: 36px;">{{ __('Complete Your Order') }}</h1>

        @if($cartItems->isEmpty())
            <div class="cb-card">
                <div class="cb-card-body" style="text-align: center; padding: 80px 20px;">
                    <h2 style="margin-bottom: 20px;">Your cart is empty</h2>
                    <p style="color: #666; margin-bottom: 30px;">Add some products to your cart before checking out.</p>
                    <a href="{{ route('shop') }}" class="cb-btn-main" style="display: inline-block; width: auto; text-decoration: none; padding: 15px 40px;">Return to Shop</a>
                </div>
            </div>
        @else
            <div class="cb-row">
                <!-- Left Side: Forms -->
                <div class="cb-col-7">
                    <!-- Delivery Info -->
                    <div class="cb-card">
                        <div class="cb-card-header">
                            <i class="fas fa-truck"></i> {{ __('Shipping Information') }}
                        </div>
                        <div class="cb-card-body">
                            <form id="shipping-info-form">
                                <div class="cb-row">
                                    <div class="cb-col-7" style="flex: 0 0 50%; max-width: 50%;">
                                        <div class="cb-form-group">
                                            <label class="cb-label">{{ __('Full Name') }} *</label>
                                            <input type="text" class="cb-input" id="name" value="{{ $location ? $location->name : ($user ? $user->name : '') }}" required>
                                        </div>
                                    </div>
                                    <div class="cb-col-5" style="flex: 0 0 50%; max-width: 50%;">
                                        <div class="cb-form-group">
                                            <label class="cb-label">{{ __('Email Address') }} *</label>
                                            <input type="email" class="cb-input" id="email" value="{{ $location ? $location->email : ($user ? $user->email : '') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="cb-row">
                                    <div class="cb-col-7" style="flex: 0 0 50%; max-width: 50%;">
                                        <div class="cb-form-group">
                                            <label class="cb-label">{{ __('Phone Number') }} *</label>
                                            <input type="tel" class="cb-input" id="mobile" value="{{ $location ? $location->mobile : ($user ? $user->mobile : '') }}" placeholder="01XXXXXXXXX" required>
                                        </div>
                                    </div>
                                    <div class="cb-col-5" style="flex: 0 0 50%; max-width: 50%;">
                                        <div class="cb-form-group">
                                            <label class="cb-label">{{ __('District') }} *</label>
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
                                </div>

                                <div class="cb-form-group">
                                    <label class="cb-label">{{ __('Thana / Area') }} *</label>
                                    <select class="cb-select" id="thana" required>
                                        <option selected disabled value="">{{ __('Select District First') }}</option>
                                    </select>
                                </div>

                                <div class="cb-form-group">
                                    <label class="cb-label">{{ __('Full Street Address') }} *</label>
                                    <textarea class="cb-textarea" id="address" rows="3" required placeholder="House number, Street name, Landmark...">{{ $location ? $location->address_title : '' }}</textarea>
                                </div>

                                <!-- Dynamic Shipping Methods Section -->
                                <div id="shipping-method-container" style="display: none; margin-top: 30px; padding: 20px; background: #f8f9fa; border-radius: 10px; border: 1px dashed #ddd;">
                                    <h4 style="font-size: 16px; margin-bottom: 15px; font-weight: 700;">{{ __('Select Shipping Method') }}</h4>
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
                            <i class="fas fa-credit-card"></i> {{ __('Payment Method') }}
                        </div>
                        <div class="cb-card-body">
                            <form id="orderForm" method="POST">
                                @csrf
                                <input type="hidden" name="shipping_price" id="shipping_val" value="0">
                                
                                <div class="cb-payment-list">
                                    <div class="cb-payment-item" id="pay-cod-item">
                                        <label class="cb-payment-label">
                                            <input type="radio" name="payment_method" value="cod" class="payment-radio">
                                            <span>{{ __('Cash on Delivery') }}</span>
                                        </label>
                                        <div class="cb-payment-info">
                                            Pay with cash when the products are delivered to your home.
                                        </div>
                                    </div>

                                    <div class="cb-payment-item" id="pay-online-item">
                                        <label class="cb-payment-label">
                                            <input type="radio" name="payment_method" value="online" class="payment-radio">
                                            <span>{{ __('Online Payment (bKash/Card)') }}</span>
                                        </label>
                                        <div class="cb-payment-info">
                                            Securely pay via bKash, Rocket, Cards or Mobile Banking.
                                        </div>
                                    </div>
                                </div>

                                <div class="cb-form-group mt-30">
                                    <label class="cb-label">{{ __('Order Note (Optional)') }}</label>
                                    <textarea name="order_note" class="cb-textarea" rows="2" placeholder="Notes for delivery..."></textarea>
                                </div>

                                <div style="margin-top: 25px;">
                                    <label style="display: flex; gap: 10px; cursor: pointer; font-size: 13px; color: #555;">
                                        <input type="checkbox" id="agree-terms" required style="accent-color: #e8362a; width: 16px; height: 16px;">
                                        <span>I agree to the <a href="{{ route('terms') }}" class="text-red">Terms & Conditions</a> and <a href="{{ route('privacy-policy') }}" class="text-red">Privacy Policy</a>.</span>
                                    </label>
                                </div>

                                <button type="submit" class="cb-btn-main" id="place-order-btn" disabled>
                                    {{ __('Place Order Now') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Order Summary -->
                <div class="cb-col-5">
                    <div class="sticky-side">
                        <div class="cb-card">
                            <div class="cb-card-header">
                                <i class="fas fa-shopping-basket"></i> {{ __('Your Order') }}
                            </div>
                            <div class="cb-card-body" style="padding: 0;">
                                <!-- Reusing your existing cart items include -->
                                @include('frontend.home.includes.checkout-cart-items', ['cartItems' => $cartItems])
                            </div>
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
        item.addEventListener('click', function() {
            paymentItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
            this.querySelector('input').checked = true;
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
                        div.style.marginBottom = '10px';
                        div.innerHTML = `
                            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                <input type="radio" name="ship_opt" value="${m.price}" ${i === 0 ? 'checked' : ''} style="accent-color: #e8362a;">
                                <span style="font-size: 14px;">${m.name}: <strong>${m.price}৳</strong></span>
                            </label>
                        `;
                        list.appendChild(div);
                    });
                    shipContainer.style.display = 'block';
                    document.querySelectorAll('input[name="ship_opt"]').forEach(r => {
                        r.addEventListener('change', calcTotal);
                    });
                    calcTotal();
                }
            });
    }

    function calcTotal() {
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

        for (const [name, val] of Object.entries(mapping)) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            input.value = val;
            orderForm.appendChild(input);
        }

        Swal.fire({
            title: 'Confirm Order',
            text: "Are you sure you want to proceed with this order?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#e8362a',
            cancelButtonColor: '#212a2f',
            confirmButtonText: 'Yes, Place Order'
        }).then((result) => {
            if (result.isConfirmed) {
                orderForm.submit();
            }
        });
    });
});
</script>
@endsection