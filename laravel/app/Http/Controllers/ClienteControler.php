<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Response;



class ClienteControler extends Controller
{
    function login(Request $request)
    {
        $id = Cliente::where("codigo", intval($request->getContent()))->value("id");
        if ($id == null) {
            $response = response("NO");
        } else {
            $response = response("OK");
            session(["iniciado" => $id]);
        }

        $response->headers->set("Conten-type", "plain/text");
        return $response;
    }

    public function registro(Request $request)
    {
        $datosValidados = $request->validate([
            'correo' => 'required|email',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'nombre' => 'required|string',
        ]);

        $cliente = new Cliente($datosValidados);

        $cliente->save();
        $response = response("OK");
        // Devuelve una respuesta indicando éxito
        $response->headers->set("Conten-type", "plain/text");
        return $response;
    }
}
