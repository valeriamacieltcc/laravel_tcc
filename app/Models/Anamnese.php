<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;

    protected $fillable = [

        'cliente_id',

        // DADOS PESSOAIS
        'nome',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'telefone',
        'celular',
        'data_nascimento',
        'idade',
        'profissao',
        'estado_civil',
        'sexo',
        'nacionalidade',
        'cor',
        'telefone_residencial',
        'telefone_comercial',
        'indicacao',
        'motivo_visita',
        'email',
        'emergencia_nome',
        'emergencia_telefone',
        'como_conheceu',

        // HISTÓRICO
        'tratamento_estetico',
        'tratamento_medico',
        'medicamentos',
        'alergias',
        'gestante',
        'amamentando',
        'diabetes',
        'hipertensao',
        'cardiaco',
        'circulacao',
        'marcapasso',
        'epilepsia',
        'hormonais',
        'tabagista',
        'alcool',
        'observacoes',

        'muito_tempo_sentada',

        'antecedentes_cirurgicos',
        'antecedentes_cirurgicos_quais',

        'tratamento_estetico_anterior',
        'tratamento_estetico_anterior_qual',

        'antecedentes_alergicos',
        'antecedentes_alergicos_quais',

        'funcionamento_intestinal_regular',
        'funcionamento_intestinal_obs',

        'pratica_esportes',
        'pratica_esportes_quais',

        'fumante',

        'alimentacao_balanceada',
        'alimentacao_tipo',

        'agua_8_copos',

        'gestante_corporal',
        'filhos',
        'filhos_quantos',

        'problema_ortopedico',
        'problema_ortopedico_qual',

        'faz_tratamento_medico',
        'faz_tratamento_medico_qual',

        'acidos_na_pele',
        'acidos_na_pele_quais',

        'tratamento_ortomolecular',
        'tratamento_ortomolecular_qual',

        'cuidados_diarios',
        'cuidados_diarios_quais',

        'portador_marcapasso',
        'portador_marcapasso_qual',

        'presenca_metais',
        'presenca_metais_local',

        'antecedentes_oncologicos',
        'antecedentes_oncologicos_qual',

        'cirurgia_fratura_recente',
        'cirurgia_fratura_recente_qual',

        'ciclo_menstrual_regular',
        'ciclo_menstrual_obs',

        'metodo_anticoncepcional',
        'metodo_anticoncepcional_qual',

        'varizes',
        'varizes_grau',

        'lesoes',
        'lesoes_quais',

        'hipertensao_corporal',
        'hipotensao',
        'diabetes_corporal',
        'epilepsia_corporal',

        // PELE
        'tipo_pele',
        'acne',
        'manchas',
        'melasma',
        'poros',
        'rugas',
        'flacidez',
        'rosacea',
        'sensibilidade',

        'tipo_pele_avaliacao',
        'grau_oleosidade',
        'espessura_pele',

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

        'relatorio_pele',

        // SOBRANCELHA
        'design_anterior',
        'falhas',
        'henna',
        'alergia_cosmeticos',
        'obs_design',

        'to',
        'pc',
        'altura_inicial',
        'posicao_pma',
        'altura_pma',
        'tb',
        'altura_final',
        'espessura_inicial',
        'espessura_pma',

        'dicas_sobrancelhas',

        // TERMO
        'local_data',
        'assinatura_cliente',
        'assinatura_profissional',
        'nome_mae',
        'nome_pai',
        'responsavel',
        'data_avaliacao',
        'valor_tratamento',
        'forma_pagamento',
        'objetivo_tratamento',
        'tratamento_proposto',
        'numero_sessoes',
        'regularidade',
        'homecare',
    ];


    protected $casts = [

        'data_nascimento' => 'date',

        'data_avaliacao' => 'date',

        'valor_tratamento' => 'decimal:2',

        'to' => 'decimal:2',
        'pc' => 'decimal:2',
        'altura_inicial' => 'decimal:2',
        'posicao_pma' => 'decimal:2',
        'altura_pma' => 'decimal:2',
        'tb' => 'decimal:2',
        'altura_final' => 'decimal:2',
        'espessura_inicial' => 'decimal:2',
        'espessura_pma' => 'decimal:2',
    ];


    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}