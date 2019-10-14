<?php

namespace App\EventOrganizer\Detail;

use App\EventOrganizer\Detail\EoDetail;

class EoDetailRepository{
    public function storeEvent($request)
    {
        $event = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'capcacity' => $request->capacity,
            'image' => $request->image,
        ]);
        return $event;
    }
}