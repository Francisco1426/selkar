<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cotizacion;
use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CotizacionesController extends Controller
{
    public function index()
    {
        return view('system.cotizaciones.index', [
            'cotizaciones' => Cotizacion::all()
        ]);
    }

    public function create()
    {
        return view('system.cotizaciones.create');
    }

    public function buscarcliente(Request $request)
    {
        $cliente = Cliente::where('razonsocial',$request->cliente)->first();
        return response()->json($cliente);
    }


    public function searchcliente(Request $request)
    {
        $term = $request->get('term');

        $result = Cliente::where('razonsocial', 'LIKE', '%'. $term. '%')
        ->select("razonsocial")
        ->groupBy("razonsocial")
        ->get();

        return response()->json($result);
    }
    public function buscarproducto(Request $request)
    {
        $cliente = Producto::where('nombre',$request->producto)->first();
        return response()->json($cliente);
    }


    public function searchproducto(Request $request)
    {
        $term = $request->get('term');

        $result = Producto::where('nombre', 'LIKE', '%'. $term. '%')
        ->select("nombre")
        ->groupBy("nombre")
        ->get();

        return response()->json($result);
    }

    public function store(Request $request) {
        return DB::transaction(function () use($request) {
            $cotizacion = Cotizacion::create($request->all());

            foreach($request->productos_id as $index => $productoId){
                $cotizacion->cotizaciones()->create([
                    'cantidad' => $request->productos_unidad[$index],
                    'fecha' => Carbon::now(),
                    'precio_unitario' => $request->productos_precio_publico[$index],
                    'descripcion' => 'descripcion',
                    'descuento' => $request->productos_descuento[$index],
                    'precio_total' => $request->productos_total[$index],
                    'vigencia' => $request->productos_tiempo_entrega[$index],
                    'tiempo_estimado' => $request->productos_tiempo_entrega[$index],
                    'cotizacion_id' => $cotizacion->id,
                    'producto_id' => $productoId
                ]);
            }
            return redirect()->route('cotizaciones.index')
                ->withSuccess("La cotizacion $cotizacion->titulo ha sido dada de alta exitosamente");
        });

    }

}
