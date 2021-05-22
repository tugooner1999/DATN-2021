<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Product;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Rating;
use App\Models\Order;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class DashboardController extends Controller
{
    public function admin(){
        $this->authorize('admin');
        $products = count(Product::all());
        $users = count(User::all());
        $vouchers = count(Voucher::all());
        $comments = count(Rating::all());
        $oders = count(Order::all());
        $ratings = Rating::all()->sortByDesc("id")->take(4);
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $order = Order::where('order_date' ,$today )->orderBy('created_at','DESC')->paginate(10);
        $user = User::all()->sortByDesc("id")->take(7);
        return view('admin.dashboard.index',compact('products','vouchers','ratings','users','user','comments','oders','order','today'));
    }
}
