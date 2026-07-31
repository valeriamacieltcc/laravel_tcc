<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $procedimento['titulo'] }}</title>

    <link rel="stylesheet" href="{{ asset('css/procedimento.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    @include('_partials.header')


    <main class="procedimento-container">

<section class="procedimento-conteudo">

    <h1 class="procedimento-titulo">

        {{ $procedimento['titulo'] }}

    </h1>

    <p class="procedimento-texto">

        {{ $procedimento['descricao'] }}

    </p>

    <a href="#" class="btn-agendar">

        AGENDAR PROCEDIMENTO

    </a>

</section>

<section class="galeria">

    <h2>

        ANTES E DEPOIS DO PROCEDIMENTO

    </h2>

    <div class="galeria-imagens">

        <img src="{{ asset($procedimento['imagem1']) }}">

        <img src="{{ asset($procedimento['imagem2']) }}">

        <img src="{{ asset($procedimento['imagem3']) }}">

    </div>

</section>

</main>

    @include('_partials.footer')

</body>

</html>