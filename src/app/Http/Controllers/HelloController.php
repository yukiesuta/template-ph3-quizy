<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
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

        return view('quizyBlade.quizy',compact('id','choices'));

    }

};