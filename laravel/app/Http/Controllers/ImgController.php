<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgController extends Controller
{
    public static function descargarImagen($img, $ruta) {

        if ($img == "" || !($extension = ImgController::analizarImg($img))) {
            return false;
        }
        
        //$rutaImg = urlencode($ruta . "." . $extension);
        $rutaImg = $ruta . "." . $extension;
        file_put_contents(".$rutaImg", base64_decode($img));

        $url = "http://localhost";
        return $url . $rutaImg;
    }
    public static function analizarImg(&$img) {
        $extension = "";
        if ($img[10] != "/") {
            return false;
        }
        for ($i = 11; $i < 23; $i++) {
            if ($img[$i] == ";") {
                $img = substr($img, $i + 8);
                return $extension;
            }
            $extension .= $img[$i];
        }
        return false;
    }
}
