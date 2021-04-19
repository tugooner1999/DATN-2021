<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //trang giới thiệu (about)

    public function index(){
        return view('client.about.index');
    }
}
