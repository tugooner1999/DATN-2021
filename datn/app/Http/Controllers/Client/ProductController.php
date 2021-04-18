<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database;

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
        $list_promarket = Product::where('allow_market','2')->paginate(12);
        $cates  = Category::all();
        return view('client.product.allow-market', compact('list_promarket','cates'));

    }

    public function single_Product($id){
        $product= Product::find($id);
        $id_cate = $product->category_id;
        $cates = Product::all()->where('category_id', $id_cate);
        $img_url = Gallery::all()->where('id' , $id);
        return view('client.product.single-product',compact('product','img_url','cates'));
    }
}
