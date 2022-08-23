<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>quizy</title>
    <link href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
</head>

<body>
   「 {{ $big_question->name }}」を本当に削除しますか？
    <form action="/{{ request()->path() }}" method="POST">
        @csrf
        <input type="submit" value="はい">
    </form>
</body>

</html>