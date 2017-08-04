<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 2017/8/2
 * Time: 14:38
 */

namespace app\Http\Controllers\Home;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login()
    {
        return view('home.login');
    }
    public function center()
    {
        return view('home.uc');
    }
}