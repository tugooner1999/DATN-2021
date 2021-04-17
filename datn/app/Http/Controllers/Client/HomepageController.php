<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use DB;
use App\Models;
use App\Models\Product;

class HomepageController extends Controller
{
    //
    public function index(){
        $cates = Category::all();
        $slider = Slider::all();
        $product = Product::all();
        $cates->load([
            'products'
        ]);
        return view('client.homepage.index',compact('cates','slider','product'));
    }
    public function client_admin(){
        return view('welcome');
    }
}
