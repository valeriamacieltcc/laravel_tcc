<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Vitrine | Admin</title>

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
    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

</head>


<body>
@include('admin._partials_admin.header_admin')
    <!-- =====================================================
         CONTEÚDO
         ===================================================== -->

    <main class="vitrine-page">

        <div class="vitrine-container">


            <!-- CABEÇALHO -->

            <div class="vitrine-header">

                <div>

                    <h1>
                        Vitrine
                    </h1>

                    <p>
                        Gerencie os produtos disponíveis na loja.
                    </p>

                </div>


                <a
                    href="{{ route('admin.vitrine.create') }}"
                    class="btn-vitrine btn-novo"
                >

                    Novo produto

                </a>

            </div>


            <!-- =================================================
                 MENSAGENS
                 ================================================= -->

            @if(session('sucesso'))

                <div class="alerta alerta-sucesso">

                    <span class="alerta-icone">
                        ✓
                    </span>

                    <span>
                        {{ session('sucesso') }}
                    </span>

                </div>

            @endif


            @if(session('erro'))

                <div class="alerta alerta-erro">

                    <span class="alerta-icone">
                        !
                    </span>

                    <span>
                        {{ session('erro') }}
                    </span>

                </div>

            @endif


            <!-- =================================================
                 TABELA
                 ================================================= -->

            <div class="vitrine-card">

                <div class="tabela-wrapper">

                    <table class="tabela-vitrine">

                        <thead>

                            <tr>

                                <th class="coluna-imagem">
                                    Imagem
                                </th>

                                <th>
                                    Nome
                                </th>

                                <th>
                                    Marca
                                </th>

                                <th>
                                    Preço
                                </th>

                                <th>
                                    Status
                                </th>

                                <th class="coluna-acoes">
                                    Ações
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($vitrine as $produto)

                                <tr>

                                    <!-- IMAGEM -->

                                    <td>

                                        @if($produto->imagem)

                                            <img
                                                src="{{ asset('storage/' . $produto->imagem) }}"
                                                class="produto-imagem"
                                                alt="{{ $produto->nome }}"
                                            >

                                        @else

                                            <div class="sem-imagem">

                                                Sem imagem

                                            </div>

                                        @endif

                                    </td>


                                    <!-- NOME -->

                                    <td>

                                        <span class="produto-nome">

                                            {{ $produto->nome }}

                                        </span>

                                    </td>


                                    <!-- MARCA -->

                                    <td>

                                        <span class="produto-marca">

                                            {{ $produto->marca ?? 'Não informada' }}

                                        </span>

                                    </td>


                                    <!-- PREÇO -->

                                    <td>

                                        <span class="produto-preco">

                                            R$
                                            {{ number_format(
                                                $produto->preco,
                                                2,
                                                ',',
                                                '.'
                                            ) }}

                                        </span>

                                    </td>


                                    <!-- STATUS -->

                                    <td>

                                        @if($produto->disponivel)

                                            <span class="status disponivel">

                                                <span class="status-ponto"></span>

                                                Disponível

                                            </span>

                                        @else

                                            <span class="status indisponivel">

                                                <span class="status-ponto"></span>

                                                Indisponível

                                            </span>

                                        @endif

                                    </td>


                                    <!-- AÇÕES -->

                                    <td>

                                        <div class="acoes">

                                            <!-- VER -->

                                            <a
                                                href="{{ route(
                                                    'admin.vitrine.show',
                                                    $produto
                                                ) }}"
                                                class="btn-acao btn-ver"
                                            >

                                                Ver

                                            </a>


                                            <!-- EDITAR -->

                                            <a
                                                href="{{ route(
                                                    'admin.vitrine.edit',
                                                    $produto
                                                ) }}"
                                                class="btn-acao btn-editar"
                                            >

                                                Editar

                                            </a>


                                            <!-- EXCLUIR -->

                                            <form
                                                action="{{ route(
                                                    'admin.vitrine.destroy',
                                                    $produto
                                                ) }}"
                                                method="POST"
                                                onsubmit="return confirm('Deseja excluir este produto?')"
                                            >

                                                @csrf

                                                @method('DELETE')


                                                <button
                                                    type="submit"
                                                    class="btn-acao btn-excluir"
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
                                        colspan="6"
                                        class="tabela-vazia"
                                    >

                                        <div class="vazia-conteudo">

                                            <span class="vazia-icone">
                                                🛍
                                            </span>

                                            <strong>
                                                Nenhum produto cadastrado
                                            </strong>

                                            <p>
                                                Adicione um produto para começar a montar sua vitrine.
                                            </p>

                                            <a
                                                href="{{ route('admin.vitrine.create') }}"
                                                class="btn-vitrine btn-novo"
                                            >
                                                Novo produto
                                            </a>

                                        </div>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>


                <!-- =================================================
                     PAGINAÇÃO
                     ================================================= -->

                @if($vitrine->hasPages())

                    <div class="paginacao">

                        {{ $vitrine->links() }}

                    </div>

                @endif

            </div>

        </div>

    </main>


    <!-- BOOTSTRAP JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

    @include('admin._partials_admin.footer_admin')

</body>

</html>

