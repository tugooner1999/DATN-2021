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
        $this->authorize('member');
        return view('client.cart.index');
    }
    public function addToCart(Request $rq){
        $this->authorize('member');
        $id = $rq ->id;
        $product = Product::where('id',$id)->first();
        if($product){
            if(!isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['id'] =$product->id;
                $_SESSION['cart'][$id]['name'] =$product->name;
                $_SESSION['cart'][$id]['image'] =$product->image_gallery;
                $_SESSION['cart'][$id]['price'] =$product->price;
                $_SESSION['cart'][$id]['quantity'] =1;
            }
            else{
                $_SESSION['cart'][$id]['quantity'] += 1;
            }
            $totalItem = 0;
            $totalPriceInCart = 0;
            foreach($_SESSION['cart'] as $val){
                $totalItem += $val['quantity'];
                $totalPriceInCart += $val['price'] * $val['quantity'];
            }
            return response()->json(
                [
                    'status' => true,
                    'totalItem' => $totalItem,
                    'totalPriceInCart' => $totalPriceInCart
                ]
            );
        }
        // return redirect()->route('client.homepage');
        
        
    }
    public function removeProductInCart(Request $rq){
        $idPro = $rq->id;
        if($rq->action=='remove-one'){
            unset($_SESSION['cart'][$idPro]);

        }
        if(empty($_SESSION['cart']) || !isset($_SESSION['cart'])){
            unset($_SESSION['voucher']);

        }
        $totalItem = 0;
        $totalPriceInCart = 0;
        foreach($_SESSION['cart'] as $val){
            $totalItem += $val['quantity'];
            $totalPriceInCart += $val['price'] * $val['quantity'];
        }
        if($rq->action=='remove-all'){
            unset($_SESSION['cart']);
            unset($_SESSION['voucher']);
            

        }
        return response()->json(
            [
                'status' => true,
                'totalItem' => $totalItem,
                'totalPriceInCart' => $totalPriceInCart
            ]
        );
    }
    public function updateCart(Request $rq){
        $idPro = $rq->id;
        $quantityPro = $rq->quantity;
        // dd($quantityPro);
        $product = Product::whereIn('id',$idPro)->get();

        if($product){
            foreach($product as $key => $pro){
                if(!is_numeric($quantityPro[$key])){
                    return response()->json(
                        [
                            'msg' => 'Số lượng k đúng định dạng',
                            'status' => false,   
                        ]
                    );
                }
                else if($quantityPro[$key] < 1 ){
                    return response()->json(
                        [
                            'msg' => 'Số lượng k được nhỏ hơn 1',
                            'status' => false,
                            
                        ]
                    );
                }
                elseif(isset($_SESSION['cart'][$pro->id])){ 
                    if(isset($_SESSION['cart'][$idPro[$key]]['id']) == $idPro[$key]){
                        $_SESSION['cart'][$idPro[$key]]['id'] = $idPro[$key];
                        $_SESSION['cart'][$idPro[$key]]['quantity'] =$quantityPro[$key];
                    } 
                    
                   
                }        
                
            }
            $totalItem = 0;
            $totalPriceInCart = 0;
            foreach($_SESSION['cart'] as $val){
                $totalItem += $val['quantity'];
                $totalPriceInCart += $val['price'] * $val['quantity'];
            }
            return response()->json(
                [
                    'status' => true,
                    'data' => $_SESSION['cart'],
                    'totalItem' => $totalItem,
                    'totalPriceInCart' => $totalPriceInCart
                ]
            );
            
            
        }
        
        
            
        
        // $id = $rq->id;
        // $quantity = $rq->quantity;
        // $product = Product::where('id',$id)->first();
        // if(!is_numeric($quantity)){
        //     return response()->json(
        //         [
        //             'msg' => 'Số lượng k đúng định dạng',
        //             'status' => false,
                    
        //         ]
        //     );
        // }
        // else if($quantity < 1 ){
        //     return response()->json(
        //         [
        //             'msg' => 'Số lượng k được nhỏ hơn 1',
        //             'status' => false,
                    
        //         ]
        //     );
        // }
        // else{
        //     if($product){
        //         if(isset($_SESSION['cart'][$id])==$id){
        //             $_SESSION['cart'][$id]['quantity'] =$quantity;
        //         }
        //         $totalItem = 0;
        //         $price = 0;
        //         foreach($_SESSION['cart'] as $val){
        //             $totalItem += $val['quantity'];
        //             $price += $val['quantity'] * $val['price'];
        //         }
        //         return response()->json(
        //             [
        //                 'data' => $_SESSION['cart'],
        //                 'status' => true,
        //                 'totalItem' => $totalItem
        //             ]
        //         );
        //     }
            
        // }
        
        
    }
}
