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
        <li><a href="#">PROCEDIMENTOS</a></li>
        <li><a href="#">AGENDAR</a></li>
        <li><a href="#">LOJA</a></li>
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

    @for($i = 0; $i < 8; $i++)

    <div class="produto-card">

        <img src="{{ asset('imagem/lily.png') }}" alt="Kit Lily">

        <div class="produto-body">

            <h3>KIT LILY</h3>

            <p>florais intensas e fixação alta</p>

            <h2>R$00,00</h2>

            <div class="produto-footer">

                <img class="sacola"
                    src="{{ asset('imagem/bolsa.png') }}"
                    alt="sacola">

                <button>
                    COMPRAR
                </button>

            </div>

        </div>

    </div>

    @endfor

</section>