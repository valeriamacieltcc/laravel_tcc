<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vitrine</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f5e5;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #2c7771;
            color: white;
        }

        .imagem {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 5px;
        }

        .acoes {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .editar {
            background: #d9a441;
        }

        .excluir {
            background: #b94a48;
        }

        .mensagem {
            padding: 12px;
            margin: 15px 0;
            background: #d4edda;
            color: #155724;
        }

        .erro {
            background: #f8d7da;
            color: #721c24;
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
<nav class="navbar">

    <!-- BOTÃO MENU -->
    <button
        class="menu-button"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#menuLateral"
        aria-controls="menuLateral">

        <img src="{{ asset('imagem/menu.png') }}" alt="Menu">

    </button>


    <!-- LINKS PRINCIPAIS -->
    <ul>
        <li><a href="{{ route('admin.home') }}">HOME</a></li>

        <li>
            <a href="{{ route('admin.procedimentos.index') }}">
                PROCEDIMENTOS
            </a>
        </li>

        <li>
            <a href="#">
                AGENDAR
            </a>
        </li>

        <li>
            <a href="{{ route('admin.vitrine.index') }}">
                LOJA
            </a>
        </li>

        <li>
            <a href="#">
                BLOG
            </a>
        </li>
    </ul>

<div class="container">

    <div class="topo">

        <h1>
            Vitrine
        </h1>

        <a
            href="{{ route('admin.vitrine.create') }}"
            class="botao"
        >
            Novo produto
        </a>
        

    </div>


    @if(session('sucesso'))

        <div class="mensagem">

            {{ session('sucesso') }}

        </div>

    @endif


    @if(session('erro'))

        <div class="mensagem erro">

            {{ session('erro') }}

        </div>

    @endif


    <table>

        <thead>

            <tr>

                <th>Imagem</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Preço</th>
                <th>Status</th>
                <th>Ações</th>

            </tr>

        </thead>


        <tbody>

        @forelse($vitrine as $produto)

                <tr>

                    <td>

                        @if($produto->imagem)

                            <img
                                src="{{ asset('storage/' . $produto->imagem) }}"
                                class="imagem"
                                alt="{{ $produto->nome }}"
                            >

                        @else

                            Sem imagem

                        @endif

                    </td>


                    <td>

                        {{ $produto->nome }}

                    </td>


                    <td>

                        {{ $produto->marca ?? 'Não informada' }}

                    </td>


                    <td>

                        R$
                        {{ number_format(
                            $produto->preco,
                            2,
                            ',',
                            '.'
                        ) }}

                    </td>


                    <td>

                        @if($produto->disponivel)

                            <span class="disponivel">
                                Disponível
                            </span>

                        @else

                            <span class="indisponivel">
                                Indisponível
                            </span>

                        @endif

                    </td>


                    <td>

                        <div class="acoes">

                            <a
                                href="{{ route(
                                    'admin.vitrine.show',
                                    $produto
                                ) }}"
                                class="botao"
                            >
                                Ver
                            </a>


                            <a
                                href="{{ route(
                                    'admin.vitrine.edit',
                                    $produto
                                ) }}"
                                class="botao editar"
                            >
                                Editar
                            </a>


                            <form
                                action="{{ route(
                                    'admin.vitrine.destroy',
                                    $produto
                                ) }}"
                                method="POST"
                                onsubmit="return confirm(
                                    'Deseja excluir este produto?'
                                )"
                            >

                                @csrf
                                @method('DELETE')


                                <button
                                    type="submit"
                                    class="botao excluir"
                                >
                                    Excluir
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>


            @empty

                <tr>

                    <td colspan="6">

                        Nenhum produto cadastrado na vitrine.

                    </td>

                </tr>

            @endforelse

        </tbody>

    
    </table>

    <div class="paginacao">
    {{ $vitrine->links() }}

</div>
   


</div>

</body>
</html>