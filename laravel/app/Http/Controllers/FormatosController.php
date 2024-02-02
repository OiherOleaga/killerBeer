<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formato;

class FormatosController extends Controller
{
    public function index()
    {
        $formatos = Formato::all();
        return view('formato.index', compact('formatos'));
    }

    public function create()
    {
        return view('formato.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:255'
        ]);

        Formato::create($request->all());

        return redirect()->route('formato.index')
            ->with('success', 'Formato creado correctamente.');
    }

    public function destroy($id)
    {
        $formato = Formato::findOrFail($id);
        $formato->delete();

        return redirect()->route('formato.index')
            ->with('success', 'Formato eliminado correctamente.');
    }
}
