<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\formato_producto;
use App\Models\FormatoPedido;
use Illuminate\Http\Request;

class PedidoCotroller extends Controller
{
    public function index(Request $request)
    {
        $estado = $request->input('estado');

        $pedidos = Pedido::query();

        if (!empty($estado)) {
            $estado = ucwords(strtolower($estado));
            $pedidos->where('estado', $estado);
        }

        $pedidos = $pedidos->paginate(3);

        return view('pedidos.index', compact('pedidos', 'estado'));
    }


    public function create()
    {
        $clientes = Cliente::all();
        $productos = Producto::all();
        $formatos = formato_producto::all();

        return view('pedidos.create', compact('clientes', 'productos', 'formatos'));
    }






    public function store(Request $request)
    {
        $pedido = $request->validate([
            'pedido.id_cliente' => 'required|exists:clientes,id',
            'pedido.estado' => 'required|string|max:255',
            'pedido.fecha_entrega' => 'required|date',
            'pedido.precio' => 'required|max:8',
        ]);



        // Crear un nuevo pedido en la base de datos
        $pedido = Pedido::create($pedido['pedido']);


        // Procesar la inserción de los productos asociados al pedido
        $productos = $request->input('productos');

        foreach ($productos as $producto) {
            $producto['id_pedido'] = $pedido->id;
            $producto["id_formato_producto"] = formato_producto::where("id_formatos", "=", $producto["id_formatos"])
                ->where("id_productos", "=", $producto["id_productos"])
                ->firstOrFail()
                ->id;
            FormatoPedido::create($producto);
        }

        return response()->json(["ok" => true]);
    }


    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);

        return view('pedidos.show', ['pedido' => $pedido]);
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);

        return view('pedidos.edit', ['pedido' => $pedido]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido updated successfully');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido deleted successfully');
    }

    public function filtro(string $filtro)
    {
        Pedido::where("name", $filtro)->delete();
    }
}
