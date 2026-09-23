<?php

use App\Http\Controllers\Api\BarbershopController;
use Illuminate\Support\Facades\Route;

Route::get('/barbershops', [BarbershopController::class, 'index']);