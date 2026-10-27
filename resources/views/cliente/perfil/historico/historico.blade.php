<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Meu Histórico - Valéria Maciel</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Parisienne&family=Playfair+Display+SC:wght@400;500;600&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- CSS DO SITE -->
    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

    <!-- CSS DO HISTÓRICO -->
    <link
        rel="stylesheet"
        href="{{ asset('css/historico.css') }}"
    >

</head>

<body>

    @include('_partials.header')

    <main class="historico-container">

<!-- CABEÇALHO DA PÁGINA -->
<div class="meus-agendamentos-header">

    <div class="meus-agendamentos-header-info">

        <h1 class="meus-agendamentos-title">
            Meu Histórico
        </h1>

        <p class="meus-agendamentos-description">
            Acompanhe os procedimentos que você já realizou
            e sua jornada de autocuidado.
        </p>

    </div>

</div>

        <!-- CONTEÚDO DO HISTÓRICO -->
        @if ($agendamentos->isEmpty())

            <section class="historico-vazio">

                <div class="historico-icone">
                    &#10003;
                </div>

                <h3>Nenhum procedimento concluído</h3>

                <p>
                    Quando seus agendamentos forem concluídos,
                    eles aparecerão aqui.
                </p>

                <a
                    href="{{ url('/agendamentos') }}"
                    class="btn-historico"
                >
                    Ver meus agendamentos
                </a>

            </section>
            

        @else

            <div class="historico-resumo">

                <span>
                    {{ $agendamentos->total() }}
                    {{ $agendamentos->total() == 1 ? 'procedimento realizado' : 'procedimentos realizados' }}
                </span>

            </div>

            <section class="historico-lista">

                @foreach ($agendamentos as $agendamento)

                    <article class="historico-card">

                        <!-- DATA -->
                        <div class="historico-data">

                            <span class="dia">
                                {{ \Carbon\Carbon::parse($agendamento->data_agendamento)->format('d') }}
                            </span>

                            <span class="mes">
                                {{ \Carbon\Carbon::parse($agendamento->data_agendamento)->translatedFormat('M/Y') }}
                            </span>

                        </div>

                        <!-- INFORMAÇÕES DO PROCEDIMENTO -->
                        <div class="historico-info">

                            <h3>
                                {{ $agendamento->procedimento->nome ?? 'Procedimento não informado' }}
                            </h3>

                            <p>
                                <strong>Data:</strong>
                                {{ \Carbon\Carbon::parse($agendamento->data_agendamento)->format('d/m/Y') }}
                            </p>

                            <p>
                                <strong>Horário:</strong>
                                {{ \Carbon\Carbon::parse($agendamento->hora_agendamento)->format('H:i') }}
                            </p>

                            @if ($agendamento->observacoes)

                                <p class="historico-observacao">
                                    <strong>Observações:</strong>
                                    {{ $agendamento->observacoes }}
                                </p>

                            @endif

                            

                        </div>

                        <!-- STATUS -->
                        <div class="historico-status">

                            <span>
                                &#10003; Concluído
                            </span>

                        </div>

                    </article>

                @endforeach

            </section>

            <!-- PAGINAÇÃO -->
            <div class="historico-paginacao">
                {{ $agendamentos->links() }}
            </div>

        @endif

        
<!-- BOTÃO VOLTAR AO PERFIL NO FINAL DA PÁGINA -->
<div class="historico-voltar-container">

<a href="{{ route('cliente.perfil.show') }}" class="voltar">
    Voltar ao perfil
</a>

</div>

        

    </main>

    @include('_partials.footer')

    <!-- BOOTSTRAP JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>

</html>
