<?php

use App\Http\Controllers\PlanetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});


Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);

Route::get('/users/{user}', [UserController::class, 'show']);

