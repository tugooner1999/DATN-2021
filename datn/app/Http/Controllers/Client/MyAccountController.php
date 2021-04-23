<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    //
    public function my_Account(){
        return view('client.myAccount.my-account');
    }
}
