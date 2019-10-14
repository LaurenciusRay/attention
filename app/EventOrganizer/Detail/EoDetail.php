<?php

namespace App\EventOrganizer\Detail;

use Illuminate\Database\Eloquent\Model;

class EoDetail extends Model
{
    protected $fillable = ['title', 'description', 'capacity', 'image'];
    protected $dates = ['start_date', 'end_date'];
}
