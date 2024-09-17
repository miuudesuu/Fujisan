<!DOCTYPE html>
<html>
    <head>
    <html lang="ja">
            <meta charset="utf-8">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Weather Forecast</title>
    <style>
        body{
            margin:40px
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #CCFFFF;
        }
       .meyasu {
            font-size: 1.1em; /* フォントサイズを少し大きく */
            color: #333; /* テキストの色を設定 */
            margin: 20px 0; /* 上下にスペースを追加 */
            padding: 10px; /* 内側のスペースを追加 */
            border: 1px solid #ddd; /* 枠線を追加 */
            background-color: #f9f9f9; /* 背景色を設定 */
        }
    </style>
</head>

<body>
    <h1>富士山頂の天気</h1>
    <p>ここでは、富士山頂の3時間ごと5日間の天気がわかります。ですが、山の天気は変わりやすく、天気予報があてにならないときもあるので<strong>要注意！！！</strong></p>
    
    <p class='meyasu'>以下の時は登らないようにしてください。<br>
        ・天気 が あまり良くない日☂（雨が強すぎると登るのも下山も大変です。）<br>
        ・降水確率 が 高い日（上記同様）<br>
        ・雷の可能性がある日⚡（富士山では、雷に打たれて死亡者が出たこともあります。絶対にやめましょう。）
    </p>
    <table>
        <thead>
            <tr>
                <th>日付</th>
                <th>気温 (°C)</th>
                <th>天気</th>
                <th>降水確率 (%)</th>
                <th>風速(m/s)</th>
                <th>雷の可能性</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forecastData['list'] as $forecast)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($forecast['dt_txt'])->format('m月d日 H時') }}</td>
                    <td>{{ $forecast['main']['temp'] }}°C</td>
                    <td>{{ $forecast['weather'][0]['description'] }}</td>
                    <td>{{ isset($forecast['pop']) ? round($forecast['pop'] * 100, 1) : 'N/A' }}</td>
                    <td>{{ $forecast['wind']['speed'] }}</td>
                    <td>
                        @if (strpos($forecast['weather'][0]['description'], '雷') !== false)
                            雷雨の可能性あり
                        @else
                            なし
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>