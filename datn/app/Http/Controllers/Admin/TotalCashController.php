<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TotalCashController extends Controller
{
    //
    public function index(){
        return view('admin.total-cash.index');
    }
}
