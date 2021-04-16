<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //
    public function index(){
        $this->authorize('member');
        return view('client.wishlist.index');
    }
}
