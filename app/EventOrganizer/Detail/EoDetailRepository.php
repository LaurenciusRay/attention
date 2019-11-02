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
        $store = EoDetail::create([
            'title' => $request->title,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'image' => $image,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'eo_detail_categories_id' => $request->category,
            'eo_users_id' => $request->user_id,
        ]);
        return $store;
    }
    public function DaysLeftEvent($event)
    {
        $endDate = new Carbon($event->end_date);
        $now = Carbon::now();
        $difference = ($endDate->diff($now)->days < 1) ? 'Today' : $endDate->diffForHumans($now);
        return $difference;
    }
    public function updateEvent($request, $event)
    {
        $data = $request->only('title', 'description', 'start_date', 'end_date', 'capacity', 'category');
        if($request->hasFile('image'))
        {
            // Upload it
            $image = $request->image->store('events');
            // Delete old one
            $event->deleteImage();
            // Save the $image to $data array
            $data['image'] = $image;
        }
        $update = $event->update($data);
        return $update;
    }
    public function eventSelection($eventorganizer)
    {
        $result = EoDetail::all()->where('eo_users_id', '==', $eventorganizer->id);
        return $result;
    }
    public function eventShowed()
    {
        $result = EoDetail::all()->where('start_date', '<=', now())->where('end_date', '>=', now());
        return $result;
    }
}
