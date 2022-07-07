<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizyController extends Controller
{ 
    public function index($id){
    $items = DB::select('select * from choices');
    return view('quizyblade.choices',['items'=>$items]);

        // view(テンプレートの場所,配列)
        // viewの編集とcontorollerで定義した変数の名前が同じときにcompact関数でまとめる
        // return view('quizyblade.quizy',compact('id','choices'));

    }

};