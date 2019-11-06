<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginEoUser as ValidationLoginEo;
use App\EventOrganizer\User\EoLoginRepository;
use Auth;

class EoLoginController extends Controller
{
    private $eoLoginRepository;

    public function __construct(EoLoginRepository $eoLoginRepository)
    {
        $this->middleware('guest:eouser')->except('logout');
        $this->eoLoginRepository = $eoLoginRepository;
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

        return $this->eoLoginRepository->loginFailed();
    }
}
