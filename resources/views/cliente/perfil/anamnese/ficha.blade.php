<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Ficha de Anamnese</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

</head>

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

            <p>
                Preencha as informações abaixo para que possamos conhecer
                melhor suas necessidades e proporcionar um atendimento personalizado.
            </p>

        </div>


        {{-- MENSAGEM DE SUCESSO --}}

        @if(session('sucesso'))

            <div class="anamnese-alert sucesso">

                {{ session('sucesso') }}

            </div>

        @endif


        {{-- ERROS --}}

        @if($errors->any())

            <div class="anamnese-alert erro">

                <strong>
                    Verifique os seguintes campos:
                </strong>

                <ul>

                    @foreach($errors->all() as $erro)

                        <li>
                            {{ $erro }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif



        {{-- ===================================================== --}}
        {{-- FORMULÁRIO --}}
        {{-- ===================================================== --}}

        @if($anamnese)

            <form
                action="{{ route('cliente.perfil.anamnese.update') }}"
                method="POST"
                class="anamnese-form"
            >

                @csrf
                @method('PUT')

        @else

            <form
                action="{{ route('cliente.perfil.anamnese.store') }}"
                method="POST"
                class="anamnese-form"
            >

                @csrf

        @endif



            {{-- ================================================= --}}
            {{-- 01 - DADOS PESSOAIS --}}
            {{-- ================================================= --}}

            <section class="anamnese-section">

                <div class="section-title">

                    <span>
                        01
                    </span>

                    <div>

                        <small>
                            INFORMAÇÕES
                        </small>

                        <h2>
                            Dados Pessoais
                        </h2>

                    </div>

                </div>


                <div class="form-grid">


                    {{-- NOME --}}

                    <div class="form-group form-group-full">

                        <label for="nome">
                            Nome
                        </label>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            value="{{ old(
                                'nome',
                                $anamnese->nome ?? $user->name
                            ) }}"
                            required
                        >

                    </div>


                    {{-- ENDEREÇO --}}

                    <div class="form-group form-group-full">

                        <label for="endereco">
                            Endereço
                        </label>

                        <input
                            type="text"
                            id="endereco"
                            name="endereco"
                            value="{{ old(
                                'endereco',
                                $anamnese->endereco ?? $cliente->logradouro
                            ) }}"
                        >

                    </div>


                    {{-- BAIRRO --}}

                    <div class="form-group">

                        <label for="bairro">
                            Bairro
                        </label>

                        <input
                            type="text"
                            id="bairro"
                            name="bairro"
                            value="{{ old(
                                'bairro',
                                $anamnese->bairro ?? $cliente->bairro
                            ) }}"
                        >

                    </div>


                    {{-- CIDADE --}}

                    <div class="form-group">

                        <label for="cidade">
                            Cidade
                        </label>

                        <input
                            type="text"
                            id="cidade"
                            name="cidade"
                            value="{{ old(
                                'cidade',
                                $anamnese->cidade ?? $cliente->cidade
                            ) }}"
                        >

                    </div>


                    {{-- ESTADO --}}

                    <div class="form-group">

                        <label for="estado">
                            Estado
                        </label>

                        <input
                            type="text"
                            id="estado"
                            name="estado"
                            maxlength="2"
                            value="{{ old(
                                'estado',
                                $anamnese->estado ?? $cliente->estado
                            ) }}"
                        >

                    </div>


                    {{-- CEP --}}

                    <div class="form-group">

                        <label for="cep">
                            CEP
                        </label>

                        <input
                            type="text"
                            id="cep"
                            name="cep"
                            value="{{ old(
                                'cep',
                                $anamnese->cep ?? $cliente->cep
                            ) }}"
                        >

                    </div>


                    {{-- TELEFONE --}}

                    <div class="form-group">

                        <label for="telefone">
                            Telefone
                        </label>

                        <input
                            type="text"
                            id="telefone"
                            name="telefone"
                            value="{{ old(
                                'telefone',
                                $anamnese->telefone ?? $cliente->telefone
                            ) }}"
                        >

                    </div>


                    {{-- CELULAR --}}

                    <div class="form-group">

                        <label for="celular">
                            Celular
                        </label>

                        <input
                            type="text"
                            id="celular"
                            name="celular"
                            value="{{ old(
                                'celular',
                                $anamnese->celular ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- DATA NASCIMENTO --}}

                    <div class="form-group">

                        <label for="data_nascimento">
                            Data de Nascimento
                        </label>

                        <input
                            type="date"
                            id="data_nascimento"
                            name="data_nascimento"
                            value="{{ old(
                                'data_nascimento',
                                $anamnese->data_nascimento
                                ?? optional($cliente->data_nascimento)->format('Y-m-d')
                            ) }}"
                        >

                    </div>


                    {{-- IDADE --}}

                    <div class="form-group">

                        <label for="idade">
                            Idade
                        </label>

                        <input
                            type="number"
                            id="idade"
                            name="idade"
                            min="0"
                            max="150"
                            value="{{ old(
                                'idade',
                                $anamnese->idade
                                ?? ($cliente->data_nascimento
                                    ? $cliente->data_nascimento->age
                                    : '')
                            ) }}"
                        >

                    </div>


                    {{-- PROFISSÃO --}}

                    <div class="form-group">

                        <label for="profissao">
                            Profissão
                        </label>

                        <input
                            type="text"
                            id="profissao"
                            name="profissao"
                            value="{{ old(
                                'profissao',
                                $anamnese->profissao ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- ESTADO CIVIL --}}

                    <div class="form-group">

                        <label for="estado_civil">
                            Estado Civil
                        </label>

                        <select
                            id="estado_civil"
                            name="estado_civil"
                        >

                            <option value="">
                                Selecione
                            </option>

                            @foreach([
                                'Solteiro(a)',
                                'Casado(a)',
                                'Divorciado(a)',
                                'Viúvo(a)'
                            ] as $estadoCivil)

                                <option
                                    value="{{ $estadoCivil }}"
                                    {{ old(
                                        'estado_civil',
                                        $anamnese->estado_civil ?? ''
                                    ) == $estadoCivil ? 'selected' : '' }}
                                >
                                    {{ $estadoCivil }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- SEXO --}}

                    <div class="form-group">

                        <label for="sexo">
                            Sexo
                        </label>

                        <select
                            id="sexo"
                            name="sexo"
                        >

                            <option value="">
                                Selecione
                            </option>

                            <option
                                value="Feminino"
                                {{ old(
                                    'sexo',
                                    $anamnese->sexo ?? ''
                                ) == 'Feminino' ? 'selected' : '' }}
                            >
                                Feminino
                            </option>

                            <option
                                value="Masculino"
                                {{ old(
                                    'sexo',
                                    $anamnese->sexo ?? ''
                                ) == 'Masculino' ? 'selected' : '' }}
                            >
                                Masculino
                            </option>

                        </select>

                    </div>


                    {{-- NACIONALIDADE --}}

                    <div class="form-group">

                        <label for="nacionalidade">
                            Nacionalidade
                        </label>

                        <input
                            type="text"
                            id="nacionalidade"
                            name="nacionalidade"
                            value="{{ old(
                                'nacionalidade',
                                $anamnese->nacionalidade ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- COR --}}

                    <div class="form-group">

                        <label for="cor">
                            Cor
                        </label>

                        <input
                            type="text"
                            id="cor"
                            name="cor"
                            value="{{ old(
                                'cor',
                                $anamnese->cor ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- TELEFONE RESIDENCIAL --}}

                    <div class="form-group">

                        <label for="telefone_residencial">
                            Telefone Residencial
                        </label>

                        <input
                            type="text"
                            id="telefone_residencial"
                            name="telefone_residencial"
                            value="{{ old(
                                'telefone_residencial',
                                $anamnese->telefone_residencial ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- TELEFONE COMERCIAL --}}

                    <div class="form-group">

                        <label for="telefone_comercial">
                            Telefone Comercial
                        </label>

                        <input
                            type="text"
                            id="telefone_comercial"
                            name="telefone_comercial"
                            value="{{ old(
                                'telefone_comercial',
                                $anamnese->telefone_comercial ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- INDICAÇÃO --}}

                    <div class="form-group form-group-full">

                        <label for="indicacao">
                            Indicação
                        </label>

                        <input
                            type="text"
                            id="indicacao"
                            name="indicacao"
                            value="{{ old(
                                'indicacao',
                                $anamnese->indicacao ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- MOTIVO VISITA --}}

                    <div class="form-group form-group-full">

                        <label for="motivo_visita">
                            Motivo da Visita
                        </label>

                        <input
                            type="text"
                            id="motivo_visita"
                            name="motivo_visita"
                            value="{{ old(
                                'motivo_visita',
                                $anamnese->motivo_visita ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- EMAIL --}}

                    <div class="form-group form-group-full">

                        <label for="email">
                            E-mail
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old(
                                'email',
                                $anamnese->email ?? $user->email
                            ) }}"
                        >

                    </div>


                    {{-- EMERGÊNCIA --}}

                    <div class="form-group form-group-full">

                        <label for="emergencia_nome">
                            Em caso de emergência avisar
                        </label>

                        <input
                            type="text"
                            id="emergencia_nome"
                            name="emergencia_nome"
                            value="{{ old(
                                'emergencia_nome',
                                $anamnese->emergencia_nome ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group">

                        <label for="emergencia_telefone">
                            Telefone de Emergência
                        </label>

                        <input
                            type="text"
                            id="emergencia_telefone"
                            name="emergencia_telefone"
                            value="{{ old(
                                'emergencia_telefone',
                                $anamnese->emergencia_telefone ?? ''
                            ) }}"
                        >

                    </div>


                    {{-- COMO CONHECEU --}}

                    <div class="form-group form-group-full">

                        <label for="como_conheceu">
                            Como conheceu nosso trabalho?
                        </label>

                        <select
                            id="como_conheceu"
                            name="como_conheceu"
                        >

                            <option value="">
                                Selecione
                            </option>

                            @foreach([
                                'Indicação',
                                'Folder',
                                'Site',
                                'Outros'
                            ] as $opcao)

                                <option
                                    value="{{ $opcao }}"
                                    {{ old(
                                        'como_conheceu',
                                        $anamnese->como_conheceu ?? ''
                                    ) == $opcao ? 'selected' : '' }}
                                >
                                    {{ $opcao }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- 02 - HISTÓRICO --}}
            {{-- ================================================= --}}

            <section class="anamnese-section">

                <div class="section-title">

                    <span>
                        02
                    </span>

                    <div>

                        <small>
                            SAÚDE E HISTÓRICO
                        </small>

                        <h2>
                            Histórico
                        </h2>

                    </div>

                </div>


                <div class="question-grid">

                    @php

                        $perguntasHistorico = [

                            'tratamento_estetico'
                                => 'Fez tratamento estético anteriormente?',

                            'tratamento_medico'
                                => 'Está em tratamento médico?',

                            'medicamentos'
                                => 'Faz uso de medicamentos?',

                            'alergias'
                                => 'Possui alergias?',

                            'gestante'
                                => 'É gestante?',

                            'amamentando'
                                => 'Está amamentando?',

                            'diabetes'
                                => 'Possui diabetes?',

                            'hipertensao'
                                => 'Possui hipertensão?',

                            'cardiaco'
                                => 'Possui problemas cardíacos?',

                            'circulacao'
                                => 'Possui problemas de circulação?',

                            'marcapasso'
                                => 'Tem marca-passo?',

                            'epilepsia'
                                => 'Possui epilepsia?',

                            'hormonais'
                                => 'Possui problemas hormonais?',

                            'tabagista'
                                => 'É tabagista?',

                            'alcool'
                                => 'Consome bebida alcoólica?',

                            'muito_tempo_sentada'
                                => 'Costuma permanecer muito tempo sentada?',

                        ];

                    @endphp


                    @foreach($perguntasHistorico as $campo => $pergunta)

                        <div class="question-item">

                            <p>
                                {{ $pergunta }}
                            </p>

                            <label>

                                <input
                                    type="radio"
                                    name="{{ $campo }}"
                                    value="sim"
                                    {{ old(
                                        $campo,
                                        $anamnese?->$campo ?? ''
                                    ) == 'sim' ? 'checked' : '' }}
                                >

                                Sim

                            </label>


                            <label>

                                <input
                                    type="radio"
                                    name="{{ $campo }}"
                                    value="nao"
                                    {{ old(
                                        $campo,
                                        $anamnese?->$campo ?? ''
                                    ) == 'nao' ? 'checked' : '' }}
                                >

                                Não

                            </label>

                        </div>

                    @endforeach

                </div>


                <div class="form-group textarea-group">

                    <label for="observacoes">
                        Observações
                    </label>

                    <textarea
                        id="observacoes"
                        name="observacoes"
                        rows="5"
                    >{{ old(
                        'observacoes',
                        $anamnese->observacoes ?? ''
                    ) }}</textarea>

                </div>



                {{-- ANTECEDENTES CIRÚRGICOS --}}

                <div class="question-item">

                    <p>
                        Antecedentes cirúrgicos?
                    </p>

                    <label>

                        <input
                            type="radio"
                            name="antecedentes_cirurgicos"
                            value="sim"
                            {{ old(
                                'antecedentes_cirurgicos',
                                $anamnese->antecedentes_cirurgicos ?? ''
                            ) == 'sim' ? 'checked' : '' }}
                        >

                        Sim

                    </label>

                    <label>

                        <input
                            type="radio"
                            name="antecedentes_cirurgicos"
                            value="nao"
                            {{ old(
                                'antecedentes_cirurgicos',
                                $anamnese->antecedentes_cirurgicos ?? ''
                            ) == 'nao' ? 'checked' : '' }}
                        >

                        Não

                    </label>

                </div>


                <div class="form-group form-group-full">

                    <label>
                        Quais?
                    </label>

                    <input
                        type="text"
                        name="antecedentes_cirurgicos_quais"
                        value="{{ old(
                            'antecedentes_cirurgicos_quais',
                            $anamnese->antecedentes_cirurgicos_quais ?? ''
                        ) }}"
                    >

                </div>



                {{-- TRATAMENTO ESTÉTICO ANTERIOR --}}

                <div class="question-item">

                    <p>
                        Tratamento estético anterior?
                    </p>

                    <label>

                        <input
                            type="radio"
                            name="tratamento_estetico_anterior"
                            value="sim"
                            {{ old(
                                'tratamento_estetico_anterior',
                                $anamnese->tratamento_estetico_anterior ?? ''
                            ) == 'sim' ? 'checked' : '' }}
                        >

                        Sim

                    </label>

                    <label>

                        <input
                            type="radio"
                            name="tratamento_estetico_anterior"
                            value="nao"
                            {{ old(
                                'tratamento_estetico_anterior',
                                $anamnese->tratamento_estetico_anterior ?? ''
                            ) == 'nao' ? 'checked' : '' }}
                        >

                        Não

                    </label>

                </div>


                <div class="form-group form-group-full">

                    <label>
                        Qual?
                    </label>

                    <input
                        type="text"
                        name="tratamento_estetico_anterior_qual"
                        value="{{ old(
                            'tratamento_estetico_anterior_qual',
                            $anamnese->tratamento_estetico_anterior_qual ?? ''
                        ) }}"
                    >

                </div>



                {{-- ANTECEDENTES ALÉRGICOS --}}

                <div class="question-item">

                    <p>
                        Antecedentes alérgicos?
                    </p>

                    @foreach(['sim' => 'Sim', 'nao' => 'Não'] as $valor => $texto)

                        <label>

                            <input
                                type="radio"
                                name="antecedentes_alergicos"
                                value="{{ $valor }}"
                                {{ old(
                                    'antecedentes_alergicos',
                                    $anamnese->antecedentes_alergicos ?? ''
                                ) == $valor ? 'checked' : '' }}
                            >

                            {{ $texto }}

                        </label>

                    @endforeach

                </div>


                <div class="form-group form-group-full">

                    <label>
                        Quais?
                    </label>

                    <input
                        type="text"
                        name="antecedentes_alergicos_quais"
                        value="{{ old(
                            'antecedentes_alergicos_quais',
                            $anamnese->antecedentes_alergicos_quais ?? ''
                        ) }}"
                    >

                </div>



                {{-- OUTRAS PERGUNTAS --}}

                @php

                    $outrasPerguntas = [

                        'funcionamento_intestinal_regular'
                            => 'Funcionamento intestinal regular?',

                        'pratica_esportes'
                            => 'Pratica esportes?',

                        'fumante'
                            => 'É fumante?',

                        'alimentacao_balanceada'
                            => 'Alimentação balanceada?',

                        'agua_8_copos'
                            => 'Ingere no mínimo 8 copos de água por dia?',

                        'gestante_corporal'
                            => 'É gestante?',

                        'problema_ortopedico'
                            => 'Tem algum problema ortopédico?',

                        'faz_tratamento_medico'
                            => 'Faz algum tratamento médico?',

                        'acidos_na_pele'
                            => 'Usa ou já usou ácidos na pele?',

                        'tratamento_ortomolecular'
                            => 'Já fez algum tratamento ortomolecular?',

                        'cuidados_diarios'
                            => 'Cuidados diários e produtos em uso?',

                        'portador_marcapasso'
                            => 'Portador de marca-passo?',

                        'presenca_metais'
                            => 'Presença de metais?',

                        'antecedentes_oncologicos'
                            => 'Antecedentes oncológicos?',

                        'cirurgia_fratura_recente'
                            => 'Cirurgia ou fraturas recentes?',

                        'ciclo_menstrual_regular'
                            => 'Ciclo menstrual regular?',

                        'metodo_anticoncepcional'
                            => 'Usa método anticoncepcional?',

                        'varizes'
                            => 'Varizes?',

                        'lesoes'
                            => 'Lesões?',

                        'hipertensao_corporal'
                            => 'Hipertensão?',

                        'hipotensao'
                            => 'Hipotensão?',

                        'diabetes_corporal'
                            => 'Diabetes?',

                        'epilepsia_corporal'
                            => 'Epilepsia?',

                    ];

                @endphp


                @foreach($outrasPerguntas as $campo => $pergunta)

                    <div class="question-item">

                        <p>
                            {{ $pergunta }}
                        </p>

                        @foreach([
                            'sim' => 'Sim',
                            'nao' => 'Não'
                        ] as $valor => $texto)

                            <label>

                                <input
                                    type="radio"
                                    name="{{ $campo }}"
                                    value="{{ $valor }}"
                                    {{ old(
                                        $campo,
                                        $anamnese?->$campo ?? ''
                                    ) == $valor ? 'checked' : '' }}
                                >

                                {{ $texto }}

                            </label>

                        @endforeach

                    </div>

                @endforeach



                <div class="form-grid">

                    <div class="form-group form-group-full">

                        <label>
                            Funcionamento intestinal - Observações
                        </label>

                        <input
                            type="text"
                            name="funcionamento_intestinal_obs"
                            value="{{ old(
                                'funcionamento_intestinal_obs',
                                $anamnese->funcionamento_intestinal_obs ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group form-group-full">

                        <label>
                            Quais esportes?
                        </label>

                        <input
                            type="text"
                            name="pratica_esportes_quais"
                            value="{{ old(
                                'pratica_esportes_quais',
                                $anamnese->pratica_esportes_quais ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group form-group-full">

                        <label>
                            Tipo de alimentação
                        </label>

                        <input
                            type="text"
                            name="alimentacao_tipo"
                            value="{{ old(
                                'alimentacao_tipo',
                                $anamnese->alimentacao_tipo ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Filhos?
                        </label>

                        <select name="filhos">

                            <option value="">
                                Selecione
                            </option>

                            <option
                                value="sim"
                                {{ old(
                                    'filhos',
                                    $anamnese->filhos ?? ''
                                ) == 'sim' ? 'selected' : '' }}
                            >
                                Sim
                            </option>

                            <option
                                value="nao"
                                {{ old(
                                    'filhos',
                                    $anamnese->filhos ?? ''
                                ) == 'nao' ? 'selected' : '' }}
                            >
                                Não
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            Quantos?
                        </label>

                        <input
                            type="number"
                            name="filhos_quantos"
                            value="{{ old(
                                'filhos_quantos',
                                $anamnese->filhos_quantos ?? ''
                            ) }}"
                        >

                    </div>


                    @php

                        $camposComplementares = [

                            'problema_ortopedico_qual'
                                => 'Qual problema ortopédico?',

                            'faz_tratamento_medico_qual'
                                => 'Qual tratamento médico?',

                            'acidos_na_pele_quais'
                                => 'Quais ácidos?',

                            'tratamento_ortomolecular_qual'
                                => 'Qual tratamento ortomolecular?',

                            'cuidados_diarios_quais'
                                => 'Quais cuidados/produtos?',

                            'portador_marcapasso_qual'
                                => 'Informações sobre marca-passo',

                            'presenca_metais_local'
                                => 'Local da presença de metais',

                            'antecedentes_oncologicos_qual'
                                => 'Qual antecedente oncológico?',

                            'cirurgia_fratura_recente_qual'
                                => 'Qual cirurgia ou fratura?',

                            'ciclo_menstrual_obs'
                                => 'Observações do ciclo menstrual',

                            'metodo_anticoncepcional_qual'
                                => 'Qual método anticoncepcional?',

                            'varizes_grau'
                                => 'Grau das varizes',

                            'lesoes_quais'
                                => 'Quais lesões?',

                        ];

                    @endphp


                    @foreach($camposComplementares as $campo => $label)

                        <div class="form-group form-group-full">

                            <label>
                                {{ $label }}
                            </label>

                            <input
                                type="text"
                                name="{{ $campo }}"
                                value="{{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) }}"
                            >

                        </div>

                    @endforeach

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- 03 - AVALIAÇÃO DA PELE --}}
            {{-- ================================================= --}}

            <section class="anamnese-section">

                <div class="section-title">

                    <span>
                        03
                    </span>

                    <div>

                        <small>
                            ANÁLISE
                        </small>

                        <h2>
                            Avaliação da Pele
                        </h2>

                    </div>

                </div>


                <div class="form-grid">

                    <div class="form-group form-group-full">

                        <label for="tipo_pele">
                            Tipo de Pele
                        </label>

                        <select
                            id="tipo_pele"
                            name="tipo_pele"
                        >

                            <option value="">
                                Selecione
                            </option>

                            @foreach([
                                'Normal',
                                'Seca',
                                'Oleosa',
                                'Mista',
                                'Sensível'
                            ] as $tipo)

                                <option
                                    value="{{ $tipo }}"
                                    {{ old(
                                        'tipo_pele',
                                        $anamnese->tipo_pele ?? ''
                                    ) == $tipo ? 'selected' : '' }}
                                >

                                    {{ $tipo }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="form-group form-group-full">

                        <label for="tipo_pele_avaliacao">
                            Classificação do tipo cutâneo
                        </label>

                        <select
                            id="tipo_pele_avaliacao"
                            name="tipo_pele_avaliacao"
                        >

                            <option value="">
                                Selecione
                            </option>

                            @foreach([
                                'Desidratada',
                                'Lipídica',
                                'Normal',
                                'Seborreica'
                            ] as $tipo)

                                <option
                                    value="{{ $tipo }}"
                                    {{ old(
                                        'tipo_pele_avaliacao',
                                        $anamnese->tipo_pele_avaliacao ?? ''
                                    ) == $tipo ? 'selected' : '' }}
                                >

                                    {{ $tipo }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="grau_oleosidade">
                            Quanto ao grau de oleosidade
                        </label>

                        <select
                            id="grau_oleosidade"
                            name="grau_oleosidade"
                        >

                            <option value="">
                                Selecione
                            </option>

                            @foreach([
                                'Alípica',
                                'Normal'
                            ] as $tipo)

                                <option
                                    value="{{ $tipo }}"
                                    {{ old(
                                        'grau_oleosidade',
                                        $anamnese->grau_oleosidade ?? ''
                                    ) == $tipo ? 'selected' : '' }}
                                >

                                    {{ $tipo }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="espessura_pele">
                            Quanto à espessura
                        </label>

                        <select
                            id="espessura_pele"
                            name="espessura_pele"
                        >

                            <option value="">
                                Selecione
                            </option>

                            @foreach([
                                'Espessa',
                                'Fina',
                                'Muito fina'
                            ] as $tipo)

                                <option
                                    value="{{ $tipo }}"
                                    {{ old(
                                        'espessura_pele',
                                        $anamnese->espessura_pele ?? ''
                                    ) == $tipo ? 'selected' : '' }}
                                >

                                    {{ $tipo }}

                                </option>

                            @endforeach

                        </select>

                    </div>

                </div>



                {{-- CARACTERÍSTICAS DA PELE --}}

                <h3>
                    Características
                </h3>

                <div class="check-grid">

                    @foreach([

                        'acne' => 'Acne',
                        'manchas' => 'Manchas',
                        'melasma' => 'Melasma',
                        'poros' => 'Poros Dilatados',
                        'rugas' => 'Rugas / Linhas de Expressão',
                        'flacidez' => 'Flacidez',
                        'rosacea' => 'Rosácea',
                        'sensibilidade' => 'Sensibilidade',

                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) == 'sim' ? 'checked' : '' }}
                            >

                            <span>
                                {{ $label }}
                            </span>

                        </label>

                    @endforeach

                </div>



                {{-- MANCHAS PIGMENTARES --}}

                <h3>
                    Manchas pigmentares relacionadas à melanina
                </h3>

                <div class="check-grid">

                    @foreach([

                        'acromia' => 'Acromia',
                        'cloasma' => 'Cloasma',
                        'efelides' => 'Efélides',
                        'hipercromia' => 'Hipercromia',
                        'hipocromia' => 'Hipocromia',

                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) == 'sim' ? 'checked' : '' }}
                            >

                            {{ $label }}

                        </label>

                    @endforeach

                </div>



                {{-- ALTERAÇÕES VASCULARES --}}

                <h3>
                    Manchas por alterações vasculares
                </h3>

                <div class="check-grid">

                    @foreach([

                        'angioma' => 'Angioma',
                        'cianose' => 'Cianose',
                        'eritema' => 'Eritema',
                        'hematoma' => 'Hematoma',
                        'petequias' => 'Petéquias',
                        'telangectasias' => 'Telangectasias',

                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) == 'sim' ? 'checked' : '' }}
                            >

                            {{ $label }}

                        </label>

                    @endforeach

                </div>



                {{-- FORMAÇÕES SÓLIDAS --}}

                <h3>
                    Formações sólidas
                </h3>

                <div class="check-grid">

                    @foreach([

                        'ceratose' => 'Ceratose',
                        'nodulos' => 'Nódulos',
                        'papulas' => 'Pápulas',
                        'comedio' => 'Comedão',
                        'verrugas' => 'Verrugas',
                        'milium' => 'Milium',
                        'necrose' => 'Necrose',

                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) == 'sim' ? 'checked' : '' }}
                            >

                            {{ $label }}

                        </label>

                    @endforeach

                </div>



                {{-- CONTEÚDO LÍQUIDO --}}

                <h3>
                    Formações com conteúdo líquido
                </h3>

                <div class="check-grid">

                    @foreach([

                        'bolha' => 'Bolha',
                        'pustula' => 'Pústula',
                        'vesicula' => 'Vesícula',

                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) == 'sim' ? 'checked' : '' }}
                            >

                            {{ $label }}

                        </label>

                    @endforeach

                </div>



                {{-- LESÕES --}}

                <h3>
                    Lesões de pele
                </h3>

                <div class="check-grid">

                    @foreach([

                        'crosta' => 'Crosta',
                        'escara' => 'Escara',
                        'escoriacao' => 'Escoriação',
                        'fissura' => 'Fissura',
                        'fistula' => 'Fístula',
                        'ulceracao' => 'Ulceração',

                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) == 'sim' ? 'checked' : '' }}
                            >

                            {{ $label }}

                        </label>

                    @endforeach

                </div>



                {{-- SEQUELAS --}}

                <h3>
                    Sequelas
                </h3>

                <div class="check-grid">

                    @foreach([

                        'atrofia' => 'Atrofia',
                        'cicatriz' => 'Cicatriz',
                        'hipertricose' => 'Hipertricose',
                        'hirsutismo' => 'Hirsutismo',

                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) == 'sim' ? 'checked' : '' }}
                            >

                            {{ $label }}

                        </label>

                    @endforeach

                </div>



                {{-- QUERATINIZAÇÃO --}}

                <h3>
                    Alterações de queratinização
                </h3>

                <div class="check-grid">

                    @foreach([

                        'eczema' => 'Eczema',
                        'hiperqueratose' => 'Hiperqueratose',
                        'psoriase' => 'Psoríase',

                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) == 'sim' ? 'checked' : '' }}
                            >

                            {{ $label }}

                        </label>

                    @endforeach

                </div>


                <div class="form-group textarea-group">

                    <label for="relatorio_pele">
                        Relatório
                    </label>

                    <textarea
                        id="relatorio_pele"
                        name="relatorio_pele"
                        rows="6"
                    >{{ old(
                        'relatorio_pele',
                        $anamnese->relatorio_pele ?? ''
                    ) }}</textarea>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- 04 - SOBRANCELHAS --}}
            {{-- ================================================= --}}

            <section class="anamnese-section">

                <div class="section-title">

                    <span>
                        04
                    </span>

                    <div>

                        <small>
                            DESIGN
                        </small>

                        <h2>
                            Design de Sobrancelhas
                        </h2>

                    </div>

                </div>


                <div class="question-grid">

                    @foreach([

                        'design_anterior'
                            => 'Já realizou design anteriormente?',

                        'falhas'
                            => 'Possui falhas nas sobrancelhas?',

                        'henna'
                            => 'Usa henna?',

                        'alergia_cosmeticos'
                            => 'Possui alergia a produtos cosméticos?',

                    ] as $campo => $pergunta)

                        <div class="question-item">

                            <p>
                                {{ $pergunta }}
                            </p>

                            @foreach([
                                'sim' => 'Sim',
                                'nao' => 'Não'
                            ] as $valor => $texto)

                                <label>

                                    <input
                                        type="radio"
                                        name="{{ $campo }}"
                                        value="{{ $valor }}"
                                        {{ old(
                                            $campo,
                                            $anamnese?->$campo ?? ''
                                        ) == $valor ? 'checked' : '' }}
                                    >

                                    {{ $texto }}

                                </label>

                            @endforeach

                        </div>

                    @endforeach

                </div>


                <div class="form-group textarea-group">

                    <label for="obs_design">
                        Observações do Design
                    </label>

                    <textarea
                        id="obs_design"
                        name="obs_design"
                        rows="5"
                    >{{ old(
                        'obs_design',
                        $anamnese->obs_design ?? ''
                    ) }}</textarea>

                </div>


                <div class="form-grid">

                    @foreach([

                        'to' => 'TO (Tamanho do olho)',

                        'pc' => 'PC (TO / 2)',

                        'altura_inicial'
                            => 'Altura Inicial (PC)',

                        'posicao_pma'
                            => 'Posição do PMA (TO + PC)',

                        'altura_pma'
                            => 'Altura do PMA (PC + 1,00)',

                        'tb'
                            => 'TB (Tamanho da boca)',

                        'altura_final'
                            => 'Altura Final (PC + 0,50)',

                        'espessura_inicial'
                            => 'Espessura Inicial (Arco do cupido)',

                        'espessura_pma'
                            => 'Espessura PMA (Espessura inicial / 2)',

                    ] as $campo => $label)

                        <div class="form-group">

                            <label for="{{ $campo }}">
                                {{ $label }}
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                id="{{ $campo }}"
                                name="{{ $campo }}"
                                value="{{ old(
                                    $campo,
                                    $anamnese?->$campo ?? ''
                                ) }}"
                            >

                        </div>

                    @endforeach

                </div>


                <div class="form-group textarea-group">

                    <label for="dicas_sobrancelhas">
                        Observações do Design
                    </label>

                    <textarea
                        id="dicas_sobrancelhas"
                        name="dicas_sobrancelhas"
                        rows="5"
                    >{{ old(
                        'dicas_sobrancelhas',
                        $anamnese->dicas_sobrancelhas ?? ''
                    ) }}</textarea>

                </div>


                <div class="termo-texto">

                    <p>
                        <strong>
                            Dicas:
                        </strong>
                    </p>

                    <ul>

                        <li>
                            Olhos juntos – sobrancelhas mais afastadas.
                        </li>

                        <li>
                            Olhos separados – sobrancelhas mais juntas.
                        </li>

                        <li>
                            Aba nasal larga – sobrancelhas mais juntas.
                        </li>

                        <li>
                            Aba nasal fina – sobrancelhas mais separadas.
                        </li>

                        <li>
                            Limite de boca: mínimo de 4,5 e máximo de 5,5.
                        </li>

                    </ul>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- 05 - TERMO --}}
            {{-- ================================================= --}}

            <section class="anamnese-section termo-section">

                <div class="section-title">

                    <span>
                        05
                    </span>

                    <div>

                        <small>
                            FINALIZAÇÃO
                        </small>

                        <h2>
                            Termo de Responsabilidade
                        </h2>

                    </div>

                </div>


                <div class="termo-texto">

                    <p>
                        Declaro que todas as informações fornecidas nesta ficha de
                        anamnese são verdadeiras e completas, assumindo total
                        responsabilidade pela veracidade dos dados apresentados.
                    </p>

                    <p>
                        Estou ciente de que a omissão de informações sobre meu
                        estado de saúde, uso de medicamentos, alergias, gestação
                        ou qualquer outra condição relevante poderá comprometer
                        os resultados do tratamento estético e minha segurança
                        durante os procedimentos.
                    </p>

                    <p>
                        Declaro ainda que fui orientada pela profissional responsável
                        sobre os cuidados necessários antes, durante e após o tratamento,
                        comprometendo-me a seguir o protocolo sugerido.
                    </p>

                    <p>
                        Autorizo a realização da avaliação estética e dos procedimentos
                        propostos, bem como o registro das informações desta ficha para
                        fins de acompanhamento do tratamento.
                    </p>

                </div>


                <div class="form-grid">


                    <div class="form-group">

                        <label for="local_data">
                            Local e Data
                        </label>

                        <input
                            type="text"
                            id="local_data"
                            name="local_data"
                            value="{{ old(
                                'local_data',
                                $anamnese->local_data ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group">

                        <label for="assinatura_cliente">
                            Assinatura do Cliente
                        </label>

                        <input
                            type="text"
                            id="assinatura_cliente"
                            name="assinatura_cliente"
                            value="{{ old(
                                'assinatura_cliente',
                                $anamnese->assinatura_cliente ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group">

                        <label for="assinatura_profissional">
                            Assinatura da Profissional
                        </label>

                        <input
                            type="text"
                            id="assinatura_profissional"
                            name="assinatura_profissional"
                            value="{{ old(
                                'assinatura_profissional',
                                $anamnese->assinatura_profissional ?? ''
                            ) }}"
                        >

                    </div>

                </div>



                <h3>
                    Autorização do responsável
                    (caso o cliente seja menor de idade)
                </h3>


                <div class="form-grid">


                    <div class="form-group">

                        <label for="nome_mae">
                            Mãe
                        </label>

                        <input
                            type="text"
                            id="nome_mae"
                            name="nome_mae"
                            value="{{ old(
                                'nome_mae',
                                $anamnese->nome_mae ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group">

                        <label for="nome_pai">
                            Pai
                        </label>

                        <input
                            type="text"
                            id="nome_pai"
                            name="nome_pai"
                            value="{{ old(
                                'nome_pai',
                                $anamnese->nome_pai ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group form-group-full">

                        <label for="responsavel">
                            Responsável
                        </label>

                        <input
                            type="text"
                            id="responsavel"
                            name="responsavel"
                            value="{{ old(
                                'responsavel',
                                $anamnese->responsavel ?? ''
                            ) }}"
                        >

                    </div>

                </div>



                <h3>
                    Dados do Tratamento
                </h3>


                <div class="form-grid">


                    <div class="form-group">

                        <label for="data_avaliacao">
                            Data da Avaliação
                        </label>

                        <input
                            type="date"
                            id="data_avaliacao"
                            name="data_avaliacao"
                            value="{{ old(
                                'data_avaliacao',
                                $anamnese->data_avaliacao ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group">

                        <label for="valor_tratamento">
                            Valor do Tratamento (R$)
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            id="valor_tratamento"
                            name="valor_tratamento"
                            value="{{ old(
                                'valor_tratamento',
                                $anamnese->valor_tratamento ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group form-group-full">

                        <label for="forma_pagamento">
                            Forma de Pagamento
                        </label>

                        <select
                            id="forma_pagamento"
                            name="forma_pagamento"
                        >

                            <option value="">
                                Selecione
                            </option>

                            @foreach([
                                'À vista',
                                'Parcelado',
                                'Cartão',
                                'Cheque'
                            ] as $forma)

                                <option
                                    value="{{ $forma }}"
                                    {{ old(
                                        'forma_pagamento',
                                        $anamnese->forma_pagamento ?? ''
                                    ) == $forma ? 'selected' : '' }}
                                >

                                    {{ $forma }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="form-group form-group-full">

                        <label for="objetivo_tratamento">
                            Objetivo do Tratamento
                        </label>

                        <textarea
                            id="objetivo_tratamento"
                            name="objetivo_tratamento"
                            rows="4"
                        >{{ old(
                            'objetivo_tratamento',
                            $anamnese->objetivo_tratamento ?? ''
                        ) }}</textarea>

                    </div>


                    <div class="form-group form-group-full">

                        <label for="tratamento_proposto">
                            Tratamento Proposto
                        </label>

                        <textarea
                            id="tratamento_proposto"
                            name="tratamento_proposto"
                            rows="4"
                        >{{ old(
                            'tratamento_proposto',
                            $anamnese->tratamento_proposto ?? ''
                        ) }}</textarea>

                    </div>


                    <div class="form-group">

                        <label for="numero_sessoes">
                            Número de Sessões
                        </label>

                        <input
                            type="number"
                            id="numero_sessoes"
                            name="numero_sessoes"
                            value="{{ old(
                                'numero_sessoes',
                                $anamnese->numero_sessoes ?? ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group">

                        <label for="regularidade">
                            Regularidade
                        </label>

                        <select
                            id="regularidade"
                            name="regularidade"
                        >

                            <option value="">
                                Selecione
                            </option>

                            @foreach([
                                'Uma vez',
                                'Duas vezes',
                                'Três vezes',
                                'Quatro vezes',
                                'Todos os dias'
                            ] as $regularidade)

                                <option
                                    value="{{ $regularidade }}"
                                    {{ old(
                                        'regularidade',
                                        $anamnese->regularidade ?? ''
                                    ) == $regularidade ? 'selected' : '' }}
                                >

                                    {{ $regularidade }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="form-group form-group-full">

                        <label for="homecare">
                            Homecare
                        </label>

                        <textarea
                            id="homecare"
                            name="homecare"
                            rows="3"
                        >{{ old(
                            'homecare',
                            $anamnese->homecare ?? ''
                        ) }}</textarea>

                    </div>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- BOTÕES --}}
            {{-- ================================================= --}}

            <div class="anamnese-actions">

                <a
                    href="{{ route('cliente.perfil.show') }}"
                    class="btn-voltar-ficha"
                >
                    VOLTAR
                </a>


                <button
                    type="submit"
                    class="btn-salvar-ficha"
                >

                    @if($anamnese)

                        ATUALIZAR FICHA

                    @else

                        SALVAR FICHA

                    @endif

                </button>

            </div>


        </form>



        {{-- ===================================================== --}}
        {{-- EXCLUIR --}}
        {{-- ===================================================== --}}

        @if($anamnese)

            <form
                action="{{ route('cliente.perfil.anamnese.destroy') }}"
                method="POST"
                onsubmit="return confirm('Tem certeza que deseja excluir sua ficha de anamnese?')"
            >

                @csrf
                @method('DELETE')


                <div class="anamnese-actions">

                    <button
                        type="submit"
                        class="btn-excluir-ficha"
                    >
                        EXCLUIR FICHA
                    </button>

                </div>

            </form>

        @endif


    </div>

</main>


@include('_partials.footer')


</body>

</html>