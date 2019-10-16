<?php

namespace App\Tenant\User;

use App\Tenant\User\TenantUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TenantUserRepository{
    public function createTenantUser(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'photo' => 'required|image|mimes:jpeg,bmp,png',
                'description' => 'required',
                'email' => 'required|unique:tenant_users',
                'password' => 'required|min:8',
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
        $path = $photo->storeAs('TenantPhotos', $photoName);
        return TenantUser::create([
            'name' => $request['name'],
            'image_banner' => $path,
            'description' => $request['description'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }
}