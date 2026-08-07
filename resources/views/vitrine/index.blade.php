<title>vitrine</title>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

    <div class="titulo-vitrine">
        <h1>NOSSOS PRODUTOS</h1>
    </div>

</section>
<section class="produtos">

@foreach($vitrine as $produto)

<div class="produto-card">

    <img src="{{ asset('imagem/'.$produto->imagem) }}" alt="{{ $produto->nome }}">

    <div class="produto-body">

        <h3>{{ $produto->nome }}</h3>

        <p>{{ $produto->descricao }}</p>

        <h2>R$ {{ number_format($produto->preco, 2, ',', '.') }}</h2>

        <div class="produto-footer">
            <button>CONTATO</button>
        </div>

    </div>

</div>

@endforeach

</section>
<!-- FOOTER -->
<footer class="footer">

<!-- MAPA -->
<div class="footer-map">

    <div class="map-text">
        <h4>VENHA NOS VISITAR</h4>
        <span>Clique para acessar o mapa</span>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.177658334066!2d-47.861492999999996!3d-23.3455773!2m3!1f0!2f0!3f0!2m3!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d8de3415dfb3%3A0xfe48706959ac40f2!2sAlameda%20Lazinho%20de%20P%C3%A1dua%2C%2085%20-%20Nova%20Tatu%C3%AD%2C%20Tatu%C3%AD%20-%20SP%2C%2018278-350!5e0!3m2!1spt-BR!2sbr!4v1779828749353!5m2!1spt-BR!2sbr"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>

</div>
<!-- INFORMAÇÕES -->
<div class="footer-info">

    <h3>
        ALAMEDA LAZINHO DE PÁDUA, Nº85<br>
        NOVA TATUÍ, TATUÍ - SP
    </h3>

    <div class="cart-icon">
        <img src="{{ asset('imagem/whatsapp.png') }}" alt="WhatsApp">
        <p>(15) 99791-8256</p>
    </div>

    <div class="cart-icon">
        <img src="{{ asset('imagem/instagram.png') }}" alt="Instagram">
        <p>@VALERIAMACIEL_ESTETICA</p>
    </div>

</div>

<!-- LOGO -->
<div class="footer-logo">
    <img src="{{ asset('imagem/logo.png') }}" alt="Logo">
</div>

</footer>

<div class="footer-copy">
    <div class="footer-copy-line"></div>

    <p>
        COPYRIGHT 2025 VALERIA MACIEL - TODOS OS DIREITOS RESERVADOS
    </p>
</div>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>