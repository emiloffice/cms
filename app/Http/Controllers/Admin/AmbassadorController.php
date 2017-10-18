<?php

namespace App\Http\Controllers\Admin;

use App\Point;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AmbassadorController extends Controller
{
    public function index()
    {
        $users = User::with('point')->where('status',1)->get();
       // echo ($users);
        return view('admin.ambassador.index',compact('users'));
    }
    /*
     * $uid 用户ID
     * $cate 分类
     * */
    public function addPoints(Request $request)
    {
        $uid = $request->uid;
        $cate = $request->cate;
        $res = Point::where('user_id',$uid)->first();
        if ($res!==''){
            if($cate == 'facebook' && $res->fb_status ===0){
                DB::connection('mysql_user')->update('update points set points = points + ? , fb_status = ? where user_id = ?',[5, 1,$uid]);
                return ['status'=>'success', 'msg'=>"Successful operation"];
            } elseif($cate == 'twitter' && $res->twitter_status ===0){
                DB::connection('mysql_user')->update('update points set points = points + ? , twitter_status = ? where user_id = ?',[5, 1,$uid]);
                return ['status'=>'success', 'msg'=>"Successful operation"];
            } elseif ($cate == 'discord' && $res->discord_status ===0){
                DB::connection('mysql_user')->update('update points set points = points + ? , discord_status = ? where user_id = ?',[5, 1,$uid]);
                return ['status'=>'success', 'msg'=>"Successful operation"];
            } elseif ($cate == 'group' && $res->group_status ===0){
                DB::connection('mysql_user')->update('update points set points = points + ? , group_status = ? where user_id = ?',[5, 1,$uid]);
                return ['status'=>'success', 'msg'=>"Successful operation"];
            }
        }else{
            return ['status'=>'error', 'msg'=>"user doesn't exit"];
        }

    }


}
