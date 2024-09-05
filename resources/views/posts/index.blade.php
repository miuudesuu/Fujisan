<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <script>
        function deletePost(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
    <x-app-layout>
    <x-slot name="header">
        投稿
    </x-slot>
        <body>
            <h1>Blog Name</h1>
            <a href='/posts/create'>create</a>
            <div class='posts'>
                @foreach ($posts as $post)
                -
                    <div class='post'>
                        <h2 class='title'>{{ $post->title }}</h2>
                        <p>{{ Auth::user()->name }}</p>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                @endforeach
                <a href='/comments'>commnent</a>
               ログインユーザー：{{ Auth::user()->name }}
            </div>
        </body>
    </x-app-layout>
</html>