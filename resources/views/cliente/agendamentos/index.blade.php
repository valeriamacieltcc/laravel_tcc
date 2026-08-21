<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Meus Agendamentos - Valéria Maciel</title>


    <!-- GOOGLE FONTS -->

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
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Parisienne&family=Playfair+Display+SC:wght@400;500;600&display=swap"
        rel="stylesheet"
    >


    <!-- BOOTSTRAP -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- CSS PRINCIPAL -->

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

</head>


<body>


    {{-- =====================================================
         HEADER PADRÃO DO SITE
         ===================================================== --}}

    @include('_partials.header')



    {{-- =====================================================
         CONTEÚDO
         ===================================================== --}}

    <main class="meus-agendamentos-page">

        <div class="meus-agendamentos-container">


            {{-- =================================================
                 CABEÇALHO DA PÁGINA
                 ================================================= --}}

            <div class="meus-agendamentos-header">

                <div class="meus-agendamentos-header-info">

                    <small>
                        Valéria Maciel
                    </small>

                    <h1 class="meus-agendamentos-title">
                        Meus agendamentos
                    </h1>

                    <p class="meus-agendamentos-description">
                        Consulte seus horários, procedimentos e acompanhe
                        o status dos seus agendamentos.
                    </p>

                </div>


                <a
                    href="{{ route('cliente.agendamentos.create') }}"
                    class="meus-agendamentos-new"
                >
                    Novo agendamento
                </a>

            </div>



            {{-- =================================================
                 MENSAGEM DE SUCESSO
                 ================================================= --}}

            @if(session('sucesso'))

                <div class="meus-agendamentos-message-success">

                    {{ session('sucesso') }}

                </div>

            @endif



            {{-- =================================================
                 MENSAGEM DE ERRO
                 ================================================= --}}

            @if(session('erro'))

                <div class="meus-agendamentos-message-error">

                    {{ session('erro') }}

                </div>

            @endif



            {{-- =================================================
                 LISTA DE AGENDAMENTOS
                 ================================================= --}}

            <div class="meus-agendamentos-list">


                @forelse($agendamentos as $agendamento)


                    {{-- =========================================
                         CARD DO AGENDAMENTO
                         ========================================= --}}

                    <article class="meus-agendamentos-card">


                        {{-- CABEÇALHO DO CARD --}}

                        <div class="meus-agendamentos-card-header">

                            <div>

                                <small>
                                    Procedimento
                                </small>

                                <h2 class="meus-agendamentos-procedure">
                                    {{ $agendamento->procedimento->nome }}
                                </h2>

                            </div>


                            <span class="meus-agendamentos-status">
                                {{ $agendamento->status }}
                            </span>

                        </div>



                        {{-- INFORMAÇÕES --}}

                        <div class="meus-agendamentos-info-grid">


                            <div class="meus-agendamentos-info">

                                <span class="meus-agendamentos-info-label">
                                    Data
                                </span>

                                <strong>
                                    {{ $agendamento->data_agendamento->format('d/m/Y') }}
                                </strong>

                            </div>



                            <div class="meus-agendamentos-info">

                                <span class="meus-agendamentos-info-label">
                                    Horário
                                </span>

                                <strong>
                                    {{ substr($agendamento->hora_agendamento, 0, 5) }}
                                </strong>

                            </div>


                        </div>



                        {{-- OBSERVAÇÕES --}}

                        @if($agendamento->observacoes_cliente)

                            <div class="meus-agendamentos-observacoes">

                                <span>
                                    Observações
                                </span>

                                <p>
                                    {{ $agendamento->observacoes_cliente }}
                                </p>

                            </div>

                        @endif



                        {{-- AÇÕES --}}

                        @if(in_array(
                            $agendamento->status,
                            ['pendente', 'confirmado']
                        ))

                            <div class="meus-agendamentos-actions">

                                <form
                                    action="{{ route(
                                        'cliente.agendamentos.cancelar',
                                        $agendamento
                                    ) }}"
                                    method="POST"
                                    class="meus-agendamentos-cancel-form"
                                    onsubmit="return confirm('Deseja cancelar este agendamento?')"
                                >

                                    @csrf

                                    @method('PATCH')


                                    <button
                                        type="submit"
                                        class="meus-agendamentos-cancel btn-sair"
                                    >
                                        Cancelar agendamento
                                    </button>

                                </form>

                            </div>

                        @endif


                    </article>


                @empty


                    {{-- =========================================
                         SEM AGENDAMENTOS
                         ========================================= --}}

                    <div class="meus-agendamentos-empty">

                        <div class="meus-agendamentos-empty-number">
                            01
                        </div>


                        <div>

                            <small>
                                Sua agenda
                            </small>

                            <h2>
                                Nenhum agendamento
                            </h2>

                            <p>
                                Você ainda não possui nenhum agendamento realizado.
                            </p>

                        </div>


                        <a
                            href="{{ route('cliente.agendamentos.create') }}"
                            class="meus-agendamentos-empty-button"
                        >
                            Agendar agora
                        </a>

                    </div>


                @endforelse


            </div>



            {{-- =================================================
                 VOLTAR PARA HOME
                 ================================================= --}}

            <div class="meus-agendamentos-back-area">

                <a
                    href="{{ route('home.index') }}"
                    class="meus-agendamentos-back btn-acao"
                >
                    Voltar para Home
                </a>

            </div>


        </div>

    </main>



    {{-- =====================================================
         FOOTER PADRÃO DO SITE
         ===================================================== --}}

    @include('_partials.footer')



    <!-- BOOTSTRAP JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    ></script>


</body>

</html>