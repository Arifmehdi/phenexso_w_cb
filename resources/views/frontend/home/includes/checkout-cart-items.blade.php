@php
    $totalCartPrice = \App\Models\Cart::totalCartPrice();
    $totalDiscountAmount = \App\Models\Cart::totalDiscountAmount();
    // Calculate initial total (subtotal - discount + default shipping 0)
    $initialTotal = $totalCartPrice - $totalDiscountAmount;
@endphp

@if(!$cartItems->isEmpty())
<div class="summary-wrapper" style="padding: 20px; background: #fff;">
    <!-- Savings Message -->
    @if($totalDiscountAmount > 0)
    <div style="background: rgba(34, 197, 94, 0.1); color: #15803d; padding: 12px; border-radius: 8px; font-size: 13px; font-weight: 600; text-align: center; margin-bottom: 20px; display: flex; align-items: center; justify-content: center; gap: 8px; border: 1px solid rgba(34, 197, 94, 0.2);">
        <i class="fas fa-gift"></i>
        <span>{{ __('You are saving') }} Tk. {{ number_format($totalDiscountAmount, 2) }} {{ __('on this order!') }}</span>
    </div>
    @endif

    <!-- Totals Breakdown -->
    <div style="margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px; color: #64748b;">
            <span>{{ __('Subtotal') }}</span>
            <span class="subtotal" data-value="{{ $totalCartPrice }}" style="font-weight: 600; color: #1e293b;">Tk. {{ number_format($totalCartPrice, 2) }}</span>
        </div>

        @if($totalDiscountAmount > 0)
        <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px; color: #64748b;">
            <span>{{ __('Discount') }}</span>
            <span class="discount" data-value="{{ $totalDiscountAmount }}" style="font-weight: 600; color: #ef4444;">-Tk. {{ number_format($totalDiscountAmount, 2) }}</span>
        </div>
        @endif

        <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px; color: #64748b;">
            <span>{{ __('Shipping') }}</span>
            <span class="shipping" id="shipping-price" data-value="0" style="font-weight: 600; color: #1e293b;">Tk. 0.00</span>
        </div>

        <div style="height: 1px; background: #e2e8f0; margin: 16px 0;"></div>

        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-weight: 700; font-size: 16px; color: #1e293b;">{{ __('Total Amount') }}</span>
            <span class="payable" style="font-weight: 800; font-size: 22px; color: #e8362a;">
                Tk. {{ number_format($initialTotal, 2) }}
            </span>
        </div>
    </div>

    <!-- Items List Header -->
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px; padding-bottom: 10px; border-bottom: 1px solid #f1f5f9;">
        <h3 style="font-size: 15px; font-weight: 700; margin: 0; color: #1e293b;">
            <i class="fas fa-shopping-cart" style="margin-right: 8px; color: #64748b;"></i>
            {{ __('Your Items') }}
        </h3>
        <span style="background: #f1f5f9; color: #475569; padding: 2px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;">
            {{ $cartItems->count() }} {{ __('Items') }}
        </span>
    </div>

    <!-- Items List -->
    <div class="cart-action-container" style="max-height: 380px; overflow-y: auto; padding-right: 5px;">
        @foreach ($cartItems as $cart)
            <div class="cart-item" data-cart="{{ $cart->id }}" style="display: flex; gap: 12px; padding: 12px 0; border-bottom: 1px solid #f8fafc; position: relative;">
                <!-- Remove Button -->
                <button title="Remove" 
                        class="deleteCartItem" 
                        data-url="{{ route('cartRemoveItem', $cart->id) }}"
                        style="position: absolute; right: 0; top: 12px; border: none; background: none; color: #94a3b8; cursor: pointer; font-size: 14px; transition: color 0.2s;">
                    <i class="fas fa-times"></i>
                </button>

                <!-- Image -->
                <div style="width: 60px; height: 60px; border-radius: 8px; overflow: hidden; border: 1px solid #f1f5f9; flex-shrink: 0;">
                    <img src="{{ route('imagecache', ['template'=>'ppsm','filename' => $cart->product->fi()]) }}" 
                         alt="{{ $cart->product->name_en }}"
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>

                <!-- Info -->
                <div style="flex-grow: 1; padding-right: 20px;">
                    <div style="font-size: 13px; font-weight: 600; color: #1e293b; margin-bottom: 4px; line-height: 1.4;">
                        {{ Str::limit($cart->product->name_en, 40, '...') }}
                    </div>
                    
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 8px;">
                        <!-- Qty Controls wrapper for JS compatibility -->
                        <div class="cart-action-wrapper" style="display: flex; align-items: center; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 2px;">
                            <button class="updateCartItem minus" 
                                    data-url="{{ route('cartUpdateQty') }}" 
                                    data-cart="{{ $cart->id }}" 
                                    data-qty="{{ $cart->quantity }}" 
                                    style="width: 24px; height: 24px; border: none; background: none; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #64748b; font-size: 10px;">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span class="cartQtyDisplay" style="width: 24px; text-align: center; font-size: 12px; font-weight: 700; color: #1e293b;">
                                {{ $cart->quantity }}
                            </span>
                            <button class="updateCartItem plus" 
                                    data-url="{{ route('cartUpdateQty') }}" 
                                    data-cart="{{ $cart->id }}" 
                                    data-qty="{{ $cart->quantity }}" 
                                    style="width: 24px; height: 24px; border: none; background: none; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #64748b; font-size: 10px;">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>

                        <!-- Price -->
                        <div style="text-align: right;">
                            <div class="itemTotalPrice" 
                                 data-unit-price="{{ $cart->product->price }}" 
                                 style="font-size: 13px; font-weight: 700; color: #e8362a;">
                                Tk. {{ number_format($cart->quantity * $cart->product->price, 2) }}
                            </div>
                            <div style="font-size: 11px; color: #94a3b8;">
                                Tk. {{ number_format($cart->product->price, 2) }} x {{ $cart->quantity }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
    <div style="text-align: center; padding: 40px 20px; color: #64748b;">
        <i class="fas fa-shopping-basket" style="font-size: 32px; margin-bottom: 12px; opacity: 0.3;"></i>
        <p style="font-size: 14px; margin: 0;">{{ __('Your cart is empty') }}</p>
    </div>
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