<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.add');
    }
    public function store(){
        $this->validate(request(), [
            'title' => 'required|unique:posts|max:255',
            'content'=>'required|min:5',
        ]);
//        dd(request());
//        exit();
        Post::create(request(['title', 'subtitle', 'system_cate_id', 'posts_category', 'sort', 'thumb', 'keyword', 'description', 'author','content']));
        return redirect('admin/posts');
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
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    //显示某篇文章
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
}