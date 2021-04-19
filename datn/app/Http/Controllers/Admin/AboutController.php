<?php

namespace App\Http\Controllers\Admin;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class AboutController extends Controller
{
    public function index(){
        $this->authorize('admin');
    $about = About::all();
    return view('admin.about.index', [
        'about' => $about
    ]);
    }
    
    public function create_about(){
        $this->authorize('admin');
        return view('admin.about.addAbout');
    }

    public function saveAbout(request $request){
        $this->authorize('admin');
        if($request->isMethod('POST')){
            $rule = [
                'title' => 'required|unique:about',
                'description' => 'required',
                'image' => 'required|image',
                ];
            $msgE = [
                'title.required' => 'Tên không được để trống',
                'description.required' => 'Mô tả không được để trống',
                'image.required' => 'ảnh không được để trống',
                'image.image' => 'ảnh không đúng định dạng',
                ];
            $validator = Validator::make($request->all(), $rule, $msgE);
            if ($validator->fails()) {
                $request->flash();
                return redirect()->route('admin.createAbout')->withErrors($validator);
            }
            else{
                $dt_create = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
                $data = $_POST;
                $about = new About();
                $about->fill($data);
                if($request->hasFile('image')){
                    $path = $request->file('image')->move('frontend/images', $request->file('image')->getClientOriginalName());
                    $about->image =str_replace("public/", "public/", $path);
                }
                $about->created_at = $dt_create;
                $about->save();
                Session::put('message','Thêm thành công');
                return Redirect::to('/admin/about');
            }
        }
    }
    public function destroy($id)
    {   
        $this->authorize('admin');
        $about = About::find($id);
        $about->delete();
        return back();
        
    }
}
