<?php

namespace App\Http\Controllers\events;

use App\EventOrganizer\Detail\Category\EoDetailCategory;
use Illuminate\Http\Request;
use App\Http\Requests\events\CreateEventsRequest;
use App\EventOrganizer\Detail\EoDetailRepository;
use App\EventOrganizer\Detail\EoDetail;
use App\EventOrganizer\DetailBooth\EoDetailBooth;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    private $eventsRepo;
    public function __construct(EoDetailRepository $eodetailrepository)
    {
        $this->eventsRepo = $eodetailrepository;
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

    public function createbooth($title, $capacity)
    {
        $eventbooth = $this->eventsRepo->getEventBooth($title, $capacity);
        return view('events.createbooth', compact('eventbooth'));
    }

    public function addbooth(Request $request)
    {

        foreach ($request->booth as $key => $value) {
            EoDetailBooth::create($value);
        }

        return back()->with('success', 'Record Created Successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventsRequest $request)
    {
        $this->eventsRepo->storeEvent($request);
        session()->flash('success', 'Event Created Successfully');
        $title = $request->title;
        $capacity = $request->capacity;
        return redirect(route('createboothnew', compact('title', 'capacity')));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Eodetail $event)
    {

        $daysLeft = $this->eventsRepo->DaysLeftEvent($event);
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
