<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Question</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <x-app-layout>
            <x-slot name="header">
                質問編集
            </x-slot>
            <style>
                .btn-square-slant {
                    text-align: center;
                    margin: 20px;
                    display: inline-block;
                    position: relative;
                    padding: 0.5em 1.4em;
                    text-decoration: none;
                    background: #668ad8;
                    color: #FFF;
                    border-bottom: solid 5px #36528c;
                    border-right: solid 5px #5375bd;
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
                    border: none;
                    transform: translate(6px,6px);
                }
                
                .btn-square-slant:active:after, .btn-square-slant:active:before {
                    content: none;
                }
            </style>
            
            <form action="/questions/{{ $question->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="bg-white py-6 sm:py-8 lg:py-12">
                    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                        <div class="mb-10 md:mb-16">
                            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">編集画面</h2>
                            <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
                                そのまま編集内容を打ち込みましょう。<br>編集が終わったら、保存をタップして確認しましょう。
                            </p>
                        </div>
                        
                        <div class="sm:col-span-2">
                            <label for="subject" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">タイトル</label>
                            <input type='text' name='question[title]' value="{{ $question->title }}" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                        </div><br>
                        
                        <div class="category">
                            <h2>Category</h2>
                            <select name="question[question_category_id]">
                                @foreach ($question_categories as $question_category)
                                    <option value="{{ $question_category->id }}" 
                                        {{ $question->question_category_id == $question_category->id ? 'selected' : '' }}>
                                        {{ $question_category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="sm:col-span-2">
                            <label for="message" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">質問文</label>
                            <input type='text' name='question[body]' value="{{ $question->body }}" class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"/>
                        </div><br>
                        
                        <div class="btn-square-slant">
                            <button type="submit">保存</button>
                        </div>
                        <div class="text-sm text-right text-gray-500"><a href="/questions">戻る</a></div>
                    </div>
                </div>
            </form>
        </x-app-layout>
    </body>
</html>
