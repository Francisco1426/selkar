<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcesosController extends Controller
{
    public function index()
    {
        return view("system.procesos.index");
    }

    public function create()
    {
        return view("system.procesos.create");
    }


}
