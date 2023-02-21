<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
// Routes require authentication first
Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('/users', UserController::class);
    Route::apiResource('/ads', AdController::class);
});
