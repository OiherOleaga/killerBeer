<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;


class ClienteControler extends Controller
{

    public static function sessionCheck() {
        session_start();
        return (isset($_SESSION["logged"]) && $_SESSION["logged"]);
    }
    function session()
    {
        if (!self::sessionCheck()) {
            return response()->json(["logged" => false]);
        }

        return response()->json(["logged" => true]);
    }
    function index(Request $request)
    {
        $search = $request->input('search');
        $estado = $request->input('estado');
    
        $clientes = Cliente::query();
    
        if (!empty($search)) {
            $clientes->where('nombre', 'LIKE', "%$search%");
        }
    
        if (!empty($estado)) {
            $estado = ucwords(strtolower($estado));
            $clientes->where('estado', $estado);
        }
    
        $clientes = $clientes->paginate(3);


        return view('clientes.index', compact('clientes', 'search', 'estado'));
    }
    function login(Request $request)
    {
        $id = Cliente::where("codigo", intval($request->codigo))->value("id");

        if ($id == null) {
            return response()->json(["logged" => false]);
        }

        session_start();
        $_SESSION["logged"] = true;
        $_SESSION["id"] = $id;

        return response()->json(["logged" => true]);
    }


    public function registro(Request $request)
    {
        $logged = false;
        try {

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

            if (!$cliente->save()) {
                $logged = false;
            }
        } catch (\Exception $e) {
            return response()->json(["logged" => $logged, "registro" => false]);
        }

        return response()->json(["logged" => $logged, "registro" => true]);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {

        $datosValidados = $request->validate([
            'correo' => 'required|email',
            'direccion' => 'required|string',
            'telefono' => 'required|string|min:9|max:9',
            'nombre' => 'required|string',
            'codigo' => 'required|string|min:9|max:9',
            'estado' => 'required|string',
        ]);

        $cliente = Cliente::create($datosValidados);

        return redirect()->route('clientes.index')->with('success', 'Cliente creada correctamente');
        ;
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente');
    }

    public function aceptar($id)
    {

        $cliente = Cliente::findOrFail($id);
        $cliente->estado = 'aceptado';
        $cliente->save();

        emailController::enviarCodigo($cliente->codigo, $cliente->correo);
        return redirect()->route('clientes.index')->with('success', 'Cliente aceptado correctamente');
    }
}
