<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HistoryController extends Controller
{
    public function index() {
        $response = Http::get('http://localhost:3000/api/histories');

        if ($response->successful()) {
            $data = $response->json();
            $historyData = $data["data"];

            return view('history', [
                'historyData' => $historyData
            ]);

        } else {
            $statusCode = $response->status();
            $errorMessage = $response->body();
            return response()->json(['message' => 'Gagal ambil data', 'status_code' => $statusCode, 'error_message' => $errorMessage], $statusCode);
        }
    }
}
