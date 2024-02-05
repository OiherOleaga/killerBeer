<?php

use App\Http\Controllers\ClienteControler;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\PedidoCotroller;
use App\Http\Controllers\ProductoController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormatosController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\ProductoCotroller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('home');

Route::middleware('auth')->group(function () {

    Route::get("/categorias", [CategoriaController::class, "index"])->name("categorias.index");
    Route::post("/categorias", [CategoriaController::class, "store"])->name("categorias.store");
    Route::post("/categoriaDestroy/{categoria}", [CategoriaController::class, "destroy"])->name("categorias.destroy");
    Route::post("/categoriaUpdate/{categoria}", [CategoriaController::class, "update"])->name("categorias.update");

    Route::get("/productos", [ProductoController::class, "index"])->name("productos.index");
    Route::get("/productos/view/create", [ProductoController::class, "create"])->name("productos.create");
    Route::get("/productos/filtrar/{producto}", [ProductoController::class, "filtrar"])->name("productos.filtar");
    Route::post("/productosStore", [ProductoController::class, "store"])->name("productos.store");
    Route::post("/productosUpdate/{producto}", [ProductoController::class, "update"])->name("productos.update");
    Route::post("/productosDestroy/{producto}", [ProductoController::class, "destroy"])->name("productos.destroy");

    Route::post("/pedidosInsert", [PedidoCotroller::class, 'store'])->name('pedidos.store');
    Route::get("/pedidos", [PedidoCotroller::class, "index"])->name("pedidos.index");
    Route::get("/pedidos/{filtro}", [PedidoCotroller::class, "  filtro"]);
    Route::get('/pedidos/view/create', [PedidoCotroller::class, 'create'])->name('pedidos.create');
    Route::delete("/pedidos/{pedido}", [PedidoCotroller::class, "destroy"])->name("pedidos.destroy");

    Route::get("/clientes", [ClienteControler::class, "index"])->name("clientes.index");
    Route::post("/clientes", [ClienteControler::class, "store"])->name("clientes.store");
    Route::get('/clientes/create', [ClienteControler::class, 'create'])->name('clientes.create');
    Route::delete("/clientes/{cliente}", [ClienteControler::class, "destroy"])->name("clientes.destroy");
    Route::post("/clientes/aceptar/{cliente}", [ClienteControler::class, "aceptar"])->name("clientes.aceptar");

    Route::get("/formatos", [FormatosController::class, "index"])->name("formato.index");
    Route::get("/formatos/create", [FormatosController::class, "create"])->name("formato.create");
    Route::post("/formatos", [FormatosController::class, "store"])->name("formato.store");
    Route::delete("/formatosDestroy/{formato}", [FormatosController::class, "destroy"])->name("formato.destroy");

    Route::get("/estadisticas", [EstadisticasController::class, "index"])->name("estadisticas.index");

});

require __DIR__ . '/auth.php';
