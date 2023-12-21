<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_price',
        'fullname',
        'phone_number',
        'email',
        'address',
        'shipping_date',
        'payment_methor',
        'status',
        'user_id',
    ];
}