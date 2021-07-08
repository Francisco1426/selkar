<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidad;
use App\Http\Requests\UnidadRequest;

class UnidadesmedidaController extends Controller
{
    public function index()
    {
        $unidades = Unidad::paginate();
        return view('system.unidadesmedida.index',compact('unidades'));
    }

    public function create()
    {
        return view('system.unidadesmedida.create');
    }

    public function store(UnidadRequest $request)
    {
        $unidad = Unidad::create($request->validated());
        return redirect()
        ->route('unidadesmedida.index')
        ->withSuccess("La unidad $unidad->nombre ha sido creado satisfactoriamente");
    }

}
