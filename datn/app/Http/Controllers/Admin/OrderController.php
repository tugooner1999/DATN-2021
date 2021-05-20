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

    public function show($id)
    {
        $order_detail = OrderDetail::find($id);
        
        return response()->json(['data'=>$order_detail,],200); // 200 là mã lỗi
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
        $list_product = Product::all();     
        $order_detail = Order::where('id',$id)->first();
        $order_product = OrderDetail::where('order_id',$id)->get();
        return view('admin.order.order_detail',compact('order_detail','order_product','list_product'));
    }
}
