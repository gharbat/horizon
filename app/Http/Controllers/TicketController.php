<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function addTicket(){
        return view('pages.static.contact');
    }

    public function handleTicket(Request $request){
        $ticket = new Ticket();
        $ticket->email=    $request->email;
        $ticket->mobile =  $request->mobile;
        $ticket->title=    $request->title;
        $ticket->message = $request->message;
        $ticket->save();

        return redirect('/');
    }
}
