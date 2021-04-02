<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    
    public function index(){
        $product = Product::all();
        $category = Category::all();
        $category->load([
            'products'
        ]);
        return view('client.product.index',compact('product','category'));
    }
    
    

    public function single_Product(){

        $product = Product::all();
        return view('client.product.single-product',compact('product'));
    }
}
