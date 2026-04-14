@extends('website.layouts.master')

@section('content')
<div role="main" class="main mt-5">

    <!-- Page Header -->
    <section class="page-header page-header-modern bg-dark page-header-md">
        <div class="container text-center">
            <h1 class="text-white font-weight-bold text-8 mb-0">Login</h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-light py-2 px-0">
            <li><a href="{{ route('nb.home') }}">Home</a></li>
            <li class="active">Login</li>
        </ul>
    </div>

    <!-- Login Form -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-lg rounded-3">
                    <div class="card-body p-4 p-md-5">

                        <h4 class="text-center font-weight-bold mb-4">
                            Welcome Back
                        </h4>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter your email"
                                        value="{{ old('email') }}"
                                        required
                                    >
                                </div>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input
                                        type="password"
                                        id="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="Enter your password"
                                        required
                                    >
                                </div>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Remember + Forgot -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="remember"
                                        name="remember"
                                    >
                                    <label class="form-check-label" for="remember">
                                        Remember me
                                    </label>
                                </div>

                                {{--<a href="{{ route('password.request') }}" class="small text-decoration-none">
                                    Forgot password?
                                </a>--}}
                                <a href="#" class="small text-decoration-none">
                                    Forgot password?
                                </a>
                            </div>

                            <!-- Submit -->
                            <button
                                type="submit"
                                class="btn btn-primary w-100 py-2 text-uppercase fw-bold"
                            >
                                Login
                            </button>

                        </form>

                        <!-- Register Link -->
                        <div class="text-center mt-4">
                            <small>
                                Don’t have an account?
                                <a href="{{ route('register') }}" class="fw-bold text-decoration-none">
                                    Register
                                </a>
                            </small>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
