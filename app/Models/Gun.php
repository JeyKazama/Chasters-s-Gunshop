<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gun extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'caliber',
        'magazine',
        'price',
    ];    
}
