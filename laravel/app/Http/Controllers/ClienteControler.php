<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Str;


class ClienteControler extends Controller
{
    function login(Request $request)
    {
        $requestData = $request->json()->all();

        $codigo = $requestData['codigo'];

        $id = Cliente::where("codigo", intval($codigo))->value("id");

        if ($id === null) {
            $response = response()->json(['status' => 'NO']);
        } else {
            $response = response()->json(['status' => 'OK', 'sessionId' => $id]);
            session(["iniciado" => $id]);
        }
        return $response;
    }


    public function registro(Request $request)
    {
        $datosValidados = $request->validate([
            'correo' => 'required|email',
            'direccion' => 'required|string',
            'telefono' => 'required|string|min:9|max:9',
            'nombre' => 'required|string',
        ]);

        do {
            $codigoAleatorio = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        } while (Cliente::where('codigo', $codigoAleatorio)->exists());

        $datosValidados['codigo'] = $codigoAleatorio;

        $cliente = new Cliente($datosValidados);
        $cliente->save();


        return response("OK")->header("Content-Type", "plain/text");
    }
}
