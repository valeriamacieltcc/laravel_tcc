<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function create()
    {
        return view('auth.cadastro');
    }

    public function store(Request $request)
    {
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
                'unique:users,email',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
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
                'unique:clientes,cpf',
            ],
        ], [
            'name.required' => 'Informe seu nome.',
            'email.required' => 'Informe seu e-mail.',
            'email.email' => 'Informe um e-mail válido.',
            'email.unique' => 'Este e-mail já está cadastrado.',

            'password.required' => 'Informe uma senha.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'A confirmação da senha está diferente.',

            'telefone.required' => 'Informe seu telefone.',
            'data_nascimento.required' => 'Informe sua data de nascimento.',
            'data_nascimento.before' => 'A data de nascimento deve ser anterior a hoje.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
        ]);

        $user = DB::transaction(function () use ($dados) {
            $user = User::create([
                'name' => $dados['name'],
                'email' => $dados['email'],
                'password' => Hash::make($dados['password']),
                'tipo' => 'cliente',
            ]);

            Cliente::create([
                'user_id' => $user->id,
                'telefone' => $dados['telefone'],
                'data_nascimento' => $dados['data_nascimento'],
                'cpf' => $dados['cpf'] ?? null,
            ]);

            return $user;
        });

       Auth::login($user);

$request->session()->regenerate();

return redirect()
    ->route('home.index')
    ->with('sucesso', 'Cadastro realizado com sucesso! Seja bem-vinda!');}
}