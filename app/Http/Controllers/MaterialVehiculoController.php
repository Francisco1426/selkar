<?php

namespace App\Http\Controllers;

use App\Models\Fase;
use App\Models\MaterialVehiculo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Material;
use App\Models\Vehiculo;
use App\Models\Producto;
use App\Http\Requests\ModuloVehiculoRequest;
use Illuminate\Auth\Events\Validated;

class MaterialVehiculoController extends Controller
{
  
    public function index()
    {
        $vehiculo = MaterialVehiculo::all(); 
        return view('system.materiales.Modulomateriales.index', compact('vehiculo'));
    }

    
    public function create()
    {
        return view('system.materiales.Modulomateriales.create',[
            'fases' => Fase::select('id','nombre')->get()
        ]);
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(MaterialVehiculo $materialVehiculo)
    {
        //
    }

   
    public function edit($vehiculo)
    {
        $vehiculo= Vehiculo::findOrFail($vehiculo)->with('materialVehiculos')->first();
        return view('system.materiales.Modulomateriales.edit',[
            'fases' => Fase::select('id','nombre')->get(),
            'vehiculo' => $vehiculo
        ]);
    }

    
    public function update(Request $request, MaterialVehiculo $materialVehiculo)
    {
        
    }

    
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
    
    public function guardar(ModuloVehiculoRequest $request)
    {
        $vehiculo = Vehiculo::findOrFail($request->vehiculo_id);
        foreach($request->id_material as $key => $id_material)
        $vehiculo->materialVehiculos()->attach(
            $request->id_material[$key],[
                'cantidad' => $request->cantidad_material[$key],
                'observaciones' => $request->observaciones_material[$key],
                'fecha' => $request->fecha_material[$key],
                'fase_id' => $request->fases_material[$key],
                ]
        );
        return redirect()
                ->route('Modulomateriales.index');
    }

    public function RegistrosDatatables()
    {
        return datatables()
                ->eloquent(
                    Vehiculo::query()
                    ->join('material_vehiculos','material_vehiculos.vehiculo_id','vehiculos.id')
                    ->join('materiales','materiales.id','material_vehiculos.material_id')
                    ->join('fases','fases.id','material_vehiculos.fase_id') 
                    // ->groupBy('vehiculo.id')
                    ->select(['vehiculos.id as vehiculo_id',
                            'vehiculos.nombre as nombre_vehiculo',
                            'materiales.id as material_id',
                            'materiales.nombre as nombre_material',
                            'fases.id as fase_id',
                            'fases.nombre as nombre_fase',
                    ])

                )
                ->toJson();
    }

    public function editar(ModuloVehiculoRequest $request)
    {
        $vehiculo = Vehiculo::findOrFail($request->vehiculo_id);
        foreach($request->id_material as $key => $id_material)
        $vehiculo->materialVehiculos()->updateExistingPivot(
            $request->id_material[$key],[
                'cantidad' => $request->cantidad_material[$key],
                'observaciones' => $request->observaciones_material[$key],
                'fecha' => $request->fecha_material[$key],
                'fase_id' => $request->fases_material[$key],
                ]
        );
        $vehiculo->save();
        return redirect()
                ->route('Modulomateriales.index');
    }

}
 