@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>{{ $BigQuestion->name }}の問題一覧</h2>
        @isset($BigQuestion->questions->first()->id)
            <table border="1">
                <tr>
                    <th>No.</th>
                    <th>写真</th>
                    <th>順番を変更する（小さい方が先）</th>
                    <th></th>
                </tr>
                @foreach ($BigQuestion->questions as $question)
                    <tr>
                        <td>
                            <div class="question">{{ $loop->iteration }}</div>
                        </td>
                        <td><img src="{{ asset('img/' . $question->image) }}" style="height: 100px"></td>
                        <td>
                            <form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" value=" {{ $question->id }}" name="question_id" hidden>
                                <input type="text" value=" {{ $question->order_number }}" name="order_number">
                                <input type="submit" value="更新">
                            </form>
                        </td>
                        <td><a href="confirmation_choice/{{ $question->id }}">選択肢一覧</a></td>
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
