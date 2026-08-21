<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Editar Produto</title>


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

        h1 {
            margin-top: 0;
        }

        .campo {
            display: flex;
            flex-direction: column;
            margin-bottom: 18px;
        }

        .campo label {
            margin-bottom: 6px;
            font-weight: bold;
        }

        .campo input,
        .campo textarea {
            padding: 10px;
            border: 1px solid #bbb;
            border-radius: 5px;
            font-size: 15px;
        }

        .campo textarea {
            min-height: 120px;
            resize: vertical;
        }

        .imagem-atual {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
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

        .cancelar {
            background: #777;
        }

        .acoes {
            display: flex;
            gap: 10px;
        }

        .erro {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            margin-bottom: 20px;
        }

        .check {
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }

    </style>

</head>


<body>


<div class="container">

    <h1>
        Editar Produto
    </h1>


    @if($errors->any())

        <div class="erro">

            <ul>

                @foreach($errors->all() as $erro)

                    <li>
                        {{ $erro }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route(
            'admin.vitrine.update',
            $vitrine
        ) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')


        <div class="campo">

            <label for="nome">
                Nome
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                value="{{ old(
                    'nome',
                    $vitrine->nome
                ) }}"
                required
            >

        </div>


        <div class="campo">

            <label for="marca">
                Marca
            </label>

            <input
                type="text"
                id="marca"
                name="marca"
                value="{{ old(
                    'marca',
                    $vitrine->marca
                ) }}"
                required
            >

        </div>


        <div class="campo">

            <label for="descricao">
                Descrição
            </label>

            <textarea
                id="descricao"
                name="descricao"
                required
            >{{ old(
                'descricao',
                $vitrine->descricao
            ) }}</textarea>

        </div>


        <div class="campo">

            <label for="preco">
                Preço
            </label>

            <input
                type="number"
                id="preco"
                name="preco"
                step="0.01"
                min="0"
                value="{{ old(
                    'preco',
                    $vitrine->preco
                ) }}"
                required
            >

        </div>


        <div class="campo">

            <label>
                Imagem atual
            </label>

            @if($vitrine->imagem)

                <img
                    src="{{ asset(
                        'storage/' . $vitrine->imagem
                    ) }}"
                    alt="{{ $vitrine->nome }}"
                    class="imagem-atual"
                >

            @else

                <p>
                    Nenhuma imagem cadastrada.
                </p>

            @endif

        </div>


        <div class="campo">

            <label for="imagem">
                Alterar imagem
            </label>

            <input
                type="file"
                id="imagem"
                name="imagem"
                accept="image/*"
            >

        </div>


        <div class="campo">

            <label for="link_contato">
                Link para contato
            </label>

            <input
                type="text"
                id="link_contato"
                name="link_contato"
                value="{{ old(
                    'link_contato',
                    $vitrine->link_contato
                ) }}"
            >

        </div>


        <div class="campo check">

            <input
                type="checkbox"
                id="disponivel"
                name="disponivel"
                value="1"
                {{ old(
                    'disponivel',
                    $vitrine->disponivel
                ) ? 'checked' : '' }}
            >

            <label for="disponivel">
                Produto disponível
            </label>

        </div>


        <div class="acoes">

            <button
                type="submit"
                class="botao"
            >
                Salvar alterações
            </button>


            <a
                href="{{ route('admin.vitrine.index') }}"
                class="botao cancelar"
            >
                Cancelar
            </a>

        </div>

    </form>

</div>


</body>

</html>