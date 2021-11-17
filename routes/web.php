<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FasesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstatusController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProcesosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\CotizacionesController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\MaterialVehiculoController;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
    Route::get('Inicio', [InicioController::class, 'Inicio'])->name('Inicio');

    //Omar chong lopez
    Route::resource('productos', ProductosController::class);
    Route::name('pdfproductos')->get('pdfproductos', [ProductosController::class, 'getPdfProductos']);
    Route::get('datatables/productos', [ProductosController::class, 'RegistrosDatatables'])->name('productos.datatables');
    Route::name('pdfprecios')->get('pdfprecios', [ProductosController::class, 'listaPreciosProductos']);

    Route::put('productos/{id}/active-record', [ProductosController::class, 'activeRecord']);
    Route::put('fases/{id}/active-record', [FasesController::class, 'activeRecord']);
    Route::put('clientes/{id}/active-record', [ClientesController::class, 'activeRecord']);
    Route::put('categorias/{id}/active-record', [CategoriasController::class, 'activeRecord']);

    //Omar Chong Lopez
    Route::resource('clientes', ClientesController::class);
    Route::get('datatables/clientes', [ClientesController::class, 'RegistrosDatatables'])->name('clientes.datatables');
    Route::name('pdfclientes')->get('pdfclientes', [ClientesController::class, 'getPdfClientes']);

    //Omar Chong Lopez
    Route::get('datatables/categorias', [CategoriasController::class, 'RegistrosDatatables'])->name('categorias.datatables');
    Route::resource('categorias', CategoriasController::class);
    Route::name('pdfcategorias')->get('pdfcategorias', [CategoriasController::class, 'getPdfCategorias']);
    Route::resource('procesos', ProcesosController::class);
    Route::put('procesos/{id}/active-record', [ProcesosController::class, 'activeRecord'])->name('procesos.active-record');
    Route::get('datatables/procesos', [ProcesosController::class, 'RegistrosDatatables'])->name('procesos.datatables');
    //omar chong lopez
    Route::resource('cotizaciones',CotizacionesController::class);
    Route::post('Cotizaciones/buscarcliente', [CotizacionesController::class, 'buscarcliente'])->name('Cotizaciones.buscarcliente');
    Route::post('Cotizaciones/searchcliente', [CotizacionesController::class, 'searchcliente'])->name('Cotizaciones.searchcliente');



    //francisco
    Route::resource('materiales', MaterialesController::class);
    Route::get('datatables/materiales', [MaterialesController::class, 'RegistrosDatatables'])->name('materiales.datatables');
    Route::post('materiales/search', [MaterialesController::class, 'search'])->name('materiales.search');
    Route::resource('materiales', MaterialesController::class);
    Route::get('autocomplete', [MaterialesController::class, 'getMaterial'])->name('autocomplete');


    //Eduardo
    Route::resource('fases', FasesController::class);
    Route::get('datatables/fases', [FasesController::class, 'RegistrosDatatables'])->name('fases.datatables');
    Route::name('pdffases')->get('pdffases', [FasesController::class, 'getPdfFases']);

    //Eduardo
    Route::resource('estatus', EstatusController::class);
    Route::get('datatables/estatus', [EstatusController::class, 'RegistrosDatatables'])->name('estatus.datatables');
    Route::get('datatables/usuarios', [UsuariosController::class, 'RegistrosDatatables'])->name('usuarios.datatables');


    Route::get('autocomplete', [MaterialesController::class, 'getMaterial'])->name('autocomplete');

    Route::post('materiales/search', [MaterialesController::class, 'search'])->name('materiales.search');

    Route::resource('vehiculos', VehiculosController::class);
    Route::get('datatables/vehiculos', [VehiculosController::class, 'RegistrosDatatables'])->name('vehiculos.datatables');

    Route::resource('usuarios', UsuariosController::class);


    // -------------------Modulo de control materiales
    Route::resource('Modulomateriales', MaterialVehiculoController::class);
    Route::post('Modulomateriales/search', [MaterialVehiculoController::class, 'search'])->name('Modulomateriales.search');
    Route::post('Modulomateriales/buscarmaterial', [MaterialVehiculoController::class, 'buscarmaterial'])->name('Modulomateriales.buscarmaterial');

    Route::post('Modulomateriales/buscarvehiculo', [MaterialVehiculoController::class, 'buscarvehiculo'])->name('Modulomateriales.buscarvehiculo');
    Route::post('Modulomateriales/searchvehiculo', [MaterialVehiculoController::class, 'searchvehiculo'])->name('Modulomateriales.searchvehiculo');
    Route::post('Modulomateriales/guardar', [MaterialVehiculoController::class, 'guardar'])->name('Modulomateriales.guardar');
    Route::post('Modulomateriales/editar', [MaterialVehiculoController::class, 'editar'])->name('Modulomateriales.editar');
    Route::get('datables/Modulomateriales', [MaterialVehiculoController::class, 'RegistrosDatatables'])->name('Modulomateriales.datatables');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/sobrenosotros', function () {
    return view('sobre_nosotros');
})->name('sobrenosotros');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
