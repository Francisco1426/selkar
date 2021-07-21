<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Requests\ProductoRequest;
use App\Models\Categoria;
use App\Models\Estatu;
use Illuminate\Routing\Controller;


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
        //dd($request->all());
        //$producto = Producto::create($request->validated());
        $producto = $request->all();
        if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $producto['imagen'] = "$imagenProducto";
        }
        Producto::create($producto, $request->validated());
        return redirect()
                ->route('productos.index');

    }

    public function edit(Producto $producto)
    {
        return view('system.productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        //
    }


    public function destroy(Producto $producto)
    {
       // $producto->delete();
        //return redirect()->route('productos.index');
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
}
