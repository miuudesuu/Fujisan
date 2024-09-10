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
                ---
                    <div class='post'>
                        <a href='/posts/{{$post->id}}'><h2 class='title'>title: {{ $post->title }}</h2></a>
                        @foreach ($users as $user)
                            @if($user->id == $post->user_id)
                                <p>投稿者: {{$user->name}}</p>
                            @endif
                        @endforeach
                        <p class='body'>body: {{ $post->body }}</p>
                    </div>
                    <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
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