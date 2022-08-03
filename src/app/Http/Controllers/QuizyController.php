<?php

namespace App\Http\Controllers;

use App\Question;
use App\Bigquestion;
use App\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// クラスを書いたら名前空間を自動で追加してくれる機能

class QuizyController extends Controller
{ 
    public function index($id){
    $big_questions = Bigquestion::where('id', $id)->first();
    $questions = Question::where('big_question_id', $id)->get();
    $choices = Choice::get();
    return view('quizyBlade.quizy', compact('big_questions','questions', 'choices'));

        // view(テンプレートの場所,配列)
        // viewの編集とcontorollerで定義した変数の名前が同じときにcompact関数でまとめる
        // return view('quizyblade.quizy',compact('id','choices'));

        // クエリをかくのを減らす クエリの発行数を減らす イーガーロード（？）
        // INT を自然数のみ
    }
    

};