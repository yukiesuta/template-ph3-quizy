<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./kuizy.css">
    <title>quizy</title>
</head>
<body>

<div class="container" >
    @foreach($items as $item)
        <!-- P.82参照　デフォルトのループ変数 -->
        <h1 class = "question">{{$loop->iteration}}.この地名は何と読む?</h1>
        <div class="choice" id="correct" >
            {{$item->name}}
        </div>
        <div class="choice" id="incorrect1">
            {{$item->name}}
        </div>
        <div class="choice" id="incorrect2">
            {{$item->name}}
        </div>
        <div>
            正解<br>
            {{$item->name}}
        </div>
    @endforeach
    {{-- @foreach($items as $item)
        <td>{{$item->name}}</td>
    @endforeach --}}
</div> 


<!-- assetってなに？？どこからスタートすりゃいいの -->
<script src="{{ asset('#/#') }}"></script>



</body>
</html> 