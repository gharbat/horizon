<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function showEvent($slug){
        $event = Event::where('slug',$slug)->firstOrFail();
        return view('pages.events.single-event',compact('event'));
    }

    public function allEvents(){
        return view('pages.events.all-events');
    }
}

