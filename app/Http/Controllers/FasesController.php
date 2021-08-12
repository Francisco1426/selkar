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

}
