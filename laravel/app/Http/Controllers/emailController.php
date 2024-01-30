<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\email;
use Illuminate\Http\Request;
use Exception;

class emailController extends Controller
{


    public static function enviarCodigo($codigoUsuario, $correo)
    {
        try {
            $codigo = $codigoUsuario;
            Mail::to($correo)->send(new email($codigo));
            return "Correo enviado con éxito";
        } catch (Exception $e) {
            return "Error al enviar el correo: " . $e->getMessage();
        }
    }
}
