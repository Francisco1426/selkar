<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProcesosController;
use App\Http\Controllers\EstatusController;
use App\Http\Controllers\FasesController;

Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');

Route::resource('productos', ProductosController::class);
Route::resource('clientes', ClientesController::class);
Route::resource('procesos', ProcesosController::class);
Route::resource('estatus', EstatusController::class);
Route::resource('materiales', MaterialesController::class);
Route::get('autocomplete',[MaterialesController::class,'autocomplete'])->name('autocomplete');
Route::resource('fases',FasesController::class);
