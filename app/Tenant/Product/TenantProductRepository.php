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
    // $data = TenantProduct::where('id', $id)->first();
    //   $data->title = $request->title;
    //   $data->price = $request->price;

    //   // cek
    //   if ($request->file('image')== "") {
    //       $data->image = $data->image;
    //   }
    //   else {
    //       if ($request->hasFile('image')) {
    //       $file = 'image/tenant/'.$data->image;
    //       if (is_file($file)) {
    //           unlink($file);
    //       }
    //       // 
    //       $file = $request->file('image');
    //       $filename = $file->getClientOriginalName();
    //       $request->file('file')->move('image/tenant/'.$filename);
    //       $data->file = $filename;
    //   }
    // }
    //   $data->save();

    $data = $request->only('title, price');
    if($request->hasFile('image')){
      // upload image
      $image = $request->image->store('image/tenant');
      // delete old image
      $product->deleteImage();
      // save the $image to $data array
      $data['image'] = $image;
    }
    $update = $product->update($data);
    return $update;
  }

}