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



</head>

@include('_partials.header')

<main class="anamnese-page">

    <div class="anamnese-container">

        <div class="anamnese-header">
            <span class="anamnese-subtitle">CUIDADOS E AVALIAÇÃO</span>
            <h1>Ficha de Anamnese</h1>
            <p>
                Preencha as informações abaixo para que possamos conhecer
                melhor suas necessidades e proporcionar um atendimento personalizado.
            </p>
        </div>

        @if(session('sucesso'))
            <div class="anamnese-alert sucesso">
                {{ session('sucesso') }}
            </div>
        @endif

        @if($errors->any())
            <div class="anamnese-alert erro">
                <strong>Verifique os seguintes campos:</strong>

                <ul>
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            action="{{ route('perfil.anamnese.salvar') }}"
            method="POST"
            class="anamnese-form"
        >

            @csrf

         <!-- SEÇÃO: DADOS PESSOAIS -->

<section class="anamnese-section">

<div class="section-title">
    <span>01</span>
    <div>
        <small>INFORMAÇÕES</small>
        <h2>Dados Pessoais</h2>
    </div>
</div>

<div class="form-grid">

    <!-- NOME -->
    <div class="form-group form-group-full">
        <label for="nome">Nome</label>
        <input
            type="text"
            id="nome"
            name="nome"
            value="{{ old('nome', $anamnese['nome'] ?? '') }}"
            required
        >
    </div>

    <!-- ENDEREÇO -->
    <div class="form-group form-group-full">
        <label for="endereco">Endereço</label>
        <input
            type="text"
            id="endereco"
            name="endereco"
            value="{{ old('endereco', $anamnese['endereco'] ?? '') }}"
        >
    </div>

    <!-- BAIRRO -->
    <div class="form-group">
        <label for="bairro">Bairro</label>
        <input
            type="text"
            id="bairro"
            name="bairro"
            value="{{ old('bairro', $anamnese['bairro'] ?? '') }}"
        >
    </div>

    <!-- CIDADE -->
    <div class="form-group">
        <label for="cidade">Cidade</label>
        <input
            type="text"
            id="cidade"
            name="cidade"
            value="{{ old('cidade', $anamnese['cidade'] ?? '') }}"
        >
    </div>

    <!-- ESTADO -->
    <div class="form-group">
        <label for="estado">Estado</label>
        <input
            type="text"
            id="estado"
            name="estado"
            maxlength="2"
            value="{{ old('estado', $anamnese['estado'] ?? '') }}"
        >
    </div>

    <!-- CEP -->
    <div class="form-group">
        <label for="cep">CEP</label>
        <input
            type="text"
            id="cep"
            name="cep"
            value="{{ old('cep', $anamnese['cep'] ?? '') }}"
        >
    </div>

    <!-- TELEFONE -->
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input
            type="text"
            id="telefone"
            name="telefone"
            value="{{ old('telefone', $anamnese['telefone'] ?? '') }}"
        >
    </div>

    <!-- CELULAR -->
    <div class="form-group">
        <label for="celular">Celular</label>
        <input
            type="text"
            id="celular"
            name="celular"
            value="{{ old('celular', $anamnese['celular'] ?? '') }}"
        >
    </div>

    <!-- DATA DE NASCIMENTO -->
    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento</label>
        <input
            type="date"
            id="data_nascimento"
            name="data_nascimento"
            value="{{ old('data_nascimento', $anamnese['data_nascimento'] ?? '') }}"
        >
    </div>

    <!-- IDADE -->
    <div class="form-group">
        <label for="idade">Idade</label>
        <input
            type="number"
            id="idade"
            name="idade"
            min="0"
            max="150"
            value="{{ old('idade', $anamnese['idade'] ?? '') }}"
        >
    </div>

    <!-- PROFISSÃO -->
    <div class="form-group">
        <label for="profissao">Profissão</label>
        <input
            type="text"
            id="profissao"
            name="profissao"
            value="{{ old('profissao', $anamnese['profissao'] ?? '') }}"
        >
    </div>

    <!-- ESTADO CIVIL -->
    <div class="form-group">
        <label for="estado_civil">Estado Civil</label>
        <select id="estado_civil" name="estado_civil">
            <option value="">Selecione</option>

            <option value="Solteiro(a)"
                {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Solteiro(a)' ? 'selected' : '' }}>
                Solteiro(a)
            </option>

            <option value="Casado(a)"
                {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Casado(a)' ? 'selected' : '' }}>
                Casado(a)
            </option>

            <option value="Divorciado(a)"
                {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Divorciado(a)' ? 'selected' : '' }}>
                Divorciado(a)
            </option>

            <option value="Viúvo(a)"
                {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'selected' }}>
                Viúvo(a)
            </option>
        </select>
    </div>

    <!-- SEXO -->
    <div class="form-group">
        <label for="sexo">Sexo</label>
        <select id="sexo" name="sexo">
            <option value="">Selecione</option>

            <option value="Feminino"
                {{ old('sexo', $anamnese['sexo'] ?? '') == 'Feminino' ? 'selected' : '' }}>
                Feminino
            </option>

            <option value="Masculino"
                {{ old('sexo', $anamnese['sexo'] ?? '') == 'Masculino' ? 'selected' : '' }}>
                Masculino
            </option>
        </select>
    </div>

    <!-- NACIONALIDADE -->
    <div class="form-group">
        <label for="nacionalidade">Nacionalidade</label>
        <input
            type="text"
            id="nacionalidade"
            name="nacionalidade"
            value="{{ old('nacionalidade', $anamnese['nacionalidade'] ?? '') }}"
        >
    </div>

    <!-- COR -->
    <div class="form-group">
        <label for="cor">Cor</label>
        <input
            type="text"
            id="cor"
            name="cor"
            value="{{ old('cor', $anamnese['cor'] ?? '') }}"
        >
    </div>

    <!-- TELEFONE RESIDENCIAL -->
    <div class="form-group">
        <label for="telefone_residencial">Telefone Residencial</label>
        <input
            type="text"
            id="telefone_residencial"
            name="telefone_residencial"
            value="{{ old('telefone_residencial', $anamnese['telefone_residencial'] ?? '') }}"
        >
    </div>

    <!-- TELEFONE COMERCIAL -->
    <div class="form-group">
        <label for="telefone_comercial">Telefone Comercial</label>
        <input
            type="text"
            id="telefone_comercial"
            name="telefone_comercial"
            value="{{ old('telefone_comercial', $anamnese['telefone_comercial'] ?? '') }}"
        >
    </div>

    <!-- INDICAÇÃO -->
    <div class="form-group form-group-full">
        <label for="indicacao">Indicação</label>
        <input
            type="text"
            id="indicacao"
            name="indicacao"
            value="{{ old('indicacao', $anamnese['indicacao'] ?? '') }}"
        >
    </div>

    <!-- MOTIVO DA VISITA -->
    <div class="form-group form-group-full">
        <label for="motivo_visita">Motivo da Visita</label>
        <input
            type="text"
            id="motivo_visita"
            name="motivo_visita"
            value="{{ old('motivo_visita', $anamnese['motivo_visita'] ?? '') }}"
        >
    </div>

    <!-- E-MAIL -->
    <div class="form-group form-group-full">
        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email', $anamnese['email'] ?? '') }}"
        >
    </div>

    <!-- EM CASO DE EMERGÊNCIA -->
    <div class="form-group form-group-full">
        <label for="emergencia_nome">Em caso de emergência avisar</label>
        <input
            type="text"
            id="emergencia_nome"
            name="emergencia_nome"
            value="{{ old('emergencia_nome', $anamnese['emergencia_nome'] ?? '') }}"
        >
    </div>

    <!-- TELEFONE DE EMERGÊNCIA -->
    <div class="form-group form-group-full">
        <label for="emergencia_telefone">Telefone de Emergência</label>
        <input
            type="text"
            id="emergencia_telefone"
            name="emergencia_telefone"
            value="{{ old('emergencia_telefone', $anamnese['emergencia_telefone'] ?? '') }}"
        >
    </div>

    <!-- COMO CONHECEU -->
    <div class="form-group form-group-full">
        <label for="como_conheceu">Como conheceu nosso trabalho?</label>
        <select id="como_conheceu" name="como_conheceu">
            <option value="">Selecione</option>

            <option value="Indicação"
                {{ old('como_conheceu', $anamnese['como_conheceu'] ?? '') == 'Indicação' ? 'selected' : '' }}>
                Indicação
            </option>

            <option value="Folder"
                {{ old('como_conheceu', $anamnese['como_conheceu'] ?? '') == 'Folder' ? 'selected' : '' }}>
                Folder
            </option>

            <option value="Site"
                {{ old('como_conheceu', $anamnese['como_conheceu'] ?? '') == 'Site' ? 'selected' : '' }}>
                Site
            </option>

            <option value="Outros"
                {{ old('como_conheceu', $anamnese['como_conheceu'] ?? '') == 'Outros' ? 'selected' : '' }}>
                Outros
            </option>
        </select>
    </div>

</div>

</section>

            <!-- HISTÓRICO -->

            <section class="anamnese-section">

                <div class="section-title">
                    <span>02</span>

                    <div>
                        <small>SAÚDE E HISTÓRICO</small>
                        <h2>Histórico</h2>
                    </div>
                </div>

                <div class="question-grid">

                    <div class="question-item">
                        <p>Fez tratamento estético anteriormente?</p>

                        <label>
                            <input type="radio" name="tratamento_estetico" value="sim"
                                {{ old('tratamento_estetico', $anamnese['tratamento_estetico'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="tratamento_estetico" value="nao"
                                {{ old('tratamento_estetico', $anamnese['tratamento_estetico'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Está em tratamento médico?</p>

                        <label>
                            <input type="radio" name="tratamento_medico" value="sim"
                                {{ old('tratamento_medico', $anamnese['tratamento_medico'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="tratamento_medico" value="nao"
                                {{ old('tratamento_medico', $anamnese['tratamento_medico'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Faz uso de medicamentos?</p>

                        <label>
                            <input type="radio" name="medicamentos" value="sim"
                                {{ old('medicamentos', $anamnese['medicamentos'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="medicamentos" value="nao"
                                {{ old('medicamentos', $anamnese['medicamentos'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui alergias?</p>

                        <label>
                            <input type="radio" name="alergias" value="sim"
                                {{ old('alergias', $anamnese['alergias'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="alergias" value="nao"
                                {{ old('alergias', $anamnese['alergias'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>É gestante?</p>

                        <label>
                            <input type="radio" name="gestante" value="sim"
                                {{ old('gestante', $anamnese['gestante'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="gestante" value="nao"
                                {{ old('gestante', $anamnese['gestante'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Está amamentando?</p>

                        <label>
                            <input type="radio" name="amamentando" value="sim"
                                {{ old('amamentando', $anamnese['amamentando'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="amamentando" value="nao"
                                {{ old('amamentando', $anamnese['amamentando'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui diabetes?</p>

                        <label>
                            <input type="radio" name="diabetes" value="sim"
                                {{ old('diabetes', $anamnese['diabetes'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="diabetes" value="nao"
                                {{ old('diabetes', $anamnese['diabetes'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui hipertensão?</p>

                        <label>
                            <input type="radio" name="hipertensao" value="sim"
                                {{ old('hipertensao', $anamnese['hipertensao'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="hipertensao" value="nao"
                                {{ old('hipertensao', $anamnese['hipertensao'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui problemas cardíacos?</p>

                        <label>
                            <input type="radio" name="cardiaco" value="sim"
                                {{ old('cardiaco', $anamnese['cardiaco'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="cardiaco" value="nao"
                                {{ old('cardiaco', $anamnese['cardiaco'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui problemas de circulação?</p>

                        <label>
                            <input type="radio" name="circulacao" value="sim"
                                {{ old('circulacao', $anamnese['circulacao'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="circulacao" value="nao"
                                {{ old('circulacao', $anamnese['circulacao'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Tem marca-passo?</p>

                        <label>
                            <input type="radio" name="marcapasso" value="sim"
                                {{ old('marcapasso', $anamnese['marcapasso'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="marcapasso" value="nao"
                                {{ old('marcapasso', $anamnese['marcapasso'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui epilepsia?</p>

                        <label>
                            <input type="radio" name="epilepsia" value="sim"
                                {{ old('epilepsia', $anamnese['epilepsia'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="epilepsia" value="nao"
                                {{ old('epilepsia', $anamnese['epilepsia'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui problemas hormonais?</p>

                        <label>
                            <input type="radio" name="hormonais" value="sim"
                                {{ old('hormonais', $anamnese['hormonais'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="hormonais" value="nao"
                                {{ old('hormonais', $anamnese['hormonais'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>É tabagista?</p>

                        <label>
                            <input type="radio" name="tabagista" value="sim"
                                {{ old('tabagista', $anamnese['tabagista'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="tabagista" value="nao"
                                {{ old('tabagista', $anamnese['tabagista'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Consome bebida alcoólica?</p>

                        <label>
                            <input type="radio" name="alcool" value="sim"
                                {{ old('alcool', $anamnese['alcool'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="alcool" value="nao"
                                {{ old('alcool', $anamnese['alcool'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                </div>

                <div class="form-group textarea-group">
                    <label for="observacoes">Observações</label>

                    <textarea
                        id="observacoes"
                        name="observacoes"
                        rows="5"
                    >{{ old('observacoes', $anamnese['observacoes'] ?? '') }}</textarea>
                </div>

                <div class="question-item">
                            <p>Costuma permanecer muito tempo sentada?</p>
                            <label><input type="radio" name="muito_tempo_sentada" value="sim"> Sim</label>
                            <label><input type="radio" name="muito_tempo_sentada" value="nao"> Não</label>
                        </div>

                        <div class="question-item">
                            <p>Antecedentes cirúrgicos?</p>
                            <label><input type="radio" name="antecedentes_cirurgicos" value="sim"> Sim</label>
                            <label><input type="radio" name="antecedentes_cirurgicos" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Quais?</label>
                            <input type="text" name="antecedentes_cirurgicos_quais">
                        </div>

                        <div class="question-item">
                            <p>Tratamento estético anterior?</p>
                            <label><input type="radio" name="tratamento_estetico_anterior" value="sim"> Sim</label>
                            <label><input type="radio" name="tratamento_estetico_anterior" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Qual?</label>
                            <input type="text" name="tratamento_estetico_anterior_qual">
                        </div>

                        <div class="question-item">
                            <p>Antecedentes alérgicos?</p>
                            <label><input type="radio" name="antecedentes_alergicos" value="sim"> Sim</label>
                            <label><input type="radio" name="antecedentes_alergicos" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Quais?</label>
                            <input type="text" name="antecedentes_alergicos_quais">
                        </div>

                        <div class="question-item">
                            <p>Funcionamento intestinal regular?</p>
                            <label><input type="radio" name="funcionamento_intestinal_regular" value="sim"> Sim</label>
                            <label><input type="radio" name="funcionamento_intestinal_regular" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Observações</label>
                            <input type="text" name="funcionamento_intestinal_obs">
                        </div>

                        <div class="question-item">
                            <p>Pratica esportes?</p>
                            <label><input type="radio" name="pratica_esportes" value="sim"> Sim</label>
                            <label><input type="radio" name="pratica_esportes" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Quais?</label>
                            <input type="text" name="pratica_esportes_quais">
                        </div>

                        <div class="question-item">
                            <p>É fumante?</p>
                            <label><input type="radio" name="fumante" value="sim"> Sim</label>
                            <label><input type="radio" name="fumante" value="nao"> Não</label>
                        </div>

                        <div class="question-item">
                            <p>Alimentação balanceada?</p>
                            <label><input type="radio" name="alimentacao_balanceada" value="sim"> Sim</label>
                            <label><input type="radio" name="alimentacao_balanceada" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Tipo?</label>
                            <input type="text" name="alimentacao_tipo">
                        </div>

                        <div class="question-item">
                            <p>Ingere no mínimo 8 copos de água por dia?</p>
                            <label><input type="radio" name="agua_8_copos" value="sim"> Sim</label>
                            <label><input type="radio" name="agua_8_copos" value="nao"> Não</label>
                        </div>

                        <div class="question-item">
                            <p>É gestante?</p>
                            <label><input type="radio" name="gestante_corporal" value="sim"> Sim</label>
                            <label><input type="radio" name="gestante_corporal" value="nao"> Não</label>
                        </div>
                        <div class="form-group">
                            <label>Filhos?</label>
                            <select name="filhos">
                                <option value="">Selecione</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quantos?</label>
                            <input type="number" name="filhos_quantos">
                        </div>

                        <div class="question-item">
                            <p>Tem algum problema ortopédico?</p>
                            <label><input type="radio" name="problema_ortopedico" value="sim"> Sim</label>
                            <label><input type="radio" name="problema_ortopedico" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Qual?</label>
                            <input type="text" name="problema_ortopedico_qual">
                        </div>

                        <div class="question-item">
                            <p>Faz algum tratamento médico?</p>
                            <label><input type="radio" name="faz_tratamento_medico" value="sim"> Sim</label>
                            <label><input type="radio" name="faz_tratamento_medico" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Qual?</label>
                            <input type="text" name="faz_tratamento_medico_qual">
                        </div>

                        <div class="question-item">
                            <p>Usa ou já usou ácidos na pele?</p>
                            <label><input type="radio" name="acidos_na_pele" value="sim"> Sim</label>
                            <label><input type="radio" name="acidos_na_pele" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Quais?</label>
                            <input type="text" name="acidos_na_pele_quais">
                        </div>

                        <div class="question-item">
                            <p>Já fez algum tratamento ortomolecular?</p>
                            <label><input type="radio" name="tratamento_ortomolecular" value="sim"> Sim</label>
                            <label><input type="radio" name="tratamento_ortomolecular" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Qual?</label>
                            <input type="text" name="tratamento_ortomolecular_qual">
                        </div>

                        <div class="question-item">
                            <p>Cuidados diários e produtos em uso?</p>
                            <label><input type="radio" name="cuidados_diarios" value="sim"> Sim</label>
                            <label><input type="radio" name="cuidados_diarios" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Quais?</label>
                            <input type="text" name="cuidados_diarios_quais">
                        </div>

                        <div class="question-item">
                            <p>Portador de marca-passo?</p>
                            <label><input type="radio" name="portador_marcapasso" value="sim"> Sim</label>
                            <label><input type="radio" name="portador_marcapasso" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Qual?</label>
                            <input type="text" name="portador_marcapasso_qual">
                        </div>

                        <div class="question-item">
                            <p>Presença de metais?</p>
                            <label><input type="radio" name="presenca_metais" value="sim"> Sim</label>
                            <label><input type="radio" name="presenca_metais" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Local?</label>
                            <input type="text" name="presenca_metais_local">
                        </div>

                        <div class="question-item">
                            <p>Antecedentes oncológicos?</p>
                            <label><input type="radio" name="antecedentes_oncologicos" value="sim"> Sim</label>
                            <label><input type="radio" name="antecedentes_oncologicos" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Qual?</label>
                            <input type="text" name="antecedentes_oncologicos_qual">
                        </div>

                        <div class="question-item">
                            <p>Cirurgia ou fraturas recentes?</p>
                            <label><input type="radio" name="cirurgia_fratura_recente" value="sim"> Sim</label>
                            <label><input type="radio" name="cirurgia_fratura_recente" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Qual?</label>
                            <input type="text" name="cirurgia_fratura_recente_qual">
                        </div>

                        <div class="question-item">
                            <p>Ciclo menstrual regular?</p>
                            <label><input type="radio" name="ciclo_menstrual_regular" value="sim"> Sim</label>
                            <label><input type="radio" name="ciclo_menstrual_regular" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Observações</label>
                            <input type="text" name="ciclo_menstrual_obs">
                        </div>

                        <div class="question-item">
                            <p>Usa método anticoncepcional?</p>
                            <label><input type="radio" name="metodo_anticoncepcional" value="sim"> Sim</label>
                            <label><input type="radio" name="metodo_anticoncepcional" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Qual?</label>
                            <input type="text" name="metodo_anticoncepcional_qual">
                        </div>

                        <div class="question-item">
                            <p>Varizes?</p>
                            <label><input type="radio" name="varizes" value="sim"> Sim</label>
                            <label><input type="radio" name="varizes" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Grau</label>
                            <input type="text" name="varizes_grau">
                        </div>

                        <div class="question-item">
                            <p>Lesões?</p>
                            <label><input type="radio" name="lesoes" value="sim"> Sim</label>
                            <label><input type="radio" name="lesoes" value="nao"> Não</label>
                        </div>
                        <div class="form-group form-group-full">
                            <label>Quais?</label>
                            <input type="text" name="lesoes_quais">
                        </div>

                        <div class="question-item">
                            <p>Hipertensão?</p>
                            <label><input type="radio" name="hipertensao_corporal" value="sim"> Sim</label>
                            <label><input type="radio" name="hipertensao_corporal" value="nao"> Não</label>
                        </div>

                        <div class="question-item">
                            <p>Hipotensão?</p>
                            <label><input type="radio" name="hipotensao" value="sim"> Sim</label>
                            <label><input type="radio" name="hipotensao" value="nao"> Não</label>
                        </div>

                        <div class="question-item">
                            <p>Diabetes?</p>
                            <label><input type="radio" name="diabetes_corporal" value="sim"> Sim</label>
                            <label><input type="radio" name="diabetes_corporal" value="nao"> Não</label>
                        </div>

                        <div class="question-item">
                            <p>Epilepsia?</p>
                            <label><input type="radio" name="epilepsia_corporal" value="sim"> Sim</label>
                            <label><input type="radio" name="epilepsia_corporal" value="nao"> Não</label>
                        </div>

            </section>


            <!-- AVALIAÇÃO DA PELE -->

            <section class="anamnese-section">

                <div class="section-title">
                    <span>03</span>

                    <div>
                        <small>ANÁLISE</small>
                        <h2>Avaliação da Pele</h2>
                    </div>
                </div>

                <div class="form-grid">

                    <div class="form-group form-group-full">
                        <label for="tipo_pele">Tipo de Pele</label>

                        <select id="tipo_pele" name="tipo_pele">

                            <option value="">Selecione</option>

                            @foreach(['Normal', 'Seca', 'Oleosa', 'Mista', 'Sensível'] as $tipo)

                                <option
                                    value="{{ $tipo }}"
                                    {{ old('tipo_pele', $anamnese['tipo_pele'] ?? '') == $tipo ? 'selected' : '' }}
                                >
                                    {{ $tipo }}
                                </option>

                            @endforeach

                        </select>
                    </div>

                </div>

                <div class="check-grid">

                    @foreach([
                        'acne' => 'Acne',
                        'manchas' => 'Manchas',
                        'melasma' => 'Melasma',
                        'poros' => 'Poros Dilatados',
                        'rugas' => 'Rugas / Linhas de Expressão',
                        'flacidez' => 'Flacidez',
                        'rosacea' => 'Rosácea',
                        'sensibilidade' => 'Sensibilidade'
                    ] as $campo => $label)

                        <label class="check-item">

                            <input
                                type="checkbox"
                                name="{{ $campo }}"
                                value="sim"
                                {{ old($campo, $anamnese[$campo] ?? '') == 'sim' ? 'checked' : '' }}
                            >

                            <span>{{ $label }}</span>

                        </label>

                    @endforeach

                </div>
                <div class="form-group form-group-full">
                            <label for="tipo_pele_avaliacao">Classificação do tipo cutâneo</label>
                            <select id="tipo_pele_avaliacao" name="tipo_pele_avaliacao">
                                <option value="">Selecione</option>
                                <option value="Desidratada">Desidratada</option>
                                <option value="Lipídica">Lipídica</option>
                                <option value="Normal">Normal</option>
                                <option value="Seborreica">Seborreica</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="grau_oleosidade">Quanto ao grau de oleosidade</label>
                            <select id="grau_oleosidade" name="grau_oleosidade">
                                <option value="">Selecione</option>
                                <option value="Alípica">Alípica</option>
                                <option value="Normal">Normal</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="espessura_pele">Quanto à espessura</label>
                            <select id="espessura_pele" name="espessura_pele">
                                <option value="">Selecione</option>
                                <option value="Espessa">Espessa</option>
                                <option value="Fina">Fina</option>
                                <option value="Muito fina">Muito fina</option>
                            </select>
                        </div>

                        <label for="espessura_pele">Manchas pigmentares relacionadas à melanina</label>
                        
                        <div class="check-grid">
                            <label class="check-item"><input type="checkbox" name="acromia" value="sim"> Acromia</label>
                            <label class="check-item"><input type="checkbox" name="cloasma" value="sim"> Cloasma</label>
                            <label class="check-item"><input type="checkbox" name="efelides" value="sim"> Efélides</label>
                            <label class="check-item"><input type="checkbox" name="hipercromia" value="sim"> Hipercromia</label>
                            <label class="check-item"><input type="checkbox" name="hipocromia" value="sim"> Hipocromia</label>
                        </div>

                        <label for="manchas_vasculares">Manchas por alterações vasculares</label>
                        
                        <div class="check-grid">
                            <label class="check-item"><input type="checkbox" name="angioma" value="sim"> Angioma</label>
                            <label class="check-item"><input type="checkbox" name="cianose" value="sim"> Cianose</label>
                            <label class="check-item"><input type="checkbox" name="eritema" value="sim"> Eritema</label>
                            <label class="check-item"><input type="checkbox" name="hematoma" value="sim"> Hematoma</label>
                            <label class="check-item"><input type="checkbox" name="petequias" value="sim"> Petéquias</label>
                            <label class="check-item"><input type="checkbox" name="telangectasias" value="sim"> Telangectasias</label>
                        </div>

                        <label for="formacoes_solidas">Formações sólidas</label>
                        
                        <div class="check-grid">
                            <label class="check-item"><input type="checkbox" name="ceratose" value="sim"> Ceratose</label>
                            <label class="check-item"><input type="checkbox" name="nodulos" value="sim"> Nódulos</label>
                            <label class="check-item"><input type="checkbox" name="papulas" value="sim"> Pápulas</label>
                            <label class="check-item"><input type="checkbox" name="comedio" value="sim"> Comedão</label>
                            <label class="check-item"><input type="checkbox" name="verrugas" value="sim"> Verrugas</label>
                            <label class="check-item"><input type="checkbox" name="milium" value="sim"> Milium</label>
                            <label class="check-item"><input type="checkbox" name="necrose" value="sim"> Necrose</label>
                        </div>

                        <label for="formacoes_liquido">Formações com conteúdo líquido</label>
                        
                        <div class="check-grid">
                            <label class="check-item"><input type="checkbox" name="bolha" value="sim"> Bolha</label>
                            <label class="check-item"><input type="checkbox" name="pustula" value="sim"> Pústula</label>
                            <label class="check-item"><input type="checkbox" name="vesicula" value="sim"> Vesícula</label>
                        </div>

                        <label for="lesoes_pele">Lesões de pele</label>
                       
                        <div class="check-grid">
                            <label class="check-item"><input type="checkbox" name="crosta" value="sim"> Crosta</label>
                            <label class="check-item"><input type="checkbox" name="escara" value="sim"> Escara</label>
                            <label class="check-item"><input type="checkbox" name="escoriacao" value="sim"> Escoriação</label>
                            <label class="check-item"><input type="checkbox" name="fissura" value="sim"> Fissura</label>
                            <label class="check-item"><input type="checkbox" name="fistula" value="sim"> Fístula</label>
                            <label class="check-item"><input type="checkbox" name="ulceracao" value="sim"> Ulceração</label>
                        </div>

                        <label for="sequelas">Sequelas</label>
                       
                        <div class="check-grid">
                            <label class="check-item"><input type="checkbox" name="atrofia" value="sim"> Atrofia</label>
                            <label class="check-item"><input type="checkbox" name="cicatriz" value="sim"> Cicatriz</label>
                            <label class="check-item"><input type="checkbox" name="hipertricose" value="sim"> Hipertricose</label>
                            <label class="check-item"><input type="checkbox" name="hirsutismo" value="sim"> Hirsutismo</label>
                        </div>

                        <label for="alteracoes_queratinizacao">Alterações de queratinização</label>
                        <h3></h3>
                        <div class="check-grid">
                            <label class="check-item"><input type="checkbox" name="eczema" value="sim"> Eczema</label>
                            <label class="check-item"><input type="checkbox" name="hiperqueratose" value="sim"> Hiperqueratose</label>
                            <label class="check-item"><input type="checkbox" name="psoriase" value="sim"> Psoríase</label>
                        </div>

                        <div class="form-group textarea-group">
                            <label for="relatorio_pele">Relatório</label>
                            <textarea id="relatorio_pele" name="relatorio_pele" rows="6"></textarea>
                        </div>
            </section>


            <!-- SOBRANCELHAS -->

            <section class="anamnese-section">

                <div class="section-title">
                    <span>04</span>

                    <div>
                        <small>DESIGN</small>
                        <h2>Design de Sobrancelhas</h2>
                    </div>
                </div>

                <div class="question-grid">

                    <div class="question-item">
                        <p>Já realizou design anteriormente?</p>

                        <label>
                            <input type="radio" name="design_anterior" value="sim"
                                {{ old('design_anterior', $anamnese['design_anterior'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="design_anterior" value="nao"
                                {{ old('design_anterior', $anamnese['design_anterior'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui falhas nas sobrancelhas?</p>

                        <label>
                            <input type="radio" name="falhas" value="sim"
                                {{ old('falhas', $anamnese['falhas'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="falhas" value="nao"
                                {{ old('falhas', $anamnese['falhas'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Usa henna?</p>

                        <label>
                            <input type="radio" name="henna" value="sim"
                                {{ old('henna', $anamnese['henna'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="henna" value="nao"
                                {{ old('henna', $anamnese['henna'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                    <div class="question-item">
                        <p>Possui alergia a produtos cosméticos?</p>

                        <label>
                            <input type="radio" name="alergia_cosmeticos" value="sim"
                                {{ old('alergia_cosmeticos', $anamnese['alergia_cosmeticos'] ?? '') == 'sim' ? 'checked' : '' }}>
                            Sim
                        </label>

                        <label>
                            <input type="radio" name="alergia_cosmeticos" value="nao"
                                {{ old('alergia_cosmeticos', $anamnese['alergia_cosmeticos'] ?? '') == 'nao' ? 'checked' : '' }}>
                            Não
                        </label>
                    </div>

                </div>

                <div class="form-group textarea-group">
                    <label for="obs_design">Observações do Design</label>

                    <textarea
                        id="obs_design"
                        name="obs_design"
                        rows="5"
                    >{{ old('obs_design', $anamnese['obs_design'] ?? '') }}</textarea>
                </div>
                <div class="form-grid">
                        <div class="form-group">
                            <label for="to">TO (Tamanho do olho)</label>
                            <input type="number" step="0.01" id="to" name="to">
                        </div>

                        <div class="form-group">
                            <label for="pc">PC (TO / 2)</label>
                            <input type="number" step="0.01" id="pc" name="pc">
                        </div>

                        <div class="form-group">
                            <label for="altura_inicial">Altura Inicial (PC)</label>
                            <input type="number" step="0.01" id="altura_inicial" name="altura_inicial">
                        </div>

                        <div class="form-group">
                            <label for="posicao_pma">Posição do PMA (TO + PC)</label>
                            <input type="number" step="0.01" id="posicao_pma" name="posicao_pma">
                        </div>

                        <div class="form-group">
                            <label for="altura_pma">Altura do PMA (PC + 1,00)</label>
                            <input type="number" step="0.01" id="altura_pma" name="altura_pma">
                        </div>

                        <div class="form-group">
                            <label for="tb">TB (Tamanho da boca)</label>
                            <input type="number" step="0.01" id="tb" name="tb">
                        </div>

                        <div class="form-group">
                            <label for="altura_final">Altura Final (PC + 0,50)</label>
                            <input type="number" step="0.01" id="altura_final" name="altura_final">
                        </div>

                        <div class="form-group">
                            <label for="espessura_inicial">Espessura Inicial (Arco do cupido)</label>
                            <input type="number" step="0.01" id="espessura_inicial" name="espessura_inicial">
                        </div>

                        <div class="form-group">
                            <label for="espessura_pma">Espessura PMA (Espessura inicial / 2)</label>
                            <input type="number" step="0.01" id="espessura_pma" name="espessura_pma">
                        </div>
                    </div>

                    <div class="form-group textarea-group">
                        <label for="dicas_sobrancelhas">Observações do Design</label>
                        <textarea id="dicas_sobrancelhas" name="dicas_sobrancelhas" rows="5"></textarea>
                    </div>

                    <div class="termo-texto">
                        <p><strong>Dicas:</strong></p>
                        <ul>
                            <li>Olhos juntos – sobrancelhas mais afastadas.</li>
                            <li>Olhos separados – sobrancelhas mais juntas.</li>
                            <li>Aba nasal larga – sobrancelhas mais juntas.</li>
                            <li>Aba nasal fina – sobrancelhas mais separadas.</li>
                            <li>Limite de boca: mínimo de 4,5 e máximo de 5,5.</li>
                        </ul>
</div>

            </section>


            <!-- TERMO -->

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
                        Declaro que todas as informações fornecidas são verdadeiras
                        e autorizo o uso dos meus dados para fins de avaliação estética.
                    </p>

                </div>

                <div class="form-grid">
                </div>
                                    <div class="termo-texto">
                        <p>
                            Declaro que todas as informações fornecidas nesta ficha de anamnese são verdadeiras
                            e completas, assumindo total responsabilidade pela veracidade dos dados apresentados.
                        </p>

                        <p>
                            Estou ciente de que a omissão de informações sobre meu estado de saúde, uso de
                            medicamentos, alergias, gestação ou qualquer outra condição relevante poderá
                            comprometer os resultados do tratamento estético e minha segurança durante os
                            procedimentos.
                        </p>

                        <p>
                            Declaro ainda que fui orientada pela profissional responsável sobre os cuidados
                            necessários antes, durante e após o tratamento, comprometendo-me a seguir o protocolo
                            sugerido para manutenção em casa e assumindo os riscos caso não siga corretamente
                            as orientações fornecidas.
                        </p>

                        <p>
                            Autorizo a realização da avaliação estética e dos procedimentos propostos, bem como
                            o registro das informações desta ficha para fins de acompanhamento do tratamento.
                        </p>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="local_data">Local e Data</label>
                            <input type="text" id="local_data" name="local_data">
                        </div>

                        <div class="form-group">
                            <label for="assinatura_cliente">Assinatura do Cliente</label>
                            <input type="text" id="assinatura_cliente" name="assinatura_cliente">
                        </div>

                        <div class="form-group">
                            <label for="assinatura_profissional">Assinatura da Profissional</label>
                            <input type="text" id="assinatura_profissional" name="assinatura_profissional">
                        </div>
                    </div>

                    <h3>Autorização do responsável (caso o cliente seja menor de idade)</h3>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nome_mae">Mãe</label>
                            <input type="text" id="nome_mae" name="nome_mae">
                        </div>

                        <div class="form-group">
                            <label for="nome_pai">Pai</label>
                            <input type="text" id="nome_pai" name="nome_pai">
                        </div>

                        <div class="form-group form-group-full">
                            <label for="responsavel">Responsável</label>
                            <input type="text" id="responsavel" name="responsavel">
                        </div>
                    </div>

                    <h3>Dados do Tratamento</h3>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="data_avaliacao">Data da Avaliação</label>
                            <input type="date" id="data_avaliacao" name="data_avaliacao">
                        </div>

                        <div class="form-group">
                            <label for="valor_tratamento">Valor do Tratamento (R$)</label>
                            <input type="number" step="0.01" id="valor_tratamento" name="valor_tratamento">
                        </div>

                        <div class="form-group form-group-full">
                            <label for="forma_pagamento">Forma de Pagamento</label>
                            <select id="forma_pagamento" name="forma_pagamento">
                                <option value="">Selecione</option>
                                <option value="À vista">À vista</option>
                                <option value="Parcelado">Parcelado</option>
                                <option value="Cartão">Cartão</option>
                                <option value="Cheque">Cheque</option>
                            </select>
                        </div>

                        <div class="form-group form-group-full">
                            <label for="objetivo_tratamento">Objetivo do Tratamento</label>
                            <textarea id="objetivo_tratamento" name="objetivo_tratamento" rows="4"></textarea>
                        </div>

                        <div class="form-group form-group-full">
                            <label for="tratamento_proposto">Tratamento Proposto</label>
                            <textarea id="tratamento_proposto" name="tratamento_proposto" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="numero_sessoes">Número de Sessões</label>
                            <input type="number" id="numero_sessoes" name="numero_sessoes">
                        </div>

                        <div class="form-group">
                            <label for="regularidade">Regularidade</label>
                            <select id="regularidade" name="regularidade">
                                <option value="">Selecione</option>
                                <option value="Uma vez">Uma vez</option>
                                <option value="Duas vezes">Duas vezes</option>
                                <option value="Três vezes">Três vezes</option>
                                <option value="Quatro vezes">Quatro vezes</option>
                                <option value="Todos os dias">Todos os dias</option>
                            </select>
                        </div>

    <div class="form-group form-group-full">
        <label for="homecare">Homecare</label>
        <textarea id="homecare" name="homecare" rows="3"></textarea>
    </div>
</div>

            </section>


            <div class="anamnese-actions">

                <button type="submit" class="btn-salvar-ficha">
                    SALVAR FICHA
                </button>

            </div>

        </form>

    </div>

</main>

@include('_partials.footer')