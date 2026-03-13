<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'brand',
        'model',
        'strap_material',
        'water_resistance',
        'price',
        'color',
        'description',
    ];
}
