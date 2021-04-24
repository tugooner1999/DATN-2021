<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    public $timestamps = FALSE;
    protected $fillable = [
    'voucher_id',
    'totalMoney',
    'order_by',
    'created_at',
    'type_id',
    'payment_method',
    'customer_email',
    'customer_address',
    'customer_phone',
    'customer_fullname',
    'status'
    ];

}