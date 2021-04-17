<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use App\Models\Rating;
use DB;
use Illuminate\Support\Facades\Session;
session_start();

class CommentController extends Controller
{
    //
    public function index(Request $request){
        $this->authorize('admin');
        $user_comment = User::all();
        $product_comment = Product::all();
        $comment = Rating::all();
        return view('admin.comment.index', compact('user_comment','product_comment','comment'));
    }

    public function deleteComment($rating_id){
        Rating::destroy($rating_id);
        Session::put('message', 'Xoá sản phẩm thành công');
        return  redirect()->back();
        ;
    }
}