<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProcesosRequest;
use App\Models\Proceso;

class ProcesosController extends Controller
{
    public function index(){
        $procesos = Proceso::paginate();
        return view ('system.procesos.index',compact('procesos'));
    }

    public function create(){
        return view ('system.procesos.create');
    }

    public function store(ProcesosRequest $request)
    {
        $proceso = Proceso::create($request->validated());
                    return redirect()
                    ->route('procesos.index')
                    ->withSuccess("El proceso $proceso->nombre ha sido creado exitosamente");
    }

    public function edit(Proceso $proceso)
    {
        return view('system.procesos.edit', compact('proceso'));
    }

    public function update(Request $request, Proceso $proceso)
    {
        $proceso->nombre = $request -> nombre;
        $proceso->descripcion = $request -> descripcion;
        $proceso->save();
        return redirect()->route('procesos.index');
    }

    public function destroy(Proceso $proceso)
    {
        $proceso->delete();
        return redirect()->route('procesos.index');
    }
}


