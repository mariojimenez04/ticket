<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //

    public function index(){
        // $tickets = Ticket::where('user_id', auth()->user()->id)->get();
        $tickets = Ticket::where('user_id', auth()->user()->id)->paginate(2);

        return view('tickets.index', [
            'tickets' => $tickets
        ]);
    }
}
