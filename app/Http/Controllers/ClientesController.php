<?php

namespace App\Http\Controllers;

use App\Models\Estatu;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ClienteRequest;
use PDF;


class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware("Ventas");
    }

    public function index()
    {

        return view('system.clientes.index');
    }

    public function create()
    {
        return view('system.clientes.create', [
            'estatus' => Estatu::select('id', 'nombre')->get()


        ]);
    }
    public function show($id)
    {
        $clientes = Cliente::findOrFail($id);
        return view('system.clientes.show', compact ('clientes'));

    }
    public function store(ClienteRequest $request)
    {
        //dd( $request->all() );

        $cliente = Cliente::create($request->validated());
        return redirect()
            ->route('clientes.index')
            ->withSuccess("El cliente $cliente->razonsocial se guardo correctamente");

    }

    public function edit(cliente $cliente)
    {
        return view('system.clientes.edit', [
            'cliente' => $cliente,
            'estatus' => Estatu::select('id','nombre')->get()
        ]);
    }

    public function update(ClienteRequest $request, cliente $cliente)
    {
        $cliente->update($request->validated());
        $cliente->save();
        return redirect()
            ->route('clientes.index')
            ->withSuccess("El cliente $cliente->razonsocial se modifico correctamente");
    }
    public function destroy(Cliente $cliente)
    {
        $message="Desactivada";
       if( sizeof($cliente->vehiculos) < 1 )
        {
           $cliente->forceDelete();
           $message = "Eliminada definitivamente";
        }
      $cliente->delete();
      if(request()->ajax()){
          return response()->json([
              'cliente' => $cliente,
              'message' => $message,
          ],201 );
      }
      return redirect ()
            ->route("clientes.index")
            ->withSuccess("El cliente $cliente->razonsocial se ha dado de baja exitosamente");
    }
    public function activeRecord($id){
        $cliente = Cliente::onlyTrashed()
            ->find($id)
            ->restore();
        if((request()->ajax())){
            return response()->json([
                'cliente' => $cliente,
            ],201 );
        }
        return redirect()
        ->route("clientes.index")
        ->withSuccess("El producto $cliente->razonsocial se ha dado de baja exitosamente");
}
    public function RegistrosDatatables()
    {
       return datatables()
              ->eloquent(
                    Cliente::query()
                    ->withTrashed()
                    ->with([
                        'estatus'
                    ])
              )
              ->toJson();
    }


    public function getPdfClientes()
    {

            $clientepdf = Cliente::all();
            $pdf = PDF::loadView('system.clientes.pdf', compact('clientepdf'));
            return $pdf->download('pdf_clientes.pdf');

    }

}
