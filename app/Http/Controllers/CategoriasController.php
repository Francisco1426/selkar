<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use App\Models\Estatu;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        return view('system.categorias.index');
    }

    public function create()
    {
        return view('system.categorias.create', [
            'estatus' => Estatu::select('id', 'nombre')->get()
        ]);
    }

    public function store(CategoriaRequest $request)
    {
        //dd( $request->all() );
        $categoria = Categoria::create($request->validated());
        return redirect()
            ->route('categorias.index');
    }

    public function edit(categoria $categoria)
    {
        return view('system.categorias.edit', [
            'categoria' => $categoria,
            'estatus' => Estatu::select('id','nombre')->get()
        ]);
    }

    public function update(CategoriaRequest $request, categoria $categoria)
    {
        $categoria->update($request->validated());
        $categoria->save();
        return redirect()
                ->route('categorias.index');
    }

    public function RegistrosDatatables()
    {
        return datatables()
            ->eloquent(
                Categoria::query()
                    ->with([
                        'estatus'
                    ])
            )
            ->toJson();
    }
}
