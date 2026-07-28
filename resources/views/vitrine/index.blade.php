<title>vitrine</title>
<link rel="stylesheet" href="{{ asset('css/procedimento.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

<nav class="navbar">

<div class="cart-icon">

<img src="{{ asset('imagem/menu.png') }}" alt="Menu">

</div>

    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="../procedimento/index">PROCEDIMENTOS</a></li>
        <li><a href="#">AGENDAR</a></li>
        <li><a href="../vitrine/index">LOJA</a></li>
        <li><a href="#">BLOG</a></li>
    </ul>

    <div class="cart-icon">

            <img src="{{ asset('imagem/bolsa-de-compras.png') }}" alt="Carrinho">

        </div>

</nav>
<!-- TOPO -->
<section class="logo-section">

    <div class="logo">
        <img class="logo-icon"
            src="{{ asset('imagem/flor-de-lotus.png') }}"
            alt="Flor">

        Valéria Maciel

        <small>ESTÉTICA</small>
    </div>

    <div class="titulo">
        <h1>NOSSOS PRODUTOS</h1>
    </div>

</section>
<section class="produtos">

@foreach($produtos as $produto)

<div class="produto-card">

    <img src="{{ asset('imagem/'.$produto->imagem) }}" alt="{{ $produto->nome }}">

    <div class="produto-body">

        <h3>{{ $produto->nome }}</h3>

        <p>{{ $produto->descricao }}</p>

        <h2>R$ {{ number_format($produto->preco,2,',','.') }}</h2>

        <div class="produto-footer">

            <button>CONTATO</button>

        </div>

    </div>

</div>

@endforeach

</section>