<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ficha de Anamnese</title>

</head>


<body>


@if(session('sucesso'))

    <div>

        {{ session('sucesso') }}

    </div>

@endif


@if($errors->any())

    <div>

        <ul>

            @foreach($errors->all() as $erro)

                <li>{{ $erro }}</li>

            @endforeach

        </ul>

    </div>

@endif


<h1>Ficha de Anamnese</h1>


<form action="{{ route('ficha.salvar') }}" method="POST">

    @csrf


    <!-- DADOS PESSOAIS -->

    <h2>Dados Pessoais</h2>


    <label>Nome:</label><br>

    <input
        type="text"
        name="nome"
        value="{{ old('nome', $anamnese['nome'] ?? '') }}"
        required>

    <br><br>


    <label>Endereço:</label><br>

    <input
        type="text"
        name="endereco"
        value="{{ old('endereco', $anamnese['endereco'] ?? '') }}">

    <br><br>


    <label>Bairro:</label><br>

    <input
        type="text"
        name="bairro"
        value="{{ old('bairro', $anamnese['bairro'] ?? '') }}">

    <br><br>


    <label>Cidade:</label><br>

    <input
        type="text"
        name="cidade"
        value="{{ old('cidade', $anamnese['cidade'] ?? '') }}">

    <br><br>


    <label>Estado:</label><br>

    <input
        type="text"
        name="estado"
        value="{{ old('estado', $anamnese['estado'] ?? '') }}">

    <br><br>


    <label>CEP:</label><br>

    <input
        type="text"
        name="cep"
        value="{{ old('cep', $anamnese['cep'] ?? '') }}">

    <br><br>


    <label>Telefone:</label><br>

    <input
        type="text"
        name="telefone"
        value="{{ old('telefone', $anamnese['telefone'] ?? '') }}">

    <br><br>


    <label>Celular:</label><br>

    <input
        type="text"
        name="celular"
        value="{{ old('celular', $anamnese['celular'] ?? '') }}">

    <br><br>


    <label>Data de Nascimento:</label><br>

    <input
        type="date"
        name="data_nascimento"
        value="{{ old('data_nascimento', $anamnese['data_nascimento'] ?? '') }}">

    <br><br>


    <label>Idade:</label><br>

    <input
        type="number"
        name="idade"
        value="{{ old('idade', $anamnese['idade'] ?? '') }}">

    <br><br>


    <label>Profissão:</label><br>

    <input
        type="text"
        name="profissao"
        value="{{ old('profissao', $anamnese['profissao'] ?? '') }}">

    <br><br>


    <label>Estado Civil:</label><br>

    <select name="estado_civil">

        <option value="">

            Selecione

        </option>


        <option
            value="Solteiro(a)"
            {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Solteiro(a)' ? 'selected' : '' }}>

            Solteiro(a)

        </option>


        <option
            value="Casado(a)"
            {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Casado(a)' ? 'selected' : '' }}>

            Casado(a)

        </option>


        <option
            value="Divorciado(a)"
            {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Divorciado(a)' ? 'selected' : '' }}>

            Divorciado(a)

        </option>


        <option
            value="Viúvo(a)"
            {{ old('estado_civil', $anamnese['estado_civil'] ?? '') == 'Viúvo(a)' ? 'selected' : '' }}>

            Viúvo(a)

        </option>

    </select>


    <hr>


    <!-- HISTÓRICO -->

    <h2>Histórico</h2>


    <label>Fez tratamento estético anteriormente?</label>

    <br>

    <input
        type="radio"
        name="tratamento_estetico"
        value="sim"
        {{ old('tratamento_estetico', $anamnese['tratamento_estetico'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="tratamento_estetico"
        value="nao"
        {{ old('tratamento_estetico', $anamnese['tratamento_estetico'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Está em tratamento médico?</label>

    <br>

    <input
        type="radio"
        name="tratamento_medico"
        value="sim"
        {{ old('tratamento_medico', $anamnese['tratamento_medico'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="tratamento_medico"
        value="nao"
        {{ old('tratamento_medico', $anamnese['tratamento_medico'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Faz uso de medicamentos?</label>

    <br>

    <input
        type="radio"
        name="medicamentos"
        value="sim"
        {{ old('medicamentos', $anamnese['medicamentos'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="medicamentos"
        value="nao"
        {{ old('medicamentos', $anamnese['medicamentos'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Possui alergias?</label>

    <br>

    <input
        type="radio"
        name="alergias"
        value="sim"
        {{ old('alergias', $anamnese['alergias'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="alergias"
        value="nao"
        {{ old('alergias', $anamnese['alergias'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>É gestante?</label>

    <br>

    <input
        type="radio"
        name="gestante"
        value="sim"
        {{ old('gestante', $anamnese['gestante'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="gestante"
        value="nao"
        {{ old('gestante', $anamnese['gestante'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Está amamentando?</label>

    <br>

    <input
        type="radio"
        name="amamentando"
        value="sim"
        {{ old('amamentando', $anamnese['amamentando'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="amamentando"
        value="nao"
        {{ old('amamentando', $anamnese['amamentando'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Possui diabetes?</label>

    <br>

    <input
        type="radio"
        name="diabetes"
        value="sim"
        {{ old('diabetes', $anamnese['diabetes'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="diabetes"
        value="nao"
        {{ old('diabetes', $anamnese['diabetes'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Possui hipertensão?</label>

    <br>

    <input
        type="radio"
        name="hipertensao"
        value="sim"
        {{ old('hipertensao', $anamnese['hipertensao'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="hipertensao"
        value="nao"
        {{ old('hipertensao', $anamnese['hipertensao'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Problemas cardíacos?</label>

    <br>

    <input
        type="radio"
        name="cardiaco"
        value="sim"
        {{ old('cardiaco', $anamnese['cardiaco'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="cardiaco"
        value="nao"
        {{ old('cardiaco', $anamnese['cardiaco'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Problemas de circulação?</label>

    <br>

    <input
        type="radio"
        name="circulacao"
        value="sim"
        {{ old('circulacao', $anamnese['circulacao'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="circulacao"
        value="nao"
        {{ old('circulacao', $anamnese['circulacao'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Tem marca-passo?</label>

    <br>

    <input
        type="radio"
        name="marcapasso"
        value="sim"
        {{ old('marcapasso', $anamnese['marcapasso'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="marcapasso"
        value="nao"
        {{ old('marcapasso', $anamnese['marcapasso'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Epilepsia?</label>

    <br>

    <input
        type="radio"
        name="epilepsia"
        value="sim"
        {{ old('epilepsia', $anamnese['epilepsia'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="epilepsia"
        value="nao"
        {{ old('epilepsia', $anamnese['epilepsia'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Problemas hormonais?</label>

    <br>

    <input
        type="radio"
        name="hormonais"
        value="sim"
        {{ old('hormonais', $anamnese['hormonais'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="hormonais"
        value="nao"
        {{ old('hormonais', $anamnese['hormonais'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Tabagista?</label>

    <br>

    <input
        type="radio"
        name="tabagista"
        value="sim"
        {{ old('tabagista', $anamnese['tabagista'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="tabagista"
        value="nao"
        {{ old('tabagista', $anamnese['tabagista'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Consome bebida alcoólica?</label>

    <br>

    <input
        type="radio"
        name="alcool"
        value="sim"
        {{ old('alcool', $anamnese['alcool'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="alcool"
        value="nao"
        {{ old('alcool', $anamnese['alcool'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Observações:</label>

    <br>

    <textarea
        name="observacoes"
        rows="4"
        cols="60">{{ old('observacoes', $anamnese['observacoes'] ?? '') }}</textarea>


    <hr>


    <!-- AVALIAÇÃO DA PELE -->

    <h2>Avaliação da Pele</h2>


    <label>Tipo de Pele:</label>

    <br>

    <select name="tipo_pele">

        <option value="">

            Selecione

        </option>


        <option
            value="Normal"
            {{ old('tipo_pele', $anamnese['tipo_pele'] ?? '') == 'Normal' ? 'selected' : '' }}>

            Normal

        </option>


        <option
            value="Seca"
            {{ old('tipo_pele', $anamnese['tipo_pele'] ?? '') == 'Seca' ? 'selected' : '' }}>

            Seca

        </option>


        <option
            value="Oleosa"
            {{ old('tipo_pele', $anamnese['tipo_pele'] ?? '') == 'Oleosa' ? 'selected' : '' }}>

            Oleosa

        </option>


        <option
            value="Mista"
            {{ old('tipo_pele', $anamnese['tipo_pele'] ?? '') == 'Mista' ? 'selected' : '' }}>

            Mista

        </option>


        <option
            value="Sensível"
            {{ old('tipo_pele', $anamnese['tipo_pele'] ?? '') == 'Sensível' ? 'selected' : '' }}>

            Sensível

        </option>

    </select>

    <br><br>


    <label>Acne:</label>

    <br>

    <input
        type="checkbox"
        name="acne"
        value="sim"
        {{ old('acne', $anamnese['acne'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim

    <br><br>


    <label>Manchas:</label>

    <br>

    <input
        type="checkbox"
        name="manchas"
        value="sim"
        {{ old('manchas', $anamnese['manchas'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim

    <br><br>


    <label>Melasma:</label>

    <br>

    <input
        type="checkbox"
        name="melasma"
        value="sim"
        {{ old('melasma', $anamnese['melasma'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim

    <br><br>


    <label>Poros Dilatados:</label>

    <br>

    <input
        type="checkbox"
        name="poros"
        value="sim"
        {{ old('poros', $anamnese['poros'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim

    <br><br>


    <label>Rugas / Linhas de Expressão:</label>

    <br>

    <input
        type="checkbox"
        name="rugas"
        value="sim"
        {{ old('rugas', $anamnese['rugas'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim

    <br><br>


    <label>Flacidez:</label>

    <br>

    <input
        type="checkbox"
        name="flacidez"
        value="sim"
        {{ old('flacidez', $anamnese['flacidez'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim

    <br><br>


    <label>Rosácea:</label>

    <br>

    <input
        type="checkbox"
        name="rosacea"
        value="sim"
        {{ old('rosacea', $anamnese['rosacea'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim

    <br><br>


    <label>Sensibilidade:</label>

    <br>

    <input
        type="checkbox"
        name="sensibilidade"
        value="sim"
        {{ old('sensibilidade', $anamnese['sensibilidade'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim

    <br><br>


    <hr>


    <!-- DESIGN DE SOBRANCELHAS -->

    <h2>Design de Sobrancelhas</h2>


    <label>
        Já realizou design de sobrancelhas anteriormente?
    </label>

    <br>

    <input
        type="radio"
        name="design_anterior"
        value="sim"
        {{ old('design_anterior', $anamnese['design_anterior'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="design_anterior"
        value="nao"
        {{ old('design_anterior', $anamnese['design_anterior'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>
        Possui falhas nas sobrancelhas?
    </label>

    <br>

    <input
        type="radio"
        name="falhas"
        value="sim"
        {{ old('falhas', $anamnese['falhas'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="falhas"
        value="nao"
        {{ old('falhas', $anamnese['falhas'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Usa henna?</label>

    <br>

    <input
        type="radio"
        name="henna"
        value="sim"
        {{ old('henna', $anamnese['henna'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="henna"
        value="nao"
        {{ old('henna', $anamnese['henna'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>
        Possui alergia a produtos cosméticos?
    </label>

    <br>

    <input
        type="radio"
        name="alergia_cosmeticos"
        value="sim"
        {{ old('alergia_cosmeticos', $anamnese['alergia_cosmeticos'] ?? '') == 'sim' ? 'checked' : '' }}>

    Sim


    <input
        type="radio"
        name="alergia_cosmeticos"
        value="nao"
        {{ old('alergia_cosmeticos', $anamnese['alergia_cosmeticos'] ?? '') == 'nao' ? 'checked' : '' }}>

    Não

    <br><br>


    <label>Observações do Design:</label>

    <br>

    <textarea
        name="obs_design"
        rows="4"
        cols="60">{{ old('obs_design', $anamnese['obs_design'] ?? '') }}</textarea>


    <hr>


    <!-- TERMO DE RESPONSABILIDADE -->

    <h2>Termo de Responsabilidade</h2>


    <p>

        Declaro que todas as informações fornecidas são verdadeiras
        e autorizo o uso dos meus dados para fins de avaliação
        estética.

    </p>


    <label>Data:</label>

    <br>

    <input
        type="date"
        name="data"
        value="{{ old('data', $anamnese['data'] ?? '') }}">

    <br><br>


    <label>Assinatura do Cliente:</label>

    <br>

    <input
        type="text"
        name="assinatura"
        value="{{ old('assinatura', $anamnese['assinatura'] ?? '') }}">

    <br><br>


    <button type="submit">

        Salvar Ficha

    </button>


</form>


</body>

</html>