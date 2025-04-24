<?php

use App\Http\Controllers\HomeController;
use App\Models\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

