@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
<div class="container mx-auto">

    @if ( session('mensaje'))
        <p class="alert alert-success text-center">{{ session('mensaje') }}</p>
    @endif

</div>

    <main class="container">

        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4">

            <div class="col-md-3">
                <a href="">
                    <div class="card">
                        <div class="card-img-top">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Dar de alta ticket nuevo</h5>
                            <p class="card-text">Registrar nuevo ticket para que los encargados de sistemas te den continuidad en lo que requieres</p>
                            <a href="" class="btn btn-primary">Registrar ticket</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a class="flex justify-center" href="">
                    <div class="bg-white rounded-lg shadow-2xl w-48 h-48 md:w-80 md:h-80 p-6 flex justify-center flex-col">
                        <div style="text-align: -moz-center; text-align: -webkit-center;">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                        </div>

                        <h3 class="text-center text-base md:text-2xl">Revisar status ticket</h3>
                    </div>
                </a>
            </div>

            <div class="col">
                <a class="flex justify-center" href="">
                    <div class="bg-white rounded-lg shadow-2xl w-48 h-48 md:w-80 md:h-80 p-6 flex justify-center flex-col">

                        <div style="text-align: -moz-center; text-align: -webkit-center;">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>

                        <h3 class="text-center text-base md:text-2xl">Perfil</h3>
                    </div>
                </a>
            </div>

            @if (auth()->user()->admin === 1)
                <div class="col">
                    <a class="flex justify-center" href="{{ route('user.register') }}">
                        <div class="bg-white rounded-lg shadow-2xl w-48 h-48 md:w-80 md:h-80 p-6 flex justify-center flex-col">

                            <div style="text-align: -moz-center; text-align: -webkit-center;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                </svg>
                            </div>

                            <h3 class="text-center text-base md:text-2xl">Usuarios(Administrador)</h3>
                        </div>
                    </a>
                </div>
            @endif

        </div>


    </main>


@endsection
