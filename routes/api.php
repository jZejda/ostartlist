<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::name('api.')->middleware('api')->group(function () {
    Route::get('/version', function () {
        return response()->json([
            'version' => config('app.version'),
            'last_updated' => config('app.last_updated'),
        ]);
    })->name('version');
});

Route::name('api.ochecklist.')->middleware('api')->group(function () {
    Route::post('ochecklist/changes', function () {
        return response()->json([
            'version' => config('app.version'),
        ]);
    })->name('update');
});
