<?php

namespace App\EventOrganizer\Detail\Category;
use App\EventOrganizer\Detail\Category\EoDetailCategory;

class EoDetailCategoryRepository{
    public function storeCategory($request)
    {
        $eventCategories = EoDetailCategory::create([
            'name' => $request->name,
        ]);
        return $eventCategories;
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