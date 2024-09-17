<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        　投稿
        </2>
    </x-slot>
        <body>
    <style>
        body{
            margin:20px;
            background-color: #ccffff;
        }
    </style>
            <h1>Blog Name</h1>
            <a href='/posts/create'>create</a>
            <div class='posts'>
                @foreach ($posts as $post)
                ---
                    <div class='post'>
                        <a href='/posts/{{$post->id}}'><h2 class='title'>title: {{ $post->title }}</h2></a>
                        <p>user name: {{ Auth::user()->name }}</p>
                        <p class='body'>body: {{ $post->body }}</p>
                    </div>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                    <br>
                <a href='/comments/create/{{$post->id}}'>commnents</a><br>
                 @endforeach
               ログインユーザー：{{ Auth::user()->name }}
            </div>
        </body>
    </x-app-layout>
</html>