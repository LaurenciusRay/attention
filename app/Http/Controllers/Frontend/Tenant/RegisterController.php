<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use Auth;
use App\Tenant\User\TenantRegistRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Regist\RegistTenantUser as ValidationRegistTenant;

class TenantRegistController extends Controller
{
    private $tenantUserRepo;

    public function __construct(TenantRegistRepository $tenantUserRepo)
    {
        $this->tenantUserRepo = $tenantUserRepo;
    }

    public function viewFormRegistTenant()
    {
        if (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check()) {
            return redirect()->back();
        } else {
            return view('page.frontend.register.registerTenant');
        }
    }

    public function registTenant(ValidationRegistTenant $request)
    {
        $this->tenantUserRepo->createTenantUser($request);

        return redirect()->route('login.tenant-user-form');
    }
}
