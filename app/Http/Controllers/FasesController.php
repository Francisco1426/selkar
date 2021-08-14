<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FaseRequest;
use App\Models\Estatu;
use App\Models\Fase;
use Illuminate\Routing\Controller;
use PDF;

class FasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('ProduccionLogistica');

    }


    public function index()
    {
        return view('system.fases.index');
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

    public function edit(fase $fase){

        return view('system.fases.edit',[
            'fase' => $fase,
            'estatus' => Estatu::select('id','nombre')->get()
        ]);
        // $fase = Fase::findOrFail($id);
        // return view('system.fases.edit', compact('fase'),[
        //     'estatus' => Estatu::select('id', 'nombre')->get()
        // ]);
    }

    public function update(FaseRequest $request, fase $fase)
    {
        $fase->update($request->validated());
        $fase->save();
        return redirect()
            ->route('fases.index')
            ->withSucces("La fase $fase->nombre se modifico satisfactoriamente");

    }


    public function RegistrosDatatables()
    {
        return datatables()
                ->eloquent(
                    Fase::query()
                    ->withTrashed()
                    ->with([
                        'estatus'
                    ])
                )
                ->toJson();
    }

    public function getPdfFases()
    {
        $fasepdf = Fase::all();
        $pdf = PDf::loadView('system.fases.pdf',compact('fasepdf'));
                return $pdf->download('pdf_fases.pdf');
    }
    public function destroy(Fase $fase)
    {
        $message="Desactivada";
       if( sizeof($fase->estatus) < 1 )
        {
           $fase->forceDelete();
           $message = "Eliminada definitivamente";
        }
      $fase->delete();
      if(request()->ajax()){
          return response()->json([
              'fase' => $fase,
              'message' => $message,
          ],201 );
      }
      return redirect ()
            ->route("fases.index")
            ->withSuccess("La fase $fase->nombre se ha dado de baja exitosamente");
    }
    public function activeRecord($id){
        $fase = Fase::onlyTrashed()
            ->find($id)
            ->restore();
        if((request()->ajax())){
            return response()->json([
                'fase' => $fase,
            ],201 );
        }
        return redirect()
        ->route("fases.index")
        ->withSuccess("El producto $fase->nombre se ha dado de baja exitosamente");
}

}
