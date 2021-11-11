<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'getCurrent']);

Route::post('/login', [AuthController::class, 'auth']);

Route::get('/logout', [AuthController::class, 'logout']);


?>