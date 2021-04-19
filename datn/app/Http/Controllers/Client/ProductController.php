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
use DB;
use Illuminate\Database;

class ProductController extends Controller
{

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(){
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
        $comments = Rating::where('ra_product_id', $id)->get();

        // thống kê số lượt đánh giá
        $ratingsDashboard = Rating::groupBy('ra_number')
        ->where('ra_product_id',$id)
        ->select(DB::raw('count(ra_number) as total'),DB::raw('sum(ra_number) as sum'))
        ->addSelect('ra_number')
        ->get()->toArray();

        
        $arrayRatings = [];
        if(!empty($ratingsDashboard)){
            for($i = 1; $i <= 5; $i++){
                $arrayRatings[$i] = [
                    "total" => 0,
                    "sum"   => 0,
                    "ra_number" => 0
                ];
                foreach($ratingsDashboard as $item){
                    if($item['ra_number'] == $i){
                        $arrayRatings[$i] = $item;
                        continue;
                    }
                }
            }
        }
        // return view('client.product.single-product',compact('product','comments','arrayRatings'));
        $id_cate = $product->category_id;
        $cates = Product::all()->where('category_id', $id_cate);
        $img_url = Gallery::all()->where('product_id', $id);
        return view('client.product.single-product',compact('product','img_url','cates','comments','arrayRatings'));
    }
}
