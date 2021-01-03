<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eve=Event::all();
        return view('Event.index',compact('eve'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'eventid' => 'required|unique:events',
            'eventtitle' => 'required',
            'eventtype' => 'required|alpha',
            'eventdate' => 'required',
            'eventcoordinator' => 'required|alpha|max:15', 
            'eventconductedby' => 'required',
            'eventdetail' => 'required',            
        ]);
        Event::add($request->all());        
        return redirect('/event')->with('messageadd','Successfully Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($eventid)
    {
        //
        $eve=Event::findOrFail($eventid);
        return view('Event.show',compact('eve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($eventid)
    {
        //
        $eve=Event::find($eventid);
        return view('Event.edit',compact('eve'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $eventid)
    {
        //
        $validatedData = $request->validate([
            'eventid' => 'required',
            'eventtitle' => 'required',
            'eventtype' => 'required|alpha',
            'eventdate' => 'required',
            'eventcoordinator' => 'required|alpha|max:15', 
            'eventconductedby' => 'required',
            'eventdetail' => 'required',            
        ]);
        $event=Event::find($eventid);
        $data=$request->all();
        //dd($data);
        $event->edit(collect($data));
        return redirect('/event')->with('messageup','Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($eventid)
    {
        //
        Event::destroy($eventid);
        return redirect('event')->with('messagedel','Successfully Deleted !');
    }
}