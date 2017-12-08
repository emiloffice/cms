<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::where('system_cate_id',1)->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.add');
    }
    public function blogCreate(){
        return view('posts.blogAdd');
    }

    public function store(){
        $this->validate(request(), [
            'title' => 'required|unique:posts|max:255',
            'content'=>'required|min:5',
        ]);
//        dd(request());
//        exit();
        Post::create(request(['title', 'subtitle', 'system_cate_id', 'posts_category', 'sort', 'thumb', 'keyword', 'description', 'author','content','status']));
        return redirect('admin/blogs');
    }
    //批量添加
    /*public function store(){
        $this->validate(request(), [
            'title' => 'required|unique:posts|max:255',
            'content'=>'required|min:5',
        ]);
        Post::create(request(['title', 'body']));
        return redirect('posts');
    }*/
    //文章列表
    public function _list()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    public function blogEdit(Post $post)
    {
        return view('posts.blogEdit', compact('post'));
    }
    public function update(Request $request,$id)
    {
        if ($request->isMethod('post')){
            $update = $request->all();
            if($request->content==''||$request->content==null){
                $postDB = DB::table('posts')->where('id',$id)->update(request(['title', 'subtitle', 'system_cate_id', 'posts_category', 'sort', 'thumb', 'keyword', 'description', 'author']));
            }else{
                $postDB = DB::table('posts')->where('id',$id)->update(request(['title', 'subtitle', 'system_cate_id', 'posts_category', 'sort', 'thumb', 'keyword', 'description', 'author','content']));
            }
            return redirect('admin/posts');
        }
    }
    public function blogUpdate(Request $request,$id)
    {
        if ($request->isMethod('post')){
            $update = $request->all();
            if($request->content==''||$request->content==null){
                $postDB = DB::table('posts')->where('id',$id)->update(request(['title', 'subtitle', 'system_cate_id', 'posts_category', 'sort', 'thumb', 'keyword', 'description', 'author']));
            }else{
                $postDB = DB::table('posts')->where('id',$id)->update(request(['title', 'subtitle', 'system_cate_id', 'posts_category', 'sort', 'thumb', 'keyword', 'description', 'author','content']));
            }
            return redirect('admin/blogs');
        }
    }
    //显示某篇文章
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
    //修改文章状态
    public function editStatus(Request $request)
    {
        if ($request->isMethod('post')){
            $this->validate(request(), [
                'id' => 'required',
                'status'=>'required|numeric',
            ]);
            $id = $request->id;
            $status = $request->status;
            $data['status'] = $status;
            $res = DB::table('posts')->where('id',$id)->update($data);
            dd($res);
        }
    }
    //开发者日志列表
    public function blogList()
    {
        $posts = Post::where('system_cate_id',2)->latest()->get();
        return view('posts.blog', compact('posts'));
    }
}
