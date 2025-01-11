<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'province_id',
        'regency_id',
        'subdistrict_id',
        'name',
        'description',
        'image',
        'banner',
        'address',
        'whatsapp',
        'province_name',
        'regency_name',
        'subdistrict_name',
    ];
}
