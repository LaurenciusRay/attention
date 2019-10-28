<?php

namespace App\Http\Controllers\events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventOrganizer\User\EoUser;

class EventOrganizerController extends Controller
{
    public function index(EoUser $eventorganizer)
    {
        return view('events.user.index')->with('eventorganizer', $eventorganizer);
    }
}
