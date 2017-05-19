<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    /*//login
    public function login()
    {
        return view('admin.login');
    }*/
    public function article()
    {
        return view('admin.article.index');
    }

    public function articleAdd()
    {
        return view('admin.article.add');
    }

    public function articleStore()
    {
        $this->validate(request(), [
            'title' => 'required|unique:posts|max:255',
            'content'=>'required|min:5',
        ]);
        Post::create(request(['title', 'subtitle', 'system_cate_id', 'posts_category', 'sort', 'keyword', 'description', 'author','content']));
        return redirect('posts');
    }
    //add menu
    public function addMenu()
    {
        return view('admin.menu.add');
    }
    //menu
    public function menu()
    {
        return view('admin.menu.index');
    }
    //role
    public function role()
    {
        return view('admin.role');
    }
    //add role
    public function roleAdd()
    {
        return view('admin.roleAdd');
    }
    //permission
    public function permission()
    {
        return view('admin.permission');
    }
    //admin-list
    public function _list(Admin $admin)
    {
        $admins = Admin::latest()->get();
        return view('admin.list',compact('admins'));
    }

    public function upload_file()
    {
        $file = Input::file('Filedata');
        if ($file->isValid()){
            $extension = $file->getClientOriginalExtension();
            $newName = date('YmdHis').mt_rand(100, 999).".".$extension;
            $path = $file->move(base_path()."uploads", $newName);
            $filepath = 'uploads/'.$newName;
            return $filepath;
            /*//检验上传的文件是否有效
            $clientName = $file->getClientOriginalName();//获取文件名称
            $tmpName = $file->getFileName();  //缓存在tmp文件中的文件名 例如 php9732.tmp 这种类型的
            $realPath = $file->getRealPath();  //这个表示的是缓存在tmp文件夹下的文件绝对路径。
            $entension = $file->getClientOriginalExtension(); //上传文件的后缀
            $mimeType = $file->getMimeType(); //得到的结果是imgage/jpeg
            $path = $file->move('storage/uploads');
            //如果这样写的话,默认会放在我们 public/storage/uploads/php9372.tmp
            //如果我们希望将放置在app的uploads目录下 并且需要改名的话
            $path = $file->move(app_path().'/uploads'.$newName);
            //这里app_path()就是app文件夹所在的路径。$newName 可以是通过某种算法获得的文件名称
            //比如 $newName = md5(date('YmdHis').$clientName).".".$extension;*/
        }
    }
}
