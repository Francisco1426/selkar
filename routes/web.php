<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProcesosController;
use App\Http\Controllers\EstatusController;
<<<<<<< HEAD
use App\Http\Controllers\FasesController;
=======
<<<<<<< HEAD
=======
use App\Http\Controllers\FasesController;
use App\Http\Controllers\CategoriasController;


>>>>>>> Omar

>>>>>>> 08a18248812432d4b309b4ec1ef12cf0c82ed9f2

Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');

Route::resource('productos', ProductosController::class);
Route::resource('clientes', ClientesController::class);
<<<<<<< HEAD
Route::resource('procesos', ProcesosController::class);
=======
Route::get('datatables/clientes', [ClientesController::class,'RegistrosDatatables'])->name('clientes.datatables');
Route::get('datatables/categorias', [CategoriasController::class,'RegistrosDatatables'])->name('categorias.datatables');
Route::resource('categorias', CategoriasController::class);
Route::resource('materiales', MaterialesController::class);
Route::resource('fases', FasesController::class);
>>>>>>> Omar
Route::resource('estatus', EstatusController::class);
Route::resource('materiales', MaterialesController::class);
Route::get('autocomplete',[MaterialesController::class,'autocomplete'])->name('autocomplete');
Route::resource('fases',FasesController::class);
