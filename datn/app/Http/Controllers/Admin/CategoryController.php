<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use App\Models;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;
class CategoryController extends Controller
{
    //
    public function index(){
        $this->authorize('admin');
        $cates = Category::paginate(5);
        $cates->load([
            'products'
        ]);
        
        return view('admin.category.index', [
            'category' => $cates
        ]);
    }
    public function addCategory(Request $request){
        $this->authorize('admin');
        $dataView = ['errs'=>[] ]; // mảng để truyền dữ liệu ra view
        if($request->isMethod('POST')){
            $rule = [
                'name' =>'required|unique:categories|min:6',
                'image'=>'required|image'            ];
            $msgE = [
                'name.required' =>'Bạn cần nhập Danh mục',
                'name.unique'=>'Danh mục đã tồn tại',
                'name.min'=>'Danh mục chỉ nhập từ 5 ký tự trở lên',
                'image.required'=>'Không để trống ảnh của Danh mục',
                'image.image'=>'Ảnh phải có đuôi là file(jpeg, png, bmp, gif, or svg)'
            ];
            $validator = Validator::make($request->all(), $rule, $msgE);
            // check có lỗi hay không
            
            if ($validator->fails()) {
                
                $request->flash();
                return redirect()->route('admin.addCate')->withErrors($validator);
            }
            else{
                // không có lỗi, ghi CSDL
                $category = new Category();
                $category['name']= $request->get('name');
                $file = $request->file('image');
                $file_allow_upload = config('app.file_allow_upload');

            // đưa thông tin ra view:
            $file_info = new \stdClass();
            $file_info->name = $file->getClientOriginalName();
            $file_info->extension = $file->getClientOriginalExtension();
            $file_info->path = $file->getRealPath();
            $file_info->size = $file->getSize();
            $file_info->mime = $file->getMimeType();

            //di chuyển file từ thư mục tạm vào thư mục lưu trữ trong /public để xem ảnh dạng web
            $destinationPath = 'frontend/images';
            $file->move($destinationPath,$file->getClientOriginalName());

            // dùng cái link dưới đây để lưu vào CSDL nhé.
            $file_info->link_img = 'frontend/images/'.$file->getClientOriginalName();
            $category['image']=$file_info->link_img;
            $category->save();
            return redirect()->route('admin.listCate');
            }
        }

        return view('admin.category.addCate');
    }

    public function edit_category($id, Request $request){
        $this->authorize('admin');
        $dataView = ['errs'=>[] ];
        // lấy thông tin User để hiển thị ra form
        $objU = Category::where('id',$id)->first();
        $dataView['objU'] = $objU;
        if($request->isMethod('POST')){
            $rule = [
                'name' =>'required|min:6',
                'image'=>'required|image'            ];
            $msgE = [
                'name.required' =>'Bạn cần nhập Danh mục',
                'name.min'=>'Danh mục chỉ nhập từ 5 ký tự trở lên',
                'image.required'=>'Không để trống ảnh của Danh mục',
                'image.image'=>'Ảnh phải có đuôi là file(jpeg, png, bmp, gif, or svg)'
            ];
            // bắt đầu kiểm tra
            $validator = Validator::make($request->all(), $rule, $msgE);
            // check có lỗi hay không
            if($validator->fails()){
                $request->flash();
                $dataView['errs'] = $validator->errors()->toArray();
            }
            else{
                // không có lỗi, ghi CSDL
                $dataSave = [
                    'name' => $request->get('name'),
                ];
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
                $objModel = new category();
                $rowUpdate = $objModel->SaveUpdate($id,$dataSave);
                if($rowUpdate>0){
                    return redirect()->route('admin.listCate');
                }
                else
                    $dataView['errs'][] = ['Không có gì cập nhật!'];
            }
        } 
        return view('admin.category.editCate',$dataView);
    }
    
    public function destroy($id, Request $request){
        $this->authorize('admin');
        $dataView = [ 'errs'=>[]];
        // lấy thông tin cate để hiển thị ra form
        $objU = category::where('id',$id)->first();
        $dataView['objU'] = $objU;  
        if($request){
                $objU->delete();
                return redirect()->route('admin.listCate');
            }
    }

    
}
