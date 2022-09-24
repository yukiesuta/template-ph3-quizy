@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div><a href="/home/addBigquestion">大問追加</a></div>
            <table border="1">
                <tr>
                    <th>No.</th>
                    <th>名前</th>
                    <th>1枚目の写真</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($big_questions as $big_question)
                    <tr>
                        <td>{{ $big_question->id }}</td>
                        <td>{{ $big_question->name }}</td>
                        @isset($big_question->questions->first()->image)
                            <td><img src="{{ asset('img/' . $big_question->questions->first()->image) }}" style="height: 100px">
                            </td>
                        @else
                            <td>
                                <div style="height: 100px">問題がまだありません</div>
                            </td>
                        @endisset
                        <td><a href="/home/confirmation_question/{{ $big_question->id }}">問題一覧</a></td>
                        <td><a href="/home/addQuestion/{{ $big_question->id }}">小問追加</a></td>
                        <td><a href="/home/deleteBigQuestion/{{ $big_question->id }}">大問削除</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection
