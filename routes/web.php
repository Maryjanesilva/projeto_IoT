<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\Index;
use App\Livewire\Registros\RegistrosIndex;
use Illuminate\Support\Facades\Route;
Route::get('/',Dashboard::class);
Route::get('registro/index', RegistrosIndex::class);