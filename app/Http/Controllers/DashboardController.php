<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{   
    public function index() {
        return view('dashboard');
    } 

    public function postDaily(Request $request) {
        $date = $request->input('date');
        $sensor = strtolower($request->input('sensor'));

        $response = Http::post('http://localhost:3000/api/crop/daily', [
            'date' => $date,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            $data = collect($json['data'])->map(function($item) use ($sensor) {
                return [
                    'hour' => date('H:i' , strotime($item['date'])),
                    'value' => $item[$sensor] ?? null
                ];
            });

            return response()->json([
                'sensorData' => $data,
            ]);
        }

        return response()->json(['message' => 'Gagal ambil data'], $response->status());
    }
}
