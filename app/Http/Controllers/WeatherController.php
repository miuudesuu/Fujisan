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
        $url = "http://api.openweathermap.org/data/2.5/forecast?lat=35.2139&lon=138.4339&appid=$apiKey";
       
        $method = "GET";

        $client = new Client();

        $response = $client->request($method, $url);

        $data = $response->getBody();
        $data = json_decode($data, true);
        
        return response()->json($data);
    }
}
