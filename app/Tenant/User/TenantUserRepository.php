<?php

namespace App\Tenant\User;

use App\Tenant\User\TenantUser;
use App\Tenant\Product\TenantProduct;
use Illuminate\Support\Facades\Hash;

class TenantUserRepository{
  
    public function productSelection($productUser)
    {
        $result = TenantProduct::all()->where('tenant_users_id', '==', $productUser->id);
        return $result;
    }
    public function tenantShowed()
    {
        $search = request()->query('search');

        // testing
        
        if($search)
        {
            $result = TenantUser::where('title', 'LIKE', "%{$search}%")->filtercategory()->paginate(8);
        }
        else
        {
            $result = TenantUser::paginate(16);
        }
        return $result;
    }

    public function loginFailed()
    {
        return redirect()->back()
            ->withErrors([
                'password' => 'wrong email or password combination',
                'email' => 'wrong email or password combination'
            ]);
    }

    public function createTenantUser($request)
    {
        try{
            $photo = $request->file('photo');
            $photoName = time() . "_" . $photo->getClientOriginalName();
            $path = $photo->storeAs('TenantPhotos', $photoName);
            TenantUser::create([
                'name' => $request['name'],
                'image_banner' => $path,
                'description' => $request['description'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return returnResult('', true);
        }catch(\Exception $e){
            return returnResult($e->getMessage());
        }
    }
}