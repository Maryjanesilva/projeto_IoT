<?php

use App\Http\Controllers\RegistroController;

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::get('/ambiente/create',AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/list',AmbienteList::class)->name('ambiente.list');
Route::get('/ambiente/edit/{id}',AmbienteEdit::class)->name('ambiente.edit');

use App\Livewire\Dashboard;
use App\Livewire\Registros\RegistrosIndex;
use App\Models\Registro;
use Illuminate\Support\Facades\Route;
Route::get('/',Dashboard::class);


Route::get('registro/index', RegistrosIndex::class);


