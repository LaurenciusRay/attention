<?php

namespace App\Http\Controllers\events;

use App\EventOrganizer\Detail\Category\EoDetailCategory;
use Illuminate\Http\Request;
use App\Http\Requests\events\CreateEventsRequest;
use App\Http\Requests\events\UpdateEventsRequest;
use App\EventOrganizer\Detail\EoDetailRepository;
use App\EventOrganizer\Detail\EoDetail;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    private $eventRepo;
    public function __construct(EoDetailRepository $eodetailrepository)
    {
        $this->eventRepo = $eodetailrepository;
    }
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
        $this->eventRepo->storeEvent($request);
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
        $daysLeft = $this->eventRepo->DaysLeftEvent($event);
        return view('events.show')->with('event', $event)->with('daysLeft', $daysLeft);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Eodetail $event)
    {
        return view('events.create')->with('event', $event)->with('eoDetailCategory', EoDetailCategory::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventsRequest $request, Eodetail $event)
    {
        $this->eventRepo->updateEvent($request, $event);
        session()->flash('success', 'Event Updated Successfully');
        return redirect(route('events.index'));
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
