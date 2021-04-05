<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    
    public function index(){
        $list_product = Product::all();
        $cates  = Category::all();
        return view('client.product.index', compact('list_product','cates'));

    }
    
    public function single_Product($id){
        $product= Product::find($id);
        return view('client.product.single-product',compact('product'));
    }
}
