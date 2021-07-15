<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MaterialRequest;
use App\Models\Estatu;
use App\Models\Material;



class MaterialesController extends Controller
{
    public function index()
    {
        $materiales = Material::all();
        return view('system.materiales.index', compact('materiales'));

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

    public function edit( $id)
    {
       $material = Material::findOrFail($id);
       return view('system.materiales.edit',compact('material'),[
           'estatus' => Estatu::select('id', 'nombre')->get()
       ]);
    }

    public function show()
    {

    }

    public function update(MaterialRequest $request, $id)
    {
        $material = Material::findOrFail($id);
        $material->nombre = $request->nombre;
        $material->medida = $request->medida;
        $material->tipomaterial = $request->tipomaterial;
        $material->descripcion = $request->descripcion;
        $material->estatus_id = $request->estatus_id;
        $material->save();
        return redirect()->route('materiales.index');
    }

    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        $material->delete();
        return redirect()->route('materiales.index');
    }

    public function autocomplete(Request $request)
    {   
        $material = Material::select("medida")
                                ->where("medida","LIKE","%{$request->terms}%")
                                ->get();
        return response()->json($material);
    }



   

}
