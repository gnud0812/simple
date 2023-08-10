<?php

namespace App\Http\Controllers\Simple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function signIn(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $status = 400;
        $message = 'Tài khoản mật khẩu không chính xác';
        if($username == env('SIMPLE_USERNAME') && $password == env('SIMPLE_PASSWORD')){
            $status = 200;
            $message = 'Đăng nhập thành công';
        }

        $response = [
            'status' => $status,
            'message' => $message,
            'data' => [],
        ];

        return $response;
    }
}
