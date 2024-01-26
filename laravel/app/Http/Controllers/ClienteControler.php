<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Response;



class ClienteControler extends Controller
{
    function sessionCheck() {
        session_start();
        return (isset($_SESSION["logged"]) && $_SESSION["logged"]);
    }
    function index() {

        if (!$this->sessionCheck()) {
            return response()->json(["logged" => false]);
        }

        return response()->json(["logged" => true]);
    }
    function login(Request $request)
    {
        $id = Cliente::where("codigo", intval($request->codigo))->value("id");
                    
        if ($id == null) {
            return response()->json(["logged" => false]);
        }

        session_start();
        $_SESSION["logged"] = true;

        return response()->json(["logged" => true]);
    }

    public function registro(Request $request)
    {
        $logged = true;
        try {
            $datosValidados = $request->validate([
                'correo' => 'required|email',
                'direccion' => 'required|string',
                'telefono' => 'required|string',
                'nombre' => 'required|string',
            ]);
            $cliente = new Cliente($datosValidados);

            if (!$cliente->save()) {
                $logged = false;
            }
            
        } catch (\Exception $e) {
            $logged = false;
        }
        if ($logged) {
            session_start();
            $_SESSION["logged"] = true;
        }

        return response()->json(["logged" => $logged]); 
    }
}
