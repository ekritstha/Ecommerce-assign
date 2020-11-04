<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Models\Category;

class Product extends Model
{
    protected $fillable = [
        'name',
        'product_id',
        'slug',
        'price',
        'description',
        'category',
        'image1',
        'image2',
        'image3',
        'image4'
    ];

    public function categoryId()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
