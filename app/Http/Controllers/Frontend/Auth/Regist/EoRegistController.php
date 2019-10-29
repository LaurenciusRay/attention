<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use Auth;
use App\EventOrganizer\User\EoRegistRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Regist\RegistEoUser as ValidationRegistEo;

class EoRegistController extends Controller
{
    private $eoRegistRepository;

    public function __construct(EoRegistRepository $eoRegistRepository)
    {
        $this->eoRegistRepository = $eoRegistRepository;
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
        $this->eoRegistRepository->createEoUser($request);

        return redirect()->route('login.eo-user-form');
    }
}
