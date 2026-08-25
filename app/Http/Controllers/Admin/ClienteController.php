<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::with('user')
            ->orderBy('id', 'desc')
            ->get();

        return view(
            'admin.clientes.index',
            compact('clientes')
        );
    }

    public function show(Cliente $cliente)
    {
        $cliente->load([
            'user',
            'anamnese',
            'fotosAcompanhamento',
        ]);
    
        return view(
            'admin.clientes.show',
            compact('cliente')
        );
    }
}