@extends('layouts.app')

@section('titulo')
    Tickets
@endsection

@section('contenido')

    <div class="table-responsive">
        <table class="table table-hover align-middle {{-- table-striped-columns --}} bg-white">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ticket No.</th>
                    <th>Status</th>
                    <th>Ultima modificación</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">

                @foreach ($tickets as $ticket)
                <tr>
                        <td scope="row">{{ $ticket->id }}</td>
                        <th scope="row">{{ $ticket->ticket }}</th>
                        @if ($ticket->completado === 0)
                            <td>Pendiente</td>
                        @else
                            <td>Completado</td>
                        @endif
                        <td>{{ $ticket->created_at }}</td>
                        <td>
                            <div class="d-flex flex-column gap-2">
                                <a href="" class="btn btn-warning">Editar</a>
                                <form action="" method="POST">
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-danger w-100">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center d-block">
        {{ $tickets->links() }}
    </div>

@endsection
