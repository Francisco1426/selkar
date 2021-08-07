<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use App\Models\User;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('system.usuarios.index', compact('usuarios'));
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
        ->withSuccess("El usuario $usuario->nombre ha sido dado de alta satisfactoriamente");
    }

    public function edit(user $usuario)
    {
        return view('system.usuarios.edit',[
            'user' => $usuario
        ]);
    }

    public function update(UsuarioRequest $request, user $usuario)
    {
        $usuario -> update($request -> validated());
        $usuario -> save();
        return redirect()
        -> route('usuarios.index')
        ->withSuccess("El usuario $usuario->nombre se modifico satisfactoriamente");
    }
}
