<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProcedimentoController extends Controller

{

    public function index() {
        $procedimentos = new \App\Models\Procedimento();
        return view('cliente.procedimento.index', ['procedimentos'=>$procedimentos::all()]);
    }

    public function detalhe(int $id) {
        $procedimento = \App\Models\Procedimento::where('id', $id)->first();

        return view('cliente.procedimento.detalhe', [
            'procedimento' => $procedimento
        ]);
    }
    public function show($id)
    {
        $procedimento = \App\Models\Procedimento::findOrFail($id);
    
        return view('cliente.procedimento.show', compact('procedimento'));
    }
}