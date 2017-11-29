<?php

namespace App\Http\Controllers\Admin;

use App\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    public function index()
    {
        $data = Subscribe::latest()->get();
        return view('admin.subscribe.index',compact('data'));
    }
}
