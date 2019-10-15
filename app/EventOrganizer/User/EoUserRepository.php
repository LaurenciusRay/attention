<?php

namespace App\EventOrganizer\User;

class EoUserRepository{
    public function getEoUserEmail($email){
        return EoUsers::with([])->where('email', $email)->first();
    }
}