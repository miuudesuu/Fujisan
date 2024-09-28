<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
        <link href="{{('css/app.css') }}" rel="stylesheet">        
        <link href="{{('css/app.css') }}" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <x-app-layout>
    <x-slot name="header">
        create
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
    </style>
    <form action="/posts" method="POST" enctype="multipart/form-data">
      <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <!-- text - start -->
          <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">富士山投稿</h2>
      
            <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">自分の好きな富士山の写真・いまの天気・登山中の気持ちなど、なんでも投稿してみんなに共有しましょう。<br>みんなで富士山を楽しみましょう！
          </div>
      
            <div class="sm:col-span-2">
              <label for="subject" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">タイトル</label>
              <input type="text" name="post[title]" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
            </div><br>
            
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
              </div><br>
            <div class="sm:col-span-2">
              <label for="message" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">投稿文</label>
              <textarea name="post[body]" class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
            </div><br>
            
              <div class="image">
                <input type="file" name="image">
              </div><br>
      
            <div class="flex items-center justify-between sm:col-span-2">
              <button class="btn-square-slant"><input type="submit" value="投稿"></button>
              <span class="text-sm text-gray-500"><a href="/posts">戻る</a></span>
            </div>
          <!-- form - end -->
         </div>
      </div>
    </form>
    </body>
    </x-app-layout>
</html>