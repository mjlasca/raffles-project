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
    <body class="font-sans antialiased">
        <div class="flex">

            <!--Sidebar-->
            <div class=" hidden md:flex h-screen bg-gray-800">

                <div class="w-64 bg-gray-100">
                    <div class="bg-blue-500 py-4 h-40 flex flex-col items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-20">
                        <span class="text-white text-lg font-semibold mt-2">Company Name</span>
                    </div>
                    <nav class="mt-8 tx-blue-700">
                        <ul class="flex flex-col items-center text-white">
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Usuarios'" :link="'/usuarios'" :icon="'group'" />
                            </li>
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Dashboard'" :link="'/dashboard'" :icon="'tile'" />
                            </li>
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Rifas'" :link="'/rifas'" :icon="'switch'" />
                            </li>
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Asignaciones'" :link="'/asignaciones'" :icon="'walk'" />
                            </li>
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Boletas'" :link="'/boletas'" :icon="'ticket'" />
                            </li>
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Premios'" :link="'/premios'" :icon="'lightning'" />
                            </li>
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Comisiones'" :link="'/comisiones'" :icon="'dollar'" />
                            </li>
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Arqueos'" :link="'/arqueos'" :icon="'histogram'" />
                            </li>
                            <li class="mb-2">
                                <livewire:raffles.option-buttons :label="'Entregas'" :link="'/entregas'" :icon="'stack'" />
                            </li>
                        </ul>
                    </nav>
                </div>
            
            </div>
            
            <div class="w-full">
                <livewire:layout.navigation  />
                <main class="container mx-auto px-2 w-full">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
