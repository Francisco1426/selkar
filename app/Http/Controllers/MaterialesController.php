<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MaterialRequest;
use App\Models\Material;

class MaterialesController extends Controller
{
    public function index()
    {
        $material = Material::all();
        return view('system.materiales.index', compact('material'));
    }

    public function create()
    {
        return view('system.materiales.create');
    }

    public function store(MaterialRequest $request)
    {
        $material = Material::create($request->validated());
        return redirect()
                ->route('materiales.index')
                ->withSuccess("El material $material->nombre ha sido creado exitosamente");
    }
}
