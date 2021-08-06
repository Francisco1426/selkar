<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use App\Models\Estatu;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use PDF;

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
            ->route('categorias.index')
            ->withSuccess("La categoria $categoria->nombre se guardo correctamente");
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
                ->route('categorias.index')
                ->withSuccess("La ctaegoria $categoria->nombre se modifico correctamente");
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

    public function getPdfCategorias()
    {
        $categoriapdf = Categoria::all();
        $pdf = PDF::loadView('system.categorias.pdf', compact('categoriapdf'));
            return $pdf->download('pdf_categorias.pdf');
    }
}
