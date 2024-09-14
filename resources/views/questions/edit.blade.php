<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Question</title>s</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
  　<style>
        body{
            margin:20px
        }
    </style>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/questions/{{ $question->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="category">
                    <h2>Category</h2>
                    <select name="question_category_id">
                        @foreach ($question_categories as $question_category)
                            <option value="{{ $question_category->id }}" 
                                {{ $question->post_category_id == $question_category->id ? 'selected' : '' }}>
                                {{ $question_category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='question[title]' value="{{ $question->title }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='question[body]' value="{{ $question->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>