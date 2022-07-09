<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizyController extends Controller
{ 
    public function index($id){
    // $choices = DB::select('select * from choices');
    // return view('quizyBlade.quizy',['choices'=>$choices]);

    // $questions = DB::select('select * from questions WHERE ');
    // return view('quizyBlade.quizy',['questions'=>$questions]);
    $questions = DB::table('questions')->where('big_question_id', $id)->get();
    $choices = DB::table('choices')->get();
    return view('quizyBlade.quizy', compact('questions', 'choices'));


        // view(テンプレートの場所,配列)
        // viewの編集とcontorollerで定義した変数の名前が同じときにcompact関数でまとめる
        // return view('quizyblade.quizy',compact('id','choices'));

    }
    

};