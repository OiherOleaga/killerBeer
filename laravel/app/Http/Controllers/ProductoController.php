<?php

namespace App\Http\Controllers;


use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        $productos = Producto::query();

        if (!empty($search)) {
            $productos->where('nombre', 'LIKE', "%$search%");
        }

        $productos = $productos->paginate(5);

        return view("productos.index",  compact('productos', 'search'), [
            "productos" => Producto::all(),
            "categorias" => Categoria::all(),
        ]);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'id_categoria' => 'required',
            'foto' => 'required'
        ]);

        $ruta = "/fotosProducto/" . md5($datos["nombre"]);

        if (!($datos["foto"] = ImgController::descargarImagen($datos["foto"], $ruta))) {
            return redirect(route('productos.index'))->withErrors(["Error al subir la foto"]);
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

    public function destroy(Producto $producto)
    {

        $producto->delete();
        return redirect(route("productos.index"));
    }

    public function filtrar(Producto $producto)
    {


        return response()->json([
            "formatos" => $producto->formatos
        ]);
    }


    public function update(Producto $producto, Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'id_categoria' => 'required',
        ]);

        $producto->nombre = $datos["nombre"];
        $producto->descripcion = $datos["descripcion"];
        $producto->id_categoria = $datos["id_categoria"];


        if ($request["foto"]) {
            if (!($datos["foto"] = ImgController::descargarImagen($request["foto"], "/fotosProducto/" . md5($datos["nombre"])))) {
                return redirect(route('productos.index'))->withErrors(["Error al subir la foto"]);
            }
        }

        $producto->foto = $datos["foto"];

        $producto->save();

        return redirect(route("productos.index"));
    }

    public function categoriasProducto()
    {
        if (!ClienteControler::sessionCheck()) {
            return response()->json(["logged" => false]);
        }

        $categorias = Categoria::all();

        $filas = [];
        foreach ($categorias as $categoria) {
            array_push($filas, ["categoria" => $categoria["nombre"], "productos" => Producto::inRandomOrder()->limit(4)->where("id_categoria", "=", $categoria["id"])->get()]);
        }

        return response()->json([
            "logged" => true,
            "categoriasProducto" => $filas
        ]);
    }

    public function getPedido(Request $request) {

        if (!ClienteControler::sessionCheck()) {
            return response()->json(["logged" => false]);
        }


        $pedido = DB::select(
            "SELECT p.*, f.* FROM productos p
            JOIN formato_producto fp ON p.id = fp.id_producto
            JOIN formatos f on f.id = fp.id_formato
        ");

        return response()->json([
            "logged" => true,
            "pedido" => $pedido
        ]);
    }
}
