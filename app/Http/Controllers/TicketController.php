<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //

    public function index(){
        // $tickets = Ticket::where('user_id', auth()->user()->id)->get();
        $tickets = Ticket::where('user_id', auth()->user()->id)->paginate(10);

        return view('tickets.index', [
            'tickets' => $tickets,

        ]);
    }

    public function create(){
        $id_ticket = 'Ticket-dw' . rand(15154, 65415);

        //Retornar la vista
        return view('tickets.create', [
            'id_ticket' => $id_ticket
        ]);
    }

    public function store(Request $request){

        //Validar el formulario para retornar la vista
        $this->validate($request, [
            'ticket' => 'required',
            'descripcion' => 'required'
        ]);

        Ticket::create([
            'ticket' => $request->ticket,
            'descripcion' => $request->descripcion,
            'registrado_por' => auth()->user()->name,
            'equipo' => gethostname(),
            'ip' => $request->ip(),
            'user_id' => auth()->user()->id,
            'completado' => 0
        ]);

        return redirect()->route('ticket.index')->with('mensaje', 'Ticket dado de alta exitosamente');
    }
}
