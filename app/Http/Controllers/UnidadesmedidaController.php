<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadesmedidaController extends Controller
{
    public function index()
    {
        return view('system.unidadesmedida.index');
    }
    public function create()
    {
        return view('system.unidadesmedida.create');
    }
}
