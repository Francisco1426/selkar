<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function vista1()
    {
        return view ('vista1');
    }

    public function vista2()
    {
        return view('vista2');
    }


}
