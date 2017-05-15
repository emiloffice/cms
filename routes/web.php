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

Route::get('/', function () {
    return view('welcome');
});
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
Route::get('posts','PostsController@index');//文章页
Route::get('posts/create','PostsController@create');//创建文章
Route::post('posts','PostsController@store');//保存文章
Route::get('posts/{post}','PostsController@show');//显示某篇文章
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




Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');

    $router->get('dash', 'DashboardController@index');
});







Auth::routes();

Route::get('/home', 'HomeController@index');
