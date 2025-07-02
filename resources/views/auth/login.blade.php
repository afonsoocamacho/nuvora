@extends('layouts.guest')

@section('title', 'Nuvora - Log In')
@section('description', 'Welcome to Nuvora, your gateway to innovative solutions.')

@section('content')
    <section class="login-page">
        <div class="half-page">
            <div class="auth-form-container auth-form-container-login">
                <div class="auth-form-header">
                    <h1 class="title">Welcome back!</h1>
                </div>

                <form class="auth-form" method="POST" action="{{ route('login') }}">
                    {{-- Display validation errors --}}
                    @csrf
                    <x-input-field type="email" name="email" label="Email" placeholder="joe@nuvora.com" />
                    <x-password-field name="password" label="Password" />

                    <div class="remember-forgot">
                        <div class="remember-me">
                            <label class="checkbox-remember">
                                <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                                    class="checkbox-input">
                                <span class="checkbox-custom">
                                    <svg viewBox="0 0 24 24" class="checkmark" aria-hidden="true">
                                        <path d="M5 12l5 5L20 7" stroke="black" stroke-width="3" fill="none" />
                                    </svg>
                                </span>
                                <span class="checkbox-label">Remember me</span>
                            </label>
                        </div>

                        <div class="forgot-password">
                            <a class="link-blue " href="#">Forgot your password?</a>
                        </div>
                    </div>

                    <button class="btn btn-1-green btn-md btn-login" type="submit">Log in</button>

                </form>

                <p class="note">
                    Don't have an account yet?
                    <a class="link-blue" href="{{ route('register') }}">Sign up now</a>
                </p>
            </div>
        </div>
        <div class="image-container"></div>
    </section>
@endsection

@push('styles')
    <!-- Page-specific CSS -->
@endpush

@push('scripts')
    <!-- Page-specific JS if needed -->
@endpush
