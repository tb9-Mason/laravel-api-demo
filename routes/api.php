<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ArtistController;

Route::get('/users', [UserController::class, 'index']);

Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/{uuid}', [ArtistController::class, 'show']);
