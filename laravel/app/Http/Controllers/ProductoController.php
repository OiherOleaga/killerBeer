<?php

namespace App\Http\Controllers;


use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function obtenerFilasAleatorias()
    {
        $filas = producto::inRandomOrder()->limit(4)->get();

        return response()->json($filas);
    }
}
