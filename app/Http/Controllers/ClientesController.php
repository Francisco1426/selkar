<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        return view('system.clientes.index');
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

}
