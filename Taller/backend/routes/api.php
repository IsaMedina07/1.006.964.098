<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// CREAMOS UNA RUTA Para Usuarios
Route::get('/users',[UserController::class, 'index']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::post('/users',[UserController::class, 'store']);


