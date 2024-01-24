<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Response;

class ClienteControler extends Controller
{
    function login(Request $request) {
        $cliente = Cliente::where("codigo", $request->getContent());
        $response = response("OK")->json($cliente);
        //$response->headers->set("Conten-type", "plain/text");
        return $response;
    }
}
