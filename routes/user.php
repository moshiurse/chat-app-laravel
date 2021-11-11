<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'showAll']);

Route::get('/{id}', [UserController::class, 'show']);

Route::post('/', [UserController::class, 'save']);

Route::post('/', [UserController::class, 'save']);

Route::put('/', [UserController::class, 'update']);

Route::delete('/{id}', [UserController::class, 'delete']);


?>