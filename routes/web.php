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


//Get TODO List
Route::get('/list','ListController@Get_list');


//API

//Adding TODO
Route::post('/API/V1/ADD','ListController@Add_Todo');
Route::patch('/API/V1/UPDATE','ListController@Update_Todo');
Route::delete('/API/V1/DELETE','ListController@Delete_Todo');



Auth::routes();


