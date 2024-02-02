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

    Route::get("/categorias", [CategoriaController::class, "index"])->middleware([])->name("categorias.index");
    Route::post("/categorias", [CategoriaController::class, "store"])->middleware([])->name("categorias.store");
    Route::post("/categoriaDestroy/{categoria}", [CategoriaController::class, "destroy"])->middleware([])->name("categorias.destroy");
    Route::post("/categoriaUpdate/{categoria}", [CategoriaController::class, "update"])->middleware([])->name("categorias.update");

    Route::get("/productos", [ProductoController::class, "index"])->middleware([])->name("productos.index");
    Route::get("/productos/view/create", [ProductoController::class, "create"])->middleware([])->name("productos.create");
    Route::get("/productos/filtrar/{producto}", [ProductoController::class, "filtrar"])->middleware([])->name("productos.filtar");
    Route::post("/productosStore", [ProductoController::class, "store"])->middleware([])->name("productos.store");
    Route::post("/productosUpdate/{producto}", [ProductoController::class, "update"])->middleware([])->name("productos.update");
    Route::post("/productosDestroy/{producto}", [ProductoController::class, "destroy"])->middleware([])->name("productos.destroy");

    Route::post("/pedidosInsert", [PedidoCotroller::class, 'store'])->middleware([])->name('pedidos.store'); //NO VA
    Route::get("/pedidos", [PedidoCotroller::class, "index"])->middleware([])->name("pedidos.index");
    Route::get("/pedidos/{filtro}", [PedidoCotroller::class, "  filtro"]);
    Route::get('/pedidos/view/create', [PedidoCotroller::class, 'create'])->name('pedidos.create');
    Route::delete("/pedidos/{pedido}", [PedidoCotroller::class, "destroy"])->middleware([])->name("pedidos.destroy");

    Route::get("/clientes", [ClienteControler::class, "index"])->middleware([])->name("clientes.index");
    Route::post("/clientes", [ClienteControler::class, "store"])->middleware([])->name("clientes.store");
    Route::get('/clientes/create', [ClienteControler::class, 'create'])->name('clientes.create');
    Route::delete("/clientes/{cliente}", [ClienteControler::class, "destroy"])->middleware([])->name("clientes.destroy");
    Route::post("/clientes/aceptar/{cliente}", [ClienteControler::class, "aceptar"])->middleware([])->name("clientes.aceptar");

    Route::get("/formatos", [FormatosController::class, "index"])->middleware([])->name("formato.index");
    Route::get("/formatos/create", [FormatosController::class, "create"])->middleware([])->name("formato.create");
    Route::post("/formatos", [FormatosController::class, "store"])->middleware([])->name("formato.store");
    Route::delete("/formatosDestroy/{formato}", [FormatosController::class, "destroy"])->middleware([])->name("formato.destroy");

    Route::get("/estadisticas", [EstadisticasController::class, "index"])->middleware([])->name("estadisticas.index");

});

require __DIR__ . '/auth.php';
