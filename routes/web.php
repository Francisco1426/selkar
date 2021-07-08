<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UnidadesmedidaController;

Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');

Route::resource('productos', ProductosController::class);

Route::resource('unidadesmedida', UnidadesmedidaController::class);

Route::resource('materiales', MaterialesController::class);


