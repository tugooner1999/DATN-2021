<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use DB;
use App\Models;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $slider = Slider::all();
        
        return view('admin.slider.index', [
            'slider' => $slider
        ]);
    }
    public function addSlider(Request $request){
        return view('admin.slider.addSlider');
    }
    public function destroy($id, Request $request){
        return view('admin.deteleSlider');
        
    
    }
}
