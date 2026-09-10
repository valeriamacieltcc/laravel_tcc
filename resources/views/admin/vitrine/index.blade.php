<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Vitrine | Administração</title>


<!-- FONTES -->

<link rel="preconnect" href="https://fonts.googleapis.com">

<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
>

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
    href="{{ asset('css/style.css') }}"
>

<link
    rel="stylesheet"
    href="{{ asset('css/admin.css') }}"
>


</head>

<body>

@include('admin._partials_admin.header_admin')

<main class="vitrine-detalhes">


<!-- TÍTULO -->

<div class="vitrine-titulo">

    <h1>
        Vitrine
    </h1>

    <p>
        Produtos cadastrados
    </p>

</div>


<!-- AÇÕES ADMIN -->

<div class="vitrine-admin-acoes">

    <a
        href="{{ route('admin.vitrine.create') }}"
        class="vitrine-editar"
    >
        + Cadastrar produto
    </a>

</div>



<!-- MENSAGEM DE SUCESSO -->

@if(session('sucesso'))

    <div class="alert alert-success">

        {{ session('sucesso') }}

    </div>

@endif



<!-- PRODUTOS -->

<div class="vitrine-produtos">


    @forelse($vitrine as $produto)


        <!-- CARD DO PRODUTO -->

        <div class="vitrine-produto-card">


            <!-- IMAGEM -->

            <div class="vitrine-produto-imagem">

                @if($produto->imagem)

                    <img
                        src="{{ asset('storage/' . $produto->imagem) }}"
                        alt="{{ $produto->nome }}"
                    >

                @else

                    <div class="vitrine-sem-imagem">
                        Sem imagem
                    </div>

                @endif

            </div>



            <!-- INFORMAÇÕES -->

            <div class="vitrine-produto-info">


                <!-- NOME -->

                <h2>
                    {{ $produto->nome }}
                </h2>



                <!-- MARCA -->

                @if($produto->marca)

                    <p class="vitrine-marca">
                        {{ $produto->marca }}
                    </p>

                @endif

                @if($produto->categoria)

<p class="vitrine-categoria">
    {{ $produto->categoria }}
</p>

@endif

                <!-- DESCRIÇÃO -->

                @if($produto->descricao)

                    <p class="vitrine-descricao">
                        {{ $produto->descricao }}
                    </p>

                @endif



                <!-- PREÇO -->

                <span class="vitrine-preco">

                    R$

                    {{ number_format(
                        $produto->preco,
                        2,
                        ',',
                        '.'
                    ) }}

                </span>



                <!-- DISPONIBILIDADE -->

                @if($produto->disponivel)

                    <p class="text-success">
                        Disponível
                    </p>

                @else

                    <p class="text-danger">
                        Indisponível
                    </p>

                @endif



                <!-- AÇÕES -->

                <div class="vitrine-acoes">


                    <!-- VER -->

                    <a
                        href="{{ route('admin.vitrine.show', $produto) }}"
                        class="vitrine-comprar"
                    >
                        Ver produto
                    </a>



                    <!-- EDITAR -->

                    <a
                        href="{{ route('admin.vitrine.edit', $produto) }}"
                        class="vitrine-editar"
                    >
                        Editar
                    </a>



                    <!-- EXCLUIR -->

                    <form
                        action="{{ route('admin.vitrine.destroy', $produto) }}"
                        method="POST"
                        style="display: inline;"
                    >

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="vitrine-voltar"
                            onclick="return confirm('Tem certeza que deseja excluir este produto?')"
                        >
                            Excluir
                        </button>

                    </form>


                </div>


            </div>


        </div>


    @empty


        <!-- CASO NÃO TENHA PRODUTOS -->

        <div class="vitrine-sem-produtos">

            <p>
                Nenhum produto cadastrado na vitrine.
            </p>

            <a
                href="{{ route('admin.vitrine.create') }}"
                class="vitrine-comprar"
            >
                Cadastrar produto
            </a>

        </div>


    @endforelse


</div>



<!-- PAGINAÇÃO -->
{{-- PAGINAÇÃO --}}
@if($vitrine->hasPages())

    <div class="admin-paginacao">
        {{ $vitrine->links() }}
    </div>

@endif



</main>

<!-- BOOTSTRAP JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>

@include('admin._partials_admin.footer_admin')

</body>

</html>
