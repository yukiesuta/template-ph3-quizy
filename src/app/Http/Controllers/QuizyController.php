<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizyController extends Controller
{ 
    public function index($id){
        $choices = [
            1=>[
                1=>['たかなわ','たかわ','こうわ'],
                2=>['かめど','かめと','かめいど'],
                3=>['こうじまち','おかとまち','かゆまち']
            ],
            2=>[
                1=>['むこうひだ','むかいなだ','むきひら'],
                2=>['おしらべ','みよし','みつぎ'],
                3=>['ぎやま','ぎんざん','かなやま']
            ]
            ];

    $items = DB::select('select * from quizy');
    return view('quizy.index',['items'=>$item]);

        // view(テンプレートの場所,配列)
        // viewの編集とcontorollerで定義した変数の名前が同じときにcompact関数でまとめる
        return view('quizyBlade.quizy',compact('id','choices'));

    }

};