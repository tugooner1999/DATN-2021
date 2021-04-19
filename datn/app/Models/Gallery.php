<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Gallery extends Model
{
    use HasFactory;
    protected $table = "galleries";
    public $timestamps = FALSE;
    protected $fillable = [
        'img_url',
        'product_id',
        'created_at'
    ];

    public static function where(string $string, $product_id)
    {
    }
}
