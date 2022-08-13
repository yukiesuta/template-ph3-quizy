@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <table border="1">
                @foreach ($big_questions as $big_question)
                    <tr>
                        <td>{{ $big_question->name }}</td>
                        <td><a href="/home/addQuestion/{{ $big_question->id }}">編集</a></td>
                        <td><a href="">削除</a></td>
                        <td><img src="{{ asset('img/' . $big_question->questions->first()->image) }}" style="width: 200px">
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection
