<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstatusRequest;
use App\Models\Estatu;
use Illuminate\Http\Request;

class EstatusController extends Controller
{
    public function index()
    {
        $estatus = Estatu::all();
        return view('system.estatus.index', compact('estatus'));
    }

    public function create()
    {
        return view('system.estatus.create');
    }
    public function store(EstatusRequest $request)
    {
        $estatus = Estatu::create($request->validated());
                return redirect()
                    ->route('estatus.index')
                    ->withSuccess("El estatus $estatus->nombre ha sisdo creado exitosamente");
    }

}
