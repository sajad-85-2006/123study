<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('App\Http\Controllers')->group(function (){
    Route::post('/request','panel\apiRequstController@update');
    Route::post('/uploade','panel\apiRequstController@uploade');
    Route::post('/get-user','panel\apiRequstController@get');
    Route::post('/get-user-chat','panel\apiRequstController@getUser');
    Route::post('/get-message','panel\MessageController@getMessage');
    Route::post('/get-message-user','panel\MessageController@getMessageUser');
    Route::post('/store-message','panel\MessageController@store');
    Route::post('/seen-message','panel\MessageController@seen');
    Route::post('/update-status','panel\apiRequstController@updateStatus');
    Route::post('/save-user','panel\apiRequstController@save');
    Route::post('/update','panel\apiRequstController@update_request');
    Route::post('/delete','panel\apiRequstController@delete_request');
    Route::post('/online','panel\MessageController@online');
    Route::get('/status','panel\MessageController@status');
    Route::post('/new-comment','panel\CommentController@newComment');
    Route::post('/get-comment','panel\CommentController@allComment');
});
