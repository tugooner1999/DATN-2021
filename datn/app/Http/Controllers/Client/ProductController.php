<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Rating;


class ProductController extends Controller
{

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(){
        $this->authorize('member');
        $list_product = Product::paginate(12);
        $cates  = Category::all();
        return view('client.product.index', compact('list_product','cates'));

    }

    public function allow_market(){
        $this->authorize('member');
        $list_product = Product::where('allow_market','2')->paginate(12);
        $cates  = Category::all();
        return view('client.product.index', compact('list_product','cates'));

    }
    public function single_Product($id){
        $product= Product::find($id);
        // comment
        $id_cate = $product->category_id;
        $cates = Product::all()->where('category_id', $id_cate);
        $comments = Rating::where('ra_product_id', $id)->get();
        $img_url = Gallery::all()->where('product_id' , $id);
        return view('client.product.single-product',compact('product','comments','cates','img_url'));
    }
}
