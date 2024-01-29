<?php

namespace App\Http\Controllers;


use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{

    public function index()
    {
        return view("productos.index", ["productos" => Producto::all(), "categorias" => Categoria::all()]);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'id_categoria' => 'required',
            'foto' => 'required'
        ]);

//       die($datos["id_categoria"]);

        $ruta = "/fotosProducto/" . md5($datos["nombre"]);
        
        if (!($datos["foto"] = ImgController::descargarImagen($datos["foto"], $ruta))) {
            // error
            //return redirect()->route('productos.index')->with('error', $e->getMessage());
        }

        Producto::create($datos);

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente');
    }

    public function cargar()
    {
        if (!ClienteControler::sessionCheck()) {
            return response()->json(["logged" => false]);
        }

        $filas = Producto::inRandomOrder()->limit(4)->get();

        return response()->json([
            "logged" => true,
            "productos" => $filas
        ]);
    }

    public function destroy(Producto $producto) {

        $producto->delete();
        return redirect(route("productos.index"));
    }

    public function update(Producto $producto, Request $request) {
        //$producto->
    } 
}
