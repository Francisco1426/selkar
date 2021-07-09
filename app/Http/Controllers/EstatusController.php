<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstatuRequest;
use App\Models\Estatu;

class EstatusController extends Controller
{
    public function index(){
        $estatus = Estatu::all();
        return view ('system.estatus.index', compact('estatus'));
    }

    public function create(){
        return view ('system.estatus.create');
    }

    public function store(EstatuRequest $request){

            $estatu = Estatu::create($request->validated());
            return redirect()
            ->route('estatus.index')
            ->withSuccess("El estatus $estatu->nombre ha sido dado de alta satisfactoriamente");

    }

    public function edit($id){
        $estatu = Estatu::findOrFail($id);
        return view ('system.estatus.edit',compact('estatu'));
    }

    public function update(Request $request, $id){
        $estatu = Estatu::findOrFail($id);
        $estatu -> nombre = $request -> nombre;
        $estatu -> descripcion = $request -> descripcion;
        $estatu -> save();
        return redirect()->route('estatus.index');
    }
}
