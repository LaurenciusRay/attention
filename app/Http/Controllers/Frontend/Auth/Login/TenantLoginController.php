<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginTenantUser as ValidationLoginTenant;
use App\Tenant\User\TenantLoginRepository;
use Auth;

class TenantLoginController extends Controller
{
    private $tenantLoginRepository;

    public function __construct(TenantLoginRepository $tenantLoginRepository)
    {
        $this->middleware('guest:tenantuser')->except('logout');
        $this->tenantLoginRepository = $tenantLoginRepository;
    }

    public function formLogin()
    {
        return view('page.frontend.login.loginTenant');
    }

    public function login(ValidationLoginTenant $request)
    {
        if (Auth::guard('tenantuser')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect('/');
        }

        return $this->tenantLoginRepository->loginFailed();
    }
}
