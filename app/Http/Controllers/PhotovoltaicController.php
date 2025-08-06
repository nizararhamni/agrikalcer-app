<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotovoltaicController extends Controller
{
    public function index() {
        return view('photovoltaic');
    } 
}
