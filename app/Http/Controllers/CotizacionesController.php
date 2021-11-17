<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cotizacion;
use Illuminate\Http\Request;

class CotizacionesController extends Controller
{
    public function index()
    {
        return view('system.cotizaciones.index');
    }

    public function create()
    {
        return view('system.cotizaciones.create');
    }

    public function buscarcliente(Request $request)
    {
        $cliente = Cliente::where('razonsocial',$request->vehiculo);
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
}
