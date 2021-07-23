<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EstatusController;
use App\Http\Controllers\FasesController;
use App\Http\Controllers\CategoriasController;


Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');

Route::resource('productos', ProductosController::class);
Route::resource('procesos', ProcesosController::class);

Route::resource('clientes', ClientesController::class);
Route::get('datatables/clientes', [ClientesController::class,'RegistrosDatatables'])->name('clientes.datatables');
Route::get('datatables/categorias', [CategoriasController::class,'RegistrosDatatables'])->name('categorias.datatables');
Route::get('datatables/productos',[ProductosController::class,'RegistrosDatatables'])->name('productos.datatables');
Route::resource('categorias', CategoriasController::class);
Route::resource('materiales', MaterialesController::class);
Route::get('datatables/materiales',[MaterialesController::class,'RegistrosDatatables'])->name('materiales.datatables');



Route::resource('fases', FasesController::class);
Route::get('datatables/fases',[FasesController::class,'RegistrosDatatables'])->name('fases.datatables');
Route::resource('estatus', EstatusController::class);
Route::get('datatables/estatus',[EstatusController::class,'RegistrosDatatables'])->name('estatus.datatables');

Route::resource('materiales', MaterialesController::class);
Route::get('autocomplete',[MaterialesController::class,'getMaterial'])->name('autocomplete');

Route::post('materiales/search', [MaterialesController::class,'search'])->name('materiales.search');
