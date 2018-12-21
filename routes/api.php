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
Route::get('/v1','ListController@Get_Todo');
Route::post('/v1/add','ListController@Add_Todo');
Route::patch('/v1/update','ListController@Update_Todo');
Route::delete('/v1/delete','ListController@Delete_Todo');
