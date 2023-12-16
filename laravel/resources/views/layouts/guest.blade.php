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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="px-4 mx-auto max-w-screen-xl lg:px-8">
                    <!-- Barre de navigation et connexion utilisateur -->
                    <nav class="flex justify-between items-center py-4">
                        <!-- Logo ou nom du site -->
                        <div>
                            <a href="/" class="text-lg font-semibold">Google</a>
                        </div>

                        <!-- Liens de connexion -->
                        <div>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Connexion</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Inscription</a>
                                @endif
                            @endauth
                        </div>
                    </nav>
                </div>
            </section>
        </div>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @livewireScripts
    </body>
</html>
