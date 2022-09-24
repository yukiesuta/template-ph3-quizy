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
    public function confirmation_question($id)
    {
        $BigQuestion = BigQuestion::find($id);
        return view('admin.confirmation_question', compact('BigQuestion'));
    }

    public function confirmation_choice($id)
    {
        $Question = Question::find($id);
        return view('admin.confirmation_choice', compact('Question'));
    }

    public function change_order_number(Request $request)
    {
        $question_id = $request['question_id'];
        $question = Question::find($question_id);
        $question->order_number = $request['order_number'];
        $question->save();
        return back();
    }

    // choiceテーブルのid
    public function confirmation_questionComplete(Request $request)
    {
        $choice_id = $request['choice_id'];
        $choice = Choice::find($choice_id);
        $choice->name = $request['choice'];
        $choice->save();
        return back();
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

    public function addBigQuestion()
    {
        return view('admin.addBigQuestion');
    }
    public function addBigQuestionComplete(Request $request)
    {
        BigQuestion::create([
            'name' => $request->title
        ]);
        $request->timestamps = false;
        return redirect('/home');
    }

    public function deleteBigQuestion($id)
    {
        $big_question = BigQuestion::find($id);
        return view('admin.deleteBigQuestion', compact('big_question'));
    }

    public function deleteBigQuestionComplete($id)
    {
        $big_question = BigQuestion::find($id);
        $questions = $big_question->questions;
        foreach ($questions as $question) {
            $choices = $question->choices;
            foreach ($choices as $choice) {
                $choice->delete();
            }
            $question->delete();
        }
        $big_question->delete();

        return redirect('/home');
    }
}
