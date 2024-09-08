<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <x-app-layout>
    <x-slot name="header">
        質問回答
    </x-slot>
    <body>
        <h1>Blog Name</h1>
        <form action="/answers" method="POST">
            @csrf
            <div class="body">
                <h2>Body</h2>
                <textarea name="answer[body]" placeholder="それいいね！"></textarea>
                <input type="hidden" name="answer[question_id]" value="{{$question->id}}">
            </div>
            <input type="submit" value="store">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>