<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AmbassadorController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->join('points','users.id','=','points.user_id')->get();
        return view('admin.ambassador.index',compact('users'));
    }
}
