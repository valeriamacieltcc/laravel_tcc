<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Meus Agendamentos</title>

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
            max-width: 1000px;
            margin: auto;
        }

        .topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .botao {
            background: #2c7771;
            color: white;
            padding: 11px 18px;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 16px;
        }

        .sucesso {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            margin-bottom: 15px;
        }

        .erro {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            margin-bottom: 15px;
        }

        .status {
            font-weight: bold;
            text-transform: capitalize;
        }

        .cancelar {
            background: #a94442;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="topo">
        <h1>Meus agendamentos</h1>

        <a
            href="{{ route('cliente.agendamentos.create') }}"
            class="botao"
        >
            Novo agendamento
        </a>
    </div>

    @if(session('sucesso'))
        <div class="sucesso">
            {{ session('sucesso') }}
        </div>
    @endif

    @if(session('erro'))
        <div class="erro">
            {{ session('erro') }}
        </div>
    @endif

    @forelse($agendamentos as $agendamento)

        <div class="card">

            <h3>
                {{ $agendamento->procedimento->nome }}
            </h3>

            <p>
                <strong>Data:</strong>

                {{ $agendamento
                    ->data_agendamento
                    ->format('d/m/Y') }}
            </p>

            <p>
                <strong>Horário:</strong>

                {{ substr(
                    $agendamento->hora_agendamento,
                    0,
                    5
                ) }}
            </p>

            <p>
                <strong>Status:</strong>

                <span class="status">
                    {{ $agendamento->status }}
                </span>
            </p>

            @if($agendamento->observacoes_cliente)
                <p>
                    <strong>Observações:</strong>

                    {{ $agendamento->observacoes_cliente }}
                </p>
            @endif

            @if(in_array(
                $agendamento->status,
                ['pendente', 'confirmado']
            ))
                <form
                    action="{{ route(
                        'cliente.agendamentos.cancelar',
                        $agendamento
                    ) }}"
                    method="POST"
                    onsubmit="
                        return confirm(
                            'Deseja cancelar este agendamento?'
                        )
                    "
                >
                    @csrf
                    @method('PATCH')

                    <button
                        type="submit"
                        class="botao cancelar"
                    >
                        Cancelar
                    </button>
                </form>
            @endif

        </div>

    @empty

        <div class="card">
            Nenhum agendamento realizado.
        </div>

    @endforelse

    <a href="{{ route('cliente.perfil.show') }}">
        Voltar para o perfil
    </a>

</div>

</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Meus Agendamentos - Valéria Maciel</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/agendamentos.css') }}"
    >

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
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Parisienne&family=Playfair+Display+SC&display=swap"
        rel="stylesheet"
    >

</head>


<body>


{{-- =========================================================
     NAVBAR / TOPO
========================================================= --}}

@include('_partials.header')


<main class="agendamentos-page">

    <div class="agendamentos-container">


        {{-- =====================================================
             CABEÇALHO
        ====================================================== --}}

        <header class="agendamentos-header">

            <span class="agendamentos-subtitle">
                Valéria Maciel Estética
            </span>

            <h1>
                Meus Agendamentos
            </h1>

            <p>
                Consulte seus atendimentos e acompanhe
                seus agendamentos.
            </p>

        </header>


        {{-- =====================================================
             AÇÃO NOVO AGENDAMENTO
        ====================================================== --}}

        <div class="agendamentos-topo">

            <div>
                <span class="agendamentos-label">
                    Atendimento
                </span>

                <h2>
                    Seus horários
                </h2>
            </div>


            <a
                href="{{ route('cliente.agendamentos.create') }}"
                class="btn-novo-agendamento"
            >
                Novo agendamento
            </a>

        </div>


        {{-- =====================================================
             MENSAGEM DE SUCESSO
        ====================================================== --}}

        @if(session('sucesso'))

            <div class="agendamento-alert sucesso">

                <strong>
                    Sucesso
                </strong>

                <span>
                    {{ session('sucesso') }}
                </span>

            </div>

        @endif


        {{-- =====================================================
             MENSAGEM DE ERRO
        ====================================================== --}}

        @if(session('erro'))

            <div class="agendamento-alert erro">

                <strong>
                    Atenção
                </strong>

                <span>
                    {{ session('erro') }}
                </span>

            </div>

        @endif


        {{-- =====================================================
             LISTA DE AGENDAMENTOS
        ====================================================== --}}

        <section class="lista-agendamentos">


            @forelse($agendamentos as $agendamento)


                <article class="agendamento-card">


                    {{-- CABEÇALHO DO CARD --}}

                    <div class="agendamento-card-header">

                        <div>

                            <span class="card-subtitle">
                                Procedimento
                            </span>

                            <h3>
                                {{ $agendamento->procedimento->nome }}
                            </h3>

                        </div>


                        <span
                            class="status status-{{ strtolower($agendamento->status) }}"
                        >
                            {{ $agendamento->status }}
                        </span>

                    </div>


                    {{-- INFORMAÇÕES --}}

                    <div class="agendamento-info">


                        <div class="info-item">

                            <span>
                                Data
                            </span>

                            <strong>
                                {{ $agendamento
                                    ->data_agendamento
                                    ->format('d/m/Y') }}
                            </strong>

                        </div>


                        <div class="info-item">

                            <span>
                                Horário
                            </span>

                            <strong>
                                {{ substr(
                                    $agendamento->hora_agendamento,
                                    0,
                                    5
                                ) }}
                            </strong>

                        </div>


                        <div class="info-item">

                            <span>
                                Status
                            </span>

                            <strong class="status-text">
                                {{ $agendamento->status }}
                            </strong>

                        </div>


                    </div>


                    {{-- OBSERVAÇÕES --}}

                    @if($agendamento->observacoes_cliente)

                        <div class="agendamento-observacao">

                            <span>
                                Observações
                            </span>

                            <p>
                                {{ $agendamento->observacoes_cliente }}
                            </p>

                        </div>

                    @endif


                    {{-- AÇÃO CANCELAR --}}

                    @if(in_array(
                        $agendamento->status,
                        ['pendente', 'confirmado']
                    ))

                        <div class="agendamento-card-footer">

                            <form
                                action="{{ route(
                                    'cliente.agendamentos.cancelar',
                                    $agendamento
                                ) }}"
                                method="POST"
                                onsubmit="
                                    return confirm(
                                        'Deseja cancelar este agendamento?'
                                    )
                                "
                            >

                                @csrf

                                @method('PATCH')


                                <button
                                    type="submit"
                                    class="btn-cancelar"
                                >
                                    Cancelar agendamento
                                </button>

                            </form>

                        </div>

                    @endif


                </article>


            @empty


                {{-- =================================================
                     SEM AGENDAMENTOS
                ================================================== --}}

                <div class="sem-agendamentos">

                    <div class="sem-agendamentos-icon">
                        ♡
                    </div>

                    <h3>
                        Nenhum agendamento realizado
                    </h3>

                    <p>
                        Você ainda não possui atendimentos agendados.
                    </p>

                    <a
                        href="{{ route('cliente.agendamentos.create') }}"
                        class="btn-novo-agendamento"
                    >
                        Agendar atendimento
                    </a>

                </div>


            @endforelse


        </section>


        {{-- =====================================================
             VOLTAR PARA PERFIL
        ====================================================== --}}

        <div class="voltar-perfil">

            <a
                href="{{ route('cliente.perfil.show') }}"
            >
                ← Voltar para o perfil
            </a>

        </div>


    </div>

</main>


{{-- =========================================================
     FOOTER
========================================================= --}}

@include('_partials.footer')


</body>

</html>