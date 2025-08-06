<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommenderController extends Controller
{
    public function index() {
        return view('recommender');
    } 
}
