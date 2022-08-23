<?php

use Basico\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::prefix('pacote-basico')->group(function() {
    Route::get('teste', [TesteController::class, 'teste']);
    Route::post('teste', [TesteController::class, 'teste']);
    Route::put('teste', [TesteController::class, 'teste2']);
    Route::delete('teste', [TesteController::class, 'teste2']);
});