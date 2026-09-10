<title>vitrine</title>
<link rel="stylesheet" href="{{ asset('css/procedimento.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

    <div class="vitrine-filtros">

<form action="{{ route('vitrine.index') }}" method="GET" class="form-pesquisa">

    <div class="campo-pesquisa">
        <input
            type="text"
            name="pesquisa"
            value="{{ $pesquisa }}"
            placeholder="Pesquisar produto..."
        >

        <button type="submit">
            🔍
        </button>
    </div>

    @if($categoria && $categoria !== 'Todos')
        <input
            type="hidden"
            name="categoria"
            value="{{ $categoria }}"
        >
    @endif

</form>


<div class="categorias">

    @foreach($categorias as $item)

        <a
            href="{{ route('vitrine.index', [
                'categoria' => $item === 'Todos' ? null : $item,
                'pesquisa' => $pesquisa
            ]) }}"
            class="categoria-btn
                {{ (!$categoria && $item === 'Todos') || $categoria === $item ? 'ativo' : '' }}"
        >
            @switch($item)

                @case('Todos')
                    
                    @break

                @case('Cabelo')
                    
                    @break

                @case('Maquiagem')
                    
                    @break

                @case('Perfumaria')
                    
                    @break

                @case('Skincare')
                    
                    @break

                @case('Unhas')
                    
                    @break

            @endswitch

            {{ $item }}

        </a>

    @endforeach

</div>

</div>

    @if($vitrine->count() > 0)


        <section class="produtos">


            @foreach($vitrine as $produto)


                <div class="produto-card">


                    @if($produto->imagem)

                    <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">

                    @else

                    <div class="sem-produtos">

@if($pesquisa || ($categoria && $categoria !== 'Todos'))

    Nenhum produto encontrado para sua pesquisa.

    <br>

    <a href="{{ route('vitrine.index') }}">
        Ver todos os produtos
    </a>

@else

    Nenhum produto disponível no momento.

@endif

</div>
                    @endif



                    <div class="produto-body">


                        <span class="marca">

                            {{ $produto->marca }}

                        </span>

                        @if($produto->categoria)

<span class="categoria-produto">

    {{ $produto->categoria }}

</span>

@endif
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

    <div class="paginacao">
    {{ $vitrine->links() }}
</div>
</main>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>