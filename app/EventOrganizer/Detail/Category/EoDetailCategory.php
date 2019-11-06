<?php

namespace App\EventOrganizer\Detail\Category;

use Illuminate\Database\Eloquent\Model;

class EoDetailCategory extends Model
{
    protected $fillable = ['name'];

    public function eodetails()
    {
        return $this->hasMany('App\EventOrganizer\Detail\EoDetail', 'eo_detail_categories_id');
    }
}
