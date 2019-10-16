<?php

namespace App\Http\Controllers\Frontend\Auth\Regist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantRegistController extends Controller
{
    public function formRegistTenant(){
        return view('page.frontend.register.registerTenant');
    }

    public function registTenant() {
        //
    }
}
