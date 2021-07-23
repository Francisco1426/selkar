<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InicioController extends Controller
{
    public function Inicio()
    {
        return view('Inicio');
    }
}
