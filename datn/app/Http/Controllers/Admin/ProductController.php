<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
        return view('admin.product.index');
    }

    public function create_product(){
        $cates = Category::all();
        return view('admin.product.add-product', compact('cates'));
    }

    public function edit_product(){
        return view('admin.product.edit-product');
    }
}
