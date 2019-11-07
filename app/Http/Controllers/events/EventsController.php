<?php

namespace App\Http\Controllers\events;

use App\EventOrganizer\Detail\Category\EoDetailCategory;
use Illuminate\Http\Request;
use App\Http\Requests\events\CreateEventsRequest;
use App\Http\Requests\events\UpdateEventsRequest;
use App\EventOrganizer\Detail\EoDetailRepository;
use App\EventOrganizer\Detail\EoDetail;
use App\EventOrganizer\DetailBooth\EoDetailBooth;
use App\EventOrganizer\User\EoUser;
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
        $event = $this->eventRepo->eventShowed();
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
        $eventbooth = $this->eventRepo->getEventBooth($title, $capacity);
        return view('events.createbooth', compact('eventbooth'));
    }

    public function addbooth(Request $request)
    {

        foreach ($request->booth as $key => $value) {
            EoDetailBooth::create($value);
            // EoDetail::where('id', $request->eo_detail_id)
            //     ->update([
            //         'capacity' => $request->booth->count()
            //     ]);
        }
        $eventorganizer = $request->eo_users_id;

        return redirect(route('eventorganizer.index', compact('eventorganizer')));
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
        $image = $this->eventRepo->firstImage($event);
        $images = $this->eventRepo->imageGallery($event);
        $daysLeft = $this->eventRepo->DaysLeftEvent($event);
        $boothShow = $this->eventRepo->showBooth($event);
        return view('events.show', compact('boothShow'))->with('event', $event)->with('daysLeft', $daysLeft)->with('image', $image)->with('images', $images);
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
