<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            タイトル: {{ $question->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <p>本文: {{ $question->body }}</p>
            </div>
        </div>
        <div class="answer">
        @foreach ($answers as $answer)
            @if($question->id == $answer->question_id)
                <p>コメント: {{$answer->body}}</p>
            @endif
        @endforeach
        </div>
        <div class="footer">
            <div class="edit"><a href="/questions/{{ $question->id }}/edit">編集</a></div>
            <a href="/questions">戻る</a>
        </div>
    </body>