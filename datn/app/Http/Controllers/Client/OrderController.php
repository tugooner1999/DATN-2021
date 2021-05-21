<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    //
    public function my_Orders(){
        $this->authorize('member');
        $id_user = Auth::user()->id;
        $my_orders = Order::where('order_by',$id_user)->orderBy('created_at', 'DESC')->get();
        $my_order = Order::where('order_by',$id_user)->orderBy('created_at', 'DESC')->take(5)->get();
        return view('client.order.index', compact('my_order','my_orders'));
    }

    public function order_detail($id){
        $this->authorize('member');
        $order_detail = Order::where('id',$id)->first();
        $order_product = OrderDetail::where('order_id',$id)->get();
        return view('client.order.order_detail',compact('order_detail','order_product'));
    }
}
