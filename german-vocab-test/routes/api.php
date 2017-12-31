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



Route::get('/questions', 'QuestionApiController@index');
Route::get('/questions/{id}', 'QuestionApiController@show');
Route::get('/question_count','QuestionApiController@question_count');
Route::get('/session/create', 'SessionController@create');
Route::get('/session', 'SessionController@index');

Route::post('/tests', 'TestController@store');