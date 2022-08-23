<?php

use Basico\Controllers\UserController;
use Illuminate\Support\Facades\Route;
$prefix = 'pacote';
Route::prefix("$prefix/user")->group(function() {
    Route::get('/', [UserController::class, 'paginate']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/', [UserController::class, 'create']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'delete']);
});