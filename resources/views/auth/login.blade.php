@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #2563eb, #9ea04b);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
    }

    .login-wrapper {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 900px;
        max-width: 95%;
        display: flex;
        transition: all 0.3s ease-in-out;
    }

    .login-left {
        flex: 1;
        background: linear-gradient(135deg, #36373b, #dbdfe7);
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 40px;
        text-align: center;
    }

    .login-left h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .login-left p {
        font-size: 15px;
        opacity: 0.9;
    }

    .login-right {
        flex: 1;
        padding: 50px;
    }

    .login-right h3 {
        font-weight: 700;
        margin-bottom: 25px;
        color: #1e3a8a;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
        font-size: 15px;
    }

    .btn-primary {
        background-color: #2563eb;
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #1d4ed8;
        transform: scale(1.03);
    }

    .btn-link {
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
    }

    .btn-link:hover {
        text-decoration: underline;
        color: #1e40af;
    }

    .form-check-label {
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .login-wrapper {
            flex-direction: column;
        }

        .login-left {
            display: none;
        }

        .login-right {
            padding: 30px;
        }
    }
</style>

<div class="login-wrapper">
    <div class="login-left">
        <h2>Welcome Back!</h2>
        <p>Log in to access your account and manage your dashboard efficiently.</p>
    </div>

    <div class="login-right">
        <h3>Login to Your Account</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autofocus
                       placeholder="example@domain.com">
                @error('email')
                    <span class="invalid-feedback d-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password" required placeholder="••••••••">
                @error('password')
                    <span class="invalid-feedback d-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                </div>

                @if (Route::has('password.request'))
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                @endif
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
            </div>

            <p class="text-center">
                Don’t have an account?
                <a href="{{ route('register') }}" class="btn-link">Create one</a>
            </p>
        </form>
    </div>
</div>
@endsection
