<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use Hash;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    //
    public function postLogin(LoginRequest $request)
    { 
        $remember = $request->has('remember_me');
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('');
        }
        return back()->withErrors([
            'msg' => 'Tài khoản/mật khẩu không đúng',
        ]);
    }
    public function login_form(Request $request){
        return view('client.login-res.index');
    }
    public function Logout()
    {
        Auth::logout();  // xử lý logout
        Session::flush(); // xóa hết các session khác
        return redirect()->route('client.login'); // chuyển về trang đăng nhập
    }
}
