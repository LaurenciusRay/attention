<?php

namespace App\Tenant\User;

use App\Tenant\User\TenantUser;
use App\Tenant\Product\TenantProduct;

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
}