<?php

namespace App\EventOrganizer\User;

use Auth;

class EoLoginRepository
{
    public function checkEoLogin($request)
    {
        if (Auth::guard('eouser')->attempt($request->only('email', 'password'), $request->filled('remember'))) {

            return redirect()->route('eouser.logged-in');
        }

        return $this->loginFailed();
    }

    public function loginFailed()
    {
        return redirect()->back()
            ->withErrors([
                'password' => 'wrong email or password combination',
                'email' => 'wrong email or password combination'
            ]);
    }

    public function formLoginEo()
    {
        $request = view('page.frontend.login.loginEo');
        
        if (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check()) {
            return redirect()->back();
        }

        return $request;
    }

}
