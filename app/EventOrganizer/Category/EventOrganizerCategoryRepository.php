<?php

namespace App\EventOrganizer\Category;
use App\EventOrganizer\Category\EventOrganizerCategory;

class EventOrganizerCategoryRepository{
    public function storeCategory($request)
    {
        $eventCategory = EventOrganizerCategory::create([
            'name' => $request->name,
        ]);
        return $eventCategory;
    }
    public function updateCategory($request, $id)
    {
        $id->update([
            'name' => $request->name
        ]);
    }
    public function deleteCategory($id)
    {
        if($id->eodetails->count())
        {
            session()->flash('error', 'Category cant be deleted, because its used on some event');
            return redirect()->back();
        }
        $id->delete();
        session()->flash('success', 'Category deleted successfully');
    }
}