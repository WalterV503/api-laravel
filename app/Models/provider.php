<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'provider_nit',
        'provider_name',
        'provider_service',
        'department',
        'municipality',
        'descripcion',
    ];
}
