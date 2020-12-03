<?php

namespace App\EventOrganizer\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EventOrganizerUser extends Authenticatable
{
    use Notifiable;

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'name',
        'email', 
        'image_banner',
        'password',
        'description',
    ];
}
