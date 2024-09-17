<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
  　<style>
        body{
            margin:20px
        }
    </style>
        <h1 class="title">
            タイトル: {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <p>本文: {{ $post->body }}</p>
            </div>
            <div>
                <img src="{{ $post->image_url }}">
            </div>
        </div>
        <div class="comment">
        @foreach ($comments as $comment)
            @if($post->id == $comment->post_id)
                <p>コメント: {{$comment->body}}</p>
            @endif
        @endforeach
        </div>
        <div class="footer">
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
            <a href="/">戻る</a>
        </div>
    </body>