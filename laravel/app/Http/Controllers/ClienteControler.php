<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Response;
use Illuminate\Support\Facades\Hash;


class ClienteControler extends Controller
{
    function login(Request $request) {

        $id = Cliente::where("codigo", intval($request->getContent()))->value("id");
                    
        if ($id == null) {
            return response()->json(["status" => "NO"]);
        } 

        $sessioId = Hash::make($id);

        //file_put_contents(__DIR__ . "/Auth/" . $sessioId, $id);

        //app()->singleton($sessioId, $id);
        return response()->json(["status" => "OK", "sessionId" => $sessioId]);
    }

    function checkSession(Request $request) {
        
        $datos = $request->all();
        /*return response(app($datos["sessionId"]));
        if ($datos == null) {
            return response("NO");
        } else if (!file_exists(__DIR__ . "/Auth/" . $request->cookie("sessionId"))) {
            return response("NO");
        } */    
        return response("OK");
    }
}
