<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Db;
use App\Http\Controllers\Client\ProductControlle;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
class ProductController extends Controller
{
    //
    public function index(){

        return view('client.product.index');
    }

    public function single_Product($id){
        $product= Product::find($id);
        return view('client.product.single-product',compact('product'));
    }
}
