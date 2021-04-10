<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Product;
use App\Models\User;
use App\Models\Voucher;

class DashboardController extends Controller
{
    public function admin(){
        $product = count(Product::all());
        $user = count(User::all());
        $voucher = count(Voucher::all());
        return view('admin.dashboard.index',compact('product','user','voucher'));
    }
}
