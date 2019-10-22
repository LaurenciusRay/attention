<?php

namespace App\EventOrganizer\Detail\Category;

use Illuminate\Database\Eloquent\Model;

class EoDetailCategory extends Model
{
    protected $fillable = ['name'];

    public function eodetail()
    {
        return $this->hasToMany(EoDetail::class);
    }
}
