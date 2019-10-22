<?php

namespace App\Http\Controllers\events;

use App\EventOrganizer\Detail\Category\EoDetailCategory;
use Illuminate\Http\Request;
use App\Http\Requests\events\CreateEventsRequest;
use App\EventOrganizer\Detail\EoDetailRepository;
use App\EventOrganizer\Detail\EoDetail;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = EoDetail::all();
        $category = EoDetailCategory::all();
        return view('events.index', compact('event', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create')->with('eoDetailCategory', EoDetailCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventsRequest $request)
    {
        $eventRepo = new EoDetailRepository();
        $eventRepo->storeEvent($request);
        session()->flash('success', 'Event Created Successfully');
        return redirect(route('events.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Eodetail $event)
    {
        $eventRepo = new EoDetailRepository();
        $daysLeft = $eventRepo->DaysLeftEvent($event);
        return view('events.show')->with('event', $event)->with('daysLeft', $daysLeft);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
