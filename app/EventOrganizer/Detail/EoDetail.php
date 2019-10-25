<?php

namespace App\EventOrganizer\Detail;

use Illuminate\Database\Eloquent\Model;

class EoDetail extends Model
{
    protected $fillable = ['title', 'description', 'capacity', 'image', 'start_date', 'end_date', 'eo_detail_categories_id', 'eo_users_id'];
    protected $dates = ['start_date', 'end_date'];

    public function eodetailcategory()
    {
        return $this->belongsTo(EoDetailCategory::class);
    }
    public function deleteImage()
    {
        Storage::delete($this->image);
    }
}
