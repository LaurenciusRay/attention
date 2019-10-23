<?php

namespace App\EventOrganizer\Detail;

use App\EventOrganizer\Detail\EoDetail;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EoDetailRepository
{
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
            'eo_detail_categories_id' => $request->category,
        ]);
        return $event;
    }
    public function DaysLeftEvent($event)
    {
        $endDate = new Carbon($event->end_date);
        $now = Carbon::now();
        $difference = ($endDate->diff($now)->days < 1) ? 'Today' : $endDate->diffForHumans($now);
        return $difference;
    }
    public function deleteImage()
    {
        // Delete Image
        Storage::delete($this->image);
    }
}
