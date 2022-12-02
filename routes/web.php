<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Web
Route::namespace('\App\Http\Controllers')->controller('HomeController')->prefix('/')->middleware('lang')->group(function () {
    Route::get('', 'index');
    Route::get('about', 'about');
    Route::get('fa', 'fa');
    Route::get('en', 'en');
    Route::get('contact', 'content');
    Route::post('contact', 'email');
    Route::get('student', 'student');
    Route::get('partner', 'parent');
    Route::get('search', 'search');
    Route::get('successfully', 'successfully');
    Route::get('service/{service}', 'service');

});


//Panel
Route::namespace('\App\Http\Controllers\panel')->prefix('/panel')->middleware(['auth'])->group(function () {
    Route::controller('panelController')->group(function (){
        Route::get('/dashboard','index');
        Route::get('/request','request');
        Route::get('/chat','chat')->can('admin');
        Route::get('/user','user')->can('admin');
        Route::get('/user/show/{id}','showUser')->can('admin');
        Route::get('/request','request')->can('admin');
        Route::get('/profile','profile');
        Route::post('/new-user','storeUser');

    });

});
Route::get('/google-login', '\App\Http\Controllers\GoogleAuthController@redirectToProvider');
Route::get('/callback', '\App\Http\Controllers\GoogleAuthController@handleProviderCallback');
//Auth
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

