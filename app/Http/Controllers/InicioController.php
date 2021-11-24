<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estatu;
use App\Models\Material;
use App\Models\Producto;
use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class InicioController extends Controller
{
    public function Inicio()
    {
        $cantidadempleados = User::count();
        $cantidadvehiculos = Vehiculo::count();
        $cantidadmateriales = Material::count();

        return view('Inicio', 
        ['cantidadempleados' => $cantidadempleados,
         'cantidadvehiculos' => $cantidadvehiculos,
         'cantidadmateriales' => $cantidadmateriales,
        ]);

    }

    public function obtenercategorias()
    {
        $categorias = Categoria::select('nombre','id')->get()
        ->each(function($categoria){
            $categoria->productos_cantidad = Producto::where('categorias_id', $categoria->id)->count();
            return $categoria;
        });

        return response()->json($categorias);
    }

    public function obtenerestatus()
    {
        $estatus = Estatu::select('nombre','id')->get()
        ->each(function($estatus){
            $estatus->materiales_activo = Material::where('estatus_id', $estatus->id)->count();
            return $estatus;
        });

        return response()->json($estatus);
    }

    
}
