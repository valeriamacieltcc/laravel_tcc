<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil da Cliente</title>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">

</head>

<link rel="stylesheet" href="{{ asset('css/home.css') }}">



<body>

@include('_partials.header')


<main class="anamnese-page">

    <div class="anamnese-container">


        {{-- CABEÇALHO --}}

        <div class="anamnese-header">

            <span class="anamnese-subtitle">
                CUIDADOS E AVALIAÇÃO
            </span>

            <h1>
                Ficha de Anamnese
            </h1>

        </div>


        {{-- ===================================================== --}}
        {{-- SE NÃO EXISTIR FICHA --}}
        {{-- ===================================================== --}}

        @if(!$anamnese)

            <div class="anamnese-alert">

                <p>
                    Sua ficha de anamnese ainda não foi preenchida.
                </p>

                <a
                    href="{{ route('cliente.perfil.anamnese.edit') }}"
                    class="btn-salvar-ficha"
                >
                    PREENCHER FICHA
                </a>

            </div>


        @else


            {{-- ===================================================== --}}
            {{-- 01 - DADOS PESSOAIS --}}
            {{-- ===================================================== --}}

            <section class="anamnese-section">

                <div class="section-title">

                    <span>01</span>

                    <div>
                        <small>INFORMAÇÕES</small>
                        <h2>Dados Pessoais</h2>
                    </div>

                </div>


                <div class="form-grid">

                    <div class="form-group">
                        <strong>Nome Completo</strong>
                        <p>{{ $anamnese->nome ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Data de Nascimento</strong>

                        <p>
                            {{ $anamnese->data_nascimento
                                ? $anamnese->data_nascimento->format('d/m/Y')
                                : 'Não informado'
                            }}
                        </p>
                    </div>

                    <div class="form-group">
                        <strong>Idade</strong>
                        <p>{{ $anamnese->idade ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Sexo</strong>
                        <p>{{ $anamnese->sexo ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Estado Civil</strong>
                        <p>{{ $anamnese->estado_civil ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Profissão</strong>
                        <p>{{ $anamnese->profissao ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Nacionalidade</strong>
                        <p>{{ $anamnese->nacionalidade ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Cor</strong>
                        <p>{{ $anamnese->cor ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>E-mail</strong>
                        <p>{{ $anamnese->email ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Telefone</strong>
                        <p>{{ $anamnese->telefone ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Celular</strong>
                        <p>{{ $anamnese->celular ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Telefone Residencial</strong>
                        <p>{{ $anamnese->telefone_residencial ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Telefone Comercial</strong>
                        <p>{{ $anamnese->telefone_comercial ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Endereço</strong>
                        <p>{{ $anamnese->endereco ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Bairro</strong>
                        <p>{{ $anamnese->bairro ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Cidade</strong>
                        <p>{{ $anamnese->cidade ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Estado</strong>
                        <p>{{ $anamnese->estado ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>CEP</strong>
                        <p>{{ $anamnese->cep ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Indicação</strong>
                        <p>{{ $anamnese->indicacao ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Como conheceu?</strong>
                        <p>{{ $anamnese->como_conheceu ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Contato de Emergência</strong>
                        <p>{{ $anamnese->emergencia_nome ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Telefone de Emergência</strong>
                        <p>{{ $anamnese->emergencia_telefone ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group full-width">
                        <strong>Motivo da Visita</strong>
                        <p>{{ $anamnese->motivo_visita ?: 'Não informado' }}</p>
                    </div>

                </div>

            </section>


            {{-- ===================================================== --}}
            {{-- 02 - HISTÓRICO DE SAÚDE --}}
            {{-- ===================================================== --}}

            <section class="anamnese-section">

                <div class="section-title">

                    <span>02</span>

                    <div>
                        <small>SAÚDE</small>
                        <h2>Histórico</h2>
                    </div>

                </div>


                @php

                    $historico = [

                        'tratamento_estetico' =>
                            'Já realizou tratamento estético?',

                        'tratamento_medico' =>
                            'Está realizando tratamento médico?',

                        'medicamentos' =>
                            'Utiliza medicamentos?',

                        'alergias' =>
                            'Possui alergias?',

                        'gestante' =>
                            'Está gestante?',

                        'amamentando' =>
                            'Está amamentando?',

                        'diabetes' =>
                            'Possui diabetes?',

                        'hipertensao' =>
                            'Possui hipertensão?',

                        'cardiaco' =>
                            'Possui problemas cardíacos?',

                        'circulacao' =>
                            'Possui problemas de circulação?',

                        'marcapasso' =>
                            'Possui marcapasso?',

                        'epilepsia' =>
                            'Possui epilepsia?',

                        'hormonais' =>
                            'Possui alterações hormonais?',

                        'tabagista' =>
                            'É tabagista?',

                        'alcool' =>
                            'Consome bebida alcoólica?',

                        'muito_tempo_sentada' =>
                            'Costuma permanecer muito tempo sentada?',

                        'antecedentes_cirurgicos' =>
                            'Possui antecedentes cirúrgicos?',

                        'tratamento_estetico_anterior' =>
                            'Já realizou tratamento estético anteriormente?',

                        'antecedentes_alergicos' =>
                            'Possui antecedentes alérgicos?',

                        'funcionamento_intestinal_regular' =>
                            'Funcionamento intestinal regular?',

                        'pratica_esportes' =>
                            'Pratica esportes?',

                        'fumante' =>
                            'É fumante?',

                        'alimentacao_balanceada' =>
                            'Possui alimentação balanceada?',

                        'agua_8_copos' =>
                            'Consome aproximadamente 8 copos de água por dia?',

                        'gestante_corporal' =>
                            'Está gestante?',

                        'filhos' =>
                            'Possui filhos?',

                        'problema_ortopedico' =>
                            'Possui problema ortopédico?',

                        'faz_tratamento_medico' =>
                            'Faz tratamento médico?',

                        'acidos_na_pele' =>
                            'Utiliza ácidos na pele?',

                        'tratamento_ortomolecular' =>
                            'Faz tratamento ortomolecular?',

                        'cuidados_diarios' =>
                            'Realiza cuidados diários com a pele?',

                        'portador_marcapasso' =>
                            'É portador de marcapasso?',

                        'presenca_metais' =>
                            'Possui metais no corpo?',

                        'antecedentes_oncologicos' =>
                            'Possui antecedentes oncológicos?',

                        'cirurgia_fratura_recente' =>
                            'Possui cirurgia ou fratura recente?',

                        'ciclo_menstrual_regular' =>
                            'Ciclo menstrual regular?',

                        'metodo_anticoncepcional' =>
                            'Utiliza método anticoncepcional?',

                        'varizes' =>
                            'Possui varizes?',

                        'lesoes' =>
                            'Possui lesões?',

                        'hipertensao_corporal' =>
                            'Possui hipertensão?',

                        'hipotensao' =>
                            'Possui hipotensão?',

                        'diabetes_corporal' =>
                            'Possui diabetes?',

                        'epilepsia_corporal' =>
                            'Possui epilepsia?',

                    ];

                @endphp


                <div class="form-grid">

                    @foreach($historico as $campo => $pergunta)

                        <div class="form-group">

                            <strong>
                                {{ $pergunta }}
                            </strong>

                            <p>
                                @if($anamnese->$campo === 'sim')
                                    Sim
                                @elseif($anamnese->$campo === 'nao')
                                    Não
                                @else
                                    Não informado
                                @endif
                            </p>

                        </div>

                    @endforeach

                </div>


                <div class="form-group">
                    <strong>Antecedentes cirúrgicos - Quais?</strong>
                    <p>{{ $anamnese->antecedentes_cirurgicos_quais ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Tratamento estético anterior - Qual?</strong>
                    <p>{{ $anamnese->tratamento_estetico_anterior_qual ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Antecedentes alérgicos - Quais?</strong>
                    <p>{{ $anamnese->antecedentes_alergicos_quais ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Funcionamento intestinal - Observações</strong>
                    <p>{{ $anamnese->funcionamento_intestinal_obs ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Esportes praticados</strong>
                    <p>{{ $anamnese->pratica_esportes_quais ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Tipo de alimentação</strong>
                    <p>{{ $anamnese->alimentacao_tipo ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Quantidade de filhos</strong>
                    <p>{{ $anamnese->filhos_quantos ?? 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Problema ortopédico - Qual?</strong>
                    <p>{{ $anamnese->problema_ortopedico_qual ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Tratamento médico - Qual?</strong>
                    <p>{{ $anamnese->faz_tratamento_medico_qual ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Ácidos utilizados</strong>
                    <p>{{ $anamnese->acidos_na_pele_quais ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Tratamento ortomolecular</strong>
                    <p>{{ $anamnese->tratamento_ortomolecular_qual ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Cuidados diários</strong>
                    <p>{{ $anamnese->cuidados_diarios_quais ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Presença de metais - Local</strong>
                    <p>{{ $anamnese->presenca_metais_local ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Antecedentes oncológicos</strong>
                    <p>{{ $anamnese->antecedentes_oncologicos_qual ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Cirurgia/fratura recente</strong>
                    <p>{{ $anamnese->cirurgia_fratura_recente_qual ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Ciclo menstrual - Observações</strong>
                    <p>{{ $anamnese->ciclo_menstrual_obs ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Método anticoncepcional</strong>
                    <p>{{ $anamnese->metodo_anticoncepcional_qual ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Grau das varizes</strong>
                    <p>{{ $anamnese->varizes_grau ?: 'Não informado' }}</p>
                </div>

                <div class="form-group">
                    <strong>Lesões - Quais?</strong>
                    <p>{{ $anamnese->lesoes_quais ?: 'Não informado' }}</p>
                </div>

                <div class="form-group full-width">
                    <strong>Observações</strong>
                    <p>{{ $anamnese->observacoes ?: 'Não informado' }}</p>
                </div>

            </section>


            {{-- ===================================================== --}}
            {{-- 03 - AVALIAÇÃO DA PELE --}}
            {{-- ===================================================== --}}

            <section class="anamnese-section">

                <div class="section-title">

                    <span>03</span>

                    <div>
                        <small>AVALIAÇÃO</small>
                        <h2>Avaliação da Pele</h2>
                    </div>

                </div>


                <div class="form-grid">

                    <div class="form-group">
                        <strong>Tipo de Pele</strong>
                        <p>{{ $anamnese->tipo_pele ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Tipo de Pele - Avaliação</strong>
                        <p>{{ $anamnese->tipo_pele_avaliacao ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Grau de Oleosidade</strong>
                        <p>{{ $anamnese->grau_oleosidade ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Espessura da Pele</strong>
                        <p>{{ $anamnese->espessura_pele ?: 'Não informado' }}</p>
                    </div>

                </div>


                @php

                    $pele = [

                        'acne' => 'Acne',
                        'manchas' => 'Manchas',
                        'melasma' => 'Melasma',
                        'poros' => 'Poros Dilatados',
                        'rugas' => 'Rugas / Linhas de Expressão',
                        'flacidez' => 'Flacidez',
                        'rosacea' => 'Rosácea',
                        'sensibilidade' => 'Sensibilidade',

                        'acromia' => 'Acromia',
                        'cloasma' => 'Cloasma',
                        'efelides' => 'Efélides',
                        'hipercromia' => 'Hipercromia',
                        'hipocromia' => 'Hipocromia',

                        'angioma' => 'Angioma',
                        'cianose' => 'Cianose',
                        'eritema' => 'Eritema',
                        'hematoma' => 'Hematoma',
                        'petequias' => 'Petéquias',
                        'telangectasias' => 'Telangectasias',

                        'ceratose' => 'Ceratose',
                        'nodulos' => 'Nódulos',
                        'papulas' => 'Pápulas',
                        'comedio' => 'Comedão',
                        'verrugas' => 'Verrugas',
                        'milium' => 'Milium',
                        'necrose' => 'Necrose',

                        'bolha' => 'Bolha',
                        'pustula' => 'Pústula',
                        'vesicula' => 'Vesícula',

                        'crosta' => 'Crosta',
                        'escara' => 'Escara',
                        'escoriacao' => 'Escoriação',
                        'fissura' => 'Fissura',
                        'fistula' => 'Fístula',
                        'ulceracao' => 'Ulceração',

                        'atrofia' => 'Atrofia',
                        'cicatriz' => 'Cicatriz',
                        'hipertricose' => 'Hipertricose',
                        'hirsutismo' => 'Hirsutismo',

                        'eczema' => 'Eczema',
                        'hiperqueratose' => 'Hiperqueratose',
                        'psoriase' => 'Psoríase',

                    ];

                @endphp


                <div class="form-grid">

                    @foreach($pele as $campo => $nome)

                        <div class="form-group">

                            <strong>
                                {{ $nome }}
                            </strong>

                            <p>
                                {{ $anamnese->$campo === 'sim'
                                    ? 'Sim'
                                    : 'Não'
                                }}
                            </p>

                        </div>

                    @endforeach

                </div>


                <div class="form-group full-width">

                    <strong>
                        Relatório da Pele
                    </strong>

                    <p>
                        {{ $anamnese->relatorio_pele ?: 'Não informado' }}
                    </p>

                </div>

            </section>


            {{-- ===================================================== --}}
            {{-- 04 - DESIGN DE SOBRANCELHAS --}}
            {{-- ===================================================== --}}

            <section class="anamnese-section">

                <div class="section-title">

                    <span>04</span>

                    <div>
                        <small>DESIGN</small>
                        <h2>Design de Sobrancelhas</h2>
                    </div>

                </div>


                <div class="form-grid">

                    <div class="form-group">
                        <strong>Já realizou design anteriormente?</strong>
                        <p>{{ $anamnese->design_anterior === 'sim' ? 'Sim' : 'Não' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Possui falhas?</strong>
                        <p>{{ $anamnese->falhas === 'sim' ? 'Sim' : 'Não' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Já utilizou henna?</strong>
                        <p>{{ $anamnese->henna === 'sim' ? 'Sim' : 'Não' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Alergia a cosméticos?</strong>
                        <p>{{ $anamnese->alergia_cosmeticos === 'sim' ? 'Sim' : 'Não' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>TO</strong>
                        <p>{{ $anamnese->to ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>PC</strong>
                        <p>{{ $anamnese->pc ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Altura Inicial</strong>
                        <p>{{ $anamnese->altura_inicial ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Posição PMA</strong>
                        <p>{{ $anamnese->posicao_pma ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Altura PMA</strong>
                        <p>{{ $anamnese->altura_pma ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>TB</strong>
                        <p>{{ $anamnese->tb ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Altura Final</strong>
                        <p>{{ $anamnese->altura_final ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Espessura Inicial</strong>
                        <p>{{ $anamnese->espessura_inicial ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Espessura PMA</strong>
                        <p>{{ $anamnese->espessura_pma ?? 'Não informado' }}</p>
                    </div>

                </div>


                <div class="form-group full-width">

                    <strong>
                        Observações do Design
                    </strong>

                    <p>
                        {{ $anamnese->dicas_sobrancelhas ?: 'Não informado' }}
                    </p>

                </div>

            </section>


            {{-- ===================================================== --}}
            {{-- 05 - TERMO --}}
            {{-- ===================================================== --}}

            <section class="anamnese-section termo-section">

                <div class="section-title">

                    <span>05</span>

                    <div>
                        <small>FINALIZAÇÃO</small>
                        <h2>Termo de Responsabilidade</h2>
                    </div>

                </div>


                <div class="termo-texto">

                    <p>
                        Declaro que todas as informações fornecidas nesta ficha
                        de anamnese são verdadeiras e completas.
                    </p>

                </div>


                <div class="form-grid">

                    <div class="form-group">
                        <strong>Local e Data</strong>
                        <p>{{ $anamnese->local_data ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Assinatura do Cliente</strong>
                        <p>{{ $anamnese->assinatura_cliente ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Assinatura da Profissional</strong>
                        <p>{{ $anamnese->assinatura_profissional ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Nome da Mãe</strong>
                        <p>{{ $anamnese->nome_mae ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Nome do Pai</strong>
                        <p>{{ $anamnese->nome_pai ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Responsável</strong>
                        <p>{{ $anamnese->responsavel ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Data da Avaliação</strong>

                        <p>
                            {{ $anamnese->data_avaliacao
                                ? $anamnese->data_avaliacao->format('d/m/Y')
                                : 'Não informado'
                            }}
                        </p>
                    </div>

                    <div class="form-group">
                        <strong>Valor do Tratamento</strong>

                        <p>
                            {{ $anamnese->valor_tratamento
                                ? 'R$ ' . number_format(
                                    $anamnese->valor_tratamento,
                                    2,
                                    ',',
                                    '.'
                                )
                                : 'Não informado'
                            }}
                        </p>
                    </div>

                    <div class="form-group">
                        <strong>Forma de Pagamento</strong>
                        <p>{{ $anamnese->forma_pagamento ?: 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Número de Sessões</strong>
                        <p>{{ $anamnese->numero_sessoes ?? 'Não informado' }}</p>
                    </div>

                    <div class="form-group">
                        <strong>Regularidade</strong>
                        <p>{{ $anamnese->regularidade ?: 'Não informado' }}</p>
                    </div>

                </div>


                <div class="form-group full-width">

                    <strong>Objetivo do Tratamento</strong>

                    <p>
                        {{ $anamnese->objetivo_tratamento ?: 'Não informado' }}
                    </p>

                </div>


                <div class="form-group full-width">

                    <strong>Tratamento Proposto</strong>

                    <p>
                        {{ $anamnese->tratamento_proposto ?: 'Não informado' }}
                    </p>

                </div>


                <div class="form-group full-width">

                    <strong>Homecare</strong>

                    <p>
                        {{ $anamnese->homecare ?: 'Não informado' }}
                    </p>

                </div>

            </section>


            {{-- BOTÕES --}}

            <div class="anamnese-actions">

                <a
                    href="{{ route('cliente.perfil.show') }}"
                    class="btn-voltar-ficha"
                >
                    VOLTAR PARA O PERFIL
                </a>

                <a
                    href="{{ route('cliente.perfil.anamnese.edit') }}"
                    class="btn-salvar-ficha"
                >
                    ATUALIZAR FICHA
                </a>

            </div>


        @endif

    </div>

</main>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>