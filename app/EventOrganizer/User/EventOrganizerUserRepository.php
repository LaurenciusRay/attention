<?php

namespace App\EventOrganizer\User;

use App\EventOrganizer\User\EventOrganizerUser;

class EventOrganizerUserRepository
{
    public function loginFailed()
    {
        return redirect()->back()
            ->withErrors([
                'password' => 'wrong email or password combination',
                'email' => 'wrong email or password combination'
            ]);
    }
    public function createEventOrganizerUser(Request $request)
    {
        $photo = $request->file('photo');
        $photoName = time() . "_" . $photo->getClientOriginalName();
        $path = $photo->storeAs('EoPhotos', $photoName);
        return EventOrganizerUser::create([
            'name' => $request['name'],
            'image_banner' => $path,
            'description' => $request['description'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }
}
