<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'name'=>'required',
                'email'=>'required|email|max:255|unique:users',
                'phone'=>'required|min:10|digits:10|numeric',
                'address'=>'required',
                'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}$/',
                'password-confirm'=>'requied|min4',
        ];
    }
    
    public function messages(){
        Session::put('message','Thêm tài khoản không thành công');
        return [
            'name.required' =>'Bạn cần nhập Tên tài khoản',
                'email.required'=>'Vui lòng nhập Email',
                'email.unique'=>'Email đã tồn tại',
                'phone.required'=> 'Nhập số điện thoại',
                'phone.min'=> 'Nhập số điện thoại có 10 chữ số',
                'phone.digits'=> 'Nhập số điện thoại có 10 chữ số',
                'password.required' => 'Bạn cần nhập mật khẩu ',
                'password.min'=>'Mật khẩu phải có chữ hoa chữ thường và số từ 6 đến 16 kí tự',
                'password.max'=>'Mật khẩu phải có chữ hoa chữ thường và số từ 6 đến 16 kí tự',
                'password.regex' => 'Mật khẩu phải có chữ hoa chữ thường và số  từ 6 đến 16 kí tự',
                'password.confirmed'=>'mật khẩu không trùng khớp',
                'status.min'=>'Chọn trạng thái',
                'address.required'=>'Bạn cần nhập địa chỉ',
        ];
    }
}

