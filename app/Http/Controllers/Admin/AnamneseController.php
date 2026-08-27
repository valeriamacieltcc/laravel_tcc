<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anamnese;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AnamneseController extends Controller
{
    public function index(Cliente $cliente)
    {
        $cliente->load('user');

        $anamnese = $cliente->anamnese;

        return view(
            'admin.clientes.anamnese.index',
            compact('cliente', 'anamnese')
        );
    }

    public function edit(Cliente $cliente)
    {
        $cliente->load('user');

        $anamnese = $cliente->anamnese;

        return view(
            'admin.clientes.anamnese.edit_anamnese',
            compact('cliente', 'anamnese')
        );
    }



    public function update(Request $request, Cliente $cliente)
    {
        $cliente->loadMissing('user');
    
        $request->validate([
            'nome' => [
                'required',
                'string',
                'max:255',
            ],
    
            'email' => [
                'nullable',
                'email',
                'max:255',
                Rule::unique('users', 'email')
                    ->ignore($cliente->user_id),
            ],
    
            'telefone' => [
                'nullable',
                'string',
                'max:20',
            ],
    
            'data_nascimento' => [
                'nullable',
                'date',
            ],
    
            'endereco' => [
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
                'max:2',
            ],
    
            'cep' => [
                'nullable',
                'string',
                'max:9',
            ],
        ]);
    
        $dados = $request->except([
            '_token',
            '_method',
        ]);
    
        $checkboxes = [
            'acne',
            'manchas',
            'melasma',
            'poros',
            'rugas',
            'flacidez',
            'rosacea',
            'sensibilidade',
            'acromia',
            'cloasma',
            'efelides',
            'hipercromia',
            'hipocromia',
            'angioma',
            'cianose',
            'eritema',
            'hematoma',
            'petequias',
            'telangectasias',
            'ceratose',
            'nodulos',
            'papulas',
            'comedio',
            'verrugas',
            'milium',
            'necrose',
            'bolha',
            'pustula',
            'vesicula',
            'crosta',
            'escara',
            'escoriacao',
            'fissura',
            'fistula',
            'ulceracao',
            'atrofia',
            'cicatriz',
            'hipertricose',
            'hirsutismo',
            'eczema',
            'hiperqueratose',
            'psoriase',
        ];
    
        foreach ($checkboxes as $campo) {
            $dados[$campo] = $request->has($campo)
                ? 'sim'
                : 'nao';
        }
    
        DB::transaction(function () use (
            $request,
            $cliente,
            $dados
        ) {
            // Salva a ficha de anamnese
            Anamnese::updateOrCreate(
                [
                    'cliente_id' => $cliente->id,
                ],
                $dados
            );
    
            // Atualiza nome e e-mail da tabela users
            $cliente->user->name = $request->nome;
    
            // Não apaga o e-mail do login se o campo estiver vazio
            if ($request->filled('email')) {
                $cliente->user->email = $request->email;
            }
    
            $cliente->user->save();
    
            // Atualiza os dados mostrados no perfil da cliente
            $cliente->telefone = $request->telefone;
            $cliente->data_nascimento = $request->data_nascimento;
            $cliente->logradouro = $request->endereco;
            $cliente->bairro = $request->bairro;
            $cliente->cidade = $request->cidade;
            $cliente->estado = $request->estado;
            $cliente->cep = $request->cep;
    
            $cliente->save();
        });
    
        return redirect()
            ->route(
                'admin.clientes.anamnese.index',
                $cliente
            )
            ->with(
                'sucesso',
                'Ficha e perfil da cliente atualizados com sucesso!'
            );
    }

       
}