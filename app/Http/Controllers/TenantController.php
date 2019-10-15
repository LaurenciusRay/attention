<?php

namespace App\Http\Controllers;

use App\Tenant\User\TenantUser;
use Illuminate\Http\Request;

class TenantController extends Controller
{
  public function index(){
		$data = TenantUser::all();
  	return view('tenant.view-tenant', compact('data'));
  }
}
