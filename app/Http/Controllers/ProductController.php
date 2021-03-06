<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Tenants\CreateTenantDetail;
use App\Http\Requests\Tenants\ProductCreateRequest;
use App\Http\Requests\Tenants\ProductUpdateRequest;
use App\Tenant\Product\TenantProduct;
use App\Tenant\Product\TenantProductRepository;

class ProductController extends Controller
{
    private $productRepo;

    public function __construct(TenantProductRepository $tenantproductrepo)
    {
      $this->productRepo = $tenantproductrepo;
    }

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
      $this->productRepo->storeProducts($request);
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
    public function edit(TenantProduct $product)
    {
      return view('tenant.detail.create-detail')->with('data', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request,TenantProduct $product){
      $this->productRepo->updateProducts($request, $product);
      session()->flash('success', 'Product Updated Successfully');
      return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenantProduct $product)
    {
        $product->delete();
        session()->flash('error', 'Product Deleted Successfully');
        return redirect('products');
    }
}
