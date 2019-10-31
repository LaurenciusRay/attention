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
}