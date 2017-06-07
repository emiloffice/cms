<?php

namespace App\Http\Controllers\Admin;

use App\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SystemController extends Controller
{
    //系统设置
    public function base()
    {
        return view('system.base');
    }
    //栏目设置
    public function category()
    {
        return view('system.category');
    }
    public function categoryAdd(){
        return view('system.categoryAdd');
    }
    //
    public function log(){
        $admins = admin::latest()->get();
        return view('system.log');
    }
}
