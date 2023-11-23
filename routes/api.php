<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// VIDEOS
Route::get('videos', [App\Http\Controllers\VideoController::class, 'index']);
Route::get('video/{id}', [App\Http\Controllers\VideoController::class, 'video']);
Route::post('videos', [App\Http\Controllers\VideoController::class, 'store']);
Route::put('video/{id}/update', [App\Http\Controllers\VideoController::class, 'update']);
Route::delete('video/{id}/delete', [App\Http\Controllers\VideoController::class, 'delete']);