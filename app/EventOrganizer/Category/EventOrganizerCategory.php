<?php

namespace App\EventOrganizer\Category;

use Illuminate\Database\Eloquent\Model;

class EventOrganizerCategory extends Model
{
    protected $fillable = ['name'];
    protected $table    = 'eo_detail_categories';

    public function eodetails()
    {
        return $this->hasMany('App\EventOrganizer\Detail\EventOrganizerCategory', 'eo_detail_categories_id');
    }
}
