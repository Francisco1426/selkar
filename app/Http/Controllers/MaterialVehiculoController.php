<?php

namespace App\Http\Controllers;

use App\Models\Fase;
use App\Models\MaterialVehiculo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Material;
use App\Models\Vehiculo;
use App\Models\Producto;

class MaterialVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Hola';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.materiales.Modulomateriales.create',[
            'fases' => Fase::select('id','nombre')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialVehiculo  $materialVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialVehiculo $materialVehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialVehiculo  $materialVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialVehiculo $materialVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaterialVehiculo  $materialVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialVehiculo $materialVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialVehiculo  $materialVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialVehiculo $materialVehiculo)
    {
        //
    }

    public function search(Request $request)
    {
        $term = $request->get('term');

        $result = Material::where('nombre', 'LIKE', '%'. $term. '%')
        ->select("nombre")
        ->groupBy("nombre")
        ->get();

        return response()->json($result);
    }

    public function searchvehiculo(Request $request)
    {
        $term = $request->get('term');

        $result = Vehiculo::where('numeroserie', 'LIKE', '%'. $term. '%')
        ->select("numeroserie")
        ->groupBy("numeroserie")
        ->get();

        return response()->json($result);
    }

    public function buscarmaterial(Request $request)
    {
        $material = Material::where('nombre',$request->material)->with('estatus')->first();
        return response()->json( $material );
    }

    public function buscarvehiculo(Request $request)
    {
        $vehiculo = Vehiculo::where('numeroserie',$request->vehiculo)->with('producto')->first();
        return response()->json($vehiculo);
    }
}
