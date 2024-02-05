<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        return view("categorias.index", ["categorias" => Categoria::all()]);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        Categoria::create($datos);

        return redirect(route("categorias.index"));
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect(route("categorias.index"));
    }

    public function update(Categoria $categoria, Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        $categoria->nombre = $request->nombre;
        $categoria->save();
        return redirect(route("categorias.index"));
    }
}
