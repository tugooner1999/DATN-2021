<?php

namespace App\Http\Controllers\Client;
session_start();
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
class CartController extends Controller
{
    //
    public function index(){
        
        return view('client.cart.index');
    }
    public function addToCart(Request $rq){
        $id = $rq ->id;
        $product = Product::where('id',$id)->first();
        if($product){
            if(!isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['name'] =$product->name;
                $_SESSION['cart'][$id]['image'] =$product->image_gallery;
                $_SESSION['cart'][$id]['price'] =$product->price;
                $_SESSION['cart'][$id]['quantity'] =1;
            }
            else{
                $_SESSION['cart'][$id]['quantity'] += 1;
            }
            $totalItem = 0;
            foreach($_SESSION['cart'] as $val){
                $totalItem += $val['quantity'];
            }
            return response()->json(
                [
                    'status' => true,
                    'totalItem' => $totalItem
                ]
            );
        }
        // return redirect()->route('client.homepage');
        
        
    }
    public function updateCart(Request $rq){
        
        
    }
}
