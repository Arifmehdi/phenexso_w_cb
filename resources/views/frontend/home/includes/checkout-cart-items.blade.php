@php
    $totalCartPrice = \App\Models\Cart::totalCartPrice();
    $totalDiscountAmount = \App\Models\Cart::totalDiscountAmount();
    // Calculate initial total (subtotal - discount + default shipping 0)
    $initialTotal = $totalCartPrice - $totalDiscountAmount;
@endphp

@if(!$cartItems->isEmpty())
<div class="p-3 bg-white">
    <!-- 1. Savings Message First -->
    <div class="text-center bg-dark text-white rounded py-2 fw-semibold mb-3 small shadow-sm">
        <i class="fas fa-gift me-2"></i> You are saving Tk. {{ number_format($totalDiscountAmount, 2) }} in this order.
    </div>

    <!-- 2. Summary Totals Section -->
    <div class="summary-box border rounded p-3 mb-4 bg-light">
        <div class="d-flex justify-content-between fw-semibold text-success mb-2">
            <span>Subtotal</span>
            <span class="subtotal" data-value="{{ $totalCartPrice }}">Tk. {{ number_format($totalCartPrice, 2) }}</span>
        </div>

        <div class="d-flex justify-content-between fw-semibold text-danger mb-2">
            <span>Discount applied</span>
            <span class="discount" data-value="{{ $totalDiscountAmount }}">-Tk. {{ number_format($totalDiscountAmount, 2) }}</span>
        </div>

        <div class="d-flex justify-content-between fw-semibold text-success mb-2">
            <span>Shipping</span>
            <div>
                <span class="shipping" id="shipping-price" data-value="0">Tk. 0.00</span>
            </div>
        </div>

        <hr class="my-2" style="border-top: 1px solid #ddd;">

        <div class="d-flex justify-content-between fw-bold fs-5 text-dark mt-2">
            <span style="font-size: 1.1rem;">Total Amount</span>
            <span class="payable" style="font-size: 1.2rem; color: #e8362a;">
                Tk. {{ number_format($initialTotal, 2) }}
            </span>
        </div>
    </div>

    <!-- 3. Cart Items Header -->
    <header class="bg-dark py-2 px-3 rounded-top">
        <h2 class="text-white h6 d-flex align-items-center gap-2 mb-0">
            <i class="fa fa-shopping-cart"></i> Items in Cart
            <span class="badge bg-white text-success ms-2">{{ $cartItems->count() }}</span>
        </h2>
    </header>

    <!-- 4. Items Table Section -->
    <div class="border border-top-0 rounded-bottom p-2 overflow-auto cart-action-wrapper" style="max-height: 400px;">
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-sm mb-0">
                <thead class="table-info text-success fw-semibold">
                    <tr>
                        <th class="text-center" style="width: 30px;"></th>
                        <th style="width: 50px;">Img</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="text-center">Qty</th>
                        <th class="text-end">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $cart)
                        <tr class="cart-item" data-cart="{{ $cart->id }}">
                            <td class="text-center align-middle">
                                <button title="Remove Product"
                                        class="btn btn-sm btn-danger rounded-circle deleteCartItem"
                                        style="width: 22px; height: 22px; padding: 0; line-height: 1;"
                                        data-url="{{ route('cartRemoveItem', $cart->id) }}">×</button>
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('productDetails', ['slug' => $cart->product->slug, 'id' => $cart->product_id]) }}">
                                    <img src="{{ route('imagecache', ['template'=>'ppsm','filename' => $cart->product->fi()]) }}"
                                         class="img-thumbnail" style="width:40px; height:40px; object-fit:cover;" loading="lazy">
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('productDetails', ['slug' => $cart->product->slug, 'id' => $cart->product_id]) }}"
                                   class="text-success text-decoration-none fw-medium small">
                                    {{ Str::limit($cart->product->name_en, 20, '...') }}
                                </a>
                            </td>
                            <td class="align-middle text-success fw-semibold small">
                                Tk. {{ number_format($cart->product->final_price, 2) }}
                            </td>
                            <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center gap-1">
                                    <button class="btn btn-sm btn-dark minus updateCartItem"
                                            style="padding: 0 5px;"
                                            data-url="{{ route('cartUpdateQty') }}"
                                            data-cart="{{ $cart->id }}"
                                            data-qty="{{ $cart->quantity }}">−</button>
                                    <span class="cartQtyDisplay border text-center rounded px-2 small">
                                        {{ $cart->quantity }}
                                    </span>
                                    <button class="btn btn-sm btn-dark plus updateCartItem"
                                            style="padding: 0 5px;"
                                            data-url="{{ route('cartUpdateQty') }}"
                                            data-cart="{{ $cart->id }}"
                                            data-qty="{{ $cart->quantity }}">+</button>
                                </div>
                            </td>
                            <td class="text-end align-middle fw-semibold text-primary itemTotalPrice small"
                                data-unit-price="{{ $cart->product->final_price }}">
                                Tk. {{ number_format($cart->quantity * $cart->product->final_price, 2) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
    <p class="text-center text-muted py-5 fs-5">Your cart is empty 🛒</p>
@endif

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const shippingPriceElement = document.getElementById('shipping-price');
        const subtotalElement = document.querySelector('.subtotal');
        const discountElement = document.querySelector('.discount');
        const payableElement = document.querySelector('.payable');

        // Function to update totals correctly
        window.refreshOrderSummaryTotals = function() {
            if (!subtotalElement) return;
            
            const subtotal = parseFloat(subtotalElement.getAttribute('data-value')) || 0;
            const discount = parseFloat(discountElement.getAttribute('data-value')) || 0;
            
            // Try to find the shipping radio in the parent form
            const selectedShipping = document.querySelector('input[name="ship_opt"]:checked') || 
                                     document.querySelector('input[name="shipping_choice"]:checked') ||
                                     document.querySelector('input[name="shipping-option"]:checked');
            
            const shippingCost = selectedShipping ? parseFloat(selectedShipping.value) : 0;
            const grandTotal = subtotal - discount + shippingCost;

            if (shippingPriceElement) {
                shippingPriceElement.textContent = `Tk. ${shippingCost.toFixed(2)}`;
                shippingPriceElement.setAttribute('data-value', shippingCost);
            }
            if (payableElement) {
                payableElement.textContent = `Tk. ${grandTotal.toFixed(2)}`;
            }
        };

        // Initialize totals on page load
        refreshOrderSummaryTotals();
    });
</script>
@endpush