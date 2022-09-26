@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="quiz">
            <h3>選択肢</h3>
            @foreach ($Question->choices as $choice)
                <p>
                <form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="answerlist" name="choice" class="answerlist" value=" {{ $choice->name }}">
                    <input type="text" value=" {{ $choice->id }}" name="choice_id" hidden>
                    <input type="submit" value="更新">
                    @if ($choice->valid === 1)
                        ○
                    @else
                        ×
                    @endif
                </form>
                </p>
            @endforeach
            <h2>
                <a href="/home/confirmation_question/add_choice/<?= $Question->id ?>">選択肢追加</a>
            </h2>
            <div class="answerbox">
                正解:{{ $Question->choices->where('valid', true)->first()->name }}
            </div>
            <br>
        </div>
    </div>
@endsection
