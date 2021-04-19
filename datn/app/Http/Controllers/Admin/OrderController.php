<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $this->authorize('admin');
        return view('admin.order.index');
    }

    public function edit_order(){
        $this->authorize('admin');
        return view('admin.order.edit-order');
    }
}
