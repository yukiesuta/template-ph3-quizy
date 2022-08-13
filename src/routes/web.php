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

// // Route::get('アドレス(/だったらトップページ)', 関数などreturnで戻り値)
// Route::get('hello', function (){
//     // view('フォルダ名,ファイル名');
//     return view('hello.index');
//     // helloフォルダのindex.php
// });

Route::get('/quizy/{id?}', 'QuizyController@index');
Auth::routes();

Route::get('/home', 'HomeController@editPage');

Route::get('/home/addQuestion/{id}', 'HomeController@addQuestion');
Route::post('/home/addQuestion/{id}', 'HomeController@addQuestionComplete');
