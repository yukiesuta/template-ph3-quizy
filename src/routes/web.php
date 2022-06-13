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

// Route::get('/', function () {
//     return view('welcome');
// });

$html = <<<EOF

<html>
    <head>
        <title>Hello</title>
        <style>
            body{
                font-size:16pt;
                color:#999;
            }
            h1{
                font-size:100pt;
                color:#eee;
            }
        </style>
    </head>
    <body>
        <h1>Hello</h1><p?>this is sample page.</p>
    </body>
</html>

EOF;


// Route::get('hello', function () use ($html){
//     return $html;
// });



// // Route::get('アドレス(/だったらトップページ)', 関数などreturnで戻り値)
// Route::get('hello', function (){
//     // view('フォルダ名,ファイル名');
//     return view('hello.index');
//     // helloフォルダのindex.php
// });

// Route::get('hello','HelloController@index');
Route::get('/quizy/{id?}','HelloController@index');