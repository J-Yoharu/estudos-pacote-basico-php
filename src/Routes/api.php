<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/pacote-basico')->group(function() {
    Route::get('teste', function(Request $request) {
        echo "get/teste";
        dd($request->all());
    });
    Route::post('teste', function(Request $request) {
        echo "post/teste";
        dd($request->all());
    });
    Route::put('teste', function() {
        echo "put/teste";
    });
    Route::delete('teste', function() {
        echo "delete/teste";
    });
});