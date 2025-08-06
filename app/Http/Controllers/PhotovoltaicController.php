<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class PhotovoltaicController extends Controller
{
    public function index() {

        $dateToday = Carbon::now();
        $response = Http::post('http://localhost:3000/api/pv/daily', [
            'date' =>'2024-01-01' ,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $dataPv = $data["data"];

            return view('photovoltaic', [
                "dataPv" => $dataPv,
                "dateToday" => $dateToday
            ]);

        } else {
            $statusCode = $response->status();
            $errorMessage = $response->body();
            return view('photovoltaic');
        }
    } 
}
