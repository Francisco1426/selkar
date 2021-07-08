<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class ProcesosController extends Controller
{
    public function index()
    {
        return view("system.procesos.index");
    }

    public function create()
    {
        return view("system.procesos.create");
    }


}
=======
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

    public function edit(Proceso $procesos)
    {
        return view('system.procesos.edit', [
            'procesos' => $procesos,
        ]);
    }

    public function update(ProcesosRequest $request, procesos $procesos)
    {
        $procesos->update($request->validated());
        $procesos->save();
        return redirect()
                ->route('procesos.index')
                ->withSuccess("El proceso $procesos->nombre ha sido modificado exitosamente");
    }
}


>>>>>>> Eduardo
