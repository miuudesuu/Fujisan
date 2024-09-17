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
            courses
        </h2>
    </x-slot>
        <body>
    <style>
        body{
            margin:20px;
            background-color: cornsilk;
        }

        .mokuji{
            margin: auto;
            text-align:center;
            border:2px solid black;
            background-color: beige;
            padding:8px;
            width:70%;
        }
    </style>
            <h2 class="mokuji">
                <strong>目次</strong><br>
                
                １．富士山のルートとは<br>
                ２．<吉田ルート<br>
                ３．須走ルート<br>
                ４．御殿場ルート<br>
                ５．富士宮ルート<br>
            <br>
            </h2>
            
            <p>その1. 富士山のルートとは</p>
            <p>その2. 吉田ルート</p>
            <p>その3. 須走ルート</p>
            <p>その4. 御殿場ルート</p>
            <p>その5. 富士宮ルート</p>
            <footer>ログインユーザー：{{ Auth::user()->name}}</footer>
        </body>
    </x-app-layout>
</html>