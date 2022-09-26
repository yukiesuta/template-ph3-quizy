<?php

namespace App\Http\Controllers;

use App\Question;
use App\Bigquestion;
use App\Choice;

class QuizyController extends Controller
{
    public function selectQuiz()
    {
        $big_questions = Bigquestion::all();
        return view('quizyBlade.selectQuiz', compact('big_questions'));
    }
    public function index($id)
    {
        $big_questions = Bigquestion::where('id', $id)->first();
        return view('quizyBlade.quizy', compact('big_questions'));
    // view(テンプレートの場所,配列)
        // viewの編集とcontorollerで定義した変数の名前が同じときにcompact関数でまとめる
        // return view('quizyblade.quizy',compact('id','choices'));

        // クエリをかくのを減らす クエリの発行数を減らす イーガーロード（？）
        // INT を自然数のみ
    }
};
