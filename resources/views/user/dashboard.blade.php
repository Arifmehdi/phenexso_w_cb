@extends('website.test.test_include.test_app')

@section('title', 'User Dashboard - '.env('APP_NAME'))

@push('styles')
<style>
    .dashboard-page {
        padding: 40px 0;
        background-color: #fbf7f3;
        color: #212a2f;
    }

    .dashboard-layout {
        display: grid;
        grid-template-columns: 280px 1fr;
        gap: 40px;
    }

    @media (max-width: 991px) {
        .dashboard-layout {
            grid-template-columns: 1fr;
        }
    }

    /* Sidebar Styles */
    .dashboard-sidebar {
        background: #fff;
        border: 1px solid #e5e5e5;
        border-radius: 12px;
        padding: 30px 20px;
        height: fit-content;
        position: sticky;
        top: 20px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    .profile-section {
        text-align: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f0f0f0;
    }

    .profile-image-wrapper {
        position: relative;
        width: 100px;
        height: 100px;
        margin: 0 auto 15px;
    }

    .profile-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #e8362a;
        padding: 3px;
    }

    .profile-image-wrapper .upload-overlay {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #e8362a;
        color: #fff;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 2px solid #fff;
        transition: transform 0.3s;
    }

    .profile-image-wrapper .upload-overlay:hover {
        transform: scale(1.1);
    }

    .profile-info h3 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .profile-info p {
        font-size: 13px;
        color: #777;
        margin: 0;
    }

    .dashboard-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .dashboard-menu li {
        margin-bottom: 8px;
    }

    .dashboard-menu a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 15px;
        color: #555;
        text-decoration: none;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s;
    }

    .dashboard-menu a i {
        font-size: 16px;
        width: 20px;
        text-align: center;
    }

    .dashboard-menu a:hover,
    .dashboard-menu a.active {
        background: #fff5f4;
        color: #e8362a;
    }

    .dashboard-menu a.active {
        font-weight: 700;
    }

    .logout-btn {
        color: #e8362a !important;
        margin-top: 20px !important;
        border-top: 1px solid #f0f0f0;
        padding-top: 20px !important;
    }

    /* Main Content Styles */
    .dashboard-card {
        background: #fff;
        border: 1px solid #e5e5e5;
        border-radius: 12px;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .dashboard-card-header {
        padding: 20px 25px;
        border-bottom: 1px solid #f0f0f0;
        background: #fdfdfd;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .dashboard-card-header h2 {
        font-size: 20px;
        font-weight: 700;
        margin: 0;
    }

    .dashboard-card-body {
        padding: 25px;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        padding: 20px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        gap: 20px;
        transition: transform 0.3s;
        text-decoration: none;
    }

    .stat-card:hover {
        transform: translateY(-5px);
    }

    .stat-card.total { background: #e8f5e9; border: 1px solid #c8e6c9; }
    .stat-card.today { background: #e3f2fd; border: 1px solid #bbdefb; }
    .stat-card.cancelled { background: #ffebee; border: 1px solid #ffcdd2; }

    .stat-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #fff;
    }

    .stat-card.total .stat-icon { background: #2e7d32; }
    .stat-card.today .stat-icon { background: #1565c0; }
    .stat-card.cancelled .stat-icon { background: #c62828; }

    .stat-info h4 {
        font-size: 24px;
        font-weight: 800;
        margin: 0;
        color: #212a2f;
    }

    .stat-info span {
        font-size: 13px;
        color: #666;
        font-weight: 500;
    }

    /* Table Styles */
    .cb-table-wrapper {
        overflow-x: auto;
    }

    .cb-table {
        width: 100%;
        border-collapse: collapse;
    }

    .cb-table th {
        background: #f8f9fa;
        padding: 12px 15px;
        text-align: left;
        font-size: 13px;
        font-weight: 700;
        color: #212a2f;
        border-bottom: 2px solid #eee;
    }

    .cb-table td {
        padding: 15px;
        border-bottom: 1px solid #eee;
        font-size: 14px;
        vertical-align: middle;
    }

    .status-badge {
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .status-pending { background: #fff8e1; color: #f57f17; }
    .status-processing { background: #e3f2fd; color: #1565c0; }
    .status-completed { background: #e8f5e9; color: #2e7d32; }
    .status-cancelled { background: #ffebee; color: #c62828; }

    .btn-action {
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: all 0.3s;
    }

    .btn-invoice { background: #212a2f; color: #fff; }
    .btn-invoice:hover { background: #000; }

    /* Form Styles */
    .cb-form-group {
        margin-bottom: 20px;
    }

    .cb-form-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 20px;
    }

    .cb-form-col {
        flex: 1;
        min-width: 250px;
    }

    .cb-label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #444;
    }

    .cb-input, .cb-select, .cb-textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s;
        box-sizing: border-box;
    }

    .cb-input:focus, .cb-select:focus {
        border-color: #e8362a;
        outline: none;
        box-shadow: 0 0 0 3px rgba(232, 54, 42, 0.1);
    }

    .cb-btn-submit {
        background: #e8362a;
        color: #fff;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.3s;
    }

    .cb-btn-submit:hover {
        background: #d12e23;
    }

    /* Tab Logic */
    .tab-content-pane {
        display: none;
    }

    .tab-content-pane.active {
        display: block;
    }
</style>
@endpush

@section('content')
<div class="dashboard-page">
    <div class="container">
        <!-- Success/Error Messages -->
        @if(session('success'))
            <div class="alert alert-success shadow-sm mb-4" style="background-color: #e8f5e9; border-color: #c8e6c9; color: #2e7d32; padding: 15px; border-radius: 8px;">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger shadow-sm mb-4" style="background-color: #ffebee; border-color: #ffcdd2; color: #c62828; padding: 15px; border-radius: 8px;">
                <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
            </div>
        @endif

        <div class="dashboard-layout">
            <!-- Sidebar -->
            <aside class="dashboard-sidebar">
                <div class="profile-section">
                    <div class="profile-image-wrapper">
                        <img id="profilePreview"
                             src="{{ route('imagecache', ['template' => 'pfimd', 'filename' => $user->fi()]) }}"
                             alt="{{ $user->name }}">
                        <label for="profileImageInput" class="upload-overlay">
                            <i class="fas fa-camera"></i>
                        </label>
                        <input type="file" id="profileImageInput" accept="image/*" style="display: none;">
                    </div>
                    <div class="profile-info">
                        <h3>{{ $user->name }}</h3>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>

                <ul class="dashboard-menu">
                    <li>
                        <a href="{{route('user.dashboard')}}" class="{{ $activeTab=='dashboard'?'active':'' }}">
                            <i class="fas fa-th-large"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.orders', ['type' => 'all'])}}" class="{{ $activeTab=='order'?'active':'' }}">
                            <i class="fas fa-shopping-bag"></i> My Orders
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.editMyInformation')}}" class="{{ $activeTab=='edit'?'active':'' }}">
                            <i class="fas fa-user-edit"></i> Personal Info
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Main Content -->
            <main class="dashboard-content">
                <!-- Dashboard Tab -->
                <div class="tab-content-pane {{ $activeTab=='dashboard'?'active':'' }}">
                    <div class="stats-grid">
                        <a href="{{ route('user.orders', ['type' => 'all']) }}" class="stat-card total">
                            <div class="stat-icon"><i class="fas fa-shopping-cart"></i></div>
                            <div class="stat-info">
                                <h4>{{ $user->orders()->count() }}</h4>
                                <span>Total Orders</span>
                            </div>
                        </a>
                        <a href="{{ route('user.orders', ['type' => 'today']) }}" class="stat-card today">
                            <div class="stat-icon"><i class="fas fa-calendar-day"></i></div>
                            <div class="stat-info">
                                <h4>{{ $todayOrdersCount }}</h4>
                                <span>Today's Orders</span>
                            </div>
                        </a>
                        <a href="{{ route('user.orders', ['type' => 'cancelled']) }}" class="stat-card cancelled">
                            <div class="stat-icon"><i class="fas fa-times-circle"></i></div>
                            <div class="stat-info">
                                <h4>{{ $cancelOrdersCount }}</h4>
                                <span>Cancelled Orders</span>
                            </div>
                        </a>
                    </div>

                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h2>Recent Orders</h2>
                            <a href="{{ route('user.orders', ['type' => 'all']) }}" style="color: #e8362a; font-size: 14px; font-weight: 600; text-decoration: none;">View All</a>
                        </div>
                        <div class="dashboard-card-body p-0">
                            <div class="cb-table-wrapper">
                                <table class="cb-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DATE</th>
                                            <th>STATUS</th>
                                            <th>TOTAL</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($orders->take(5) as $order)
                                        <tr>
                                            <td style="font-weight: 700;">#{{ $order->id }}</td>
                                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <span class="status-badge status-{{ $order->order_status }}">
                                                    {{ $order->order_status }}
                                                </span>
                                            </td>
                                            <td style="font-weight: 700;">{{ number_format($order->grand_total, 2) }} ৳</td>
                                            <td>
                                                <a href="{{ route('user.orderPrint', $order->id) }}" target="_blank" class="btn-action btn-invoice">
                                                    <i class="fas fa-print"></i> Invoice
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" style="text-align: center; padding: 40px; color: #777;">No recent orders found.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders Tab -->
                <div class="tab-content-pane {{ $activeTab=='order'?'active':'' }}">
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h2>My Orders</h2>
                            @if(isset($type))
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ route('user.orders', ['type' => 'all']) }}" 
                                   style="padding: 5px 12px; border-radius: 6px; font-size: 12px; text-decoration: none; {{ $type=='all'?'background: #e8362a; color: #fff;':'background: #eee; color: #555;' }}">All</a>
                                <a href="{{ route('user.orders', ['type' => 'today']) }}" 
                                   style="padding: 5px 12px; border-radius: 6px; font-size: 12px; text-decoration: none; {{ $type=='today'?'background: #e8362a; color: #fff;':'background: #eee; color: #555;' }}">Today</a>
                                <a href="{{ route('user.orders', ['type' => 'cancelled']) }}" 
                                   style="padding: 5px 12px; border-radius: 6px; font-size: 12px; text-decoration: none; {{ $type=='cancelled'?'background: #e8362a; color: #fff;':'background: #eee; color: #555;' }}">Cancelled</a>
                            </div>
                            @endif
                        </div>
                        <div class="dashboard-card-body p-0">
                            <div class="cb-table-wrapper">
                                <table class="cb-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DATE</th>
                                            <th>STATUS</th>
                                            <th>TOTAL</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($orders as $order)
                                        <tr>
                                            <td style="font-weight: 700;">#{{ $order->id }}</td>
                                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <span class="status-badge status-{{ $order->order_status }}">
                                                    {{ $order->order_status }}
                                                </span>
                                            </td>
                                            <td style="font-weight: 700;">{{ number_format($order->grand_total, 2) }} ৳</td>
                                            <td>
                                                <div style="display: flex; gap: 8px;">
                                                    <a href="{{ route('user.orderPrint', $order->id) }}" target="_blank" class="btn-action btn-invoice">
                                                        <i class="fas fa-print"></i> Invoice
                                                    </a>
                                                    <a href="{{ route('user.orderChalan', $order->id) }}" target="_blank" class="btn-action btn-invoice">
                                                        <i class="fas fa-file-invoice"></i> Chalan
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" style="text-align: center; padding: 40px; color: #777;">No orders found.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            @if($orders->count() > 0)
                            <div style="padding: 20px;">
                                {{ $orders->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Edit Tab -->
                <div class="tab-content-pane {{ $activeTab=='edit'?'active':'' }}">
                    <div class="dashboard-card">
                        <div class="dashboard-card-header">
                            <h2>Personal Information</h2>
                        </div>
                        <div class="dashboard-card-body">
                            <form action="{{ route('user.changeMyInformation') }}" method="POST">
                                @csrf
                                <div class="cb-form-row">
                                    <div class="cb-form-col">
                                        <label class="cb-label">Full Name *</label>
                                        <input type="text" name="name" value="{{ old('name',$user->name) }}" class="cb-input" required>
                                    </div>
                                    <div class="cb-form-col">
                                        <label class="cb-label">Mobile Number *</label>
                                        <input type="text" name="mobile" value="{{ old('mobile',$user->mobile) }}" class="cb-input" required>
                                    </div>
                                </div>

                                <div class="cb-form-group">
                                    <label class="cb-label">Email Address *</label>
                                    <input type="email" name="email" value="{{ old('email',$user->email) }}" class="cb-input" required>
                                </div>

                                <div class="cb-form-row">
                                    <div class="cb-form-col">
                                        <label class="cb-label">Father's Name *</label>
                                        <input type="text" name="father_name" value="{{ old('father_name',$user->father_name) }}" class="cb-input" required>
                                    </div>
                                    <div class="cb-form-col">
                                        <label class="cb-label">Bkash Number *</label>
                                        <input type="text" name="bkash_number" value="{{ old('bkash_number',$user->bkash_number) }}" class="cb-input" required>
                                    </div>
                                </div>

                                <div class="cb-form-group">
                                    <label class="cb-label">Full Address *</label>
                                    <textarea name="address" class="cb-textarea" rows="3" required>{{ old('address',$user->address) }}</textarea>
                                </div>

                                <div class="cb-form-row">
                                    <div class="cb-form-col">
                                        <label class="cb-label">Date of Birth *</label>
                                        <input type="date" name="dob" value="{{ old('dob',$user->dob) }}" class="cb-input" required>
                                    </div>
                                    <div class="cb-form-col">
                                        <label class="cb-label">Blood Group *</label>
                                        <select name="blood_group" class="cb-select" required>
                                            <option value="">Select One</option>
                                            @foreach(['A+','A-','B+','B-','O+','O-','AB+','AB-'] as $bg)
                                                <option value="{{ $bg }}" {{ old('blood_group', $user->blood_group) == $bg ? 'selected' : '' }}>{{ $bg }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="cb-form-group">
                                    <label class="cb-label">Registration Date *</label>
                                    <input type="date" name="reg_date" value="{{ old('reg_date',$user->reg_date) }}" class="cb-input" required>
                                </div>

                                <div style="margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">
                                    <h3 style="font-size: 18px; font-weight: 700; margin-bottom: 20px;">Change Password</h3>
                                    <div class="cb-form-row">
                                        <div class="cb-form-col">
                                            <label class="cb-label">Current Password</label>
                                            <input type="password" name="old_password" class="cb-input">
                                        </div>
                                        <div class="cb-form-col">
                                            <label class="cb-label">New Password</label>
                                            <input type="password" name="new_password" class="cb-input">
                                        </div>
                                    </div>
                                    <div class="cb-form-group">
                                        <label class="cb-label">Confirm New Password</label>
                                        <input type="password" name="confirm_password" class="cb-input">
                                    </div>
                                </div>

                                <div style="text-align: right;">
                                    <button type="submit" class="cb-btn-submit">Save Information</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    // Profile Image Upload Logic
    const profileImageInput = document.getElementById('profileImageInput');
    const profilePreview = document.getElementById('profilePreview');

    if (profileImageInput && profilePreview) {
        profileImageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (!file) return;

            const formData = new FormData();
            formData.append('image', file);
            formData.append('_token', '{{ csrf_token() }}');

            // Local Preview
            const reader = new FileReader();
            reader.onload = e => profilePreview.src = e.target.result;
            reader.readAsDataURL(file);

            // Server Upload
            fetch("{{ route('user.uploadProfileImage') }}", {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (!data.success) alert('Profile image upload failed. Please try again.');
            })
            .catch(() => alert('An error occurred during upload.'));
        });
    }
</script>
@endpush