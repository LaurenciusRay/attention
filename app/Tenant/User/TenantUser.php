<?php

namespace App\Tenant\User;

use Illuminate\Database\Eloquent\Model;

class TenantUser extends Model
{   protected $table = 'tenant_users';
    public $timestamps = false;
    protected $fillable = ['email', 'password', 'name', 'image_banner', 'description'];
}
