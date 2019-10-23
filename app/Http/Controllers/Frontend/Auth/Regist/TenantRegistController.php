<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use App\Tenant\User\TenantRegistRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Regist\RegistTenantUser as ValidationRegistTenant;

class TenantRegistController extends Controller
{
    private $tenantRegistRepository;

    public function __construct(TenantRegistRepository $tenantRegistRepository)
    {
        $this->tenantRegistRepository = $tenantRegistRepository;
    }

    public function formRegist()
    {
        return $this->tenantRegistRepository->formRegistTenant();
    }

    public function registTenant(ValidationRegistTenant $request)
    {
        $this->tenantRegistRepository->createTenantUser($request);

        return redirect()->route('login.tenant-user-form');
    }
}
