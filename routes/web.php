<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use Illuminate\Support\Facades\Route;

Route::get('/ambiente/create',AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/list',AmbienteEdit::class)->name('ambiente.list');
