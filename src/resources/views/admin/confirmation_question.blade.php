@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>{{ $BigQuestion->name }}の問題一覧</h2>
        @isset($BigQuestion->questions->first()->id)
            <table border="1">
                <tr>
                    <th>No.</th>
                    <th>1問目の写真</th>
                    <th>順番を変更する</th>
                    <th>選択肢の変更</th>
                </tr>
                @foreach ($BigQuestion->questions as $question)
                    <tr>
                        <td>
                            <h2 class="question">{{ $loop->iteration }}問目</h2>
                        </td>
                        <td><img src="{{ asset('img/' . $question->image) }}" style="height: 100px"></td>
                        <td>
                            <form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" value=" {{ $question->id }}" name="question_id">
                                <input type="text" value=" {{ $question->order_number }}" name="order_number">
                                <input type="submit" value="更新">
                            </form>
                        </td>
                        <td><a href="confirmation_choice/{{ $question->id }}">選択肢を編集する</a></td>
                    </tr>
                @endforeach
            </table>
        @else
            <div>
                まだ問題がありません
            </div>
        @endisset

    </div>

@endsection
