<?php

namespace App\Tenant\User;

use Auth;
use App\Tenant\User\TenantUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TenantRegistRepository
{
    public function createTenantUser(Request $request)
    {
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

    public function formRegistTenant()
    {
        $request = view('page.frontend.register.registerTenant');

        if (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check()) {
            return redirect()->back();
        }

        return $request;
    }
}
