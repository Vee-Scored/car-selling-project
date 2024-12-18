<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::get('/login', [LoginController::class,'create'] );
Route::get('/signup',[SignupController::class,'create']);