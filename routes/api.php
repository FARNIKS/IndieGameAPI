<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\DeveloperController;
use App\Http\Controllers\Api\EngineController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\PlatformController;

// Rutas de la API RESTful (Solo Lectura)
Route::apiResource('games', GameController::class)->only(['index', 'show']);
Route::apiResource('characters', CharacterController::class)->only(['index', 'show']);
Route::apiResource('developers', DeveloperController::class)->only(['index', 'show']);
Route::apiResource('engines', EngineController::class)->only(['index', 'show']);
Route::apiResource('genres', GenreController::class)->only(['index', 'show']);
Route::apiResource('platforms', PlatformController::class)->only(['index', 'show']);
