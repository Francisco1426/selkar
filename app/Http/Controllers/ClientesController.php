<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {

        $cliente = Cliente::all();
        return view('system.clientes.index', compact('cliente'));
    }

    public function create()
    {
        return view('system.clientes.create');

    }

    public function store(ClienteRequest $request)
    {
        $cliente = Cliente::create($request->validated());
                    return redirect()
                            ->route('clientes.index')
                            ->withSuccess("El cliente $cliente->nombre ha sido creado exitosamente");
    }

    public function edit(cliente $cliente)
    {
        return view('system.clientes.edit',[
            'cliente' => $cliente,
        ]);
    }

    public function update(ClienteRequest $request, cliente $cliente)
    {
        $cliente->update($request->validated());
        $cliente->save();
        return redirect()
                ->route('clientes.index')
                ->withSucess("El cliente $cliente->nombre ha siso modificado exitosamente");
    }
}
