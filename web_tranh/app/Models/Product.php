<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'size',
        'composed',
        'image',
        'description',
        'material_id',
        'sub_category_id',
        'color_id',
        'tone_id',
    ];
    
    
}