<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>quizy</title>
    <link
        href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
</head>

<body>
    遊びたいクイズを選択
    <table border="1">
        @foreach ($big_questions as $big_question)
            <tr>
                <td><a href="quizy/{{ $big_question->id }}">{{ $big_question->name }}</a></td>
            </tr>
        @endforeach
    </table>
    <div>
        <a href="login">管理画面はこちら</a>
    </div>
</body>

</html>
