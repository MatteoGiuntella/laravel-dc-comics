<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;


    Route::get('/', function(){
        
        return view('comics.index');
    });
    Route::resource('comics', ComicsController::class);
