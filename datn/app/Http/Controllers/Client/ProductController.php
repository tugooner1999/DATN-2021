<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view('client.product.index');
    }

    public function single_Product(){
        return view('client.product.single-product');
    }
}