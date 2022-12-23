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
            <div class="row">

                <div class="col-md-5 form-group mb-3">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" value="{{ old('nombre') }}">

                    @error('nombre')
                        <p class="a-t-d">El campo nombre es obligatorio.*</p>
                    @enderror
                </div>

                <div class="col-md-4 form-group">

                    <label for="empresa" class=" text-gray-600">Empresa</label>
                    <select class="form-select form-select-sm" name="empresa" id="empresa">
                        <option value="">-- Seleccionar --</option>
                        <option value="Supervisor">Supervisor</option>
                    </select>

                    @error('empresa')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="form-group col-md-5 mb-3">

                    <label for="email" class="text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm" value="{{ old('email') }}">

                    @error('email')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="form-group col-md-4">

                    <label for="password" class=" text-gray-600">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-sm">

                    @error('password')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="form-group col-md-4 mb-3">

                    <label for="password_confirmation" class=" text-gray-600">Repetir password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-sm">

                    @error('password_confirmation')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>

            </div>

            <button type="submit" class="btn btn-success">Registrar usuario</button>

        </form>

    </main>

@endsection
