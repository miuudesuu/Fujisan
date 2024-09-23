<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Questions</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             質問詳細
            </2>
        </x-slot>
  　<style>
        body{
            margin:20px
        }
    </style>
        <h1 class="title">
            タイトル: {{ $question->title }}
        </h1>
        <div class="content">
            <div class="content__question">
                <p>本文: {{ $question->body }}</p>
            </div>
        </div>
        <div class="answer">
        @foreach ($answers as $answer)
            @if($question->id == $answer->question_id)
                <p>回答: {{$answer->body}}</p>
            @endif
        @endforeach
        </div>
        <div class="footer">
            <div class="edit"><a href="/questions/{{ $question->id }}/edit">編集</a></div>
            <a href="/questions">戻る</a>
        </div>
    </body>
    </x-app-layout>