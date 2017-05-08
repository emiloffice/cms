<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('system.log');
    }
}
