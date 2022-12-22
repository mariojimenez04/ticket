@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
<div class="container mx-auto">

    @if ( session('mensaje'))
        <p class="bg-green-500 border-green-700 text-white px-4 py-3 rounded relative mt-5 mb-5">{{ session('mensaje') }}*</p>
    @endif

</div>

    <main class="flex gap-8 flex-col md:flex-row px-5 justify-center md:justify-around items-center h-screen">


        <a class="" href="">
            <div class="bg-white rounded-lg shadow-2xl w-48 h-48 md:w-80 md:h-80 p-6 flex justify-center flex-col">
                <div style="text-align: -moz-center; text-align: -webkit-center;">
                    <svg class="w-10 h-10 md:w-28 md:h-28" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>

                <h3 class="text-center text-base md:text-2xl">Dar de alta ticket</h3>
            </div>
        </a>

        <a href="">
            <div class="bg-white rounded-lg shadow-2xl w-48 h-48 md:w-80 md:h-80 p-6 flex justify-center flex-col">
                <div style="text-align: -moz-center; text-align: -webkit-center;">
                    <svg class="w-10 h-10 md:w-28 md:h-28" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                </div>

                <h3 class="text-center text-base md:text-2xl">Revisar status ticket</h3>
            </div>
        </a>

        <a href="">
            <div class="bg-white rounded-lg shadow-2xl w-48 h-48 md:w-80 md:h-80 p-6 flex justify-center flex-col">

                <div style="text-align: -moz-center; text-align: -webkit-center;">
                    <svg class="w-10 h-10 md:w-28 md:h-28" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>

                <h3 class="text-center text-base md:text-2xl">Perfil</h3>
            </div>
        </a>

        @if (auth()->user()->admin === 1)
            <a href="{{ route('user.register') }}">
                <div class="bg-white rounded-lg shadow-2xl w-48 h-48 md:w-80 md:h-80 p-6 flex justify-center flex-col">

                    <div style="text-align: -moz-center; text-align: -webkit-center;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 md:w-28 md:h-28">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                        </svg>
                    </div>

                    <h3 class="text-center text-base md:text-2xl">Usuarios(Administrador)</h3>
                </div>
            </a>
        @endif

    </main>


@endsection
