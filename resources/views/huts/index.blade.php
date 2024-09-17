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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            huts
        </h2>
    </x-slot>
        <body>
  　<style>
        body{
            margin:20px
        }
    </style>
            <h1>Blog Name</h1>
                <div class='huts'>
                    @foreach($huts as $hut)
                ---
                    <div class='hut'>
                        <h2 class='name'>hut name: {{$hut->name}}</h2>
                        <p class='body'>body: {{$hut->body}}</p>
                    </div>
                    @endforeach
                </div>
                ログインユーザー：{{ Auth::user()->name }}
            </div>
        </body>
    </x-app-layout>
</html>