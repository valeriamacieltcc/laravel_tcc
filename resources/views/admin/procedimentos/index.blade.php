
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Procedimentos | Admin</title>

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Parisienne&family=Playfair+Display+SC&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >

</head>

<body class="admin-procedimentos-body">

    @include('_partials.header')


    <main class="admin-procedimentos">

        <div class="admin-procedimentos-container">

            <!-- TOPO DA PÁGINA -->

            <div class="admin-procedimentos-topo">

                <h1 class="admin-procedimentos-titulo">
                    Procedimentos
                </h1>

                <a
                    href="{{ route('admin.procedimentos.create') }}"
                    class="admin-procedimentos-botao admin-procedimentos-botao-novo"
                >
                    Novo procedimento
                </a>

            </div>


            <!-- MENSAGENS -->

            @if(session('sucesso'))

                <div class="admin-procedimentos-mensagem">
                    {{ session('sucesso') }}
                </div>

            @endif


            @if(session('erro'))

                <div class="admin-procedimentos-mensagem admin-procedimentos-mensagem-erro">
                    {{ session('erro') }}
                </div>

            @endif


            <!-- TABELA -->

            <div class="admin-procedimentos-tabela-wrapper">

                <table class="admin-procedimentos-tabela">

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

                                <!-- IMAGEM -->

                                <td>

                                    @if($procedimento->imagem)

                                        <img
                                            src="{{ asset('storage/' . $procedimento->imagem) }}"
                                            class="admin-procedimentos-imagem"
                                            alt="{{ $procedimento->nome }}"
                                        >

                                    @else

                                        <span class="admin-procedimentos-sem-imagem">
                                            Sem imagem
                                        </span>

                                    @endif

                                </td>


                                <!-- NOME -->

                                <td>
                                    {{ $procedimento->nome }}
                                </td>


                                <!-- CATEGORIA -->

                                <td>

                                    {{ $procedimento->categoria?->nome ?? 'Sem categoria' }}

                                </td>


                                <!-- PREÇO -->

                                <td>

                                    @if($procedimento->preco)

                                        R$ {{ number_format($procedimento->preco, 2, ',', '.') }}

                                    @else

                                        Consultar

                                    @endif

                                </td>


                                <!-- DURAÇÃO -->

                                <td>

                                    {{ $procedimento->duracao_minutos }} minutos

                                </td>


                                <!-- STATUS -->

                                <td>

                                    @if($procedimento->ativo)

                                        <span class="admin-procedimentos-status admin-procedimentos-status-ativo">
                                            Ativo
                                        </span>

                                    @else

                                        <span class="admin-procedimentos-status admin-procedimentos-status-inativo">
                                            Inativo
                                        </span>

                                    @endif

                                </td>


                                <!-- AÇÕES -->

                                <td>

                                    <div class="admin-procedimentos-acoes">

                                        <a
                                            href="{{ route('admin.procedimentos.show', $procedimento) }}"
                                            class="admin-procedimentos-botao admin-procedimentos-botao-ver"
                                        >
                                            Ver
                                        </a>


                                        <a
                                            href="{{ route('admin.procedimentos.edit', $procedimento) }}"
                                            class="admin-procedimentos-botao admin-procedimentos-botao-editar"
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
                                                class="admin-procedimentos-botao admin-procedimentos-botao-excluir"
                                            >
                                                Excluir
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="admin-procedimentos-vazio"
                                >
                                    Nenhum procedimento cadastrado.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            <!-- PAGINAÇÃO -->

            <div class="admin-procedimentos-paginacao">

                {{ $procedimentos->links() }}

            </div>

        </div>

    </main>


    @include('_partials.footer')


    <!-- BOOTSTRAP JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>

</html>

