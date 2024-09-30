<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Weather Forecast</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{('css/app.css') }}" rel="stylesheet">
    <style>
        table {
            text-align:center;
            width: 90%;
            border-collapse: collapse;
            background:#FFFDD0;
            padding 10px
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
        h1{
            padding:0.5em;
            background:#DEEBF7;
            border-bottom:solid 3px #2F5597;
        }
        .p{
            margin:20px;
        }
        .icon {
            width: 40px;
            height: 40px;
        }
        .high-risk {
            color: red;
            font-weight: bold;
        }
        .moderate-risk {
            color: orange;
        }
        .low-risk {
            color: green;
        }
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         天気予報
        </h2>
    </x-slot>
    <h1><strong>富士山頂の天気</strong></h1>
    <p class='p'>ここでは、富士山頂の経度・緯度に合わせた3時間ごと5日間の天気がわかります。ですが、山の天気は変わりやすく、天気予報があてにならないときもあるので<strong>要注意！！！</strong></p>
    
    <p class='meyasu'>以下の時は登らないようにしてください。<br>
        ・天気があまり良くない日☂（雨が強すぎると登るのも下山も大変です。）<br>
        ・降水確率が高い日（上記同様）<br>
        ・雷の可能性がある日⚡（富士山では、雷に打たれて死亡者が出たこともあります。絶対にやめましょう。）
    </p>
    <table>
        <thead>
            <tr>
                <th>日付</th>
                <th>天気</th>
                <th>気温 (°C)</th>
                <th>降水確率 (%)</th>
                <th>風速 (m/s)</th>
                <th>雷の可能性</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forecastData['list'] as $forecast)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($forecast['dt_txt'])->format('m月d日 H時') }}</td>
                    <td>
                        <img class="center" src="http://openweathermap.org/img/wn/{{ $forecast['weather'][0]['icon'] }}@2x.png" alt="天気" class="icon">
                        <br>{{ $forecast['weather'][0]['description'] }}
                    </td>
                    <td>{{ $forecast['main']['temp'] }}°C</td>
                    <td class="
                        @if ($forecast['pop'] >= 0.7) high-risk
                        @elseif ($forecast['pop'] >= 0.4) moderate-risk
                        @else low-risk
                        @endif">
                        {{ isset($forecast['pop']) ? round($forecast['pop'] * 100, 1) : 'N/A' }}%
                    </td>
                    <td>{{ $forecast['wind']['speed'] }} m/s</td>
                    <td>
                        @if (strpos($forecast['weather'][0]['description'], '雷') !== false)
                            雷雨の可能性あり ⚡
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
