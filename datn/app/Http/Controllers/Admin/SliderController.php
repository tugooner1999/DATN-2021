<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $slider = Slider::all();
        $slider = Slider::paginate(5);
        return view('admin.slider.index', [
            'slider' => $slider
        ]);
    }
    public function addSlider(Request $request){
        $dataView = ['errs'=>[] ]; // mảng để truyền dữ liệu ra view
        if($request->isMethod('POST')){
            $rule = [
                'title' =>'required|min:6',
                'description' =>'required|min:1',
                'image'=>'required|image'            ];
            $msgE = [
                'title.required' =>'Bạn cần nhập Title',
                'title.min'=>'Title chỉ nhập từ 5 ký tự trở lên',
                'description.required' =>'Bạn cần nhập description',
                'image.required'=>'Không để trống ảnh của sản phẩm',
                'image.image'=>'Ảnh phải có đuôi là file(jpeg, png, bmp, gif, or svg)'            ];
            $validator = Validator::make($request->all(), $rule, $msgE);
            // check có lỗi hay không
            
            if ($validator->fails()) {
                
                $request->flash();
                return redirect()->route('admin.addSlider')->withErrors($validator);
            }
            else{
                // không có lỗi, ghi CSDL
                $slider = new Slider();
                $slider['title']= $request->get('title');
                $slider['description']= $request->get('description');
                $file = $request->file('image');
                $file_allow_upload = config('app.file_allow_upload');

            // đưa thông tin ra view:
            $file_info = new \stdClass();
            $file_info->name = $file->getClientOriginalName();
            $file_info->description = $file->getClientOriginalName();
            $file_info->extension = $file->getClientOriginalExtension();
            $file_info->path = $file->getRealPath();
            $file_info->size = $file->getSize();
            $file_info->mime = $file->getMimeType();

            //di chuyển file từ thư mục tạm vào thư mục lưu trữ trong /public để xem ảnh dạng web
            $destinationPath = 'frontend/images';
            $file->move($destinationPath,$file->getClientOriginalName());

            // dùng cái link dưới đây để lưu vào CSDL nhé.
            $file_info->link_img = 'frontend/images/'.$file->getClientOriginalName();
            $slider['image']=$file_info->link_img;
            $slider->save();
            return redirect()->route('admin.listSlider');
            }
        }
        return view('admin.slider.addSlider');
    }
    public function destroy($id, Request $request){
        $dataView = [ 'errs'=>[]];
        
        $objU = Slider::where('id',$id)->first();
        $dataView['objU'] = $objU;  
        if($request){
                $objU->delete();
                return redirect()->route('admin.listSlider');
            }
    }
    public function editSlider($id, Request $request){
        $dataView = ['errs'=>[] ];

        // lấy thông tin User để hiển thị ra form
        $objU = Slider::where('id',$id)->first();

        $dataView['objU'] = $objU;


        if($request->isMethod('POST')){
          
            $rule = [
                'title' =>'required|min:6',
                'description' =>'required|min:1',
                'image'=>'required|image'            ];
            $msgE = [
                'title.required' =>'Bạn cần nhập Title',
                'title.min'=>'Title chỉ nhập từ 5 ký tự trở lên',
                'description.required' =>'Bạn cần nhập description',
                'image.required'=>'Không để trống ảnh của sản phẩm',
                'image.image'=>'Ảnh phải có đuôi là file(jpeg, png, bmp, gif, or svg)'            ];
            // bắt đầu kiểm tra
            $validator = Validator::make($request->all(), $rule, $msgE);
            // check có lỗi hay không
            if($validator->fails()){
                $request->flash();
                $dataView['errs'] = $validator->errors()->toArray();
            }
            else{
                // không có lỗi, ghi CSDL
                    $dataSave['title']= $request->get('title');
                $dataSave['description']= $request->get('description');
                $file = $request->file('image');
            $file_allow_upload = config('app.file_allow_upload');

            // đưa thông tin ra view:
            $file_info = new \stdClass();
            $file_info->name = $file->getClientOriginalName();
            $file_info->extension = $file->getClientOriginalExtension();
            $file_info->path = $file->getRealPath();
            $file_info->size = $file->getSize();
            $file_info->mime = $file->getMimeType();
            $destinationPath = 'frontend/images';
            $file->move($destinationPath,$file->getClientOriginalName());
            $file_info->link_img = 'frontend/images/'.$file->getClientOriginalName();
            $dataSave['image']=$file_info->link_img;
                $objModel = new Slider();
                $rowUpdate = $objModel->SaveUpdate($id,$dataSave);

                if($rowUpdate>0){

                    return redirect()->route('admin.listSlider');
                }
                else
                    $dataView['errs'][] = ['Không có gì cập nhật!'];

            }
        } 
        return view('admin.slider.editSlider',$dataView ,compact('objU'));

    }
}
