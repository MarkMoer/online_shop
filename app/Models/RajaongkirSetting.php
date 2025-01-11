<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RajaongkirSetting extends Model
{
    protected $fillable = [
        'api_key',
        'api_type',
        'couriers',
        'is_valid',
        'error_message',
    ];
}
