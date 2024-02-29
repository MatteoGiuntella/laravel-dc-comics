<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;


    Route::get('/', function(){
        
        return view('welcome');
    });
    Route::resource('comics', ComicsController::class);
