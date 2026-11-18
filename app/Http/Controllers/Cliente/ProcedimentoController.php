<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Procedimento;

class ProcedimentoController extends Controller

{


    public function index(Request $request)
    {
        $query = Procedimento::orderBy('id', 'desc');
    
        // Filtrar pela área selecionada
        if ($request->filled('categoria')) {
            $query->where('categoria_procedimento_id', $request->categoria);
        }
    
        $procedimentos = $query->paginate(8)->withQueryString();
    
        return view(
            'cliente.procedimento.index',
            compact('procedimentos')
        );
    }
    

  
    public function show($id)
    {
        $procedimento = \App\Models\Procedimento::findOrFail($id);
    
        return view('cliente.procedimento.show', compact('procedimento'));
    }
}