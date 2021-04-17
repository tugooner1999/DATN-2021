<?php

namespace App\Http\Controllers\Client;
session_start();
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Validator;
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
    public function checkOut(Request $rq){
        // dd($rq);
        if($rq->isMethod('POST')){
            if(!$rq->paymentMethod){
                return response()->json(
                    [
                        'status' => false,
                        'msg' => 'Bạn chưa chọn phương thức thanh toán',
                        
                    ]
                );
            }
            else if($rq->paymentMethod=='vnpay'){
                return response()->json(
                    [
                        'status' => false,
                        'msg' => 'Phương thức thanh toán này chưa được hỗ trợ, vui lòng chọn phương thức thanh toán khác!',
                        
                    ]
                );
            }
            else if($rq->paymentMethod=='cod'){
                $rule = [
                    'fullname'=>'required|max:100',
                    'email'=>'required|email|max:255',
                    'phone'=>'required|min:10|numeric',
                    'address'=>'required',
    
                    ];
                $msg = [
                    'fullname.required' =>'Vui lòng nhập đầy đủ họ tên',
                    'fullname.max' =>'Họ tên tối đa 100 kí tự',
                    'email.required'=>'Vui lòng nhập Email',
                    'email.email'=>'Email không đúng định dạng',
                    'email.max'=>'Email tối đa 255 kí tự',
                    'phone.required'=> 'Nhập số điện thoại',
                    'phone.min'=> 'Nhập số điện thoại có 10 chữ số',
                    'phone.numeric'=> 'Số điện thoại không đúng định dạng',
                    'address.required'=>'Bạn chưa nhập địa chỉ'
                    
                ];
                $validator = Validator::make($rq->all(), $rule, $msg);
                if ($validator->fails()) {
                    return response()->json(
                        [
                            'status' => false,
                            'msg'=> [$validator->errors()]
                            
                        ]
                    );
                }
                $totalPriceInCart = 0;
                foreach($_SESSION['cart'] as $val){

                    $totalPriceInCart += $val['price'] * $val['quantity'];
                }
                //insert order into database
                $voucherId = isset($_SESSION['voucher']) ? $_SESSION['voucher']['id'] : 0;
                $insertOrder = Order::insert([
                    'customer_email' =>$rq->email,
                    'customer_phone' =>$rq->phone,
                    'customer_address' =>$rq->address,
                    'customer_fullname' =>$rq->fullname,
                    'payment_method' =>$rq->paymentMethod,
                    'voucher_id' => $voucherId,
                    'totalMoney' => $totalPriceInCart

                ]);
                $getOrderId = Order::where('customer_email',$rq->email)->orderBy('created_at','desc')->first('id');
                if($insertOrder){
                    foreach($_SESSION['cart'] as $val){
                        $insertOderDetail = OrderDetail::insert([
                            'order_id' =>$getOrderId->id,
                            'product_id' =>$val['id'],
                            'total' =>$val['price'] * $val['quantity'],
                            'unit_price' =>$val['price']
                        ]);
                        if($insertOderDetail){
                            unset($_SESSION['cart']);
                            unset($_SESSION['voucher']);
                        }
                    }
                    return response()->json(
                        [
                            'status' => true,
                            'msg' => 'Đặt hàng thành công',
                            
                        ]
                    );
                }
                
            }
            else{
                return response()->json(
                    [
                        'status' => false,
                        'msg' => 'Vui lòng chọn phương thức thanh toán hợp lệ! ',
                        
                    ]
                );
            }
        }
        
        
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
