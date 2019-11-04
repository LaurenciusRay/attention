<?php

namespace App\EventOrganizer\DetailBooth;

use Illuminate\Database\Eloquent\Model;

class EoDetailBooth extends Model
{
    public $table = 'eo_detail_booth';
    protected $fillable = ['eo_detail_id', 'boothname', 'panjang', 'lebar', 'price', 'layout', 'description'];
}
