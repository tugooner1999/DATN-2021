<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = "vouchers";
    public $timestamps = FALSE;
        protected $fillable = [
        'name',
        'start_date',
        'finish_date',
        'code',
        'created_by',
        'created_at',
        'type_id',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
}