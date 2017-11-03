<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';
    protected $username;

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
        $this->username = config('admin.global.username');
    }
    /**
     * 重写登录视图页面
     * @author 晚黎
     * @date   2016-09-05T23:06:16+0800
     * @return [type]                   [description]
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }
    /**
     * 自定义认证驱动
     * @author 晚黎
     * @date   2016-09-05T23:53:07+0800
     * @return [type]                   [description]
     */
    protected function guard()
    {
        return auth()->guard('admin');
    }
    public function logout()
    {

        if(Auth::guard('admin')->user()){
            Auth::guard('admin')->logout();
        }
        return Redirect::to('admin/login');
    }
}
