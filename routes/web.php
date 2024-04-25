<?php

use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
});

Route::get('estatisticas', [StatisticsController::class, 'home'])->name('estatisticas');
