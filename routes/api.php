<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/todo',function(){
//     return response([1,2,3,4],200); 
// });
// Route::get('/todo/{id}',function(){
//     return response([1,2,3,4],200); 
// });


//Todo
Route::get('/v1/todo','ListController@Get_all');
Route::post('/v1/todo/add','ListController@Add_Todo');
Route::post('/v1/todo/update/{id}','ListController@Update_Todo');
Route::delete('/v1/todo/delete/{id}','ListController@Delete_Todo');

//Todo/task
Route::post('/v1/todo/task/add/{todo_id}','ListController@Add_task_todo');
// Route::post('/v1/todo/task/update/','ListController@Update_task_todo');
Route::post('/v1/todo/task/delete/{todo_id}','ListController@Delete_task_todo');
Route::get('/v1/todo/task/{todo_id}','ListController@Get_all_task_todo');
