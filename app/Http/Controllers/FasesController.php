<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasesController extends Controller
{
    public function index()
    {
        return view('system.fases.index');
    }

    public function create()
    {
        return view('system.fases.create');
    }
}
