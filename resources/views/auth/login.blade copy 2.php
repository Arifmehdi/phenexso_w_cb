@extends('website.layouts.master')

@section('title', 'Login - ' . config('app.name'))

@section('content')

<style>
/* ==============================
   CORPORATE LOGIN – CLEAN VERSION
   ============================== */

* {
    box-sizing: border-box;
}

body {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

/* Layout */
.login-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.login-card {
    width: 100%;
    max-width: 420px;
    background: #ffffff;
    border-radius: 12px;
    padding: 40px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 25px rgba(0,0,0,.1);
    position: relative;
}

.login-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg,#2563eb,#3b82f6);
    border-radius: 12px 12px 0 0;
}

/* Header */
.login-header {
    text-align: center;
    margin-bottom: 32px;
}

.logo-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 16px;
    border-radius: 12px;
    background: linear-gradient(135deg,#2563eb,#3b82f6);
    color: #fff;
    font-size: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-header h2 {
    font-size: 1.75rem;
    font-weight: 600;
    color: #1e293b;
}

.login-header p {
    font-size: 14px;
    color: #64748b;
}

/* Inputs */
.form-group {
    margin-bottom: 22px;
    position: relative;
}

.input-wrapper {
    position: relative;
}

.input-wrapper input {
    width: 100%;
    padding: 16px;
    border-radius: 8px;
    border: 2px solid #e2e8f0;
    background: #f8fafc;
    font-size: 15px;
    transition: .3s;
}

.input-wrapper input:focus {
    outline: none;
    background: #fff;
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37,99,235,.1);
}

.input-wrapper label {
    position: absolute;
    left: 16px;
    top: 16px;
    color: #64748b;
    font-size: 14px;
    pointer-events: none;
    transition: .3s;
}

.input-wrapper input:focus + label,
.input-wrapper input:not(:placeholder-shown) + label {
    transform: translateY(-32px) scale(.85);
    background: #fff;
    padding: 0 6px;
    color: #2563eb;
    font-weight: 600;
}

/* Password toggle */
.password-toggle {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    cursor: pointer;
    font-size: 14px;
}

/* Errors */
.error-message {
    font-size: 12px;
    color: #dc2626;
    margin-top: 6px;
}

.form-group.error input {
    border-color: #dc2626;
    background: rgba(220,38,38,.05);
}

/* Options */
.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.remember-wrapper {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
}

.forgot-password {
    font-size: 14px;
    color: #2563eb;
    text-decoration: none;
}

/* Button */
.login-btn {
    width: 100%;
    padding: 16px;
    border-radius: 8px;
    border: none;
    background: black;
    color: #fff;
    font-weight: 600;
    letter-spacing: .5px;
    cursor: pointer;
    transition: .3s;
}

.login-btn.loading {
    opacity: .7;
    pointer-events: none;
}

/* Footer */
.footer-links {
    text-align: center;
    margin-top: 20px;
    font-size: 13px;
}
</style>

<div class="login-container">
    <div class="login-card">

        <div class="login-header">
            <div class="logo-icon">🏢</div>
            <h2>Welcome Back</h2>
            <p>Please sign in to your account</p>
        </div>

        <form method="POST" action="{{ route('login') }}" id="loginForm">
            @csrf

            {{-- Email --}}
            <div class="form-group @error('email') error @enderror">
                <div class="input-wrapper">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        placeholder=" "
                        required
                    >
                    <label for="email">Email Address</label>
                </div>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            {{-- Password --}}
            <div class="form-group @error('password') error @enderror">
                <div class="input-wrapper">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder=" "
                        required
                    >
                    <label for="password">Password</label>

                    <button type="button" class="password-toggle" id="togglePassword">
                        Show
                    </button>
                </div>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            {{-- Remember / Forgot --}}
            <div class="form-options">
                <label class="remember-wrapper">
                    <input type="checkbox" name="remember">
                    Remember me
                </label>

                {{--<a href="{{ route('password.request') }}" class="forgot-password">
                    Forgot password?
                </a>--}}
                <a href="#" class="forgot-password">
                    Forgot password?
                </a>
            </div>

            <button type="submit" class="text-center login-btn" id="loginBtn">
                Sign In
            </button>
        </form>

        <div class="footer-links">
            Don’t have an account?
            <a href="{{ route('register') }}">Register</a>
        </div>

    </div>
</div>

{{-- UI JavaScript ONLY --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Password toggle
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function () {
        if (password.type === 'password') {
            password.type = 'text';
            toggle.innerText = 'Hide';
        } else {
            password.type = 'password';
            toggle.innerText = 'Show';
        }
    });

    // Loading state
    document.getElementById('loginForm').addEventListener('submit', function () {
        document.getElementById('loginBtn').classList.add('loading');
    });

});
</script>

@endsection
