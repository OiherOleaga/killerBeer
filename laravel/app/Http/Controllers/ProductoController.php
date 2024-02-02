<?php

namespace App\Http\Controllers;


use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Formato;
use App\Models\formato_producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        $formatos = Formato::all();
        $formatosProductos = formato_producto::all();
        $productos = Producto::query();

        if (!empty($search)) {
            $productos->where('nombre', 'LIKE', "%$search%");
        }

        $productos = $productos->paginate(5);

        return view("productos.index",  [
            "productos" => $productos,
            "categorias" => Categoria::all(),
            "formatos" => $formatos,
            "formatosProductos" => $formatosProductos,
            "search" => $search
        ]);
    }


    public function create()
    {
        return view('productos.create', ["categorias" => Categoria::all()]);
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
        $formatosConPrecio = $producto->formatos()->withPivot('precio')->get();

        $data = [];

        foreach ($formatosConPrecio as $formato) {
            $data[] = [
                'id' => $formato->id,
                'tipo' => $formato->tipo,
                'precio' => $formato->pivot->precio
            ];
        }
        return response()->json([
            "formatos" => $data
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
            $producto->foto = $datos["foto"];
        }


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
            array_push($filas, ["categoria" => $categoria["nombre"], "productos" => Producto::inRandomOrder()->where("id_categoria", "=", $categoria["id"])->get()]);
        }

        return response()->json([
            "logged" => true,
            "categoriasProducto" => $filas
        ]);
    }

    public function getPedido(Request $request)
    {

        if (!ClienteControler::sessionCheck()) {
            return response()->json(["logged" => false]);
        }

        $conditions = "";
        $length = count($request["pedido"]);

        for ($i = 0; $i < $length; $i++) {
            $conditions .= "p.id = ?" . ($length - 1 !== $i ? " OR " : "");
        }


        $pedido = DB::select(
            "SELECT p.*,
            JSON_ARRAYAGG(
                JSON_OBJECT(
                    'tipo', f.tipo,
                    'precio', fp.precio
                )
            ) AS formatos,
            \"1\" as unidades
            FROM productos p
            LEFT JOIN formatos_productos fp ON p.id = fp.id_productos
            LEFT JOIN formatos f ON f.id = fp.id_formatos
            WHERE $conditions
            GROUP BY p.id",
            $request["pedido"]
        );

        return response()->json([
            "logged" => true,
            "pedido" => $pedido
        ]);
    }
}
