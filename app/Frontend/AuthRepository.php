<?php

namespace App\Frontend;

use App\EventOrganizer\User\EoUser;
use Illuminate\Support\Facades\Hash;

class AuthRepository {
    public function loginUsers($request) {
        $result = ['status' => false, 'message' => ''];
        
        $eoUsers = EoUser::getEoUserEmail($request->get('email'));
        
        if(!$eoUsers) {
            $result['message'] = "Email tidak terdaftar";
            return $result;
        }

        if (!Hash::check($request->get('password'), $eoUsers->password)) {
            $result['message']    = 'Password salah. Coba lagi atau klik Lupa Password untuk mereset password.';
            return $result;
        }

        $result['status']   = true;
        $result['message']  = $eoUsers;
        return $result;
    }
}