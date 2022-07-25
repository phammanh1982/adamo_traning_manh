<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Admin;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login', [
            'title' => 'Đăng nhập Admin'
        ]);
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = md5($request->input('password'));
        $login = Admin::where('email', $email)->where('password', $password)->get();
        if (count($login) > 0) {
            return redirect()->route('admin');
        }
        Session::flash('error', "Tài khoản hoặc mật khẩu chưa chính xác");
        Session::flash('email', $request->input('email'));
        return redirect()->back();
    }
}