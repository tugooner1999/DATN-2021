<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    public $timestamps = FALSE;
        protected $fillable = [
        'image',
        'name'
    ];
    public function products(){
        return $this->hasMany(Product::class, 'category_id');
    }
    public function SaveUpdate($id, $objU){
        return DB::table($this->table)
            ->where('id',$id)
            ->update($objU);
    }
}