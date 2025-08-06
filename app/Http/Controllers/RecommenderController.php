<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResommenderController extends Controller
{
    public function index() {
        return view('recommender');
    } 
}
