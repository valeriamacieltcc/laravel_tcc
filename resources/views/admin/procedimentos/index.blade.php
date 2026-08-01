<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Procedimentos</title>

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

        th, td {
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
    </style>
</head>
<body>

<div class="container">

    <div class="topo">
        <h1>Procedimentos</h1>

        <a
            href="{{ route('admin.procedimentos.create') }}"
            class="botao"
        >
            Novo procedimento
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
                <th>Categoria</th>
                <th>Preço</th>
                <th>Duração</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse($procedimentos as $procedimento)
                <tr>
                    <td>
                        @if($procedimento->imagem)
                            <img
                                src="{{ asset('storage/' . $procedimento->imagem) }}"
                                class="imagem"
                                alt="{{ $procedimento->nome }}"
                            >
                        @else
                            Sem imagem
                        @endif
                    </td>

                    <td>{{ $procedimento->nome }}</td>

                    <td>
                        {{ $procedimento->categoria?->nome ?? 'Sem categoria' }}
                    </td>

                    <td>
                        @if($procedimento->preco)
                            R$ {{ number_format($procedimento->preco, 2, ',', '.') }}
                        @else
                            Consultar
                        @endif
                    </td>

                    <td>
                        {{ $procedimento->duracao_minutos }} minutos
                    </td>

                    <td>
                        {{ $procedimento->ativo ? 'Ativo' : 'Inativo' }}
                    </td>

                    <td>
                        <div class="acoes">
                            <a
                                href="{{ route('admin.procedimentos.show', $procedimento) }}"
                                class="botao"
                            >
                                Ver
                            </a>

                            <a
                                href="{{ route('admin.procedimentos.edit', $procedimento) }}"
                                class="botao editar"
                            >
                                Editar
                            </a>

                            <form
                                action="{{ route('admin.procedimentos.destroy', $procedimento) }}"
                                method="POST"
                                onsubmit="return confirm('Deseja excluir este procedimento?')"
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
                    <td colspan="7">
                        Nenhum procedimento cadastrado.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $procedimentos->links() }}

</div>

</body>
</html>