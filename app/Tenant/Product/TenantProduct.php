<?php

namespace App\Tenant\Product;

use Illuminate\Database\Eloquent\Model;

class TenantProduct extends Model
{
    protected $table = 'tenant_products';
    public $timestamps = false;
    protected $fillable = ['tenant_users_id', 'title', 'image', 'price'];
}
