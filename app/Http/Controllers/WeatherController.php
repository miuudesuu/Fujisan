<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index()
    {
        $cityName = 'Tokyo';
        $apiKey = '6a1ea7c723f7f076205520890769c4d9';
        // 緯度と経度を指定している部分を都市名を使う形に変更することもできます
        $url = "http://api.openweathermap.org/data/2.5/forecast?lat=35.2139&lon=138.4339&appid=$apiKey&units=metric&lang=ja";
        https://api.openweathermap.org/data/2.5/forecast?lat=%E7%B7%AF%E5%BA%A6&lon=%E7%B5%8C%E5%BA%A6&appid=%E8%87%AA%E5%88%86%E3%81%AEAPIkey

        $client = new Client();

        $response = $client->request('GET', $url);

        $data = $response->getBody()->getContents();
        $data = json_decode($data, true);
        
        \Log::info('Weather API Response:', $data);

        return view('weathers.index', ['forecastData' => $data]);
    }
}