<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebudayaanController;
use App\Http\Controllers\DestinasiPopulerController;

Route::get('/', [HomeController::class, 'index']);
