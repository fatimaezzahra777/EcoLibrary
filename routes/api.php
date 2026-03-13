<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;

Route::get('/test', function (){
    return response()->json([
        "message" => "api"
    ]);
});



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::middleware('admin')->group(function () {
        Route::apiResource('livres', BookController::class)->only('store','update','destroy');
        Route::apiResource('category', controller: CategoryController::class);
        Route::apiResource('statistiques', controller: TestController::class);
    });
Route::apiResource('livres',BookController::class);

});