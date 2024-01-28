<?php

namespace App\Http\Controllers;


use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index() {
        return view("productos.index", ["productos" => Producto::all(), "categorias" => Categoria::all()]);
    }

    public function store(Request $request) { 
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'id_categoria' => 'required',
            'foto' => 'required'
        ]);

        $datos["foto"] = ImgController::descargarImagen($datos["foto"], __DIR__ . "/../../../public/fotosProducto/". bcrypt($datos["nombre"]));

        print_r($datos);
        exit;
        if ($datos["foto"]) {
            // error
            //return redirect()->route('productos.index')->with('error', $e->getMessage());
        }

        Producto::create($datos);
    
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente');
    }
    public function obtenerFilasAleatorias()
    {
        $filas = Producto::inRandomOrder()->limit(4)->get();

        return response()->json($filas);
    }
}
