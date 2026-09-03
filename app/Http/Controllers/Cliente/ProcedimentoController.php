<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Procedimento;

class ProcedimentoController extends Controller

{

    public function index() {
       
            $procedimentos = Procedimento::orderBy('id', 'desc')
                ->paginate(6);
    
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