<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FaseRequest;
use App\Models\Fase;
use Illuminate\Routing\Controller;

class FasesController extends Controller
{
    public function index()
    {
        $fases = Fase::all();
        return view('system.fases.index', compact('fases'));
    }

    public function create()
    {
        return view('system.fases.create');
    }

    public function store(FaseRequest $request)
    {
        $fase = Fase::create($request->validated());
        return redirect()
                ->route('fases.index')
                ->withSuccess("La fase $fase->nombre ha sido dada de alta satisfactoriamente");
    }

    public function edit($id){
        $fase = Fase::findOrFail($id);
        return view('system.fases.edit', compact('fase'));
    }

    public function update(Request $request, $id)
    {
        $fase = Fase::findOrFail($id);
        $fase->nombre = $request->nombre;
        $fase->descripcion = $request->descripcion;
        $fase->save();
        return redirect()->route('fases.index');
    }

}
