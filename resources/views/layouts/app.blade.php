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
    @vite(['resources/scss/app.scss', 'resources/js/app.js', 'resources/scss/layouts/app-layout.scss'])

    <!-- Additional page-specific styles -->
    @stack('styles')

    <!-- Livewire styles -->
    @livewireStyles

    @livewireScripts
    @livewireScriptConfig

</head>

<body>
    <!-- Navigation Component -->
    <x-nav-bar-app></x-nav-bar-app>

    <x-side-bar></x-side-bar>


    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer></x-footer>


    <!-- Livewire scripts -->
    @livewireScripts


    <!-- Additional page-specific scripts -->
    @stack('scripts')


    <!-- Alpine Scripts -->
    <script>
        // Function to toggle sidebar visibility
        const sideBar = document.getElementById('sidebar');

        function toggleSidebar() {
            sideBar.classList.toggle('show');
        }

        // Function to toggle sidebar minimization
        const body = document.body;
        const SIDEBAR_KEY = 'sidebar-minimized';

        // Check saved preference on load
        if (localStorage.getItem(SIDEBAR_KEY) === 'true') {
            body.classList.add('sidebar-minimized');
        }

        function toggleSidebarMinimize() {
            const isMinimized = body.classList.toggle('sidebar-minimized');
            localStorage.setItem(SIDEBAR_KEY, isMinimized);
        }

        // Update logo based on sidebar state
        document.addEventListener('DOMContentLoaded', function() {
            const logoImg = document.getElementById('sidebar-logo');
            const body = document.body;
            const defaultLogo = logoImg.getAttribute('data-logo-default');
            const minimizedLogo = logoImg.getAttribute('data-logo-minimized');

            function updateLogo() {
                if (body.classList.contains('sidebar-minimized')) {
                    logoImg.src = minimizedLogo;
                } else {
                    logoImg.src = defaultLogo;
                }
            }

            // Initial check
            updateLogo();

            // Listen for sidebar minimize toggle
            const observer = new MutationObserver(updateLogo);
            observer.observe(body, {
                attributes: true,
                attributeFilter: ['class']
            });
        });
    </script>





</body>

</html>
