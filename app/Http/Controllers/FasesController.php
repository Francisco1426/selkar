<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FaseRequest;
use App\Models\Estatu;
use App\Models\Fase;

class FasesController extends Controller
{
    public function index()
    {
        $fases = Fase::all();
        return view('system.fases.index', compact('fases'));
    }

    public function create()
    {
        return view('system.fases.create',[
            'estatus' => Estatu::select('id','nombre')->get()
        ]);
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
        return view('system.fases.edit', compact('fase'),[
            'estatus' => Estatu::select('id', 'nombre')->get()
        ]);
    }

    public function update(FaseRequest $request, $id)
    {
        $fase = Fase::findOrFail($request->validated(), $id);
        $fase->nombre = $request->nombre;
        $fase->descripcion = $request->descripcion;
        $fase->estatus_id = $request->estatus_id;
        $fase->save();
        return redirect()->route('fases.index');
    }

    // public function destroy($id)
    // {
    //     $fase = Fase::findOrFail($id);
    //     $fase->delete();
    //     return redirect()->route('fases.index');

    // }

    public function RegistrosDatatables()
    {
        return datatables()
                ->eloquent(
                    Fase::query()
                    ->with([
                        'estatus'
                    ])
                )
                ->toJson();
    }

}
