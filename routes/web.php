<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\Sensoredit;
use App\Livewire\Sensor\Sensorlist;
use Illuminate\Support\Facades\Route;


Route::get('/sensor/create',SensorCreate::class)->name('sensor.create');
Route::get('/sensor/list',Sensorlist::class)->name('sensor.list');
Route::get('/sensor/edit/{id}',Sensoredit::class)->name('sensor.edit');

