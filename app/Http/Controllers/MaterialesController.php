<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialesController extends Controller
{
    public function index()
    {
        return view('system.materiales.index');

    }

    public function create()
    {
        return view('system.materiales.create');
    }
}
