<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoCotroller extends Controller
{
    public function index() {
        return view("pedidos.index", ["pedidos" => Pedido::all()]);
    }

    public function filtro(string $filtro) {
        Pedido::where("name", $filtro)->delete();
    }
}
