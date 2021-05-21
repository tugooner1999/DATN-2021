<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    //
    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(){
        $this->authorize('admin');
        $oder = Order::all()->sortBy([
            ['id', 'desc']
        ]);
        return view('admin.order.index',compact('oder'));
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    
    public function editOrder($id){
        $this->authorize('admin');
        $order = OrderDetail::find($id);
        return view('admin.order.edit-order',compact('order'));
    }

    
    public function order_update($id){
        $this->authorize('admin');
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return response()->json(['data'=>'.'],200);
    }

    public function order_detail($id){
        $this->authorize('admin');
        $order_detail = Order::where('id',$id)->first();
        $order_product = OrderDetail::where('order_id',$id)->get();
        $ids = $order_detail->order_market;
        $list_product = Product::all()->where('allow_market',$ids);     
        return view('admin.order.order_detail',compact('order_detail','order_product','list_product'));
    }

    public function addOrder($id,Request $request){
        $this->authorize('admin');
        $data = $_POST;
        $order_detail = OrderDetail::all()->where('product_id',$data['product_id'])->where('order_id',$id)->first();
        if(isset($order_detail)){
            Session::put('message','Sản phảm đã có trong đơn hàng');
            return back();
        }
        if($data['quantily'] <= 0){
            Session::put('message','Số lượng không hợp lệ');
            return back();
        }
        if (!isset($order_detail)) {
            $order_detail = new OrderDetail;
            $order_detail->order_id = $id;
            $order_detail->product_id = $data['product_id'];
            $product = Product::find($data['product_id']);
            $order_detail->unit_price = $product->price;
            $order_detail->total = ($product->price * $data['quantily']) + ($product->price * $data['quantily'] *0.1);
            $order_detail->quantily = $data['quantily'];
            $order_detail->save();
            $detail = OrderDetail::all()->where('order_id' , $id);
            $orders = Order::find($id);
            $orders->totalMoney = $detail->sum('total');
            $orders->save();
            Session::put('message','Thêm sản phẩm thành công');
            return back();
        } 
    }

}
