<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProcesosController;

Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');

Route::resource('productos', ProductosController::class);
Route::resource('clientes', ClientesController::class);
Route::resource('procesos', ProcesosController::class);
