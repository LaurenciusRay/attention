<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use App\EventOrganizer\User\EoUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterEoController extends Controller
{
    protected function create(Request $request){
        $photo = $request->file('photo');
        $photoName = time()."_".$photo->getClientOriginalName();
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
