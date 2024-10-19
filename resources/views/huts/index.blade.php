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
            text-decoration: underline; /* ホバー時に下線を表示する場合*/
            text-color:blue;
        }
        ol{
            list-style-type: decimal;
            margin: 20px;
            overflow: hidden;
        }
        h3 {
            display: flex;
            align-items: center;
            column-gap: 8px;
            color: #333333;
            font-weight: bold;
            border-bottom:solid 3px #2F5597;
        }
        
        h3::before {
            width: 0.8em;
            height: 0.4em;
            border-bottom: 4px solid #2589d0;
            border-left: 4px solid #2589d0;
            transform: rotate(-45deg) translate(2px, -2px);
            content: '';
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
                <li><a href="#2">吉田ルートかつ須走ルート</a></li>
                    <ol>
                        <li><a href="#2-1">頂上</a></li>
                        <li><a href="#2-2">八合五勺</a></li>
                        <li><a href="#2-3">本八合目</a></li>
                    </ol>
                <li><a href="#3">吉田ルート</a></li>
                    <ol>
                        <li><a href="#3-1">八合目</a></li>
                        <li><a href="#3-2">七合目</a></li>
                        <li><a href="#3-3">富士スバルライン五合目</a></li>
                    </ol>
                <li><a href="#4">須走ルート</a></li>
                    <ol> 
                        <li><a href="#4-1">本八合目</a></li>
                        <li><a href="#4-2">本七合目</a></li>
                        <li><a href="#4-3">七合目</a></li>
                        <li><a href="#4-4">本六合目</a></li>
                        <li><a href="#4-5">六合目</a></li>
                        <li><a href="#4-6">須走口五合目</a></li>
                        <li><a href="#4-7">下山道</a></li>
                    </ol>
                <li><a href="#5"></a>御殿場ルート</a></li>
                    <ol>
                        <li><a href="#5-1">七合九勺</a></li>
                        <li><a href="#5-2">七合五勺</a></li>
                        <li><a href="#5-3">七合四勺</a></a></li>
                        <li><a href="#5-4">七合目</a></li>
                        <li><a href="#5-5">新六合目</a></li></li>
                        <li><a href="#5-6">御殿場口新五合目</a></li>
                    </ol>
                <li><a href="#6">富士宮ルート</a></li>
                   <ol>
                        <li><a href="#6-1">頂上</a></li>
                        <li><a href="#6-2">九合五勺</a></a></a></li>
                        <li><a href="#6-3">九合目</a></li>
                        <li><a href="#6-4">八合目</a></li>
                        <li><a href="#6-5">元祖七合目</a></a></li>
                        <li><a href="#6-6">六合目</a></li>
                        <li><a href="#6-7">富士宮五合目</a></li>
                    </ol>
            </ol>
    </div><br>
    
    <h2 id="1"><strong>１．山小屋について</strong></h2>
        <p>
            富士山には、多数の山小屋が存在している。宿泊できる施設、食事が可能な施設など山小屋によってそれぞれ特徴が違うのである。なので今回は、<br>
            ・吉田ルートかつ須走ルート<br>
            ・吉田ルート<br>
            ・須走ルート<br>
            ・御殿場ルート<br>
            ・富士宮ルート<br>
            に分けて、標高が高い順に紹介しようと思う。(以下の画像は、富士山オフィシャルサイト引用)<br>
             ※わかる範囲で情報を表示している。詳細を知りたい場合は、山小屋のホームページを閲覧お願いします。
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
        
        
        <!--吉田かつ須走ルート-->
        <div class="吉田&須走">
            <h2 id="2"><strong>２．吉田ルートかつ須走ルート</strong></h2>
            <p>
                こちらは、吉田ルートと須走ルートの合流後の山小屋を紹介する。<br>
                <h3 id="2-1" class="heading-27">２－１．頂上</h3>
                    <ol>
                        <li>富士山頂山口屋</li>
                            ・ホームページ：<span style="color:blue;"><a href="http://www.fujisan-yamaguchiya.com/stay.html" target="_blank">富士山頂　山口屋</a></span><br>
                            ・トイレ：なし（近くに共同トイレあり）<br>
                            ・宿泊：あり（完全事前予約制・キャンセル料無料）<br>
                            ・食事：あり<br>
                            ・お土産：あり<br>
                        <br>
                        <li>富士山頂扇屋</li>
                            ・インスタグラム：<span style="color:blue;"><a href="https://www.instagram.com/chojo_ogiya3776?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">頂上　扇屋</a></span><br>
                            ・宿泊：なし<br>
                            ・トイレ：なし（近くに共同トイレあり）<br>
                            ・食事：あり<br>
                            ・お土産：あり<br>
                    </ol>
                <h3 id="2-2">２－２．八合五勺</h3>
                    <ol>
                        <li>御来光館</li>
                            ・ホームページ：<span style="color:blue;"><a href="https://www.bing.com/ck/a?!&&p=af007d206e5b00898fd55e6193461c0097e151db6ab205199a005274c9a8c682JmltdHM9MTcyODk1MDQwMA&ptn=3&ver=2&hsh=4&fclid=38b67b03-71ca-61a8-3a39-6a8770b060fa&psq=%e5%be%a1%e6%9d%a5%e5%85%89%e9%a4%a8&u=a1aHR0cHM6Ly9nb3JhaWtvdWthbi5qcC8&ntb=1" target="_blank">富士山山小屋　御来光館</a></span><br>
                            ・宿泊：あり（キャンセル料有料）<br>
                            ・仮眠スペース：あり<br>
                            ・食事：あり<br>
                    </ol>
                <h3 id="2-3">２－３．本八合目</h3>
                    <ol>
                        <li>本八合目　トモエ館</li>
                            ・ホームページ：<span style="color:blue;"><a href="https://tomoekan.com/" target="_blank">八合目　トモエ館</a></span><br>
                            ・宿泊：あり（個室あり・キャンセル料有料）<br>
                            ・仮眠スペース：あり<br>
                            ・トイレ：あり<br>
                        <br>
                        <li>本八合目　江戸屋</li>
                            ・ホームページ：<span style="color:blue;"><a href="https://fujisan-edoya.com/" target="_blank">江戸屋　富士山</a></span><br>
                            ・宿泊：あり（個室あり・キャンセル料有料）<br>
                            ・トイレ：あり<br>
                        <br>
                        <li>本八合目　富士山ホテル</li>
                            ・ホームページ：<span style="color:blue;"><a href="https://www.fujisanhotel.com/" target="_blank">本八合目　富士山ホテル</a></span><br>
                            ・宿泊：あり（完全予約制・キャンセル料有料）<br>
                            ・トイレ：あり(200円)
                    </ol>
            </p>
        </div>
        
        
        <!--吉田ルート-->
        <h2 id="3"><strong>３．吉田ルート</strong></h2>
            <p>
                こちらのルートは2024年から有料化された。そのため、事前予約か、当日受付の1000人の枠に入る必要がある。<br>
                予約は<span style="color:blue;"><a href="https://www.fujisan-climb.jp/info/20240510_yoshida_trail_reservation.html">こちら</a></span>のサイトから(山小屋宿泊予約をされている方は必要ありません。)
            </p>
            
            <!--写真-->
            <div class='photo'>
                <?php
                // 画像ファイルのパス
                    $imageUrl2 = 'https://fujisan-climb.jp/trails/yoshida/b2rg1t00000005u9-img/Yoshida_Trail_asc(JP).png'; // 外部の画像URLを指定
                    
                    echo '<img src="' . htmlspecialchars($imageUrl2) . '" alt="外部画像" style="max-width: 50%; height: auto; text-align:right;">';
                ?>
            </div>
            <!--引用-->
                <p class="inyo">
                    <a href="https://fujisan-climb.jp/trails/yoshida/course.html" target="_blank">
                        引用：富士登山オフィシャルサイト
                    </a>
                </p>
            
            <h3 id="3-1" class="heading-27">３－１．八合目</h3>
                <ol>
                    <li>元祖室</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://ganso-muro.jp/" target="_blank">元祖室 </a></span><br>
                        ・宿泊：あり（キャンセル料有料）<br>
                        ・トイレ：あり<br>
                    <br>
                    <li>白雲荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://fujisan-hakuun.com/ja/" target="_blank">白雲荘</a></span><br>
                        ・宿泊：あり（個室あり・キャンセル料有料）<br>
                        ・トイレ：あり<br>
                    <br>
                    <li>蓬莱館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://www.fujisanhotel.com/" target="_blank">蓬莱館</a></span><br>
                        ・宿泊：あり（キャンセル料有料）<br>
                        ・トイレ：あり<br>
                        ・売店：あり
                    <br>
                    <li>太子館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://www.mfi.or.jp/~taisikan/" target="_blank">太子館</a></span><br>
                        ・宿泊：あり（キャンセル料有料）<br>
                        ・トイレ：あり
                        ・ツアー：あり
                        ・救護所：あり
                </ol>
            <h3 id="3-2" class="heading-27">３－２．七合目</h3>
                <ol>
                    <li>東洋館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://www.fuji-toyokan.jp/" target="_blank">東洋館</a></span><br>
                        ・宿泊：あり（個室あり・キャンセル料有料）<br>
                        ・トイレ：あり<br>
                    <br>
                    <li>鳥居荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://toriiso.com/" target="_blank">鳥居荘</a></span><br>
                        ・宿泊：あり（個室あり・キャンセル料有料）<br>
                        ・売店：あり
                        ・トイレ：あり<br>
                    <br>
                    <li>富士一館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://www.fuji-ichikan.jp/" target="_blank">富士一館</a></span><br>
                        ・宿泊：あり（キャンセル料有料）<br>
                        ・売店：あり<br>
                        ・トイレ：あり<br>
                    <br>
                    <li>鎌岩館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://kamaiwakan.jpn.org/" target="_blank">鎌岩館</a></span><br>
                        ・宿泊：あり（個室あり・キャンセル料有料）<br>
                        ・トイレ：あり<br>
                    <br>
                    <li>七合目トモエ館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://www.fujisanhotel.com/" target="_blank">七合目トモエ館</a></span><br>
                        ・宿泊：あり（完全予約制・キャンセル料有料）<br>
                        ・売店：あり<br>
                        ・トイレ：あり(200円)<br>
                    <br>
                    <li>日の出館</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://www10.plala.or.jp/hinodekan/hinodekan.html" target="_blank">日の出館</a></span><br>
                        ・宿泊：あり（キャンセル料有料）<br>
                    <br>
                    <li>花小屋</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://www2.tbb.t-com.ne.jp/hanagoya/index.html" target="_blank">花小屋</a></span><br>
                        ・宿泊：あり（完全予約制・キャンセル料有料）<br>
                        ・売店：あり
                        ・トイレ：あり(200円)<br>
                    <br>
                </ol>
            <h3 id="3-3" class="heading-27">３－３．富士スバルライン五合目</h3>
                <ol>
                    <li>里見平★星観館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://seikanso.jp/" target="_blank">里見平★星観館</a></span><br>
                        ・宿泊：あり（キャンセル料有料）<br>
                        ・トイレ：あり（200円）<br>
                    <br>
                    <li>佐藤小屋</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://www.fuji-satogoya.com/" target="_blank">佐藤小屋</a></span><br>
                        ・宿泊：あり（個室あり・キャンセル料有料）<br>
                        ・トイレ：あり<br>
                        ・冬季も営業<br>
                    <br>
                 </ol>
                 
        <!--須走ルート-->    
        <h2 id="4"><strong>４．須走ルート</strong></h2>
            <p>
                こちらでは、須走ルートの山小屋を紹介する。
            </p>
            
            <!--写真-->
            <div class='photo'>
                <?php
                // 画像ファイルのパス
                    $imageUrl3 = 'https://fujisan-climb.jp/trails/subashiri/p1e4ub00000000yf-img/05_subashiri_asc_jp.png'; // 外部の画像URLを指定
                    
                    echo '<img src="' . htmlspecialchars($imageUrl3) . '" alt="外部画像" style="max-width: 50%; height: auto; text-align:right;">';
                ?>
            </div>
            <!--引用-->
                <p class="inyo">
                    <a href="https://fujisan-climb.jp/trails/subashiri/course.html" target="_blank">
                        引用：富士登山オフィシャルサイト
                    </a>
                </p>
            
            <h3 id="4-1" class="heading-27">４－１．本八目</h3>
                <ol>
                    <li>下江戸屋</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://fujisan-edoya.com/edoya2/" target="_blank">下江戸屋</a></span><br>
                        ・宿泊：あり（完全予約制）<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="4-2" class="heading-27">４－２．本七合目</h3>
                <ol>
                    <li>見晴館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://www.miharashi-kan.com/" target="_blank">見晴館</a></span><br>
                        ・宿泊：あり<br>
                        ・トイレ：あり<br>
                        ・売店：あり
                </ol>
            <h3 id="4-3" class="heading-27">４－３．七合目</h3>
                <ol>
                    <li>太陽館</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://www.fujisan3776.net/" target="_blank">太陽館</a></span><br>
                        ・宿泊：あり<br>
                        ・トイレ：あり<br>
                        ・売店：あり
                </ol>
            <h3 id="4-4" class="heading-27">４－４．本六合目</h3>
                <ol>
                    <li>瀬戸館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://fujisan-setokan.com/" target="_blank">瀬戸館</a></span><br>
                        ・宿泊：あり（当日もOK）<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="4-5" class="heading-27">４－５．六合目</h3>
                <ol>
                    <li>長田山荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://fujisan-osada.com/#guide" target="_blank">長田山荘</a></span><br>
                        ・宿泊：あり（個室あり）<br>
                        ・トイレ：あり<br>
                        ・売店：あり<br>
                        ・食堂：あり<br>
                </ol>
            <h3 id="4-6" class="heading-27">４－６．須走五合目</h3>
                <ol>
                    <li>東富士山荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://www4.tokai.or.jp/yamagoya/" target="_blank">東藤山荘</a></span><br>
                        ・売店：あり<br>
                        ・食堂：あり<br>
                        ・トイレ：あり<br>
                    <li>菊屋</li>
                        ・ホームページ<span style="color:blue;"><a href="http://fujisan-kikuya.jp/" target="_blank">菊屋</a></span><br>
                        ・宿泊：あり<br>
                        ・売店：あり<br>
                        ・食堂：あり<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="4-7" class="heading-27">４－７．下山道</h3>
                <ol>
                    <li>吉野屋</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://fujisan-sunaharaigogou.com/" target="_blank">吉野屋</a></span><br>
                        ・宿泊：あり<br>
                        ・売店：あり<br>
                        ・食堂：あり<br>
                        ・トイレ：あり<br>
                </ol>


        <!--御殿場ルート-->    
        <h2 id="5"><strong>５．御殿場ルート</strong></h2>
            <p>
                こちらでは、御殿場ルートの山小屋を紹介します。
            </p>
            
            <!--写真-->
            <div class='photo'>
                <?php
                // 画像ファイルのパス
                    $imageUrl4 = 'https://fujisan-climb.jp/trails/gotenba/b2rg1t0000000j9y-img/07_gotemba_asc_jp.png'; // 外部の画像URLを指定
                    
                    echo '<img src="' . htmlspecialchars($imageUrl4) . '" alt="外部画像" style="max-width: 50%; height: auto; text-align:right;">';
                ?>
            </div>
            <!--引用-->
                <p class="inyo">
                    <a href="https://fujisan-climb.jp/trails/gotenba/course.html" target="_blank">
                        引用：富士登山オフィシャルサイト
                    </a>
                </p>
            <h3 id="5-1" class="heading-27">５－１．七合九勺</h3>
                <ol>
                    <li>赤岩八合館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://www.fujisan-akaiwa8go.jp/" target="_blank">赤岩八合館</a></span><br>
                        ・宿泊：あり<br>
                        ・売店：あり<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="5-2" class="heading-27">５－２．七合五勺</h3>
                <ol>
                    <li>砂走館</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://www.sunabashirikan.co.jp/point/" target="_blank">砂走館</a></span><br>
                        ・宿泊：あり（）<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="5-3" class="heading-27">５－３．七合四勺</h3>
            <ol>
                    <li>わらじ館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://warazikan.main.jp/" target="_blank">わらじ屋</a></span><br>
                        ・宿泊：あり<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="5-4" class="heading-27">５－４．七合目</h3>
                <ol>
                    <li>日ノ出館</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://www10.plala.or.jp/hinodekan/hinodekan.html" target="_blank">日ノ出館</a></span><br>
                        ・宿泊：あり<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="5-5" class="heading-27">５－５．新六合目</h3>
                <ol>
                    <li>半蔵坊</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://hanzobo.main.jp/" target="_blank">半蔵坊</a></span><br>
                        ・宿泊：あり<br>
                        ・トイレ：あり<br>
                </ol>


        <!--ボタン-->
        <div class="flex items-start justify-end gap-8 sm:items-center text-right">
            <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">トップへ戻る</a>
        </div>
        
        <!--富士宮ルート-->    
        <h2 id="6"><strong>６．富士宮ルート</strong></h2>
            <p>
                
            </p>
            
            <!--写真-->
            <div class='photo'>
                <?php
                // 画像ファイルのパス
                    $imageUrl5 = 'https://fujisan-climb.jp/trails/fujinomiya/b2rg1t0000000pv6-img/09_fujinomiya_trail_jp.png'; // 外部の画像URLを指定
                    
                    echo '<img src="' . htmlspecialchars($imageUrl5) . '" alt="外部画像" style="max-width: 50%; height: auto; text-align:right;">';
                ?>
            </div>
            <!--引用-->
                <p class="inyo">
                    <a href="https://fujisan-climb.jp/trails/fujinomiya/course.html" target="_blank">
                        引用：富士登山オフィシャルサイト
                    </a>
                </p>
                
            <h3 id="6-1" class="heading-27">６－１．頂上</h3>
                <ol>
                    <li>頂上富士館</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://fujisanchou.com/" target="_blank">頂上富士館</a></span><br>
                        ・宿泊：あり<br>
                        ・トイレ：あり<br>
                        ・食堂：あり
                        ・売店：あり
                </ol>
            <h3 id="6-2" class="heading-27">６－２．九合五勺</h3>
                <ol>
                    <li>胸突山荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://munatsuki.com/ja/" target="_blank">胸突山荘</a></span><br>
                        ・宿泊：あり<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="6-3" class="heading-27">６－３．九合目</h3>
                <ol>
                    <li>万年雪山荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://mannnennyuki.wixsite.com/mannennyuki" target="_blank">万年雪山荘</a></span><br>
                        ・宿泊：あり<br>
                        ・食堂：あり
                        ・トイレ：あり<br>
                </ol>
            <h3 id="6-4" class="heading-27">６－４．八合目</h3>
                <ol>
                    <li>池田館</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://www.fuji8.com/" target="_blank">池田館</a></span><br>
                        ・宿泊：あり<br>
                        ・トイレ：あり<br>
                        ・診療所：隣にあり
                </ol>
            <h3 id="6-5" class="heading-27">６－５．元祖七合目</h3>
                <ol>
                    <li>山口山荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="https://fujisan-ganso.jp/" target="_blank">山口山荘</a></span><br>
                        ・宿泊：あり<br>
                        ・売店：あり<br>
                        ・食堂：あり<br>
                        ・トイレ：あり<br>
                </ol>
            <h3 id="6-6" class="heading-27">６－６．新七合目</h3>
                <ol>
                    <li>御来光山荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://www.goraikousansou.com/" target="_blank">御来光山荘</a></span><br>
                        ・宿泊：あり（個室あり）<br>
                        ・食堂：あり
                        ・トイレ：あり<br>
                </ol>
            <h3 id="6-7" class="heading-27">６－７．六合目</h3>
                <ol>
                    <li>宝永山荘</li>
                        ・ホームページ：<span style="color:blue;"><a href="http://houeisansou.com/" target="_blank">宝永山荘</a></span><br>
                        ・宿泊：あり<br>
                        ・食堂：あり
                        ・トイレ：あり<br>
                </ol>


        <!--ボタン-->
        <div class="flex items-start justify-end gap-8 sm:items-center text-right">
            <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">トップへ戻る</a>
        </div>
    
                    ログインユーザー：{{ Auth::user()->name }}
                </div>
        </body>

    </x-app-layout>
</html>