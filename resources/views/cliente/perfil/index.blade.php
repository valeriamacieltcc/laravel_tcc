<!DOCTYPE html>

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
</html>