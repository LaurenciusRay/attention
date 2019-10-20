<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantsController extends Controller
{
    public function detail()
    {
        return view('tenants.d_tenants');
    }
}
