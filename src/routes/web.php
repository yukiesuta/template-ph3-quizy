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

Route::get('/quizy', 'QuizyController@selectQuiz');

Route::get('/quizy/{id?}', 'QuizyController@index');
Auth::routes();

Route::get('/home', 'HomeController@editPage');

Route::get('/home/confirmation_question/{id}', 'HomeController@confirmation_question');
Route::post('/home/confirmation_question/{id}', 'HomeController@change_order_number');

Route::get('/home/confirmation_question/confirmation_choice/{id}', 'HomeController@confirmation_choice');
Route::post('/home/confirmation_question/confirmation_choice/{id}', 'HomeController@confirmation_questionComplete');

Route::get('/home/addQuestion/{id}', 'HomeController@addQuestion');
Route::post('/home/addQuestion/{id}', 'HomeController@addQuestionComplete');

Route::get('/home/deleteBigQuestion/{id}', 'HomeController@deleteBigQuestion');
Route::post('/home/deleteBigQuestion/{id}', 'HomeController@deleteBigQuestionComplete');

Route::get('/home/addBigquestion', 'HomeController@addBigQuestion');
Route::post('/home/addBigquestion', 'HomeController@addBigQuestionComplete');

Route::get('/home/confirmation_question/add_choice/{id}', 'HomeController@addChoice');
Route::post('/home/confirmation_question/add_choice/{id}', 'HomeController@addChoiceComplete');