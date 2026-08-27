<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

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

    public function edit(Cliente $cliente)
    {
        $cliente->load('user');

        return view(
            'admin.clientes.edit',
            compact('cliente')
        );
    }

    public function update(Request $request, Cliente $cliente)
    {
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',

            'telefone' => 'nullable|string|max:20',
            'data_nascimento' => 'nullable|date',
            'cpf' => 'nullable|string|max:14',
            'cep' => 'nullable|string|max:9',
            'logradouro' => 'nullable|string|max:255',
            'numero' => 'nullable|string|max:20',
            'complemento' => 'nullable|string|max:255',
            'bairro' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:255',
            'estado' => 'nullable|string|max:2',
        ]);

        // Atualiza a tabela users
        $cliente->user->update([
            'name' => $dados['name'],
            'email' => $dados['email'],
        ]);

        // Atualiza a tabela clientes
        $cliente->update([
            'telefone' => $dados['telefone'] ?? null,
            'data_nascimento' => $dados['data_nascimento'] ?? null,
            'cpf' => $dados['cpf'] ?? null,
            'cep' => $dados['cep'] ?? null,
            'logradouro' => $dados['logradouro'] ?? null,
            'numero' => $dados['numero'] ?? null,
            'complemento' => $dados['complemento'] ?? null,
            'bairro' => $dados['bairro'] ?? null,
            'cidade' => $dados['cidade'] ?? null,
            'estado' => $dados['estado'] ?? null,
        ]);

        return redirect()
            ->route('admin.clientes.show', $cliente->id)
            ->with('success', 'Dados da cliente atualizados com sucesso!');
    }
}