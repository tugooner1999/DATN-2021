<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //
    public function add_wishlist($id){
        $new_wishlist = new Wishlist();
        $new_wishlist->product_id = $id;
        $new_wishlist->user_id = Auth::user()->id;
        $new_wishlist->save();
        return back();
    }

    public function index(){
    
        $id_user = Auth::user()->id;
        $wish_lists = Wishlist::all()->where('user_id',$id_user);
        return view('client.wishlist.index', compact('wish_lists'));
    }

    public function remove_wishlist($id){
        $id_destroy = Wishlist::find($id);
        $id_destroy->delete();

        return redirect()->back()->with('alert', 'Xóa thành công!');
    }
}