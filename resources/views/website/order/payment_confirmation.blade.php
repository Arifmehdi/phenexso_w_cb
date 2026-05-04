@extends('website.test.test_include.test_app')

@section('title', 'Order Confirmation')

@section('content')
<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-body p-4 p-md-5">
                    <!-- Success Icon -->
                    <div class="text-center mb-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#28a745" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.75.75 0 0 1 1.047 1.06L7.477 12.356a.75.75 0 0 1-1.034.115l-4.5-3.5a.75.75 0 0 1 .9-1.2l3.878 3.016 5.465-7.26a.75.75 0 0 1 .05-.05z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Success Message -->
                    <div class="text-center mb-5">
                        <h2 class="fw-bold text-success mb-3">Order Placed Successfully!</h2>
                        <p class="text-muted fs-5">Thank you for your order. Your order ID is <span class="fw-bold text-dark">#{{ $order->id }}</span></p>
                        <!-- <p class="text-muted">We've sent a confirmation to your registered email address.</p> -->
                    </div>

                    <!-- Order Summary -->
                    <div class="card bg-light border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-4 text-dark">Order Summary</h5>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Subtotal</span>
                                <span class="fw-semibold">৳ {{ number_format($order->subtotal, 2) }}</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Delivery Cost</span>
                                <span class="fw-semibold">৳ {{ number_format($order->delivery_cost, 2) }}</span>
                            </div>

                            <hr class="my-3">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted fw-bold">Grand Total</span>
                                <span class="fw-bold text-success fs-5">৳ {{ number_format($order->grand_total, 2) }}</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">Payment Method</span>
                                <span class="fw-semibold text-uppercase">{{ $order->payment_method }}</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                <span class="text-muted">Payment Status</span>
                                <span class="badge bg-warning text-dark px-3 py-2">{{ ucfirst($order->payment_status) }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery Address -->
                    <div class="card border-0 shadow-sm rounded-4 mb-5">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3 text-dark">Delivery Address</h5>
                            <p class="mb-1 fw-semibold">{{ $order->name }}</p>
                            <p class="mb-1 text-muted">{{ $order->address_title }}</p>
                            <p class="mb-0 text-muted">{{ $order->mobile }}</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                        <a href="{{ route('shop') }}" class="btn btn-primary btn-lg px-5 py-3 fw-bold rounded-pill">
                            Continue Shopping
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </a>

                        @auth
                        <a href="{{ route('user.dashboard') }}" class="btn btn-outline-primary btn-lg px-5 py-3 fw-bold rounded-pill">
                            View Dashboard
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
