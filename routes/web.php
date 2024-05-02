<?php

use App\Http\Controllers\CondominiumController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
});

Route::get('estatisticas', [StatisticsController::class, 'home'])->name('estatisticas');

Route::resource('condominios', CondominiumController::class);

Route::resource('estoque', StockController::class);
