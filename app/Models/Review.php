<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_id',
        'image',
        'review',
        'rating',
        'date',
        'user_id',
        'service_id',
    ];
}