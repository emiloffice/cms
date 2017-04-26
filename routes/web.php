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

Route::get('admin','AdminController@index');//后台首页
Route::get('article-list','AdminController@article');//文章列表
Route::get('article-add','AdminController@articleAdd');//添加文章