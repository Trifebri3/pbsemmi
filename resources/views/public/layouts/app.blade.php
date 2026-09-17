<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PB SEMMI') }} @yield('title')</title>

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50 flex flex-col min-h-screen">
    
    <!-- Premium Preloader -->
    <div id="page-preloader" class="fixed inset-0 z-[100] flex items-center justify-center bg-white transition-opacity duration-500">
        <div class="flex flex-col items-center gap-4">
            <div class="relative h-16 w-16">
                <div class="absolute inset-0 rounded-full border-4 border-gray-100"></div>
                <div class="absolute inset-0 rounded-full border-4 border-semmi border-t-transparent animate-spin"></div>
            </div>
            <span class="text-sm font-bold tracking-widest text-semmi uppercase animate-pulse">Memuat...</span>
        </div>
    </div>
    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('page-preloader');
            if(preloader) {
                setTimeout(() => {
                    preloader.style.opacity = '0';
                    setTimeout(() => { preloader.style.display = 'none'; }, 500);
                }, 300);
            }
        });
    </script>
    <!-- Header -->
    @include('public.layouts.header')

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('public.layouts.footer')

</body>
</html>
