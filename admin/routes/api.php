<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorLogController;
use App\Http\Controllers\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'visitorlog'], function () {
    Route::get('/', [VisitorLogController::class, 'index']);
    Route::get('/downloadCSV', [VisitorLogController::class, 'downloadCSV']);
    Route::get('/{id}', [VisitorLogController::class, 'show']);
    Route::post('/', [VisitorLogController::class, 'store']);

    Route::put('/{id}', [VisitorLogController::class, 'update']);
    Route::delete('/{id}', [VisitorLogController::class, 'destroy']);
});
Route::Post('/register', [LoginController::class, 'register']);