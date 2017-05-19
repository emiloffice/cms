<?php

namespace App\Http\Controllers\Home;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    /*$router->get('about', 'IndexController@about');
    $router->get('comingsoon', 'IndexController@comingsoon');
    $router->get('company', 'IndexController@company');
    $router->get('contact', 'IndexController@contact');
    $router->get('dreamflight', 'IndexController@dreamflight');
    $router->get('galactic', 'IndexController@galactic');
    $router->get('jobs', 'IndexController@jobs');
    $router->get('legal', 'IndexController@legal');
    $router->get('ourgames', 'IndexController@ourgames');
    $router->get('press', 'IndexController@press');
    $router->get('privacy', 'IndexController@privacy');
    $router->get('publishing', 'IndexController@publishing');
    $router->get('seekingdawn', 'IndexController@seekingdawn');
    $router->get('team', 'IndexController@team');
    $router->get('template', 'IndexController@template');
    $router->get('tos', 'IndexController@tos');
    $router->get('values', 'IndexController@values');*/
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

    public function contact()
    {
        return view('home.contact');
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
}
