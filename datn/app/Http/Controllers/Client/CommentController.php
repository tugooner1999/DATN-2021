<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
session_start();

class CommentController extends Controller
{
    //

    public function postComment(Request $request, $id){
        $dt_create = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString(); // biến lấy giá trị thời gian ngày bình luận
        $idProduct = $id;
        $comment = new Rating();
        $comment->ra_product_id = $idProduct;
        $comment->ra_user_id = Auth::User()->id;
        $comment->ra_content = $request->ra_content;
        $comment->created_at = $dt_create;

        // if($request -> ajax())
        // {
        //     Rating::insert([
        //         'ra_product_id'  => $id,
        //         'ra_content'     => $request->ra_content,
        //         'ra_user_id'     => get_data_user('web'),
        //         'ra_number'      => $request->number,
        //         'created_at'     => $dt_create,
        //     ]);
        // }
        // $comment = new Rating();
        // $product = Product::find($id);
        // $product->pro_total_number += $request->number;
        // $product->pro_total_rating += 1;
        // $product->save();
        $comment->save();
        return redirect()->back()->with('thongbao','bình luận sản phẩm thành công');
    }
    
}