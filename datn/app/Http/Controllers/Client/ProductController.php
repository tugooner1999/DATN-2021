<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Product;
use App\Models\Category;
=======
use App\Models;
use App\Models\Product;
use App\Models\Category;

>>>>>>> 3f328be4ac30d4c13c894e450ae9ced78e37bed8
class ProductController extends Controller
{
    
    public function index(){
<<<<<<< HEAD
        $product = Product::all();
        $category = Category::all();
        $category->load([
            'products'
        ]);
        return view('client.product.index',compact('product','category'));
=======
        $list_product = Product::all();
        $cates  = Category::all();
        return view('client.product.index', compact('list_product','cates'));
>>>>>>> 3f328be4ac30d4c13c894e450ae9ced78e37bed8
    }
    
    

    public function single_Product(){

        $product = Product::all();
        return view('client.product.single-product',compact('product'));
    }
}
