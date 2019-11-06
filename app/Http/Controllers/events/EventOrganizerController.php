<?php

namespace App\Http\Controllers\events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventOrganizer\Detail\EoDetailRepository;
use App\EventOrganizer\User\EoUser;

class EventOrganizerController extends Controller
{
    private $eventRepo;
    public function __construct(EoDetailRepository $eodetailrepository)
    {
        $this->eventRepo = $eodetailrepository;
    }
    public function index(EoUser $eventorganizer)
    {
        $eventSelection = $this->eventRepo->eventSelection($eventorganizer);
        return view('events.user.index')->with('eventorganizer', $eventorganizer)->with('eventSelection', $eventSelection);
    }
}