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

    public function formRegistEo(){
        return view('page.frontend.register.registerEo');
    }
    
    public function registEo(Request $request){
        $this->eoUserRepository->createEoUser($request);
        
        return redirect()->route('login.eo-user-form');
    }
    
    
}
