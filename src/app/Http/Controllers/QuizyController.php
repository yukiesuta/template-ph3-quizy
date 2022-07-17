<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizyController extends Controller
{ 
    public function index($id){
    $big_questions = DB::table('big_questions')->where('id', $id)->first();
    $questions = DB::table('questions')->where('big_question_id', $id)->get();
    $choices = DB::table('choices')->get();
    return view('quizyBlade.quizy', compact('big_questions','questions', 'choices'));

        // view(テンプレートの場所,配列)
        // viewの編集とcontorollerで定義した変数の名前が同じときにcompact関数でまとめる
        // return view('quizyblade.quizy',compact('id','choices'));

        // クエリをかくのを減らす クエリの発行数を減らす イーガーロード（？）
        // INT を自然数のみ
    }
    

};