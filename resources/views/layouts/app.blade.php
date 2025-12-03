<!DOCTYPE html>
<html lang="id" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Pineus Tilu - Glamping & Camping')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    @stack('styles')
</head>
<body class="font-sans antialiased overflow-x-hidden w-full">
    @include('layouts.navbar')

    <main class="overflow-x-hidden w-full">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 600,
            easing: 'ease-in-out',
            once: true,
            offset: 50,
            throttleDelay: 99,
            debounceDelay: 50
        });
    </script>
    @stack('scripts')
</body>
</html>
