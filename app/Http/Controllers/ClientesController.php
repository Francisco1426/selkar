<?php

namespace App\Http\Controllers;

use App\Models\Estatu;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ClienteRequest;


class ClientesController extends Controller
{
    public function index()
    {

        $cliente = Cliente::all();
        return view('system.clientes.index', compact('cliente'));
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
            ->route('clientes.index');

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
            ->route('clientes.index');
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

}
