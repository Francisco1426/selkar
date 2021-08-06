<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProcesosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EstatusController;
use App\Http\Controllers\FasesController;
use App\Http\Controllers\CategoriasController;



Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {



Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');
Route::resource('productos', ProductosController::class);
Route::name('pdfproductos')->get('pdfproductos',[ProductosController::class,'getPdfProductos']);
Route::name('pdfcategorias')->get('pdfcategorias',[CategoriasController::class,'getPdfCategorias']);
Route::name('pdfclientes')->get('pdfclientes',[ClientesController::class,'getPdfClientes']);
Route::name('pdffases')->get('pdffases',[FasesController::class,'getPdfFases']);

Route::resource('procesos', ProcesosController::class);
Route::resource('clientes', ClientesController::class);
Route::get('datatables/clientes', [ClientesController::class,'RegistrosDatatables'])->name('clientes.datatables');
Route::get('datatables/procesos', [ProcesosController::class,'RegistrosDatatables'])->name('procesos.datatables');
Route::get('datatables/categorias', [CategoriasController::class,'RegistrosDatatables'])->name('categorias.datatables');
Route::get('datatables/productos',[ProductosController::class,'RegistrosDatatables'])->name('productos.datatables');
Route::resource('categorias', CategoriasController::class);
Route::resource('materiales', MaterialesController::class);
Route::resource('fases', FasesController::class);
Route::resource('estatus', EstatusController::class);

Route::get('datatables/estatus',[EstatusController::class,'RegistrosDatatables'])->name('estatus.datatables');
Route::get('datatables/fases',[FasesController::class,'RegistrosDatatables'])->name('fases.datatables');
Route::get('datatables/materiales',[MaterialesController::class,'RegistrosDatatables'])->name('materiales.datatables');
Route::resource('Modulomateriales', MaterialVehiculoController::class);
Route::post('materiales/search', [MaterialesController::class,'search'])->name('materiales.search');
Route::post('Modulomateriales/search',[MaterialVehiculoController::class,'search'])->name('Modulomateriales.search');
Route::post('Modulomateriales/buscarmaterial',[MaterialVehiculoController::class,'buscarmaterial'])->name('Modulomateriales.buscarmaterial');
Route::post('Modulomateriales/buscarvehiculo',[MaterialVehiculoController::class,'buscarvehiculo'])->name('Modulomateriales.buscarvehiculo');
Route::post('Modulomateriales/searchvehiculo',[MaterialVehiculoController::class,'searchvehiculo'])->name('Modulomateriales.searchvehiculo');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
