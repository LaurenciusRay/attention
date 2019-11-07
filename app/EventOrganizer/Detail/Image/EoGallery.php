<?php

namespace App\EventOrganizer\Detail\Image;

use Illuminate\Database\Eloquent\Model;

class EoGallery extends Model
{
    protected $fillable = ['eo_details_id', 'images'];
    public function eo_details()
    {
        return $this->belongsTo('App\EventOrganizer\Detail\EoDetail');
    }
}
