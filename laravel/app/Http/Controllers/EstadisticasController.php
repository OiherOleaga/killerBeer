<?php

namespace App\Http\Controllers;

use App\Models\Estadisticas;
use Illuminate\Http\Request;
use App\Models\Pedido;


class EstadisticasController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::inRandomOrder()->get();
        $clientes = $pedidos->unique('cliente.id')->pluck('cliente');
        $totalPrecioPedidos = $pedidos->pluck('precio')->sum();
        
        return view('estadisticas.index', compact('pedidos', 'clientes', 'totalPrecioPedidos'));
        
    }
}
