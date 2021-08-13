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

    public function edit(proceso $proceso)
    {
        return view('system.procesos.edit',[
            'proceso' => $proceso,
            'estatus' => Estatu::select('id','nombre')->get()

        ]);
    }

    public function update(ProcesoRequest $request, proceso $proceso)
    {
        $proceso -> update ($request->validated());
        $proceso -> save();
        return redirect()
        ->route('procesos.index')
        ->withSuccess("El proceso $proceso->nombre ha sido modificado satisfactoriamente");
    }

   public function destroy(Proceso $proceso)
   {
       $message = "Desactiva";
       if(sizeof($proceso->estatus) < 1){
           $proceso->forceDelete();
           $message = "Eliminada definitivamente";
       }

       $proceso->delete();

       if(request()->ajax()){
           return response()->json([
               'proceso' => $proceso,
               'message' => $message,
           ],201);
       }
       return redirect()
       ->route('procesos.index')
       ->withSucces("El proceso $proceso->nombre se ha dado de baja exitosamente");
    }

    public function activeRecord($id)
    {
        $proceso = Proceso::onlyTrashed()
            ->find($id)
            ->restore();

        if(request()->ajax()){
            return response()->json([
                'proceso' => $proceso,
            ],201);
        }

        return redirect()
            ->route('procesos.index')
            ->withSuccess("El proceso $proceso->nombre se ha dado de baja exitosamente");
    }

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


