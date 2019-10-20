<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EventOrganizer\User\EoUserRepository;
use Illuminate\Support\Facades\Hash;

class EoLoginController extends Controller
{
    private $eoUserRepository;

    public function __construct(EoUserRepository $eoUserRepository)
    {
        $this->eoUserRepository = $eoUserRepository;
    }

    public function formLoginEo()
    {
        return view('page.frontend.login.loginEo');
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:eo_users|max:255',
            'password' => 'required|max:255',
        ];
        //custom validation error messages.
        $messages = [
            'email.exists' => 'email not registered',
        ];
        //validate the request.
        
        $request->validate($rules, $messages);
    }

    private function loginFailed()
    {
        return redirect()->back();
        // ->back()
        // ->withInput()
        // ->with('error','Login failed, please try again!');
    }


    public function login(Request $request)
    {
        // $this->eoUserRepository->login($request);
        $this->validator($request);
        
        if (Auth::guard('eouser')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            //Authentication passed...
            if (!Hash::check($request->get('password'), $request->password)) {
                return 'wrong password';
            }
            return redirect()->route('login.post.log');
            // ->intended(route('admin.home'))
            // ->with('status','You are Logged in as Admin!');
        }
        //Authentication failed...
        return $this->loginFailed();
        // return redirect()->back();
    }
}
