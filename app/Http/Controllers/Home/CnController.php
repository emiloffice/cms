<?php

namespace App\Http\Controllers\Home;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CnController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(3)->get();
        return view('cn.index', compact('posts'));
    }
    public function contact(Request $request){
        if($request->isMethod('post')){
            $this->validate(request(), [
                'name'=>'required',
                'email'=>'required',
                'message'=>'required'
            ]);
            Message::create(request(['name', 'organization', 'email', 'phone', 'message']));
            return redirect('contact')->with('message', 'Success, Thank you for your message!');
        }else{
            return view('cn.contact');
        }

    }

    public function about()
    {
        return view('cn.about');
    }
}
