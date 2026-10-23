<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

Route::get('/tareas', [TareasController::class, 'index']);
Route::get('/tareas/{id}', [TareasController::class, 'show']);
Route::post('/tareas', [TareasController::class, 'store']);
Route::put('/tareas/{id}', [TareasController::class, 'update']);
Route::delete('/tareas/{id}', [TareasController::class, 'destroy']);