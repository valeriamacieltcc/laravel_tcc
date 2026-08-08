<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil da Cliente</title>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

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

                    <div class="form-group form-group-full">
                        <label for="endereco">Endereço</label>

                        <input
                            type="text"
                            id="endereco"
                            name="endereco"
                            value="{{ old('endereco', $anamnese['endereco'] ?? '') }}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="bairro">Bairro</label>

                        <input
                            type="text"
                            id="bairro"
                            name="bairro"
                            value="{{ old('bairro', $anamnese['bairro'] ?? '') }}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>

                        <input
                            type="text"
                            id="cidade"
                            name="cidade"
                            value="{{ old('cidade', $anamnese['cidade'] ?? '') }}"
                        >
                    </div>

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

                    <div class="form-group">
                        <label for="cep">CEP</label>

                        <input
                            type="text"
                            id="cep"
                            name="cep"
                            value="{{ old('cep', $anamnese['cep'] ?? '') }}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>

                        <input
                            type="text"
                            id="telefone"
                            name="telefone"
                            value="{{ old('telefone', $anamnese['telefone'] ?? '') }}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="celular">Celular</label>

                        <input
                            type="text"
                            id="celular"
                            name="celular"
                            value="{{ old('celular', $anamnese['celular'] ?? '') }}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="data_nascimento">Data de Nascimento</label>

                        <input
                            type="date"
                            id="data_nascimento"
                            name="data_nascimento"
                            value="{{ old('data_nascimento', $anamnese['data_nascimento'] ?? '') }}"
                        >
                    </div>

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

                    <div class="form-group">
                        <label for="profissao">Profissão</label>

                        <input
                            type="text"
                            id="profissao"
                            name="profissao"
                            value="{{ old('profissao', $anamnese['profissao'] ?? '') }}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="estado_civil">Estado Civil</label>

                        <select id="estado_civil" name="estado_civil">

                            <option value="">Selecione</option>

                            <option
                                value="Solteiro(a)"
                                {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Solteiro(a)' ? 'selected' : '' }}
                            >
                                Solteiro(a)
                            </option>

                            <option
                                value="Casado(a)"
                                {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Casado(a)' ? 'selected' : '' }}
                            >
                                Casado(a)
                            </option>

                            <option
                                value="Divorciado(a)"
                                {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Divorciado(a)' ? 'selected' : '' }}
                            >
                                Divorciado(a)
                            </option>

                            <option
                                value="Viúvo(a)"
                                {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Viúvo(a)' ? 'selected' : '' }}
                            >
                                Viúvo(a)
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

                    <div class="form-group">
                        <label for="data">Data</label>

                        <input
                            type="date"
                            id="data"
                            name="data"
                            value="{{ old('data', $anamnese['data'] ?? '') }}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="assinatura">Assinatura do Cliente</label>

                        <input
                            type="text"
                            id="assinatura"
                            name="assinatura"
                            value="{{ old('assinatura', $anamnese['assinatura'] ?? '') }}"
                        >
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