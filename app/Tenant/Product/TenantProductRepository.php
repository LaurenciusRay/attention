<?php

namespace App\Tenant\Product;
use Illuminate\Support\Facades\Storage;
use App\Tenant\Product\TenantProduct;
use Illuminate\Support\Facades\Request;

class TenantProductRepository{

  public function storeProducts($request)
  {
    // Store Image file
    $image = $request->image->store('image/tenant');
    // Storing Post
    
    $product = TenantProduct::create([
      'tenant_users_id' => $request->user_id,
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

  public function updateProducts($request, $product)
  {
    $data = $request->only('title', 'price');
    if($request->hasFile('image'))
    {
        // Upload it
        $image = $request->image->store('image/tenant');
        // Delete old one
        $product->deleteImage();
        // Save the $image to $data array
        $data['image'] = $image;
    }
    $update = $product->update($data);
    return $update;
  }
}