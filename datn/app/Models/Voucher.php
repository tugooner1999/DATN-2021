<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = "vouchers";
    public $timestamps = FALSE;
    protected  $primaryKey = 'id';

    protected $fillable = [
        'name',
        'start_date',
        'finish_date',
        'code',
        'created_by',
        'created_at',
        'amount',
        'type',
        'value',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
    public function voucher_type(){
        return $this->belongsTo(Voucher_type::class, 'type_id');
    }
    
}