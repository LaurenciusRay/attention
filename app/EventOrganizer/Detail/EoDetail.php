<?php

namespace App\EventOrganizer\Detail;

use Illuminate\Database\Eloquent\Model;

class EoDetail extends Model
{
    protected $fillable = ['title', 'description', 'eo_users_id', 'start_date', 'end_date', 'capacity'];
    protected $dates = ['start_date', 'end_date'];
}
