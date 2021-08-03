<?php

namespace App\Http\Controllers;

use App\Models\Estatu;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ClienteRequest;
use PDF;


class ClientesController extends Controller
{
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
    public function show()
    {
        //return  view('system.clientes.edit');
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

    public function RegistrosDatatables()
    {
       return datatables()
              ->eloquent(
                    Cliente::query()
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
