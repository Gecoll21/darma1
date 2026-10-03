<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DarmaController;
use App\Http\Controllers\BanomController;

Route::get('/', [DarmaController::class, 'home'])
    ->name('home');

Route::resource('darma', DarmaController::class);

Route::resource('banom', BanomController::class);