<?php

use App\Http\Controllers\ClienteControler;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoCotroller;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
})->middleware([])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get("/categorias", [CategoriaController::class, "index"])->middleware([])->name("categorias.index");


Route::post("/categorias", [CategoriaController::class, "store"])->middleware([])->name("categorias.store");

Route::post("/categoriaDestroy/{categoria}", [CategoriaController::class, "destroy"])->middleware([])->name("categorias.destroy");

Route::post("/categoriaUpdate/{categoria}", [CategoriaController::class, "update"])->middleware([])->name("categorias.update");


Route::get("/productos", [ProductoController::class, "index"])->middleware([])->name("productos.index");

Route::post("/productos", [ProductoController::class, "store"])->middleware([])->name("productos.store");

Route::get("/pedidos", [PedidoCotroller::class, "index"])->middleware([])->name("pedidos.index");



Route::get("pedidos/{filtro}", [PedidoCotroller::class, "filtro"]);

Route::get("/clientes", [ClienteControler::class, "index"])->middleware([])->name("clientes.index");
Route::post("/clientes", [ClienteControler::class, "store"])->middleware([])->name("clientes.store");
Route::post("/clientes", [ClienteControler::class, "store"])->middleware([])->name("clientes.store");
Route::get('/clientes/create', [ClienteControler::class, 'create'])->name('clientes.create');
Route::delete("/clientes/{cliente}", [ClienteControler::class, "destroy"])->middleware([])->name("clientes.destroy");



require __DIR__ . '/auth.php';
