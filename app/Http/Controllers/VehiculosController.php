<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Vehiculo;
use App\Models\Cliente;
use App\Models\Producto;
use App\Http\Requests\VehiculoRequest;

class VehiculosController extends Controller
{
    public function index()
    {
        $vehiculo = Vehiculo::all();
        return view('system.vehiculos.index', compact('vehiculo'));
    }

    public function create()
    {
        return view('system.vehiculos.create',[
            'clientes' => Cliente::select('id','representante')->get(),
            'productos' => Producto::select('id','nombre')->get()
        ]);
    }

    public function store(VehiculoRequest $request)
    {
    
        $vehiculo = Vehiculo::create($request->validated());
        return redirect()
            ->route('vehiculos.index')
            ->withSuccess("El vehiculo $vehiculo->nombre ha sido dado de alta satisfactoriamente");

    }

    public function edit(vehiculo $vehiculo)
    {
        return view('system.vehiculos.edit',[
            'vehiculo' => $vehiculo,
            'clientes' => Cliente::select('id','representante')->get(),
            'productos' => Producto::select('id','nombre')->get(),
        ]);
    }

    public function update(VehiculoRequest $request, vehiculo $vehiculo)
    {
        $vehiculo->update($request->validated());
        $vehiculo->save();
        return redirect()
            ->route('vehiculos.index')
            ->withSuccess("El vehiculo $vehiculo->nombre se modifico correctamente");
    }

    public function RegistrosDatatables()
    {
        return datatables()
                ->eloquent(
                    Vehiculo::query()
                    ->with([
                        'cliente'
                    ])
                )
                ->toJson();
    }
}
