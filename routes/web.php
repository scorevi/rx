<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/', [RoleController::class, 'index']);

Route::resource('roles', RoleController::class);
