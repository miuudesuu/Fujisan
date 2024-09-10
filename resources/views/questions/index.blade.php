<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <script>
        function deleteQuestion(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
    <x-app-layout>
    <x-slot name="header">
        質問箱
    </x-slot>
        <body>
            <h1>Blog Name</h1>
            <a href='/questions/create'>create</a>
            <div class='questions'>
                @foreach ($questions as $question)
                ---
                    <div class='question'>
                        <a href='/questions/{{$question->id}}'><h2 class='title'>title: {{ $question->title }}</h2></a>
                        @foreach ($users as $user)
                            @if($user->id == $question->user_id)
                                <p>投稿者: {{$user->name}}</p>
                            @endif
                        @endforeach
                        @foreach($question_categories as $question_category)
                            @if($question_category->id == $question->question_catgory_id)
                                <p>category:  {{$question_category->name}}</p>
                            @endif
                        @endforeach
                        <p class='body'>body: {{ $question->body }}</p>
                        <div class="edit"><a href="/questions/{{ $question->id }}/edit">編集</a></div>
                        <form action="/questions/{{ $question->id }}" id="form_{{ $question->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deleteQuestion({{ $question->id }})">delete</button> 
                        </form>
                    </div>
                <a href='/answers/create/{{$question->id}}'>answers</a><br>
                 @endforeach
               ログインユーザー：{{ Auth::user()->name }}
            </div>
        </body>
    </x-app-layout>
</html>