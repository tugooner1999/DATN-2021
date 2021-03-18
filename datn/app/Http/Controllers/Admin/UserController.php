<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('admin.user.index');
    }

    public function create_user(){
        return view('admin.user.add-user');
    }

    public function edit_user(){
        return view('admin.user.edit-user');
    }
}
