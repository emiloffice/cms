<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;

/*Route::get('tasks', function (){
    return $tasks = DB::table('tasks')->latest()->get();
    $tasks = DB::table('tasks')->latest()->get();
    return view('tasks.index',compact('tasks''));
});
Route::get('tasks/{task}' ,function ($id){
    $task = DB::table('tasks') -> find($id);
    return view('tasks/show', compact('task'));
});*/

/*//Eloquent Model
Route::get('tasks', function (){
    $completedTasks = Task::latest()->completed()->get();
    $unCompletedTasks = Task::latest()->unCompleted()->get();
    return view('tasks.index',compact('completedTasks', 'unCompletedTasks'));
});
Route::get('tasks/{task}' ,function ($id){
    $task = Task::findorFail($id);
    return view('tasks/show', compact('task'));
});*/

/*
Route::get('tasks', 'TasksController@index');
Route::get('tasks/{task}', 'TasksController@show');

Route::get('admin', 'AdminController@index');//后台首页
Route::get('menu', 'AdminController@menu');//菜单栏首页
Route::get('add-menu', 'AdminController@addMenu');//菜单栏首页
Route::get('article-list', 'PostsController@index');//文章列表
Route::get('article-add', 'PostsController@create');//添加文章
Route::post('article-store', 'PostsController@store');//添加文章
Route::post('article-edit', 'PostsController@edit');//修改php文章
Route::get('admin-login', 'AdminController@login');//后台登录
Route::get('admin-role', 'AdminController@role');//角色管理
Route::get('admin-role-add', 'AdminController@roleAdd');//角色添加
Route::get('admin-permission', 'AdminController@permission');//权限管理
Route::get('admin-list', 'AdminController@_list');//权限管理

//系统设置
Route::get('system-base','SystemController@base');//基本设置
Route::get('system-category','SystemController@category');//栏目
Route::get('category-add','SystemController@categoryAdd');//栏目添加
Route::get('system-log','SystemController@log');//日志
*/

Route::group(['prefix' => '','namespace' => 'Home'],function ($router)
{
//    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->get('', 'IndexController@index');
    $router->get('index', 'IndexController@index');
    $router->get('home', 'IndexController@index');
    $router->get('about', 'IndexController@about');
    $router->get('posts/{post}','IndexController@show');//显示某篇文章
    $router->get('posts','IndexController@posts');//显示某篇文章
    $router->get('comingsoon', 'IndexController@comingsoon');
    $router->get('company', 'IndexController@company');
    $router->get('contact', 'IndexController@contact');
    $router->get('dreamflight', 'IndexController@dreamflight');
    $router->get('galactic', 'IndexController@galactic');
    $router->get('jobs', 'IndexController@jobs');
    $router->get('legal/', 'IndexController@legal');
    $router->get('ourgames', 'IndexController@ourgames');
    $router->get('press', 'IndexController@press');
    $router->get('privacy', 'IndexController@privacy');
    $router->get('publishing', 'IndexController@publishing');
    $router->get('seekingdawn', 'IndexController@seekingdawn');
    $router->get('team', 'IndexController@team');
    $router->get('template', 'IndexController@template');
    $router->get('tos', 'IndexController@tos');
    $router->get('values', 'IndexController@values');
    $router->get('legal/privacy', 'IndexController@privacy');
    $router->get('legal/tos', 'IndexController@tos');
    $router->get('contact', 'IndexController@contact');
    $router->post('contact', 'IndexController@contact');
    $router->any('subscribe', 'IndexController@Subscribe');
});


Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->any('logout', 'LoginController@logout');

    $router->get('dash', 'DashboardController@index');
    $router->get('index', 'AdminController@index');

    $router->get('posts','PostsController@index');//文章页
    $router->get('posts/create','PostsController@create');//创建文章
    $router->post('posts','PostsController@store');//保存文章
    $router->get('posts/{post}','PostsController@show');//后台显示某篇文章
    $router->get('posts-edit/{post}','PostsController@edit');//编辑某篇文章
    $router->post('posts-update/{id}','PostsController@update');//更新某篇文章
    $router->get('/', 'AdminController@index');//后台首页
    $router->get('menu', 'AdminController@menu');//菜单栏首页
    $router->get('add-menu', 'AdminController@addMenu');//菜单栏首页
    $router->get('article-list', 'PostsController@index');//文章列表
    $router->get('article-add', 'PostsController@create');//添加文章
    $router->post('article-store', 'PostsController@store');//添加文章
    $router->post('article-edit', 'PostsController@edit');//修改php文章
    $router->get('admin-login', 'AdminController@login');//后台登录
    $router->get('admin-role', 'AdminController@role');//角色管理
    $router->get('admin-role-add', 'AdminController@roleAdd');//角色添加
    $router->get('admin-permission', 'AdminController@permission');//权限管理
    $router->get('admin-list', 'AdminController@_list');//权限管理

    //系统设置
    $router->get('system-base','SystemController@base');//基本设置
    $router->get('system-category','SystemController@category');//栏目
    $router->get('category-add','SystemController@categoryAdd');//栏目添加
    $router->get('system-log','SystemController@log');//日志
    //文件上传
    $router->post('upload', 'UploadsController@upload');
    $router->put('upload', 'UploadsController@upload');
    $router->get('upload', 'UploadsController@upload');
    //消息列表
    $router->get('message-list','MessageController@index');
    $router->get('subscribes-list','SubscribeController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

