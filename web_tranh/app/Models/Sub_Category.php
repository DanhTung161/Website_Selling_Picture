<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    protected $table='sub_categories';
    
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
    ];
    public function subCategories() {
        return $this->hasMany(Product::class);
    }
}