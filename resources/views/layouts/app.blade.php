<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IT Office Solutions - @yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-md bg-white mb-5 p-3">
            <div class="container-fluid">
                <a href="{{ route('index') }}" class="navbar-brand font-bold ">IT Office Solutions</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button class="button-1">
                            <i class="bi bi-bell"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('user.logout') }}" method="POST">
                            @csrf
                            <input class="border border-0 bg-transparent" type="submit" value="Cerrar sesion">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <div>
            @yield('contenido')
        </div>

    </body>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</html>
