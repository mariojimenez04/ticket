@extends('layouts.app')

@section('titulo')
    Tickets
@endsection

@section('contenido')

    <div class="mb-5 container d-flex gap-3">
        <a href="{{ route('index') }}" class="btn btn-dark">Volver</a>
        <a href="{{ route('ticket.create') }}" class="btn btn-dark">Registrar ticket</a>
    </div>

    @if ( session('mensaje'))
        <p class="alert alert-success text-center">{{ session('mensaje') }}</p>
    @endif

    <div class="table-responsive shadow-lg">
        <table class="table table-hover align-middle {{-- table-striped-columns --}} bg-white">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ticket No.</th>
                    <th>Status</th>
                    <th>Ultima modificación</th>
                    @if (auth()->user()->admin === 1)
                        <th>Acciones</th>
                    @endif
                </tr>
            </thead>

            <tbody class="table-group-divider">

                @foreach ($tickets as $ticket)
                <tr>
                    @if( $ticket->activo === 1)
                        <td scope="row">{{ $ticket->id }}</td>
                        <th scope="row">{{ $ticket->ticket }}</th>
                        @if ($ticket->completado === 0)
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-pending-{{ $ticket->id }}">Pendiente</button>

                                <div class="modal fade" id="modal-pending-{{ $ticket->id }}" aria-hidden="true" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title">{{ $ticket->ticket }}</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <label for="">Descripcion problema</label>
                                                            <textarea class="form-control" disabled>{{ $ticket->descripcion_problema }}</textarea>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="">Ultima modificacion</label>
                                                            <input type="text" class="form-control form-control-sm" disabled value="{{ date('D-M-Y h:i', strtotime($ticket->created_at)) }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
                                                @if (auth()->user()->admin === 1)
                                                    <a href="{{ route('ticket.edit', $ticket->ticket) }}" class="btn btn-success">Actualizar registro</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        @else
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-success-{{ $ticket->id }}">Completado(Ver)</button>

                                <div class="modal fade" id="modal-success-{{ $ticket->id }}">

                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title">{{ $ticket->ticket }}</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <label for="">Descripcion problema</label>
                                                        <textarea class="form-control" disabled>{{ $ticket->descripcion_problema }}</textarea>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="">Ultima modificacion</label>
                                                        <input type="text" class="form-control form-control-sm" disabled value="{{ date('D-M-Y h:i', strtotime($ticket->created_at)) }}">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <label for="">Resolucion</label>
                                                        <textarea class="form-control" disabled>{{ $ticket->descripcion_resolucion }}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        @endif
                        <td>{{ $ticket->created_at }}</td>
                        @if ( $ticket->activo === 1)
                            @if (auth()->user()->admin === 1)
                                <td>
                                    <div class="d-flex flex-column gap-2">
                                        <form action="{{ route('ticket.destroy', $ticket->ticket) }}" method="POST">
                                            @csrf
                                            <input type="submit" value="Eliminar" class="btn btn-danger w-100">
                                        </form>
                                    </div>
                                </td>
                            @endif
                        @endif
                    @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    @if (auth()->user()->admin === 1)

    @else
        <div class="d-flex justify-content-center d-block">
            {{ $tickets->links() }}
        </div>
    @endif

@endsection
