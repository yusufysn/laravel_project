<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'slug',
        'content',
        'short_text',
        'price',
        'size',
        'color',
        'amount',
        'status',
        'category_id',
    ];
}
