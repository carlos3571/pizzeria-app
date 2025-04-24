<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PizzaController;
use App\Models\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::delete('/pizzas/{pizza}', [PizzaController::class, 'destroy'])->name('pizzas.destroy');
Route::put('/pizzas/{pizza}', [PizzaController::class, 'update'])->name('pizzas.update');
Route::get('/pizzas/{pizza}/edit', [PizzaController::class, 'edit'])->name('pizzas.edit');
