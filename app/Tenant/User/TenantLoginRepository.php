<?php

namespace App\Tenant\User;

class TenantLoginRepository
{
    public function loginFailed()
    {
        return redirect()->back()
            ->withErrors([
                'password' => 'wrong email or password combination',
                'email' => 'wrong email or password combination'
            ]);
    }
}
