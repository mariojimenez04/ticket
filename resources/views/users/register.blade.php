@extends('layouts.app')

@section('titulo')
    Registrar usuario
@endsection

@section('contenido')

    <div class="container mx-auto my-5">
        <a href="{{ route('index') }}" class=" bg-blue-800 font-bold text-white rounded p-2">Volver</a>
    </div>

    <main class="container mx-auto">

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                <div class="my-3">

                    <label for="nombre" class=" text-gray-600">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="p-2 rounded w-full shadow-2xl">

                    @error('nombre')
                        <p class=" text-red-700 px-4 py-3 rounded relative">El campo nombre es obligatorio.*</p>
                    @enderror
                </div>

                <div class="my-3">

                    <label for="empresa" class=" text-gray-600">Empresa</label>
                    <select class="p-2 rounded w-full shadow-2xl bg-white" name="empresa" id="empresa">
                        <option value="">-- Seleccionar --</option>
                        <option value="Supervisor">Supervisor</option>
                    </select>

                    @error('empresa')
                        <p class=" text-red-700 px-4 py-3 rounded relative">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="my-3">

                    <label for="email" class=" text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="p-2 rounded w-full shadow-2xl">

                    @error('email')
                        <p class=" text-red-700 px-4 py-3 rounded relative">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="my-3">

                    <label for="password" class=" text-gray-600">Password</label>
                    <input type="password" name="password" id="password" class="p-2 rounded w-full shadow-2xl">

                    @error('password')
                        <p class=" text-red-700 px-4 py-3 rounded relative">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="my-3">

                    <label for="password_confirmation" class=" text-gray-600">Repetir password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="p-2 rounded w-full shadow-2xl">

                    @error('password_confirmation')
                        <p class=" text-red-700 px-4 py-3 rounded relative">{{ $message }}*</p>
                    @enderror
                </div>

            </div>

            <button type="submit" class="p-2 bg-blue-800 font-bold text-white rounded mt-3">Registrar usuario</button>

        </form>

    </main>

@endsection
