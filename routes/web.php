<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiPopulerController;

Route::get('/', [DestinasiPopulerController::class, 'index']);
