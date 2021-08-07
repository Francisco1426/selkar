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
use App\Http\Controllers\UsuariosController;

Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {



Route::get('/', [InicioController::class,'Inicio'])->name('Inicio');
Route::resource('productos', ProductosController::class);
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

Route::resource('usuarios', UsuariosController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
