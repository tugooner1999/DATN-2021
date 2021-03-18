<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'name',
        'image_gallery',
        'description ',
        'price',
        'quantily',
        'category_id',
        'views',
        'updated_at',
        'created_at',
        'type_id',
        'product_market_id'
    ];
}
