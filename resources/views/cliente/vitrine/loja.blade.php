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


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            font-family: Arial, sans-serif;
            background: #f6f5e5;
            margin: 0;
        }


        .container-vitrine {
            max-width: 1100px;
            margin: auto;
            padding: 40px 30px;
        }


        .topo-vitrine {
            text-align: center;
            margin-bottom: 35px;
        }


        .topo-vitrine h1 {
            font-family: 'Playfair Display SC', serif;
            color: #2c7771;
            font-size: 38px;
            margin-bottom: 10px;
        }


        .topo-vitrine p {
            color: #555;
            font-size: 16px;
        }


        .produtos {
            display: grid;

            grid-template-columns:
                repeat(
                    auto-fit,
                    minmax(240px, 1fr)
                );

            gap: 25px;
        }


        .produto-card {
            background: white;

            border-radius: 8px;

            overflow: hidden;

            box-shadow:
                0 3px 10px
                rgba(0, 0, 0, 0.10);

            display: flex;
            flex-direction: column;

            transition: 0.2s;
        }


        .produto-card:hover {
            transform: translateY(-4px);

            box-shadow:
                0 6px 16px
                rgba(0, 0, 0, 0.15);
        }


        .produto-imagem {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }


        .sem-imagem {
            height: 260px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #eeeeee;

            color: #777;
        }


        .produto-body {
            padding: 20px;

            display: flex;
            flex-direction: column;

            flex: 1;
        }


        .marca {
            color: #2c7771;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;

            margin-bottom: 5px;
        }


        .produto-body h3 {
            margin: 5px 0 12px;

            color: #333;

            font-size: 21px;
        }


        .descricao {
            color: #666;

            line-height: 1.5;

            flex: 1;
        }


        .preco {
            color: #2c7771;

            font-size: 25px;

            margin: 18px 0;
        }


        .produto-footer {
            margin-top: auto;
        }


        .botao-contato {
            display: block;

            width: 100%;

            background: #2c7771;

            color: white;

            text-align: center;

            padding: 12px;

            border-radius: 5px;

            text-decoration: none;

            transition: 0.2s;
        }


        .botao-contato:hover {
            background: #235f5a;
        }


        .sem-produtos {
            background: white;

            padding: 30px;

            text-align: center;

            border-radius: 8px;

            color: #666;
        }


        @media (max-width: 600px) {

            .container-vitrine {
                padding: 25px 15px;
            }


            .topo-vitrine h1 {
                font-size: 30px;
            }

        }

    </style>

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