<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
<<<<<<< HEAD
use App\Http\Controllers\FasesController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\ProcesosController;
use App\Http\Controllers\TipomaterialesController;
use App\Http\Controllers\UnidadesmedidaController;
=======
use App\Http\Controllers\ProcesosController;
>>>>>>> Eduardo

Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');

Route::resource('productos', ProductosController::class);
Route::resource('clientes', ClientesController::class);
Route::resource('procesos', ProcesosController::class);
<<<<<<< HEAD
Route::resource('materiales', MaterialesController::class);
Route::resource('fases', FasesController::class);
Route::resource('tipomateriales', TipomaterialesController::class);
Route::resource('unidadesmedida', UnidadesmedidaController::class);
=======
>>>>>>> Eduardo
