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
        return view('posts.create');
    }
    /*public function store(){
        $post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->save();
        return redirect('posts');
    }*/
    //批量添加
    public function store(){
        /*Post::create([
           'title' => request('title'),
            'content' => request('content')
        ]);*/
        $this->validate(request(), [
            'title' => 'required|unique:posts|max:255',
            'content'=>'required|min:5',
        ]);
        Post::create(request(['title', 'body']));
        return redirect('posts');
    }
    //显示谋篇文章
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
}
