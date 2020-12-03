<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use Auth;
use App\Http\Controllers\Controller;
use App\EventOrganizer\User\EventOrganizerUserRepository;
use App\Http\Requests\Regist\RegistEoUser as ValidationRegistEo;

class EoRegistController extends Controller
{
    private $eventOrgUserRepo;

    public function __construct(EventOrganizerUserRepository $eventOrgUserRepo)
    {
        $this->eventOrgUserRepo = $eventOrgUserRepo;
    }

    public function viewFormRegistEo()
    {
        if (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check()) {
            return redirect()->back();
        } else {
            return view('page.frontend.register.registerEo');
        }
    }

    public function registEo(ValidationRegistEo $request)
    {
        $this->eventOrgUserRepo->createEventOrganizerUser($request);

        return redirect()->route('login.eo-user-form');
    }
}
