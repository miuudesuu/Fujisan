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
        courses
    </x-slot>
        <body>
            <h1>Blog Name</h1>
            <img src="PC/Desktop/レバテックカレッジ/富士山/全ルート.jpg" alt="登山ルート">
            ログインユーザー：{{ Auth::user()->name }}
        </body>
    </x-app-layout>
</html>