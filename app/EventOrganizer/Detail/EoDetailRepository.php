<?php

namespace App\EventOrganizer\Detail;

use App\EventOrganizer\Detail\EoDetail;
use Illuminate\Support\Facades\Storage;

class EoDetailRepository{
    public function storeEvent($request)
    {
        // Store Image file
        $image = $request->image->store('events');
        // Storing Post
        $event = EoDetail::create([
            'title' => $request->title,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'image' => $image,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return $event;
    }
    public function deleteImage()
    {
        // Delete Image
        Storage::delete($this->image);
    }
}