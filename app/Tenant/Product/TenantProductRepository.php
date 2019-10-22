<?php

namespace App\Tenant\Product;
// use Illuminate\Support\Facades\Storage;
use App\Tenant\Product\TenantProduct;
use Illuminate\Support\Facades\Request;

class TenantProductRepository{

  public function storeProducts($request)
  {
    // Store Image file
    $image = $request->image->store('image/tenant');
    // Storing Post
    
    $product = TenantProduct::create([
      'tenant_users_id' => $request->tenant_users_id,
      'title' => $request->title,
      'image' => $image,
      'price' => $request->price,
    ]);
    return $product;
  }

  public function destroyProducts($id)
  {
    $data = TenantProduct::find($id);
    $data->delete();
  }

  public function updateProducts($as, $id)
  {

  }

}