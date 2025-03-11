<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index');
});

Route::controller(OrderController::class)->group(function(){
    Route::post('/order', 'createOrder');
    Route::post('/midrans/callback', 'callback');
});
