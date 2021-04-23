<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(){
        $this->authorize('admin');
        return view('admin.order.index');
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit_order(){
        $this->authorize('admin');
        return view('admin.order.edit-order');
    }

    public function order_detail(){
        $this->authorize('admin');
        return view('admin.order.order_detail');
    }
}
