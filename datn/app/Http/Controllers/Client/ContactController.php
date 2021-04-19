<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //
    public function index(){
        return view('client.contact.index');
    }


}