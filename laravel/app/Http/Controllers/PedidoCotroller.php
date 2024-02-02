<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\formato_producto;
use App\Models\FormatoPedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $pedidos = $pedidos->paginate(10);

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
        //return response()->json($request->all());
        $validatedData = $request->validate([
            'id_cliente' => 'required',
            'estado' => 'required|string|max:255',
            'fecha_entrega' => 'required|date',
            'precio' => 'required|max:8',
        ]);


        $request->validate([
            'id_producto' => 'required|array',
            'id_producto.*' => 'required|exists:productos,id',
            'id_formato' => 'required|array',
            'id_formato.*' => 'required|numeric',
            'unidades' => 'required|array',
            'unidades.*' => 'required|numeric',
            'precios' => 'required|array',
            'precios.*' => 'required|numeric',
        ]);


        $idPedido = Pedido::create($validatedData)->id;

        for ($i = 00; $i < count($request['id_producto']); $i++) {
            DB::statement(
                'INSERT INTO formatos_pedidos (id_pedido, id_formato_producto, precio, cantidad, created_at, updated_at)
                values (?, (SELECT ID FROM formatos_productos WHERE id_productos = ? AND id_formatos = ? ), ?, ?, sysdate(), sysdate())',
                [$idPedido, $request['id_producto'][$i], $request['id_formato'][$i], $request['precios'][$i], $request['unidades'][$i]]
            );
        }

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
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
