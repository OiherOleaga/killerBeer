<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Formato;
use App\Models\formato_producto;

use Database\Seeders\Formatos;

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
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id',
            'estado' => 'required|string|max:255',
            'fecha_entrega' => 'required|date',
            'precio' => 'required|max:8',
        ]);

        $pedido = Pedido::create($request->all());

        $pedidoID = $pedido->id;

        $productos = $request->input('productos');

        foreach ($productos as $producto) {
        }

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente');
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
