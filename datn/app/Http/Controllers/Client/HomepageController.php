<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Rating;
use DB;
use App\Models;
use App\Models\Product;

class HomepageController extends Controller
{
    //
    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(){
        $cates = Category::all();
        $slider = Slider::all();
        $ratings = Rating::all();
        $new_product = Product::all()->where('allow_market','1')->sortByDesc("id")->take(8);
        $sortbyView = Product::all()->sortByDesc("views")->take(8);
        $market_product = Product::all()->where('allow_market','2')->sortByDesc("id")->take(10);
        $sortbyRate = Product::all()->sortByDesc("pro_total_number")->take(3);
        $sortbyCmt = Product::all()->sortByDesc("pro_total_rating")->take(8);
        return view('client.homepage.index',compact('cates','slider','ratings','new_product','sortbyView','sortbyCmt','market_product','sortbyRate'));
    }
    public function client_admin(){
        return view('welcome');
    }
}
