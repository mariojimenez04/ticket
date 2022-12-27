@extends('layouts.app')

@section('titulo')
    Actualizar ticket
@endsection

@section('subtitulo')
    Actualizar ticket
@endsection

@section('contenido')
    <main class="container">
        <form action="{{ route('ticket.update', $resultado->ticket) }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="ticket">Ticket</label>
                    <input type="text" id="ticket" name="ticket" class="form-control form-control-sm" value="{{ $resultado->ticket }}" disabled>

                    @error('ticket')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="col-md-5">
                    <label for="descripcion">Reporte del problema</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" disabled>{{ $resultado->descripcion_problema }}</textarea>

                    @error('descripcion')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>

                <div class="col-md-5">
                    <label for="resolucion">Resolucion del problema</label>
                    <textarea name="resolucion" id="resolucion" class="form-control">{{ old('resolucion') }}</textarea>

                    @error('resolucion')
                        <p class="a-t-d">{{ $message }}*</p>
                    @enderror
                </div>
            </div>

            <hr class="mt-5">
            <input type="submit" value="Actualizar ticket" class="btn btn-success">
        </form>

    </main>
@endsection
