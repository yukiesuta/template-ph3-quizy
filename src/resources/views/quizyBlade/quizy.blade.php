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
        <h1 class = "question">1.この地名は何と読む?</h1>

        <div class="choice" id="correct" >
            {{ $choice[0] }}
        </div>
        <div class="choice" id="incorrect1">
            {{ $choice[1] }}
        </div>
        <div class="choice" id="incorrect2">
            {{ $choice[2] }}
        </div>

    @endforeach
</div> 


<!-- assetってなに？？どこからスタートすりゃいいの -->
<script src="{{ asset('#/#') }}"></script>



</body>
</html> 