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

Route::post('/twitter-account/{twitterAccountId}/twitter-tweet-reservation', 'TwitterAccount\TwitterTweetReservationController@create')->middleware('auth');
Route::put('/twitter-account/{twitterAccountId}/twitter-tweet-reservation/{id}', 'TwitterAccount\TwitterTweetReservationController@update')->middleware('auth');
Route::delete('/twitter-account/{twitterAccountId}/twitter-tweet-reservation/{id}', 'TwitterAccount\TwitterTweetReservationController@delete')->middleware('auth');


Route::patch('/twitter-account/{twitterAccountId}/change-following', 'TwitterAccount\ChangeFollowingController')->middleware('auth');
Route::patch('/twitter-account/{twitterAccountId}/change-unfollowing', 'TwitterAccount\ChangeUnfollowingController')->middleware('auth');
Route::patch('/twitter-account/{twitterAccountId}/change-liking', 'TwitterAccount\ChangeLikingController')->middleware('auth');


//パスワード変更
Route::post('/passSetting', 'Auth\PassSettingController@reset')->name('passSetting');

//メールアドレス変更変更
Route::post('/userSetting', 'Auth\UserSettingController@reset')->name('userSetting');



//認証関係
Auth::routes();


