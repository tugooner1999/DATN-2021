<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    // public $timestamps = true;
    //     protected $fillable = [
    //     'image',
    //     'name'
    // ];
    // public function products(){
    //     return $this->hasMany(Product::class, 'category_id');
    // }
    // public function SaveUpdate($id, $objU){
    //     return DB::table($this->table)
    //         ->where('id',$id)
    //         ->update($objU);
    // }
}