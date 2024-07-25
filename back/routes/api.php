<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ItemController::class)
    ->prefix('items')
    ->group(function () {
        Route::get('/',          'list');
        Route::post('/',         'create');
        Route::delete('/{item}', 'delete');
}); 