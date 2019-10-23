<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests\events\CreateCategoriesRequest;
use App\Http\Requests\events\UpdateCategoriesRequest;
use App\EventOrganizer\Detail\Category\EoDetailCategory;
use App\EventOrganizer\Detail\Category\EoDetailCategoryRepository;
use App\Http\Controllers\Controller;

class EoDetailCategoryController extends Controller
{
    private $eventCategoryRepo;
    public function __construct(EoDetailCategoryRepository $eodetailcategoryrepository)
    {
        $this->eventCategoryRepo = $eodetailcategoryrepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.EoDetailCategory.index')->with('eoDetailCategory', EoDetailCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.EoDetailCategory.create');
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
    public function edit(EoDetailCategory $events_category)
    {
        return view('admin.EoDetailCategory.create')->with('eoDetailCategory', $events_category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, EoDetailCategory $events_category)
    {
        $this->eventCategoryRepo->updateCategory($request, $events_category);
        session()->flash('success', 'Category Updated Successfully');
        return redirect(route('events-categories.index'));
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
