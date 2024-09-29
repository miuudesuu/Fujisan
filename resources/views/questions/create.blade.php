<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            質問箱
        </x-slot>
    <form action="/questions" method="POST">
      <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">質問投稿</h2>
          
                <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">富士山や富士登山の疑問・謎をみんなに解明してもらおう！<br>
                </div>
          
                <div class="sm:col-span-2">
                  <label for="subject" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">タイトル</label>
                  <input type="text" name="question[title]" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                </div><br>
            
              @csrf
              <div class="category">
                  <h2>Category</h2>
                  <select name="question[question_category_id]" required>
                    <option value="" disabled selected>カテゴリーを選択してください</option>
                    @foreach ($question_categories as $question_category)
                        <option value="{{ $question_category->id }}">
                            {{ $question_category->name }}
                        </option>
                    @endforeach
                </select>
              </div><br>
            <div class="sm:col-span-2">
              <label for="message" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">質問内容</label>
              <textarea name="question[body]" class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
            </div><br>
            
            <div class="flex items-center justify-between sm:col-span-2">
              <button class="btn-square-slant"><input type="submit" value="質問投稿"></button>
              <span class="text-sm text-gray-500"><a href="/questions">戻る</a></span>
            </div>
          <!-- form - end -->
         </div>
      </div>
    </form>
    </x-app-layout>
</body>
</html>
