<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $this->authorize('member');
        $about = About::all();
        $product = DB::table('products')->orderBy('views' , 'Desc' )->take(4)->get();
        return view('client.about.index', compact('about','product'));
    }
}
