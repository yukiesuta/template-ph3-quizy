<?php

namespace App\Http\Controllers;

use App\BigQuestion;
use App\Question;
use App\Choice;
use Illuminate\Http\Request;
use Illuminate\Http\News;

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

    public function editPage()
    {
        $big_questions = Bigquestion::All();
        return view('admin.home', compact('big_questions'));
    }
    public function addQuestion($id)
    {
        $BigQuestion = BigQuestion::find($id);
        return view('admin.addQuestion', compact('BigQuestion'));
    }

    public function addQuestionComplete(Request $request, $id)
    {
        $file = $request->file;
        $fileName = $request->{'name' . $request->valid} . '.png';
        $path = public_path('img/');
        $file->move($path, $fileName);

        $question = new Question;
        $question->big_question_id = $id;
        $question->image = $fileName;
        $question->save();
        $question->choices()->saveMany([
            new Choice([
                'name' => $request->name1,
                'valid' => intval($request->valid) === 1,
            ]),
            new Choice([
                'name' => $request->name2,
                'valid' => intval($request->valid) === 2,
            ]),
            new Choice([
                'name' => $request->name3,
                'valid' => intval($request->valid) === 3,
            ]),
        ]);

        return redirect('/home');
    }

    public function addBigQuestion() {
        return view('admin.addBigQuestion');
    }
    public function addBigQuestionComplete(Request $request) {
        BigQuestion::create([
            'name' => $request->title
        ]);
        $request->timestamps = false;
        return redirect('/home');
    }
}
