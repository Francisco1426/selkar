<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MaterialRequest;
use App\Models\Estatu;
use App\Models\Material;
use Illuminate\Routing\Controller;


class MaterialesController extends Controller
{
    public function __construct()
    {
        $this->middleware('ProduccionLogistica');

    }



    public function index()
    {
        return view('system.materiales.index');

    }

    public function create()
    {
        return view('system.materiales.create', [
            'estatus' => Estatu::select('id','nombre')->get()
        ]);
    }

    public function store(MaterialRequest $request)
    {
        $material = Material::create($request->validated());
        return redirect()
                ->route('materiales.index')
                ->withSuccess("El material $material->nombre ha sido dado de alta satisfactoriamente");
    }

    public function edit(material $materiale)
    {
        return view('system.materiales.edit',[
            'material' => $materiale,
            'estatus' => Estatu::select('id','nombre')->get()
        ]);


    }

    public function show($id)
    {
        $material = Material::findOrFail($id);
        // dd($material);
        return view('system.materiales.show', compact('material'));
    }

    public function update(MaterialRequest $request, material $materiale)
    {

        $materiale->update($request->validated());
        $materiale->save();
        return redirect()
            ->route('materiales.index')
            ->withSuccess("El material $materiale->nombre se modifico satisfactoriamente");

        // $material = Material::findOrFail($id);
        // $material->clave = $request->clave;
        // $material->nombre = $request->nombre;
        // $material->medida = $request->medida;
        // $material->tipomaterial = $request->tipomaterial;
        // $material->existente = $request->existente;
        // $material->descripcion = $request->descripcion;
        // $material->estatus_id = $request->estatus_id;
        // $material->save();
        // return redirect()->route('materiales.index');
    }

    // public function destroy($id)
    // {
    //     $material = Material::findOrFail($id);
    //     $material->delete();
    //     return redirect()->route('materiales.index');
    // }

    public function RegistrosDatatables()
    {
        return datatables()
                ->eloquent(
                    Material::query()
                    ->with([
                        'estatus'
                    ])
                )
                ->toJson();
    }

    public function search(Request $request)
    {
          $term = $request->get('term');

          $result = Material::where('medida', 'LIKE', '%'. $term. '%')
          ->select("medida")
          ->groupBy("medida")
          ->get();

          return response()->json($result);

    }


}
