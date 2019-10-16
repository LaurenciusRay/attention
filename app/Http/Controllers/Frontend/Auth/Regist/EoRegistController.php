<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use App\EventOrganizer\User\EoUserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EoRegistController extends Controller
{
    private $eoUserRepository;
    
    public function __construct(EoUserRepository $eoUserRepository)
    {
        $this->eoUserRepository = $eoUserRepository;
    }

    public function registEo(Request $request){
        $this->eoUserRepository->createEoUser($request);
        
        return view ('page.frontend.login.loginEo');
    }

}
