@extends('layouts.login')

@section('titulo')
    Iniciar sesion
@endsection

@section('contenido')

    <main class="flex items-center justify-center h-screen">
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="bg-white w-96 p-6 rounded shadow-2xl">
                <div class="flex items-center justify-center">
                    <a href="/">
                        <img class="h-32" src="{{ asset('img/logo.jpg') }}" alt="Imagen logo IT Office Solutions">
                    </a>
                </div>
                @if ( session('mensaje'))
                    <p class=" text-red-700 px-4 py-3 rounded relative mt-5 mb-5">{{ session('mensaje') }}*</p>
                @endif
                <div class="mb-4">
                    <label for="email" class="text-gray-800">Email</label>
                    <input name="email" id="email" type="email" class="w-full py-2 bg-gray-200 text-gray-700 px-1 outline-none rounded">

                    @error('email')
                        <p class=" text-red-700 px-4 py-3 rounded relative">{{ $message }}*</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="" class="text-gray-800">Contraseña</label>
                    <input name="password" type="password" class="w-full py-2 bg-gray-200 text-gray-700 px-1 outline-none rounded">

                    @error('password')
                        <p class=" text-red-700 px-4 py-3 rounded relative">{{ $message }}*</p>
                    @enderror
                </div>
                <button type="submit" class="bg-sky-500 text-white w-full rounded mt-3">Iniciar Sesion</button>
            </div>
        </form>
    </main>


@endsection
