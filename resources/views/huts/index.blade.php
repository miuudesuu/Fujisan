<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{('css/app.css') }}" rel="stylesheet">
    </head>
    <x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            山小屋情報
        </h1>
    </x-slot>
        <body>
  　<style>
        
        .toc-002 {
            margin-bottom: 30px;
            border: 2px solid #77bff3;
            border-radius: 3px;
            margin:auto;
            width:80%;
        }
        
        .toc-002 div {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 10px 0;
            background-color: #77bff3;
            color: #fff;
            font-weight: 600;
            font-size: 1.1em;
        }
        
        .toc-002 label::after {
            margin-left: 7px;
            font-weight: 500;
            font-size: .7em;
            color: #fff;
            content: "[開く]";
            cursor: pointer;
        }
        
        .toc-002:has(:checked) label::after {
            content: "[閉じる]";
        }
        
        .toc-002 input {
            display: none;
        }
        
        .toc-002 ol {
            list-style-type: decimal;
            margin: 0;
            overflow: hidden;
        }
        
        .toc-002 > ol {
            height: 0;
        }
        
        .toc-002:has(:checked) > ol {
            height: auto;
            padding: 1em 1em 1em 3em;
        }
        
        .toc-002 ol ol {
            margin-top: 5px;
            padding-left: 1.1em;
        }
        
        .toc-002 li {
            padding: 5px 0;
            font-weight: 600;
        }
        
        .toc-002 ol ol li {
            font-weight: 500;
            font-size: .9em;
        }
        
        .toc-002 a {
            color: #333;
            text-decoration: none;
        }
        
        h2{
         padding:0.5em; /*上下左右の余白*/
         background:#DEEBF7; /*背景色*/
         border-bottom:solid 3px #2F5597; /*線の種類 太さ 色*/
        }
        p{
            margin:20px;
        }
        a:hover {
            text-decoration: underline; /* ホバー時に下線を表示する場合 */
        }
    </style>
        <!--目次-->
    <div class="toc-002">
        <div>
            目次
            <label><input type="checkbox"/></label>
        </div>
            <ol>
                <li><a href="#1">山小屋について</a></li>
                <li><a href="#2">吉田ルート</a></li>
                    <ol>
                        <li><a href="#">頂上</a></li>
                        <li><a href="#">九合目</a></li>
                        <li><a href="#">八合五勺</a></li>
                        <li><a href="#">本八合目</a></li>
                        <li><a href="#">八合目</a></li>
                        <li><a href="#">七合目</a></li>
                        <li><a href="#">六合目</a></li>
                        <li><a href="#">富士スバルライン五合目</a></li>
                    </ol>
                <li><a href="#3">須走ルート</a></li>
                    <ol>
                        <li><a href="#">頂上</a></li>
                        <li><a href="#">九合目</a></li>
                        <li><a href="#">八合五勺</a></li>
                        <li><a href="#">本八合目</a></li>
                        <li><a href="#">八合目</a></li>
                        <li><a href="#">本七合目</a></li>
                        <li><a href="#">七合目</a></li>
                        <li><a href="#">本六合目</a></li>
                        <li><a href="#">六合目</a></li>
                        <li><a href="#">須走口五合目</a></li>
                    </ol>
                <li><a href="#4">御殿場ルート</a></li>
                <li><a href="#5">富士宮ルート</a></li>
            </ol>
    </div><br>
    
    <h2 id="1"><strong>１．山小屋について</strong></h2>
        <p>
            富士山には、多数の山小屋が存在している。宿泊できる施設、食事が可能な施設など山小屋によってそれぞれ特徴が違うのである。なので今回は、<br>
            ・吉田ルート<br>
            ・須走ルート<br>
            ・御殿場ルート<br>
            ・富士宮ルート<br>
            に分けて紹介しようと思う。(以下の画像は、富士山オフィシャルサイト引用)<br>
        </p>
        <!--コース写真-->
        <div class="photo">
            <?php
            // 画像ファイルのパス
                $imageUrl = 'https://fujisan-climb.jp/trails/m8bimq00000007vn-img/Fujiroutemap_l.jpg'; // 外部の画像URLを指定
                
                echo '<img src="' . htmlspecialchars($imageUrl) . '" alt="外部画像" style="max-width: 100%; height: auto;">';
            ?>
        </div><br>
        <!--引用-->
        <p class="inyo">
            <a href="https://fujisan-climb.jp/trails/index.html" >
                引用：富士登山オフィシャルサイト
            </a>
        </p>
        
            <!--吉田ルート-->
        <h2 id="2"><strong>２．吉田ルート</strong></h2>
            <p>
                　こちらのルートは2024年から有料化されました。そのため、事前予約か、当日受付の1000人の枠に入る必要があります。<br>
                予約は<span style="color:blue;"><a href="https://www.fujisan-climb.jp/info/20240510_yoshida_trail_reservation.html">こちら</a></span>のサイトから(山小屋宿泊予約をされている方は必要ありません。)
            </p>
        <div class='photo'>
            <?php
            // 画像ファイルのパス
                $imageUrl2 = 'https://fujisan-climb.jp/trails/yoshida/b2rg1t00000005u9-img/Yoshida_Trail_asc(JP).png'; // 外部の画像URLを指定
                
                echo '<img src="' . htmlspecialchars($imageUrl2) . '" alt="外部画像" style="max-width: 50%; height: auto; text-align:right;">';
            ?>
        </div>
        <!--引用-->
        <p class="inyo">
            <a href="https://fujisan-climb.jp/trails/yoshida/course.html" >
                引用：富士登山オフィシャルサイト
            </a>
        </p>

    
                <div class='huts'>
                    @foreach($huts as $hut)
                ---
                    <div class='hut'>
                        <h2 class='name'>hut name: {{$hut->name}}</h2>
                        <p class='body'>body: {{$hut->body}}</p>
                    </div>
                    @endforeach
                </div>
                
                <div class="flex items-start justify-end gap-8 sm:items-center text-right">
                    <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">トップへ戻る</a>
                </div>

                ログインユーザー：{{ Auth::user()->name }}
            </div>
        </body>

    </x-app-layout>
</html>