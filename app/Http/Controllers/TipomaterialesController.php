<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipomaterialesController extends Controller
{
    public function index()
    {
        return view('system.tipomateriales.index');
    }

    public function create()
    {
        return view('system.tipomateriales.create');
    }
}
