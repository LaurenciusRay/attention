<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EoLoginController extends Controller
{
    public function formLoginEo()
    {
        return view('page.frontend.login.loginEo');
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => [
                'required',
                'email',
                'exists:eo_users',
                'max:2555'
            ],
            'password' => [
                'required',
                'max:255',
            ]
        ];
        //custom validation error messages.
        $messages = [
            'email.exists' => 'email not registered',
            'email.required' => 'email is required',
            'password.required' => 'password is required',
        ];
        //validate the request.

        $request->validate($rules, $messages);
    }

    private function loginFailed()
    {
        return redirect()->back()
            ->withErrors([
                'password' => 'wrong email or password combination',
                'email' => 'wrong email or password combination'
            ]);
    }

    public function login(Request $request)
    {
        $this->validator($request);

        if (Auth::guard('eouser')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            //Authentication passed...

            return redirect()->route('login.post.log');
            // ->intended(route('admin.home'))
            // ->with('status','You are Logged in as Admin!');
        }
        //Authentication failed...
        return $this->loginFailed();
    }
}
