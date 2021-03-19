<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";
    public $timestamps = FALSE;
        protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
