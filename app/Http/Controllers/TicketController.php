<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //

    public function index(){
        // dd();
        // $tickets = Ticket::where('user_id', auth()->user()->id)->get();
        $tickets = Ticket::where('user_id', auth()->user()->id)->paginate(10);

        return view('tickets.index', [
            'tickets' => $tickets,
        ]);
    }

    public function create(){
        $id_ticket = 'Ticket-nr' . rand(15154, 65415);

        //Retornar la vista
        return view('tickets.create', [
            'id_ticket' => $id_ticket
        ]);
    }

    public function store(Request $request){

        //Validar el formulario para retornar la vista
        $this->validate($request, [
            'ticket' => 'required|unique:tickets,ticket',
            'descripcion' => 'required'
        ]);

        Ticket::create([
            'ticket' => $request->ticket,
            'descripcion_problema' => $request->descripcion,
            'descripcion_resolucion' => '',
            'registrado_por' => auth()->user()->name,
            'equipo' => gethostname(),
            'ip' => $request->ip(),
            'user_id' => auth()->user()->id,
            'completado' => 0,
            'updated_at' => 'xxx'
        ]);

        return redirect()->route('ticket.index')->with('mensaje', 'Ticket dado de alta exitosamente');
    }

    public function edit($id){
        $resultado = Ticket::where('ticket', $id)->first();

        return view('tickets.edit',[
            'resultado' => $resultado
        ]);
    }

    public function update(Request $request, $id){
        $registro = Ticket::where('ticket', $id)->first();

        $this->validate($request,[
            'resolucion' => 'required'
        ]);

        $registro->descripcion_resolucion = $request->resolucion ?? 'XXX';
        $registro->save();

        return redirect()->route('ticket.index')->with('mensaje', 'Registro actualizado correctamente');
    }
}
