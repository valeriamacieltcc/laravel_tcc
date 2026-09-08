<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Avaliar procedimento | Valéria Maciel
    </title>


    <!-- FONTES -->

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
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Parisienne&family=Playfair+Display+SC:wght@400;600&display=swap"
        rel="stylesheet"
    >


    <!-- BOOTSTRAP -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- CSS -->

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/avaliacao.css') }}"
    >

</head>


<body>


@include('_partials.header')


<main class="pagina-avaliacao">


    <div class="avaliacao-container">


        <!-- CABEÇALHO -->

        <div class="avaliacao-header">

            <small>
                VALÉRIA MACIEL
            </small>

            <h1>
                Avaliar procedimento
            </h1>

            <p>
                Sua opinião é muito importante para nós.
            </p>

        </div>


        <!-- CARD -->

        <div class="avaliacao-card">


            <div class="avaliacao-procedimento">

                <small>
                    PROCEDIMENTO REALIZADO
                </small>

                <h2>
                    {{ $agendamento->procedimento->nome }}
                </h2>


                <div class="avaliacao-dados">

                    <span>
                        Data:
                        {{ $agendamento->data_agendamento->format('d/m/Y') }}
                    </span>

                    <span>
                        Horário:
                        {{ substr($agendamento->hora_agendamento, 0, 5) }}
                    </span>

                </div>

            </div>


            <!-- FORMULÁRIO -->

            <form
                action="{{ route(
                    'cliente.agendamentos.avaliar.store',
                    $agendamento
                ) }}"
                method="POST"
                class="form-avaliacao"
            >

                @csrf


                <!-- NOTA -->

                <div class="campo-avaliacao">

                    <label>
                        Como você avalia seu procedimento?
                    </label>


                    <div class="estrelas-avaliacao">

                        @for($i = 5; $i >= 1; $i--)

                            <input
                                type="radio"
                                name="nota"
                                value="{{ $i }}"
                                id="estrela{{ $i }}"
                                {{ old('nota') == $i ? 'checked' : '' }}
                            >

                            <label
                                for="estrela{{ $i }}"
                                title="{{ $i }} estrelas"
                            >
                                ★
                            </label>

                        @endfor

                    </div>


                    @error('nota')

                        <div class="erro-avaliacao">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- COMENTÁRIO -->

                <div class="campo-avaliacao">

                    <label for="comentario">
                        Conte um pouco sobre sua experiência
                    </label>

                    <textarea
                        name="comentario"
                        id="comentario"
                        rows="5"
                        maxlength="1000"
                        placeholder="Escreva seu comentário..."
                    >{{ old('comentario') }}</textarea>


                    @error('comentario')

                        <div class="erro-avaliacao">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- BOTÕES -->

                <div class="acoes-avaliacao">

                    <a
                        href="{{ route('cliente.agendamentos.index') }}"
                        class="botao-voltar-avaliacao"
                    >
                        Voltar
                    </a>


                    <button
                        type="submit"
                        class="botao-enviar-avaliacao"
                    >
                        Enviar avaliação
                    </button>

                </div>

            </form>

        </div>

    </div>

</main>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>