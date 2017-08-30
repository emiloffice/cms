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

Auth::routes();

Route::group(['prefix' => '','namespace' => 'Home'],function ($router)
{
    $router->get('', 'HomeController@index');
    $router->get('index', 'HomeController@home');
    $router->get('test', 'HomeController@test');
    $router->get('home', 'HomeController@home');
    $router->get('isCN', 'HomeController@isCN');
    $router->get('about', 'HomeController@about');
    $router->get('posts/{post}','HomeController@show');//显示某篇文章
    $router->get('posts','HomeController@posts');//显示某篇文章
    $router->get('comingsoon', 'HomeController@comingsoon');
    $router->get('company', 'HomeController@company');
    $router->get('contact', 'HomeController@contact');
    $router->get('dreamflight', 'HomeController@dreamflight');
    $router->get('galactic', 'HomeController@galactic');
    $router->get('jobs', 'HomeController@jobs');
    $router->get('legal/', 'HomeController@legal');
    $router->get('ourgames', 'HomeController@ourgames');
    $router->get('press', 'HomeController@press');
    $router->get('privacy', 'HomeController@privacy');
    $router->get('publishing', 'HomeController@publishing');
    $router->get('seekingdawn', 'HomeController@seekingdawn');
    $router->get('seekingdawntest', 'HomeController@seekingdawntest');
    $router->get('team', 'HomeController@team');
    $router->get('template', 'HomeController@template');
    $router->get('tos', 'HomeController@tos');
    $router->get('values', 'HomeController@values');
    $router->get('legal/privacy', 'HomeController@privacy');
    $router->get('legal/tos', 'HomeController@tos');
    $router->get('contact', 'HomeController@contact');
    $router->post('contact', 'HomeController@contact');
    $router->any('subscribe', 'HomeController@Subscribe');
    $router->any('ambassador', 'UserController@ambassador');
    $router->any('ambassador/{code}', 'UserController@ambassadorCode');
    $router->any('ambassador/search', 'HomeController@ambassadorSearch');
    $router->any('login', 'UserController@login');
    $router->any('logout', 'UserController@logout');
    $router->any('user/login', 'UserController@login');
    $router->any('user/logout', 'UserController@logout');
    $router->any('user/register', 'UserController@register');
    $router->any('register', 'UserController@register');
    $router->any('oauth-confirm-email', 'UserController@OAuthConfirmEmail');
    $router->any('confirm-email', 'UserController@confirmEmail');
    $router->any('verify-email-default', 'UserController@confirmEmail');
    $router->any('send-email', 'UserController@sendConfirmEmail');
    $router->any('verify-email-oauth', 'UserController@OauthVerifyUserEmail');
    $router->any('verify-email-default', 'UserController@defaultVerifyUserEmail');

    $router->any('*', 'HomeController@index');
});
// 测试单元
Route::group(['prefix' => 'test','namespace' => 'Home'],function ($router)
{
    $router->get('', 'TestController@index');
});
// 三方登录
Route::group(['prefix' => 'OAuth','namespace' => 'OAuth'],function ($router)
{
    $router->get('facebook', 'FacebookController@redirectToProvider');
    $router->get('facebook-callback', 'FacebookController@handleProviderCallback');
   /* $router->get('facebook', 'FacebookController@login');
    $router->get('facebook-callback', 'FacebookController@callback');*/
    $router->get('facebook-get-short-token', 'FacebookController@getShortToken');
    $router->get('twitter', 'TwitterController@redirectToProvider');
    $router->get('twitter-callback', 'TwitterController@handleProviderCallback');
    $router->get('cancel_auth', 'FacebookController@cancel_auth');
});
Route::group(['prefix' => '','namespace' => 'Home', 'middleware' => 'auth'],function ($router) {
    $router->any('user/center', 'UserController@center');
    $router->any('user-center', 'UserController@center');
});
Route::group(['prefix' => 'cn','namespace' => 'Home'],function ($router){
    $router->get('/', 'CnController@index');
    $router->get('contact', 'CnController@contact');
    $router->get('about', 'CnController@about');
    $router->get('index', 'CnController@index');
    $router->get('seekingdawn', 'CnController@seekingdawn');
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
    //多文件上传
    $router->post('uploads', 'UploadsController@postUploadPicture');
    $router->put('uploads', 'UploadsController@postUploadPicture');
    $router->get('upload', 'UploadsController@upload');
    //消息列表
    $router->get('message-list','MessageController@index');
    $router->get('ambassador-list','AmbassadorController@index');
    $router->post('add-points','AmbassadorController@addPoints');
    $router->get('subscribes-list','SubscribeController@index');
});




Route::get('/home', 'HomeController@index');

