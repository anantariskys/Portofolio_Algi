<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

Route::get('/', [DashboardController::class,'index']);

Route::resource('/works', WorkController::class);

