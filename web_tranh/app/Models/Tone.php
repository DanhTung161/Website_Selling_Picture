<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tone extends Model
{
    protected $table='tones';


    use HasFactory;
    protected $fillable = [
        'name',

    ];
    public function tone() {
        return $this->hasMany(Product::class);
    }
}