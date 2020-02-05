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


Route::get('/twitter-accounts', 'TwitterAccountController@index')->middleware('auth');
Route::get('/twitter-account/{id}', 'TwitterAccountController@show')->middleware('auth');
Route::put('/twitter-account/{id}', 'TwitterAccountController@update')->middleware('auth');
Route::delete('/twitter-account/{id}', 'TwitterAccountController@delete')->middleware('auth');

Route::get('/twitter-account/{twitterAccountId}/check-by/{name}', 'TwitterAccount\TargetTwitterAccountController@checkByName')->middleware('auth');

//パスワード変更
//Route::post('/passSetting', 'Auth\PassSettingController@reset')->name('passSetting');



//認証関係
Auth::routes();


