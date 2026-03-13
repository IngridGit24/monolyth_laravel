<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_brand',
        'phone_model',
        'phone_storage',
        'phone_ram',
        'phone_price',
        'phone_color',
        'phone_weight',
        'phone_dimensions',
        'phone_features',
        'description',
        'phone_image'
    ];
}
