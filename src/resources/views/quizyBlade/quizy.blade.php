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
    @foreach($choices[$id] as $choice)
        <!-- P.82参照　デフォルトのループ変数 -->
        <h1 class = "question">{{$loop->iteration}}.この地名は何と読む?</h1>
        <div class="choice" id="correct" >
            {{ $choice[0] }}
        </div>
        <div class="choice" id="incorrect1">
            {{ $choice[1] }}
        </div>
        <div class="choice" id="incorrect2">
            {{ $choice[2] }}
        </div>
        <div>
            正解<br>
            正解は{{ $choice[0] }}です
        </div>
        <table>
            <tr>
                <th>name</th>
                <th>mail</th>
            </tr>
            <tr>
                {{-- <td>{{->choice}}</td>
                <td>{{$choice[1]->choice}}</td> --}}
            </tr>
        </table>
    @endforeach
    @foreach($items as $item)
        <td>{{$item->name}}</td>
    @endforeach
</div> 


<!-- assetってなに？？どこからスタートすりゃいいの -->
<script src="{{ asset('#/#') }}"></script>



</body>
</html> 