<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IT Office Solutions - @yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        @vite('resources/css/app.css')

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow sticky top-0">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('index') }}">
                    <h1 class="text-3xl font-black">
                        IT Office Solutions
                    </h1>
                </a>

                <nav class="flex gap-5 items-center">
                    <div>
                        <p class="text-gray-600">Hola: <strong>{{ auth()->user()->name }}</strong></p>
                    </div>
                    <button>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </button>
                    <form action="{{ route('user.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-gray-600" >Cerrar sesion</button>
                    </form>
                </nav>
            </div>
        </header>

        <div>
            @yield('contenido')
        </div>

    </body>
</html>
