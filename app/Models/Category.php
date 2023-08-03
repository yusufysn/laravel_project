<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;

class Category extends Model
{
    protected $fillable = [
        'image',
        'thumbnail',
        'name',
        'slug',
        'content',
        'cat_ust',
        'status',
    ];

    public function items(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function subcategory(){
        return $this->hasMany(Category::class, 'cat_ust', 'id');
    }

    public function category(){
        return $this->hasOne(Category::class, 'id', 'cat_ust');
    }
}
