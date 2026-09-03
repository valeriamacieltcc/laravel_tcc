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

</head>


<body>


{{-- =========================================================
     HEADER
     ========================================================= --}}

@include('_partials.header')


{{-- =========================================================
     MENSAGEM DE SUCESSO
     ========================================================= --}}

@if(session('sucesso'))

    <div class="mensagem-sucesso">

        {{ session('sucesso') }}

    </div>

@endif


{{-- =========================================================
     ERROS DE VALIDAÇÃO
     ========================================================= --}}

@if($errors->any())

    <div class="mensagem-erro">

        <strong>Verifique os seguintes campos:</strong>

        <ul>

            @foreach($errors->all() as $erro)

                <li>{{ $erro }}</li>

            @endforeach

        </ul>

    </div>

@endif


<main class="perfil-container">


    {{-- =====================================================
         TOPO DO PERFIL
         ===================================================== --}}

    <section class="perfil-topo">


        {{-- FOTO --}}

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


        {{-- INFORMAÇÕES --}}

        <div class="info-perfil">


            {{-- NOME --}}

            <h1>
                {{ $user->name }}
            </h1>


            {{-- IDADE --}}

            @if($cliente->data_nascimento)

                <h2>
                    {{ $cliente->data_nascimento->age }} anos
                </h2>

            @endif


            {{-- BOTÃO EDITAR --}}

            <a
                href="{{ route('cliente.perfil.edit') }}"
                class="btn-editar"
            >
                Editar perfil
            </a>


            {{-- DADOS COMPLEMENTARES --}}

            <div class="dados-perfil-topo">

                <div>
                    <strong>E-mail</strong>

                    <span>
                        {{ $user->email }}
                    </span>
                </div>


                <div>
                    <strong>Telefone</strong>

                    <span>
                        {{ $cliente->telefone ?? 'Não informado' }}
                    </span>
                </div>


                <div>
                    <strong>CPF</strong>

                    <span>
                        {{ $cliente->cpf ?? 'Não informado' }}
                    </span>
                </div>


                <div class="endereco-perfil">

                    <strong>Endereço</strong>

                    @if($cliente->logradouro)

                        <span>

                            {{ $cliente->logradouro }},
                            {{ $cliente->numero ?? 's/n' }}

                            @if($cliente->complemento)
                                - {{ $cliente->complemento }}
                            @endif

                            <br>

                            {{ $cliente->bairro }}

                            @if($cliente->cidade)
                                - {{ $cliente->cidade }}
                            @endif

                            @if($cliente->estado)
                                / {{ $cliente->estado }}
                            @endif

                        </span>

                    @else

                        <span>
                            Não informado
                        </span>

                    @endif

                </div>

            </div>


            {{-- AÇÕES --}}

            <div class="acoes-perfil">


                <a
                    href="{{ route('home.index') }}"
                    class="btn-acao"
                >
                    Voltar para Home
                </a>


                <a
                    href="{{ route('cliente.agendamentos.create') }}"
                    class="btn-acao"
                >
                    Agendar procedimento
                </a>


                <a
                    href="{{ route('cliente.agendamentos.index') }}"
                    class="btn-acao"
                >
                    Meus agendamentos
                </a>


                <form
                    action="{{ route('logout') }}"
                    method="POST"
                    class="form-logout"
                >

                    @csrf

                    <button
                        type="submit"
                        class="btn-sair"
                    >
                        Sair
                    </button>

                </form>


            </div>


        </div>

    </section>



    {{-- =====================================================
     GALERIA ANTES E DEPOIS
     ===================================================== --}}

<section class="galeria-perfil">

    <h3>
        Histórico dos Antes & Depois
    </h3>

    <div class="galeria-perfil-grid">

        @if(
            isset($cliente->fotosAcompanhamento)
            && $cliente->fotosAcompanhamento->count() > 0
        )

            @foreach($cliente->fotosAcompanhamento as $foto)

                @if($foto->foto_antes)

                    <div class="foto-galeria-perfil">

                        <span>Antes</span>

                        <img
                            src="{{ asset('storage/' . $foto->foto_antes) }}"
                            alt="Antes"
                        >

                    </div>

                @endif


                @if($foto->foto_depois)

                    <div class="foto-galeria-perfil">

                        <span>Depois</span>

                        <img
                            src="{{ asset('storage/' . $foto->foto_depois) }}"
                            alt="Depois"
                        >

                    </div>

                @endif

            @endforeach

        @else

            <div class="sem-dados-galeria">

                <span>♡</span>

                <p>
                    Nenhuma foto cadastrada ainda.
                </p>

            </div>

        @endif

    </div>

</section>
    {{-- =====================================================
         HISTÓRICO DOS PROCEDIMENTOS
         ===================================================== --}}

    <section class="bloco-info">


        <div class="titulo-bloco">
            Histórico dos Procedimentos
        </div>


        <div class="conteudo-bloco">


            {{-- MESMA VERIFICAÇÃO DO CÓDIGO DELA --}}

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


                        {{-- DADOS EXATAMENTE NO FORMATO DELA --}}

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


                <div class="sem-dados">

                    Nenhum procedimento realizado ainda.

                </div>


            @endif


        </div>

    </section>



    {{-- =====================================================
         FICHA DE ANAMNESE
         ===================================================== --}}

    <section class="bloco-info">


        {{-- ROTA EXATAMENTE COMO NO CÓDIGO DELA --}}

        <a
            href="{{ route('cliente.perfil.anamnese.index') }}"
            class="titulo-bloco botao-anamnese"
        >
            Ficha de Anamnese
        </a>


        <div class="conteudo-bloco anamnese-resumo">

            <p>
                Acesse sua ficha de anamnese para visualizar
                ou preencher suas informações.
            </p>

        </div>


    </section>



    {{-- =====================================================
         FAVORITOS
         ===================================================== --}}

    <section class="bloco-info">


        <div class="titulo-bloco">
            Favoritos
        </div>


        <div class="conteudo-bloco">


            {{-- MESMA LÓGICA DO CÓDIGO DELA --}}

            @if(
                isset($cliente->favoritos)
                && count($cliente->favoritos) > 0
            )


                <ul class="lista-favoritos">


                    @foreach($cliente->favoritos as $favorito)


                        <li>

                            {{ is_object($favorito)
                                ? ($favorito->nome ?? '')
                                : $favorito }}

                        </li>


                    @endforeach


                </ul>


            @else


                <div class="sem-dados">

                    Nenhum produto favoritado ainda.

                </div>


            @endif


        </div>

    </section>


</main>



{{-- =========================================================
     FOOTER
     ========================================================= --}}

@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>