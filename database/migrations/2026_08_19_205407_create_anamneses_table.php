<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anamneses', function (Blueprint $table) {

            $table->id();

            $table->foreignId('cliente_id')
                ->constrained('clientes')
                ->cascadeOnDelete();

            /*
            |--------------------------------------------------------------------------
            | DADOS PESSOAIS
            |--------------------------------------------------------------------------
            */

            $table->string('nome', 150);

            $table->string('endereco', 200)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('cep', 10)->nullable();

            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20)->nullable();

            $table->date('data_nascimento')->nullable();
            $table->integer('idade')->nullable();

            $table->string('profissao', 100)->nullable();
            $table->string('estado_civil', 30)->nullable();

            $table->string('sexo', 20)->nullable();
            $table->string('nacionalidade', 60)->nullable();
            $table->string('cor', 30)->nullable();

            $table->string('telefone_residencial', 20)->nullable();
            $table->string('telefone_comercial', 20)->nullable();

            $table->string('indicacao', 150)->nullable();

            $table->text('motivo_visita')->nullable();

            $table->string('email', 150)->nullable();

            $table->string('emergencia_nome', 150)->nullable();
            $table->string('emergencia_telefone', 20)->nullable();

            $table->string('como_conheceu', 30)->nullable();


            /*
            |--------------------------------------------------------------------------
            | HISTÓRICO
            |--------------------------------------------------------------------------
            */

            $table->string('tratamento_estetico', 3)->nullable();
            $table->string('tratamento_medico', 3)->nullable();
            $table->string('medicamentos', 3)->nullable();
            $table->string('alergias', 3)->nullable();

            $table->string('gestante', 3)->nullable();
            $table->string('amamentando', 3)->nullable();

            $table->string('diabetes', 3)->nullable();
            $table->string('hipertensao', 3)->nullable();
            $table->string('cardiaco', 3)->nullable();
            $table->string('circulacao', 3)->nullable();

            $table->string('marcapasso', 3)->nullable();
            $table->string('epilepsia', 3)->nullable();
            $table->string('hormonais', 3)->nullable();

            $table->string('tabagista', 3)->nullable();
            $table->string('alcool', 3)->nullable();

            $table->text('observacoes')->nullable();

            $table->string('muito_tempo_sentada', 3)->nullable();


            $table->string('antecedentes_cirurgicos', 3)->nullable();

            $table->text(
                'antecedentes_cirurgicos_quais'
            )->nullable();


            $table->string(
                'tratamento_estetico_anterior',
                3
            )->nullable();

            $table->text(
                'tratamento_estetico_anterior_qual'
            )->nullable();


            $table->string(
                'antecedentes_alergicos',
                3
            )->nullable();

            $table->text(
                'antecedentes_alergicos_quais'
            )->nullable();


            $table->string(
                'funcionamento_intestinal_regular',
                3
            )->nullable();

            $table->text(
                'funcionamento_intestinal_obs'
            )->nullable();


            $table->string(
                'pratica_esportes',
                3
            )->nullable();

            $table->text(
                'pratica_esportes_quais'
            )->nullable();


            $table->string('fumante', 3)->nullable();


            $table->string(
                'alimentacao_balanceada',
                3
            )->nullable();

            $table->text(
                'alimentacao_tipo'
            )->nullable();


            $table->string(
                'agua_8_copos',
                3
            )->nullable();


            $table->string(
                'gestante_corporal',
                3
            )->nullable();

            $table->string(
                'filhos',
                3
            )->nullable();

            $table->integer(
                'filhos_quantos'
            )->nullable();


            $table->string(
                'problema_ortopedico',
                3
            )->nullable();

            $table->text(
                'problema_ortopedico_qual'
            )->nullable();


            $table->string(
                'faz_tratamento_medico',
                3
            )->nullable();

            $table->text(
                'faz_tratamento_medico_qual'
            )->nullable();


            $table->string(
                'acidos_na_pele',
                3
            )->nullable();

            $table->text(
                'acidos_na_pele_quais'
            )->nullable();


            $table->string(
                'tratamento_ortomolecular',
                3
            )->nullable();

            $table->text(
                'tratamento_ortomolecular_qual'
            )->nullable();


            $table->string(
                'cuidados_diarios',
                3
            )->nullable();

            $table->text(
                'cuidados_diarios_quais'
            )->nullable();


            $table->string(
                'portador_marcapasso',
                3
            )->nullable();

            $table->text(
                'portador_marcapasso_qual'
            )->nullable();


            $table->string(
                'presenca_metais',
                3
            )->nullable();

            $table->text(
                'presenca_metais_local'
            )->nullable();


            $table->string(
                'antecedentes_oncologicos',
                3
            )->nullable();

            $table->text(
                'antecedentes_oncologicos_qual'
            )->nullable();


            $table->string(
                'cirurgia_fratura_recente',
                3
            )->nullable();

            $table->text(
                'cirurgia_fratura_recente_qual'
            )->nullable();


            $table->string(
                'ciclo_menstrual_regular',
                3
            )->nullable();

            $table->text(
                'ciclo_menstrual_obs'
            )->nullable();


            $table->string(
                'metodo_anticoncepcional',
                3
            )->nullable();

            $table->text(
                'metodo_anticoncepcional_qual'
            )->nullable();


            $table->string(
                'varizes',
                3
            )->nullable();

            $table->string(
                'varizes_grau',
                30
            )->nullable();


            $table->string(
                'lesoes',
                3
            )->nullable();

            $table->text(
                'lesoes_quais'
            )->nullable();


            $table->string(
                'hipertensao_corporal',
                3
            )->nullable();

            $table->string(
                'hipotensao',
                3
            )->nullable();

            $table->string(
                'diabetes_corporal',
                3
            )->nullable();

            $table->string(
                'epilepsia_corporal',
                3
            )->nullable();


            /*
            |--------------------------------------------------------------------------
            | AVALIAÇÃO DA PELE
            |--------------------------------------------------------------------------
            */

            $table->string(
                'tipo_pele',
                30
            )->nullable();

            $table->string('acne', 3)->nullable();
            $table->string('manchas', 3)->nullable();
            $table->string('melasma', 3)->nullable();
            $table->string('poros', 3)->nullable();
            $table->string('rugas', 3)->nullable();
            $table->string('flacidez', 3)->nullable();
            $table->string('rosacea', 3)->nullable();
            $table->string('sensibilidade', 3)->nullable();


            $table->string(
                'tipo_pele_avaliacao',
                30
            )->nullable();

            $table->string(
                'grau_oleosidade',
                30
            )->nullable();

            $table->string(
                'espessura_pele',
                30
            )->nullable();


            $table->string('acromia', 3)->nullable();
            $table->string('cloasma', 3)->nullable();
            $table->string('efelides', 3)->nullable();
            $table->string('hipercromia', 3)->nullable();
            $table->string('hipocromia', 3)->nullable();


            $table->string('angioma', 3)->nullable();
            $table->string('cianose', 3)->nullable();
            $table->string('eritema', 3)->nullable();
            $table->string('hematoma', 3)->nullable();
            $table->string('petequias', 3)->nullable();
            $table->string('telangectasias', 3)->nullable();


            $table->string('ceratose', 3)->nullable();
            $table->string('nodulos', 3)->nullable();
            $table->string('papulas', 3)->nullable();
            $table->string('comedio', 3)->nullable();
            $table->string('verrugas', 3)->nullable();
            $table->string('milium', 3)->nullable();
            $table->string('necrose', 3)->nullable();


            $table->string('bolha', 3)->nullable();
            $table->string('pustula', 3)->nullable();
            $table->string('vesicula', 3)->nullable();


            $table->string('crosta', 3)->nullable();
            $table->string('escara', 3)->nullable();
            $table->string('escoriacao', 3)->nullable();
            $table->string('fissura', 3)->nullable();
            $table->string('fistula', 3)->nullable();
            $table->string('ulceracao', 3)->nullable();


            $table->string('atrofia', 3)->nullable();
            $table->string('cicatriz', 3)->nullable();
            $table->string('hipertricose', 3)->nullable();
            $table->string('hirsutismo', 3)->nullable();


            $table->string('eczema', 3)->nullable();
            $table->string('hiperqueratose', 3)->nullable();
            $table->string('psoriase', 3)->nullable();

            $table->text('relatorio_pele')->nullable();


            /*
            |--------------------------------------------------------------------------
            | DESIGN DE SOBRANCELHAS
            |--------------------------------------------------------------------------
            */

            $table->string(
                'design_anterior',
                3
            )->nullable();

            $table->string(
                'falhas',
                3
            )->nullable();

            $table->string(
                'henna',
                3
            )->nullable();

            $table->string(
                'alergia_cosmeticos',
                3
            )->nullable();

            $table->text(
                'obs_design'
            )->nullable();


            $table->decimal(
                'to',
                8,
                2
            )->nullable();

            $table->decimal(
                'pc',
                8,
                2
            )->nullable();

            $table->decimal(
                'altura_inicial',
                8,
                2
            )->nullable();

            $table->decimal(
                'posicao_pma',
                8,
                2
            )->nullable();

            $table->decimal(
                'altura_pma',
                8,
                2
            )->nullable();

            $table->decimal(
                'tb',
                8,
                2
            )->nullable();

            $table->decimal(
                'altura_final',
                8,
                2
            )->nullable();

            $table->decimal(
                'espessura_inicial',
                8,
                2
            )->nullable();

            $table->decimal(
                'espessura_pma',
                8,
                2
            )->nullable();


            $table->text(
                'dicas_sobrancelhas'
            )->nullable();


            /*
            |--------------------------------------------------------------------------
            | TERMO / TRATAMENTO
            |--------------------------------------------------------------------------
            */

            $table->string(
                'local_data',
                150
            )->nullable();

            $table->string(
                'assinatura_cliente',
                150
            )->nullable();

            $table->string(
                'assinatura_profissional',
                150
            )->nullable();


            $table->string(
                'nome_mae',
                150
            )->nullable();

            $table->string(
                'nome_pai',
                150
            )->nullable();

            $table->string(
                'responsavel',
                150
            )->nullable();


            $table->date(
                'data_avaliacao'
            )->nullable();


            $table->decimal(
                'valor_tratamento',
                10,
                2
            )->nullable();


            $table->string(
                'forma_pagamento',
                30
            )->nullable();


            $table->text(
                'objetivo_tratamento'
            )->nullable();

            $table->text(
                'tratamento_proposto'
            )->nullable();


            $table->integer(
                'numero_sessoes'
            )->nullable();


            $table->string(
                'regularidade',
                30
            )->nullable();


            $table->text(
                'homecare'
            )->nullable();


            $table->timestamps();


            /*
            |--------------------------------------------------------------------------
            | UMA FICHA POR CLIENTE
            |--------------------------------------------------------------------------
            */

            $table->unique('cliente_id');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('anamneses');
    }
};