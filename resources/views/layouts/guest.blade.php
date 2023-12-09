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
    </head>
    <body class="font-sans text-gray-900 bg-gray-100 m-0 overflow-hidden">
        <div class="flex items-center justify-center h-screen">
            <div class="md:w-3/5 flex items-center justify-center">
                <div class=" w-80">
                    <h2 class="text-blue-500 text-4xl"><b>Bienvenid@</b></h2>
                    <p>
                        Ingresa tu usuario y contraseña
                    </p>
                    {{ $slot }}
                </div>
            </div>
            <div class="hidden md:flex h-full w-2/5">
                <img class="w-full h-full" src="{{ asset('img/bg-login.png') }}" alt="Background login">
            </div>
        </div>
    </body>
</html>
