<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Procedimentos & Cuidados</title>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
</head>

<body>


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

    <div class="titulo-procedimento">
        <h1>PROCEDIMENTOS &<br> CUIDADOS</h1>
    </div>

</section>

<!-- CARDS -->

<section class="cards">

    <div class="card-procedimento">
        <img src="https://i.pinimg.com/1200x/e9/30/1b/e9301b3c37268ae7afd20085e2e05d5f.jpg">
        <div class="card-body">
            <h3>LIMPEZA DE PELE</h3>
            <p>Remoção de impurezas e revitalização da pele.</p>
            <button class="btn-procedimento">VER MAIS</button>
        </div>
    </div>

    <div class="card-procedimento">
        <img src="https://i.pinimg.com/736x/21/2d/bd/212dbda496abfdd8d0dbc524ac76fe12.jpg">
        <div class="card-body">
            <h3>DESIGN DE SOBRANCELHA</h3>
            <p>Realce natural.</p>
            <button class="btn-procedimento">VER MAIS</button>
        </div>
    </div>

    <div class="card-procedimento">
        <img src="https://i.pinimg.com/1200x/15/c3/d3/15c3d3f16b94702002465150f19f9434.jpg">
        <div class="card-body">
            <h3>DEPILAÇÃO A CERA</h3>
            <p>Pelos mais finos e menos frequentes.</p>
            <button class="btn-procedimento">VER MAIS</button>
        </div>
    </div>

    <div class="card-procedimento">
        <img src="https://i.pinimg.com/736x/ef/ee/05/efee051a55b3fa90bd0144aa6ae16ff1.jpg">
        <div class="card-body">
            <h3>MASSAGEM</h3>
            <p>Relaxamento e alívio das dores.</p>
            <button class="btn-procedimento">VER MAIS</button>
        </div>
    </div>

    <div class="card-procedimento">
        <img src="https://i.pinimg.com/736x/8b/16/ce/8b16ce6e0c96ffe6d6a5b61f3124313e.jpg">
        <div class="card-body">
            <h3>MANICURE</h3>
            <p>Beleza das unhas das mãos.</p>
            <button class="btn-procedimento">VER MAIS</button>
        </div>
    </div>

    <div class="card-procedimento">
        <img src="https://i.pinimg.com/736x/5a/5a/fa/5a5afa11729ae62a86a9a372c016123c.jpg">
        <div class="card-body">
            <h3>PEDICURE</h3>
            <p>Beleza das unhas dos pés.</p>
            <button class="btn-procedimento">VER MAIS</button>
        </div>
    </div>

    <div class="card-procedimento">
        <img src="https://i.pinimg.com/736x/4f/42/73/4f4273d07b2d94f30792c1286868ab2c.jpg">
        <div class="card-body">
            <h3>TRATAMENTOS CAPILARES</h3>
            <p>Práticas terapêuticas e estéticas.</p>
            <button class="btn-procedimento">VER MAIS</button>
        </div>
    </div>

    <div class="card-procedimento">
        <img src="https://i.pinimg.com/1200x/e5/ab/fc/e5abfc3138b55ba615f8d32c8478e5dd.jpg">
        <div class="card-body">
            <h3>TINTURAS</h3>
            <p>Práticas terapêuticas e estéticas.</p>
            <button class="btn-procedimento">VER MAIS</button>
        </div>
    </div>

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