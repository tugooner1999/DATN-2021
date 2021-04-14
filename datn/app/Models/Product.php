<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $timestamps = FALSE;

    protected $fillable = [
        'id',
        'name',
        'image_gallery',
        'description ',
        'price',
        'quantily',
        'category_id',
        'views',
        'updated_at',
        'created_at',
        'allow_market',
        'pro_total_rating',
        'pro_total_number',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function saveUpdate($id, $objPro){
        return DB::table($this->table)
            ->where('id',$id)
            ->update($objPro);
    }

}
