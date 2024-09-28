<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿詳細
        </h2>
    </x-slot>
<body>
    <style>
        body {
            margin: 20px;
        }
        
        .comment-box {
            background-color: #f9fafb; /* グレーの背景 */
            padding: 10px; /* 内側のパディング */
            margin-bottom: 10px; /* 下のマージン */
            border-radius: 4px; /* 角を丸く */
        }
    </style>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-md px-4 md:px-8">
            <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6">{{ $post->title }}</h1>
            <div class="relative mb-6 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:mb-8">
                @if(isset($post->image_url) && !empty($post->image_url))
                    <img src="{{ $post->image_url }}" loading="lazy" alt="投稿写真" class="h-full w-full object-cover object-center" />
                @endif
            </div>


            <p class="sm:text-lg">{{ $post->body }}</p><br>

            <div class="comment">
                @foreach ($comments as $comment)
                    @if($post->id == $comment->post_id)
                        <div class="comment-box">
                            <p>コメント: {{ $comment->body }}</p>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="footer flex justify-between items-center mt-4">
                <div class="edit">
                    <a href="/posts/{{ $post->id }}/edit" class="rounded border px-2 py-1 text-sm text-gray-500">編集</a>
                </div>
                <div>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})" class="rounded border px-2 py-1 text-sm text-gray-500">削除</button>
                    </form>
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <a href="/posts" class="rounded text-sm text-gray-500">戻る</a>
            </div>
        </div>
    </div>
</body>
</x-app-layout>