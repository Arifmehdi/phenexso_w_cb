<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chalan #{{ $order->id }} - {{ $ws->website_title }}</title>

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

        .chalan-wrapper {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }

        .chalan-header {
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

        .chalan-title-area {
            text-align: right;
        }

        .chalan-title-area h1 {
            font-size: 32px;
            font-weight: 800;
            color: #212a2f;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .chalan-title-area span {
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

        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
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

        .signature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 100px;
            margin-top: 80px;
        }

        .sig-box {
            text-align: center;
            border-top: 1px solid #333;
            padding-top: 10px;
        }

        .sig-box p {
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            margin: 0;
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
            .chalan-wrapper { margin: 0; padding: 0; box-shadow: none; width: 100%; max-width: 100%; }
            .action-buttons { display: none; }
        }
    </style>
</head>
<body>

    <div class="chalan-wrapper">
        <!-- Header -->
        <div class="chalan-header">
            <div class="logo-area">
                <img src="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}" alt="{{ $ws->website_title }}">
                <div class="mt-3">
                    <p class="mb-1 small"><strong>{{ $ws->website_title }}</strong></p>
                    <p class="mb-0 small text-muted" style="max-width: 250px;">{{ $ws->contact_address }}</p>
                </div>
            </div>
            <div class="chalan-title-area">
                <h1>Delivery Chalan</h1>
                <p class="mb-0">Chalan No: <span>#{{ $order->id }}</span></p>
                <p class="mb-0">Date: {{ $order->created_at->format('M d, Y') }}</p>
            </div>
        </div>

        <!-- Info Grid -->
        <div class="info-grid">
            <div class="info-box">
                <h6>Deliver To</h6>
                <p><strong>{{ $order->user->name ?? $order->name }}</strong></p>
                <p>{{ $order->address_title ?? $order->user->address }}</p>
                <p>Phone: {{ $order->mobile ?? $order->user->mobile }}</p>
            </div>
            <div class="info-box" style="text-align: right;">
                <h6>Order Info</h6>
                <p>Order ID: <strong>#{{ $order->id }}</strong></p>
                <p>Order Date: {{ $order->created_at->format('M d, Y') }}</p>
                <p>Payment: {{ strtoupper($order->payment_method) }}</p>
            </div>
        </div>

        <!-- Items Table -->
        <table class="items-table">
            <thead>
                <tr>
                    <th style="width: 50px;">SL</th>
                    <th>Product Item</th>
                    <th style="text-align: center; width: 100px;">Quantity</th>
                    <th style="width: 200px;">Remarks</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <div style="font-weight: 600; color: #212a2f;">{{ $item->product_name }}</div>
                    </td>
                    <td style="text-align: center; font-weight: 700;">{{ $item->quantity }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Signature Area -->
        <div class="signature-grid">
            <div class="sig-box">
                <p>Receiver's Signature</p>
            </div>
            <div class="sig-box">
                <p>Authorized Signature</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p class="mb-1">Please check the items at the time of delivery.</p>
            <p class="mb-0">{{ $ws->website_title }} - {{ $ws->contact_address }}</p>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="action-buttons">
        <button class="btn btn-dark shadow-sm" onclick="window.history.back()">
            <i class="fas fa-arrow-left me-2"></i> Back
        </button>
        <button class="btn btn-success shadow-sm" onclick="window.print()">
            <i class="fas fa-print me-2"></i> Print Chalan
        </button>
    </div>

</body>
</html>
