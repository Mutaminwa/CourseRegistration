<?php

use Illuminate\Http\Request;
use App\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/users', function (Request $request) {
    return response()->json(User::All());
});
Route::post('/course/create', 'CourseController@store');
Route::get('/course/edit/{id}', 'CourseController@edit');
Route::post('/course/update/{id}', 'CourseController@update');
Route::delete('/course/delete/{id}', 'CourseController@delete');
Route::get('/courses', 'CourseController@index');
Route::get('/user/login/{id}', 'CourseController@edit');