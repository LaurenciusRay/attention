<?php

namespace App\EventOrganizer\Booth;

use Illuminate\Database\Eloquent\Model;

class BoothDetail extends Model
{
    protected $table = 'eo_detail_booth';
    protected $fillable = ['eo_detail_id', 'boothname', 'panjang', 'lebar', 'price', 'layout', 'description'];
}
