<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>{{ $vitrine->nome }} | Vitrine</title>


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
            Visualização do produto
        </p>

    </div>



    <!-- CARD -->

    <div class="vitrine-produto-card">


        <!-- IMAGEM -->

        <div class="vitrine-produto-imagem">

            @if($vitrine->imagem)

                <img
                    src="{{ asset('storage/' . $vitrine->imagem) }}"
                    alt="{{ $vitrine->nome }}"
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
                {{ $vitrine->nome }}
            </h2>



            <!-- MARCA -->

            @if($vitrine->marca)

                <p class="vitrine-marca">
                    {{ $vitrine->marca }}
                </p>

            @endif



            <!-- DESCRIÇÃO -->

            @if($vitrine->descricao)

                <p class="vitrine-descricao">
                    {{ $vitrine->descricao }}
                </p>

            @endif



            <!-- PREÇO -->

            <span class="vitrine-preco">

                R$

                {{ number_format(
                    $vitrine->preco,
                    2,
                    ',',
                    '.'
                ) }}

            </span>



            <!-- AÇÕES -->

            <div class="vitrine-acoes">


                @if($vitrine->link_contato)

                    <a
                        href="{{ $vitrine->link_contato }}"
                        target="_blank"
                        class="vitrine-comprar"
                    >

                        <span class="icone-sacola">
                            ♡
                        </span>

                        COMPRAR

                    </a>

                @endif


            </div>


        </div>


    </div>



    <!-- AÇÕES ADMIN -->

    <div class="vitrine-admin-acoes">

        <a
            href="{{ route('admin.vitrine.edit', $vitrine) }}"
            class="vitrine-editar"
        >
            Editar
        </a>

        <a
            href="{{ route('admin.vitrine.index') }}"
            class="vitrine-voltar"
        >
            Voltar
        </a>

    </div>


</main>



<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


@include('admin._partials_admin.footer_admin')


</body>

</html>