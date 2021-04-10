<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $timestamps = FALSE;

    protected $fillable = [
        'name',
        'image_gallery',
        'description',
        'price',
        'quantily',
        'category_id',
        'views',
        'updated_at',
        'created_at',
        'allow_market',
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
