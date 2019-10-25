<?php

namespace App\Http\Controllers\events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventOrganizerController extends Controller
{
    public function index()
    {
        return view('events.user.index');
    }
}
