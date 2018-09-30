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
Route::apiResource('/question', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
//get a particular question before its reply
Route::apiResource('/question/{question}/reply', 'ReplyController');
Route::post('/reply/{reply}/like', 'LikeController@likeIt');
Route::delete('/reply/{reply}/like', 'LikeController@unLikeIt');