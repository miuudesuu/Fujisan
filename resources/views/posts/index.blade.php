<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{('css/app.css') }}" rel="stylesheet">

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
        
        .btn-square-slant {
          text-align:center;
          margin: 20px; /* ボタンの下にスペースを追加 */
          display: inline-block;
          position: relative;
          padding: 0.5em 1.4em;
          text-decoration: none;
          background: #668ad8;/*ボタン色*/
          color: #FFF;
          border-bottom: solid 5px #36528c;/*ボタン色より暗めに*/
          border-right: solid 5px #5375bd;/*ボタン色より暗めに*/
        }
        
        .btn-square-slant:before {  
          content: " ";
          position: absolute;
          bottom: -5px;
          left: -1px;
          width: 0;
          height: 0;
          border-width: 0 6px 6px 0px;
          border-style: solid;
          border-color: transparent;
          border-bottom-color: #FFF;
        }
        .btn-square-slant:after {  
          content: " ";
          position: absolute;
          top: -1px;
          right: -5px;
          width: 0;
          height: 0;
          border-width: 0px 6px 6px 0px;
          border-style: solid;
          border-color: #FFF;
          border-bottom-color: transparent;
        }
        
        .btn-square-slant:active {
          /*ボタンを押したとき*/
          border:none;
          -webkit-transform: translate(6px,6px);
          transform: translate(6px,6px);
        }
        
        .btn-square-slant:active:after, .btn-square-slant:active:before {
          content: none;/*ボタンを押すと線が消える*/
        }
    </style>
            <h1>Blog Name</h1>
            <a href='/posts/create'class="btn-square-slant">create</a><br>
             <a href='/posts/create'class="custom-button">create</a>
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
            </div>
        </body>
    </x-app-layout>
    <footer>              
    ログインユーザー：{{ Auth::user()->name }}
</footer>
</html>