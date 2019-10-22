<?php

namespace App\Http\Controllers\Frontend\Auth\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantLoginController extends Controller
{
    public function formLoginTenant(){
        return view('page.frontend.login.loginTenant');
    }
}
