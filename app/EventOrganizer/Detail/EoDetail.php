<?php

namespace App\EventOrganizer\Detail;

use Illuminate\Database\Eloquent\Model;

class EoDetail extends Model
{
    protected $fillable = ['title', 'description', 'capacity', 'image', 'image_layout', 'start_date', 'end_date', 'eo_detail_categories_id'];
    protected $dates = ['start_date', 'end_date'];

    public function eodetailcategory()
    {
        return $this->belongsTo(EoDetailCategory::class);
    }
}
