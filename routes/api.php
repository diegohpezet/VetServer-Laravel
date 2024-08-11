<?php

use App\Http\Controllers\Api\V1\OwnersController;
use App\Http\Controllers\Api\V1\PetsController;
use App\Http\Controllers\Api\V1\AppointmentsController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\TreatmentsController;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::prefix('v1')->group(function () {
        Route::apiResource('/owners', OwnersController::class);
        Route::apiResource('/pets', PetsController::class);
        Route::apiResource('/appointments', AppointmentsController::class);
        Route::apiResource('/treatments', TreatmentsController::class);
    });
});