<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Session;

use Illuminate\Contracts\Auth\Authenticatable;

class AuthController extends Controller
{
    //
    public function postLogin(LoginRequest $request)
    { 
        $remember = $request->has('remember_me');
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials,$remember)) {
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
    public function registration(Request $request){
        $data = $_POST;
        $user = new User();
        $user->fill($data);
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->store('public/avatars');
            $user->avatar = str_replace("public/", "storage/", $path);
        }
        $user->password= Hash::make($request->get('password'));
        $user->role_id = 0;
        $user->status = 0;
        $user->coins = 0;
        $user->save();
        Session::put('message','Thêm tài khoản thành công');
        return redirect()->route('client.login'); 
    }
}
