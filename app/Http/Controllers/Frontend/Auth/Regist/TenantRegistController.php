<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use App\Tenant\User\TenantRegistRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantRegistController extends Controller
{
    private $tenantRegistRepository;
    
    public function __construct(TenantRegistRepository $tenantRegistRepository)
    {
        $this->tenantRegistRepository = $tenantRegistRepository;
    }
    
    public function formRegistTenant(){
        return view('page.frontend.register.registerTenant');
    }

    public function registTenant(Request $request){
        $this->tenantRegistRepository->createTenantUser($request);
        
        return redirect()->route('login.tenant-user-form');
    }
}
