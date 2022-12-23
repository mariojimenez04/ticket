@extends('layouts.login')

@section('titulo')
    Iniciar sesion
@endsection

@section('contenido')

    <main class="bg-white shadow-lg rounded-3 m-width-25">
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="border rounded-3 p-5">

                <a class="d-flex justify-content-center" href="/">
                    <img class="img-fluid" src="{{ asset('img/logo.jpg') }}" alt="Imagen logo IT Office Solutions">
                </a>

                @if ( session('mensaje'))
                    <p class="alert alert-danger">{{ session('mensaje') }}*</p>
                @endif

                <div class="form-group mb-4">
                    <label for="email" class="text-gray-800">Email</label>
                    <input name="email" id="email" type="email" class="form-control">

                    @error('email')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="mb-4 form-group">
                    <label for="" class="text-gray-800">Contraseña</label>
                    <input name="password" type="password" class="form-control">

                    @error('password')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>

                <input type="submit" value="Iniciar sesion" class="btn btn-primary">
            </div>
        </form>
    </main>


@endsection
