<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AmbassadorController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.ambassador.index',compact('users'));
    }
}
