<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class RecommenderController extends Controller
{
    public function index() {
        return view('recommender', [
            'prediction' => null
        ]);
    }

    public function predict(Request $request) {
        $response = Http::post('http://localhost:8000/predict', [
            'n' => $request-> n ,
            'p' => $request-> p,
            'k' => $request-> k,
            'temp' => $request-> temp,
            'humidity' => $request-> humidity,
            'ph' => $request-> ph,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $prediction = $data['prediction'];

            return view('recommender', [
                'prediction' => $prediction
            ]);

        } else {
            $statusCode = $response->status();
            $errorMessage = $response->body();
            return response()->json(['message' => 'Gagal ambil data', 'status_code' => $statusCode, 'error_message' => $errorMessage], $statusCode);
        }
    }
}
