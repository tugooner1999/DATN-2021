<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function postLogin(Request $request)
    {
        $dataView = ['errs' => []];

        if ($request->isMethod('post')) {
            $rule = [
                'email' => 'required',
                'password' => 'required',
            ];
            $msg = [
                'email.required' => 'Email trống',
                'password.required' => 'Điền mật khẩu',
            ];
            $validator = Validator::make($request->all(), $rule, $msg);
            if ($validator->fails()) {
                $request->flash();
                $dataView['errs'] = $validator->errors()->toArray();
            } else {
                //  login
                $email = $request->get('email');
                $password = $request->get('password');

                if (Auth::attempt(['email' => $email, 'password' => $password],$password)) {
                    echo "<h1>Đăng nhập thành công</h1>";
                    echo '<br>ID tai khoan = ' . Auth::id();
                    return redirect()->intended('');
                } else {
                    $dataView['errs'][] = 'Sai Email hoặc sai Mật khẩu!';
                }

            }
        }
        return view('client.login-res.index', $dataView);
    }
}
