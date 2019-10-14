<?php

namespace App\EventOrganizer\Detail;

use App\EventOrganizer\Detail\EoDetail;

class EoDetailRepository{
    public function storeEvent($request)
    {
        $event = EoDetail::create([
            'title' => $request->title,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'image' => $request->image,
        ]);
        return $event;
    }
}