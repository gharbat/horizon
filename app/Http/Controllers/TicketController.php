<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function addTicket(){
        return view('pages.static.contact');
    }
}
