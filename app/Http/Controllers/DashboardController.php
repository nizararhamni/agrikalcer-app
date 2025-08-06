<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class DashboardController extends Controller
{   
    public function index() {

        $dateToday = Carbon::now();
        $response = Http::post('http://localhost:3000/api/crop/daily', [
            'date' =>'2024-01-01' ,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $dataDaily = $data["data"];

            return view('dashboard', [
                "dataDaily" => $dataDaily,
                "dateToday" => $dateToday
            ]);

        } else {
            $statusCode = $response->status();
            $errorMessage = $response->body();
            return view('dashboard');
        }
    }
    
    
}
