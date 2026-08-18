<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Perfil da Cliente</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- CSS DO CÓDIGO 1 -->
    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

</head>

<body>

@include('_partials.header')


@if(session('sucesso'))

    <div class="alert alert-success container mt-3">

        {{ session('sucesso') }}

    </div>

@endif


<main class="perfil-container">


    <!-- PERFIL -->

    <section class="perfil-topo">

        <div class="foto-perfil">

            @if($cliente->foto_perfil)

                <img
                    src="{{ asset('storage/' . $cliente->foto_perfil) }}"
                    alt="{{ $user->name }}"
                >

            @else

                <img
                    src="{{ asset('imagem/perfil-padrao.png') }}"
                    alt="{{ $user->name }}"
                >

            @endif

        </div>


        <div class="info-perfil">

            <h1>
                {{ $user->name }}
            </h1>


            @if($cliente->data_nascimento)

                <h2>
                    {{ $cliente->data_nascimento->age }} anos
                </h2>

            @endif


            <!-- EDITAR PERFIL -->
            <a
                href="{{ route('cliente.perfil.edit') }}"
                class="btn-editar"
            >
                Editar perfil
            </a>

        </div>

    </section>

    <a
        href="{{ route('cliente.perfil.edit') }}"
        class="botao-editar"
    >
        Editar perfil
    </a>

    <a
        href="{{ route('home.index') }}"
        class="botao-editar"
    >
        Voltar para Home
    </a>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button type="submit" class="botao-sair">
            Sair
        </button>

        <a
    href="{{ route('cliente.agendamentos.create') }}"
    class="botao-editar"
>
    Agendar procedimento
</a>

<a
    href="{{ route('cliente.agendamentos.index') }}"
    class="botao-editar"
>
    Meus agendamentos
</a>
    </form>
</div>

    <!-- ANTES E DEPOIS -->

    <section class="galeria-perfil">

        <h3>
            Histórico dos Antes & Depois
        </h3>


        <div class="galeria-perfil-grid">

            @if(
                isset($cliente->antes_depois)
                && count($cliente->antes_depois) > 0
            )

                @foreach($cliente->antes_depois as $foto)

                    <img
                        src="{{ asset($foto) }}"
                        alt="Antes e Depois"
                    >

                @endforeach

            @else

                <p>
                    Nenhuma foto cadastrada ainda.
                </p>

            @endif

        </div>

    </section>


    <!-- HISTÓRICO DOS PROCEDIMENTOS -->

    <section class="bloco-info">

        <div class="titulo-bloco">
            Histórico dos Procedimentos
        </div>


        <div class="conteudo-bloco">

            @if(
                isset($cliente->procedimentos)
                && count($cliente->procedimentos) > 0
            )

                @foreach($cliente->procedimentos as $procedimento)

                    <div class="procedimento-perfil">

                        <h4>

                            {{ is_array($procedimento)
                                ? $procedimento['nome']
                                : $procedimento->nome }}

                        </h4>


                        @if(is_array($procedimento))

                            <small>
                                {{ $procedimento['data'] ?? '' }}
                            </small>

                            <p>
                                {{ $procedimento['observacao'] ?? '' }}
                            </p>

                        @endif

                    </div>

                @endforeach

            @else

                <p>
                    Nenhum procedimento realizado ainda.
                </p>

            @endif

        </div>

        

    </section>


    <!-- ANAMNESE -->

    <section class="bloco-info">

        <a
            href="{{ route('cliente.perfil.anamnese.index') }}"
            class="titulo-bloco botao-anamnese"
        >
            Ficha de Anamnese
        </a>


        <div class="conteudo-bloco">

            <p>
                Acesse sua ficha de anamnese.
            </p>

        </div>

    </section>


    <!-- FAVORITOS -->

    <section class="bloco-info">

        <div class="titulo-bloco">
            Favoritos
        </div>


        <div class="conteudo-bloco">

            @if(
                isset($cliente->favoritos)
                && count($cliente->favoritos) > 0
            )

                <ul>

                    @foreach($cliente->favoritos as $favorito)

                        <li>

                            {{ is_object($favorito)
                                ? ($favorito->nome ?? '')
                                : $favorito }}

                        </li>

                    @endforeach

                </ul>

            @else

                <p>
                    Nenhum produto favoritado ainda.
                </p>

            @endif

        </div>

    </section>


</main>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>

</body>
</html>