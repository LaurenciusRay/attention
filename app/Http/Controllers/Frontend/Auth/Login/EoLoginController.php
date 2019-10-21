<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginEoUser as ValidationLoginEo;
use App\EventOrganizer\User\EoLoginRepository;

class EoLoginController extends Controller
{
    private $eoLoginRepository;

    public function __construct(EoLoginRepository $eoLoginRepository)
    {
        $this->eoLoginRepository = $eoLoginRepository;
    }

    public function formLoginEo()
    {
        return view('page.frontend.login.loginEo');
    }

    public function login(ValidationLoginEo $request)
    {
        return $this->eoLoginRepository->checkEoLogin($request);
    }
}
