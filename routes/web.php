<?php

use App\Http\Controllers\RegistroController;
use App\Livewire\Dashboard;
use App\Livewire\Registros\RegistrosIndex;
use App\Models\Registro;
use Illuminate\Support\Facades\Route;
Route::get('/',Dashboard::class);

Route::get('registro/index', RegistrosIndex::class);
