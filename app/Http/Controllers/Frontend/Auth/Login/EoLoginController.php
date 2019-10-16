<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EoLoginController extends Controller
{
    public function login(Request $request)
{
    // $this->validator($request);
    
    if(Auth::guard('eouser')->attempt($request->only('email','password'),$request->filled('remember'))){
        //Authentication passed...
        return redirect()
            ->intended(route('home'))
            ->with('status','You are Logged in as Admin!');
    }
    //Authentication failed...
    return $this->loginFailed();
}
}
