<?php

namespace App\Http\Controllers\Home;

use App\Message;
use App\Post;
use App\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(3)->get();
        return view('home.index', compact('posts'));
    }
    public function about()
    {
        return view('home.about');
    }
    public function comingsoon()
    {
        return view('home.comingsoon');
    }
    public function company()
    {
        return view('home.company');
    }

    public function contact(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate(request(), [
                'name'=>'required',
                'email'=>'required',
                'message'=>'required'
            ]);
            Message::create(request(['name', 'organization', 'email', 'phone', 'message']));
            return redirect('contact')->with('message', 'Success, Thank you for your message!');
        }else{
            return view('home.contact');
        }
    }
    public function dreamflight()
    {
        return view('home.dreamflight');
    }
    public function galactic()
    {
        return view('home.galactic');
    }
    public function jobs()
    {
        return view('home.jobs');
    }
    public function legal()
    {
        return view('home.legal');
    }
    public function ourgames()
    {
        return view('home.ourgames');
    }
    public function press()
    {
        return view('home.press');
    }

    public function privacy()
    {
        return view('home.legal.privacy');
    }
    public function publishing()
    {
        return view('home.publishing');
    }
    public function seekingdawn()
    {
        return view('home.seekingdawn');
    }
    public function team()
    {
        return view('home.team');
    }
    public function template()
    {
        return view('home.template');
    }
    public function tos()
    {
        return view('home.legal.tos');
    }
    public function values()
    {
        return view('home.values');
    }
    public function posts()
    {
        $posts = Post::latest()->get();
        return view('home.posts', compact('posts'));
    }
    public function Show(Post $post)
    {
        return view('home.show', compact('post'));
    }
    public function Subscribe(Request $request){
        if($request->isMethod('post')||$request->isMethod('get')){
            $this->validate(request(), [
                'email'=>'required|unique:subscribes|email',
            ]);
            Subscribe::create(request(['email']));
            if(request('callback')!==''){
                $rst['callback']=request('callback');
            }
            $rst['status'] = 'success';
            $rst['code'] = '1';
        }else{
            $rst['status'] = 'error';
            $rst['code'] = '-1';
        }
        $rst = json_encode($rst);
        return $rst;
    }
}
