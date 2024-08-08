<?php

use App\Http\Controllers\Api\V1\OwnersController;
use App\Http\Controllers\Api\V1\PetsController;
use App\Http\Controllers\Api\V1\AppointmentsController;
use App\Http\Controllers\Api\V1\TreatmentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/owners', OwnersController::class);
    Route::apiResource('/pets', PetsController::class);
    Route::apiResource('/appointments', AppointmentsController::class);
    Route::apiResource('/treatments', TreatmentsController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
