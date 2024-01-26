<?php

use App\Http\Controllers\ClienteControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/login", [ClienteControler::class, "login"]);

Route::post("/register", [ClienteControler::class, "registro"]);

<<<<<<< HEAD
Route::post("/", [ClienteControler::class, "index"]);

Route::get("/session", [ClienteControler::class, "session"]);
=======
Route::post("/session", [ClienteControler::class, "checkSession"]);

Route::post("/cervezasMain", [ProductoController::class, "cargar"]);
>>>>>>> 688936b7e964cef37abac6a06e06427c81a5f44f
