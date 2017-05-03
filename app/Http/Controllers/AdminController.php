<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

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
        Post::create(request(['title', 'body']));
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
}
