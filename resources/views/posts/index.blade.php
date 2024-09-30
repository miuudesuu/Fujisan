<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="utf-8">
      
      <title>Blog</title>
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link href="{{('css/app.css') }}" rel="stylesheet">
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <x-app-layout>
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
    
    .btn-square-slant:active:after, .btn-square-slant:active:before {
      content: none;/*ボタンを押すと線が消える*/
    }
    </style>


    <div　class="posts">
      <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
              <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">富士山投稿</h2>
        
              <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">ここでは、みんなが共有したい富士山の写真・登山エピソードなどを自由に投稿できます。<br>
              ステキな投稿や気になった投稿にはコメントもつけてあげよう！</p>
            </div>
            <!-- text - end -->
        
            <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
            @foreach ($posts as $post)
                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                  <a href="/posts/{{$post->id}}" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                      @if ($post->image_url)
                          <!-- 画像がある場合 -->
                          <img src="{{ $post->image_url }}" loading="lazy" alt="Photo" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                      @else
                          <!-- 画像がない場合 -->
                          <div class="flex items-center justify-center h-full w-full bg-gray-200 text-gray-500">
                              画像なし
                          </div>
                      @endif
                  </a>
                  <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                      <a href="/posts/{{$post->id}}" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $post->title }}</a>
                    </h2>
          
                    <p class="mb-8 text-gray-500"> {{ $post->body }}</p>
          
                   　  <div class="mt-auto flex items-end justify-between">
                        <div class="flex items-center gap-2">
                          <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1611898872015-0571a9e38375?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Brock Wegner" class="h-full w-full object-cover object-center" />
                          </div>
              
                          <div>
                            <span>{{ Auth::user()->name }}</span>
                            <span class="block text-sm text-gray-400">{{ $post->created_at->format('Y-m-d H:i') }}</span>
                          </div>
                        </div>
                      <a href='/comments/create/{{$post->id}}' class="rounded border px-2 py-1 text-sm text-gray-500">コメントする</a>
                    </div>
                  </div>
                </div>
                <!-- article - end -->
              @endforeach
            </div>
          </div><br>
        <div class="text-center">
            <a href='/posts/create' class="btn-square-slant">投稿する</a><br>
        </div>
      </div>
    </div>
  </body>
  </x-app-layout>
  <footer>              
    ログインユーザー：{{ Auth::user()->name }}
</footer>
</html>