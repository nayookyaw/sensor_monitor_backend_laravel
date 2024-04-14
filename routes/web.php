<?php

use App\Http\Controllers\Sensor\SensorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sensor/{id}', [SensorController::class, 'index']);
Route::get('/sensor/{id}', [SensorController::class, 'create']);
