<?php

namespace App\EventOrganizer\User;

use App\EventOrganizer\User\EoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Middleware\EoUserMiddleware;

class EoUserRepository
{
    use AuthenticatesUsers;
    
    protected $guard = 'eouser';

    protected $redirectTo = '/';
    
    public function guard()
    {
        return auth()->guard('admin');
    }

    public function createEoUser(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'photo' => 'required|image|mimes:jpeg,bmp,png',
                'description' => 'required',
                'email' => 'required|unique:eo_users',
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
        $path = $photo->storeAs('EoPhotos', $photoName);
        return EoUser::create([
            'name' => $request['name'],
            'image_banner' => $path,
            'description' => $request['description'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }

    public function login(Request $request)
    {
        if (auth()->guard('eouser')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->url('regist.eo-user-form');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }

    // public function login()
    // {
    //     // $this->validator($request);

    //     if (Auth::guard('eouser')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
    //         //Authentication passed...
    //         return redirect()
    //             ->intended(route('home'))
    //             ->with('status', 'You are Logged in as Admin!');
    //     }
    //     //Authentication failed...
    //     return $this->loginFailed();
    // }

}
