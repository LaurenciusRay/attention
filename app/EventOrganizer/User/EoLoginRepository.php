<?php

namespace App\EventOrganizer\User;

class EoLoginRepository
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
