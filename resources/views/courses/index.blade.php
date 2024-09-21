<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            courses
        </h1>
    </x-slot>
        <body>
    <style>
        body{
            margin:20px;
            background-color: #ccffff;
        }
        .photo{
            text-align:center;
            margin: auto;
        }


        .toc-002 {
            margin-bottom: 20px;
            border: 2px solid #63b4ee;
            margin: auto;
            
            width:80%;
            }
        
        .toc-002 div {
            display: flex;
            text-align:center;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 10px 0;
            background-color: #63b4ee;
            color: #fff;
            font-weight: 600;
            font-size: 1.1em;
        }
        
        .toc-002 div::before {
            display: inline-block;
            width: 1em;
            height: 1em;
            margin-right: 5px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M8 4H21V6H8V4ZM3 3.5H6V6.5H3V3.5ZM3 10.5H6V13.5H3V10.5ZM3 17.5H6V20.5H3V17.5ZM8 11H21V13H8V11ZM8 18H21V20H8V18Z' fill='%23fff'%3E%3C/path%3E%3C/svg%3E");
            content: '';
        }
        
        .toc-002 ol {
            list-style-type: decimal;
            margin: 0;
            overflow: hidden;
            width:70%;
        }
        
        .toc-002 > ol {
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
            margin:10px;
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
    </style>
    <br>
    <!--目次-->
    <div class="toc-002">
        <div>
                目次
        </div>
            <ol>
                <li><a href="#1">富士山のルートとは</a></li>
                <li><a href="#">吉田ルート</a></li>
                <li><a href="#">須走ルート</a></li>
                <li><a href="#">御殿場ルート</a></li>
                <li><a href="#">富士宮ルート</a></li>
            </ol>
    </div><br>
    
    <h2><strong>１．富士山のルートとは</strong></h2>
        <p>
            富士山には、4つのルートがあり、それぞれの出発点・特徴がある。以下の地図はすべてのコースを表しており、　　
            黄色：吉田ルート<br>
            赤色：須走ルート<br>
            緑色：御殿場ルート<br>
            青色：富士宮ルート　に分かれている。(以下、富士山オフィシャルサイト引用)<br>
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
    <h2><strong>２．吉田ルート</strong></h2>
        <p>
            ・出発点：　富士スバルライン（山梨県）<br>
            ・到着点：　久須志神社側（北東側）<br>
            ・特徴：　登りの登山道に山小屋が多い、逆に下りの下山道は山小屋が少ない。4つのルートの中で一番登山客が多い。<br>
            ・公衆トイレ：　5合目、6合目、富士山頂、下山道7合目<br>
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
    <h2><strong>３．須走ルート</strong></h2>
        <p>
            ・出発点：　須走5合目(静岡県小山町)<br>
            ・到着点：　久須志神社側（北東側）<br>
            ・特徴：　標高の高いところまで樹林帯が広がっており、登山中の日差しから守られる。<br>
            　　　　火山砂利の下山道を一直線に下る「砂走り」がある。<br>
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
    <h2><strong>４．御殿場ルート</strong></h2>
        <p>
            ・出発点：　御殿場口新5合目(静岡県御殿場市)<br>
            ・到着点：　浅間大社奥宮側（南側）<br>
            ・特徴：　頂上までの標高差が大きく、距離が長い。<br>
            　　 　　山小屋が少なく、登山者も少ない。<br>
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
    <h2><strong>５．富士宮ルート</strong></h2>
        <p>
            ・出発点：　富士宮口5合目(静岡県富士宮市)<br>
            ・到着点：　浅間大社奥宮側（南側）<br>
            ・特徴：　頂上までの距離が短いが、岩場が多い。<br>
            　　 　　吉田ルートに次いで登山者が多い。<br>
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
    
    <h2><strong>６．最後に</strong></h2>
        <p>
            
        </p>


        </body>
    <footer>ログインユーザー：{{ Auth::user()->name}}</footer>
    </x-app-layout>
</html>