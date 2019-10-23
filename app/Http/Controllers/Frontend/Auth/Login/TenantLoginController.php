<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginTenantUser as ValidationLoginTenant;
use App\Tenant\User\TenantLoginRepository;

class TenantLoginController extends Controller
{
    private $tenantLoginRepository;

    public function __construct(TenantLoginRepository $tenantLoginRepository)
    {
        $this->tenantLoginRepository = $tenantLoginRepository;
    }

    public function formLogin()
    {
        return $this->tenantLoginRepository->formLoginTenant();
    }

    public function login(ValidationLoginTenant $request)
    {
        return $this->tenantLoginRepository->checkTenantLogin($request);
    }
}
