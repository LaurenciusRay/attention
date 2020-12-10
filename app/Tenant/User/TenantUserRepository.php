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
    public function getTenants($filters = [])
    {
        $data   =   TenantUser::with([]);
        if(!empty($filters['name'])){
            $data   = $data->where('name', 'LIKE', "%{$filters['name']}%");  
        }
        if(!empty($filters['email'])){
            $data   = $data->where('email', $filters['email']);
        }

        return $data->paginate(25);
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