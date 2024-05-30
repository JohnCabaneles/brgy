<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->get();

        return view('events.index',[
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'string',
            'description' => 'string'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('EventImage', 'public');
        };

        Event::create($formFields);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
         $formFields = $request->validate([
            'title' => 'string',
            'description' => 'string'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('EventImage', 'public');
        };

        $event->update($formFields);

        return redirect('/events')->with('message', 'Event updated succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return back()->with('message', 'Event deleted successfully');
    }
}
