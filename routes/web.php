<?php

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

//Route::get('/mypage', 'MypageController@mypage')->name('mypage');
//
//Route::get('/mypage/setting', 'MypageController@setting')->name('mypage.setting');
////
//Route::get('/mypage/tweet', 'MypageController@tweet')->name('mypage.tweet');
////
//Route::get('/mypage/account', 'MypageController@account')->name('mypage.account');
////
//Route::get('/index', 'IndexController@index')->name('index');


// APIのURL以外のリクエストに対してはindexテンプレートを返す
// 画面遷移はフロントエンドのVueRouterが制御する
//{any?} で任意のパスパラメータ any を受け入れる。次に where メソッドで正規表現を用いて any パスパラメータの文字列形式を定義しているが、
//.+ で「任意の文字が一文字以上」つまり「なんでもいい」という指定をしている。まとめると、any パラメータはあってもなくてもいい（?）し、
//ある場合はどんな文字列でもいい（.+）ということになる。


Route::get('/{any?}', function () {
  return view('index'); //TODO
})->where('any', '.+');
