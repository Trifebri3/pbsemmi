<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEMMI | Admin Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="h-full font-sans antialiased bg-gray-50 flex items-center justify-center p-6 sm:p-0">

    <!-- LOGIN CONTAINER -->
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
        
        <!-- Header Section -->
        <div class="bg-gray-50 p-8 sm:px-12 text-center relative overflow-hidden border-b border-gray-100">
            <!-- Decorative pattern -->
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/arabesque.png')] opacity-5 mix-blend-overlay"></div>
            
            <div class="relative z-10 flex flex-col items-center">
                <img class="h-16 w-auto p-2 mb-4" src="{{ asset('logo.png') }}" alt="SEMMI Logo">
                <h2 class="font-heading text-2xl font-bold uppercase tracking-widest text-gray-900">Portal Admin</h2>
                <p class="text-sm text-gray-500 mt-1">Silakan masuk ke akun Anda</p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="p-8 sm:px-12 pb-12">
            <form action="#" method="POST" class="space-y-6" x-data="{ showPassword: false }">
                
                <!-- Email / Username -->
                <div>
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email atau Username</label>
                    <div class="mt-2 relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
                        </div>
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-2.5 pl-10 pr-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6" placeholder="admin@semmi.or.id">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">Kata Sandi</label>
                    <div class="mt-2 relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
                        </div>
                        <input id="password" name="password" :type="showPassword ? 'text' : 'password'" autocomplete="current-password" required class="block w-full rounded-md border-0 py-2.5 pl-10 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-semmi sm:text-sm sm:leading-6" placeholder="••••••••">
                        
                        <!-- Show/Hide Button -->
                        <button type="button" @click="showPassword = !showPassword" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-semmi focus:outline-none">
                            <span class="sr-only">Toggle password visibility</span>
                            <!-- Eye Icon (Show) -->
                            <svg x-show="!showPassword" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <!-- Eye Slash Icon (Hide) -->
                            <svg x-show="showPassword" x-cloak class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" /></svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-semmi focus:ring-semmi">
                        <label for="remember-me" class="ml-2 block text-sm leading-6 text-gray-900">Ingat saya</label>
                    </div>

                    <div class="text-sm leading-6">
                        <a href="#" class="font-semibold text-semmi hover:text-semmi-dark">Lupa sandi?</a>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="button" class="flex w-full justify-center items-center rounded-md bg-semmi px-3 py-2.5 text-sm font-bold uppercase tracking-widest text-white shadow-sm hover:bg-semmi-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-semmi transition-colors mt-8">
                        Login
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Footer Info -->
        <div class="bg-gray-50 px-8 py-4 border-t border-gray-100 text-center">
            <p class="text-xs text-gray-500">&copy; {{ date('Y') }} Serikat Mahasiswa Muslimin Indonesia.<br>Area Terbatas. Hanya untuk pengurus terdaftar.</p>
        </div>
    </div>

</body>
</html>
