<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use App\Models;
class HomepageController extends Controller
{
    //
    public function index(){
        $cates = Category::all();
        $cates->load([
            'products'
        ]);
        return view('client.homepage.index',compact('cates'));
    }
}
