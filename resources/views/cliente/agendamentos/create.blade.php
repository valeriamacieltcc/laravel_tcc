<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Novo Agendamento - Valéria Maciel</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Parisienne&family=Playfair+Display+SC:wght@400;600&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/agendamento.css') }}"
    >

</head>

<body>

    {{-- HEADER PADRÃO DO SITE --}}
    @include('_partials.header')


    <main class="vm-agendamento-page">

        <div class="vm-agendamento-container">

            <header class="vm-agendamento-header">

                <h1 class="vm-agendamento-title">
                    Novo Agendamento
                </h1>

                <p class="vm-agendamento-description">
                    Escolha o procedimento, a data e o horário
                    desejados para realizar seu atendimento.
                </p>

            </header>


            <form
                action="{{ route('cliente.agendamentos.store') }}"
                method="POST"
                class="vm-agendamento-form"
            >

                @csrf


                {{-- PROCEDIMENTO --}}

                <section class="vm-agendamento-section">

                    <div class="vm-agendamento-section-title">

                        <span class="vm-agendamento-number">
                            01
                        </span>

                        <div class="vm-agendamento-section-info">

                            <small>
                                Atendimento
                            </small>

                            <h2>
                                Procedimento
                            </h2>

                        </div>

                    </div>


                    <div class="vm-agendamento-field">

                        <label for="procedimento_id">
                            Procedimento
                        </label>

                        <select
                            id="procedimento_id"
                            name="procedimento_id"
                            required
                        >

                            <option value="">
                                Selecione o procedimento
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

                            <span class="vm-agendamento-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>

                </section>



                {{-- DATA E HORÁRIO --}}

                <section class="vm-agendamento-section">

                    <div class="vm-agendamento-section-title">

                        <span class="vm-agendamento-number">
                            02
                        </span>

                        <div class="vm-agendamento-section-info">

                            <small>
                                Disponibilidade
                            </small>

                            <h2>
                                Data e horário
                            </h2>

                        </div>

                    </div>


                    <div class="vm-agendamento-grid">

                        {{-- DATA --}}

                        <div class="vm-agendamento-field">

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

                                <span class="vm-agendamento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        {{-- HORÁRIO --}}

                        <div class="vm-agendamento-field">

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


                            <small
                                id="informacao-duracao"
                                class="vm-agendamento-duration"
                            ></small>


                            <div
                                id="mensagem-horarios"
                                class="vm-agendamento-error"
                            ></div>


                            @error('hora_agendamento')

                                <span class="vm-agendamento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>

                    </div>

                </section>



                {{-- OBSERVAÇÕES --}}

                <section class="vm-agendamento-section">

                    <div class="vm-agendamento-section-title">

                        <span class="vm-agendamento-number">
                            03
                        </span>

                        <div class="vm-agendamento-section-info">

                            <small>
                                Informações adicionais
                            </small>

                            <h2>
                                Observações
                            </h2>

                        </div>

                    </div>


                    <div class="vm-agendamento-field">

                        <label for="observacoes_cliente">
                            Observações
                        </label>

                        <textarea
                            id="observacoes_cliente"
                            name="observacoes_cliente"
                            placeholder="Digite alguma informação que gostaria de comunicar..."
                        >{{ old('observacoes_cliente') }}</textarea>

                    </div>

                </section>



                {{-- BOTÕES --}}

                <div class="vm-agendamento-actions">

                    <a
                        href="{{ route('cliente.perfil.show') }}"
                        class="vm-agendamento-back"
                    >
                        Voltar
                    </a>


                    <button
                        type="submit"
                        class="vm-agendamento-confirm"
                    >
                        Confirmar agendamento
                    </button>

                </div>

            </form>

        </div>

    </main>


    {{-- FOOTER PADRÃO DO SITE --}}
    @include('_partials.footer')


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

            const procedimentoId =
                procedimentoSelect.value;

            const data =
                dataInput.value;


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


                const resposta =
                    await fetch(endereco);


                if (!resposta.ok) {

                    throw new Error(
                        'Não foi possível buscar os horários.'
                    );

                }


                const resultado =
                    await resposta.json();


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

                    opcao.value =
                        horario;

                    opcao.textContent =
                        horario;

                    horarioSelect.appendChild(opcao);

                });


                horarioSelect.disabled = false;


                informacaoDuracao.textContent =
                    'Duração aproximada: ' +
                    resultado.duracao +
                    ' minutos.';


            } catch (erro) {

                console.error(erro);

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

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>