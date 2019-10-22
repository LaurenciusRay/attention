<?php

namespace App\Tenant\User;

use Auth;

class TenantLoginRepository
{
    public function checkTenantLogin($request)
    {
        if (Auth::guard('tenantuser')->attempt($request->only('email', 'password'), $request->filled('remember'))) {

            return redirect()->route('tenantuser.logged-in');
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

    public function formLoginTenant()
    {
        $request = view('page.frontend.login.loginTenant');
        
        if (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check()) {
            return redirect()->back();
        }

        return $request;
    }
}
