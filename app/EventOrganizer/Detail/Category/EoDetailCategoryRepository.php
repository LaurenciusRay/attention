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
}