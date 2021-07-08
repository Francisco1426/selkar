<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialesController extends Controller
{
    public function index()
    {
        $materiales = Material::all();
        return view('system.materiales.index', compact('materiales'));

    }

    public function create()
    {
        return view('system.materiales.create');
    }
    public function store(MaterialRequest $request)
        {
            $materiales = Material::create($request->validated());
            return redirect()
                    ->route('materiales.index')
                    ->withSuccess("El material $materiales->nombre se creo exitosamente");
        }
}
