<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PODetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'po_id',
        'quantity',
        'price',
        'weight',
        'order_id',
        'product_id',
    ];
}