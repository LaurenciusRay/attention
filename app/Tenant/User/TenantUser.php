<?php

namespace App\Tenant\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

<<<<<<< HEAD
class TenantUser extends Authenticatable
{
    use Notifiable;

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'name',
        'email', 
        'image_banner',
        'password',
        'description',
    ];
=======
class TenantUser extends Model
{   protected $table = 'tenant_users';
    public $timestamps = false;
    protected $fillable = ['email', 'password', 'name', 'image_banner', 'description'];
>>>>>>> aris
}
