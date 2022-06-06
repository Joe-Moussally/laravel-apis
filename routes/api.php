<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('/palindrome', [APIsController::class, 'palindrome']);
Route::get('/get_joke', [APIsController::class, 'get_joke']);
Route::get('/hilda', [APIsController::class, 'hilda']);
Route::get('/time_since_1732_april_14', [APIsController::class, 'time_since_1732_april_14']);
Route::get('/divide_groups', [APIsController::class, 'divide_groups']);
Route::get('/beer_recipe', [APIsController::class, 'beer_recipe']);
Route::get('/get_joke', [APIsController::class, 'get_joke']);