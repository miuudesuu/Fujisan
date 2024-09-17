<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <x-app-layout>
    <x-slot name="header">
        create
    </x-slot>
    <body>
  　<style>
        body{
            margin:20px
        }
    </style>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="category">
                 <h2>Category</h2>
                <select name="post[post_category_id]">
                    @foreach ($post_categories as $post_category)
                        <option value="{{ $post_category->id }}" >
                            {{ $post_category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日もきれい！"></textarea>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <input type="submit" value="store">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>