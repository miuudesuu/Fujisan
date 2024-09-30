<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{('css/app.css') }}" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    
        <div class="bg-white py-6 sm:py-8 lg:py-12">
          <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
              <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Q&A</h2>
        
              <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
              匿名なので気軽に投稿しよう！<br>
              解答がわかるものがあったら、回答してみよう ^ ^<br>
              タイトルを押すと回答が見えるよ。</p>
              
            </div>
            <!-- text - end -->
            <div class="grid gap-4 sm:grid-cols-2 md:gap-8">
                <!-- question - start -->
                @foreach ($questions as $question)
                <div class="rounded-lg bg-gray-100 p-5">
                    <div class="mb-4 flex items-center justify-between gap-4 border-b pb-4">
                        <h3 class="font-semibold text-indigo-500 sm:text-lg md:text-xl"><div class='title'><a href="/questions/{{ $question->id }}">{{ $question->title }}</a></div></h3>
                    <span class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-gray-300 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    </div>
                    <p class="text-gray-500">{{ $question->body }}</p><br>
                    <div class="flex w-full justify-end">
                        <a href='/answers/create/{{$question->id}}' class="rounded border px-2 py-1 text-sm text-gray-500">回答する</a>
                    </div>
                </div>
                @endforeach
              <!-- question - end -->
            </div>
                <div class="flex justify-center w-full">
                    <a href='/questions/create' class="btn-square-slant">create</a>
                </div>  
            </div>
        </div>
            
        </body>
    </x-app-layout>
</html>
<footer>
    ログインユーザー：{{ Auth::user()->name }}
</footer>