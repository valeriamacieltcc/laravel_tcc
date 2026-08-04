<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PerfilController extends Controller
{
   public function show()
{
    $user = Auth::user();
    $cliente = $user->cliente;

    return view(
        'cliente.perfil.index',
        compact('user', 'cliente')
    );
}

public function edit()
{
    $user = Auth::user();
    $cliente = $user->cliente;

    return view(
        'cliente.perfil.edit',
        compact('user', 'cliente')
    );
}
    public function update(Request $request)
    {
        $user = Auth::user();
        $cliente = $user->cliente;

        $dados = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],

            'telefone' => [
                'required',
                'string',
                'max:20',
            ],

            'data_nascimento' => [
                'required',
                'date',
                'before:today',
            ],

            'cpf' => [
                'nullable',
                'string',
                'max:14',
                Rule::unique('clientes', 'cpf')->ignore($cliente->id),
            ],

            'cep' => [
                'nullable',
                'string',
                'max:9',
            ],

            'logradouro' => [
                'nullable',
                'string',
                'max:255',
            ],

            'numero' => [
                'nullable',
                'string',
                'max:20',
            ],

            'complemento' => [
                'nullable',
                'string',
                'max:255',
            ],

            'bairro' => [
                'nullable',
                'string',
                'max:255',
            ],

            'cidade' => [
                'nullable',
                'string',
                'max:255',
            ],

            'estado' => [
                'nullable',
                'string',
                'size:2',
            ],

            'foto_perfil' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        $user->update([
            'name' => $dados['name'],
            'email' => $dados['email'],
        ]);

        if ($request->hasFile('foto_perfil')) {
            if ($cliente->foto_perfil) {
                Storage::disk('public')
                    ->delete($cliente->foto_perfil);
            }

            $dados['foto_perfil'] = $request
                ->file('foto_perfil')
                ->store('clientes', 'public');
        }

        $cliente->update([
            'telefone' => $dados['telefone'],
            'data_nascimento' => $dados['data_nascimento'],
            'cpf' => $dados['cpf'] ?? null,
            'cep' => $dados['cep'] ?? null,
            'logradouro' => $dados['logradouro'] ?? null,
            'numero' => $dados['numero'] ?? null,
            'complemento' => $dados['complemento'] ?? null,
            'bairro' => $dados['bairro'] ?? null,
            'cidade' => $dados['cidade'] ?? null,
            'estado' => isset($dados['estado'])
                ? strtoupper($dados['estado'])
                : null,
            'foto_perfil' => $dados['foto_perfil']
                ?? $cliente->foto_perfil,
        ]);

        return redirect()
            ->route('cliente.perfil.show')
            ->with('sucesso', 'Perfil atualizado com sucesso!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'senha_atual' => [
                'required',
                'current_password',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ], [
            'senha_atual.required' => 'Informe sua senha atual.',
            'senha_atual.current_password' => 'A senha atual está incorreta.',
            'password.required' => 'Informe a nova senha.',
            'password.min' => 'A nova senha deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'As senhas não são iguais.',
        ]);

        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

     return redirect()
    ->route('cliente.perfil.show')
    ->with('sucesso', 'Perfil atualizado com sucesso!');
}}