<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Pineus Tilu - Glamping & Camping')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50">
    @include('layouts.navbar')

    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    @include('layouts.footer')

    @stack('scripts')
</body>
</html>
