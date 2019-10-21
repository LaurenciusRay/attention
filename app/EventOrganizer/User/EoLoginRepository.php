<?php

namespace App\EventOrganizer\User;

use Auth;

class EoLoginRepository
{
    public function checkEoLogin($request)
    {
        if (Auth::guard('eouser')->attempt($request->only('email', 'password'), $request->filled('remember'))) {

            return redirect()->route('login.post.log');
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
}
