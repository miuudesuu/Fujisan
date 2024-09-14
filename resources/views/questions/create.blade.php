<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

    <x-app-layout>
    <x-slot name="header">
        質問箱
    </x-slot>
        <body>
  　<style>
        body{
            margin:20px
        }
    </style>
            <h1>Blog Name</h1>
            <form action="/questions" method="POST">
            @csrf
            <div class='category'>
                <h2>Category</h2>
                <select name="question[question_category_id]">
                    @foreach ($question_categories as $question_category)
                        <option value="{{ $question_category->id }}" >
                            {{ $question_category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="question[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="question[body]" placeholder="質問内容"></textarea>
            </div>
            <input type="submit" value="store"><br>
               ログインユーザー：{{ Auth::user()->name }}
            </div>
            <div class="footer">
                <a href="/questions">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>