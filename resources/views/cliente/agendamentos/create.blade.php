<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Novo Agendamento</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px 15px;
            background: #f6f5e5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }

        h1 {
            color: #2c7771;
        }

        .campo {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        select,
        input,
        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #bbb;
            border-radius: 6px;
        }

        textarea {
            min-height: 100px;
        }

        .botao {
            border: none;
            background: #2c7771;
            color: white;
            padding: 12px 22px;
            border-radius: 6px;
            cursor: pointer;
        }

        .erro {
            color: #b00020;
            margin-top: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Novo agendamento</h1>

    <form
        action="{{ route('cliente.agendamentos.store') }}"
        method="POST"
    >
        @csrf

        <div class="campo">
            <label for="procedimento_id">
                Procedimento
            </label>

            <select
                id="procedimento_id"
                name="procedimento_id"
                required
            >
                <option value="">
                    Selecione
                </option>

                @foreach($procedimentos as $procedimento)
                    <option
                        value="{{ $procedimento->id }}"
                        @selected(
                            old('procedimento_id')
                            == $procedimento->id
                        )
                    >
                        {{ $procedimento->nome }}

                        @if($procedimento->preco)
                            -
                            R$
                            {{ number_format(
                                $procedimento->preco,
                                2,
                                ',',
                                '.'
                            ) }}
                        @endif
                    </option>
                @endforeach
            </select>

            @error('procedimento_id')
                <div class="erro">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="campo">
            <label for="data_agendamento">
                Data
            </label>

            <input
                type="date"
                id="data_agendamento"
                name="data_agendamento"
                value="{{ old('data_agendamento') }}"
                min="{{ now()->format('Y-m-d') }}"
                required
            >

            @error('data_agendamento')
                <div class="erro">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="campo">
            <label for="hora_agendamento">
                Horário
            </label>

            <div class="campo">
    <label for="hora_agendamento">
        Horário disponível
    </label>

    <select
        id="hora_agendamento"
        name="hora_agendamento"
        required
        disabled
    >
        <option value="">
            Escolha primeiro o procedimento e a data
        </option>
    </select>

    <small id="informacao-duracao"></small>

    <div
        id="mensagem-horarios"
        class="erro"
    ></div>

    @error('hora_agendamento')
        <div class="erro">
            {{ $message }}
        </div>
    @enderror
</div>

            @error('hora_agendamento')
                <div class="erro">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="campo">
            <label for="observacoes_cliente">
                Observações
            </label>

            <textarea
                id="observacoes_cliente"
                name="observacoes_cliente"
            >{{ old('observacoes_cliente') }}</textarea>
        </div>

        <button type="submit" class="botao">
            Confirmar agendamento
        </button>

        <a href="{{ route('cliente.perfil.show') }}">
            Voltar
        </a>

    </form>

</div>
<script>
    const procedimentoSelect =
        document.getElementById('procedimento_id');

    const dataInput =
        document.getElementById('data_agendamento');

    const horarioSelect =
        document.getElementById('hora_agendamento');

    const mensagemHorarios =
        document.getElementById('mensagem-horarios');

    const informacaoDuracao =
        document.getElementById('informacao-duracao');

    async function carregarHorarios() {
        const procedimentoId = procedimentoSelect.value;
        const data = dataInput.value;

        horarioSelect.innerHTML =
            '<option value="">Carregando horários...</option>';

        horarioSelect.disabled = true;
        mensagemHorarios.textContent = '';
        informacaoDuracao.textContent = '';

        if (!procedimentoId || !data) {
            horarioSelect.innerHTML =
                '<option value="">' +
                'Escolha primeiro o procedimento e a data' +
                '</option>';

            return;
        }

        try {
            const endereco = new URL(
                "{{ route('cliente.agendamentos.horarios') }}"
            );

            endereco.searchParams.append(
                'procedimento_id',
                procedimentoId
            );

            endereco.searchParams.append(
                'data',
                data
            );

            const resposta = await fetch(endereco);

            if (!resposta.ok) {
                throw new Error(
                    'Não foi possível buscar os horários.'
                );
            }

            const resultado = await resposta.json();

            horarioSelect.innerHTML = '';

            if (
                !resultado.horarios ||
                resultado.horarios.length === 0
            ) {
                horarioSelect.innerHTML =
                    '<option value="">' +
                    'Nenhum horário disponível' +
                    '</option>';

                mensagemHorarios.textContent =
                    resultado.mensagem ??
                    'Não existem horários disponíveis para essa data.';

                return;
            }

            horarioSelect.innerHTML =
                '<option value="">Selecione um horário</option>';

            resultado.horarios.forEach(function (horario) {
                const opcao =
                    document.createElement('option');

                opcao.value = horario;
                opcao.textContent = horario;

                horarioSelect.appendChild(opcao);
            });

            horarioSelect.disabled = false;

            informacaoDuracao.textContent =
                'Duração aproximada: ' +
                resultado.duracao +
                ' minutos.';

        } catch (erro) {
            horarioSelect.innerHTML =
                '<option value="">Erro ao buscar horários</option>';

            mensagemHorarios.textContent =
                'Não foi possível carregar os horários.';
        }
    }

    procedimentoSelect.addEventListener(
        'change',
        carregarHorarios
    );

    dataInput.addEventListener(
        'change',
        carregarHorarios
    );
</script>
</body>
</html>
<!-- ultimo commit -->