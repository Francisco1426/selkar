<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Estatu;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductoRequest;


class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('ProduccionLogistica');

    }

    public function index()
    {
        return view('system.productos.index');
    }

    public function create()
    {
        return view('system.productos.create', [
            'categorias' => Categoria::select('id', 'nombre')->get(),
            'estatus' => Estatu::select('id', 'nombre')->get()
        ]);
    }

    public function store(ProductoRequest $request)
    {
        //dd($request->all());
        //$producto = Producto::create($request->validated());
        $producto = $request->all();
        if ($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $producto['imagen'] = "$imagenProducto";
        }
       $producto=  Producto::create($producto, $request->validated());
        return redirect()
            ->route('productos.index')
            ->withSuccess("El producto $producto->nombre se guardo correctamente");
    }

    public function edit(Producto $producto)
    {
        return view('system.productos.edit', [
            'producto' => $producto,
            'estatus' => Estatu::select('id', 'nombre')->get(),
            'categorias' => Categoria::select('id', 'nombre')->get()

        ]);
    }


    public function show($id)
    {
        $productos = Producto::findOrFail($id);
        return view('system.productos.show', compact ('productos'));
    }

    public function update(ProductoRequest $request,  producto $producto)
    {
        //dd($request->all());
        //$nombre = $request->nombre;
        $prod = $request->all();
        if ($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['imagen'] = "$imagenProducto";
        } else {
            unset($prod['imagen']);
        }
        $producto->update($prod);
        return redirect()
            ->route('productos.index')
            ->withSuccess("El producto $producto->nombre se a editado corectamente");
    }

    public function destroy(Producto $producto)
    {
        //
    }

    public function RegistrosDatatables()
    {
        return datatables()
            ->eloquent(
                Producto::query()
                    ->with([
                        'categorias',
                        'estatus'
                    ])
            )
            ->toJson();
    }

    public function getPdfProductos()
    {
        $productopdf = Producto::all();
        $pdf = PDF::loadView('system.productos.pdf', compact('productopdf'));
        return $pdf->download('pdf_productos.pdf');
    }

    public function listaPreciosProductos()
    {
        $listaprecio = Producto::select('productos.id','productos.nombre','productos.dimension','productos.preciodistribuidor','productos.preciocontado','productos.preciopublico')->get();
        $pdf = PDF::loadView('system.productos.listaprecios',compact('listaprecio'));
        $ldate = date('Y-m-d H:i:s');
        return $pdf->download('pdf_listaprecios.pdf');
    }

    public function generaclave()
    {
        //
    }
}
