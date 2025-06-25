<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('description', 'Welcome to Nuvora.')">
    <meta name="keywords" content="@yield('keywords', 'community, membership, nuvora')">
    <meta name="author" content="Nuvora">

    <title>@yield('title', 'Nuvora')</title>

    <meta name="robots" content="index, follow">

    <!-- Favicon Links -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="/{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Nuvora" />
    <link rel="manifest" href="/site.webmanifest" />


    <!-- For iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- General theme color for supported browsers -->
    <meta name="theme-color" content="#000">

    <!-- For Microsoft Edge -->
    <meta name="msapplication-navbutton-color" content="#000">

    <!-- Preload Space Grotesk fonts to prevent FOUT -->
    <link rel="preload" as="font" type="font/woff2"
        href="{{ asset('assets/fonts/space-grotesk/SpaceGrotesk-Regular.woff2') }}" crossorigin="anonymous">
    <link rel="preload" as="font" type="font/woff2"
        href="{{ asset('assets/fonts/space-grotesk/SpaceGrotesk-Medium.woff2') }}" crossorigin="anonymous">
    <link rel="preload" as="font" type="font/woff2"
        href="{{ asset('assets/fonts/space-grotesk/SpaceGrotesk-SemiBold.woff2') }}" crossorigin="anonymous">
    <link rel="preload" as="font" type="font/woff2"
        href="{{ asset('assets/fonts/space-grotesk/SpaceGrotesk-Bold.woff2') }}" crossorigin="anonymous">
    <link rel="preload" as="font" type="font/woff2"
        href="{{ asset('assets/fonts/space-grotesk/SpaceGrotesk-Variable.woff2') }}" crossorigin="anonymous">



    <!-- Global Styles -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <!-- Additional page-specific styles -->
    @stack('styles')

</head>

<body>
    <!-- Navigation Component -->
    <x-nav-bar></x-nav-bar>




    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer></x-footer>

    <!-- Alpine Scripts -->
    <script>
        function createPasswordField({
            create = false
        }) {
            return {
                password: '',
                show: false,
                create,
                rules: {
                    length: false,
                    upper: false,
                    number: false,
                    symbol: false,
                },
                validateNewPassword() {
                    this.rules.length = this.password.length >= 8;
                    this.rules.upper = /[A-Z]/.test(this.password);
                    this.rules.number = /\d/.test(this.password);
                    this.rules.symbol = /[^A-Za-z0-9]/.test(this.password);
                },
            };
        }
    </script>




    <!-- Additional page-specific scripts -->
    @stack('scripts')
</body>

</html>
