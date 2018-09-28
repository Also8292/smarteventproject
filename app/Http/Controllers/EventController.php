<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index() {
        $event = Event::all();
        return view('pages/listing', ['event' => $event]);
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
        $event->user = Auth::id();

        if($event->opening < $event->closing) {
            $event->save();
            return redirect('/home')->with('info', 'Event added successfully !');
        }

        else{
            return redirect('/createEvent')->with('info', 'Incorrect opening and closing !');
        }
    }


}
