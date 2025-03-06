<?php

use App\Http\Controllers\Game\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', [GameController::class, "index"]);
Route::get("/game/{game}", [GameController::class, "game"]);
Route::post('/game/{game}/username', [GameController::class, 'saveUsername'])->name('username.submit');

