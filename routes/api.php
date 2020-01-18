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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//新規登録
Route::post('/register', 'Auth\RegisterController@register')->name('register');
//ログイン
Route::post('/login', 'Auth\LoginController@login')->name('login');
//ログアウト
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
//認証状態維持の為にログインユーザーを返す
Route::get('/user', function (){return Auth::user();})->name('user');


//Route::post('forgot/password', 'UserController@sendResetLinkEmail')->name('forgot.password');
Route::post('/passReset', 'PassResetController@sendResetLinkEmail')->name('passReset');
