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
            登山ルート
        </h1>
    </x-slot>
        <body>
    <style>
    
        .photo{
            text-align:center;
            margin: auto;
        }

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
        .inyo{
            text-align: right;
            text-size:small;
        }
        p{
            margin:20px;  
        }
        a {
            color: blue; /* 青色に設定 */
        }
        a:hover {
            text-decoration: underline; /* ホバー時に下線を表示する場合 */
        }
    </style>
    
    <br>
    <!--目次-->
    <div class="toc-002">
        <div>
                目次
                <label><input type="checkbox"/></label>
        </div>
            <ol>
                <li><a href="#1">富士山のルートとは</a></li>
                <li><a href="#2">吉田ルート</a></li>
                <li><a href="#3">須走ルート</a></li>
                <li><a href="#4">御殿場ルート</a></li>
                <li><a href="#5">富士宮ルート</a></li>
            </ol>
    </div><br>
    
    <h2 id="1"><strong>１．富士山のルートとは</strong></h2>
        <p>
            富士山には、4つのルートがあり、それぞれの出発点・特徴がある。以下の地図はすべてのコースを表しており、<br>
            〇黄色：吉田ルート<br>
            〇赤色：須走ルート<br>
            〇緑色：御殿場ルート<br>
            〇青色：富士宮ルート　に分かれている。(以下、富士山オフィシャルサイト引用)<br>
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
            ・出発点：　富士スバルライン（山梨県）<br>
            ・到着点：　久須志神社側（北東側）<br>
            ・所要時間：　登り…約6時間　下り…約4時間<br>
            ・特徴：　登りの登山道に山小屋が多い、逆に下りの下山道は山小屋が少ない。4つのルートの中で一番登山客が多い。<br>
            ・公衆トイレ：　5合目、6合目、富士山頂、下山道7合目<br>
            <span style="color:red;">！注意！こちらのルートは有料化されたため、事前の予約か、当日受付の1000人以上の枠に入る必要があります。（2000円/1人）</span><br>
            ・予約は<span style="color:blue;"><a href="https://www.fujisan-climb.jp/info/20240510_yoshida_trail_reservation.html">こちら</a></span>のサイトから(山小屋宿泊予約をされている方は必要ありません。)
        </p>
    <div class='photo'>
        <?php
        // 画像ファイルのパス
            $imageUrl2 = 'https://fujisan-climb.jp/trails/yoshida/m8bimq0000003suz-img/m8bimq0000003td5.jpg'; // 外部の画像URLを指定
            
            echo '<img src="' . htmlspecialchars($imageUrl2) . '" alt="外部画像" style="max-width: 50%; height: auto; text-align: right;">';
        ?>
    </div>
    <!--引用-->
    <p class="inyo">
        <a href="https://fujisan-climb.jp/trails/yoshida/index.html" >
            引用：富士登山オフィシャルサイト
        </a>
    </p>
    
    <!--須走ルート-->
    <h2 id="3"><strong>３．須走ルート</strong></h2>
        <p>
            ・出発点：　須走5合目(静岡県小山町)<br>
            ・到着点：　久須志神社側（北東側）<br>
            ・所要時間：　登り…約6時間　下り…約3時間<br>
            ・特徴：　標高の高いところまで樹林帯が広がっており、登山中の日差しから守られる。火山砂利の下山道を一直線に下る「砂走り」がある。<br>
            ・公衆トイレ：　5合目、6合目、富士山頂、下山道7合目<br>
        </p>
    <div class='photo'>
        <?php
        // 画像ファイルのパス
            $imageUrl3 = 'https://fujisan-climb.jp/trails/subashiri/m8bimq000000386y-img/m8bimq00000038pv.jpg'; // 外部の画像URLを指定
            
            echo '<img src="' . htmlspecialchars($imageUrl3) . '" alt="外部画像" style="max-width: auto; height: 50%; text-align: right;">';
        ?>
    </div>
    <!--引用-->
    <p class="inyo">
        <a href="https://fujisan-climb.jp/trails/subashiri/index.html" >
            引用：富士登山オフィシャルサイト
        </a>
    </p>
    
    <!--御殿場ルート-->
    <h2 id="4"><strong>４．御殿場ルート</strong></h2>
        <p>
            ・出発点：　御殿場口新5合目(静岡県御殿場市)<br>
            ・到着点：　浅間大社奥宮側（南側）<br>
            ・所要時間：　登り…約7時間　下り…約3時間<br>
            ・特徴：　頂上までの標高差が大きく、距離が長い。山小屋が少なく、登山者も少ない。<br>
            ・公衆トイレ：　5合目、富士山頂<br>
        </p>
    <div class='photo'>
        <?php
        // 画像ファイルのパス
            $imageUrl4 = 'https://fujisan-climb.jp/trails/gotenba/m8bimq0000003iea-img/m8bimq0000003iwt.jpg'; // 外部の画像URLを指定
            
            echo '<img src="' . htmlspecialchars($imageUrl4) . '" alt="外部画像" style="max-width: auto; height: 50%; text-align: right;">';
        ?>
    </div>
    <!--引用-->
    <p class="inyo">
        <a href="https://fujisan-climb.jp/trails/gotenba/index.html" >
            引用：富士登山オフィシャルサイト
        </a>
    </p>
    
    <!--富士宮ルート-->
    <h2 id="5"><strong>５．富士宮ルート</strong></h2>
        <p>
            ・出発点：　富士宮口5合目(静岡県富士宮市)<br>
            ・到着点：　浅間大社奥宮側（南側）<br>
            ・所要時間：　登り…約5時間　下り…約3時間<br>
            ・特徴：　頂上までの距離が短いが、岩場が多い。吉田ルートに次いで登山者が多い。<br>
            ・公衆トイレ：　5合目、頂上<br>
        </p>
    <div class='photo'>
        <?php
        // 画像ファイルのパス
            $imageUrl5 = 'https://fujisan-climb.jp/trails/gotenba/m8bimq0000003iea-img/m8bimq0000003iwt.jpg'; // 外部の画像URLを指定
            
            echo '<img src="' . htmlspecialchars($imageUrl5) . '" alt="外部画像" style="max-width: auto; height: 50%; text-align: right;">';
        ?>
    </div>
    <!--引用-->
    <p class="inyo">
        <a href="https://fujisan-climb.jp/trails/gotenba/index.html" >
            引用：富士登山オフィシャルサイト
        </a>
    </p>
        <div class="flex items-start justify-end gap-8 sm:items-center text-right">
            <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">上へ戻る</a>
        </div>
        </body>
    <footer>ログインユーザー：{{ Auth::user()->name}}</footer>
    </x-app-layout>
</html>