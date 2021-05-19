<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use App\Models\Statistical;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class OrderController extends Controller
{
    //
    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(){
        $this->authorize('admin');
        $oder = Order::all()->sortByDesc('id');
        return view('admin.order.index',compact('oder'));
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit_order(){
        $this->authorize('admin');
        return view('admin.order.edit-order');
    }



    public function order_update($id){
        $this->authorize('admin');
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return response()->json(['data'=>'update'],200);
    }

    public function order_detail($id){
        $this->authorize('admin');
        $order_detail = Order::where('id',$id)->first();
        $order_product = OrderDetail::where('order_id',$id)->get();
        return view('admin.order.order_detail',compact('order_detail','order_product'));
    }
    
    public function statis(Request $request){
        $this->authorize('admin');
        $data = $request->all();
        $carbon = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
       $order = Order::all()->where('order_date',$carbon);
        $a = Statistical::all()->where('order_date',$carbon)->first();
        if(isset($a)){
            $statis = Statistical::find($a['id']);
            $statis->order_date = $carbon;
            $statis->sales = $order->sum('totalMoney');
            $statis->total_order = $order->count('id');
            $statis->save();
            return view('admin.total-cash.index');
        }
        elseif(!isset($a)){
            $statis = new Statistical();
            $statis->order_date = $carbon;
            $statis->sales = $order->sum('totalMoney');
            $statis->total_order = $order->count('id');
            $statis->save();
            return view('admin.total-cash.index');
        }
    }
}