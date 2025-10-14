<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro/index', [RegistroController::class, 'store']);
Route::get('sensor/find',[SensorController::class,'show']);
Route::get('sensor/update',[SensorController::class,'update']);