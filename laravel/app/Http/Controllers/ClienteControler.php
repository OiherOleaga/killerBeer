<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Str;



class ClienteControler extends Controller
{
    static function sessionCheck()
    {
        session_start();
        return (isset($_SESSION["logged"]) && $_SESSION["logged"]);
    }

    function session()
    {
        if (ClienteControler::sessionCheck()) {
            return response()->json(["logged" => false]);
        }

        return response()->json(["logged" => true]);
    }
    function index(Request $request)
    {
        $search = $request->input('search');

        $clientes = Cliente::query()
            ->where(function ($query) use ($search) {
                $query->where('nombre', 'LIKE', "%$search%");
            })->paginate(5);
        return view("clientes.index", ["clientes" => $clientes]);
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
            $logged = false;
        }

        if ($logged) {
            session_start();
            $_SESSION["logged"] = true;
        }

        return response()->json(["logged" => $logged]);
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
            'codigo' => 'required|string|min:9|max:9'
        ]);

        $cliente = Cliente::create($datosValidados);

        return redirect()->route('clientes.index')->with('success', 'Cliente creada correctamente');;
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
