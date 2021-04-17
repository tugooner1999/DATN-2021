<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
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
            if(Auth::user()->status == 0){
                if(Auth::user()->role_id == 1){
                    return redirect()->route('client-admin'); 
                }else{
                    return redirect()->intended('');
                };
            }else{
                Auth::logout();  // xử lý logout
                Session::flush(); // xóa hết các session khác
                Session::put('message','Tài khoản của bạn đã bị khóa vui lòng đăng nhập bằng tài khoản khác');
                return redirect()->route('client.login.err');
            }
            
        }
        return back()->withErrors([
            'msg' => 'Tài khoản/mật khẩu không đúng',
        ]);
    }
    public function login_form_err(request $request)
    { 
        return view('errors.403');
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
    public function registration(RegistrationRequest $request){
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
