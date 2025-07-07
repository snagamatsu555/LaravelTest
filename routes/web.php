<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::post('/tasks/{id}/delete', [TaskController::class, 'destroy']);
Route::post('/tasks/{id}/complete', [TaskController::class, 'complete']);
