<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index(){
        $this->authorize('admin');
        return view('admin.comment.index');
    }
}