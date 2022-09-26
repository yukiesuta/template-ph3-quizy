@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>選択肢追加</h2>
        <form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="choice">
            <input type="text" value="{{ $Choice->first()->question_id }}" name="question_id" hidden>
            <input type="submit" value="追加">
        </form>
    </div>
@endsection
