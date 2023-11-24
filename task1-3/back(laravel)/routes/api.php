<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/url1', [ApiController::class, 'count']);
Route::post('/q', [ApiController::class, 'email']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
