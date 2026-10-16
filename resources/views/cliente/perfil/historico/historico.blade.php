<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Perfil da Cliente</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Parisienne&family=Playfair+Display+SC:wght@400;500;600&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- CSS DO PERFIL -->
    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/historico.css') }}"
    >

</head>


<body>


{{-- =========================================================
     HEADER
     ========================================================= --}}

@include('_partials.header')


    <header class="historico-header">

    <a href="{{ route('cliente.perfil.show') }}" class="voltar">
    &larr; Voltar ao perfil
</a>

        <div class="historico-titulo">
            <h1>Meu Histórico</h1>
            <p>Valéria Maciel Estética</p>
        </div>

    </header>

    <main class="historico-container">

        <section class="historico-intro">
            <h2>Minha trajetória de cuidados</h2>

            <p>
                Confira os procedimentos que você já realizou
                e acompanhe sua jornada de autocuidado.
            </p>
        </section>

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

                <a href="{{ url('/agendamentos') }}" class="btn-historico">
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

                        <div class="historico-data">

                            <span class="dia">
                                {{ \Carbon\Carbon::parse($agendamento->data_agendamento)->format('d') }}
                            </span>

                            <span class="mes">
                                {{ \Carbon\Carbon::parse($agendamento->data_agendamento)->translatedFormat('M/Y') }}
                            </span>

                        </div>

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

                        <div class="historico-status">
                            <span>
                                &#10003; Concluído
                            </span>
                        </div>

                    </article>

                @endforeach

            </section>

            <div class="historico-paginacao">
                {{ $agendamentos->links() }}
            </div>

        @endif

    </main>

    @include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>