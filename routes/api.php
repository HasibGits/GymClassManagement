<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TraineeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::middleware('auth:api')->group(function () {
    
    // Routes for admin, trainer, trainee based on roles
    Route::middleware('role:Admin')->group(function () {
        Route::apiResource('admin/trainers', TrainerController::class);
        Route::apiResource('admin/classes', ClassController::class);
    });
    Route::middleware('role:Trainer')->group(function () {
        Route::get('trainer/classes', [TrainerController::class, 'viewClasses']);
    });
    Route::middleware('role:Trainee')->group(function () {
        Route::apiResource('trainee/bookings', BookingController::class);
    });
});
