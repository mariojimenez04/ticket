@extends('layouts.app')

@section('titulo')
    Tickets
@endsection

@section('contenido')

     <table class="table table-hover table-responsive {{-- table-striped-columns --}} bg-white">
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

        </tbody>
    </table>

    <div class="d-flex justify-content-center d-block">
        {{ $tickets->links() }}
    </div>

@endsection
