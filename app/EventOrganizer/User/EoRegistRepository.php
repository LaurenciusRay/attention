<?php

namespace App\EventOrganizer\User;

use App\EventOrganizer\User\EoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EoRegistRepository
{
    public function createEoUser(Request $request)
    {
        $photo = $request->file('photo');
        $photoName = time() . "_" . $photo->getClientOriginalName();
        $path = $photo->storeAs('EoPhotos', $photoName);
        return EoUser::create([
            'name' => $request['name'],
            'image_banner' => $path,
            'description' => $request['description'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }
}
