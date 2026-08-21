<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Anamnese;

class FichaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | MOSTRAR FICHA
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $user = Auth::user();
        $cliente = $user->cliente;
    
        $anamnese = Anamnese::where(
            'cliente_id',
            $cliente->id
        )->first();
    
        return view(
            'cliente.perfil.anamnese.ficha',
            compact(
                'user',
                'cliente',
                'anamnese'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CADASTRAR
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $cliente = Auth::user()->cliente;

        // impede duas fichas para a mesma cliente
        if ($cliente->anamnese) {
            return redirect()
                ->route('cliente.perfil.anamnese.index');
        }

        $dados = $this->validarFicha($request);

        $dados = $this->tratarCheckboxes(
            $request,
            $dados
        );

        $dados['cliente_id'] = $cliente->id;

        Anamnese::create($dados);

        return redirect()
        ->route('cliente.perfil.show')
        ->with('sucesso', 'Ficha de anamnese salva com sucesso!');
    }


    /*
    |--------------------------------------------------------------------------
    | ATUALIZAR
    |--------------------------------------------------------------------------
    */

    public function update(Request $request)
    {
        $cliente = Auth::user()->cliente;

        $anamnese = Anamnese::where(
            'cliente_id',
            $cliente->id
        )->firstOrFail();

        $dados = $this->validarFicha($request);

        $dados = $this->tratarCheckboxes(
            $request,
            $dados
        );

        $anamnese->update($dados);

        return redirect()
        ->route('cliente.perfil.show')
        ->with('sucesso', 'Ficha de anamnese atualizada com sucesso!');
    }


    /*
    |--------------------------------------------------------------------------
    | EXCLUIR
    |--------------------------------------------------------------------------
    */

    public function destroy()
    {
        $cliente = Auth::user()->cliente;

        $anamnese = Anamnese::where(
            'cliente_id',
            $cliente->id
        )->first();

        if ($anamnese) {
            $anamnese->delete();
        }

        return redirect()
            ->route('cliente.perfil.anamnese.index')
            ->with(
                'sucesso',
                'Ficha de anamnese excluída com sucesso!'
            );
    }

    public function edit(){
    $user = Auth::user();
 $cliente = $user->cliente;

    $anamnese = Anamnese::where('cliente_id',$cliente->id)->first();

    return view(
        'cliente.perfil.anamnese.edit',
        compact('user','cliente','anamnese')
    );

    }

    /*
    |--------------------------------------------------------------------------
    | VALIDAÇÃO
    |--------------------------------------------------------------------------
    */

    private function validarFicha(Request $request)
    {
        return $request->validate([

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

            'sexo' => 'nullable|string|max:30',
            'nacionalidade' => 'nullable|string|max:100',
            'cor' => 'nullable|string|max:50',

            'telefone_residencial' => 'nullable|string|max:20',
            'telefone_comercial' => 'nullable|string|max:20',

            'indicacao' => 'nullable|string|max:255',
            'motivo_visita' => 'nullable|string|max:255',

            'email' => 'nullable|email|max:255',

            'emergencia_nome' => 'nullable|string|max:255',
            'emergencia_telefone' => 'nullable|string|max:20',

            'como_conheceu' => 'nullable|string|max:100',


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

            'muito_tempo_sentada' => 'nullable|in:sim,nao',

            'antecedentes_cirurgicos' => 'nullable|in:sim,nao',
            'antecedentes_cirurgicos_quais' => 'nullable|string|max:255',

            'tratamento_estetico_anterior' => 'nullable|in:sim,nao',
            'tratamento_estetico_anterior_qual' => 'nullable|string|max:255',

            'antecedentes_alergicos' => 'nullable|in:sim,nao',
            'antecedentes_alergicos_quais' => 'nullable|string|max:255',

            'funcionamento_intestinal_regular' => 'nullable|in:sim,nao',
            'funcionamento_intestinal_obs' => 'nullable|string|max:255',

            'pratica_esportes' => 'nullable|in:sim,nao',
            'pratica_esportes_quais' => 'nullable|string|max:255',

            'fumante' => 'nullable|in:sim,nao',

            'alimentacao_balanceada' => 'nullable|in:sim,nao',
            'alimentacao_tipo' => 'nullable|string|max:255',

            'agua_8_copos' => 'nullable|in:sim,nao',

            'gestante_corporal' => 'nullable|in:sim,nao',

            'filhos' => 'nullable|in:sim,nao',
            'filhos_quantos' => 'nullable|integer|min:0',

            'problema_ortopedico' => 'nullable|in:sim,nao',
            'problema_ortopedico_qual' => 'nullable|string|max:255',

            'faz_tratamento_medico' => 'nullable|in:sim,nao',
            'faz_tratamento_medico_qual' => 'nullable|string|max:255',

            'acidos_na_pele' => 'nullable|in:sim,nao',
            'acidos_na_pele_quais' => 'nullable|string|max:255',

            'tratamento_ortomolecular' => 'nullable|in:sim,nao',
            'tratamento_ortomolecular_qual' => 'nullable|string|max:255',

            'cuidados_diarios' => 'nullable|in:sim,nao',
            'cuidados_diarios_quais' => 'nullable|string|max:255',

            'portador_marcapasso' => 'nullable|in:sim,nao',
            'portador_marcapasso_qual' => 'nullable|string|max:255',

            'presenca_metais' => 'nullable|in:sim,nao',
            'presenca_metais_local' => 'nullable|string|max:255',

            'antecedentes_oncologicos' => 'nullable|in:sim,nao',
            'antecedentes_oncologicos_qual' => 'nullable|string|max:255',

            'cirurgia_fratura_recente' => 'nullable|in:sim,nao',
            'cirurgia_fratura_recente_qual' => 'nullable|string|max:255',

            'ciclo_menstrual_regular' => 'nullable|in:sim,nao',
            'ciclo_menstrual_obs' => 'nullable|string|max:255',

            'metodo_anticoncepcional' => 'nullable|in:sim,nao',
            'metodo_anticoncepcional_qual' => 'nullable|string|max:255',

            'varizes' => 'nullable|in:sim,nao',
            'varizes_grau' => 'nullable|string|max:100',

            'lesoes' => 'nullable|in:sim,nao',
            'lesoes_quais' => 'nullable|string|max:255',

            'hipertensao_corporal' => 'nullable|in:sim,nao',
            'hipotensao' => 'nullable|in:sim,nao',
            'diabetes_corporal' => 'nullable|in:sim,nao',
            'epilepsia_corporal' => 'nullable|in:sim,nao',


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

            'tipo_pele_avaliacao' => 'nullable|string|max:100',
            'grau_oleosidade' => 'nullable|string|max:100',
            'espessura_pele' => 'nullable|string|max:100',

            'acromia' => 'nullable|in:sim',
            'cloasma' => 'nullable|in:sim',
            'efelides' => 'nullable|in:sim',
            'hipercromia' => 'nullable|in:sim',
            'hipocromia' => 'nullable|in:sim',

            'angioma' => 'nullable|in:sim',
            'cianose' => 'nullable|in:sim',
            'eritema' => 'nullable|in:sim',
            'hematoma' => 'nullable|in:sim',
            'petequias' => 'nullable|in:sim',
            'telangectasias' => 'nullable|in:sim',

            'ceratose' => 'nullable|in:sim',
            'nodulos' => 'nullable|in:sim',
            'papulas' => 'nullable|in:sim',
            'comedio' => 'nullable|in:sim',
            'verrugas' => 'nullable|in:sim',
            'milium' => 'nullable|in:sim',
            'necrose' => 'nullable|in:sim',

            'bolha' => 'nullable|in:sim',
            'pustula' => 'nullable|in:sim',
            'vesicula' => 'nullable|in:sim',

            'crosta' => 'nullable|in:sim',
            'escara' => 'nullable|in:sim',
            'escoriacao' => 'nullable|in:sim',
            'fissura' => 'nullable|in:sim',
            'fistula' => 'nullable|in:sim',
            'ulceracao' => 'nullable|in:sim',

            'atrofia' => 'nullable|in:sim',
            'cicatriz' => 'nullable|in:sim',
            'hipertricose' => 'nullable|in:sim',
            'hirsutismo' => 'nullable|in:sim',

            'eczema' => 'nullable|in:sim',
            'hiperqueratose' => 'nullable|in:sim',
            'psoriase' => 'nullable|in:sim',

            'relatorio_pele' => 'nullable|string',


            // SOBRANCELHAS

            'design_anterior' => 'nullable|in:sim,nao',
            'falhas' => 'nullable|in:sim,nao',
            'henna' => 'nullable|in:sim,nao',
            'alergia_cosmeticos' => 'nullable|in:sim,nao',

            'obs_design' => 'nullable|string',

            'to' => 'nullable|numeric',
            'pc' => 'nullable|numeric',
            'altura_inicial' => 'nullable|numeric',
            'posicao_pma' => 'nullable|numeric',
            'altura_pma' => 'nullable|numeric',
            'tb' => 'nullable|numeric',
            'altura_final' => 'nullable|numeric',
            'espessura_inicial' => 'nullable|numeric',
            'espessura_pma' => 'nullable|numeric',

            'dicas_sobrancelhas' => 'nullable|string',


            // TERMO / TRATAMENTO

            'local_data' => 'nullable|string|max:255',

            'assinatura_cliente' => 'nullable|string|max:255',
            'assinatura_profissional' => 'nullable|string|max:255',

            'nome_mae' => 'nullable|string|max:255',
            'nome_pai' => 'nullable|string|max:255',
            'responsavel' => 'nullable|string|max:255',

            'data_avaliacao' => 'nullable|date',

            'valor_tratamento' => 'nullable|numeric|min:0',

            'forma_pagamento' => 'nullable|string|max:100',

            'objetivo_tratamento' => 'nullable|string',
            'tratamento_proposto' => 'nullable|string',

            'numero_sessoes' => 'nullable|integer|min:0',

            'regularidade' => 'nullable|string|max:100',

            'homecare' => 'nullable|string',
        ]);
    }


    /*
    |--------------------------------------------------------------------------
    | CHECKBOXES
    |--------------------------------------------------------------------------
    |
    | Checkbox desmarcado não é enviado pelo HTML.
    | Precisamos colocar null para apagar uma marcação antiga.
    |
    */

    private function tratarCheckboxes(
        Request $request,
        array $dados
    ) {
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
                : null;

        }

        return $dados;
    }
}