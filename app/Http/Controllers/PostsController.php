<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

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
        Post::create(request(['title', 'subtitle', 'system_cate_id', 'posts_category', 'sort', 'keyword', 'description', 'author','content']));
        return redirect('posts');
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
    public function _list(Post $post)
    {
        return view('posts.index', compact('post'));
    }

    public function edit()
    {
        return view('posts.edit');
    }
    //显示某篇文章
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
}
