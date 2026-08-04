<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FichaController extends Controller
{
    public function index()
{
    $anamnese = session('anamnese', []);

    return view('perfil.anamnese.index', compact('anamnese'));
}


    public function salvar(Request $request)
    {
        $request->validate([

            // DADOS PESSOAIS

            'nome' => 'required|string|max:255',

            'endereco' => 'nullable|string|max:255',

            'bairro' => 'nullable|string|max:100',

            'cidade' => 'nullable|string|max:100',

            'estado' => 'nullable|string|max:2',

            'cep' => 'nullable|string|max:20',

            'telefone' => 'nullable|string|max:20',

            'celular' => 'nullable|string|max:20',

            'data_nascimento' => 'nullable|date',

            'idade' => 'nullable|integer|min:0|max:150',

            'profissao' => 'nullable|string|max:100',

            'estado_civil' => 'nullable|string|max:30',


            // HISTÓRICO

            'tratamento_estetico' => 'nullable|in:sim,nao',

            'tratamento_medico' => 'nullable|in:sim,nao',

            'medicamentos' => 'nullable|in:sim,nao',

            'alergias' => 'nullable|in:sim,nao',

            'gestante' => 'nullable|in:sim,nao',

            'amamentando' => 'nullable|in:sim,nao',

            'diabetes' => 'nullable|in:sim,nao',

            'hipertensao' => 'nullable|in:sim,nao',

            'cardiaco' => 'nullable|in:sim,nao',

            'circulacao' => 'nullable|in:sim,nao',

            'marcapasso' => 'nullable|in:sim,nao',

            'epilepsia' => 'nullable|in:sim,nao',

            'hormonais' => 'nullable|in:sim,nao',

            'tabagista' => 'nullable|in:sim,nao',

            'alcool' => 'nullable|in:sim,nao',

            'observacoes' => 'nullable|string',


            // AVALIAÇÃO DA PELE

            'tipo_pele' => 'nullable|string|max:50',

            'acne' => 'nullable|in:sim',

            'manchas' => 'nullable|in:sim',

            'melasma' => 'nullable|in:sim',

            'poros' => 'nullable|in:sim',

            'rugas' => 'nullable|in:sim',

            'flacidez' => 'nullable|in:sim',

            'rosacea' => 'nullable|in:sim',

            'sensibilidade' => 'nullable|in:sim',


            // DESIGN DE SOBRANCELHAS

            'design_anterior' => 'nullable|in:sim,nao',

            'falhas' => 'nullable|in:sim,nao',

            'henna' => 'nullable|in:sim,nao',

            'alergia_cosmeticos' => 'nullable|in:sim,nao',

            'obs_design' => 'nullable|string',


            // TERMO DE RESPONSABILIDADE

            'data' => 'nullable|date',

            'assinatura' => 'nullable|string|max:255'

        ]);


        // Salva temporariamente os dados na sessão
        session([
            'anamnese' => $request->all()
        ]);


        return redirect()
            ->route('ficha.index')
            ->with(
                'sucesso',
                'Ficha de anamnese salva com sucesso!'
            );
    }
}