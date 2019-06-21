<?php

namespace App\Http\Controllers;

use App\events;
use App\EventPhoto;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = events::all();
        return view ('welcome',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadRequest $request)
    {
        $events= events::create($request->all());
        
        $filename = $request -> photo ->store('photos');
        EventPhoto::create([
            'EventId'=> $events -> id,
            'NameOfEvent' => $request ->NameOfEvent,
            'VenueOfEvent' =>$request ->VenueOfEvent,
            'Town' => $request ->Town,
            'DateOfTheEvent' => $request -> DateOfTheEvent,
            'OrganizingCompany' =>$request-> OrganizingCompany,
            'ContactEmail' => $request -> ContactEmail,
            'Description' => $request ->Description,
            //'Categories' => $Categories,
            'filename' => $filename

        ]);
    return view('event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(events $events)
    {
        //
    }
}
