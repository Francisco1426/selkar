<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProcesoRequest;
use App\Models\Estatu;
use App\Models\Proceso;
use Illuminate\Routing\Controller;

class ProcesosController extends Controller
{
    public function index(){
        $procesos = Proceso::paginate();
        return view ('system.procesos.index');
    }

    public function create(){
        return view ('system.procesos.create',[
            'estatus'=> Estatu::select('id','nombre')->get()
        ]);
    }

    public function store(ProcesoRequest $request)
    {
        //dd( $request->all() );
        $proceso = Proceso::create($request->validated());
                    return redirect()
                    ->route('procesos.index')
                    ->withSuccess("El proceso $proceso->nombre ha sido creado exitosamente");
    }

    public function edit($id)
    {
        $proceso = Proceso::findOrFail($id);
        return view ('system.procesos.edit',compact('proceso'),[
            'estatus' => Estatu::select('id','nombre')->get()
        ]);
    }

    public function update(Request $request, $id)
    {
        $proceso = Proceso::findOrFail($id);
        $proceso->nombre = $request -> nombre;
        $proceso->descripcion = $request -> descripcion;
        $proceso->estatus_id = $request-> estatus_id;
        $proceso->save();
        return redirect()->route('procesos.index');
    }

   // public function destroy(Proceso $proceso)     
   // {
      //  $proceso->delete();
      //  return redirect()->route('procesos.index');
    //}

    public function RegistrosDatatables()
    {
        return datatables()
        ->eloquent(
            Proceso::query()
            ->with([
                'estatus'
            ])
        )
        ->toJson();
    }
}


