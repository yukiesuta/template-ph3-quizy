<?php

namespace App\Http\Controllers;

use App\BigQuestion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function editpage()
    {
        $big_questions = Bigquestion::All();
        return view('home', compact('big_questions'));
    }
}
