<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher_type extends Model
{
    protected $table = "vouchers_type";
    public $timestamps = FALSE;
        protected $fillable = [
            'id',
        'name',
        'status'
    ];
    public function voucher_type(){
        return $this->belongsTo(Voucher_type::class, 'type_id');
    }
}
