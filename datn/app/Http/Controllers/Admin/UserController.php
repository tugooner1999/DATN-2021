<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function index(){
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }

    public function create_user(Request $request){
        $dataView = ['errs'=>[] ]; // mảng để truyền dữ liệu ra view

        if($request->isMethod('POST')){
            $rule = [
                'name'=>'required',
                'image'=>'required|image',
                'role_id'=>'required',
                'email'=>'required|email|max:255|unique:users',
                'phone'=>'required|min:10|numeric',
                'status'=>'required|min:1',
                ];
            $msgE = [
                'name.required' =>'Bạn cần nhập Tên tài khoản',
                'image.required'=>'Không để trống ảnh của sản phẩm',
                'image.image'=>'Ảnh phải có đuôi là file(jpeg, png, bmp, gif, or svg)',
                'role_id.required'=>'Chọn trạng thái hoạt động',
                'email.required'=>'Vui lòng nhập Email',
                'email.unique'=>'Email đã tồn tại',
                'phone.required'=> 'Nhập số điện thoại',
                'phone.min'=> 'Nhập số điện thoại có 10 chữ số',
                'status.required'=>'Chọn trạng thái',
                'status.min'=>'Chọn trạng thái',
                ];
            $validator = Validator::make($request->all(), $rule, $msgE);
            // check có lỗi hay không

            if ($validator->fails()) {
                // nó chết ở trong đây à
                $request->flash();
                return redirect()->route('admin.addUser')->withErrors($validator);
            }
            else{
                // không có lỗi, ghi CSDL
                $user = new user();
                $user['name']= $request->get('name');
                $user['password']= Hash::make($request->get('password'));
                $user['role_id']= $request->get('role_id');
                $user['email']= $request->get('email');
                $user['phone']= $request->get('phone');
                $user['address']= $request->get('address');
                $user['status']= $request->get('status');


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
            $user['avatar']=$file_info->link_img;
            $user['coins']= 0;
            $user->Save();
            return redirect()->route('admin.listUser');
            }
        }

        return view('admin.user.add-user');
    }

    public function edit_user($id, Request $request){
        $objU = User::find($id);
        return view('admin.user.edit-user',compact('objU'));
    }
    public function updateUser($id, Request $request){
            $user['name']= $request->get('name');
            $user['password']= Hash::make($request->get('password'));
            $user['role_id']= $request->get('role_id');
            $user['email']= $request->get('email');
            $user['phone']= $request->get('phone');
            $user['address']= $request->get('address');
            $user['status']= $request->get('status');

                // nếu có sửa pass thì mới cập nhật
                if( strlen($request->get('password'))>0){
                    $user['password'] = Hash::make ($request->get('password'));
                }
            $file = $request->file('avatar');
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
            $user['avatar']=$file_info->link_img;
            $objModel = new User(); // tạo đối tượng để gọi hàm SaveNew
            $rowUpdate = $objModel->SaveUpdate($id,$user);

                if($rowUpdate>0){
                    // có thể bạn truyền ra view thì
                    Session::put('message','Cập nhật sản phẩm thành công');
                    // hoặc bạn chuyển về trang danh sách
                    return redirect()->route('admin.listUser');
                }
                else
                Session::put('message','Không có gì cập nhật');
            }   
    public function destroy($id)
    {
        $User = User::find($id);
        $User->delete();
        return back();
    }
}
