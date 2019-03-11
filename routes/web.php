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
Route::get('/', function () {
    return view('welcome');
});


//  登录页面
Route::get('admin/login', 'Admin\LoginController@index');
//  执行登录
Route::post('admin/doLogin', 'Admin\LoginController@doLogin');
//  用户退出
Route::get('admin/logout', 'Admin\LoginController@logout');

//管理后台RBAC功能类的路由组
Route::prefix('admin')->group(function(){

    //  登录页面
    Route::get('home', 'Admin\LoginController@home');

});
Route::get('admin/login1', 'Admin\LoginController@add');

























