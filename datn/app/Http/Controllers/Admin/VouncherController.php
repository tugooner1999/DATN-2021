<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VouncherController extends Controller
{
    //
    public function index(){
        return view('admin.vouncher.index');
    }

    public function create_vouncher(){
        return view('admin.vouncher.add-vouncher');
    }

    public function edit_vouncher(){
        return view('admin.vouncher.edit-vouncher');
    }
}
