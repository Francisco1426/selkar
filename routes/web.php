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

//Omar chong lopez
Route::resource('productos', ProductosController::class);
Route::name('pdfproductos')->get('pdfproductos',[ProductosController::class,'getPdfProductos']);
Route::get('datatables/productos',[ProductosController::class,'RegistrosDatatables'])->name('productos.datatables');

//Omar Chong Lopez
Route::resource('clientes', ClientesController::class);
Route::get('datatables/clientes', [ClientesController::class,'RegistrosDatatables'])->name('clientes.datatables');
Route::name('pdfclientes')->get('pdfclientes',[ClientesController::class,'getPdfClientes']);

//Omar Chong Lopez
Route::get('datatables/categorias', [CategoriasController::class,'RegistrosDatatables'])->name('categorias.datatables');
Route::resource('categorias', CategoriasController::class);
Route::name('pdfcategorias')->get('pdfcategorias', [CategoriasController::class,'getPdfCategorias']);

//francisco
Route::resource('materiales', MaterialesController::class);
Route::get('datatables/materiales',[MaterialesController::class,'RegistrosDatatables'])->name('materiales.datatables');
Route::post('materiales/search', [MaterialesController::class,'search'])->name('materiales.search');
Route::resource('materiales', MaterialesController::class);
Route::get('autocomplete',[MaterialesController::class,'getMaterial'])->name('autocomplete');


//Eduardo
Route::resource('fases', FasesController::class);
Route::get('datatables/fases',[FasesController::class,'RegistrosDatatables'])->name('fases.datatables');
Route::name('pdffases')->get('pdffases',[FasesController::class,'getPdfFases']);

//Eduardo
Route::resource('estatus', EstatusController::class);
Route::get('datatables/estatus',[EstatusController::class,'RegistrosDatatables'])->name('estatus.datatables');



Route::resource('procesos', ProcesosController::class);
