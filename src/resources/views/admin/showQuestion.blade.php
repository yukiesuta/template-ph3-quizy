@extends('layouts.app')

@section('content')

<div class="container">
    <h2>{{$BigQuestion->name}}の問題一覧</h2>
@isset($BigQuestion->questions->first()->id)
            @foreach ($BigQuestion->questions as $question)
                <div class="quiz">
                    <h2 class="question">{{ $loop->iteration }}問目</h2>
                        <h3>写真</h3>
                        <img src="{{ asset('img/' . $question->image) }}">
                        <h3>選択肢</h3>
                        @foreach ($question->choices as $choice)
                        <li>
                            <form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input class="answerlist" id="answerlist_{{ $question->id }}_{{ $loop->index + 1 }}"
                                    name="choice" class="answerlist" value=" {{ $choice->name }}">
                                <input type="text" value=" {{ $choice->id }}" name="choice_id" hidden>
                                <input type="submit" value="更新">
                            </form>
                        </li>
                        @endforeach
                        <div id="answerbox_{{ $question->id }}" class="answerbox">
                            <span id="answertext_{{ $question->id }}"></span><br>
                            正解:{{ $question->choices->where('question_id', $question->id)->where('valid', true)->first()->name }}
                        </div>
                        <br>
                </div>
            @endforeach
        @else
            <div>
                まだ問題がありません
            </div>
        @endisset

</div>

@endsection