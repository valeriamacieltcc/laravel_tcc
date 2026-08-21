<title>vitrine</title>
<link rel="stylesheet" href="{{ asset('css/procedimento.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Vitrine</title>


    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

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
        href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap"
        rel="stylesheet"
    >


    
</head>


<body>


@include('_partials.header')


<main class="container-vitrine">


    <div class="topo-vitrine">

        <h1>
            Nossa Vitrine
        </h1>

        <p>
            Conheça nossos produtos disponíveis.
        </p>

    </div>



    @if($vitrine->count() > 0)


        <section class="produtos">


            @foreach($vitrine as $produto)


                <div class="produto-card">


                    @if($produto->imagem)

                        <img
                            src="{{ asset(
                                'storage/' . $produto->imagem
                            ) }}"
                            alt="{{ $produto->nome }}"
                            class="produto-imagem"
                        >

                    @else

                        <div class="sem-imagem">

                            Sem imagem

                        </div>

                    @endif



                    <div class="produto-body">


                        <span class="marca">

                            {{ $produto->marca }}

                        </span>


                        <h3>

                            {{ $produto->nome }}

                        </h3>


                        <p class="descricao">

                            {{ $produto->descricao }}

                        </p>


                        <h2 class="preco">

                            R$
                            {{ number_format(
                                $produto->preco,
                                2,
                                ',',
                                '.'
                            ) }}

                        </h2>



                        <div class="produto-footer">


                            @if($produto->link_contato)

                                <a
                                    href="{{ $produto->link_contato }}"
                                    target="_blank"
                                    class="botao-contato"
                                >
                                    CONTATO
                                </a>


                            @else

                                <a
                                    href="#"
                                    class="botao-contato"
                                >
                                    CONTATO
                                </a>

                            @endif


                        </div>


                    </div>


                </div>


            @endforeach


        </section>


    @else


        <div class="sem-produtos">

            Nenhum produto disponível no momento.

        </div>


    @endif


</main>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>