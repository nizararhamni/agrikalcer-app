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

    public function postDaily() {

        $response = Http::post('http://localhost:3000/api/crop/daily', [
            'date' => '2024-01-02',
        ]);

        if ($response->successful()) {
            $data = $response->json();
            dd($data);

            return response()->json(['message' => 'Data berhasil diambil', 'response_data' => $data]);
        } else {
            $statusCode = $response->status();
            $errorMessage = $response->body();
            return response()->json(['message' => 'Gagal ambil data', 'status_code' => $statusCode, 'error_message' => $errorMessage], $statusCode);
        }
    }
}
