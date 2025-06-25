@extends('layouts.guest')

@section('title', 'Nuvora - Sign Up')
@section('description', 'Welcome to Nuvora, your gateway to innovative solutions.')

@section('content')
    <section class="signup-page">
        <div class="half-page">
            <div class="auth-form-container">
                <div class="auth-form-header auth-form-header-signup">
                    <h1 class="title">Welcome to Nuvora!</h1>
                    <p class="subtitle">Let's create an account.</p>
                </div>
                <form class="auth-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <x-input-field type="text" name="name" label="Organization Name" placeholder="Your Organization" />

                    <x-input-field type="email" name="email" label="Email" placeholder="joe@nuvora.com" />



                    <x-password-field name="password" label="Create Password" :create="true" />

                    <x-password-field name="password_confirmation" label="Confirm Password" />



                    <button class="btn btn-1-green btn-md btn-login btn-create-account" type="submit">Create
                        account</button>

                </form>

                <p class="note note-terms">
                    By clicking Create account, you agree to our
                    <a class="link-blue" href="{{ route('terms') }}">Terms of Use</a> and
                    <a class="link-blue" href="{{ route('privacy') }}">Privacy Policy</a>
                </p>
                <div class="divider"></div>
                <p class="note">
                    Already have an account?
                    <a class="link-blue" href="{{ route('login') }}">Log in</a>
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
