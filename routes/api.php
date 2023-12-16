<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// CATEGORIES
Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('category/{slug}', [App\Http\Controllers\CategoryController::class, 'category']);
Route::post('categories', [App\Http\Controllers\CategoryController::class, 'store']);
Route::put('category/{id}/update', [App\Http\Controllers\CategoryController::class, 'update']);
Route::delete('category/{id}/delete', [App\Http\Controllers\CategoryController::class, 'delete']);

// VIDEOS
Route::get('videos', [App\Http\Controllers\VideoController::class, 'index']);
Route::get('video/{id}', [App\Http\Controllers\VideoController::class, 'video']);
Route::post('videos', [App\Http\Controllers\VideoController::class, 'store']);
Route::put('video/{id}/update', [App\Http\Controllers\VideoController::class, 'update']);
Route::delete('video/{id}/delete', [App\Http\Controllers\VideoController::class, 'delete']);

// NAMES
Route::get('names', [App\Http\Controllers\NameController::class, 'index']);
Route::get('name/{id}', [App\Http\Controllers\NameController::class, 'name']);
Route::post('names', [App\Http\Controllers\NameController::class, 'store']);
Route::put('name/{id}/update', [App\Http\Controllers\NameController::class, 'update']);
Route::delete('name/{id}/delete', [App\Http\Controllers\NameController::class, 'delete']);
