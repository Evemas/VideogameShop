<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage'] )->name('homepage');
Route::get('/console/{console}/giochi', [GameController::class, 'games'] )->name('console.games');