<?php

namespace App\EventOrganizer\Image;

use Illuminate\Database\Eloquent\Model;

class EventOrganizerGallery extends Model
{
    protected $fillable = ['eo_details_id', 'images'];
    public function eo_details()
    {
        return $this->belongsTo('App\EventOrganizer\Detail\EventOrganizer');
    }
}
