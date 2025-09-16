<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ open: false, activeMenu: null }" class="flex h-screen bg-gray-100 font-sans">
            <x-admin-sidebar />
            <!-- Main content -->
            <div class="flex-1 ml-0 md:ml-64">
                <!-- Top bar -->
                <header class="fixed top-0 left-0 right-0 flex items-center justify-between h-16 px-4 bg-white border-b shadow-md md:hidden">
                    <button @click="open = !open" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <a href="{{route('admin.dashboard')}}"><x-application-logo /></a>
                </header>

                <!-- Page content -->
                <main class="p-6 pt-20">
                    @if (isset($header))
                        <h2 class="text-2xl font-semibold mb-4">{{ $header }}</h2>
                    @endif
                    {{ $slot }}
                </main>
            </div>
        </div>
        @stack('modals')

        @livewireScripts
    </body>
</html>
