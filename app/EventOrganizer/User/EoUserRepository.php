<?php

namespace App\EventOrganizer\User;

use App\EventOrganizer\User\EoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EoUserRepository
{

    public function createEoUser(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'photo' => 'required|image|mimes:jpeg,bmp,png',
                'description' => 'required',
                'email' => 'required|unique:eo_users',
                'password' => 'required',
            ],
            [
                'name.required' => "your name or organization's name is required",
                'photo.required' => "your photo or organization's logo is required",
                'description.required' => 'description is required',
                'email.required' => 'email is required',
                'password.required' => 'password is required',
            ]
        );

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
