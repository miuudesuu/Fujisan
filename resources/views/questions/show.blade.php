<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questions</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .comment-box {
            background-color: #f9fafb; /* グレーの背景 */
            padding: 10px; /* 内側のパディング */
            margin-bottom: 10px; /* 下のマージン */
            border-radius: 4px; /* 角を丸く */
        }
    </style>
</head>
<script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                質問詳細
            </h2>
        </x-slot>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-md px-4 md:px-8">
                <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6">{{ $question->title }}</h1>
                <p class="sm:text-lg">{{ $question->body }}</p><br>

                <div class="answers">
                    @foreach ($answers as $answer)
                        @if($question->id == $answer->question_id)
                            <div class="comment-box">
                                <p>回答：{{ $answer->body }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="footer flex justify-between items-center mt-4">
                    <div class="edit">
                        <a href="/questions/{{ $question->id }}/edit" class="rounded border px-2 py-1 text-sm text-gray-500">編集</a>
                    </div>
                    <div>
                        <form action="/questions/{{ $question->id }}" id="form_{{ $question->id }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $question->id }})" class="rounded border px-2 py-1 text-sm text-gray-500">削除</button>
                        </form>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="/questions" class="rounded text-sm text-gray-500">戻る</a>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
