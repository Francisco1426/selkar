<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstatuRequest; 
use App\Models\Estatu;
use Illuminate\Routing\Controller;


class EstatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('ProduccionLogistica');

    }
    

    public function index(){
        $estatus = Estatu::all();
        return view ('system.estatus.index', compact('estatus'));
    }

    public function create(){
        return view ('system.estatus.create');
    }

    public function store(EstatuRequest $request){

            $estatu = Estatu::create($request->validated());
            return redirect()
            ->route('estatus.index')
            ->withSuccess("El estatus $estatu->nombre ha sido dado de alta satisfactoriamente");

    }

    public function edit(estatu $estatus){

        return view('system.estatus.edit',[
            'estatu' => $estatus
        ]);
        // $estatu = Estatu::findOrFail($id);
        // return view ('system.estatus.edit',compact('estatu'));
    }

    public function update(EstatuRequest $request, estatu $estatus){

        $estatus->update($request->validated());
        $estatus->save();
        return redirect()
            ->route('estatus.index')
            ->withSuccess("El estatu $estatus->nombre se modifico satisfactoriamente");
        // $estatu = Estatu::findOrFail($id);
        // $estatu -> nombre = $request -> nombre;
        // $estatu -> descripcion = $request -> descripcion;
        // $estatu -> save();
        // return redirect()->route('estatus.index');
    }

    // public function destroy($id)
    // {
    //     $estatu = Estatu::findOrFail($id);
    //     $estatu->delete();
    //     return redirect()->route('estatus.index');
    // }

    public function RegistrosDatatables()
    {
        return datatables()
                ->eloquent(
                    Estatu::query()
                )
                ->toJson();
    }
}
