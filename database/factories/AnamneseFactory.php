<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anamnese>
 */
class AnamneseFactory extends Factory
{
    public function definition(): array
    {
        $dataNascimento = fake()->dateTimeBetween('-60 years', '-18 years');

        return [

            /*
            |--------------------------------------------------------------------------
            | DADOS PESSOAIS
            |--------------------------------------------------------------------------
            */

            'nome' => fake()->name(),

            'endereco' => fake()->streetAddress(),

            'bairro' => fake()->randomElement([
                'Centro',
                'Jardim América',
                'Jardim São Paulo',
                'Vila Esperança',
                'Jardim Paulista',
            ]),

            'cidade' => 'Tatuí',

            'estado' => 'SP',

            'cep' => fake()->numerify('#####-###'),

            'telefone' => fake()->numerify('(15) ####-####'),

            'celular' => fake()->numerify('(15) 9####-####'),

            'data_nascimento' => $dataNascimento,

            'idade' => now()->diffInYears($dataNascimento),

            'profissao' => fake()->randomElement([
                'Estudante',
                'Professora',
                'Vendedora',
                'Administradora',
                'Empresária',
                'Autônoma',
                'Auxiliar administrativa',
            ]),

            'estado_civil' => fake()->randomElement([
                'Solteira',
                'Casada',
                'Divorciada',
            ]),

            'sexo' => 'Feminino',

            'nacionalidade' => 'Brasileira',

            'cor' => fake()->randomElement([
                'Branca',
                'Parda',
                'Preta',
            ]),

            'telefone_residencial' => null,

            'telefone_comercial' => null,

            'indicacao' => fake()->randomElement([
                'Amiga',
                'Instagram',
                'Facebook',
                'Cliente antiga',
            ]),

            'motivo_visita' => fake()->randomElement([
                'Realizar limpeza de pele',
                'Melhorar a aparência da pele',
                'Realizar design de sobrancelhas',
                'Cuidados estéticos',
                'Avaliação facial',
            ]),

            'email' => fake()->unique()->safeEmail(),

            'emergencia_nome' => fake()->name(),

            'emergencia_telefone' => fake()->numerify('(15) 9####-####'),

            'como_conheceu' => fake()->randomElement([
                'Instagram',
                'Indicação',
                'Facebook',
                'Amiga',
            ]),


            /*
            |--------------------------------------------------------------------------
            | HISTÓRICO
            |--------------------------------------------------------------------------
            */

            'tratamento_estetico' => fake()->randomElement(['Sim', 'Não']),

            'tratamento_medico' => 'Não',

            'medicamentos' => 'Não',

            'alergias' => 'Não',

            'gestante' => 'Não',

            'amamentando' => 'Não',

            'diabetes' => 'Não',

            'hipertensao' => 'Não',

            'cardiaco' => 'Não',

            'circulacao' => 'Não',

            'marcapasso' => 'Não',

            'epilepsia' => 'Não',

            'hormonais' => 'Não',

            'tabagista' => 'Não',

            'alcool' => fake()->randomElement(['Sim', 'Não']),

            'observacoes' => 'Cliente sem observações relevantes no momento da avaliação.',

            'muito_tempo_sentada' => fake()->randomElement(['Sim', 'Não']),

            'antecedentes_cirurgicos' => 'Não',

            'antecedentes_cirurgicos_quais' => null,

            'tratamento_estetico_anterior' => fake()->randomElement(['Sim', 'Não']),

            'tratamento_estetico_anterior_qual' => 'Limpeza de pele',

            'antecedentes_alergicos' => 'Não',

            'antecedentes_alergicos_quais' => null,

            'funcionamento_intestinal_regular' => 'Sim',

            'funcionamento_intestinal_obs' => 'Funcionamento intestinal regular.',

            'pratica_esportes' => fake()->randomElement(['Sim', 'Não']),

            'pratica_esportes_quais' => 'Caminhada',

            'fumante' => 'Não',

            'alimentacao_balanceada' => 'Sim',

            'alimentacao_tipo' => 'Alimentação variada e equilibrada.',

            'agua_8_copos' => fake()->randomElement(['Sim', 'Não']),

            'gestante_corporal' => 'Não',

            'filhos' => fake()->randomElement(['Sim', 'Não']),

            'filhos_quantos' => fake()->numberBetween(0, 2),

            'problema_ortopedico' => 'Não',

            'problema_ortopedico_qual' => null,

            'faz_tratamento_medico' => 'Não',

            'faz_tratamento_medico_qual' => null,

            'acidos_na_pele' => fake()->randomElement(['Sim', 'Não']),

            'acidos_na_pele_quais' => 'Ácido hialurônico',

            'tratamento_ortomolecular' => 'Não',

            'tratamento_ortomolecular_qual' => null,

            'cuidados_diarios' => 'Sim',

            'cuidados_diarios_quais' => 'Hidratação e uso de protetor solar.',

            'portador_marcapasso' => 'Não',

            'portador_marcapasso_qual' => null,

            'presenca_metais' => 'Não',

            'presenca_metais_local' => null,

            'antecedentes_oncologicos' => 'Não',

            'antecedentes_oncologicos_qual' => null,

            'cirurgia_fratura_recente' => 'Não',

            'cirurgia_fratura_recente_qual' => null,

            'ciclo_menstrual_regular' => 'Sim',

            'ciclo_menstrual_obs' => 'Ciclo regular.',

            'metodo_anticoncepcional' => fake()->randomElement(['Sim', 'Não']),

            'metodo_anticoncepcional_qual' => 'Anticoncepcional oral',

            'varizes' => 'Não',

            'varizes_grau' => null,

            'lesoes' => 'Não',

            'lesoes_quais' => null,

            'hipertensao_corporal' => 'Não',

            'hipotensao' => 'Não',

            'diabetes_corporal' => 'Não',

            'epilepsia_corporal' => 'Não',


            /*
            |--------------------------------------------------------------------------
            | PELE
            |--------------------------------------------------------------------------
            */

            'tipo_pele' => fake()->randomElement([
                'Normal',
                'Seca',
                'Oleosa',
                'Mista',
            ]),

            'acne' => fake()->randomElement(['Sim', 'Não']),

            'manchas' => fake()->randomElement(['Sim', 'Não']),

            'melasma' => fake()->randomElement(['Sim', 'Não']),

            'poros' => fake()->randomElement(['Sim', 'Não']),

            'rugas' => fake()->randomElement(['Sim', 'Não']),

            'flacidez' => fake()->randomElement(['Sim', 'Não']),

            'rosacea' => 'Não',

            'sensibilidade' => fake()->randomElement(['Sim', 'Não']),

            'tipo_pele_avaliacao' => fake()->randomElement([
                'Normal',
                'Seca',
                'Oleosa',
                'Mista',
            ]),

            'grau_oleosidade' => fake()->randomElement([
                'Baixo',
                'Moderado',
                'Alto',
            ]),

            'espessura_pele' => fake()->randomElement([
                'Fina',
                'Normal',
                'Espessa',
            ]),

            'acromia' => 'Não',

            'cloasma' => 'Não',

            'efelides' => fake()->randomElement(['Sim', 'Não']),

            'hipercromia' => fake()->randomElement(['Sim', 'Não']),

            'hipocromia' => 'Não',

            'angioma' => 'Não',

            'cianose' => 'Não',

            'eritema' => 'Não',

            'hematoma' => 'Não',

            'petequias' => 'Não',

            'telangectasias' => 'Não',

            'ceratose' => 'Não',

            'nodulos' => 'Não',

            'papulas' => 'Não',

            'comedio' => fake()->randomElement(['Sim', 'Não']),

            'verrugas' => 'Não',

            'milium' => fake()->randomElement(['Sim', 'Não']),

            'necrose' => 'Não',

            'bolha' => 'Não',

            'pustula' => 'Não',

            'vesicula' => 'Não',

            'crosta' => 'Não',

            'escara' => 'Não',

            'escoriacao' => 'Não',

            'fissura' => 'Não',

            'fistula' => 'Não',

            'ulceracao' => 'Não',

            'atrofia' => 'Não',

            'cicatriz' => fake()->randomElement(['Sim', 'Não']),

            'hipertricose' => 'Não',

            'hirsutismo' => 'Não',

            'eczema' => 'Não',

            'hiperqueratose' => 'Não',

            'psoriase' => 'Não',

            'relatorio_pele' =>
                'Pele avaliada visualmente. Apresenta condições adequadas para o tratamento proposto. Recomenda-se manter hidratação e proteção solar diária.',


            /*
            |--------------------------------------------------------------------------
            | SOBRANCELHAS
            |--------------------------------------------------------------------------
            */

            'design_anterior' => fake()->randomElement(['Sim', 'Não']),

            'falhas' => fake()->randomElement(['Sim', 'Não']),

            'henna' => fake()->randomElement(['Sim', 'Não']),

            'alergia_cosmeticos' => 'Não',

            'obs_design' =>
                'Sobrancelhas avaliadas para definição de formato e simetria.',

            'to' => fake()->randomFloat(2, 0.5, 2),

            'pc' => fake()->randomFloat(2, 0.5, 2),

            'altura_inicial' => fake()->randomFloat(2, 4, 8),

            'posicao_pma' => fake()->randomFloat(2, 4, 8),

            'altura_pma' => fake()->randomFloat(2, 4, 8),

            'tb' => fake()->randomFloat(2, 0.5, 2),

            'altura_final' => fake()->randomFloat(2, 4, 8),

            'espessura_inicial' => fake()->randomFloat(2, 2, 5),

            'espessura_pma' => fake()->randomFloat(2, 2, 5),

            'dicas_sobrancelhas' =>
                'Evitar retirar os pelos fora do desenho definido e manter os cuidados recomendados.',


            /*
            |--------------------------------------------------------------------------
            | TERMO / TRATAMENTO
            |--------------------------------------------------------------------------
            */

            'local_data' => 'Tatuí - SP',

            'assinatura_cliente' => fake()->name(),

            'assinatura_profissional' => 'Valéria Maciel',

            'nome_mae' => fake()->name(),

            'nome_pai' => fake()->name(),

            'responsavel' => null,

            'data_avaliacao' => fake()->dateTimeBetween('-6 months', 'now'),

            'valor_tratamento' => fake()->randomFloat(2, 80, 350),

            'forma_pagamento' => fake()->randomElement([
                'Pix',
                'Dinheiro',
                'Cartão',
            ]),

            'objetivo_tratamento' => fake()->randomElement([
                'Melhorar a aparência da pele.',
                'Reduzir manchas e melhorar a textura da pele.',
                'Realizar cuidados faciais.',
                'Melhorar o aspecto das sobrancelhas.',
                'Manter os cuidados estéticos.',
            ]),

            'tratamento_proposto' => fake()->randomElement([
                'Limpeza de pele',
                'Design de sobrancelhas',
                'Hidratação facial',
                'Limpeza de pele + hidratação',
                'Avaliação estética facial',
            ]),

            'numero_sessoes' => fake()->numberBetween(1, 6),

            'regularidade' => fake()->randomElement([
                'Semanal',
                'Quinzenal',
                'Mensal',
            ]),

            'homecare' =>
                'Utilizar protetor solar diariamente, manter a pele hidratada e seguir as orientações da profissional.',
        ];
    }
}