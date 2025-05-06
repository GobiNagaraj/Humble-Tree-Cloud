<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function list() {
        $events = Event::get();
        return view('backend.events.type', compact('events'));
    }

    public function store(Request $request) {
        $request->validate([
            'event_title' => 'required',
            'event_duration' => 'required',
            'availability' => 'required'
        ]);

        $event = new Event;

        $event->event_title = $request->event_title;
        $event->event_duration = $request->event_duration;
        $event->event_location = $request->event_location;
        $event->availability = $request->availability;
        $event->host = $request->host;

        $event->save();

        return redirect('/backend/event/type')->withSuccess('Event type created successfully!!');
    }

    public function destroy($id) {
        $event = Event::where('id', $id);
        $event->delete();

        return redirect('/backend/event/type')->withSuccess('Event type deleted successfully!!');
    }
}
