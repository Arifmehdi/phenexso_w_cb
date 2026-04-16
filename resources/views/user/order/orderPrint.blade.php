<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice #{{ $order->id }} - {{ $ws->website_title }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #333;
            background-color: #f8f9fa;
        }

        .invoice-wrapper {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 2px solid #f0f0f0;
        }

        .logo-area img {
            max-height: 80px;
            width: auto;
        }

        .invoice-title-area {
            text-align: right;
        }

        .invoice-title-area h1 {
            font-size: 32px;
            font-weight: 800;
            color: #212a2f;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .invoice-title-area span {
            font-weight: 600;
            color: #e8362a;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .info-box h6 {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            color: #888;
            margin-bottom: 12px;
        }

        .info-box p {
            margin-bottom: 5px;
            font-weight: 500;
        }

        .info-box strong {
            color: #212a2f;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 15px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 11px;
            text-transform: uppercase;
            margin-top: 10px;
        }

        .status-paid { background: #e8f5e9; color: #2e7d32; }
        .status-unpaid { background: #ffebee; color: #c62828; }
        .status-partial { background: #fff8e1; color: #f57f17; }

        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .items-table th {
            background: #212a2f;
            color: #fff;
            padding: 12px 15px;
            font-weight: 600;
            text-align: left;
        }

        .items-table td {
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .summary-area {
            display: flex;
            justify-content: flex-end;
        }

        .summary-table {
            width: 300px;
        }

        .summary-table tr td {
            padding: 8px 0;
            font-weight: 500;
        }

        .summary-table tr td:last-child {
            text-align: right;
            font-weight: 700;
            color: #212a2f;
        }

        .grand-total {
            font-size: 18px;
            color: #e8362a !important;
            border-top: 2px solid #f0f0f0;
            padding-top: 15px !important;
            margin-top: 10px;
        }

        .footer {
            margin-top: 60px;
            padding-top: 30px;
            border-top: 1px solid #f0f0f0;
            text-align: center;
            color: #888;
            font-size: 12px;
        }

        .action-buttons {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            gap: 10px;
        }

        @media print {
            body { background: #fff; }
            .invoice-wrapper { margin: 0; padding: 0; box-shadow: none; width: 100%; max-width: 100%; }
            .action-buttons { display: none; }
            .status-badge { border: 1px solid #ddd; }
        }
    </style>
</head>
<body>

    <div class="invoice-wrapper">
        <!-- Header -->
        <div class="invoice-header">
            <div class="logo-area">
                <img src="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}" alt="{{ $ws->website_title }}">
                <div class="mt-3">
                    <p class="mb-1 small"><strong>{{ $ws->website_title }}</strong></p>
                    <p class="mb-0 small text-muted" style="max-width: 250px;">{{ $ws->contact_address }}</p>
                </div>
            </div>
            <div class="invoice-title-area">
                <h1>Invoice</h1>
                <p class="mb-0">Invoice No: <span>#{{ $order->id }}</span></p>
                <p class="mb-0">Date: {{ $order->created_at->format('M d, Y') }}</p>
                <div class="status-badge status-{{ $order->payment_status }}">
                    {{ $order->payment_status }}
                </div>
            </div>
        </div>

        <!-- Info Grid -->
        <div class="info-grid">
            <div class="info-box">
                <h6>Invoiced To</h6>
                <p><strong>{{ $order->user->name ?? $order->name }}</strong></p>
                <p>{{ $order->address_title ?? $order->user->address }}</p>
                <p>Phone: {{ $order->mobile ?? $order->user->mobile }}</p>
                <p>Email: {{ $order->email ?? $order->user->email }}</p>
            </div>
            <div class="info-box" style="text-align: right;">
                <h6>Payment Info</h6>
                <p>Method: <strong>{{ strtoupper($order->payment_method) }}</strong></p>
                @if($lastPayment = $order->payments()->latest('payment_date')->first())
                    <p>Last Paid: {{ \Carbon\Carbon::parse($lastPayment->payment_date)->format('M d, Y') }}</p>
                @endif
                <p>Gateway: {{ ucfirst($order->payment_gateway) }}</p>
            </div>
        </div>

        <!-- Items Table -->
        <table class="items-table">
            <thead>
                <tr>
                    <th style="width: 50px;">SL</th>
                    <th>Product Description</th>
                    <th style="text-align: center; width: 100px;">Qty</th>
                    <th style="text-align: right; width: 120px;">Price</th>
                    <th style="text-align: right; width: 120px;">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <div style="font-weight: 600; color: #212a2f;">{{ $item->product_name }}</div>
                    </td>
                    <td style="text-align: center;">{{ $item->quantity }}</td>
                    <td style="text-align: right;">{{ number_format($item->product_price, 2) }} ৳</td>
                    <td style="text-align: right; font-weight: 600;">{{ number_format($item->total_cost, 2) }} ৳</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Summary -->
        <div class="summary-area">
            <table class="summary-table">
                <tr>
                    <td>Subtotal</td>
                    <td>{{ number_format($order->subtotal, 2) }} ৳</td>
                </tr>
                @php
                    $shippingCost = $order->delivery_cost ?? $ws->shipping_charge ?? 0;
                @endphp
                <tr>
                    <td>Shipping Cost</td>
                    <td>{{ number_format($shippingCost, 2) }} ৳</td>
                </tr>
                <tr class="grand-total">
                    <td>Grand Total</td>
                    <td>{{ number_format($order->grand_total, 2) }} ৳</td>
                </tr>
                <tr>
                    <td style="color: #2e7d32;">Amount Paid</td>
                    <td style="color: #2e7d32;">{{ number_format($order->paid(), 2) }} ৳</td>
                </tr>
                @php $due = $order->grand_total - $order->paid(); @endphp
                @if($due > 0)
                <tr style="border-top: 1px solid #f0f0f0;">
                    <td style="color: #c62828;">Due Balance</td>
                    <td style="color: #c62828;">{{ number_format($due, 2) }} ৳</td>
                </tr>
                @endif
            </table>
        </div>

        <!-- Transactions -->
        @if($order->payments->count() > 0)
        <div class="mt-5">
            <h6 style="font-weight: 700; text-transform: uppercase; font-size: 12px; letter-spacing: 1px; color: #888; margin-bottom: 15px;">Transaction History</h6>
            <table class="table table-sm table-bordered" style="font-size: 12px;">
                <thead class="table-light">
                    <tr>
                        <th>Date</th>
                        <th>Transaction ID</th>
                        <th>Gateway</th>
                        <th style="text-align: right;">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->payments as $payment)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($payment->payment_date)->format('M d, Y') }}</td>
                        <td>{{ $payment->transaction_id ?? 'N/A' }}</td>
                        <td>{{ ucfirst($payment->payment_gateway ?? $order->payment_gateway) }}</td>
                        <td style="text-align: right; font-weight: 600;">{{ number_format($payment->paid_amount, 2) }} ৳</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

        <!-- Footer -->
        <div class="footer">
            <p class="mb-1">Thank you for choosing {{ $ws->website_title }}.</p>
            <p class="mb-0">This is a computer-generated invoice. No signature is required.</p>
            <p class="mt-2 small">Generated on: {{ date('M d, Y H:i:s') }}</p>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="action-buttons">
        <button class="btn btn-dark shadow-sm" onclick="window.history.back()">
            <i class="fas fa-arrow-left me-2"></i> Back
        </button>
        <button class="btn btn-success shadow-sm" onclick="window.print()">
            <i class="fas fa-print me-2"></i> Print Invoice
        </button>
    </div>

</body>
</html>
