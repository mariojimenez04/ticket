@extends('layouts.app')

@section('titulo')
    Registrar ticket
@endsection

@section('subtitulo')
    Registrar ticket
@endsection

@section('contenido')
    <main class="container">
        <form action="{{ route('ticket.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="ticket">Ticket</label>
                    <input type="text" id="ticket" name="ticket" class="form-control form-control-sm" value="{{ $id_ticket }}">

                    @error('ticket')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="descripcion">Reporte del problema</label>
                    <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion') }}</textarea>

                    @error('descripcion')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>
            </div>

            <hr class="mt-5">
            <input type="submit" value="Registrar ticket" class="btn btn-success">
        </form>

    </main>
@endsection
