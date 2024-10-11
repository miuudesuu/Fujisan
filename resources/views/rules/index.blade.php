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
            初めて登る人へ
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
                <li><a href="#1">富士登山とは</a></li>
                <li><a href="#2">持ち物</a></li>
                <li><a href="#3">服装</a></li>
                <li><a href="#4">ルールやマナー</a></li>
            </ol>
    </div><br>
        <h2 id="1"><strong>１．富士登山とは</strong></h2>
        <p>
            <ul></ul>
                <li>標高：3776.12m</li>
                <li>所在：静岡県（富士宮市、富士市、裾野市、御殿場市、駿東郡小山町）と山梨県（富士吉田市、南都留郡鳴沢村）</li>
                <li>山の種類：活火山</li>
                <li>登山ルート：4種類　<a href="courses">このページ</a>から見ることができます。</li>
            </ul>
        </p>

        <h2 id="2"><strong>２．持ち物</strong></h2>
        <p>
            <strong>〇多めの小銭</strong><br>
            　富士山では、5合目からトイレが有料になっています。値段はそれぞれ違いますが、おつりが出ないトイレも多く存在します。<br>
            <strong>〇ちょっとしたお菓子</strong><br>
            　ちょっとした、カロリーメ〇トや小さいゼリーなど。登山では、マストなものです。休憩の時に食べたりして、気分転換や、エネルギー補給になります。<br>
            <strong>〇水</strong><br>
            　高山病の予防には水分補給が必要です。1人1-2Lは必要になります。山小屋があるコースは営業時間内なら購入することも可能です。<br>
            <strong>〇雨具</strong><br>
            　標高が高いところの天気は変わりやすいです。予報とは違う雨が降ってくる可能性があるので、晴れの予報でも持っていきましょう。上下別れている者が好ましいです。<br>
            <strong>〇ゴミ袋</strong>
            　山にごみ箱はありません。山小屋で許可をもらって捨てない限りは自分で持ち帰りましょう。<br>
            <br>
            <strong>＋α</strong><br>
            <strong>〇酸素管</strong><br>
            　これはマストではないですが、初めての登山などの人は持っていくべきです。高山病になった際に、これを吸うと、少し楽になります。<br>
            　しかし、高山病は登っても治らないので、ひどくなった場合、早い段階で降りるのが最善です。<br>
            <strong>〇耳栓・アイマスク</strong><br>
            　山小屋での宿泊は、小屋にもよりますが、窮屈な環境の可能性が高いので、より快適な睡眠を望むなら、必需品になります。
        </p>

        <h2 id="3"><strong>３．服装</strong></h2>
        <p>
            <strong>〇帽子</strong><br>
             標高が高いため、太陽もその分近いです。帽子は必須。<br>
            <strong>〇サングラス</strong><br>
            　なくてもいいですが、まぶしいのが苦手な人は持っておくべきです。<br>
            <strong>〇防寒性のある服</strong><br>
            　登山のイメージは汗をかく、暑いというイメージがありますが、ご来光を見る朝と夕方から夜にかけては、冷え込みます。冬だと思って防寒性のある服を着用するべきです。<br>
            <strong>〇靴下の替え</strong><br>
            　山の天気は変わりやすく、雨が降る可能性もあるため、靴下の替えは必要です。<br>
            <strong>〇トレッキングシューズ</strong><br>
            　富士山は観光地といっても立派な山なので、岩場などもあります。足をくじいたり、ひねったりする可能性もあるので、トレッキングシューズをおすすめします。<br>
            <strong>〇</strong><br>
        </p>

        <h2 id="4"><strong>４．ルールやマナー</strong></h2>
        <p>
            <strong>！絶対に下に石を落とさないこと</strong><br>
                下には登山道や下山道が存在します。人に当たったら、命の危険にもなりかねません。絶対にやめましょう。<br>
                <br>
            <strong>！頂上でのドローン使用</strong><br>
                せっかくの頂上で、景色を上から納めたいと考えてしまいますが、富士山でのドローン使用は禁止されています。荷物にもなるのでまず、持ってこないこと！<br>
                <br>
            <strong>！野宿をしてはいけない</strong><br>
                当たり前ですが、ご来光を待つために野宿をしてはいけません。たとえ夏だとしても、夜はとても寒いです。きちんと山小屋に宿泊しましょう。<br>
                <br>
            <strong>！富士山をなめてはいけない</strong><br>
                最近は、観光地としても知られ、海外の人々も多く来ていますが、ご存じの通り、3000m以上ある山です。高山病はもちろん、命の危険も存在ています。事前の準備、対策、勉強をしてから富士登山に挑みましょう。<br>
        </p>

                <div class='rules'>
                    @foreach($rules as $rule)
                ---
                    <div class='rule'>
                        <h2 class='title'>title: {{$rule->title}}</h2>
                        @foreach($users as $user)
                            @if($rule->user_id == $user->id)
                                <p>作成者: {{$user->name}}</p>
                            @endif
                        @endforeach
                        @foreach($rule_categories as $rule_category)
                            @if($rule->rule_category_id == $rule_category->id)
                                <p>コメント: {{$rule_category->name}}</p>
                            @endif
                        @endforeach
                        <p class='body'>body: {{$rule->body}}</p>
                    </div>
                    @endforeach
                </div>
                <div class="flex items-start justify-end gap-8 sm:items-center text-right">
                    <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">トップへ戻る</a>
                </div>
            </div>

        </body>
        
    <footer>
        ログインユーザー：{{ Auth::user()->name }}
    </footer>
    </x-app-layout>
</html>