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
    return view('todo');
});


//Get TODO List
Route::get('/list','ListController@Get_list');

//Auth Route
Route::get('/login',array('uses'=>'Auth\LoginController@Show_login','as'=>'login'));
Route::post('/login/Process',array('uses'=>'Auth\LoginController@Process_login','as'=>'CheckLogin'));
Route::post('/register',array('uses'=>'Auth\LoginController@show_register','as'=>'register'));
Route::get('/home',array('uses'=>'HomeController@index','as'=>'Home'));
Route::post('/logout',array('uses'=>'HomeController@logout','as'=>'logout'));
// Route::get('/registe','LoginController@Show_login');

//Development
Route::get('/v1/dashboard',function () {
    return view('list');
});


Auth::routes();


