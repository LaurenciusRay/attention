<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Tenant\User\TenantUser;
use App\Tenant\User\TenantUserRepository;
use App\Tenant\Product\TenantProduct;
use App\Tenant\Product\TenantProductRepository;


class TenantController extends Controller{

    private $tenantRepo;
    private $tenantProductRepo;

    public function __construct(TenantProductRepository $tenantproductrepo, TenantUserRepository $tenantuserrepo)
    {
        $this->tenantRepo = $tenantuserrepo;
        $this->tenantProductRepo = $tenantproductrepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters    =   $request->all();
        $data = $this->tenantRepo->getTenants($filters);
        return view('tenant.view-tenant', compact('data', 'filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TenantUser $tenant)
    {
        $productSelection = $this->tenantRepo->productSelection($tenant);
        return view('tenant.show')->with('data', $tenant)->with('productSelection', $productSelection);
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
