<?php

namespace App\Tenant\Product;
// use Illuminate\Support\Facades\Storage;
use App\Tenant\Product\TenantProduct;

class TenantProductRepository{
  public function storeTenant($request)
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
}