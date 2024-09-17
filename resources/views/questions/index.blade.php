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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            質問箱
        </h2>
    </x-slot>
        <body>
  　<style>
        body{
            margin:20px;
            background-color: #ccffff;
        }
    </style>
            <a href='/questions/create'>create</a>
                <div class="relative">
                    <div class="absolute left-4 top-3 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <div class="absolute right-4 top-3 text-blue-500 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                        </svg>
                    </div>
                   <input class="w-full rounded-full hover:shadow-lg focus:shadow-lg focus:outline-0 p-2.5 border pl-10" type="text" placeholder="Search">
                </div>
            <div class='questions'>
                @foreach ($questions as $question)
                ---
                    <div class='question'>
                        <a href='/questions/{{$question->id}}'>
                            <h2 class='title'><a href="/questions/{{ $question->id }}">title: {{ $question->title }}</h2></a>
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