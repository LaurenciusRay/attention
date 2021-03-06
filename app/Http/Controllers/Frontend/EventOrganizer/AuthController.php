<?php

namespace App\Http\Controllers\Frontend\EventOrganizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginEoUser as ValidationLoginEo;
use App\Http\Requests\Regist\RegistEoUser as ValidationRegistEo;
use App\EventOrganizer\User\EventOrganizerUserRepository;
use Auth;

class AuthController extends Controller
{
    private $eventOrgUserRepo;

    public function __construct(EventOrganizerUserRepository $eventOrgUserRepo)
    {
        $this->middleware('guest:eouser')->except('logout');
        $this->eventOrgUserRepo = $eventOrgUserRepo;
    }

    public function formLogin()
    {
        return view('page.frontend.login.loginEo');
    }

    public function login(ValidationLoginEo $request)
    {
        if (Auth::guard('eouser')->attempt($request->only('email', 'password'), $request->filled('remember'))) 
        {
            return redirect()->intended('/');
        }

        return $this->eventOrgUserRepo->loginFailed();
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
        $result = $this->eventOrgUserRepo->createEventOrganizerUser($request);
        if(!$result['status']){
            alertNotify(false, $result['message'], $request);
	        return redirect()->back();
        }
        return redirect()->route('login.eo-user-form');
    }
}
