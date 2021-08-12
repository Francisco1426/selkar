<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UsuarioRequest;
use App\Http\Requests\UsuarioUpdateRequest;
use GuzzleHttp\Middleware;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        return view('system.usuarios.index');
    }

    public function create()
    {
        return view('system.usuarios.create');
    }

    public function store(UsuarioRequest $request)
    {
        $usuario = User::create($request->validated());
        return redirect()
            ->route('usuarios.index')
            ->withSuccess("El usuario $usuario->name ha sido dado de alta satisfactoriamente");
    }

    public function edit(User $usuario)
    {
        return view('system.usuarios.edit',[
            'usuario' => $usuario,
        ]);
    }

    public function update(UsuarioUpdateRequest $request, User $usuario)
    {
        $usuario->update($request->validated());
        $usuario->save();
        return redirect()
            ->route('usuarios.index')
            ->withSuccess("El usuario $usuario->name se modifico satisfactoriamente");
    } 

    public function RegistrosDatatables()
    {
        return datatables()
            ->eloquent(
                User::query()
            )
            ->toJson();
    }
    
}
