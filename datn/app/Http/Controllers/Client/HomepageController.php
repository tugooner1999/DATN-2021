<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;
use App\Models;
use App\Models\Product;
use Illuminate\Support\Carbon;
class HomepageController extends Controller
{
    //
    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(){
        $cates = Category::all();
        $slider = Slider::all();
        $market_product =DB::table('products')->where('allow_market',2)->orderBy('id', 'ASC')->get();
        $new_product = DB::table('products')->where('allow_market',1)->orderBy('id', 'DESC')->get();
        $new_product1 = DB::table('products')->where('allow_market',1)->orderBy('id', 'ASC')->get();
        $product = Product::all();
        $ratings = Rating::all();
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('H:i:s');
        $cates->load([
            'products'
        ]);
        return view('client.homepage.index',compact('cates','slider','ratings','new_product','market_product','product','new_product1','today'));
    }
    public function client_admin(){
        return view('welcome');
    }
}
