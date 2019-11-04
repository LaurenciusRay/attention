<?php

namespace App\EventOrganizer\Detail;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class EoDetail extends Model
{
    protected $fillable = ['title', 'description', 'capacity', 'image', 'image_layout', 'start_date', 'end_date', 'eo_detail_categories_id', 'eo_users_id'];
    protected $dates = ['start_date', 'end_date'];

    public function eo_detail_categories()
    {
        return $this->belongsTo('App\EventOrganizer\Detail\Category\EoDetailCategory');
    }
    public function eo_users()
    {
        return $this->belongsTo('App\EventOrganizer\User\EoUser');
    }
    public function deleteImage()
    {
        Storage::delete($this->image);
    }
}
