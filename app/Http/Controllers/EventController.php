<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index() {
        return view('pages/listing');
    }

    public function addEvent(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'opening' => 'required',
            'closing' => 'required',
            'location' => 'required',
            'ticket' => 'required',
            'description' => 'required'
        ]);
        
        $event = new Event;
        $event->title = $request->input('title');
        $event->opening = $request->input('opening');
        $event->closing = $request->input('closing');
        $event->location = $request->input('location');
        $event->ticket = $request->input('ticket');
        $event->description = $request->input('description');
        $event->save();
        return redirect('/home')->with('info', 'Event added successfully !');
    }
}
