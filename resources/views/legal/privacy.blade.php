@extends('layouts.guest')

@section('title', 'Nuvora - Privacy Policy')

@section('content')
    <div class="container legal-page">
        <h1>Privacy Policy</h1>
        <p>Last updated: {{ now()->format('F j, Y') }}</p>

        <p>We at Nuvora value your privacy. This Privacy Policy outlines how we collect, use, and protect your personal
            data...</p>

        <h2>1. What Information We Collect</h2>
        <p>We may collect your name, email address, login details, and other data you choose to provide...</p>

        <h2>2. How We Use Your Information</h2>
        <p>Your data helps us deliver our services, personalize your experience, and communicate with you...</p>

        <!-- Add more sections as needed -->

        <h2>Contact</h2>
        <p>If you have any questions, contact us at <a href="mailto:support@nuvora.app">support@nuvora.app</a>.</p>
    </div>
@endsection
