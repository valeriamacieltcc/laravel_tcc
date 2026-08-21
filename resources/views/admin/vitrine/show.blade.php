<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>
        {{ $vitrine->nome }}
    </title>


    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f6f5e5;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
        }

        .imagem {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .informacao {
            margin-bottom: 18px;
        }

        .informacao strong {
            display: block;
            margin-bottom: 5px;
        }

        .botao {
            background: #2c7771;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .editar {
            background: #d9a441;
        }

        .acoes {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .disponivel {
            color: #198754;
            font-weight: bold;
        }

        .indisponivel {
            color: #b94a48;
            font-weight: bold;
        }

    </style>

</head>


<body>


<div class="container">

    <h1>
        {{ $vitrine->nome }}
    </h1>


    @if($vitrine->imagem)

        <img
            src="{{ asset(
                'storage/' . $vitrine->imagem
            ) }}"
            class="imagem"
            alt="{{ $vitrine->nome }}"
        >

    @endif


    <div class="informacao">

        <strong>
            Marca
        </strong>

        {{ $vitrine->marca }}

    </div>


    <div class="informacao">

        <strong>
            Descrição
        </strong>

        {{ $vitrine->descricao }}

    </div>


    <div class="informacao">

        <strong>
            Preço
        </strong>

        R$
        {{ number_format(
            $vitrine->preco,
            2,
            ',',
            '.'
        ) }}

    </div>


    <div class="informacao">

        <strong>
            Status
        </strong>

        @if($vitrine->disponivel)

            <span class="disponivel">
                Disponível
            </span>

        @else

            <span class="indisponivel">
                Indisponível
            </span>

        @endif

    </div>


    <div class="informacao">

        <strong>
            Link para contato
        </strong>

        @if($vitrine->link_contato)

            <a
                href="{{ $vitrine->link_contato }}"
                target="_blank"
            >
                {{ $vitrine->link_contato }}
            </a>

        @else

            Não informado

        @endif

    </div>


    <div class="acoes">

        <a
            href="{{ route(
                'admin.vitrine.edit',
                $vitrine
            ) }}"
            class="botao editar"
        >
            Editar
        </a>


        <a
            href="{{ route('admin.vitrine.index') }}"
            class="botao"
        >
            Voltar
        </a>

    </div>

</div>


</body>

</html>