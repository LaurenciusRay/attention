<?php

namespace App\Tenant\User;

use Auth;

class TenantLoginRepository
{
    public function checkTenantLogin($request)
    {
        if (Auth::guard('tenantuser')->attempt($request->only('email', 'password'), $request->filled('remember'))) {

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
