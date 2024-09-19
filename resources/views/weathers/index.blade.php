<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Weather Forecast</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body {
            margin: 0; /* 外側の余白をゼロに */
            padding: 20px; /* 内側の余白を追加 */
            background-color: #ccffff;
        }
        table {
            text-align:center;
            width: 90%;
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
            font-size: 1.1em;
            color: #333;
            margin: 20px 0;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         天気予報
        </2>
    </x-slot>
    <h1>富士山頂の天気</h1>
    <p>ここでは、富士山頂の3時間ごと5日間の天気がわかります。ですが、山の天気は変わりやすく、天気予報があてにならないときもあるので<strong>要注意！！！</strong></p>
    
    <p class='meyasu'>以下の時は登らないようにしてください。<br>
        ・天気があまり良くない日☂（雨が強すぎると登るのも下山も大変です。）<br>
        ・降水確率が高い日（上記同様）<br>
        ・雷の可能性がある日⚡（富士山では、雷に打たれて死亡者が出たこともあります。絶対にやめましょう。）
    </p>
    <table>
        <thead>
            <tr>
                <th>日付</th>
                <th>気温 (°C)</th>
                <th>天気</th>
                <th>降水確率 (%)</th>
                <th>風速 (m/s)</th>
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
    </x-app-layout>
</body>
</html>