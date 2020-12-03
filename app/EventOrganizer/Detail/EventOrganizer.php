<?php

namespace App\EventOrganizer\Detail;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class EventOrganizer extends Model
{
    protected $fillable = ['title', 'description', 'capacity', 'image', 'image_layout', 'start_date', 'end_date', 'eo_detail_categories_id', 'eo_users_id'];
    protected $dates = ['start_date', 'end_date'];

    public function eo_detail_categories()
    {
        return $this->belongsTo('App\EventOrganizer\Category\EventOrganizerCategory');
    }
    public function eo_users()
    {
        return $this->belongsTo('App\EventOrganizer\User\EventOrganizerUser');
    }
    public function deleteImage()
    {
        Storage::delete($this->image);
    }
    public function scopeFiltercategory($event)
    {
        if(request('category'))
        {
            $event->where('eo_detail_categories_id', '=', request('category'));
        }
        return $event;
    }
}
