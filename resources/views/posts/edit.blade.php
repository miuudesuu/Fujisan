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
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="category">
                    <h2>Category</h2>
                    <select name="post_category_id">
                        @foreach ($post_categories as $post_category)
                            <option value="{{ $post_category->id }}" 
                                {{ $post->post_category_id == $post_category->id ? 'selected' : '' }}>
                                {{ $post_category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>