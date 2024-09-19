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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            courses
        </h2>
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
    
    <p>富士山登山には4種類のルートがある。それが、<br>
    ・吉田ルート
    ・須走ルート
    ・御殿場ルート</p>

    <!--コース写真-->
    <div class="photo">
        <?php
        // 画像ファイルのパス
            $imageUrl = 'https://fujisan-climb.jp/trails/m8bimq00000007vn-img/Fujiroutemap_l.jpg'; // 外部の画像URLを指定
            
            echo '<img src="' . htmlspecialchars($imageUrl) . '" alt="外部画像" style="max-width: 100%; height: auto;">';
        ?>
    </div><br>



        </body>
    <footer>ログインユーザー：{{ Auth::user()->name}}</footer>
    </x-app-layout>
</html>