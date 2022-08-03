<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>quizy</title>
</head>

<body>

    <div class="container">
        <h1>{{ $big_questions->name }}</h1>
        @foreach ($questions as $question)
            <div class="quiz">
                <!-- P.82参照　デフォルトのループ変数 -->
                <h2 class="question">{{ $loop->iteration }}.この地名は何と読む?</h1>
                    <img src="{{ asset('img/' . $question->image) }}">
                    {{-- 選択肢をルートパラメタが一致している適切なquestion_idが一致しているもののみforeachする --}}
                    @foreach ($choices->where('question_id', $question->id) as $choice)
                        <li class="answerlist" id="answerlist_{{ $question->id }}_{{ $loop->index + 1 }}"
                            name="answerlist_{{ $question->id }}" class="answerlist"
                            onclick="check(
                                {{ $question->id }},
                                {{ $loop->index + 1 }},
                                {{ $choices->where('question_id', $question->id)->where('valid', true)->first()->id -($question->id - 1) * 3 }}
                            )">
                            {{ $choice->name }}
                        </li>
                    @endforeach
                    <div id="answerbox_{{ $question->id }}" class="answerbox">
                        <span id="answertext_{{ $question->id }}"></span><br>
                        正解は{{ $choices->where('question_id', $question->id)->where('valid', true)->first()->name }}です
                    </div>
            </div>
        @endforeach
    </div>


    <!-- assetってなに？？どこからスタートすりゃいいの -->
    <script src="{{ asset('/js/main.js') }}"></script>



</body>

</html>
