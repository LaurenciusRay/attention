<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\tenants\CreateTenantDetail;
use App\Tenant\Product\TenantProduct;
use App\Tenant\Product\TenantProductRepository;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('tenant.detail.view-detail')->with('data', TenantProduct::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('tenant.detail.create-detail');
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
		  $productRepo->storeProducts($request);
		  session()->flash('Successfully add product!');
		  return redirect(route('products.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tenant.detail.view-detail')->with('data', TenantProduct::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTenantDetail $request, TenantProduct $products)
    {
        $productRepo = new TenantProductRepository;
		$productRepo->updateProducts($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        $destroyRepo = new TenantProductRepository;
        $destroyRepo->destroyProducts($request);
        
        return redirect('products');
    }
}
