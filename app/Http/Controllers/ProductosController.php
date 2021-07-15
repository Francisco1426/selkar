<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Requests\ProductoRequest;
use App\Models\Categoria;
use App\Models\Estatu;

class ProductosController extends Controller
{
    public function index()
    {
        return view('system.productos.index');
    }

    public function create()
    {
        return view('system.productos.create',[
            'categorias' => Categoria::select('id','nombre')->get(),
            'estatus' => Estatu::select('id','nombre')->get()
        ]);
    }

    public function store(ProductoRequest $request)
    {
        $producto = Producto::create($request->validated());
        return redirect()
                ->route('productos.index');

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
