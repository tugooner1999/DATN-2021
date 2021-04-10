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
                'avatar'=>'required|image',
                'role_id'=>'required',
                'email'=>'required|email|max:255|unique:users',
                'phone'=>'required|min:10|numeric',
                'status'=>'required|min:1',
                ];
            $msgE = [
                'name.required' =>'Bạn cần nhập Tên tài khoản',
                'avatar.required'=>'Không để trống ảnh của sản phẩm',
                'avatar.image'=>'Ảnh phải có đuôi là file(jpeg, png, bmp, gif, or svg)',
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
                $user->fill($request->all());
                $user->password= Hash::make($request->get('password'));
                if($request->hasFile('avatar')){
                    $path = $request->file('avatar')->store('public/avatars');
                    $user->avatar = str_replace("public/", "storage/", $path);
                }
            $user->coins= 0;
            $user->Save();
            Session::put('message','Thêm tài khoản thành công');
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
        try{
            $user = User::find($id);
            $user->fill($request->all());

            if($request->hasFile('avatar')){
                $path = $request->file('avatar')->store('public/avatars');
                $user->avatar = str_replace("public/", "storage/", $path);
            }
            $user->save();
            Session::put('message','Cập nhật tài khoản thành công');
        }catch(\Exception $ex){
            Session::put('message','Cập nhật thất bại');
        }

        return redirect()->route('admin.listUser');
    }   
    public function destroy($id)
    {
        $User = User::find($id);
        $User->delete();
        return back();
    }
}
