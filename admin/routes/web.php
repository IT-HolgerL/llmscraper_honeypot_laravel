<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VisitorLogController;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    if (Auth::check()) {
        return redirect("vistorlogs");
    } else {
        return redirect('login');
    }

});

Route::get('vistorlogs', [VisitorLogController::class, 'view'])->middleware('auth');

Route::get('login', function () {
    return view('login');
});

Route::group(['prefix' => 'login'], function () {
    Route::get('/', function () {
        return view('login');

    });
    Route::post('/', [LoginController::class, 'authenticate']);
});


