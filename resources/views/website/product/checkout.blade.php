@extends('website.layouts.master')
@section('title', 'Checkout -'.env('APP_NAME'))
@push('css')
<style>
    ul {
        list-style: none !important;
    }

    a {
        text-decoration : none !important;
        color : black !important;
        font-weight : 200px !important;
        padding : 0 !important;
        margin : 0 !important;

    }

</style>
@endpush 
@section('content')

@php
    $me = Auth::user();
    if($me){
        $dl = $me->locations()->first();
    }
    else{
        $dl = null;
    }
    $cartTotal = $cart_total ?? $cartItems->sum(fn($item) => $item->price * $item->quantity);
@endphp



<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4"><strong>Checkout</strong></h1>
        </div>
    </div>

    @if($cartItems->isEmpty())
        <p class="text-center text-muted py-5 fs-5">Your cart is empty 🛒</p>
    @else 
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Flash Messages -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    
                    <div class="row">
                        <header class="py-2 px-3 bg-dark" >
                            <h2 class="text-white h5 d-flex align-items-center gap-2 mb-0">
                                <i class="fas fa-shipping-fast"></i> Shipping Address
                            </h2>
                        </header>
                        <div class="col-12 mt-3">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <form id="address-form">
                                        <div class="mb-3">
                                            <label for="billing-name" class="form-label">Name *</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $dl ? $dl->name : (Auth::user() ? Auth::user()->name : '') }}" placeholder="Enter full name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="billing-email" class="form-label">Email *</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $dl ? $dl->email : (Auth::user() ? Auth::user()->email : '') }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="billing-phone" class="form-label">Phone *</label>
                                            <input type="tel" class="form-control" id="mobile" name="mobile" value="{{ $dl ? $dl->mobile : (Auth::user() ? Auth::user()->mobile : '') }}" placeholder="e.g. 01XXXXXXXXX" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="billing-address" class="form-label">Address *</label>
                                            <textarea class="form-control" id="billing-address" name="billing_address" rows="3" placeholder="e.g. Home, Office, Mom's House" required>{{ $dl ? $dl->address_title : old('address_title') }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="district" class="form-label">District *</label>
                                            <select class="form-select" id="district" name="district" required style="font-size: 13px">
                                                <option selected disabled value="">Select a district</option>
                                                @foreach($districts as $district)
                                                    <option value="{{ $district->id }}" 
                                                        @if($dl && $dl->district_id == $district->id) selected 
                                                        @elseif(old('district') == $district->id) selected 
                                                        @endif>
                                                        {{ $district->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="thana" class="form-label">Thana *</label>
                                            <select class="form-select" id="thana" name="thana" required style="font-size: 13px">
                                                <option selected disabled value="">Select a district first</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="col-md-6 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="ship-to-different-address">
                                        <label class="form-check-label" for="ship-to-different-address">
                                            Ship to different address
                                        </label>
                                    </div>
                                    <div id="shipping-details" style="display: none;">
                                        <h5 class="mt-4">Shipping Details</h5>
                                        <form id="shipping-form">
                                            <div class="mb-3">
                                                <label for="shipping-name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="shipping-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="shipping-email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="shipping-email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="shipping-phone" class="form-label">Phone</label>
                                                <input type="tel" class="form-control" id="shipping-phone">
                                            </div>
                                            <div class="mb-3">
                                                <label for="shipping-address" class="form-label">Address</label>
                                                <textarea class="form-control" id="shipping-address" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <!-- Shipping Options Container -->
                                    <div id="shipping-options-container" class="mt-4" style="display: none;">
                                        <h6 class="fw-semibold">Select Shipping Method:</h6>
                                        <div id="shipping-options">
                                            <!-- Shipping options will be loaded here dynamically -->
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <h5>Delivery Time</h5>
                                        <p>Inside Dhaka: 1 day</p>
                                        <p>Outside Dhaka: 2 days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    @include('frontend.home.includes.checkout-cart-items', ['cartItems' => $cartItems])
                </div>
            </div>
        </div>
        
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Payment Method</h5>

                    <!-- ✅ Form should wrap ALL payment methods -->
                    <form id="checkoutForm" method="POST" action="">
                        @csrf
                        <input type="hidden" name="shipping_price" id="hidden-shipping-price" value="0">
                        
                        <div class="accordion" id="payment-accordion">
                            <!-- Direct Cash -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="direct-cash-heading">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#direct-cash-collapse"
                                        aria-expanded="false" aria-controls="direct-cash-collapse">
                                        <div class="form-check">
                                            <input class="form-check-input paymentMethodSelect" type="radio"
                                                value="cod" name="payment_method" id="direct-cash-payment">
                                            <label class="form-check-label" for="direct-cash-payment">
                                                Cash on Delivery
                                            </label>
                                        </div>
                                    </button>
                                </h2>
                                <div id="direct-cash-collapse" class="accordion-collapse collapse"
                                    aria-labelledby="direct-cash-heading" data-bs-parent="#payment-accordion">
                                    <div class="accordion-body">
                                        Pay with cash upon delivery.
                                    </div>
                                </div>
                            </div>

                            <!-- Online Payment -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="online-payment-heading">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#online-payment-collapse"
                                        aria-expanded="false" aria-controls="online-payment-collapse">
                                        <div class="form-check">
                                            <input class="form-check-input paymentMethodSelect" type="radio"
                                                value="online" name="payment_method" id="online-payment">
                                            <label class="form-check-label" for="online-payment">
                                                Online Payment
                                            </label>
                                        </div>
                                    </button>
                                </h2>
                                <div id="online-payment-collapse" class="accordion-collapse collapse"
                                    aria-labelledby="online-payment-heading" data-bs-parent="#payment-accordion">
                                    <div class="accordion-body">
                                        <p class="mt-3">
                                            Make your payment securely through the SurjoPay payment gateway.
                                            You can complete your payment using bKash, card, or other supported methods.
                                            Your order will be processed once the payment is successfully confirmed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Order note -->
                        <div class="mt-4">
                            <label for="order_note" class="form-label">Order Note (Optional)</label>
                            <textarea name="order_note" id="order_note" rows="4" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check mb-3 mt-4">
                            <input class="form-check-input" type="checkbox" id="terms-agreement" required>
                            <label class="form-check-label" for="terms-agreement">
                                By placing your order, you agree to our <a href="{{ route('terms') }}" target="_blank">Terms & Conditions</a>, 
                                <a href="{{ route('return-policy') }}" target="_blank">Return & Refund Policy</a> and 
                                <a href="{{ route('privacy-policy') }}" target="_blank">Privacy Policy</a>.
                            </label>
                        </div>

                        <!-- Proceed Button -->
                        <button class="btn w-100 mt-3 text-white bg-dark" id="proceed-to-pay-button"  disabled>
                            Proceed to Pay
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>


<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">



<script>
document.addEventListener('DOMContentLoaded', () => {
    const checkoutForm = document.getElementById('checkoutForm');
    const paymentRadios = document.querySelectorAll('.paymentMethodSelect');
    const termsCheckbox = document.getElementById('terms-agreement');
    const proceedBtn = document.getElementById('proceed-to-pay-button');
    const shippingToggle = document.getElementById('ship-to-different-address');
    const shippingDetails = document.getElementById('shipping-details');
    
    const districtSelect = document.getElementById('district');
    const thanaSelect = document.getElementById('thana');
    const shippingOptionsContainer = document.getElementById('shipping-options-container');

    const codRoute = "{{ route('codOrderStore') }}";
    const onlineRoute = "{{ url('order/store') }}";

    // Function to toggle proceed button
    function toggleProceedButton() {
        const paymentSelected = document.querySelector('.paymentMethodSelect:checked');
        const termsChecked = termsCheckbox ? termsCheckbox.checked : false;
        
        if (proceedBtn) {
            proceedBtn.disabled = !(paymentSelected && termsChecked);
        }
    }

    // Initialize payment accordion functionality
    paymentRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            toggleProceedButton();
            
            // Show the accordion content when selected
            const accordionButton = this.closest('.accordion-item').querySelector('.accordion-button');
            const collapseTarget = accordionButton.getAttribute('data-bs-target');
            const collapseElement = document.querySelector(collapseTarget);
            
            // Close all other accordion items
            document.querySelectorAll('.accordion-collapse').forEach(collapse => {
                if (collapse.id !== collapseTarget.substring(1)) {
                    collapse.classList.remove('show');
                }
            });
            
            // Open this one
            if (collapseElement) {
                collapseElement.classList.add('show');
            }
        });
    });

    // Terms checkbox change
    if (termsCheckbox) {
        termsCheckbox.addEventListener('change', toggleProceedButton);
    }

    // Shipping toggle
    if (shippingToggle && shippingDetails) {
        shippingToggle.addEventListener('change', function () {
            shippingDetails.style.display = this.checked ? 'block' : 'none';
        });
    }

    // Load thanas when district changes
    if (districtSelect) {
        districtSelect.addEventListener('change', function() {
            const districtId = this.value;
            if (districtId) {
                loadThanas(districtId);
                loadShippingMethods(districtId);
            } else {
                thanaSelect.innerHTML = '<option selected disabled value="">Select a district first</option>';
                shippingOptionsContainer.style.display = 'none';
            }
        });
        
        // If district is already selected on page load, load its thanas
        @if($dl && $dl->district_id)
            loadThanas("{{ $dl->district_id }}", "{{ $dl->upazila_id }}");
            loadShippingMethods("{{ $dl->district_id }}");
        @endif
    }

    function loadThanas(districtId, selectedThanaId = null) {
        fetch(`/get-upazilas/${districtId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                thanaSelect.innerHTML = '<option selected disabled value="">Select a thana</option>';
                data.forEach(upazila => {
                    const option = document.createElement('option');
                    option.value = upazila.id;
                    option.textContent = upazila.name;
                    if (selectedThanaId && selectedThanaId == upazila.id) {
                        option.selected = true;
                    }
                    thanaSelect.appendChild(option);
                });
                
                // Trigger change event to load shipping methods if thana is pre-selected
                if (selectedThanaId) {
                    thanaSelect.value = selectedThanaId;
                    thanaSelect.dispatchEvent(new Event('change'));
                }
            })
            .catch(error => {
                console.error('Error loading thanas:', error);
                thanaSelect.innerHTML = '<option selected disabled value="">Error loading thanas</option>';
            });
    }

    function loadShippingMethods(districtId) {
        fetch(`/get-shipping-methods/${districtId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                const shippingOptions = document.getElementById('shipping-options');
                if (data.length > 0) {
                    shippingOptions.innerHTML = '';
                    data.forEach((method, index) => {
                        const div = document.createElement('div');
                        div.classList.add('form-check');
                        div.innerHTML = `
                            <input class="form-check-input" type="radio" name="shipping_option" 
                                   id="shipping-option-${method.id}" value="${method.price}" 
                                   ${index === 0 ? 'checked' : ''}>
                            <label class="form-check-label" for="shipping-option-${method.id}">
                                ${method.name} (${method.min_weight} - ${method.max_weight} Kg): ${method.price}৳
                            </label>
                        `;
                        shippingOptions.appendChild(div);
                    });
                    
                    shippingOptionsContainer.style.display = 'block';
                    
                    // Add event listeners to shipping options
                    document.querySelectorAll('input[name="shipping_option"]').forEach(option => {
                        option.addEventListener('change', updateTotals);
                    });
                    
                    updateTotals();
                } else {
                    shippingOptions.innerHTML = '<p class="text-muted">No shipping methods available for this area.</p>';
                    shippingOptionsContainer.style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error loading shipping methods:', error);
                const shippingOptions = document.getElementById('shipping-options');
                shippingOptions.innerHTML = '<p class="text-danger">Error loading shipping methods.</p>';
                shippingOptionsContainer.style.display = 'block';
            });
    }

    function updateTotals() {
        const subtotalElement = document.querySelector('.subtotal');
        const discountElement = document.querySelector('.discount');
        const shippingPriceElement = document.getElementById('shipping-price');
        const payableElement = document.querySelector('.payable');
        
        if (subtotalElement && discountElement && payableElement) {
            const subtotal = parseFloat(subtotalElement.getAttribute('data-value')) || 0;
            const discount = parseFloat(discountElement.getAttribute('data-value')) || 0;
            
            const selectedShipping = document.querySelector('input[name="shipping_option"]:checked');
            const shippingCost = selectedShipping ? parseFloat(selectedShipping.value) : 0;
            
            const grandTotal = subtotal - discount + shippingCost;
            
            if (shippingPriceElement) {
                shippingPriceElement.textContent = `Tk. ${shippingCost.toFixed(2)}`;
                shippingPriceElement.setAttribute('data-value', shippingCost);
            }
            
            const hiddenShippingPriceInput = document.getElementById('hidden-shipping-price');
            if (hiddenShippingPriceInput) {
                hiddenShippingPriceInput.value = shippingCost;
            }
            
            payableElement.textContent = `Tk. ${grandTotal.toFixed(2)}`;
        }
    }

    // Proceed button click handler
    if (proceedBtn) {
        proceedBtn.addEventListener('click', function (e) {
            e.preventDefault();

            // Validate required fields
            const name = document.getElementById('name')?.value;
            const email = document.getElementById('email')?.value;
            const mobile = document.getElementById('mobile')?.value;
            const billingAddress = document.getElementById('billing-address')?.value;
            const billingDistrictId = document.getElementById('district')?.value;
            const billingThanaId = document.getElementById('thana')?.value;
            const paymentMethod = document.querySelector('.paymentMethodSelect:checked')?.value;

            if (!paymentMethod) {
                Swal.fire('Error', 'Please select a payment method.', 'error');
                return;
            }

            if (!name || !email || !mobile || !billingAddress || !billingDistrictId || !billingThanaId) {
                Swal.fire('Error', 'Please fill in all required shipping address fields.', 'error');
                return;
            }

            // Set form action
            checkoutForm.action = paymentMethod === 'cod' ? codRoute : onlineRoute;

            // Add hidden fields
            const fieldsToSubmit = {
                name: name,
                email: email,
                mobile: mobile,
                billing_address: billingAddress,
                district_id: billingDistrictId,
                thana_id: billingThanaId,
                payment_method: paymentMethod
            };

            // Remove any existing hidden fields
            document.querySelectorAll('#checkoutForm input[type="hidden"][name^="temp_"]').forEach(el => el.remove());

            for (const [key, value] of Object.entries(fieldsToSubmit)) {
                let input = document.createElement('input');
                input.type = 'hidden';
                input.name = `temp_${key}`;
                input.value = value;
                checkoutForm.appendChild(input);
            }

            // Get shipping cost
            const selectedShipping = document.querySelector('input[name="shipping_option"]:checked');
            const shippingCost = selectedShipping ? parseFloat(selectedShipping.value) : 0;

            Swal.fire({
                title: 'Confirm Order',
                html: `Payment Method: <strong>${paymentMethod === 'cod' ? 'Cash on Delivery' : 'Online Payment'}</strong><br>
                      Shipping Cost: <strong>${shippingCost}৳</strong><br><br>
                      Do you want to place this order?`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, place order',
                cancelButtonText: 'Cancel',
                confirmButtonColor: '#2D529F'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form
                    checkoutForm.submit();
                }
            });
        });
    }

    // Initialize on page load
    toggleProceedButton();
    updateTotals();
});
</script>

@endsection