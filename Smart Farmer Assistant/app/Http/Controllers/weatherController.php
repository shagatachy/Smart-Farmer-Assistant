<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class WeatherController extends Controller
{
    private $apiBaseUrl = 'https://archive-api.open-meteo.com/v1/archive';
    private $latitude = '23.7104'; // Your location coordinates
    private $longitude = '90.4074';

    public function show()
    {
        $startDate = now()->subDays(30)->format('Y-m-d');
        $endDate = now()->format('Y-m-d');
        
        $weatherData = $this->getHistoricalWeatherData($startDate, $endDate);
        $processedData = $this->processWeatherData($weatherData);
        
        return view('weather.monthly', compact('processedData'));
    }

    private function getHistoricalWeatherData($startDate, $endDate)
    {
        $cacheKey = "weather_{$startDate}_{$endDate}";
        
        return Cache::remember($cacheKey, now()->addHours(6), function () use ($startDate, $endDate) {
            $response = Http::get($this->apiBaseUrl, [
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'daily' => 'temperature_2m_max,temperature_2m_min,rain_sum',
                'timezone' => 'auto'
            ]);

            return $response->successful() ? $response->json() : null;
        });
    }

    private function processWeatherData($weatherData)
    {
        if (empty($weatherData['daily'])) {
            return [];
        }

        $processed = [];
        $days = count($weatherData['daily']['time']);
        
        for ($i = 0; $i < $days; $i++) {
            $processed[] = [
                'date' => $weatherData['daily']['time'][$i],
                'max_temp' => $weatherData['daily']['temperature_2m_max'][$i],
                'min_temp' => $weatherData['daily']['temperature_2m_min'][$i],
                'rainfall' => $weatherData['daily']['rain_sum'][$i],
                'day_name' => Carbon::parse($weatherData['daily']['time'][$i])->format('l')
            ];
        }

        return array_reverse($processed); // Show latest first
    }
}