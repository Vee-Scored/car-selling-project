<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function index () {
        $cars = Car::orderBy('price', 'desc')->limit(20)->get();
      
        return view('index',['cars' => $cars]);
    }
}
