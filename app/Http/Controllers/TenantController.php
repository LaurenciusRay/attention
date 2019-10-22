<?php

namespace App\Http\Controllers;

use App\Http\Requests\tenants\CreateTenantDetail;
use Illuminate\Http\Request;
use App\Tenant\User\TenantUser;
use App\Tenant\User\TenantUserRepository;
use App\Tenant\Product\TenantProduct;
use App\Tenant\Product\TenantProductRepository;


class TenantController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tenant.view-tenant')->with('data', TenantUser::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenant.detail.view-detail');
    }

    // public function show(Eodetail $event)
    // {
    //     $eventRepo = new EoDetailRepository();
    //     $daysLeft = $eventRepo->DaysLeftEvent($event);
    //     return view('events.show')->with('event', $event)->with('daysLeft' , $daysLeft);
    // }

    

    public function detail(TenantUser $id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTenantDetail $request)
    {
			$productRepo = new TenantProductRepository;
			$productRepo->storeTenant($request);
			session()->flash('Successfully add product!');
			return redirect(round('tenants.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TenantUser $tenant)
    {
        return view('tenants.d_tenants')->with('data', $tenant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
