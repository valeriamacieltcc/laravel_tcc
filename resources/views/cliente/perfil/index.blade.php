<!-- <!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Perfil da Cliente</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/perfil.css') }}"
    >

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

    <style>
        .acoes-perfil {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 18px;
        }

        .botao-editar {
            display: inline-block;
            background: #2c7771;
            color: white;
            padding: 11px 20px;
            border-radius: 6px;
            text-decoration: none;
        }

        .botao-editar:hover {
            background: #245f5a;
            color: white;
        }

        .dados-pessoais p {
            margin-bottom: 8px;
        }

        .foto-perfil img {
            width: 170px;
            height: 170px;
            object-fit: cover;
            border-radius: 50%;
        }

        .mensagem-sucesso {
            max-width: 1000px;
            margin: 20px auto;
            padding: 14px;
            border-radius: 7px;
            background: #d4edda;
            color: #155724;
        }

        .sem-dados {
            color: #777;
        }
        .acoes-perfil form {
    margin: 0;
}

.botao-sair {
    border: none;
    background: #a94442;
    color: white;
    padding: 11px 20px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

.botao-sair:hover {
    background: #873836;
}
    </style>
</head>

<body>

@if(session('sucesso'))
    <div class="mensagem-sucesso">
        {{ session('sucesso') }}
    </div>
@endif

<main class="perfil-container">

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

            <h1>{{ $user->name }}</h1>

            @if($cliente->data_nascimento)
                <h2>
                    {{ $cliente->data_nascimento->age }} anos
                </h2>
            @endif

            <div class="dados-pessoais">
                <p>
                    <strong>E-mail:</strong>
                    {{ $user->email }}
                </p>

                <p>
                    <strong>Telefone:</strong>
                    {{ $cliente->telefone }}
                </p>

                <p>
                    <strong>CPF:</strong>
                    {{ $cliente->cpf ?? 'Não informado' }}
                </p>

                <p>
                    <strong>Endereço:</strong>

                    @if($cliente->logradouro)
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
                    @else
                        Não informado
                    @endif
                </p>
            </div>

            <div class="acoes-perfil">
               
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
            

        </div>

    </section>

    <section class="galeria">

        <h3>Histórico dos Antes & Depois</h3>

        <div class="galeria-grid">

            <p class="sem-dados">
                Nenhuma foto cadastrada ainda.
            </p>

        </div>

    </section>

    <section class="bloco-info">

        <div class="titulo-bloco">
            Histórico dos Procedimentos
        </div>

        <div class="conteudo-bloco">

            <p class="sem-dados">
                Nenhum procedimento realizado ainda.
            </p>

        </div>

    </section>

    <section class="bloco-info">

        <div class="titulo-bloco">
            Ficha de Anamnese
        </div>

        <div class="conteudo-bloco">

            <p class="sem-dados">
                A ficha de anamnese ainda não foi preenchida.
            </p>

        </div>

    </section>

    <section class="bloco-info">

        <div class="titulo-bloco">
            Favoritos
        </div>

        <div class="conteudo-bloco">

            <p class="sem-dados">
                Nenhum produto favoritado ainda.
            </p>

        </div>

    </section>

</main>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>

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
                    <span>{{ $user->email }}</span>
                </div>

                <div>
                    <strong>Telefone</strong>
                    <span>{{ $cliente->telefone ?? 'Não informado' }}</span>
                </div>

                <div>
                    <strong>CPF</strong>
                    <span>{{ $cliente->cpf ?? 'Não informado' }}</span>
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


            {{-- 
                Caso futuramente exista uma relação
                antes_depois no model Cliente, ela poderá
                ser utilizada aqui.
            --}}

            @if(isset($cliente->antes_depois) && $cliente->antes_depois->count())

                @foreach($cliente->antes_depois as $foto)

                    <img
                        src="{{ asset('storage/' . $foto->foto) }}"
                        alt="Antes e Depois"
                    >

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


            @if(isset($cliente->procedimentos) && $cliente->procedimentos->count())


                @foreach($cliente->procedimentos as $procedimento)

                    <div class="procedimento-perfil">


                        <h4>

                            {{ $procedimento->nome
                                ?? $procedimento->procedimento->nome
                                ?? 'Procedimento' }}

                        </h4>


                        @if(isset($procedimento->pivot->created_at))

                            <small>
                                {{ $procedimento->pivot->created_at->format('d/m/Y') }}
                            </small>

                        @elseif(isset($procedimento->data))

                            <small>
                                {{ \Carbon\Carbon::parse($procedimento->data)->format('d/m/Y') }}
                            </small>

                        @endif


                        @if(isset($procedimento->pivot->observacao))

                            <p>
                                {{ $procedimento->pivot->observacao }}
                            </p>

                        @elseif(isset($procedimento->observacao))

                            <p>
                                {{ $procedimento->observacao }}
                            </p>

                        @else

                            <p>
                                Procedimento realizado pela cliente.
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


        <a
            href="{{ route('perfil.anamnese.index') }}"
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


            @if(isset($cliente->favoritos) && $cliente->favoritos->count())


                <ul class="lista-favoritos">


                    @foreach($cliente->favoritos as $favorito)

                        <li>

                            {{ $favorito->nome ?? $favorito }}

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