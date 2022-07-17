<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "{{asset('/css/style.css')}}">
    <title>quizy</title>
</head>
<body>

<div class="container" >
    <h1>{{$big_questions->name}}</h1>
    @foreach($questions as $question)
        <div class="quiz">
            <!-- P.82参照　デフォルトのループ変数 -->
            <h2 class = "question">{{$loop->iteration}}.この地名は何と読む?</h1>
            <img src="{{ asset('img/' . $question->image) }}">
            {{-- 選択肢をルートパラメタが一致している適切なquestion_idが一致しているもののみforeachする --}}
            @foreach($choices->where('question_id', $question->id) as $choice)
                <li class="choice" id="correct" >
                    {{$choice->name}}
                </li>
            @endforeach
            <div>
                正解は{{ $choices->where('question_id', $question->id)->where('valid', true)->first()->name }}です
            </div>
        </div>
    @endforeach
</div> 


<!-- assetってなに？？どこからスタートすりゃいいの -->
<script src="{{ asset('#/#') }}"></script>



</body>
</html> 