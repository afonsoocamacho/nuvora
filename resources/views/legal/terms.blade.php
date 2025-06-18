@extends('layouts.guest')

@section('title', 'Terms of Use')

@section('content')
    <div class="container legal-page">
        <h1>Terms of Use</h1>
        <p>Effective date: {{ now()->format('F j, Y') }}</p>

        <p>Welcome to Nuvora. By using our service, you agree to the following terms...</p>

        <h2>1. Your Account</h2>
        <p>You are responsible for maintaining the confidentiality of your login credentials...</p>

        <h2>2. Acceptable Use</h2>
        <p>You agree not to misuse the platform, reverse-engineer code, or violate laws...</p>

        <h2>3. Termination</h2>
        <p>We reserve the right to suspend or terminate your account for violations of these terms...</p>

        <h2>Contact</h2>
        <p>Questions? Email us at <a href="mailto:support@nuvora.app">support@nuvora.app</a>.</p>
    </div>
@endsection
