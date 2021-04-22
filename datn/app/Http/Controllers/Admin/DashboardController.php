<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Product;
use App\Models\User;
use App\Models\Voucher;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Collection;

class DashboardController extends Controller
{
    public function admin(){
        $this->authorize('admin');
        $product = count(Product::all());
        $user = count(User::all());
        $voucher = count(Voucher::all());

        $ratings = Rating::all()->sortByDesc("id");
        $ratings = Rating::paginate(4)->sortByDesc("id");
        $show_user  = User::all();
        $comments = count(Rating::all());
        return view('admin.dashboard.index',compact('product','user','voucher','ratings','show_user','comments'));
    }
}
