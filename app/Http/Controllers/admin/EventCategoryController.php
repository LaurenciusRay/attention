<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests\events\CreateCategoriesRequest;
use App\Http\Requests\events\UpdateCategoriesRequest;
use App\EventOrganizer\Category\EventOrganizerCategory;
use App\EventOrganizer\Category\EventOrganizerCategoryRepository;
use App\Http\Controllers\Controller;

class EventCategoryController extends Controller
{
    private $eventCategoryRepo;
    public function __construct(EventOrganizerCategoryRepository $eventCategoryRepo)
    {
        $this->eventCategoryRepo = $eventCategoryRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event-category.index')->with('categories', EventOrganizerCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoriesRequest $request)
    {
        $this->eventCategoryRepo->storeCategory($request);
        session()->flash('success', 'Category Created Successfully');
        return redirect(route('events-categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EventOrganizerCategory $eventCategory)
    {
        return view('admin.event-category.create')->with('eventCategory', $eventCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, EventOrganizerCategory $eventCategory)
    {
        $this->eventCategoryRepo->updateCategory($request, $eventCategory);
        session()->flash('success', 'Category Updated Successfully');
        return redirect(route('events-categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EoDetailCategory $events_category)
    {
        $this->eventCategoryRepo->deleteCategory($events_category);
        return redirect(route('events-categories.index'));
    }
}
