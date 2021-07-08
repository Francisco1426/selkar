<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Requests\ProductoRequest;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate();
        return view('system.productos.index', compact('productos'));
    }

    public function create()
    {
        return view('system.productos.create');
    }

    public function store(ProductoRequest $request)
    {
        $producto = Producto::create($request->validated());
            return redirect()
            ->route('productos.index')
            ->withSuccess("El producto $producto->nombre ha sido creado satisfactoriamente");
    }

    public function edit(Producto $producto)
    {
        return view('system.productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect()->route('productos.index');
    }


    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
