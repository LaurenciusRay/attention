<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginTenantUser as ValidationLoginTenant;
use App\Http\Requests\Regist\RegistTenantUser as ValidationRegistTenant;
use App\Tenant\Auth\TenantLoginRepository;
use App\Tenant\User\TenantUserRepository;
use Auth;

class TenantLoginController extends Controller
{
    private $tenantUserRepo;

    public function __construct(TenantUserRepository $tenantUserRepo)
    {
        $this->middleware('guest:tenantuser')->except('logout');
        $this->tenantUserRepo = $tenantUserRepo;
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

        return $this->tenantUserRepo->loginFailed();
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
