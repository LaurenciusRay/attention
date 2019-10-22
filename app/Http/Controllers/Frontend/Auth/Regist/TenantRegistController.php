<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use App\Tenant\User\TenantUserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantRegistController extends Controller
{
    private $tenantUserRepository;
    
    public function __construct(TenantUserRepository $tenantUserRepository)
    {
        $this->tenantUserRepository = $tenantUserRepository;
    }
    public function formRegistTenant(){
        return view('page.frontend.register.registerTenant');
    }

    public function registTenant(Request $request){
        $this->tenantUserRepository->createTenantUser($request);
        
        return redirect()->route('login.tenant-user-form');
    }
}
